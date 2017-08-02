<?php

$dictionary['Lead']['fields']['related_product_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'related_product_name',
    'vname'     => 'LEAD RELATE VNAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'link'      => 'related_product',
    'table'     => 'products',
    'isnull'    => 'true',
    'module'    => 'Products',
    );

    $dictionary['Lead']['fields']['related_product_id'] = array(
        'name'              => 'related_product_id',
        'rname'             => 'id',
        'vname'             => 'LEAD ID VNAME',
        'type'              => 'id',
        'source'    => 'non-db',
        'table'             => 'products',
        'isnull'            => 'true',
        'module'            => 'Products',
        'dbType'            => 'id',
        'reportable'        => false,
        'massupdate'        => false,
        'duplicate_merge'   => 'disabled',
        );


$dictionary['Lead']['fields']['related_product'] = array(
  	'name'          => 'related_product',
    'type'          => 'link',
    'relationship'  => 'product_related_lead',
    'module'        => 'Products',
    'bean_name'     => 'Product',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );

?>
