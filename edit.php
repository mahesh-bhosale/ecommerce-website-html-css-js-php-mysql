<?php 
   session_start();

   include("config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Change Profile</title>
    <link rel="icon" href="images/favcon.png" type="image/x-icon">
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="login.php"> 𝓓𝓞𝓞𝓡𝓜𝓐𝓡𝓣</a></p>
        </div>

        <div class="right-links">
            <a href="#">Change Profile</a>
            <a href="logout.php"> <button class="btn">Log Out</button> </a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">
            <?php 
               if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $age = $_POST['age'];
                $address = $_POST['address']; // Added field for address
                $contact_number = $_POST['contact_number']; // Added field for contact number

                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con,"UPDATE users SET Username='$username', Email='$email', Age='$age', Address='$address', ContactNumber='$contact_number' WHERE Id=$id ") or die("error occurred");

                if($edit_query){
                    echo "<div class='message-2'>
                    <p>Profile Updated!</p>
                </div> <br>";
              echo "<a href='login.php'><button class='btn'>Go Home</button>";
       
                }
               }else{

                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['Age'];
                    $res_Address = $result['Address']; // Fetching address
                    $res_Contact = $result['ContactNumber']; // Fetching contact number
                }

            ?>
            <header>Change Profile</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" value="<?php echo $res_Age; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" value="<?php echo $res_Address; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" name="contact_number" id="contact_number" value="<?php echo $res_Contact; ?>" autocomplete="off" required>
                </div>
                
                <div class="field">                    
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>
                
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>
