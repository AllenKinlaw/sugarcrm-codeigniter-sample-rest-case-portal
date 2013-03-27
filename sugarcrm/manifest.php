<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/


$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '6.5.*',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => '',
  'author' => 'Enrico Simonetti',
  'description' => 'Simple Interface changes to allow the sample REST portal to work',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'crm.fakehosting.com',
  'published_date' => '2013-03-20',
  'type' => 'module',
  'version' => 0.1,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'crm.fakehosting.com',
  'language' => 
  array (
    array (
      'from' => '<basepath>/SugarModules/include/language/en_us.crm.fakehosting.com.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    array (
      'from' => '<basepath>/SugarModules/modules/Contacts/language/en_us.lang.php',
      'to_module' => 'Contacts',
      'language' => 'en_us',
    ),
  ),
  'custom_fields' => 
  array (
    'Contactscnumber_c' => 
    array (
      'id' => 'Contactscnumber_c',
      'name' => 'cnumber_c',
      'label' => 'LBL_CNUMBER',
      'comments' => '',
      'help' => '',
      'module' => 'Contacts',
      'type' => 'varchar',
      'max_size' => '255',
      'require_option' => '1',
      'default_value' => '',
      'date_modified' => '2013-03-17 07:31:04',
      'deleted' => '0',
      'audited' => '1',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
  ),
  'layoutfields' =>
  array (
    array (
      'additional_fields' =>
      array (
        'Contacts' => 'cnumber_c',
      ),
    ),
  ),
);
