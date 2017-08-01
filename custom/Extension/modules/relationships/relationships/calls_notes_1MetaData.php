<?php
// created: 2017-07-25 16:39:54
$dictionary["calls_notes_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' =>
  array (
    'calls_notes_1' =>
    array (
      'lhs_module' => 'Calls',
      'lhs_table' => 'calls',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'calls_notes_1_c',
      'join_key_lhs' => 'calls_notes_1calls_ida',
      'join_key_rhs' => 'calls_notes_1calls_idb',
    ),
  ),
  'table' => 'calls_notes_1_c',
  'fields' =>
  array (
    'id' =>
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' =>
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' =>
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'calls_notes_1calls_ida' =>
    array (
      'name' => 'calls_notes_1calls_ida',
      'type' => 'id',
    ),
    'calls_notes_1notes_idb' =>
    array (
      'name' => 'calls_notes_1notes_idb',
      'type' => 'id',
    ),
  ),
  'indices' =>
  array (
    0 =>
    array (
      'name' => 'calls_notes_1spk',
      'type' => 'primary',
      'fields' =>
      array (
        0 => 'id',
      ),
    ),
    1 =>
    array (
      'name' => 'calls_notes_1_ida1',
      'type' => 'index',
      'fields' =>
      array (
        0 => 'calls_notes_1calls_ida',
      ),
    ),
    2 =>
    array (
      'name' => 'calls_notes_1_idb2',
      'type' => 'index',
      'fields' =>
      array (
        0 => 'calls_notes_1notes_idb',
      ),
    ),
  ),
);
