<?php

    $layout_defs["Contracts"]["subpanel_setup"]['contract_notes'] = array (
        'order' => 100,
        'module' => 'Notes',
        'subpanel_name' => 'default',
        'sort_order' => 'asc',
        'sort_by' => 'id',
        'title_key' => 'LBL_SUBPANEL_TITLE',
        'get_subpanel_data' => 'notes',
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
