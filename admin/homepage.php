<?php 
// session_start();

$filename = '../connection/db.php';
$filename1 = 'connection/db.php';

if (file_exists($filename)) {
include("$filename");
} else {
include("$filename1");
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
    <link rel="stylesheet" href="css/steam.css">
</head>
<body class="container-fluid m-0">


<?php
    include("include/homepagenav.php");
?>


        <!-- header of the homepage -->
        <section class="mastmasterhead" id="">
            <div class="container px-4 px-lg-5 ">
                <div class="text-center mx-auto">

                    <h4 class="mx-auto my-4 fs-6 text-uppercase text-white">
                        love to find what we do!
                    </h4>

                    <div class="my-4">
                        <i class="fa-solid fa-arrow-down-short-wide fs-1 text-success"></i>
                    </div>

                    <div class="row row-cols-1">

                        <div class="col my-5">
                            <a href="loginpage.php" class="text-success text-capitalize ps-2 pe-5 py-2 bg-black rounded-end-5">
                            <i class="fa-solid fa-square text-dark me-2 "></i>
                                are you a recruiter?
                                <i class="ms-5 fa-solid fa-arrow-right text-danger "></i>
                            </a>
                        </div>
                        
                        <div class="col my-4">
                            <a href="loginpage.php" class="text-success text-capitalize ps-2 pe-5 py-2 bg-black rounded-end-5">
                            <i class="fa-solid fa-square text-dark me-2 "></i>
                                are you a looking for Job?
                                <i class="ms-1 fa-solid fa-arrow-right text-danger "></i>
                            </a>
                        </div>
                        
                    </div>
                    
                    
                </div>
                
            </div>
        </section>
        <!--end header of the homepage -->


        <!-- Reviews of the user -->
        <section class="container my-5" ">

            <h3 class="text-center fst-italic fw-bold text-success fs-4 headingMain">Listen to what others think </h3>

            <div class="row row-cols-2 align-items-center py-5 justify-content-between">

                <div class="col-4 p-3" style="background: #f0f7ff;">
                    <p class="fst-italic">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, unde! Fuga sequi ipsam rerum dolores exercitationem quibusdam nostrum neque dignissimos?</p>
                    <span class=" fw-bold ">Anastasiya Lyia</span>
                </div>

                <div class="col-5">
                    <img src="assests/img/anastasiya.jpg" alt="" class="img-fluid mx-auto" width="400" height="400" >
                </div>

            </div>
            
            <div class="row row-cols-2 align-items-center py-5 justify-content-between">

                <div class="col-5">
                    <img src="assests/img/bruan.jpg" alt="" class="img-fluid mx-auto" width="400" height="400" >
                </div>

                <div class="col-4 p-3" style="background: #f0f7ff;">
                    <p  class="fst-italic">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, unde! Fuga sequi ipsam rerum dolores exercitationem quibusdam nostrum neque dignissimos?</p>
                    <span class=" fw-bold ">Byun Lyia</span>
                </div>
                
            </div>

        </section>
        <!--end of Reviews of the user -->


        <?php
            // include("include/jobsposted.php");
        ?>
        <?php
            include("include/footer.php");
        ?>

        <!-- </div> -->

        <script src="js/script.js"></script>
        
   

</body>
</html>