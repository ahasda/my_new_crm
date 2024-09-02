<?php
session_start();

// Database connection
$conn = mysqli_connect("localhost", "root", "", "crm_data");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_REQUEST['submit'])) {   

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    
    $sql = "SELECT * FROM `admin` WHERE aemail = '$email'";
    $query = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($query)) {
        
            $_SESSION['aid'] = $row['aid'];
            $_SESSION['aname'] = $row['aname'];
            $_SESSION['aemail'] = $row['aemail'];            
            $_SESSION['apass'] = $row['apass'];            
            
            echo "<script>alert('Welcome Back Admin ☺');window.location.href='index.php'</script>";

    } else {
        $error_message = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags and other head elements -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bracket.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>

<body>
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="row d-flex justify-content-center">
                <img src="../img/litem_logo.png" style="height: 10vh;" class="img-fluid">
            </div>
            <div class="tx-center mg-b-60 mt-4">Admin Login</div>

            <?php if (isset($error_message)) { echo "<div class='alert alert-danger'>$error_message</div>"; } ?>

            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                    <a href="#" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
                </div>
                <button type="submit" name="submit" class="btn btn-info btn-block">Sign In</button>
            </form>
        </div>
    </div>

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
</body>

</html>
