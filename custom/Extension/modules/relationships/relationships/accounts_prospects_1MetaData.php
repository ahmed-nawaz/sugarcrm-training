<?php
// created: 2017-07-26 10:21:44
$dictionary["accounts_prospects_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_prospects_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Prospects',
      'rhs_table' => 'prospects',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_prospects_1_c',
      'join_key_lhs' => 'accounts_prospects_1accounts_ida',
      'join_key_rhs' => 'accounts_prospects_1prospects_idb',
    ),
  ),
  'table' => 'accounts_prospects_1_c',
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
    'accounts_prospects_1accounts_ida' => 
    array (
      'name' => 'accounts_prospects_1accounts_ida',
      'type' => 'id',
    ),
    'accounts_prospects_1prospects_idb' => 
    array (
      'name' => 'accounts_prospects_1prospects_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_prospects_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_prospects_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_prospects_1accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_prospects_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_prospects_1prospects_idb',
      ),
    ),
  ),
);