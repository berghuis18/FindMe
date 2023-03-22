<?php
    include('connection/db.php');
    $del =$_GET['del'];
    $dels =$_GET['dels'];
    $delss =$_GET['delss'];
    $delover =$_GET['delover'];

    $sql = "delete from candidate_login where candidateid = '$del'";
    $query = mysqli_query($conn, $sql);
    if ($query){
        echo "<script>alert('success')</script>";
        header('location:adminpage.php');
    }
    else{
        echo "<script>alert('failed to delete')</script>";
    }

    $sql = "delete from recruiter_login where recruiterid = '$dels'";
    $query = mysqli_query($conn, $sql);
    if ($query){
        echo "<script>alert('success')</script>";
        header('location:adminpage.php');
    }
    else{
        echo "<script>alert('failed to delete')</script>";
    }

    $sql = "delete from jobs where recruiterid = '$delss'";
    $query = mysqli_query($conn, $sql);
    if ($query){
        echo "<script>alert('success')</script>";
        header('location:adminpage.php');
    }
    else{
        echo "<script>alert('failed to delete')</script>";
    }

    $sql = "delete from jobs where position = '$delover'";
    $query = mysqli_query($conn, $sql);
    if ($query){
        echo "<script>alert('success')</script>";
        header('location:overview_recu.php');
    }
    else{
        echo "<script>alert('failed to delete')</script>";
    }

?>