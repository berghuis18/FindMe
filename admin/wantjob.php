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
    include("include/homepagenav.php");
?>



    <!-- header of the homepage -->
    <div class="subheader">
        <div class="container px-4 px-lg-5 py-5 d-flex align-items-center flex-column">

            <nav class="fs-6 text-uppercase fw-bold" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item "><a href="#" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item text-white active " aria-current="page"> browse job</li>
            </ol>
            </nav>
            <h4 class="fs-1 text-primary fw-bolder">Browse Job</h4>

        </div>
        
    </div>


    <div class="row bg-light pt-5 container-fluid row-cols-3 ">
        <div class="col-4 mx-auto">
            <label for="" class="form-label small" id="">Job Title..</label>
            <!-- <input type="text" id="" class="form-control" name="position"  placeholder="Eg. Manager" id="myInput" onkeyup="myFunction()"> -->
        <input type="text" class="form-control" id="myInput" onkeyup="myFunction1()" placeholder="Search for names..">

        </div>
        
        <!-- <div class="col-4 mx-auto">
            <label for="" class="form-label small" id="">Job Title..</label>
            <input type="text" id="" class="form-control" name="position"  placeholder="Eg. Manager" id="myInput" onkeyup="myFunction()">
        <input type="text" class="form-control" id="myInput" onkeyup="myFunction1()" placeholder="Search for names..">

        </div> -->
        
    </div>

    <div class="container-fluid">
    <?php
    include("include/jobsposted.php");
    ?>

<script>
        function myFunction1() {
      // Declare variables
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById('myInput').value;
    filter = input.toUpperCase();
      li = document.querySelectorAll('#myul li');
      
      for (i = 0; i < li.length; i++) {
        a = li[i].querySelectorAll("a #positions")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
    }
    </script>

    <?php
        include("include/footer.php");
    ?>
    </div>

    <script src="js/script.js"></script>

</body>
</html>