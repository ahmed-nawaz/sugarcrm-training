<?php

$dependencies['Accounts']['rf'] = array(
    'hooks' => array("edit"),
    //Trigger formula for the dependency. Defaults to 'true'.
    'trigger' => 'true',
    'triggerFields' => array('phone_office'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    'actions' => array(
        array(
            'name' => 'SetRequired', //Action type
            //The parameters passed in depend on the action type
            'params' => array(
                'target' => 'phone_fax',
                'label'  => 'phone_fax_label', //normally <field>_label
                'value' => 'equal($phone_office, "1234567890")', //Formula
            ),
        ),
    ),
);

?>
