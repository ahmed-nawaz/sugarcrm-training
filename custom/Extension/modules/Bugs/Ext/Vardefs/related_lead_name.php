<?php

$dictionary['Bug']['fields']['related_lead_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'related_lead_name',
    'vname'     => 'LBL_RELATED_LEAD',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'related_lead_id',
    'join_name' => 'related_leads',
    'link'      => 'related_leads',
    'table'     => 'leads',
    'isnull'    => 'true',
    'module'    => 'Leads',
    );

$dictionary['Bug']['fields']['related_lead_id'] = array(
    'name'              => 'related_lead_id',
    'rname'             => 'id',
    'vname'             => 'LBL_RELATED_LEAD_ID',
    'type'              => 'id',
    'table'             => 'leads',
    'isnull'            => 'true',
    'module'            => 'Leads',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );

$dictionary['Bug']['fields']['related_leads'] = array(
  	'name'          => 'related_leads',
    'type'          => 'link',
    'relationship'  => 'bugs_related_leads',
    'module'        => 'Leads',
    'bean_name'     => 'Lead',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );

$dictionary['Bug']['relationships']['bugs_related_leads'] = array(
    'lhs_module'        => 'Bugs',
    'lhs_table'         => 'bugs',
    'lhs_key'           => 'related_lead_id',
    'rhs_module'		=> 'Leads',
    'rhs_table'			=> 'leads',
    'rhs_key'			=> 'id',

    'relationship_type'	=> 'one-to-many',
    );

?>
