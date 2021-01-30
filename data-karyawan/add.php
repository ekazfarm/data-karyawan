<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Input Data Karyawan</title>
  </head>
  <body>
    <div class="header">
      <h1>Input Data Karyawa</h1>
    </div>
    <div class="main">
      <form action="insert.php" method="post">
        <label>Nama</label><br>
        <input type="text" name="nama"><br>

        <label>Alamat</label><br>
        <textarea name="alamat" rows="4" cols="40"></textarea>

        <label>Umur</label><br>
        <input type="text" name="umur"><br>

        <label>Jenis Kelamin</label><br>
        <select name="jenis_kelamin">
          <option value="Pria">Pria</option>
          <option value="Wanita">Wanita</option><br>
        </select>
        <br><br>
        <button type="submit">Input</button>
      </form>
    </div>
    <div class="footer">

    </div>
  </body>
</html>
