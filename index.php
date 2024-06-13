<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reyan Company</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="container">
        <header>
            <img src="images/header.jpg" alt="">
        </header>

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=order-input">Pemesanan</a></li>
                <li><a href="index.php?page=order-tampil">Daftar Pesanan</a></li>
                <li><a href="index.php?page=Kontak">Kontak</a></li>
                <li><a href="index.php?page=About">About</a></li>
                <li><a href="index.php?page=Login">login</a></li>
            </ul>
            
        </nav>

        <main>

            <?php
                if (isset($_GET['page'])) {
                    require $_GET['page'] . ".php";
                } else {
                    require "main.php";
                }
            ?>

        </main>

        <footer>
            <p class="footer-text">Copyright &copy; 2024. Muhammad Reyan - Junior Web Developer Juni 2024 UINSU</p>
            <!-- Copyright &copy; 2024. Muhammad Reyan - Junior Web Developer Juni 2024 UINSU -->
        </footer>
    </div>

</body>
</html>