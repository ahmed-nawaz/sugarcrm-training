<?php

$dictionary['Product']['fields']['related_lead_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'related_lead_name',
    'vname'     => 'PRODUCT RELATE VNAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'related_lead_id',
    'join_name' => 'related_lead',
    'link'      => 'related_lead',
    'table'     => 'leads',
    'isnull'    => 'true',
    'module'    => 'Leads',
    );

$dictionary['Product']['fields']['related_lead_id'] = array(
    'name'              => 'related_lead_id',
    'rname'             => 'id',
    'vname'             => 'PRODUCT ID VNAME',
    'type'              => 'id',
    'table'             => 'leads',
    'isnull'            => 'true',
    'module'            => 'Leads',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );

$dictionary['Product']['fields']['related_lead'] = array(
  	'name'          => 'related_lead',
    'type'          => 'link',
    'relationship'  => 'product_related_lead',
    'module'        => 'Leads',
    'bean_name'     => 'Lead',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );

$dictionary['Product']['relationships']['product_related_lead'] = array(
    'lhs_module'        => 'Products',
    'lhs_table'         => 'products',
    'lhs_key'           => 'related_lead_id',
    'rhs_module'		=> 'Leads',
    'rhs_table'			=> 'leads',
    'rhs_key'			=> 'id',

    'relationship_type'	=> 'one-to-one',
    );

?>
