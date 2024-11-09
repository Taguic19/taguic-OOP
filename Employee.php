<?php

abstract class Employee extends Person{
  private $companyName;
  public function __construct($name,$address,$age,$companyName){
    parent::__construct($name,$address,$age);
    $this->companyName = $companyName;
  }

  public function getName(){
    return parent::getName();
  }

  public function getAddress(){
    return parent::getAddress();
  }

  public function getAge(){
    return parent::getAge();
  }

  public function getCompName(){
    return $this->companyName;
  }
  
 

}