<?php
include ('./php/register.php')
?>
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

<body>
    <div class="form">
        <h2>Register Now</h2>
        <p>This is bigtime register Form</p>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="error"><?php echo $err?></div>
            <div class="grid-details">
                <div class="input" style="width:100%">
                    <label for="">First Name</label>
                    <input type="text" name="namefeild" placeholder="Enter Your Name">
                </div>
                <div class="input">
                    <label for="">Last Name</label>
                    <input type="text" name="lastfeild" placeholder="Enter Your Name">
                </div>
            </div>
            <div class="input">
                <label for="">Email</label>
                <input type="text" name="emailfeild" placeholder="Enter Your Email">
            </div>
            <div class="input">
                <label for="">Date of Birth</label>
                <input type="date" name="datefeild">
            </div>
            <!-- <div class="grid-details" style="margin-bottom:10px ;">
               
                <input type="radio" name="gen" id="" value="male">
                    <label for="">Male</label>
             
                    <input type="radio" name="gen" value="female">
                    <label for="">Female</label>
             
            </div> -->
            <div class="profile">
                <div class="file_upload">
                    <input type="file" name="image" class="profile_sty">
                    <i class="fa fa-camera" aria-hidden="true"></i>
                </div>

            </div>
            <div class="submit">
                <input type="submit" value="Register Now" class="submitbtn" name="submit">
            </div>

        </form>
        <?php
        echo $btn;
        ?>
    </div>
    <!-- <script src="./js/index.js"></script> -->
</body>

</html>