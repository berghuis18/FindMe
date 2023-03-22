<?php 

session_start();
$recuid =$_SESSION['id'];
if(!isset($_SESSION['id'])){
   header('location:loginpage.php');
}

include('connection/db.php');


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

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-0" id="mainPage">

        <div class="w-100 position-fixed mx-0 px-0 mb-5 mt-0">
            <div class=" bg-warning container py-2 position-fixed d-flex justify-content-between">
                <h4 class="text-uppercase text-dark">post job</h4>
            </div>
        </div>

        <section id="" class=" mx-4 py-3 pt-5">

            <form class=" shadower resume_form mt-5" form action="" method="post" id="">

                <div class="d-flex jutify-content-center align-items-center flex-column mb-4 mt-3 pt-5">

                    <div class="col-sm-11 col-md-8 mb-3">
                        <label for="" class="form-label text-capitalize h5 small">position</label>
                        <input type="text" class="form-control rounded-0 text-capitalize" id="" name="position" placeholder="eg. Fronted Develepper">
                    </div>
                    
                    <div class="col-sm-11 col-md-8 mb-3">
                        <label for="" class="form-label text-capitalize h5 small">company name</label>
                        <input type="text" class="form-control rounded-0 text-capitalize" id="" name="companyname" placeholder="Carrefour Inc...">
                    </div>

                    <div class="col-sm-11 col-md-8 mb-3">

                        <div class="row justify-content-between">

                            <div class="col-6">
                                <label for="" class="form-label text-capitalize h5 small">country</label>
                                <input type="text" class="form-control rounded-0 text-capitalize" id="" name="companycountry" placeholder="Maroc">
                            </div>

                            <div class="col-4">
                                <label for="" class="form-label text-capitalize h5 small">city</label>
                                <input type="text" class="form-control rounded-0 text-capitalize" id="" name="companycity" placeholder="Settat">
                            </div>

                        </div>

                    </div>

                    <div class="col-sm-11 col-md-8 mb-3">

                        <div class="row justify-content-between">
                            <div class="col-6">
                                <label for="" class="form-label text-capitalize h5 small">Job Category</label>
                                <select class="form-select rounded-0 text-capitalize" id="" name="jobcategory">
                                    <option value="" selected>select</option>
                                    <option value="accounting">accounting</option>
                                    <option value="auditing">auditing</option>
                                    <option value="banking and  financial services">banking and  financial services</option>
                                    <option value="catering">catering</option>
                                    <option value="creative and design">creative and design</option>
                                    <option value="education and training">education and training</option>
                                    <option value="enginnering">enginnering</option>
                                    <option value="healthcare and pharmaceutical">healthcare and pharmaceutical</option>
                                    <option value="it and telecoms">it and telecoms</option>
                                    <option value="legal">legal</option>
                                    <option value="marketing and natural resources">marketing and natural resources</option>
                                    <option value="manufacturing">manufacturing</option>
                                    <option value="other">other</option>
                                </select>
                            </div>
                            <div class="col-4">

                                <label for="" class="form-label text-capitalize h5 small">Work Type</label>
                                <select class="form-select rounded-0" id="" name="worktype">
                                    <option value="full time">Full Time</option>
                                    <option value="part time">Part Time</option>
                                    <option value="hybrid">Hybrid</option>
                                    <option value="Freelance">Freelance</option>
                                    <option value="Internship">Internship</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <div class="col-sm-11 col-md-8 mb-3">
                        <label for="" class="form-label h5 small">Description</label>
                        <textarea class="form-control rounded-0" id="" rows="4" name="jobdescription" style="resize:none;"></textarea>
                    </div>

                    <div class="col-sm-11 col-md-8 mb-3">
                        <button class="btn btn-success fw-bold rounded-0 " type="submit" id="submit" name="submit">POST</button>
                        <!-- <input name="submit" type="submit" class="btn btn-success btn-block rounded-0" placeholder="Save" id="submit" class="submit"> -->
                    </div>

                </div>
            </form>
                
                


        </section>

    </main>

            
            
            </div>
          </div>

    </body>
</html>



<?php
if(isset($_POST['submit'])){
   $worktype = $_POST['worktype'];
    $position = $_POST['position'];
    $jobdescription = $_POST['jobdescription'];
    $compname = $_POST['companyname'];
    $companycountry = $_POST['companycountry'];
    $companycity = $_POST['companycity'];
    $jobcategory = $_POST['jobcategory'];
    if (
        strlen($position) > 0 && strlen($jobdescription) > 0
         && strlen($jobcategory) > 0 && strlen($compname) > 0 && strlen($worktype) > 0) 
         {
            $sql = "insert into jobs(position, description, companyname, country, city, jobcategory, worktype, recruiterid) values ( '$position', '$jobdescription', '$compname', '$companycountry', '$companycity', '$jobcategory', '$worktype', '$recuid')";
            $query = mysqli_query($conn, $sql);
            if($query){
              echo '<script> alert("success");</script>';
            }
        }else{
        echo '<script> alert("Fill the Empty field");</script>';
        // echo '
        // <div class="text-success h1>
        //     please fill out all the required fields...
        // </div>';
    }
}
?>


