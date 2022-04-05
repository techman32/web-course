<?php

require_once('src/common.inc.php');

$requestSurveyLoader = new RequestSurveyLoader();
$surveyFileStorage = new SurveyFileStorage();
$surveyPrinter = new SurveyPrinter();

if (isset($_GET['email']))
{
  $getRequestParameters = $requestSurveyLoader->getRequestParameter();
  $getInfo = $getRequestParameters->getInfo();
  $getFile = $surveyFileStorage->getFile($getInfo);
  
  if ($getFile)
  {
    $printInfo = $surveyPrinter->printInfo($getInfo);
  }
}
else
{
  echo 'Нет ключа email.';
}

?>