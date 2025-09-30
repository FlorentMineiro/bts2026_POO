<?php

 class Animal {
    public string $name;
      //public int $age;
      //public String $color;

     public function __construct(string $name)
     {
            $this -> name = $name;
     }

      public function getName(): string 
    {
      return $this -> name;
    }

    public function setName(String $name): void
    {
      $this -> name = $name;
    }

    public function setAge(int $age): void
    {
      $this -> age = $age;
    }
   
    public function getAge(): int
    {
      return $this -> age;
    }

    public function setColor(String $color): void
    {
      $this ->color = $color;
    }
   
    public function getColor(): string
    {
      return $this -> color;
    }
 }
