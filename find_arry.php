<?php
require_once ("partision/header.php");
?>

<div class="container">
<?php
    $search = array("VOLVO", "BMW", "NISSAN", "TOYOTA", "JEEP",);
    $have = ("TOYOTA");
    
        if(in_array($have, $search)){
            echo "<br>" . $have . " Match Found" ;
        }else{
            echo "<br>" . $have . " Match Not Found" ;
        }


?>
</div>

<br>
<?php
require_once ("partision/footer.php");
?>