<?php
include('connection.php');
$id = $_GET['id'];

$query = mysqli_query($connect, "SELECT * FROM karyawan WHERE id='$id' LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Data Karyawan</title>
  </head>
  <body>
    <div class="header">
      <h1>Input Data Karyawa</h1>
    </div>
    <div class="main">
      <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $result[0]['id']; ?>">

        <label>Nama</label><br>
        <input type="text" name="nama" value="<?php echo $result[0]['nama']; ?>"><br>

        <label>Alamat</label><br>
        <textarea name="alamat" rows="4" cols="40"><?php echo $result[0]['alamat']; ?></textarea><br>

        <label>Umur</label><br>
        <input type="text" name="umur" value="<?php echo $result[0]['umur']; ?>"><br>

        <label>Jenis Kelamin</label><br>
        <select name="jenis_kelamin">
          <option value="Pria" <?php echo $result[0]['jenis_kelamin'] == 'Pria' ? 'selected' : ''; ?>>Pria</option>
          <option value="Wanita" <?php echo $result[0]['jenis_kelamin'] == 'Wanita' ? 'selected' : ''; ?>>Wanita</option><br>
        </select>
        <br><br>
        <button type="submit">Perbarui</button>
      </form>
    </div>
    <div class="footer">

    </div>
  </body>
</html>
