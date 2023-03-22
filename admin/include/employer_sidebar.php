<?php

include('connection/db.php');

// session_start();

$recuid =$_SESSION['id'];

if(!isset($_SESSION['id'])){
   header('location:loginpage.php');
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


        <nav class="navbar navbar-expand-md sticky-top flex-md-nowrap shadow navbar-dark bg-dark py-4 " id="myheader">
            <div class="container">
            <!-- <a class="navbar-brand" href="#">Carousel</a> -->
            <a class="navbar-brand text-white fs-3" href="http://localhost/findMe/admin/homepage.php">
                            Find<span class="text-primary">Me</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="">
            <!-- <div class="collapse navbar-collapse" id="navbarCollapse"> -->
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="http://localhost/findMe/admin/logout.php?">Sign Out</a>
                    </li> -->
                    <li class="nav-item">
                        
                        <a class="nav-link text-warning fw-bold">
                            <i class="fa-solid fa-user"></i>
                            <?php echo $recuid; ?>
                        </a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>



        <div class="container-fluid ">
            <div class="row h-auto ">

                <nav id="sidebarMenu" class="user-sidebar col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse h-100 position-fixed ">
                    <div class="position-sticky pt-3 sidebar-sticky ">
                    <ul class="nav flex-column">
                        <li class="nav-item  my-3 d-flex flex-row  align-items-center ps-2">
                            <a class="nav-link active fs-6" aria-current="page" href="http://localhost/findMe/admin/recruiterprofile.php">
                                <i class="fa-solid fa-user me-2"></i>
                                <span data-feather="home" class="align-text-bottom"></span>
                                Profile
                            </a>
                        </li>
                        <li class="nav-item  my-3 d-flex flex-row  align-items-center ps-2">
                            <a class="nav-link active fs-6" aria-current="page" href="http://localhost/findMe/admin/postjob.php">
                                <i class="fa-solid fa-briefcase me-"></i>
                                <span data-feather="home" class="align-text-bottom">
                                    Post Job
                                </span>
                                
                            </a>
                        </li>
                        <li class="nav-item  my-3 mb-5 d-flex flex-row  align-items-center ps-2">
                            <a class="nav-link active fs-6" aria-current="page" href="http://localhost/findMe/admin/overview_recu.php">
                                <i class="fa-solid fa-table"></i>
                                <span data-feather="home" class="align-text-bottom">
                                    Overview
                                </span>
                                
                            </a>
                        </li>
                        <li class="nav-item  my-5 d-flex flex-row  align-items-center ps-2">
                            <a class="nav-link active fs-6" aria-current="page" href="http://localhost/findMe/admin/logout.php?">
                            <i class="fa-solid fa-x"></i>
                                <span data-feather="home" class="align-text-bottom fw-bolder">
                                    Sign Out
                                </span>
                            </a>
                        </li>
                    </ul>
            
                    </div>
                </nav>


            </div>
        </div>

    </body>
</html>