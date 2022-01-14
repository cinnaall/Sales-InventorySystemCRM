<?php
require('../connection/database.php');

session_start();
if ($_SESSION["status"] == "valid") {
    echo '<script>window.location.href="../index.php"</script>';
}
if ($_SESSION["status"] == "invalid" || empty($_SESSION["status"])) {
    $_SESSION["status"] = "invalid";
}
if (isset($_POST["login"])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        echo 'Please Fill up all fields';
    } else {
        $queryValidate = "SELECT * FROM register WHERE email='$email' ";
        $sqlValidate = mysqli_query($connection, $queryValidate);
        $rowValidate = mysqli_fetch_assoc($sqlValidate);
        $currentPassword = $rowValidate["password"];

        if (password_verify($password, $currentPassword)) {
            echo "<script> alert ('Successfully Log in') </script>";
            echo '<script>window.location.href="../index.php"</script>';
        } else {
            $message = "Login Failed, Wrong Password";
            header("location:./login.php?m=$message");
        }
        if (mysqli_num_rows($sqlValidate) > 0 && password_verify($password, $currentPassword)) {
            $_SESSION["status"] = "valid";
            $_SESSION["email"] = $rowValidate["email"];
            $_SESSION["access"] = $rowValidate["access"];
            header("location:../index.php");
        } else {
            $_SESSION["status"] = "invalid";
            echo 'Invalid Credentials';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png">
    <title>Login | RVT</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        body {
            font-family: "Roboto";
        }
    </style>
</head>

<body>
    <main class="form-signin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block" style="background-color: #16213E;">
                    <img src="../img/c.jpg" alt="" style="height: 100vh;">
                </div>
                <div class="col-lg-4 mt-5 p-5 mx-auto">
                    <form action="login.php" method="post" style="margin-top: 5rem; ">
                        <div class="text-center">
                            <img src="/img/logo.png" alt="logo" class="img-fluid" width="300">
                        </div>
                        <div class="py-5 text-center">
                            <h4>Welcome to Rongelvil Trading</h4>
                            <p>Sign in to access your account</p>
                        </div>
                        <div class="px-5">
                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg>
                            </span>
                            <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                                </svg>
                            </span>
                            <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2">
                        </div>
                        <button class="btn btn-primary btn-lg w-100 fs-6 mb-4" type="submit" name="login">Sign in</button>
                        <p class="text-muted text-center" style="font-size: 0.8rem;">
                            Can’t sign in? <a href="mailto:admin@gmail.com">Contact</a> the Administrator.
                        </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>