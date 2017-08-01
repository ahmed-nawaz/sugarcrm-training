<?php
// created: 2017-07-26 10:21:44
$dictionary["meetings_calls_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' =>
  array (
    'meetings_calls_1' =>
    array (
      'lhs_module' => 'Meetings',
      'lhs_table' => 'meetings',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'meetings_calls_1_c',
      'join_key_lhs' => 'meetings_calls_1meetings_ida',
      'join_key_rhs' => 'meetings_calls_1calls_idb',
    ),
  ),
  'table' => 'meetings_calls_1_c',
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
    'meetings_calls_1meetings_ida' =>
    array (
      'name' => 'meetings_calls_1meetings_ida',
      'type' => 'id',
    ),
    'meetings_calls_1calls_idb' =>
    array (
      'name' => 'meetings_calls_1calls_idb',
      'type' => 'id',
    ),
  ),
  'indices' =>
  array (
    0 =>
    array (
      'name' => 'meetings_calls_1spk',
      'type' => 'primary',
      'fields' =>
      array (
        0 => 'id',
      ),
    ),
    1 =>
    array (
      'name' => 'meetings_calls_1_ida1',
      'type' => 'index',
      'fields' =>
      array (
        0 => 'meetings_calls_1meetings_ida',
      ),
    ),
    2 =>
    array (
      'name' => 'meetings_calls_1_alt',
      'type' => 'alternate_key',
      'fields' =>
      array (
        0 => 'meetings_calls_1calls_idb',
      ),
    ),
  ),
);
