<?php 
include('connection/db.php');

session_start();
$admin =$_SESSION['id'];
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

        <nav class="navbar navbar-expand-md sticky-top flex-md-nowrap shadow navbar-dark bg-dark py-4 " id="myheader">
            <div class="container">
                <a class="navbar-brand text-white fs-3" href="http://localhost/findMe/admin/homepage.php">
                    Find<span class="text-primary">Me</span>
                </a>

                <ul class="navbas ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link text-warning fw-bold">
                            <i class="fa-solid fa-user"></i>
                            <?php echo $admin; ?>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>


        <div class="container-fluid ">
            <div class="row h-auto ">

                <nav id="sidebarMenu" class="user-sidebar col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse h-100 position-fixed ">
                    <div class="position-sticky pt-3 sidebar-sticky ">
                    <ul class="nav flex-column">
                        <li class="nav-item  my-3 d-flex flex-row  align-items-center ps-2">
                            <a class="nav-link active fs-6" aria-current="page" href="#candidate">
                                Candidates
                            </a>
                        </li>
                        <li class="nav-item  my-3 d-flex flex-row  align-items-center ps-2">
                            <a class="nav-link active fs-6" aria-current="page" href="#recruiter">
                                Recruiter
                            </a>
                        </li>
                        <li class="nav-item  my-3 mb-5 d-flex flex-row  align-items-center ps-2">
                            <a class="nav-link active fs-6" aria-current="page" href="#job">
                                Jobs
                            </a>
                        </li>
                        <li class="nav-item  my-5 d-flex flex-row  align-items-center ps-2">
                            <a class="nav-link active fs-6" aria-current="page" href="http://localhost/findMe/admin/logout.php?">
                            <i class="fa-solid fa-x"></i>
                                <span data-feather="home" class="align-text-bottom fw-bolder">
                                    Sign Out
                                </span>
                            </a>
                        </li>
                    </ul>
            
                    </div>
                </nav>

            </div>
        </div>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-0" id="mainPage">

    <div class="w-100 position-fixed mx-0 px-0 mb-5 mt-0">
        <div class=" bg-success container py-2 position-fixed d-flex justify-content-between">
            <h4 class="text-uppercase text-dark">admin page</h4>
        </div>
    </div>

    <section id="" class=" mx-4 py-3 pt-5">

        <section class="container resume_form mt-5 " id="candidate">

            <div class=" mb-5">

            <table id="example" class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Password</th>
                        <th>Phone Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $sql = "SELECT * from candidate_login ";
                    $query = mysqli_query($conn, $sql);
                    $counter = mysqli_num_rows($query);?>
                    <h4 class="mb-4 text-primary text-decoration-underline">
                        The Total Number of Candidate = 
                        <span class="px-2 bg-secondary rounded-2 text-white"><?php echo $counter;?></span> 
                    </h4>
                    <?php

                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                    
                    <tr>
                        <td class="text-uppercase"><?php echo $row['candidateid']; ?></td>
                        <td class="text-capitalize"><?php echo $row['firstname']; ?></td>
                        <td class="text-capitalize"><?php echo $row['lastname']; ?></td>
                        <td class="text-lowercase"><?php echo $row['email']; ?></td>
                        <td class="text-capitalize"><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['phone_number']; ?></td>
                        <td class="text-center">
                            <a href="deleter.php?del=<?php echo $row['candidateid']; ?>" class="btn btn-danger ">
                                <span class="bi bi-trash3 px-0"></span>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>

                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Password</th>
                        <th>Phone Number</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>

            </div>
            
        </section>

        <hr class="my-5 opacity-0">
        <hr class="my-5 opacity-0">
        <hr class="my-5 opacity-0">
        <hr class="my-5 opacity-0">
        
        <section class="container resume_form mt-5" id="recruiter">

            <table id="example" class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>Password</th>
                        <th>Phone Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $sql = "SELECT * from recruiter_login ";
                    $query = mysqli_query($conn, $sql);
                    $counter = mysqli_num_rows($query);?>
                    <h4 class="mb-4 text-primary text-decoration-underline">
                        The Total Number of Recruiter = 
                        <span class="px-2 bg-secondary rounded-2 text-white"><?php echo $counter;?></span> </h4>
                    <?php

                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                    
                    <tr>
                        <td class="text-uppercase"><?php echo $row['recruiterid']; ?></td>
                        <td class="text-capitalize"><?php echo $row['firstname']; ?></td>
                        <td class="text-capitalize"><?php echo $row['lastname']; ?></td>
                        <td class="text-lowercase"><?php echo $row['email']; ?></td>
                        <td class="text-capitalize"><?php echo $row['country']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['phonenumber']; ?></td>
                        <td class="text-center">
                            <a href="deleter.php?dels=<?php echo $row['recruiterid']; ?>" class="btn btn-danger ">
                                <span class="bi bi-trash3 px-0"></span>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>Password</th>
                        <th>Phone Number</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            
        </section>
        
        <hr class="my-5 opacity-0">
        <hr class="my-5 opacity-0">
        <hr class="my-5 opacity-0">
        <hr class="my-5 opacity-0">
        
        <section class="container resume_form mt-5" id="job">

            <table id="example" class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Company Name</th>
                        <th>Position</th>
                        <th>Job Catergory</th>
                        <th>Work Type</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Posted By</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $sql = "SELECT * from jobs";
                    $query = mysqli_query($conn, $sql);
                    $counter = mysqli_num_rows($query);?>
                    <h4 class="mb-4 text-primary text-decoration-underline">
                        The Total Number of Jobs = 
                        <span class="px-2 bg-secondary rounded-2 text-white"><?php echo $counter;?></span> </h4>
                    <?php

                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                    
                    <tr>
                        <td class="text-capitalize"><?php echo $row['companyname']; ?></td>
                        <td class="text-capitalize"><?php echo $row['position']; ?></td>
                        <td class="text-capitalize"><?php echo $row['jobcategory']; ?></td>
                        <td class="text-capitalize"><?php echo $row['worktype']; ?></td>
                        <td class="text-capitalize"><?php echo $row['country']; ?></td>
                        <td class="text-capitalize"><?php echo $row['city']; ?></td>
                        <td class="text-uppercase"><?php echo $row['recruiterid']; ?></td>
                        <td class="text-center">
                            <a href="deleter.php?delss=<?php echo $row['recruiterid']; ?>" class="btn btn-danger ">
                                <span class="bi bi-trash3 px-0"></span>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Company Name</th>
                        <th>Position</th>
                        <th>Job Catergory</th>
                        <th>Work Type</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Posted By</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>

        </section>


    </section>

</main>

    </body>
</html>
