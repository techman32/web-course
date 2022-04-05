<?php

require_once('src/common.inc.php');

$requestSurveyLoader = new RequestSurveyLoader();
$surveyFileStorage = new SurveyFileStorage();
$surveyPrinter = new SurveyPrinter();

if (isset($_GET['email']))
{
  $getRequestParameters = $requestSurveyLoader->getRequestParameters();
  $getInfo = $getRequestParameters->getInfo();
  $getFile = $surveyFileStorage->getFile($getInfo);
}
else
{
  echo 'Нет ключа email.';
}

?>