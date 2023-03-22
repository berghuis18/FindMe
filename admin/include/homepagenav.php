<?php 
session_start();

$filename = '../connection/db.php';
$filename1 = 'connection/db.php';

if (file_exists($filename)) {
include("$filename");
} else {
include("$filename1");
}
if (!isset($_SESSION['id'])) {
    $checker = "";
    $checkerref = "";
  }else {
        $checker = $_SESSION['id'];
        $sql = "SELECT * from recruiter_login where recruiterid = '$checker'";
        $query =mysqli_query($conn, $sql);
        $rowcount=mysqli_num_rows($query);
        if ($rowcount > 0) {
            $checkerref = "overview_recu.php";
        }
        else{
            $sql = "SELECT * from candidate_login where candidateid = '$checker'";
            $query =mysqli_query($conn, $sql);
            $rowcount=mysqli_num_rows($query);
        if ($rowcount > 0) {
            $checkerref = "overview_cand.php";
        }
        else{
            $checkerref = "adminpage.php";
        }
    }
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- font aweasomne -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/steam.css">


</head>

<body>
        <nav class="navbar navbar-expand-md navbar fixed-top bg-transparent" id="myheader">
            <div class="container px-4 px-lg-5 py-lg-1" >
                <a class="navbar-brand text-white fs-3" href="homepage.php">
                    <span>
                        <!-- <img src="assests/img/find.jpg" alt=""> -->
                    </span>
                    <span  class="text-primary">Find</span><span class="text-success fw-lighter">Me</span>
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <li class="nav-item mx-1 ">
                            <!-- <a class="nav-link text-white  text-capitalize" href="http://localhost/findMe/admin/blogpage.php">Blog</a> -->
                            <a class="nav-link text-white  text-capitalize" href="blogpage.php">Blog</a>
                        </li>
                        <li class="nav-item mx-1 ">
                            <a class="nav-link text-white  text-capitalize" href="contactpage.php">Contact</a>
                        </li>
                        <li class="nav-item mx-1 ">
                            <a class="nav-link text-white  text-capitalize" href="<?php echo $checkerref;?>">
                                <?php echo $checker; ?>
                            </a>
                        </li>
                        <li class=" nav-item mx-1">
                            <a class="btn btn-primary btn-sm  px-3 py-0" href="loginpage.php" >Get Started</a>
                        </li>
                        <li class=" nav-item mx-1">
                            <a class="btn btn-danger btn-sm  px-3 py-0" href="wantjob.php" >Want Job</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



</body>
</html>