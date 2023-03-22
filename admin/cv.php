<?php 
session_start();
include('connection/db.php');
$candid =$_SESSION['id'];
$perMsg = "";
$empMsg = "";
$eduMsg = "";

// the uplaod php checker
if (isset($_POST['upload']) && !empty($_FILES["file"]["name"])  ) {

    $file = $_FILES['file'];
    $filename = $_FILES['file']['name'];
    $fileloc = $_FILES['file']['tmp_name'];
    $filesize = $_FILES['file']['size'];
    $filetype = $_FILES['file']['type'];
    $fileError = $_FILES['file']['error'];

    $fileActext = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

    $allowed = array('pdf', 'txt', 'doc', 'docx');

    if (in_array($fileActext, $allowed)) {
        if ($fileError === 0) {

            $fileDest = 'upload/'.$filename;
            if (move_uploaded_file($fileloc, $fileDest)) {
                $sql = "insert into file(filename, size, type, candidateid) 
                values
                 ('$filename', '$filesize', '$filetype', '$candid')";
                mysqli_query($conn, $sql);

                $statusMsg = $filename. " has been uploaded.";
                
            }
            else {$statusMsg = "Sorry, there was an error uploading your file.";}
        }
    }
    else{ $statusMsg = 'Sorry, only TXT , DOC, DOCX & PDF files are allowed to upload.'; }
}
elseif(!isset($_POST['upload'])  ) {$statusMsg = '';}
else{ $statusMsg = 'Please select a file to upload.'; }
// the end of the uplaod php checker


// the personal part of the form
if(isset($_POST['submitper'])){

    $can_fname = $_POST['firstname'];
    $can_lname = $_POST['lastname'];
    $can_email = $_POST['email'];
    $can_phone = $_POST['cphonenumber'];
    $can_postcode = $_POST['cpostalcode'];
    $can_gender = $_POST['cgender'];
    $can_address = $_POST['caddress'];
    $can_country = $_POST['ccountry'];
    $can_city = $_POST['ccity'];
    $can_description = $_POST['cdescription'];

    if (
        strlen($can_phone) > 0 && strlen($can_address) > 0 && strlen($can_gender) > 0  && strlen($can_country) > 0
        )
    {
        $sql ="UPDATE candidate_login
            SET gender = '$can_gender', city= '$can_city',
                firstname = '$can_fname', lastname= '$can_lname', email= '$can_email', postal_code= '$can_postcode',
                about_me = '$can_description', country= '$can_country',
                address = '$can_address', phone_number= '$can_phone'
            WHERE candidateid='$candid'";
            $query = mysqli_query($conn, $sql);

            if ($query) 
            {
                $perMsg = " Successfully Updated";
                // echo '<script> alert("success updated");</script>';
            }else{$perMsg = " Updating Failed";}
    }else{$perMsg = " Fill the empty field";}

}
// the personal part of the form

// the employement part of the form
if(isset($_POST['submitemp'])){

    $instname = $_POST['instname'];
    $supervisorname = $_POST['supervisorname'];
    $supervisorphone = $_POST['supervisorphone'];
    $jobtitle = $_POST['jobtitle'];
    $inststartmonth = $_POST['inststartmonth'];
    $inststartyear = $_POST['inststartyear'];
    $instendmonth = $_POST['instendmonth'];
    $instendyear = $_POST['instendyear'];
    $instdescription = $_POST['instdescription'];

    
    if ( strlen($jobtitle) > 0 && strlen($instendyear) > 0 && strlen($inststartyear) > 0  && strlen($instname) > 0 )
    {
        $que = "SELECT count(*) as allcount FROM tbl_employement WHERE inst_name='".$instname."' 
        && enddate_month='".$instendmonth."' && startdate_month='".$inststartmonth."' && jobtitle='".$jobtitle."'";
        $result = mysqli_query($conn,$que);
        $rows = mysqli_fetch_array($result);
        $allcount = $rows['allcount'];

        if($allcount == 0){

            $sql2 = "insert into tbl_employement 
        (inst_name, supervisorname, supervisorphone, jobtitle, enddate_month, enddate_year, startdate_month, startdate_year, inst_description, candidateid)
         values 
         ( '$instname', '$supervisorname', '$supervisorphone', '$jobtitle', '$instendmonth', '$instendyear', '$inststartmonth', '$inststartyear', '$instdescription', '$candid')";

        $query2 = mysqli_query($conn, $sql2);

            if ($query2) 
            {
                $empMsg = " Successfully Updated";
            }else{$empMsg = " Updating Failed";}

        }else{$empMsg = " Data Exists";}

    }else{$empMsg = " Fill The Empty Field";}

}
// the employement part of the form


