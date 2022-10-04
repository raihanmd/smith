<?php
session_start();
require "function.php";

if(isset($_SESSION['login'])){
    header("Location: dashboard.php");
    exit;
}

// if(isset($_POST['forgot'])){
//     $_SESSION = [];
//     $username = $_POST['forgot'];
//     $finduser = mysqli_query($conn, "SELECT username FROM pahamdigital WHERE username = '$username'");
//     if(mysqli_num_rows($finduser) === 1){
//         header("Location: https://wa.me/62089606007128?text=Saya%20lupa%20passwordnya%20akun%20$username%20bang%20👆😅");
//     }else{
//         header("Location: login.php?error1=true");
//     }
// }
if(isset($_POST['btnlogin'])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM account WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit;
        }
    }
    header("Location: login.php?error=true");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Smith</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="contain h-screen" id="particles-js">
    <div class="login-container">
            <div class="login-form">
                <div class="form-title">
                    <h3 class="form-text">Sign in</h3>
                </div>
                <?php if(isset($_GET['error']) == true) : ?>
                        <p class="error-text">Username / password salah</p>
                <?php endif;?>
                <div>
                    <!-- <p class="mb-5 text-center text-lg text-red-700">Username / password salah</p> -->
                    <form action="" method="post">
                        <div>
                            <input name="username" type="text" placeholder="Username" required>
                        </div>
                        <div>
                            <input name="password" type="password" placeholder="Password" required>
                        </div>
                        <button type="submit" name="btnlogin">
                                <p>Sign in</p>
                        </button>
                    </form>
                </div>
                <div class="or">
                    <div></div>
                    <p>OR</p>
                    <div></div>
                </div>
                <div class="other">
                    <div>
                        <a href="index.php">Back</a>
                        <button class="forgot">Forgot password?</button>
                        <?php if(isset($_GET['error1']) == true) : ?>
                        <p>Username yang anda masukan belum terdaftar</p>
                        <?php endif;?>
                        <form action="" method="post">
                            <input placeholder="Your username" type="text" name="forgot" class="username">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- https://wa.me/62089606007128?text=Saya%20lupa%20passwordnya%20bang%20%F0%9F%91%86%F0%9F%98%85 -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles-js', 'particlesjs-config2.json', function() {
        console.log('callback - particles.js config loaded');
        });
    </script>
    <script>
        const forgot = document.querySelector('.forgot');
        const username = document.querySelector('.username');

        forgot.addEventListener('click', () => {
            username.classList.toggle("hidden");
        })
    </script>
</body>
</html>