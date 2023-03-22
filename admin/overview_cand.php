<?php 
session_start();
$candid =$_SESSION['id'];
$country = $_SESSION['country'];
$city = $_SESSION['city'];

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
    include("include/sidebar.php");
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-0 " id="mainPage">

    <div class="w-100 position-fixed mx-0 px-0 mb-5 mt-0">
        <div class=" bg-success container py-2 position-fixed d-flex justify-content-between">
            <h4 class="text-uppercase text-dark">Overview   </h4>
        </div>
    </div>

    <section id="" class=" mx-4 py-3 pt-5">

        <div class=" ">

            <?php 

                    $sql = "SELECT * from candidate_login where candidateid = '$candid'";
                    $query = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_array($query)) {
                        ?>


                <div class="row row-cols-1 my-5 justify-content-around">
                    <h5 class="text-uppercase my-3 headingMain fw-bold">
                        <i class="fa-solid fa-circle-info me-2 text-danger fs-6"></i>
                        Personal Details
                    </h5>

                    <div class="col  mb-3 ps-5">
                        <div class="row ">
                            <div class="col-2">
                                <span class="fs-6 me-1 text-black text-capitalize"> candidate ID :</span>
                            </div>
                            <div class="col-3">
                                <span class="text-muted fs-6  text-capitalize"><?php echo $row['candidateid']; ?></span>
                            </div>
                        </div>

                    </div>
                    
                    <div class="col  mb-3 ps-5">
                    <div class="row ">
                            <div class="col-2">
                                <span class="fs-6 me-1 text-black text-capitalize"> email :</span>
                            </div>
                            <div class="col-3">
                                <span class="text-muted fs-6  text-capitalize"><?php echo $row['email']; ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col  mb-3 ps-5">
                        <div class="row ">
                            <div class="col-2">
                                <span class="fs-6 me-1 text-black text-capitalize"> full name :</span>
                            </div>
                            <div class="col-3">
                                <span class="text-muted fs-6  text-capitalize"><?php echo $row['firstname']; echo" "; echo $row['lastname'];?></span>
                            </div>
                        </div>

                    </div>
                    
                    <div class="col  mb-3 ps-5">
                        <div class="row ">
                            <div class="col-2">
                                <span class="fs-6 me-1 text-black text-capitalize"> username :</span>
                            </div>
                            <div class="col-3">
                                <span class="text-muted fs-6  text-capitalize"><?php echo $row['username']; ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col  mb-3 ps-5">
                        <div class="row ">
                            <div class="col-2">
                                <span class="fs-6 me-1 text-black text-capitalize"> phone number :</span>
                            </div>
                            <div class="col-3">
                                <span class="text-muted fs-6  text-capitalize"><?php echo $row['phone_number']; ?></span>
                            </div>
                        </div>

                    </div>
                    
                    <div class="col  mb-3 ps-5">
                        <div class="row ">
                            <div class="col-2">
                                <span class="fs-6 me-1 text-black text-capitalize"> postal code :</span>
                            </div>
                            <div class="col-3">
                                <span class="text-muted fs-6  text-capitalize"><?php echo $row['postal_code']; ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- <h5 class="mt-3 mb-2">Company Details <i class="fa-solid fa-building-user text-danger-emphasis"></i></h5> -->

                    <div class="col  mb-3 ps-5">
                    <div class="row ">
                            <div class="col-2">
                                <span class="fs-6 me-1 text-black text-capitalize"> country :</span>
                            </div>
                            <div class="col-3">
                                <span class="text-muted fs-6  text-capitalize"><?php echo $row['country']; ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col  mb-3 ps-5">
                        <div class="row ">
                            <div class="col-2">
                                <span class="fs-6 me-1 text-black text-capitalize"> city :</span>
                            </div>
                            <div class="col-3">
                                <span class="text-muted fs-6  text-capitalize"><?php echo $row['city']; ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col  mb-3 ps-5">
                        <div class="row ">
                            <div class="col-2">
                                <span class="fs-6 me-1 text-black text-capitalize"> address :</span>
                            </div>
                            <div class="col-3">
                                <span class="text-muted fs-6  text-capitalize"><?php echo $row['address']; ?></span>
                            </div>
                        </div>
                    </div>
                    
                </div>

            <?php }?>
            

            <!-- <hr class="text-muted opacity-50 my-5"> -->


            <hr class="text-muted opacity-25 my-5">
                <h5 class="text-uppercase my-3 headingMain fw-bold">
                    <i class="fa-solid me-2 fa-briefcase text-danger"></i>
                    Resume 
                </h5>

              <!-- <div class="row"> -->
                <div class="row  pe-5 justify-content-around">

                    <div class="col-3">
                        <h3 class="text-capitalize fs-6 ">personal details</h3>
                        <a href="http://localhost/findMe/admin/cv.php" class="cv_card_img d-flex align-items-center text-decoration-none text-black justify-content-center py-5 mb-5 ">
                            <span class="text-center my-5">create your new resume<br>+</span>
                        </a>

                    </div>

                    <div class="col-3 ">
                        <h3 class="text-capitalize fs-6 ">View your resume</h3>
                        <a href="http://localhost/findMe/admin/cvcomplied.php" target="_blank" class="cv_card_img d-flex align-items-center overflow-hidden text-black mb-5 ">
                            <img src="assests/img/resume.jpg" alt="" class="img-fluid overview_cvimg">
                        </a>

                    </div>

                    

                  </div>

                  <ul>
                    <!-- <h4 class="fs-3 text-success">CV Uploaded</h4> -->
                    <hr class="text-muted opacity-25 my-5">
                    <h5 class="text-uppercase my-3 headingMain fw-bold">
                        <i class="fa-solid me-2 fa-book text-danger"></i>
                        CV Uploaded 
                    </h5>
                    <?php
                    $sql = "SELECT * FROM file WHERE candidateid = '$candid'";
                    $query = mysqli_query($conn, $sql);
                        // $row = mysqli_num_rows($query);
                    

                    while ($rows4 = mysqli_fetch_array($query)){
                        $counter = 0;
                        $counter++;
                    
                    ?>
                    <li class="ms-5" style="list-style: ;"><a href="upload/<?php echo $rows4['filename']; ?>" target="_blank">
                    <?php echo $rows4['filename']; ?><?php echo $counter; ?></li></a>
                    <?php }?>
                  </ul>


            
            
                    
                <!-- personal part -->
        </div>
            
        <!-- </form> -->
        <!-- <hr class="w-50 text-center mx-auto text-dark my-5 border-1"> -->

    </section>

</main>

    </body>
</html>
