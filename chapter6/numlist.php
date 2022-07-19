<?php
  require_once("abslist.php");
  
  class NumList extends AbsList {
    
    function startList() {
      echo "<ol>\n";
    }

    function endList(){
      echo "</ol>\n";
    }
  }