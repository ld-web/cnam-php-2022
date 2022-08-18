<?php

class User
{
  private string $name;
  private string $firstname;
  private int $age;

  private const AGE_MAJORITE = 18;

  public function isMajeur(): bool
  {
    return $this->age >= self::AGE_MAJORITE;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name)
  {
    $this->name = $name;

    return $this;
  }

  public function getFirstname(): string
  {
    return $this->firstname;
  }

  public function setFirstname(string $firstname)
  {
    $this->firstname = $firstname;

    return $this;
  }

  public function getAge(): int
  {
    return $this->age;
  }

  public function setAge(int $age)
  {
    $this->age = $age;

    return $this;
  }
}
