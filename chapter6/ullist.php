<?php
  require_once("abslist.php");

  class UlList extends AbsList {

    function startList() {
      echo "<ul>\n";
    }
    
    function endList() {
      echo "</ul>\n";
    }
  }
?>