<?php

if (!defined('sugarEntry') || !sugarEntry)
{
  die('Not A Valid Entry Point');
}

class ApplicationHookConsumer
{
  function before_method($bean, $event, $arguments)
  {
    $bean->name = strtoupper($bean->name);
  }
}

?>
