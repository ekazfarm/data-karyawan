<?php

include('connection.php');

$keyword = $_GET['keyword'];

$query = mysqli_query($connect, "SELECT * FROM karyawan WHERE nama='$keyword' ");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Data Karyawan</title>
   </head>
   <body>
     <div class="header">
       <h1>Data Karyawan</h1>
     </div>
     <div class="main">
       <form  action="search.php" method="GET">
         <input type="text" name="keyword" placeholder="Search by name" value="<?php echo $_GET['keyword']; ?>"/>
          <button type="submit">Search</button>
       </form>
       <table border="1">
         <tr>
           <th>Nama</th>
           <th>Alamat</th>
           <th>Umur</th>
           <th>Jenis Kelamin</th>
           <th>Pilihan</th>
         </tr>
         <?php foreach ($result as $result): ?>
           <tr>
             <td><?php echo $result['nama']; ?></td>
             <td><?php echo $result['alamat']; ?></td>
             <td><?php echo $result['umur']; ?></td>
             <td><?php echo $result['jenis_kelamin']; ?></td>
             <td>
              <a href="edit.php?id=<?php echo $result['id']; ?>">Edit</a>
              <a href="delete.php?id=<?php echo $result['id']; ?>">Hapus</a>
             </td>
           </tr>
         <?php endforeach; ?>
       </table><br>
       <form action="add.php" method="post">
         <button type="submit" >Input Data</button>
       </form>
     </div>
   </body>
 </html>
