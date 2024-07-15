<!-- Login | Registration -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA Predictions | Login</title>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
   <?php include("db_conn.php"); ?>
   <?php
      if(isset($_POST['user']) && isset($_POST['password'])){
         $user = $_POST['user'];
         $password = $_POST['password'];
         $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$password'";
         $result = $conn->query($sql);
         if($result->num_rows > 0){
            $_SESSION['user'] = $user;
            //session_write_close();
            header("Location: main.php");
            
         }
         else{
            echo "<script>alert('Invalid email or password')</script>";
         }
      }
    ?>
   <div class="full-screen-container">
      <div class="login-container">
         <h1 class="login-title">NBA Predictions</h1>
         <form action="login.php" class="form" method="POST">
            <div class="input-group success">
               <label for="user">User:</label>
               <input type="user" id="user" name="user">
               <!--<span class="msg">Valid email</span>-->
            </div>
            <div class="input-group error">
               <label for="password">Password:</label>
               <input type="password" id="password" name="password">
               <!--<span class="msg">Incorrect password</span> -->
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
      </div>


   </div>    
 </body>
 </html>
