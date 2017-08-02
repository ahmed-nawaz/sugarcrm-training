<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Calls/Ext/Vardefs/meetings_calls_1_Calls.php

// created: 2017-07-26 10:21:44
$dictionary["Call"]["fields"]["meetings_calls_1"] = array (
  'name' => 'meetings_calls_1',
  'type' => 'link',
  'relationship' => 'meetings_calls_1',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'side' => 'right',
  'vname' => 'LBL_MEETINGS_CALLS_1_FROM_CALLS_TITLE',
  'id_name' => 'meetings_calls_1meetings_ida',
  'link-type' => 'one',
);
$dictionary["Call"]["fields"]["meetings_calls_1_name"] = array (
  'name' => 'meetings_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MEETINGS_CALLS_1_FROM_MEETINGS_TITLE',
  'save' => true,
  'id_name' => 'meetings_calls_1meetings_ida',
  'link' => 'meetings_calls_1',
  'table' => 'meetings',
  'module' => 'Meetings',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["meetings_calls_1meetings_ida"] = array (
  'name' => 'meetings_calls_1meetings_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MEETINGS_CALLS_1_FROM_CALLS_TITLE_ID',
  'id_name' => 'meetings_calls_1meetings_ida',
  'link' => 'meetings_calls_1',
  'table' => 'meetings',
  'module' => 'Meetings',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
