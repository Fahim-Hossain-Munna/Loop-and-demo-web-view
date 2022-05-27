<?php
session_start() ;
?>
<?php
require_once ("partision/header.php");
?>
<div class="container">
  <form action="output.php" method="POST">
    <br></br>
    <!-- =========================================
                       username validation start
          ========================================================-->
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Username</label>
      <input type="text" class="form-control <?php if(isset( $_SESSION["name_error"])){ echo "is-invalid" ; }   ?>"
        id="exampleInputEmail1" aria-describedby="emailHelp" name="user"
        value="<?php if(isset($_SESSION["oldname"])){ echo $_SESSION["oldname"]; } ?>">
      <?php
       if(isset($_SESSION["name_error"])){
        ?>
      <div id="emailHelp" class="form-text text-danger">
        <?php if(isset( $_SESSION["name_error"])){ echo $_SESSION["name_error"] ; }   ?> </div>
      <?php
         
       }
      ?>
    </div>

    <!-- =========================================
          username validation end
            ========================================================-->

    <!-- =========================================
          id number validation start
            ========================================================-->
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">ID Number</label>
      <input type="text" class="form-control <?php if(isset( $_SESSION["id_error"])){ echo "is-invalid" ; }   ?>"
        id="exampleInputEmail1" aria-describedby="emailHelp" name="id"
        value="<?php if(isset($_SESSION["oldid"])){ echo $_SESSION["oldid"]; } ?>">
      <?php
       if(isset($_SESSION["id_error"])){

        ?>
      <div id="emailHelp" class="form-text text-danger">
        <?php if(isset( $_SESSION["id_error"])){ echo $_SESSION["id_error"] ; }   ?> </div>
      <?php
        
       }
      ?>
    </div>

    <!-- =========================================
          id number validation end
            ========================================================-->

    <!-- =========================================
          permanent Address validation start
            ========================================================-->
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Permanent address</label>
      <input type="text" class="form-control <?php if(isset( $_SESSION["address_error"])){ echo "is-invalid" ; }   ?> "
        id="exampleInputEmail1" aria-describedby="emailHelp" name="address"
        value="<?php if(isset($_SESSION["oldadd"])){ echo $_SESSION["oldadd"]; } ?>">
      <?php
       if(isset($_SESSION["address_error"])){
        ?>
      <div class="form-text text-danger">
        <?php if(isset( $_SESSION["address_error"])){ echo $_SESSION["address_error"] ; }   ?> </div>
      <?php
         
       } 
      ?>
    </div>

    <!-- =========================================
          permanent Address validation end
            ========================================================-->

    <!-- =========================================
          Email validation start
            ========================================================-->
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control <?php if(isset( $_SESSION["mail_error"])){ echo "is-invalid" ; }   ?> "
        id="exampleInputEmail1" aria-describedby="emailHelp" name="mail"
        value="<?php if(isset($_SESSION["oldmail"])){ echo $_SESSION["oldmail"]; } ?>">
      <?php
       if(isset($_SESSION["mail_error"])){
        ?>
      <div class="form-text text-danger">
        <?php if(isset( $_SESSION["mail_error"])){ echo $_SESSION["mail_error"] ; }   ?> </div>
      <?php
        
       } 
      ?>
    </div>

    <!-- =========================================
          Email validation end
            ========================================================-->


    <!-- =========================================
          password validation start
            =======================================================-->

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password"
        class="form-control <?php if(isset( $_SESSION["pass_error"])){ echo "is-invalid" ; }   ?>  "
        id="exampleInputPassword1" name="pass"
        value="<?php if(isset($_SESSION["oldpass"])){ echo $_SESSION["oldpass"]; } ?>">
      <br><label id="pass"><input type="checkbox" id="pass" onclick="myFunction()"> Show Password</label>
      <script>
        function myFunction() {
          var x = document.getElementById("exampleInputPassword1");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
      </script>


      <?php
       if(isset($_SESSION["pass_error"])){
        ?>
      <div class="form-text text-danger">
        <?php if(isset( $_SESSION["pass_error"])){ echo $_SESSION["pass_error"] ; }   ?> </div>
      <?php
        
       } 
      ?>

    </div>

    <!-- =========================================
          password validation end
            ========================================================-->


    <!-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
    <button type="submit" class="btn btn-primary" name="btn">Submit</button>
  </form>
</div>




<?php
require_once ("partision/footer.php");
?>

<?php
session_unset();
?>