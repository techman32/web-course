<?php

class Survey
{
  private string $firstName;
  private string $lastName;
  private string $email;
  private string $age;
  private array $info;
  
  public function __construct(string $firstName, string $lastName, string $email, string $age)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
    $this->age = $age;
  }

  public function getInfo()
  {
    return $this->info = [$this->firstName, $this->lastName, $this->email, $this->age];
  }
}

?>