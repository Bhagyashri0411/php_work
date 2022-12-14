<html>

<head>
    <link rel="stylesheet" href="./assets/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> Home </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <base href="./assets/img/upload/">
</head>
<?php
  session_start(); 
include ('./php/connection.php');
$mysql = mysqli_query($conn, "SELECT * FROM register WHERE name='$_SESSION[name]'");
        if(isset($_SESSION['username']))
        {
  
  ?>

<body>
    <header>
        <div class="container-fluid">
            <div class="header-s">
                Bhagyashri
                <div class="images-sec">
                    <?php       
                 echo "<img src='$_SESSION[images]' alt='imaege is not found'>   
                       <div>
                            <h1> $_SESSION[name]</h1>
                            <a class='dropdown-item' href='#'>Logout <i class='fa fa-sign-out' aria-hidden='true'></i></a>
                       </div>";       
                ?>
                </div>

            </div>
        </div>

    </header>

    <main>
        <div class="container">
            <table>
                <thead>
                    <th>Sr No.</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    <?php
        while($respon = mysqli_fetch_array($mysql)){

            echo 
            "<tr>
            <td> 1</td>
            <td> $respon[name] </td>
            <td> $respon[lname]</td>
            <td> $respon[email]</td>
            </tr>";
        }
        ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
<?php
}
else{ 
    echo "Please Check";
}
?>

</html>