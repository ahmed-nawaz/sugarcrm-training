<?php
// created: 2017-07-26 10:21:44
$dictionary["Prospect"]["fields"]["accounts_prospects_1"] = array (
  'name' => 'accounts_prospects_1',
  'type' => 'link',
  'relationship' => 'accounts_prospects_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PROSPECTS_1_FROM_PROSPECTS_TITLE',
  'id_name' => 'accounts_prospects_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["Prospect"]["fields"]["accounts_prospects_1_name"] = array (
  'name' => 'accounts_prospects_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PROSPECTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_prospects_1accounts_ida',
  'link' => 'accounts_prospects_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Prospect"]["fields"]["accounts_prospects_1accounts_ida"] = array (
  'name' => 'accounts_prospects_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PROSPECTS_1_FROM_PROSPECTS_TITLE_ID',
  'id_name' => 'accounts_prospects_1accounts_ida',
  'link' => 'accounts_prospects_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
