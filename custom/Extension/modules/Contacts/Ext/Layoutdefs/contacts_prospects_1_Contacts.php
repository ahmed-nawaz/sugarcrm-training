<?php
 // created: 2017-07-26 19:33:32
$layout_defs["Contacts"]["subpanel_setup"]['contacts_prospects_1'] = array (
  'order' => 100,
  'module' => 'Prospects',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_PROSPECTS_1_FROM_PROSPECTS_TITLE',
  'get_subpanel_data' => 'contacts_prospects_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
