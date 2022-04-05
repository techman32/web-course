<?php

class SurveyPrinter
{
  function printInfo($info)
  {
    $infoStr = "First name: " . $info[0] . '<br>';
    $infoStr = $infoStr . 'Last name: ' . $info[1] . '<br>';
    $infoStr = $infoStr . 'Email: ' . $info[2] . '<br>';
    $infoStr = $infoStr . 'Age: ' . $info[3];

    echo $infoStr;
  }
}

?>