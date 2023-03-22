<?php 
session_start();



include('connection/db.php');
if(isset($_POST['submitr'])){
   $emailr = $_POST['emailr'];
    $firstnamer = $_POST['firstnamer'];
    $lastnamer = $_POST['lastnamer'];
    $passwordr = md5($_POST['passwordr']);
    $compasswordr = md5($_POST['conpasswordr']);
    $recuid = $_POST['recuid'];
    $usernamer = $firstnamer.$lastnamer;

   $sql = " SELECT * FROM recruiter_login WHERE email = '$emailr' && password = '$passwordr' ";
//    $sql = " SELECT * FROM candidate_login WHERE candidateid = '$candidateid' && password = '$passwordr' ";

      $res=mysqli_query($conn,$sql);

            if (strlen($firstnamer) > 0 && strlen($lastnamer) > 0 && strlen($passwordr) > 0  && strlen($emailr) > 0 && strlen($recuid) > 0)
            {

                if (mysqli_num_rows($res) > 0) {

                    $error[] = 'user already exist!';

                    }
                else{

                        $idchecker = " select * from recruiter_login where recruiterid = '$recuid'";
                        $idcheckerc = " select * from candidate_login where candidateid = '$recuid'";
                        if(mysqli_num_rows(mysqli_query($conn, $idchecker)) > 0){
                            $error[] = 'ID already exist!';
                        }elseif (mysqli_num_rows(mysqli_query($conn, $idcheckerc))) {
                            $error[] = 'ID already exist!';
                        }
                        else {
                            if($compasswordr != $passwordr){
                                $error[] = 'password not matched!';
                            }
                            else{
                                $sql = "insert into recruiter_login(firstname, lastname, username, password, email, recruiterid) values ( '$firstnamer', '$lastnamer', '$usernamer', '$passwordr', '$emailr', '$recuid')";
                                $query = mysqli_query($conn, $sql);
                                header('location:loginpage.php');
    
                                }
                        }
                        
                    }

            }else{echo '<script> alert("Fill out the entire form");</script>';}
}

