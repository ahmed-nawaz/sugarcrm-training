<?php
// created: 2017-07-25 16:39:54
$dictionary["accounts_bugs_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_bugs_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Bugs',
      'rhs_table' => 'bugs',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_bugs_1_c',
      'join_key_lhs' => 'accounts_bugs_1accounts_ida',
      'join_key_rhs' => 'accounts_bugs_1bugs_idb',
    ),
  ),
  'table' => 'accounts_bugs_1_c',
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
    'accounts_bugs_1accounts_ida' => 
    array (
      'name' => 'accounts_bugs_1accounts_ida',
      'type' => 'id',
    ),
    'accounts_bugs_1bugs_idb' => 
    array (
      'name' => 'accounts_bugs_1bugs_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_bugs_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_bugs_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_bugs_1accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_bugs_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_bugs_1bugs_idb',
      ),
    ),
  ),
);