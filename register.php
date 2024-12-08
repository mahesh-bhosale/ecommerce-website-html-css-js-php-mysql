<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Register</title>
    <link rel="icon" href="images/favcon.png" type="image/x-icon">
</head>
<body>
<div class="container">
    <div class="box form-box">

        <?php

        include("config.php");

        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];
            $address = $_POST['address']; // New field for address
            $contact_number = $_POST['contact_number']; // New field for contact number

            // Validate email
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<div class='message'>
                          <p>Invalid email format, please enter a valid email address.</p>
                      </div> <br>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
            } elseif(!preg_match("/^[0-9]{10}$/", $contact_number)) {
                // Validate contact number
                echo "<div class='message'>
                          <p>Invalid contact number, please enter a 10-digit number.</p>
                      </div> <br>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
            } else {
                //verifying the unique email
                $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");
                if(mysqli_num_rows($verify_query) != 0){
                    echo "<div class='message'>
                              <p>This email is already in use. Please choose another one.</p>
                          </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                } else {
                    // If all validations pass, proceed with registration
                    mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password,Address,ContactNumber) VALUES('$username','$email','$age','$password','$address','$contact_number')") or die("Error Occurred");

                    echo "<div class='message-2'>
                              <p>Registration successful!</p>
                          </div> <br>";
                    echo "<a href='login.php'><button class='btn'>Login Now</button>";
                }
            }
        } else {

        ?>

        <header>Sign Up</header>
        <form action="" method="post">
            <div class="field input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="contact_number">Contact Number</label>
                <input type="text" name="contact_number" id="contact_number" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="off" required>
            </div>

            <div class="field">
                <input type="submit" class="btn" name="submit" value="Register" required>
            </div>
            <div class="links">
                Already a member? <a href="login.php">Sign In</a>
            </div>
        </form>
    </div>
    <?php } ?>
</div>
</body>
</html>