if(isset($_POST['submitc'])){
    $emailc = $_POST['emailc'];
     $firstnamec = $_POST['firstnamec'];
     $lastnamec = $_POST['lastnamec'];
     $candidateid = $_POST['candidateid'];
     $usernamec = $firstnamec.$lastnamec;
    $passwordc = md5($_POST['passwordc']);
    $compasswordc = md5($_POST['conpasswordc']);

   $sql = " SELECT * FROM candidate_login WHERE email = '$emailc' && password = '$passwordc' ";

      $res=mysqli_query($conn,$sql);

            if (strlen($firstnamec) > 0 && strlen($lastnamec) > 0 && strlen($passwordc) > 0  && strlen($emailc) > 0 && strlen($candidateid) > 0)
            {

                if (mysqli_num_rows($res) > 0) {

                    $error[] = 'user already exist!';

                    }
                    else{
                        $idchecker = " select recruiterid from recruiter_login where recruiterid = '$candidateid'";
                        $idcheckerc = " select candidateid from candidate_login where candidateid = '$candidateid'";
                        if(mysqli_num_rows(mysqli_query($conn, $idchecker))){
                            $error[] = 'ID already exist!';
                        }elseif (mysqli_num_rows(mysqli_query($conn, $idcheckerc)) > 0) {
                            $error[] = 'ID already exist!';
                        }
                        else{

                            if($compasswordr != $passwordr){
                                $error[] = 'password not matched!';
                            }
                            else{
                                $sql = "insert into candidate_login(firstname, lastname, username, password, email, candidateid)
                                 values 
                                 ( '$firstnamec', '$lastnamec', '$usernamec', '$passwordc', '$emailc', '$candidateid')";
                                $query = mysqli_query($conn, $sql);
                                header('location:loginpage.php');
    
                                }
                        }

                    }
                

            }else{echo '<script> alert("Fill out the entire form");</script>';}
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


<!-- Section: Design Block -->
<section class=" signup-form h-100">
        
        <a class="navbar-brand ms-5 text-white fs-3" href="http://localhost/findMe/admin/homepage.php">
            <span  class="text-primary">Find</span><span class="text-danger">me</span>
        </a>
            <div class="px-4 py-5 px-md-5 text-center text-lg-start container">
                <div class="container">
                    <div class="row gx-lg-5 align-items-center justify-content-between">
    
                        <!-- the addlips of the form -->
                        <div class="col-lg-6 mb-5 mb-lg-0 ">
    
                            <h5 class="fs-2 text-center pt-1 text-primary ">Welcome
                                <i class="bi bi-emoji-smile text-warning fw-bold fs-2"></i>
                                <i class="fa-solid fa-face-smile-wink text-warning fw-bold fs-2"></i>
                                <i class="fa-solid fa-face-grin-wide text-warning fw-bold fs-2"></i>
                            </h5>
    
                            <div class="d-flex justify-content-center align-items-center w-100 h-50 flex-column">
                                <h5 class="fs-2 mb-3 text-white">Sign Up as?</h5>
    
                                <span>
                                    <input type="checkbox" class="ms-0 px-0" id="Check1" checked value="Value1" onclick="selectOnlyThis(this.id)"style="width: 20px; height: 20px;" >
                                    <span class="fs-4 text-white-50 ">Recruiter</span>
                                </span>
                                <span>
                                    <input type="checkbox" id="Check2" value="Value1" onclick="selectOnlyThis(this.id)" style="width: 20px; height: 20px;">
                                    <span class="fs-4 text-white-50">Candidate</span>
                                </span>
                            </div>
    
                        </div>
    
                        <!-- the form itself -->
                        <div class="col-lg-5 mb-5 mb-lg-0">
                            <div class=" bg-transparent ">
                                <div class="py-2 px-md-5">

                                <?php
                                        if(isset($error)){
                                            foreach($error as $error){
                                                echo '<span class="error-msg fw-bolder text-danger">'.$error.'</span>';
                                            };
                                        };
                                    ?>
    
    
                                    <form action="" method="post" id="recruiter_form" class="" name="">
    
                                    
    
                                        <!-- Name input -->
                                        <div class="form-outline mb-3">
                                            <div class="row justify-content-between"> 
                                                <label class="form-label col-4 px-0" for="">Email Address</label>
                                                <div class="col-7 px-0">
                                                    <input name="emailr" type="email" id="emailr" class="form-control" placeholder="Email Address" />
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="form-outline mb-3">
                                            <div class="row justify-content-between"> 
                                                <label class="form-label col-4 px-0" for="">First Name</label>
                                                <div class="col-7 px-0">
                                                    <input name="firstnamer" type="text" id="firstnamer" class="form-control" placeholder="First Name" />
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="form-outline mb-3">
                                            <div class="row justify-content-between"> 
                                                <label class="form-label col-4 px-0" for="">Last Name</label>
                                                <div class="col-7 px-0">
                                                    <input type="text" id="lastnamer" name="lastnamer" class="form-control" placeholder="Last Name" />
                                                </div>
                                            </div>
                                        </div>
    
                                        <!-- Password input -->
                                        <div class="form-outline mb-3">
                                            <div class="row justify-content-between"> 
                                                <label class="form-label col-4 px-0 " for="">Password</label>
                                                <div class="col-7 px-0">
                                                    <input type="password" id="passwordr" name="passwordr" class="form-control" placeholder="password"/>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="form-outline mb-2">
                                            <div class="row justify-content-between"> 
                                                <label class="form-label col-4 px-0 " for="">Confirm Password</label>
                                                <div class="col-7 px-0">
                                                    <input type="password" id="conpasswordr" name="conpasswordr" class="form-control" placeholder="retype password"/>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="form-outline mb-2">
                                            <div class="row justify-content-between"> 
                                                <label class="form-label col-4 px-0 " for="">Recruiter ID</label>
                                                <div class="col-7 px-0">
                                                    <input type="text" id="recuid" name="recuid" class="form-control text-uppercase" placeholder="eg: FLOW98"/>
                                                    
                                                </div>
                                            </div>
                                        </div>
    
                                        <!-- Submit button -->
                                        <div class="pt-1 mb-1 d-flex justify-content-center">
                                            <button class="btn text-white fw-bold px-5 mt-3 border-1 border-success rounded-0" type="submit" name="submitr" id="submitr">
                                                Sign up
                                            </button>
                                        </div>
                                        
    
    
                                    </form>
    
                                    <form action="" method="post" id="candidate_form" class="" name="">
    
                                        <!-- Name input -->
                                        <div class="form-outline mb-3">
                                            <div class="row justify-content-between"> 
                                                <label class="form-label col-4 px-0" for="">Email Address</label>
                                                <div class="col-7 px-0">
                                                    <input name="emailc" type="email" id="emailc" class="form-control" placeholder="Email Address" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-outline mb-3">
                                            <div class="row justify-content-between"> 
                                                <label class="form-label col-4 px-0" for="">First Name</label>
                                                <div class="col-7 px-0">
                                                    <input name="firstnamec" type="text" id="firstnamec" class="form-control" placeholder="First Name" />
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="form-outline mb-3">
                                            <div class="row justify-content-between"> 
                                                <label class="form-label col-4 px-0 " for="">Last Name</label>
                                                <div class="col-7 px-0">
                                                    <input type="text" id="lastnamec" name="lastnamec" class="form-control" placeholder="Last Name" />
                                                </div>
                                            </div>
                                        </div>
    
                                        <!-- Password input -->
                                        <div class="form-outline mb-3">
                                            <div class="row justify-content-between"> 
                                                <label class="form-label col-4 px-0 " for="">Password</label>
                                                <div class="col-7 px-0">
                                                    <input type="password" id="passwordc" name="passwordc" class="form-control" placeholder="password"/>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="form-outline mb-2">
                                            <div class="row justify-content-between"> 
                                                <label class="form-label col-4 px-0 " for="">Confirm Password</label>
                                                <div class="col-7 px-0">
                                                    <input type="password" id="conpasswordc" name="conpasswordc" class="form-control" placeholder="retype password"/>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="form-outline mb-2">
                                            <div class="row justify-content-between"> 
                                                <label class="form-label col-4 px-0 " for="">Candidate ID</label>
                                                <div class="col-7 px-0">
                                                    <input type="text" id="candidateid" name="candidateid" class="form-control text-uppercase" placeholder="eg: FLOW98"/>
                                                </div>
                                            </div>
                                        </div>
    
                                        <!-- Submit button -->
                                        <div class="pt-1 mb-1 d-flex justify-content-center">
                                            <button class="btn text-white fw-bold px-5 mt-3 border-1 border-danger rounded-0" type="submit" name="submitc" id="submitc">
                                                Sign Up
                                            </button>
                                        </div>
    
    
                                    </form>
    
                                    <!-- Checkbox -->
                                    <a class=" mb-5 pb-lg-2" href="http://localhost/findMe/admin/loginpage.php" style="color: #393f81;">
                                        Already a Member? <span class="text-decoration-underline fw-bold text-warning">Login</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    
        <script>
            function selectOnlyThis(id) {
            var clase = document.getElementById("cznn");
            var recruiter_form = document.getElementById("recruiter_form");
            var candidate_form = document.getElementById("candidate_form");
    
            for (var i = 1;i <= 2; i++)
            {
                var ele = document.getElementById("Check" + i).checked = false;
            }
                var elem = document.getElementById(id).checked = true;
    
                if(document.getElementById("Check1").checked == true){
                recruiter_form.style.display = "block";
                candidate_form.style.display = "none";
    
                }else if(document.getElementById("Check2").checked == true){
                recruiter_form.style.display = "none";
                candidate_form.style.display = "block";
            }
    
            }
        </script>

</body>
</html>





