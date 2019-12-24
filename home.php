<?php
include "appcore/dbcon.php";
session_start();
if (isset($_SESSION['logged-in'])) {
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("Location:/nonegram");
    } else {
        $id = $_SESSION['logged-in'];
        $stmt = $connection->query("Select * from user where id='$id'");
        $data = $stmt->fetch_assoc();
        echo $_SESSION['logged-in'];
    }
} else {
    header("Location:/nonegram/index.php?error=session");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nonegram htdocs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/style.css">
    <!-- Theme Style -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Nonegram</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
      </span>
    </button>
</nav>

<div class="row justify-content-center mt-5 mb-5" style="margin:0;">
  <div class="col-sm-5">

      <?php
      $datas = $connection->query("select image.id, image.path, user.username, user.profile_path from image inner join user on image.user_id=user.id");
      foreach ($datas as $d){
      ?>
          <div class="container">
            <div id="content" class="card" style="width: 35rem;">
              <div id="content-header" class="card-header sticky-top bg-light">
                <div id="profile-pic-holder" class="float-right">
                  <img id="profile-pic" src="<?=$d['profile_path']?>" height="30" class="float-right" alt="foto">
                </div>
                <h5 class="card-title float-right mt-1 mr-1"><?php echo $d['username'];?></h5>
              </div>
              <div class="card-body">
                <img id="#pic-content" class="position-relative mb-5" src="<?=$d['path']?>" style="width: 100%" alt="foto upload">
              </div>
            </div>
          </div>

      <?php } ?>

  </div>

  <div class="col-sm-2 mt-5 ml-5">
    <div class="position-fixed">
      <div class="card" style="width: 20rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><?=$data['username']?>
            <img src="<?=$data['profile_path']?>" class="rounded float-right" height="30" alt="">
          </li>
          <li class="list-group-item"><a href="/nonegram/profile.php">Update profile</a></li>
          <li class="list-group-item"><a class="text-center" href="/nonegram/upload.php">New Post</a></li>
          <li class="list-group-item">
            <form action="" method="post">
              <button class="btn btn-info btn-sm" type="submit" name="logout"> Logout</button>
            </form>  
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
    

    <script src="asset/js/jquery-3.2.1.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/style.js"></script>

</body>
</html>