<?php 
   include 'connection.php';
   session_start(); // Start the session to use session variables

   if (isset($_POST['submit-btn'])) { // Corrected the name of the submit button to match the form

       $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Use FILTER_SANITIZE_EMAIL for email
       $email = mysqli_real_escape_string($conn, $filter_email);

       $filter_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
       $password = mysqli_real_escape_string($conn, $filter_password);

       $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('query failed'); // Corrected table name to `users`

       if (mysqli_num_rows($select_user) > 0) {
          $row = mysqli_fetch_assoc($select_user);
          if (password_verify($password, $row['password'])) { // Assuming passwords are hashed using password_hash()
              if ($row['user_type'] == 'admin') {
                  $_SESSION['admin_name'] = $row['name'];
                  $_SESSION['admin_email'] = $row['email'];
                  $_SESSION['admin_id'] = $row['id'];
                  header('location:admin_panel.php');
              } else if ($row['user_type'] == 'user') {
                  $_SESSION['user_name'] = $row['name'];
                  $_SESSION['user_email'] = $row['email'];
                  $_SESSION['user_id'] = $row['id'];
                  header('location:index.php');
              } 
          } else {
              $message[] = 'Incorrect email or password';
          }
       } else {
           $message[] = 'User does not exist';
       }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>My Web Page</title>
</head>
<body>
    
    <section class="form-container">
        <?php 
        if (isset($message)) {
            foreach ($message as $messageg) {
                echo '
                    <div class="message">
                        <span>'.$messageg.'</span>
                        <i class="bi bi-calendar2-x"></i> onclick="this.parentElement.remove()"></i> 
                    </div>
                ';
            }
        }
        ?>
        <form method="post">
            <h1>Login Now</h1>
            <div class="input-field">
                 <label>Your Email</label><br>
                  <input type="email" name="email" placeholder="Enter your email" required>
             </div>
             <div class="input-field">
                 <label>Your Password</label><br>
                   <input type="password" name="password" placeholder="Enter your password" required>
             </div>
            <input type="submit" name="submit-btn" value="Login Now" class="btn">
            <p>Do not have an account? <a href="register.php">Register now</a></p>
        </form>
    </section>
</body>
</html>
