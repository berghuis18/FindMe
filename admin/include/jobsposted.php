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
    <!-- <link rel="stylesheet" href="../css/steam.css"> -->
    <link rel="stylesheet" href="../css/steam.css">

    <style>
        
    </style>
</head>
<body>

<section id="" class=" container-fluid my- bg-light p-5">
            <div class="container py-5">
                <!-- <h4 class="text-capitalize">Jobs</h4> -->



                <div class="">

                <ul class="list-group" id="myul">
                        <?php 

                        $sql = "SELECT * from jobs";
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
                                                <!-- <span><a href="deleter.php?delover=<?php echo $row['position']; ?>">
                                                    <i class="fa-solid fa-plus float-end text-success fs-4 border border-1 px-1 border-success"></i></a>
                                                </span> -->
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
                                            <span id="worktype" name="" class="me-4 bg-success fw-bold px-2 rounded-0 text-white text-capitalize">
                                                <?php echo $row['worktype']; ?>
                                            </span>
                                            <i class="bi bi-briefcase text-warning"></i>
                                            <span id="jobcategory" name="" class="me-4  bg-warning fw-bold px-2 rounded-0 text-black text-capitalize">
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
        </section>


</body>
</html>