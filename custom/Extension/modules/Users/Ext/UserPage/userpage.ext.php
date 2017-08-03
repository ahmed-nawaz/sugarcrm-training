<?php

$HTML=<<<HTML

    <table cellpadding="0" cellspacing="0" width="100%" border="0" class="list view">
        <tbody>
            <tr height="20">
                <th scope="col" width="15%">
                    <slot>Header</slot>
                </th>
            </tr>
            <tr height="20" class="oddListRowS1">
                <td scope="row" valign="top">
                    Content
                </td>
            </tr>
        </tbody>
    </table>
HTML;

    echo $HTML;

?>
