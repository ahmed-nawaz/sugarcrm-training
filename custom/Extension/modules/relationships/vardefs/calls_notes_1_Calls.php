<?php
// created: 2017-07-25 16:39:54
$dictionary["Call"]["fields"]["calls_notes_1"] = array (
  'name' => 'calls_notes_1',
  'type' => 'link',
  'relationship' => 'calls_notes_1',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_CALLS_NOTES_1_FROM_NOTES_TITLE',
  'id_name' => 'calls_notes_1notes_idb',
);
$dictionary["Call"]["fields"]["calls_notes_1_name"] = array (
  'name' => 'calls_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CALLS_NOTES_1_FROM_NOTES_TITLE',
  'save' => true,
  'id_name' => 'calls_notes_1notes_idb',
  'link' => 'calls_notes_1',
  'table' => 'notes',
  'module' => 'Notes',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["calls_notes_1notes_idb"] = array (
  'name' => 'calls_notes_1notes_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CALSS_NOTES_1_FROM_NOTES_TITLE_ID',
  'id_name' => 'accounts_notes_1notes_idb',
  'link' => 'calls_notes_1',
  'table' => 'notes',
  'module' => 'Notes',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
