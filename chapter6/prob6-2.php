<?php

  class Country{
    public $name;

    public $capital;

    function setName($name){
      $this->name = $name;
    }

    function getName(){
      return $this->name;
    }

    function setCapital($capital){
      $this->capital = $capital;
    }

    function getCapital(){
      return $this->capital;
    }
  }
  $c = new Country();
  $c->setName("日本");
  $c->setCapital("東京");
  echo "{$c->getName()}の首都は{$c->getCapital()}です。";

?>