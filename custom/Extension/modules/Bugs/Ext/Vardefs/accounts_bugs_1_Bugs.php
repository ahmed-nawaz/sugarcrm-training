<?php
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
