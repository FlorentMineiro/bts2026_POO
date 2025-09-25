<?php
 class Cat{
    private String $name;
    private int $age;
    private String $color;

    public function __construct(String $name)
    {
      $this -> name = $name;
    }

    public function setName(String $name): void
    {
      $this -> name = $name;
    }
    public function setAge(int $age): void
    {
      $this -> age = $age;
    }
    public function getName(): string 
    {
      return $this -> name;
    }
    public function getAge(): int
    {
      return $this -> age;
    }
 }
?>