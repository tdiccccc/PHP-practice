<?php
  class City {
    
    private $name;
    
    public $prefecture;

    function setName($name){
      $this->name = $name;
    }

    function getName(){
      return $this->name;
    }


    function setPrefecture($prefecture){
      $this->prefecture = $prefecture;
    }

    function getPrefecture(){
      return $this->prefecture;
    }

  }

  $c = new City();

  $c->setName("横浜市");
  $c->setPrefecture("神奈川県");
  
  echo "{$c->getName()}は{$c->getPrefecture()}にあります。<br>";
?>