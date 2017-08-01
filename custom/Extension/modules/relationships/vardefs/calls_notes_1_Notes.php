<?php
// created: 2017-07-25 16:39:54
$dictionary["Note"]["fields"]["calls_notes_1"] = array (
  'name' => 'calls_notes_1',
  'type' => 'link',
  'relationship' => 'calls_notes_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_CALLS_NOTES_1_FROM_CALLS_TITLE',
  'id_name' => 'calls_notes_1calls_ida',
);
$dictionary["Note"]["fields"]["calls_notes_1_name"] = array (
  'name' => 'calls_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CALLS_NOTES_1_FROM_CALLS_TITLE',
  'save' => true,
  'id_name' => 'calls_notes_1calls_ida',
  'link' => 'calls_notes_1',
  'table' => 'calls',
  'module' => 'Calls',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["calls_notes_1calls_ida"] = array (
  'name' => 'calls_notes_1calls_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CALLS_NOTES_1_FROM_CALLS_TITLE_ID',
  'id_name' => 'calls_notes_1calls_ida',
  'link' => 'calls_notes_1',
  'table' => 'calls',
  'module' => 'Calls',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
