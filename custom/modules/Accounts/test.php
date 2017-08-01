<?php
//Load Account
$bean = BeanFactory::getBean('Meetings', '2d13f8e8-71f6-11e7-a62b-38607712f7a8');

//If relationship is loaded
if ($bean->load_relationship('meetings_calls_1'))
{
  //Fetch related beans

  $relatedBeans = $bean->meetings_calls_1->getBeans();

  foreach ($relatedBeans as $relatedBean) {
    echo $relatedBean->name . "<br>";
  }

}

echo "<hr>";

$bean = BeanFactory::getBean('Leads', '5f2ce296-7218-11e7-8851-38607712f7a8');

if ($bean->load_relationship('leads_cases_1'))
{
  $relatedBeans = $bean->leads_cases_1->getBeans();

  foreach ($relatedBeans as $relatedBean) {

    echo $relatedBean->id . '<br>';

    if ($relatedBean->load_relationship('leads_cases_1'))
    {
      $rbs = $relatedBean->leads_cases_1->getBeans();

      foreach ($rbs as $rb)
      {
        echo $rb->name . "<br>";
      }
    }

    echo '<hr>';
  }
}

?>
