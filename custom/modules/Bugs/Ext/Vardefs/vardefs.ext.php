<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Bugs/Ext/Vardefs/accounts_bugs_1_Bugs.php

// created: 2017-07-25 16:39:54
$dictionary["Bug"]["fields"]["accounts_bugs_1"] = array (
  'name' => 'accounts_bugs_1',
  'type' => 'link',
  'relationship' => 'accounts_bugs_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_BUGS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_bugs_1accounts_ida',
);
$dictionary["Bug"]["fields"]["accounts_bugs_1_name"] = array (
  'name' => 'accounts_bugs_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BUGS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_bugs_1accounts_ida',
  'link' => 'accounts_bugs_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Bug"]["fields"]["accounts_bugs_1accounts_ida"] = array (
  'name' => 'accounts_bugs_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BUGS_1_FROM_ACCOUNTS_TITLE_ID',
  'id_name' => 'accounts_bugs_1accounts_ida',
  'link' => 'accounts_bugs_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Bugs/Ext/Vardefs/related_lead_name.php


$dictionary['Bug']['fields']['related_lead_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'related_lead_name',
    'vname'     => 'LBL_RELATED_LEAD',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'related_lead_id',
    'join_name' => 'related_leads',
    'link'      => 'related_leads',
    'table'     => 'leads',
    'isnull'    => 'true',
    'module'    => 'Leads',
    );

$dictionary['Bug']['fields']['related_lead_id'] = array(
    'name'              => 'related_lead_id',
    'rname'             => 'id',
    'vname'             => 'LBL_RELATED_LEAD_ID',
    'type'              => 'id',
    'table'             => 'leads',
    'isnull'            => 'true',
    'module'            => 'Leads',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );

$dictionary['Bug']['fields']['related_leads'] = array(
  	'name'          => 'related_leads',
    'type'          => 'link',
    'relationship'  => 'bugs_related_leads',
    'module'        => 'Leads',
    'bean_name'     => 'Lead',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );

$dictionary['Bug']['relationships']['bugs_related_leads'] = array(
    'lhs_module'        => 'Bugs',
    'lhs_table'         => 'bugs',
    'lhs_key'           => 'related_lead_id',
    'rhs_module'		=> 'Leads',
    'rhs_table'			=> 'leads',
    'rhs_key'			=> 'id',

    'relationship_type'	=> 'one-to-many',
    );


?>
