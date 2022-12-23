<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMA Negeri 1</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href ="css/style2.css">
</head>

<body>

    <header>
        <h1>Pendaftaran Siswa Baru SMA Negeri 1</h1>
    </header>
    <nav>
        <ul>
            <a href="form-daftar.php">Klik untuk Daftar</a>
	        <a href="list-siswa.php">List Pendaftar</a>
	        <div class="animation start-home"></div>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])):?>
    <div class = "popup">
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "<div class='alert alert-success' role='alert'>
                Pendaftaran Siswa Baru Berhasil! </div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>
                Pendaftaran Gagal!</div>";
            }
        ?>
    </p>
     </div>
    <?php endif; ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>
   
    </body>
</html>