<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/style.css">
    <title>Halaman Upload</title>
</head>
<body>
<div class="main-section">
    <header>
        <h2>Tambahkan Momen Foto Anda</h2>
    </header>
    <form action="appcore/uploadimage.php" method="post" enctype="multipart/form-data">
        <input type="file" name="foto">
        <input type="text" name="deskripsi" id="">
        <input type="submit" value="Simpan">
    </form>
</div>
</body>
</html>