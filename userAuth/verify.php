<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
include ('./php/connection.php');
$err ='';

session_start(); 
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($email) || empty($username)  || empty($password)) {
        $err= "Enter your data ";
    }
    else{
        $sql= "SELECT * FROM register WHERE username = '$username' AND password = '$password' AND email = '$email'";
        $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['username'] === $username && $row['password'] === $password) {
                    $_SESSION['images'] = $row['images'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['username'] = $username;
                    if (isset($_SESSION['username'])) {
                        header("Location: home.php");
                    }
                  
                }
                else{
                    $err= "Please Enter pass and username Information";
                }
            }
            else
            {
                $err = "Please Enter validate Information";
            }
    }
}

?>
<body>
    <div class="loginform">
        <h2>Login Page</h2>
        <p>This is bigtime Login Form</p>

        <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> method="POST">
            <div class="error"><?php echo $err;?></div>
            <div class="input">
                <label for="">Email</label>
                <input type="text" name="email" placeholder="Enter Your Email">
            </div>
            <div class="input">
                <label for="">Username</label>
                <input type="text" name="username" placeholder="Enter Your Username">
            </div>
            <div class="input">
                <label for="">Password</label>
                <input type="text" name="password" placeholder="Enter Your Password">
            </div>
            <div class="submit">
                <input type="submit" value="Login Now" class="submit_btn" name='login'>
            </div>

        </form>
    </div>
    <!-- <script src="./js/verify.js"></script> -->

</body>

</html>