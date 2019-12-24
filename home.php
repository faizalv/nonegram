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
    <title>Nonegram</title>
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
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          <?= $data['username'] ?>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item">
            <form action="" method="post">
              <button type="submit" name="logout"> Logout</button>
            </form>  
            </a>
          </div>
        </li>
      </ul>
      <img src="<?= $data['profile_path'] ?>" class="rounded mr-5" alt="foto" weight="30" height="30">
      <form action="" method="post">
        <button class="btn btn-info btn-sm" type="submit" name="logout"> Logout</button>
      </form>  
    </div>
</nav>

<div class="mt-5">
    <a class="text-justify" href="/nonegram/upload.php">New Post</a>
    <a href="/nonegram/profile.php">Update profile</a>
</div>
<?php
$datas = $connection->query("select image.id, image.path, user.username, user.profile_path from image inner join user on image.user_id=user.id");
foreach ($datas as $d){
?>
      <div class="container">
        <div class="row  justify-content-center">
          <div class="col-sm-5">
            <div class="card" style="width: 30rem;">
              <div class="card-header">
                <div class="text-left">
                  <img src="<?=$d['profile_path']?>" height="30" class="rounded float-right" alt="foto">
                </div>
                <h5 class="card-title"><?php echo $d['username'];?></h5>
                
              </div>
              <div class="card-body"> 
                <img src="<?=$d['path']?>" style="width: 100%" alt="foto upload">
              </div>
            </div>
          </div>
        </div>
      </div>

<?php } ?>
    

    <script src="asset/js/jquery-3.2.1.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/main.js"></script>

</body>
</html>