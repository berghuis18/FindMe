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


<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<?php 

	$caninfo = "SELECT * from candidate_login where candidateid = '$candid'";
	$eduinfo = "SELECT * from tbl_education where candidateid = '$candid'";
	$empinfo = "SELECT * from tbl_employement where candidateid = '$candid'";
	$skillsinfo = "SELECT * from skill where candidateid = '$candid'";
	$hobinfo = "SELECT * from hobby where candidateid = '$candid' ";
	$langinfo = "SELECT * from language where candidateid = '$candid' ";
	
	$query = mysqli_query($conn, $caninfo);


	while ($row = mysqli_fetch_array($query)) {
		?>

<div class="resume-box">
	
	<div class="left-section">
		<div class="profile">
		<img src="image/profile.png" class="profile-img">
		<div class="blue-box"></div>
		</div>
		<h2 class="name"><?php echo $row['firstname']; ?> <br><span><?php echo $row['lastname']; ?></span></h2>
		<p class="n-p">Graphic & Web Designer</p>


		<div class="info">
			<p class="heading">Info</p>
			<p class="p1"><span class="span1"><img src="image/location.png"></span>Address<span> <br><?php echo $row['address']; ?></span></p>
			<p class="p1"><span class="span1"><img src="image/call.png"></span>Phone<span> <br><?php echo $row['phone_number']; ?></span></p>
			<p class="p1"><span class="span1"><img src="image/mail.png"></span>Email<span> <br><?php echo $row['email']; ?></span></p>
			<p class="p1"><span class="span1"><img src="image/domain.png"></span>Website<span> <br><?php echo $row['candidateid']; ?></span></p>
		</div>

		<div class="info">
			<p class="heading">Social</p>
			<p class="p1"><span class="span1"><img src="image/skype.png"></span>Skype<span> <br>msofttechskype.com</span></p>
			<p class="p1"><span class="span1"><img src="image/twitter.png"></span>Twitter<span> <br>demotwitter.com</span></p>
			<p class="p1"><span class="span1"><img src="image/linkedin.png"></span>Linkdin<span> <br>linkdindemo.com</span></p>
			<p class="p1"><span class="span1"><img src="image/facebook.png"></span>Facebook<span> <br>facebookdummy.com</span></p>
		</div>

	</div>

	<div class="right-section">
		<div class="right-heading">
			<img src="image/user.png">
			<p class="p2">Profile</p>
		</div>
		<p class="p3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>

		<div class="clearfix"></div>
		<br><br>
		<div class="right-heading">
			<img src="image/pencil.png">
			<p class="p2">Work Experience</p>
		</div>
		<?php 
			$query1 = mysqli_query($conn, $empinfo);

			while ($row1 = mysqli_fetch_array($query1)) {
		?>

		<div class="lr-box">

			<div class="left">
				<p class="p4"><?php echo $row1['startdate_year']; ?> - <?php echo $row1['enddate_year']; ?></p>
				<p class="p5"><?php echo $row1['supervisorname']; ?></p>
			</div>

			<div class="right">
				<p class="p4"><?php echo $row1['jobtitle']; ?></p>
				<p class="p5"><?php echo $row1['inst_name']; ?></p>
				<p class="p5"><?php echo $row1['inst_description']; ?>.</p>
			</div>
			<div class="clearfix"></div>
		</div>

		<?php }?>

		<br>
		<div class="right-heading">
			<img src="image/edu.png">
			<p class="p2">Education</p>
		</div>

		<?php 
			$query2 = mysqli_query($conn, $eduinfo);

			while ($row1 = mysqli_fetch_array($query2)) {
		?>
		<div class="clearfix"></div>
		<div class="lr-box">
			<div class="left">
				<p class="p4"><?php echo $row1['startdate_year']; ?> - <?php echo $row1['enddate_year']; ?></p>
				<p class="p5"><?php echo $row1['schoolcity']; ?></p>
			</div>

			<div class="right">
				<p class="p4 "><?php echo $row1['schoolname']; ?> - 	<?php echo $row1['educationlevel']; ?></p>
				<p class="p5"><?php echo $row1['coursetitle']; ?></p>
				<p class="p5"><?php echo $row1['schooldescription']; ?> </p>
			</div>
			<div class="clearfix"></div>
		</div>

		<?php }?>

		<br>
		<div class="right-heading">
			<img src="image/edu.png">
			<p class="p2">Skill and expertize</p>
		</div>
		<div class="clearfix"></div>
		<?php 
		$query2 = mysqli_query($conn, $skillsinfo);

		while ($row1 = mysqli_fetch_array($query2)) {
		?>
		<div class="s-box">
			<p class="p4"><?php echo $row1['skills']; ?></p>
			<p class="p6"><?php echo $row1['skilllevel']; ?></p>
		</div>
		<?php }?>


		<div class="clearfix"></div><br>
		<div class="right-heading">
			<img src="image/hobbies.png">
			<p class="p2">Hobby & Internet</p>
		</div>
		<div class="clearfix"></div>

		<?php 
		$query4 = mysqli_query($conn, $hobinfo);
		while ($rows4 = mysqli_fetch_array($query4)) {
		?>
		<div class="s-box">
			<p class="p4"><?php echo $rows4['hobby']; ?></p>
		</div>
		<?php }?>

		<div class="clearfix"></div>
		<br>
		<div class="right-heading">
			<img src="image/hobbies.png">
			<p class="p2">Language</p>
		</div>
		<div class="clearfix"></div>

		<?php 
		$query4 = mysqli_query($conn, $langinfo);
		while ($rows4 = mysqli_fetch_array($query4)) {
		?>
		<div class="s-box">
			<p class="p4"><?php echo $rows4['language']; ?></p>
			<p class="p6"><?php echo $rows4['lanlevel']; ?></p>
		</div>
		<?php }?>

	</div>

		<div class="clearfix"></div>
	
	

</div>


<?php }
                    
	?>



</body>
</html>