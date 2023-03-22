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
</head>
<body>

    <?php
        include("include/sidebar.php");
    ?>
            
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-0 " id="mainPage">
        
        <div class="w-100 position-fixed mx-0 px-0 mb-5 mt-0">
            <div class=" bg-success container py-2 position-fixed d-flex justify-content-between">
                <h4 class="text-uppercase text-dark">recommended jobs</h4>
            </div>
        </div>

        <section id="" class=" mx-4 py-5">

            <div class="container">

                <div class="pt-5">

                <div class="row bg-light pt-5 container-fluid row-cols-3 ">
                    <div class="col-4 mx-auto">
                        <label for="" class="form-label small" id="">Job Title..</label>
                        <!-- <input type="text" id="" class="form-control" name="position"  placeholder="Eg. Manager" id="myInput" onkeyup="myFunction()"> -->
                        <input type="text" class="form-control" id="myInput" onkeyup="myFunction1()" placeholder="Search for names..">
                    </div>
            
                    <div class="col-4 mx-auto">
                        <label for="" class="form-label small" id="">Work Type..</label>
                        <!-- <input type="text" id="" class="form-control" name="position"  placeholder="Eg. Manager" id="myInput" onkeyup="myFunction()"> -->
                        <!-- <input type="text" class="form-control" id="worktypeinp" onkeyup="myFunction1()" placeholder="Search for names.."> -->
                        <!-- <label class="form-label">Datalist example</label> -->
                        <input class="form-control" list="datalistOptions" id="worktypeinp" placeholder="Type to search..." onkeyup="myFunction2()">
                        <datalist id="datalistOptions">
                            <option value="Full time">
                            <option value="Part time">
                            <option value="Hybrid">
                            <option value="Freelance">
                            <option value="Internship">
                        </datalist>
                    </div>

                    <div class="col-4 mx-auto">
                        <label for="" class="form-label small" id="">Job Category..</label>
                        <input class="form-control text-capitalize" list="datalistOptionz" id="jobcategoryinp" placeholder="Type to search..." onkeyup="myFunction3()">
                        <datalist id="datalistOptionz" class="text-capitalize">
                            <option value="Accounting">
                            <option value="Auditing">
                            <option value="Banking and  Financial Services">
                            <option value="Catering">
                            <option value="Creative and Tesign">
                            <option value="Education and Training">
                            <option value="Enginnering">
                            <option value="Healthcare and Pharmaceutical">
                            <option value="IT and Telecoms">
                            <option value="Legal">
                            <option value="Marketing and Natural Resources">
                            <option value="Manufacturing">
                        </datalist>
                    </div>
            
        
                </div>

                <div class="container-fluid">
                    <?php
                    include("include/jobsposted.php");
                    ?>

                    <script src="js/script.js"></script>

                    <!-- <script> -->
                            
                        <!-- </script> -->

                </div>
            
            </div>

        </section>

    </main>



    


    </body>
</html>
