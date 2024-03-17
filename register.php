<?php
 include "service/database.php";

 $register_message ="";

    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (username, password) VALUES('$username', '$password')";

        if($db->query($sql)) {
            echo "login.php";
        }else {
            echo "DATA GAGAL MASUK";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php
    echo '<style>body { background-image: url("img/bg.jpg"); }</style>';
    ?>
</head>
<body>
    <form action="register.php" method="POST">
        <main>
            <section>
                <h1>Silahkan Register</h1>
                <div class="kolom">
                    <i class="fa-solid fa-user"></i>
                    <input type="User" placeholder="Username" name="username"/>
                </div>
                <div class="kolom">
                    <i class="fa-solid fa-user"></i>
                    <input type="password" placeholder="Password" name="password"/>
                </div>
                <div class="kolom">
                    <i class="fa-solid fa-paper-plane"></i>
                    <input class="btn" type="submit" value="Daftar" name="register"/>
                </div>
            </section>
        </main>
    </form>
</body>
</html>