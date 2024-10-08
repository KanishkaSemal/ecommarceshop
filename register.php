<?php 
   include 'connection.php';

   if (isset($_POST['submit-btn'])) { // Corrected the name of the submit button to match the form
       $filter_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
       $name = mysqli_real_escape_string($conn, $filter_name);

       $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Use FILTER_SANITIZE_EMAIL for email
       $email = mysqli_real_escape_string($conn, $filter_email);

       $filter_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
       $password = mysqli_real_escape_string($conn, $filter_password);

       $filter_cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);
       $cpassword = mysqli_real_escape_string($conn, $filter_cpassword);

       $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('query failed'); // Corrected table name to `users`

       if (mysqli_num_rows($select_user) > 0) {
           $message[] = 'User already exists';
       } else {
           if ($password != $cpassword) {
               $message[] = 'Passwords do not match'; // Changed $message to $message[] to be consistent
           } else {
               $password_hash = password_hash($password, PASSWORD_BCRYPT); // Hashing the password before saving
               mysqli_query($conn, "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name', '$email', '$password_hash')") or die('query failed');
               $message[] = 'Registered successfully';
               header('location:login.php');
               exit(); // Use exit() after header() to prevent further code execution
           }
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
            <h1>Register Now</h1>
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <input type="password" name="cpassword" placeholder="Confirm your password" required>
            <input type="submit" name="submit-btn" value="Register Now" class="btn">
            <p>Already have an account? <a href="login.php">Login now</a></p>
        </form>
    </section>
</body>
</html>
