<?php
session_start();
require "function.php";

if(isset($_SESSION['login'])){
    header("Location: dashboard.php");
    exit;
}

if(isset($_POST['btnregister'])){
    if(registrasi($_POST) > 0){
        echo "
        <script>
            alert('user baru berhasil ditambahkan!');
            document.location.href = 'login.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('registrasi error');
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="https://pahamdigital.com/images/favicon.ico">
</head>
<body>
    <div class="bg-green-800 h-screen" id="particles-js">
        <div style="max-width: 350px; width: 100%; height: auto; margin: 50px auto;" class="absolute top-0 right-0 left-0 bottom-0">
            <div style="border: 1px solid rgb(184, 169, 169); padding: 40px 40px 20px;" class="bg-white/60 rounded-xl">
            <div class="flex justify-center mb-5">
                    <h3 class="text-3xl font-semibold text-black">Sign up</h3>
                </div>
                <div>
                    <form action="" method="post">
                        <div style="margin-bottom: 5px;">
                            <input type="text" name="nama" placeholder="Nama" ="input" style="width: 100%; border: 1px solid rgb(184, 169, 169); font-size: 12px; color: #262626; padding: 10px;" class="rounded-2xl" required>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="text" name="username" placeholder="Username" ="input" style="width: 100%; border: 1px solid rgb(184, 169, 169); font-size: 12px; color: #262626; padding: 10px;" class="rounded-2xl" required>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <input type="password" name="password1" placeholder="Password" ="input" style="width: 100%; border: 1px solid rgb(184, 169, 169); font-size: 12px; color: #262626; padding: 10px;" class="rounded-2xl" required>
                        </div>
                        <div>
                            <input type="password" name="password2" placeholder="Confirm Password" ="input" style="width: 100%; border: 1px solid rgb(184, 169, 169); font-size: 12px; color: #262626; padding: 10px;" class="rounded-2xl" required>
                        </div>
                        <button class="w-full" type="submit" name="btnregister" style="margin: 10px 0; background-color: #217acc; border: 1px solid #217acc; border-radius: 4px; text-align: center; padding: 5px;">
                            <p class="mx-auto text-xl" style="color: white;" href="#">Sign up</p>
                        </button>
                    </form>
                </div>
            </div>
            <div style="border: 1px solid rgb(184, 169, 169); padding: 40px 40px 20px; margin: 10px 0 20px; padding: 25px 40px; text-align: center; color: #262626;" class="rounded-xl bg-white/60">
                <p>Already have account? <a href="login.php" style="color: rgb(29, 26, 206);">Sign in</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles-js', 'particlesjs-config2.json', function() {
        console.log('callback - particles.js config loaded');
        });
    </script>
</body>
</html>