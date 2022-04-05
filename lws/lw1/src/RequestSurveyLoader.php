<?php

class RequestSurveyLoader
{
  public function getRequestParameter()
  {
    $info = [
      'first_name' => '',
      'last_name' => '',
      'email' => '',
      'age' => '',
    ];

    foreach($info as $key => &$value)
    {
      $value = $_GET[$key];
    }

    return new Survey($info['first_name'] . '', $info['last_name'] . '', $info['email'], $info['age'] . '');
  }
}

?>