<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>HRMS Human Resources Service | Dashboard</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
       
        <!-- Style CSS -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- Owl Carousel CSS -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.default.css" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link rel="stylesheet" type="text/css" href="css/fontello.css">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<body>
        <div class="container" style="margin-top: 40px;">
<h1>Welcome, <?php echo $username; ?></h1>
    <p><b>This is main Dashboard More stuff are comming.</b></p>
    <a href="logout.php">Logout</a>
        </div> 
</body>
</html>

