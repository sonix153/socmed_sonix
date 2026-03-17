<?php include 'views/header.php';
  if(isset($_GET['aid'])){
      header("location:profile.php");
  }
?>
<div class="registration_form">
    <p class="title">Login</p>
    
    <form action="models/login_account.php" method="POST">
           <?php
            if(isset($_GET['err'])){
               echo"<p class=\"alert\">";
                echo"Invalid Email or Password";
                echo"</p>";
            }
            ?>
        <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="carldebsonmonleon@gmail.com">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Signup">
    </form>
</div>
</body>
<?php include 'views/footer.php';