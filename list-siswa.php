<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMA Negeri 1</title>
    <link rel = "stylesheet" href = "css/style1.css">
</head>

<body>
    <header>
        <h1>List Siswa SMA Negeri 1</h1>
    </header>

    <nav>
        <center><a href="form-daftar.php">Klik untuk Daftar</a></center>
    </nav>

    <br>
   
    <?php if(isset($_GET['remove'])){?>
        <div class = "popup">
            <div class = "alert alert-danger">
                <p>Hapus Data Berhasil!</p>
            </div>
        </div>
    <?php }?>

    <div class="wrapper">
      <div class="table">
        <div class="row header">
          <div class="cell">No</div>
          <div class="cell">Nama</div>
          <div class="cell">Alamat</div>
          <div class="cell">Jenis Kelamin</div>
          <div class="cell">Agama</div>
          <div class="cell">Asal Sekolah</div>
          <div class="cell">Tindakan</div>
        </div>
    
    <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
        echo "<div class='row'>";
        echo"<div class='cell'>".$siswa['id']."</div>";
        echo"<div class='cell'>".$siswa['nama']."</div>";
        echo"<div class='cell'>".$siswa['alamat']."</div>";
        echo"<div class='cell'>".$siswa['jenis_kelamin']."</div>";
        echo"<div class='cell'>".$siswa['agama']."</div>";
        echo"<div class='cell'>".$siswa['sekolah_asal']."</div>";
        echo "<a href='form-edit.php?id=".$siswa['id']."'><button>Edit</button></a> | ";
        ?>
         <a href="hapus.php?id=<?=$siswa['id']?>" onclick = "return confirm('Hapus Data Barang?')"><button>Hapus</button></a>
        <?php
        echo"</div>"; 
        }
        ?>
  </div>
</div>
    <center><p>Total: <?php echo mysqli_num_rows($query) ?></p></center>

    </body>
</html>