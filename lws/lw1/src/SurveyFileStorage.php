<?php

class SurveyFileStorage
{
  public function getFile($info)
  {
    if ($info[2] === '')
    {
      echo 'В ключе email не указано значение.';
    }
    else
    {
      $fileName = './data/' . $info[2] . '.txt';

      if (file_exists($fileName))
      {
        $infoFile = file($fileName);
        if ($info[0] === null || $info[0] === '')
        {
          $info[0] = trim(substr($infoFile[0], strpos($infoFile[0], ':') + 1));
        }
        if ($info[1] === null || $info[1] === '')
        {
          $info[1] = trim(substr($infoFile[1], strpos($infoFile[1], ':') + 1));
        }
        if ($info[3] === null || $info[3] === '')
        {
          $info[3] = trim(substr($infoFile[3], strpos($infoFile[3], ':') + 1));
        }
      }

      $infoStr = 'First Name: ' . $info[0] . PHP_EOL;
      $infoStr = $infoStr . 'Last Name: ' . $info[1] . PHP_EOL;
      $infoStr = $infoStr . 'Email: ' . $info[2] . PHP_EOL;
      $infoStr = $infoStr . 'Age: ' . $info[3];
      
      file_put_contents($fileName, $infoStr);

      return true;
    }
  }
}

?>