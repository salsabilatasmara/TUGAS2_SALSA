<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo ASSET; ?>plugin/bootstrap/css/bootstrap.min.css">
    <title>Tugas 2 - Salsabila Tasmara</title>
</head>

<?php
     require_once "config.php";

     if (isset($_POST['logout'])) {
         $auth = new App\Auth();
         $auth->logout();
        header("location:index.php");

     }
?>

<body>
    <div class="master">
        <div class="sidebar">
            <ul class="sidebar-menu">
                <li class="sidebar-item">
                    <a class="nav-link active" href="index.php?page=dashboard">Beranda</a>
                </li>
                <li class="sidebar-item">
                    <a class="nav-link" href="index.php?page=index_golongan">Golongan</a>
                </li>
                <li class="sidebar-item">
                    <a class="nav-link" href="index.php?page=index_pelanggan">Pelanggan</a>
                </li>
                <li class="sidebar-item">
                    <a class="nav-link" href="index.php?page=index_pengguna">Pengguna</a>
                </li>
                <li class="sidebar-item">
                    <form method="POST">
                        <button name="logout" class="nav-link" style="border: 0px; background: transparent">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
        <div class="content">
            <nav class="top-bar">
                <div>Salsabila Tasmara - 0702192024</div>
            </nav>

            <section class="main">
                <?php
                    if (isset($_GET['page'])) 
                        include 'pages/'. $_GET['page'] . ".php";
                    else
                        include "pages/dashboard.php";            
                ?>
            </section>

            <footer>
                <div class="container">
                    &copy; Copyright Salsabila Tasmara
                </div>
            </footer>
        </div>
    </div>
  

    <script src="<?php echo ASSET; ?>plugin/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>