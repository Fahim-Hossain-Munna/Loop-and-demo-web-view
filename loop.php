<?php
require_once ("partision/header.php");
?>


<div class="container">
<?php
for($i = 0 ; $i <= 6 ; $i++){
    for($z = 0; $z < $i ; $z++){
        echo "*";
    }
    echo  "<br>";
}

?>
</div>

<br>
<?php
require_once ("partision/footer.php");
?>