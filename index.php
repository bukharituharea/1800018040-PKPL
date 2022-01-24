<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>TOKO SEPATU</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="header">
    <p>TOKO SEPATU</p>
  </div>
  <nav>
    <ul> <?php include("page/navbar.php") ?> </ul>
  </nav>

  <?php include("content.php") ?>

  <?php include("page/user/keranjang.php") ?>
  <div class="footer">
    <p>copyright by | Bukhari</p>
  </div>

</body>

</html>