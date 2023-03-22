<?php 
session_start();


include('connection/db.php');
if (isset($_POST['submitr'])) {
    $emailr = $_POST['emailr'];
    $passr = md5($_POST['passwordr']);
    $aminer = md5('admin');

    // recruiter sql functin
    if (strlen($emailr) > 0 && strlen($passr) > 0)
    {
        $sql = "SELECT * from recruiter_login where email = '$emailr' and password = '$passr'";
        $query =mysqli_query($conn, $sql);

            if (mysqli_num_rows($query)>0) {

                $row = mysqli_fetch_array($query);
                $_SESSION['id'] = $row['recruiterid'];
                header('location:overview_recu.php');

            }
            else{
                $sql = "SELECT * from admin_login where email = '$emailr' and password = '$passr'";
                $query =mysqli_query($conn, $sql);
            if (mysqli_num_rows($query)>0) {
                $_SESSION['id'] = "admin";
                header('location:adminpage.php');
            }
            else{
                $error[] = 'incorrect email or password!';
                }
            }

    }
}

if (isset($_POST['submitc'])) {

    $emailc = $_POST['emailc'];
    $passc = md5($_POST['passwordc']);

        // recruiter sql functin
        if (strlen($emailc) > 0 && strlen($passc) > 0)
        {
            $sql = "SELECT * from candidate_login where email = '$emailc' and password = '$passc'";
            $query =mysqli_query($conn, $sql);

            if (mysqli_num_rows($query)>0) {

                $row = mysqli_fetch_array($query);
                $_SESSION['id'] = $row['candidateid'];
                $_SESSION['country'] = $row['country'];
                $_SESSION['city'] = $row['city'];
                header('location:overview_cand.php');

            }
            elseif ($emailc= "admin@admin.com" && $passc = "md5(admin)") {
                $_SESSION['id'] = "admin";
                header('location:adminpage.php');
            }
            else{
                $error[] = 'incorrect email or password!';
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
    <link rel="stylesheet" href="css/steam.css">
</head>
<body>



<?php
// include('include/login_form.php');
?>


        
    <section class="container-fluid  my-0 py-0 h-100" style="background-color:  #e0e0d1;">

<a class="navbar-brand ms-5 text-white fs-3" href="http://localhost/findMe/admin/homepage.php">
    <span  class="text-primary">Find</span><span class="text-danger">me</span>
</a>

    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-xl-10">
                    <div class="row g-0 justify-content-center">
                        <div class="col-md-6 col-lg-4 d-none d-md-block login_sidebar" style="border-radius: 1rem 0 0 1rem;">
                            <h5 class="fs-2 text-center pt-5">
                                Welcome Back. <br>
                                <i class="bi bi-emoji-smile-upside-down-fill text-white fa-2xs"></i>
                                <i class="fa-solid fa-face-smile text-warning"></i>
                                <i class="bi bi-emoji-smile-upside-down-fill text-white fa-2xs"></i>
                            </h5>

                            <div class="d-flex justify-content-center align-items-center w-100 h-50 flex-column">
                                <h5 class="fs-2 mb-3 text-warning">Log in as?</h5>

                                <span>
                                    <input type="checkbox" class="ms-0 px-0" checked id="Check1" value="Value1" onclick="selectOnlyThis(this.id)"style="width: 20px; height: 20px;" >
                                    <span class="fs-4 text-black fw-bold">Recruiter</span>
                                </span>
                                <span>
                                    <input type="checkbox" id="Check2" value="Value1" onclick="selectOnlyThis(this.id)" style="width: 20px; height: 20px;">
                                    <span class="fs-4 text-black fw-bold">Candidat</span>
                                </span>
                            </div>
                            
                        </div>

                        <div class="col-md-6 col-lg-5 d-flex align-items-center cznn " id="cznn">
                        <div class="px-4 px-lg-5 pt-4 pb-4 text-black">

                        <div class="d-flex align-items-center text-white">
                            <i class="bi bi-binoculars fa-2x me-3" style="color: #ff6219;"></i>
                            <!-- <i class="fa-solid fa-magnifying-glass fa-2x me-3" style="color: #ff6219;"></i> -->
                            <span class="fs-5 fw-bold mb-0">FindMe</span>
                        </div>
            
                        <h5 class="fw-normal mb-1 pb-1 small text-white" style="letter-spacing: 1px;">Sign into your account</h5>
            
                        <?php
                                        if(isset($error)){
                                            foreach($error as $error){
                                                echo '<span class="error-msg fw-bolder text-danger">'.$error.'</span>';
                                            };
                                        };
                                    ?>
                            <form id="recruiter_form" class="form-login text-white" action="" method="post" name="login">

                                <div class="form-outline form-box mt-4 mb-1">
                                    <label class="form-label" for="">Email Address</label>
                                    <div class="input-group ">
                                        <span class="border-warning rounded-0  input-group-text bg-transparent border-end-0">
                                            <i class="bi bi-at fs-6 text-primary"></i>
                                        </span>
                                        <input name="emailr" type="email" class="text-lowercase form-control form-control-sm bg-transparent text-white " placeholder="email address" />
                                    </div>
                                </div>

                                <div class="form-outline form-box mt-4 mb-1">
                                    <label class="form-label" for="">Password</label>
                                    <div class="input-group  ">
                                        <span class="border-warning rounded-0 input-group-text bg-transparent border-end-0" id="basic-addon1">
                                            <i class="bi bi-lock text-warning fs-6"></i>
                                        </span>
                                        <input name="passwordr" type="password" class="form-control form-control-sm bg-transparent text-white" placeholder="password" />
                                    </div>
                                </div>

                                <div class="pt-1 my-4 d-flex justify-content-center">
                                <button class="btn btn-success text-white fw-lighter rounded-0 btn-block fs-6" type="submit" name="submitr" id="submit">Login</button>
                                </div>
            
                            </form>

                            <form id="candidate_form" class="form-login text-white" action="" method="post" name="login">

                            <div class="form-outline form-box mt-4 mb-1">
                                <label class="form-label" for="">Email Address</label>
                                <div class="input-group ">
                                    <span class="border-warning rounded-0 input-group-text bg-transparent border-end-0">
                                        <i class="bi bi-at fs-6 text-primary"></i>
                                    </span>
                                    <input name="emailc" type="email"  class="form-control form-control-sm bg-transparent text-white " placeholder="email address" />
                                </div>
                            </div>

                            <div class="form-outline form-box mt-4 mb-1">
                                <label class="form-label" for="">Password</label>
                                <div class="input-group">
                                    <span class="border-warning rounded-0 input-group-text bg-transparent border-end-0" id="basic-addon1">
                                        <i class="bi bi-lock text-warning fs-6"></i>
                                    </span>
                                    <input name="passwordc" type="password"  class="form-control form-control-sm bg-transparent text-white" placeholder="password" />
                                </div>
                            </div>

                            <div class="pt-1 my-4 d-flex justify-content-center">
                                <button class="btn btn-danger fw-lighter text-white rounded-0 btn-block fs-6" type="submit" name="submitc" id="submitc">Login</button>
                            </div>
            
                            </form>
                            
                            <div class="">
                                <a class="mb-5 pb-lg-2 text-decoration-none text-white" href="http://localhost/findMe/admin/signuppage.php" style="color: #393f81;">
                                    Don't have an account? 
                                    <span style="color: aqua; text-decoration: underline;">Register here</span>
                                </a>
                            </div>
            
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
            clase.classList.remove("czzn1");
        clase.classList.add("czzn");
        recruiter_form.style.display = "block";
        candidate_form.style.display = "none";

        }else if(document.getElementById("Check2").checked == true){
            clase.classList.remove("czzn");
            clase.classList.add("czzn1");
        recruiter_form.style.display = "none";
        candidate_form.style.display = "block";
        }
    }
</script>


</body>
</html>

