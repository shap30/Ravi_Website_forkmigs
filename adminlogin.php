<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RAVI ADMIN LOGIN</title>
    <link rel="stylesheet" href="adminlogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://i.imgur.com/nMdo4LG.jpg">
</head>

<body>
    <div class="wrapper">
        <form id="loginForm">
            <h1>RAVI ADMIN LOGIN</h1>
            <div class="input-box">
                <input id="username" type="email" placeholder="Username" required autocomplete="off">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input id="password" type="password" placeholder="Password" required autocomplete="off">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <button type="button" class="btn" onclick="validateLogin()">Login</button>
        </form>
    </div>

    <script>
        function validateLogin() {
            var usernameInput = document.getElementById("username").value;
            var passwordInput = document.getElementById("password").value;

            if (usernameInput !== "raviadmin@gmail.com") {
                alert("Invalid User");
            } else if (passwordInput !== "raviadmin123") {
                alert("Invalid Password");
            } else {
                window.location.href = "adminpage.php";
            }
        }
    </script>
</body>

</html>
