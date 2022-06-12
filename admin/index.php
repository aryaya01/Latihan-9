<html>
    <head>
        <title>Tutorial cara membuat login dengan PHP MySQLi - Page Admin</title>
    </head>
    <body>
        <h2>Halaman Admin</h2>
        <!--cek apakah sudah login-->
        <?php
        session_start();
        if($_SESSION['status']!="login"){
            header("location:../index.php?pesan=belum_login");
        }
        ?>
        <h4>Selamat Datang, <?php echo $_SESSION['username'];?>! Anda telah Login.</h4>
    </br>
    <a href="logout.php">Logout</a>
    </body>
</html>