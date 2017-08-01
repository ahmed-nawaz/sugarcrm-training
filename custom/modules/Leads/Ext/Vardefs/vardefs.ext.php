<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/leads_cases_1_Leads.php

// created: 2017-07-26 19:33:32
$dictionary["Lead"]["fields"]["leads_cases_1"] = array (
  'name' => 'leads_cases_1',
  'type' => 'link',
  'relationship' => 'leads_cases_1',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_LEADS_CASES_1_FROM_CASES_TITLE',
  'id_name' => 'leads_cases_1cases_idb',
);

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/related_bugs.php

$dictionary['Lead']['fields']['related_bugs'] = array(
    'name' => 'related_bugs',
    'type' => 'link',
    'relationship' => 'bugs_related_leads',
    'module' => 'Bugs',
    'bean_name' => 'Bug',
    'source' => 'non-db',
    'vname' => 'LBL_RELATED_BUGS',
    );


?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/related_product.php


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
/*

'latest_document_revision_link' =>
array(
    'name' => 'latest_document_revision_link',
    'type' => 'link',
    'relationship' => 'latest_document_revision',
    'source' => 'non-db',
    'vname' => 'LBL_LATEST_REVISION',
),
*/

?>
