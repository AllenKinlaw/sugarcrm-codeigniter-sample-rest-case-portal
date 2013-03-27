sugarcrm-codeigniter-sample-rest-case-portal
============================================

==============
   SugarCRM
==============

Make sure you have the "Accounts" module in SugarCRM as not required. How?
1) In config_override.php add $sugar_config['require_accounts'] = false;
2) On the Admin area runa "Quick Repair and Rebuild"

Then install the module (crm.fakehosting.com.zip) from your SugarCRM Module Loader.

The module will replace the current "Type" field options on Cases with the options "Support" and "Announcement"
The module will also create a new custom fields "Customer Number" in Contacts and add it to the layouts 


=================
   CodeIgniter
=================

Installation
- Clone Codeigniter-Bootstrap (https://github.com/sjlu/CodeIgniter-Bootstrap) that contains already Codeigniter v2.1.3
- Clone my Codeigniter code inside "applications/portal"
- Edit the main index.php, changing $application_folder to: $application_folder = 'application/portal';
- Then edit application/portal/controller/main.php with your SugarCRM url, username and password


NB: My code includes already the REST wrapper by Asa Kusuma "sugar_rest.php" (https://github.com/asakusuma/SugarCRM-REST-API-Wrapper-Class)
