<?php if (!defined('BASEPATH')) die();

// Enrico Simonetti
// 2013-03-16
// http://enricosimonetti.com

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->library('sugar_rest');
		
		// Sugar_REST($rest_url=null,$username=null,$password=null,$md5_password=true)
		$this->sugar_rest->Sugar_REST('http://crm.fakehosting.com/service/v4/rest.php', 'admin', 'password');
	}

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('home');
		$this->load->view('include/footer');
	}

	public function status()
	{
		$this->load->view('include/header');
	
		// get 10 cases max, of type Announcement, with open status 	
		$cases = $this->sugar_rest->get('Cases',
			array(
				'name',
				'description',
			),
			array(
				'limit' => '10',
				'where' => "cases.type = 'Announcement' and (cases.status = 'New' or cases.status = 'Assigned')",
				'order_by' => 'cases.date_entered desc',
			)
		);

		$this->load->view('status', array('cases' => $cases));
		$this->load->view('include/footer');
	}

	public function support()
	{	
		$this->load->view('include/header');

		$this->load->library('form_validation');

		$this->form_validation->set_rules('number', 'Customer Number (eg: PLATINUM99999)', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('name', 'Ticket Summary', 'trim|required');
		$this->form_validation->set_rules('description', 'Detailed explanation', 'trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('support');
		}
		else
		{
			// do the rest calls here

			// see if I can find the Contact with this customer number
			$number = $this->input->get_post('number', true);

			// try to find the contact	
			$contact = $this->sugar_rest->get('Contacts',
				array(
					'id',
				),
				array(
					'limit' => '1',
					'where' => "contacts_cstm.cnumber_c = '".$number."'",
					'order_by' => 'contacts.date_modified desc',
				)
			);

			if(!empty($contact) && !empty($contact['0']) && !empty($contact['0']['id']))
			{
				// the contact is valid
				$contact_id = $contact['0']['id'];	

				$name = $this->input->get_post('name', true);
				$description = $this->input->get_post('description', true);

				$return_value = $this->sugar_rest->set('Cases',
					array(
						'priority' => 'P2',
						'status' => 'New',
						'type' => 'Support',	
						'name' => $name,
						'description' => $description,
					)
				);
				
				if(!empty($return_value) && !empty($return_value['id']))
				{
					// relate the case with the contact
					$case_id = $return_value['id'];
					$this->sugar_rest->set_relationship('Cases', $case_id, 'contacts', $contact_id);

					// now we need to retrieve the case number... we just have the record id
					$case_retrieved = $this->sugar_rest->get('Cases',
                                		array(
                                        		'case_number',
                                		),
						array(
							'where' => "cases.id = '".$case_id."'",
						)
                        		);

					if(!empty($case_retrieved) && !empty($case_retrieved['0']) && !empty($case_retrieved['0']['case_number']))
					{
						$case_number = $case_retrieved['0']['case_number'];
					}
				}
		
				redirect('main/supportsuccess/'.$case_number);
			}
			else
			{
				// not found
				$this->load->view('supportfailed', array('number' => $number));
			}
		}	

                $this->load->view('include/footer');
	}	
	
	public function supportsuccess($case_number = '')
	{
		if(!empty($case_number))
		{
			$this->load->view('include/header');
			$this->load->view('supportsuccess', array('case_number' => $case_number));
			$this->load->view('include/footer');
		}
	}
}
