<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/accounts_bugs_1_Accounts.php

// created: 2017-07-25 16:39:54
$dictionary["Account"]["fields"]["accounts_bugs_1"] = array (
  'name' => 'accounts_bugs_1',
  'type' => 'link',
  'relationship' => 'accounts_bugs_1',
  'source' => 'non-db',
  'module' => 'Bugs',
  'bean_name' => 'Bug',
  'vname' => 'LBL_ACCOUNTS_BUGS_1_FROM_BUGS_TITLE',
  'id_name' => 'accounts_bugs_1bugs_idb',
);
$dictionary["Account"]["fields"]["accounts_bugs_1_name"] = array (
  'name' => 'accounts_bugs_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BUGS_1_FROM_BUGS_TITLE',
  'save' => true,
  'id_name' => 'accounts_bugs_1bugs_idb',
  'link' => 'accounts_bugs_1',
  'table' => 'bugs',
  'module' => 'Bugs',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["accounts_bugs_1bugs_idb"] = array (
  'name' => 'accounts_bugs_1bugs_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BUGS_1_FROM_BUGS_TITLE_ID',
  'id_name' => 'accounts_bugs_1bugs_idb',
  'link' => 'accounts_bugs_1',
  'table' => 'bugs',
  'module' => 'Bugs',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/accounts_prospects_1_Accounts.php

// created: 2017-07-26 10:21:44
$dictionary["Account"]["fields"]["accounts_prospects_1"] = array (
  'name' => 'accounts_prospects_1',
  'type' => 'link',
  'relationship' => 'accounts_prospects_1',
  'source' => 'non-db',
  'module' => 'Prospects',
  'bean_name' => 'Prospect',
  'vname' => 'LBL_ACCOUNTS_PROSPECTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_prospects_1accounts_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/new_vardef.php


$dictionary['Account']['fields']['name']['required'] = false;


?>
