<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Contracts/Ext/Layoutdefs/new_layout.php


    $layout_defs["Contracts"]["subpanel_setup"]['<subpanel key>'] = array (
        'order' => 100,
        'module' => 'Contracts',
        'subpanel_name' => 'default',
        'sort_order' => 'asc',
        'sort_by' => 'id',
        'title_key' => 'LBL_SUBPANEL_TITLE',
        'get_subpanel_data' => '<subpanel key>',
        'top_buttons' => array (
            array (
              'widget_class' => 'SubPanelTopButtonQuickCreate',
            ),
            array (
              'widget_class' => 'SubPanelTopSelectButton',
              'mode' => 'MultiSelect',
            ),
        ),
    );

?>
