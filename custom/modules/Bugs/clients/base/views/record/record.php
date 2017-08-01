<?php
$viewdefs['Bugs'] =
array (
  'base' =>
  array (
    'view' =>
    array (
      'record' =>
      array (
        'buttons' =>
        array (
          0 =>
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
            'events' =>
            array (
              'click' => 'button:cancel_button:click',
            ),
          ),
          1 =>
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 =>
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' =>
            array (
              0 =>
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'primary' => true,
                'acl_action' => 'edit',
              ),
              1 =>
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              2 =>
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              3 =>
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              4 =>
              array (
                'type' => 'divider',
              ),
              5 =>
              array (
                'name' => 'create_button',
                'type' => 'rowaction',
                'event' => 'button:create_article_button:click',
                'label' => 'LBL_CREATE_KB_DOCUMENT',
                'acl_module' => 'KBContents',
                'acl_action' => 'create',
              ),
              6 =>
              array (
                'type' => 'divider',
              ),
              7 =>
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              8 =>
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'Bugs',
                'acl_action' => 'create',
              ),
              9 =>
              array (
                'type' => 'rowaction',
                'event' => 'button:historical_summary_button:click',
                'name' => 'historical_summary_button',
                'label' => 'LBL_HISTORICAL_SUMMARY',
                'acl_action' => 'view',
              ),
              10 =>
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              11 =>
              array (
                'type' => 'divider',
              ),
              12 =>
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
            ),
          ),
          3 =>
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'panels' =>
        array (
          0 =>
          array (
            'name' => 'panel_header',
            'header' => true,
            'fields' =>
            array (
              0 =>
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 =>
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'dismiss_label' => true,
              ),
              3 =>
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 =>
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' =>
            array (
              0 =>
              array (
                'name' => 'bug_number',
                'readonly' => true,
              ),
              1 => 'priority',
              2 => 'status',
              3 => 'type',
              4 => 'source',
              5 => 'product_category',
              6 => 'resolution',
              7 => 'assigned_user_name',
              8 =>
              array (
                'name' => 'description',
                'nl2br' => true,
                'span' => 12,
              ),
              9 =>
              array (
                'name' => 'tag',
                'span' => 6,
              ),
              10 =>
              array (
                'name' => 'accounts_bugs_1_name',
                'span' => 6,
              ),
              11 =>
              array (
                'name' => 'related_lead_name',
                'span' => 12,
              ),
            ),
          ),
          2 =>
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'columns' => 2,
            'hide' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' =>
            array (
              0 =>
              array (
                'name' => 'portal_viewable',
                'span' => 12,
              ),
              1 => 'found_in_release',
              2 => 'fixed_in_release',
              3 =>
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' =>
                array (
                  0 =>
                  array (
                    'name' => 'date_entered',
                  ),
                  1 =>
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 =>
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
              4 =>
              array (
              ),
              5 =>
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' =>
                array (
                  0 =>
                  array (
                    'name' => 'date_modified',
                  ),
                  1 =>
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 =>
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
              6 =>
              array (
              ),
              7 =>
              array (
                'name' => 'work_log',
                'nl2br' => true,
                'span' => 12,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);