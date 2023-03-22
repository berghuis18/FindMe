<?php 
session_start();
$recuid =$_SESSION['id'];
if(!isset($_SESSION['id'])){
   header('location:loginpage.php');
}

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
</style>
</head>
<body>

<?php
    include("include/employer_sidebar.php");
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-0 " id="mainPage">

    <div class="w-100 position-fixed mx-0 px-0 mb-5 mt-0">
        <div class=" bg-warning container py-2 position-fixed d-flex justify-content-between">
            <h4 class="text-uppercase text-dark">profile</h4>
        </div>
    </div>

    <section id="" class=" mx-4 py-3 pt-5">

        <div class=" ">

                <?php 

                        $sql = "SELECT * from recruiter_login where recruiterid = '$recuid'";
                        $query = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_array($query)) {
                            ?>


            <div class="row row-cols-1 my-5 ">
                <h5 class="text-uppercase my-3 headingMain fw-bold">
                    <i class="fa-solid fa-circle-info me-2 text-danger fs-6"></i>
                    Personal Details
                </h5>

                <div class="col  mb-2  ps-5">
                    <div class="row ">
                        <div class="col-2">
                            <span class="fs-6 me-1 text-black text-capitalize"> Recruiter ID :</span>
                        </div>
                        <div class="col-3">
                            <span class="text-muted fs-6  text-capitalize"><?php echo $row['recruiterid']; ?></span>
                        </div>
                    </div>

                </div>
                
                <div class="col  mb-2  ps-5">
                    <div class="row ">
                        <div class="col-2">
                            <span class="fs-6 me-1 text-black text-capitalize"> email :</span>
                        </div>
                        <div class="col-3">
                            <span class="text-muted fs-6  text-capitalize"><?php echo $row['email']; ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="col  mb-2  ps-5">
                    <div class="row ">
                        <div class="col-2">
                            <span class="fs-6 me-1 text-black text-capitalize"> full name :</span>
                        </div>
                        <div class="col-3">
                            <span class="text-muted fs-6  text-capitalize"><?php echo $row['firstname']; echo" "; echo $row['lastname'];?></span>
                        </div>
                    </div>

                </div>
                
                <div class="col  mb-2  ps-5">
                <div class="row ">
                        <div class="col-2">
                            <span class="fs-6 me-1 text-black text-capitalize"> username :</span>
                        </div>
                        <div class="col-3">
                            <span class="text-muted fs-6  text-capitalize"><?php echo $row['username']; ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="col  mb-2  ps-5">
                    <div class="row ">
                        <div class="col-2">
                            <span class="fs-6 me-1 text-black text-capitalize"> phone number :</span>
                        </div>
                        <div class="col-3">
                            <span class="text-muted fs-6  text-capitalize"><?php echo $row['phonenumber']; ?></span>
                        </div>
                    </div>

                </div>
                
                <div class="col  mb-2  ps-5">
                    <div class="row ">
                        <div class="col-2">
                            <span class="fs-6 me-1 text-black text-capitalize"> postal code :</span>
                        </div>
                        <div class="col-3">
                            <span class="text-muted fs-6  text-capitalize">Lorem, ipsum dolor.</span>
                        </div>
                    </div>
                </div>

                <h5 class="text-uppercase my-3 headingMain fw-bold">
                        <i class="fa-solid fa-building-user me-2 text-danger fs-6"></i>
                        Company Details
                    </h5>

                <div class="col  mb-2  ps-5">
                    <div class="row ">
                        <div class="col-2">
                            <span class="fs-6 me-1 text-black text-capitalize"> company name :</span>
                        </div>
                        <div class="col-3">
                            <span class="text-muted fs-6  text-capitalize"><?php echo $row['companyname']; ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="col  mb-2  ps-5">
                    <div class="row ">
                        <div class="col-2">
                            <span class="fs-6 me-1 text-black text-capitalize"> company address :</span>
                        </div>
                        <div class="col-3">
                            <span class="text-muted fs-6  text-capitalize"><?php echo $row['com_address']; ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="col  mb-2  ps-5">
                    <div class="row ">
                        <div class="col-2">
                            <span class="fs-6 me-1 text-black text-capitalize"> website :</span>
                        </div>
                        <div class="col-3">
                            <span class="text-muted fs-6  text-capitalize"><?php echo $row['website']; ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="col  mb-2  ps-5">
                    <div class="row ">
                        <div class="col-2">
                            <span class="fs-6 me-1 text-black text-capitalize"> company size :</span>
                        </div>
                        <div class="col-3">
                            <span class="text-muted fs-6  text-capitalize"><?php echo $row['people']; ?></span>
                        </div>
                    </div>
                </div>

                <div class="col  mb-2  ps-5">
                    <div class="row ">
                        <div class="col-2">
                            <span class="fs-6 me-1 text-black text-capitalize"> compny description<span class="fw-bolder">:</span></span>
                        </div>
                        <div class="col-3">
                            <span class="text-muted fs-6  text-capitalize"><?php echo $row['companydescription']; ?></span>
                        </div>
                    </div>
                </div>
                
            </div>

            <hr class="text-muted opacity-50 my-5">

            <div class="row py-5">
                <div class="">
                <!-- <h5 class="">Jobs Posted <i class="fa-solid fa-briefcase text-success"></i></h5> -->
                <h5 class="text-uppercase my-3 headingMain fw-bold">
                    <i class="me-2 fa-solid fa-briefcase text-danger"></i>
                    Jobs Posted 
                </h5>

                <ul class="list-group" id="myul">
                        <?php 

                        $sql = "SELECT * from jobs where recruiterid = '$recuid'";
                        $query = mysqli_query($conn, $sql);
                        // $counter = mysql_fetch_array($query);
                        $rowcount=mysqli_num_rows($query);
                        

                        if ($rowcount > 0) {

                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            
                        <li style="list-style-type: none;" class="">
                            <!-- <tr> -->
                            <div href="#" class="position-static joblink list-group-item list-group-item-action my-2 rounded-0 shadow-sm bg-white" >
                                <div class="row justify-content-sm-center justify-content-md-around  ">
                                    <div class="col-sm-5 col-md-1">
                                        <img src="assests/img/blue-login.jpg " class="" alt="" style="width: 50px; height: 50px;">
                                    </div>
                                <div class="col-sm-12 col-md-10 col-lg-11">
                                    <div class="row">
                                        <div class="col-11 mb-2">
                                            <h5 class="text-uppercase" id="positions">
                                                <span class="text-capitalize fw-lighter">Position : </span>
                                                <?php echo $row['position']; ?>
                                                <span><a href="deleter.php?delover=<?php echo $row['position']; ?>">
                                                    <i class="fa-solid fa-xmark float-end text-danger fs-4 border border-1 px-1 border-success"></i></a>
                                                </span>
                                                
                                            </h5>
                                            <span class="text-capitalize fw-bold" id="" name="Companyname">
                                                <span class="text-capitalize fw-lighter small fst-italic">company : </span>
                                                <?php echo $row['companyname']; ?>
                                            </span>
                                        </div>
                                        <div class="col-11">
                                            <p>
                                            <span class="text-capitalize fw-lighter small fst-italic">job description : </span>
                                            <?php echo $row['description']; ?>
                                            </p>
                                        </div>
                                        <div class=" row justify-content-between">
                                        <div class="col-sm-11 col-md-7 text-success small">
                                            <i class="bi bi-geo-alt text-primary"></i>
                                            <span id="" name="" class="me-4 bg-primary fw-bold px-2 rounded-0 text-white text-capitalize">
                                                <?php echo $row['country']; ?>
                                            </span>
                                            <i class="bi bi-briefcase text-success"></i>
                                            <span id="" name="" class="me-4 bg-success fw-bold px-2 rounded-0 text-white text-capitalize">
                                                <?php echo $row['worktype']; ?>
                                            </span>
                                            <i class="bi bi-briefcase text-warning"></i>
                                            <span id="" name="" class="me-4  bg-warning fw-bold px-2 rounded-0 text-black text-capitalize">
                                                <?php echo $row['jobcategory']; ?>
                                            </span>
                                        </div>
                                        
                                        <div class="col-sm-11 col-md-3 text-danger small">
                                            <i class="bi bi-clock"></i>
                                            <span id="" name="" class="">a day ago</span>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <?php }
                         }else{
                            echo '<h4 class = "text-danger ms-5"> No Job Posted !!! </h4>';
                         }
                        ?>
                            </li>
                    </ul>

                
                </div>
            </div>
            
                <?php }
                    
                    ?>
        </div>

    </section>

</main>

    </body>
</html>
