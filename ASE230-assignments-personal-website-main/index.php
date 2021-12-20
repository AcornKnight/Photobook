<!doctype html>
<html lang="en">
	<head>
	<!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/index.css" />
		<title>ASE 230 - class of Fall 2021</title>
	</head>
<?php
	# This imports or required files from the directory and defines our showcard function to display users.
	require 'data.php';
	require 'functions.php';
	require 'json_util.php';
	
	function showCard ($index){
			
			echo '<div class="row">';
			//<!-- Single Advisor-->
			echo '<div class="col-12 col-sm-6 col-lg-3">';
				echo '<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;width: 250px;">';
				# '<!-- Team Thumb-->';
				echo '<div class="advisor_thumb"><a href="detail.html"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>';
					# <!-- Social Info-->
					echo '<div class="social-info"><a href="detail.html"><i class="fa fa-facebook"></i></a><a href="detail.html"><i class="fa fa-twitter"></i></a><a href="detail.html"><i class="fa fa-linkedin"></i></a></div>';
				echo '</div>';
					#<!-- Team Details-->
					echo '<div class="single_advisor_details_info">';
							
							echo "<h1>".$student[$index]['name']."</h1>";
							echo "<p>".$student[$index]['age']." </p>";
							echo "<p>".$student[$index]['gender']." </p>";
							echo "<p>".$student[$index]['year']." </p>";
							echo '<a href="noah_gestiehr.php?index=<?= $index ?>">See Student Info Test </a>';
							
					echo '</div>';
				echo '</div>';
			echo '</div>';
			
	}
?>

<?php
# Our student array
$student=[
	[
		'name'=>'Noah',
		'age'=>25,
		'gender'=>'male',
		'year'=>'$$$$',
		'pictures'=>[
			'ahrimanchibi.png',
		]
	],
	[
		'name'=>'Sean',
		'age'=>22,
		'gender'=>'male',
		'year'=>'$$$',
		'pictures'=>[
			'avatar.jpg',
		]
	],
	[
		'name'=>'Jason',
		'age'=>23,
		'gender'=>'male',
		'year'=>'$$$',
		'pictures'=>[
			'avatar1.jpg',
		]
	],
];

	$jsonfile = read_json(); 
?>
	<body>
<?php
#Displays our students array by using a for loop
#for($i=0;$i<count($student);$i++){
	?>
<!--	<h1><?=#$student[$i]['name'] ?></h1>
	<p><?=#$student[$i]['age']?></p>
	<p><?=#$student[$i]['gender']?></p>
	<p><?=#$student[$i]['year']?></p>
	-->
	<!-- Links -->
	
	<?php
} ?>



	
		<!-- This will be our 4 graphical cards for the group -->
		<div class="container text-center">
			<?= '<h1>This is ASE 230 - class of Fall 2021</h1>'?>
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-sm-8 col-lg-6">
				<!-- Section Heading-->
				<div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
					<?= '<h3>Our Creative <span> Team</span></h3>'?>
					<?= '<p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>'?>
					<div class="line"></div>
				</div>
			</div>
		</div>
		</div>
		<!-- Button to take us to create a new element in our student array -->
		<form method="post"	action="create.php">
				<p>
				<input type="submit" name="create" value="Create New Student">
				</p>
			</form>

		<!--# This code will print out the cards using functions over noraml code. Hopefully...-->
		<?php
			for($i=0;$i<count($student);$i++){
				showCard($student[$i]);
				
			}
		?>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<?php
		echo "<p>Copyright &copy; 2017-" . date('Y') . " Noah Gestiehr</p>";
		?>

	</body>
</html>