// the education part of the form
if(isset($_POST['submitedu'])){

    $schoolname = $_POST['schoolname'];
    $coursetitle = $_POST['coursetitle'];
    $educationncity = $_POST['educationncity'];
    $educationlevel = $_POST['educationlevel'];
    $edustartmonth = $_POST['edustartmonth'];
    $edustartyear = $_POST['edustartyear'];
    $eduendmonth = $_POST['eduendmonth'];
    $eduendyear = $_POST['eduendyear'];
    $edudescription = $_POST['edudescription'];
    
    if (strlen($schoolname) > 0 && strlen($coursetitle) > 0 && strlen($edustartyear) > 0  && strlen($eduendyear) > 0)
    {
        $que = "SELECT count(*) as allcount FROM tbl_education WHERE schoolname='".$schoolname."' 
        && enddate_month='".$eduendmonth."' && startdate_month='".$edustartmonth."' && educationlevel='".$educationlevel."'";
        $result = mysqli_query($conn,$que);
        $rows = mysqli_fetch_array($result);
        $allcount = $rows['allcount'];

        if($allcount == 0){

            $sql1 = "insert into tbl_education
                    (schoolname, schoolcity, educationlevel, coursetitle, enddate_month, enddate_year, startdate_month, startdate_year, schooldescription, candidateid)
                    values 
                    ( '$schoolname', '$educationncity', '$educationlevel', '$coursetitle', '$eduendmonth', '$eduendyear', '$edustartmonth', '$edustartyear', '$edudescription' , '$candid')";
            
        $query1 = mysqli_query($conn, $sql1);

            if ($query1) 
            {
                $eduMsg = " Successfully Updated";
            }else{$eduMsg = " Updating Failed";}

        }else{$eduMsg = " Data Exists";}

    }else{$eduMsg = " Fill The Empty Field";}

}
// the education part of the  form

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

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-0" id="mainPage">

    <div class="w-100 position-fixed mx-0 px-0 mb-5 mt-0">
        <div class=" bg-success container py-2 position-fixed d-flex justify-content-between">
            <h4 class="text-capitalize">Resume</h4>

            <div class=" ms-auto">
                <!-- <form class="" form action="uploadfile.php" method="post" id=""> -->
                <form action="" method="post" enctype="multipart/form-data" class="my-0">
                    <i class="fa-solid fa-cloud-arrow-up text-warning"></i>
                    <label for="" class="text-white fw-bold">Upload Your CV</label>
                    <input type="file" name="file" id="file">
                    <!-- <input class="form-control-sm" type="file" id="formFile" name="upload"> -->
                    <input type="submit" value="Upload CV" name="upload" class="form-control-sm me-5">
                </form>
                <!-- <br> -->
            <span class="text-capitalize text-light small fw-bold"><?php echo $statusMsg; ?></span>

            </div>
        </div>
    </div>

    <section id="" class=" mx-4 py-3 pt-5">

        <form class="container resume_form mt-5" form action="" method="post" id="">

            <div class=" ">

                <!-- personal part -->
                <div class="shadower d-flex jutify-content-center align-items-center flex-column  px-1 pt-5  ">

                    <h5 class="fs-6 fw-bold text-decoration-underline text-primary">Personal Details</h5>

                    <div class="col-sm-11 col-md-11 mb-3  ">

                        <div class="row  justify-content-between mb-3">
                            <?php
                                    $sql = "SELECT * from candidate_login where candidateid = '$candid' ";
                                    $query = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                <!-- <input type="text" class="form-control" id="" readonly value="<?php echo $row['email']; ?>" name="cemail" placeholder="user@outlook.com"> -->
                                

                            <div class=" col-sm-11 col-md-12">
                                <div class="row">
                                    <div class="col-sm-11 col-md-6">
                                        <label class="form-label" for="">First name</label>
                                        <input value="<?php echo $row['firstname']; ?>" name="firstname" type="text" id="" class="form-control" placeholder="Charis"  />
                                    </div>
                                    <div class=" col-sm-11 col-md-6">
                                        <label class="form-label" for="">Last name</label>
                                        <input value="<?php echo $row['lastname']; ?>" name="lastname" type="text" id="" class="form-control" placeholder="Davis" />
                                    </div>
                                </div>
                                <div class="col-sm-11 col-md-12">
                                    <label class="form-label" for="">Email address</label>
                                    <input value="<?php echo $row['email']; ?>" name="email" type="email" id="" class="form-control " placeholder="davis@outlook.com" />
                                </div>
                            </div>
                            <?php } ?>
                        </div>

                    </div>

                    <div class="col-sm-11 col-md-11 ">
                        
                        <div class="row row-cols-2">
                            <div class="col  mb-3">
                                <label for="" class="form-label text-capitalize h5 small">phone number</label>
                                <input type="text" class="form-control" id="" name="cphonenumber" placeholder="(+212) 648 978 125">
                            </div>

                            <div class="col  mb-3">
                                <label for="" class="form-label text-capitalize h5 small">postal code</label>
                                <input type="text" class="form-control text-uppercase" id="" name="cpostalcode" placeholder="Postal Code">
                            </div>

                            <div class="col mb-3">
                                <label for="" class="form-label text-capitalize h5 small">gender</label>
                                <select class="form-select text-capitalize" id="" name="cgender">
                                    <option value="Male">male</option>
                                    <option value="Female">female</option>
                                </select>
                            </div>
                            <div class="col mb-3">
                                <label for="" class="form-label text-capitalize h5 small">address</label>
                                <input type="text" class="form-control text-capitalize" id="" name="caddress" placeholder="Bvld Hassan ...">
                            </div>

                            <div class="col mb-3">
                                <label for="" class="form-label text-capitalize h5 small">country</label>
                                <input type="text" class="form-control text-capitalize" id="" name="ccountry" placeholder="Morocco">
                            </div>
                            
                            <div class="col mb-3">
                                <label for="" class="form-label text-capitalize h5 small">city</label>
                                <input type="text" class="form-control text-capitalize" id="" name="ccity" placeholder="Miami">
                            </div>

                        </div>
                        
                    </div>

                    <div class="col-sm-11 col-md-11 mb-3">
                        <label for="" class="form-label h5 small">About me</label>
                        <textarea class="form-control  rounded-0" id="" rows="4" name="cdescription" style="resize:none;"></textarea>
                    </div>
                    <span class="text-danger fw-bold text-uppercase">
                        <?php echo $perMsg ;?>
                    </span>


                    <div class="col-sm-11 col-md-2  my-3 ms-auto">
                        <button class="btn btn-dark float-end text-lowercase rounded-0 btn-sm small  " type="submit" id="submit" name="submitper">
                            submit
                        </button>
                    </div>

                </div>
                
            </div>
            
        </form>
        <hr class="w-50 text-center mx-auto text-dark my-5 border-1">

        <!-- Employement form -->
        <form class="container resume_form " form action="" method="post" id="">

            <div class=" ">

                <!-- employement part -->
                <div class="shadower d-flex jutify-content-center align-items-center flex-column px-1 pt-5 ">

                    <h5 class="fs-6 fw-bold text-decoration-underline text-primary text-capitalize">employement</h5>

                    <div class="col-sm-10 col-md-11 mb-3 ">
                        
                        <div class="row row-cols-2">
                            <div class="col mb-3">
                                <label for="" class="form-label text-capitalize h5 small">instuition name</label>
                                <input type="text" class="form-control text-capitalize" id="" name="instname" placeholder="Faculte de Science...">
                            </div>

                            <div class="col mb-3">
                                <label for="" class="form-label text-capitalize h5 small">supervisor name</label>
                                <input type="text" class="form-control text-capitalize" id="" name="supervisorname" placeholder="Carrefour Inc...">
                            </div>

                            <div class="col mb-3">
                                <label for="" class="form-label text-capitalize h5 small">supervisor telephone</label>
                                <input type="text" class="form-control" id="" name="supervisorphone" placeholder="(+212) 478 875 125...">
                            </div>

                            <div class="col mb-3">
                                <label for="" class="form-label text-capitalize h5 small">job title</label>
                                <input type="text" class="form-control text-capitalize" id="" name="jobtitle" placeholder="Manager...">
                            </div>

                            <div class="col mb-3 ">
                                <label for="" class="form-label text-capitalize h5 small">start date</label>
                                <div class="row row-cols-2">
                                <div class="col">
                                    <select name="inststartmonth" class="form-control" >
                                        <option value="">Month</option>
                                        <option value="01">Jan</option>
                                        <option value="02">Feb</option>
                                        <option value="03">Mar</option>
                                        <option value="04">Apr</option>
                                        <option value="05">May</option>
                                        <option value="06">Jun</option>
                                        <option value="07">Jul</option>
                                        <option value="08">Aug</option>
                                        <option value="09">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="inststartyear" class="form-control" >
                                        <?php include("include/yeardb.php"); ?>
                                    </select>
                                </div>
                                </div>
                            </div>

                            <div class="col mb-3 ">
                                <label for="" class="form-label text-capitalize h5 small">end date</label>
                                <div class="row row-cols-2">
                                <div class="col">
                                    <select name="instendmonth" class="form-control" >
                                        <option value="">Month</option>
                                        <option value="01">Jan</option>
                                        <option value="02">Feb</option>
                                        <option value="03">Mar</option>
                                        <option value="04">Apr</option>
                                        <option value="05">May</option>
                                        <option value="06">Jun</option>
                                        <option value="07">Jul</option>
                                        <option value="08">Aug</option>
                                        <option value="09">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="instendyear" class="form-control" >
                                        <?php include("include/yeardb.php"); ?>
                                    </select>
                                </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="col-sm-11 col-md-11 mb-3">
                        <label for="" class="form-label h5 small text-capitalize">description</label>
                        <textarea class="form-control  rounded-0" id="" rows="4" name="instdescription" style="resize:none;"></textarea>
                    </div>
                    <span class="fw-bold text-danger"><?php echo $empMsg;?></span>

                    <div class="col-sm-11 col-md-2  my-3 ms-auto">
                        <button class="btn btn-dark float-end text-lowercase rounded-0 btn-sm small  " type="submit" id="submit" name="submitemp">
                            submit
                        </button>
                    </div>

                </div>

                

            </div>
            
        </form>

        <hr class="w-50 text-center mx-auto text-dark my-5 border-1">

        <!-- Education form -->
        <form class="container resume_form" form action="" method="post" id="">

            <div class=" ">

                
                <!-- education part -->
                <div class="shadower d-flex jutify-content-center align-items-center flex-column  px-1 py-5 ">
                        

                    <h5 class="fs-6 fw-bold text-decoration-underline text-primary text-capitalize">education</h5>

                    <div class="col-sm-11 col-md-11 mb-3 ">
                        
                        <div class="row row-cols-2">
                            <div class="col mb-3">
                                <label for="" class="form-label text-capitalize h5 small">education level</label>
                                <select class="form-select text-uppercase" id="" name="educationlevel">
                                    <option value="regular diploma">regular diploma</option>
                                    <option value="advanced diploma">advanced diploma</option>
                                    <option value="master degree">master degree</option>
                                    <option value="php">PHP</option>
                                    <option value="bac">bac</option>
                                    <option value="bece">BECE</option>
                                </select>
                                <!-- <input type="text" class="form-control" id="" name="educationlevel" placeholder="Carrefour Inc..."> -->
                            </div>

                            <div class="col mb-3">
                                <label for="" class="form-label text-capitalize h5 small">school name</label>
                                <input type="text" class="form-control text-capitalize" id="" name="schoolname" placeholder="School Name...">
                            </div>

                            <div class="col mb-3">
                                <label for="" class="form-label text-capitalize h5 small">course title</label>
                                <input type="text" class="form-control text-capitalize" id="" name="coursetitle" placeholder="Computer Eng...">
                            </div>

                            <div class="col mb-3">
                                <label for="" class="form-label text-capitalize h5 small">city</label>
                                <input type="text" class="form-control text-capitalize" id="" name="educationncity" placeholder="Miami...">
                            </div>

                            <div class="col mb-3 ">
                                <label for="" class="form-label text-capitalize h5 small">start date</label>
                                <div class="row row-cols-2">
                                <div class="col">
                                    <select name="edustartmonth" class="form-control" >
                                        <option value="">Month</option>
                                        <option value="01">Jan</option>
                                        <option value="02">Feb</option>
                                        <option value="03">Mar</option>
                                        <option value="04">Apr</option>
                                        <option value="05">May</option>
                                        <option value="06">Jun</option>
                                        <option value="07">Jul</option>
                                        <option value="08">Aug</option>
                                        <option value="09">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="edustartyear" class="form-control" >
                                        <?php include("include/yeardb.php"); ?>
                                    </select>
                                </div>
                                </div>
                            </div>

                            <div class="col mb-3 ">
                                <label for="" class="form-label text-capitalize h5 small">end date</label>
                                <div class="row row-cols-2">
                                <div class="col">
                                    <select name="eduendmonth" class="form-control" >
                                        <option value="">Month</option>
                                        <option value="01">Jan</option>
                                        <option value="02">Feb</option>
                                        <option value="03">Mar</option>
                                        <option value="04">Apr</option>
                                        <option value="05">May</option>
                                        <option value="06">Jun</option>
                                        <option value="07">Jul</option>
                                        <option value="08">Aug</option>
                                        <option value="09">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="eduendyear" class="form-control" >
                                        <?php include("include/yeardb.php"); ?>
                                    </select>
                                </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="col-sm-11 col-md-11 mb-3">
                        <label for="" class="form-label h5 small text-capitalize">description</label>
                        <textarea class="form-control  " id="" rows="4" name="edudescription" style="resize:none;"></textarea>
                    </div>
                    <span class = "fw-bold text-danger"><?php echo $eduMsg;?></span>

                    <div class="col-sm-11 col-md-2  my-3 ms-auto">
                        <button class="btn btn-dark float-end text-lowercase rounded-0 btn-sm small  " type="submit" id="submit" name="submitedu">
                            submit
                        </button>
                    </div>

                </div>

            </div>
            
        </form>



        <!-- Autre form -->
        <form class="container resume_form " form action="" method="post" id="">

            <div class=" ">

                <!-- AUTRE part -->
                <div class="shadower d-flex jutify-content-center align-items-center flex-column px-1 pt-5 ">

                    <h5 class="fs-6 fw-bold text-decoration-underline text-primary text-capitalize">autres</h5>

                    <div class="col-sm-10 col-md-11 mb-3 ">
                        
                        <div class="row row-cols-2">
                            <div class="col mb-3">
                                <label for="" class="form-label text-capitalize h5 small">language</label>
                                <input type="text" class="form-control text-capitalize" id="" name="language" placeholder="Greek ...">
                            </div>

                            <div class="col mb-3 mt-3 d-flex flex-row align-items-center">
                                <select name="lanlevel" class="form-control w-50 text-capitalize" >
                                    <option value="">Level</option>
                                    <option value="beginner">beginner</option>
                                    <option value="fluent">fluent</option>
                                    <option value="Excellent">Excellent</option>
                                </select>

                                <button class="mx-2 btn btn-dark float-end text-lowercase rounded-0 btn-sm" type="submit" id="submit" name="submitlan">
                                <i class="fa-solid fa-plus"></i>
                                </button>
                                <?php 

                                    if(isset($_POST['submitlan'])){
                                        $language = $_POST['language'];
                                        $lanlevel = $_POST['lanlevel'];
                                        // echo '$language';
                                        if ( strlen($language) > 0 && strlen($lanlevel) > 0 )
                                        {
                                            $que = "SELECT count(*) as allcount FROM language WHERE language='".$language."' && candidateid='$candid'";
                                            $result = mysqli_query($conn,$que);
                                            $rows = mysqli_fetch_array($result);
                                            $allcount = $rows['allcount'];

                                            if($allcount == 0){

                                                $sql2 = "insert into language
                                            (language, lanlevel, candidateid)
                                            values 
                                            ( '$language', '$lanlevel', '$candid')";

                                            $query2 = mysqli_query($conn, $sql2);

                                            if ($query2) 
                                            {
                                                // echo '<script> alert("success updated");</script>';
                                                echo '<span class="text-success fw-bolder">added </span>';
                                            }else{echo '<span class="text-danger fw-bolder">failed </span>';}

                                            }else{echo '<span class="text-danger fw-bolder">exist </span>';}

                                        }else{echo '<span class="text-danger fw-bolder">*** </span>';}

                                    }

                                    ?>
                            </div>

                                
                            

                            <div class="col mb-3">
                                <label for="" class="form-label text-capitalize h5 small">skills</label>
                                <input type="text" class="form-control text-capitalize" id="" name="skills" placeholder="Communication...">
                            </div>

                            <div class="col mb-3 mt-3 d-flex flex-row align-items-center">
                                <select name="skilllevel" class="form-control w-50 text-capitalize" >
                                    <option value="">Level</option>
                                    <option value="beginner">beginner</option>
                                    <option value="fluent">fluent</option>
                                    <option value="Excellent">Excellent</option>
                                </select>

                                <button class="ms-2 btn btn-dark float-end text-lowercase rounded-0 btn-sm" type="submit" id="submit" name="submitskill">
                                <i class="fa-solid fa-plus"></i>
                                </button>

                                <?php 

                                    if(isset($_POST['submitskill'])){
                                        $skills = $_POST['skills'];
                                        $skilllevel = $_POST['skilllevel'];
                                        if ( strlen($skills) > 0 && strlen($skilllevel) > 0 )
                                        {
                                            $que = "SELECT count(*) as allcount FROM skill WHERE candidateid='$candid' && skills='".$skills."'";
                                            $result = mysqli_query($conn,$que);
                                            $rows = mysqli_fetch_array($result);
                                            $allcount = $rows['allcount'];

                                            if($allcount == 0){

                                                $sql2 = "insert into skill
                                            (skills, skilllevel, candidateid)
                                            values 
                                            ( '$skills', '$skilllevel', '$candid')";

                                            $query2 = mysqli_query($conn, $sql2);

                                            if ($query2) 
                                            {
                                                // echo '<script> alert("success updated");</script>';
                                                echo '<span class="text-success fw-bolder">added </span>';
                                            }else{echo '<span class="text-danger fw-bolder">failed </span>';}

                                            }else{echo '<span class="text-danger fw-bolder">exist </span>';}

                                        }else{echo '<span class="text-danger fw-bolder">*** </span>';}
                                        // }else{echo '<script> alert("Fill the goddam box");</script>';}


                                    }

                                ?>

                            </div>

                            <div class="col-8 mb-3">
                                <label for="" class="form-label text-capitalize h5 small">hobby</label>
                                <input type="text" class="form-control text-capitalize" id="" name="hobby" placeholder="Ski Diving...">
                            </div>

                            <div class="col-4 mb-3 mt-3 d-flex flex-row align-items-center">

                                <button class="ms-2 btn btn-dark float-end text-lowercase rounded-0 btn-sm" type="submit" id="submit" name="submithob">
                                <i class="fa-solid fa-plus"></i>
                                </button>

                                <?php 

                                    if(isset($_POST['submithob'])){
                                        $hobby = $_POST['hobby'];
                                        if ( strlen($hobby) > 0 )
                                        {
                                            $que = "SELECT count(*) as allcount FROM hobby WHERE hobby='".$hobby."' && candidateid='$candid'";
                                            $result = mysqli_query($conn,$que);
                                            $rows = mysqli_fetch_array($result);
                                            $allcount = $rows['allcount'];

                                            if($allcount == 0){

                                                $sql2 = "insert into hobby
                                            (hobby, candidateid)
                                            values 
                                            ( '$hobby', '$candid')";

                                            $query2 = mysqli_query($conn, $sql2);

                                            if ($query2) 
                                            {
                                                // echo '<script> alert("success updated");</script>';
                                                echo '<span class="text-success fw-bolder">added </span>';
                                            }else{echo '<span class="text-danger fw-bolder">failed </span>';}

                                            }else{echo '<span class="text-danger fw-bolder">exist </span>';}

                                        }else{echo '<span class="text-danger fw-bolder">*** </span>';}
                                        // }else{echo '<script> alert("Fill the goddam box");</script>';}


                                    }

                                ?>

                            </div>

                        </div>
                        
                    </div>

                </div>

                

            </div>
            
        </form>



    </section>

</main>

    </body>
</html>



<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  




}
?>


