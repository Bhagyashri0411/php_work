<?php
include 'connection.php';
$err ='';
$btn ='';
if (isset($_POST['submit'])) {
    # code...

$name = $_POST['namefeild'];
$lname = $_POST['lastfeild'];
$mail = $_POST['emailfeild'];
$date = $_POST['datefeild'];
// $image_in =$_POST['image'];

if (empty($name) || empty($lname) || empty($mail) || empty($date) ) {
    $err = "Enter the Given Values";
}
else{
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        // print_r($_FILES);
       
        if (isset($_FILES['image'])) {
            $image=$_FILES['image']['name']; 
            $imageArr=explode('.',$image); 
            $rand=rand(10000,99999);
            $newImageName=time().$rand.'.'.$imageArr[1];
            $uploadPath="./assets/img/upload/".$newImageName;
            $isUploaded=move_uploaded_file($_FILES["image"]["tmp_name"],$uploadPath);
            if($isUploaded){
                $charchater = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                $username = substr(str_shuffle($charchater), 0,3). $name . substr(str_shuffle($charchater), 0, 4);
                $passs = substr(str_shuffle($charchater),0,10);
                $rec = $mail;
                $sub = "This is change your username and password";
                $body = "This is username = ". $username . "\n and this is Password = ". $passs;
                $header = "From:chhotipawar11@gmail.com";
            
                if (mail($rec, $sub, $body, $header)) 
                {
                    $sqlnsert = mysqli_query($conn, "INSERT INTO register(name,lname,email,bdate,images,username, password) VALUES('$name','$lname','$mail','$date', '$newImageName', '$username', '$passs')");
                    $err = 'success';
                    $btn = "<div class=link><a href=verify.php>Login Now</a> </div>";
                }
                else{
                    $err = 'check please';
                }                    
            }
            else{

                $err = 'something went wrong';
            }
        }
    }
    else{
        $err = 'Enter Valid Emial ';
    }
}
}

?>