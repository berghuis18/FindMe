<?php 
include('connection/db.php');

session_start();
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
        <h4 class="text-uppercase text-dark">profile</h4>
    </div>
</div>

<section id="" class=" mx-4 py-3 pt-5">

    <!-- <h4 class="text-uppercase text-center mb-4 ">Resume</h4> -->

    <form class="container resume_form mt-5" form action="" method="post" id="">

        <div class=" ">
        <!-- <h5 class="fs-6 fw-bold text-center text-decoration-underline text-primary">Profile </h5> -->


            <!-- personal part -->
            <div class="shadower d-flex jutify-content-center align-items-center flex-column  px-1 pt-5  ">

                <div class="col-sm-11 col-md-11 ">
                    <div class="col-12  mb-3">
                            <label for="" class="form-label text-capitalize h5 small">company name</label>
                            <input type="text" class="form-control text-capitalize" id="" required name="companyname" placeholder="Carrefour Inc...">
                        </div>
                    
                    <div class="row row-cols-2">

                        <div class="col  mb-3">
                            <label for="" class="form-label text-capitalize h5 small">postal code</label>
                            <input type="text" class="form-control text-uppercase" id="" name="cpostalcode" placeholder="Postal Code">
                        </div>

                        <div class="col mb-3">
                            <label for="" class="form-label text-capitalize h5 small">address</label>
                            <input type="text" class="form-control text-capitalize " id="" name="caddress" placeholder="Bvld Hassan ...">
                        </div>

                        <div class="col mb-3">
                            <label for="" class="form-label text-capitalize h5 small">country</label>
                            <input type="text" class="form-control text-capitalize" id="" name="ccountry" placeholder="Morocco">
                        </div>
                        
                        <div class="col mb-3">
                            <label for="" class="form-label text-capitalize h5 small">city</label>
                            <input type="text" class="form-control text-capitalize" id="" name="ccity" placeholder="Miami">
                        </div>
                        
                        <div class="col mb-3">
                            <label for="" class="form-label text-capitalize h5 small">phone number</label>
                            <input type="text" class="form-control" id="" name="phonenumber" placeholder="(+212) 745 315 974">
                        </div>
                        
                        <div class="col mb-3">
                            <label for="" class="form-label text-capitalize h5 small">email address</label>
                            <?php
                                include('connection/db.php');
                                $sql = "SELECT * from recruiter_login where recruiterid = 'Flow98' ";
                                $query = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                            <input type="text" class="form-control" id="" readonly value="<?php echo $row['email']; ?>" name="cemail" placeholder="user@outlook.com">
                            <?php } ?>
                        </div>
                        
                        <div class="col mb-3">
                            <label for="" class="form-label text-capitalize h5 small">website</label>
                            <input type="text" class="form-control text-lowercase" id="" name="website" placeholder="facebook.com">
                        </div>
                        
                        <div class="col mb-3">
                            <label for="" class="form-label text-capitalize h5 small">people</label>
                            <input type="text" class="form-control" id="" name="people" placeholder="10 - 1000">
                        </div>
                        
                    </div>
                    
                </div>

                <div class="col-sm-11 col-md-11 mb-3">
                    <label for="" class="form-label h5 small text-capitalize">company description</label>
                    <textarea class="form-control " id="" rows="4" name="comdescription" style="resize:none;"></textarea>
                </div>

                <div class="col-sm-11 col-md-11 mb-3">
                    <label for="" class="form-label h5 small text-capitalize">company services</label>
                    <textarea class="form-control" id="" rows="4" placeholder="The kind of Services you offer to your clients." name="serdescription" style="resize:none;"></textarea>
                </div>

                <div class="col-sm-11 col-md-2  my-3 ms-auto">
                    <button class="btn btn-dark float-end text-lowercase rounded-0 btn-sm small  " type="submit" id="submit" name="submitper">
                        submit
                    </button>
                </div>

            </div>
            
        </div>
        
    </form>
    <!-- <hr class="w-50 text-center mx-auto text-dark my-5 border-1"> -->

</section>

</main>

    </body>
</html>


<?php

include('connection/db.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
if(isset($_POST['submitper'])){

    $com_name = $_POST['companyname'];
    $com_postcode = $_POST['cpostalcode'];
    $com_address = $_POST['caddress'];
    $com_country = $_POST['ccountry'];
    $com_city = $_POST['ccity'];
    $com_phonenumber = $_POST['phonenumber'];
    $com_email = $_POST['cemail'];
    $com_people = $_POST['people'];
    $com_website = $_POST['website'];
    $com_description = $_POST['comdescription'];
    $com_service = $_POST['serdescription'];

    if (
        strlen($com_name) > 0 && strlen($com_country) > 0 && strlen($com_phonenumber) > 0  && strlen($com_description) > 0
        )
    {
        $sql ="UPDATE recruiter_login
            SET companyname = '$com_name', postalcode= '$com_postcode',
            com_address = '$com_address', country= '$com_country',
            city = '$com_city', phonenumber= '$com_phonenumber',
            website = '$com_website', people= '$com_people',
            companydescription = '$com_description', servicedescription= '$com_service'
            WHERE recruiterid='$recuid'";
            $query = mysqli_query($conn, $sql);

            if ($query) 
            {
                echo '<script> alert("success updated");</script>';
            }else{echo '<script> alert("updating failed");</script>';}
    }else{echo '<script> alert("fill the mepty box");</script>';}

}

}
?>