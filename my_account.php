
<?php
session_start();

if(!isset($_SESSION['category']) || trim($_SESSION['category'])=='')
{
	header("location:indesc.php");
}
else
{
	$category=$_SESSION['category'];
	$email=$_SESSION['email'];
	$companyname=$_SESSION['companyname'];
	$contactname=$_SESSION['contactname'];
	$number=$_SESSION['number'];
	
} ?>
<?php

    if(isset($_POST['submit']))  

{
	//ob_start();
    $causine=$_POST['causine']; 
	$service=$_POST['service']; 
	 $employees=$_POST['employees']; 
	$outlets=$_POST['outlets'];  
	$kitchens=$_POST['kitchens'];  
$guestcapacity=$_POST['guestcapacity']; 
    $roomservice=$_POST['roomservice']; 	
    $peakperiod=$_POST['peakperiod']; 	

	// Connect to server and select databse.
	mysql_connect("localhost", "root", "")or die("cannot connect"); 
	mysql_select_db("laikiana_db")or die("cannot select DB");
	
	//insert
	$sql_insert = "INSERT into request_quote_hotels

		    VALUES
		    (id,'$causine','$service','$employees','$outlets','$kitchens','$guestcapacity','$roomservice','$peakperiod','$email','$companyname','$category')";


		mysql_query($sql_insert) or die("Insertion Failed:" . mysql_error());
		
		header("location:my_accjount.php");
}

?>
<!---------------------------------------------------------SECTION------------------------------------------------------------------------------->
<?php

if(isset($_POST['submit1'])=='submit1')

{
	//ob_start();
    $type=$_POST['type']; 
	$description=$_POST['description']; 
	 $kitchens=$_POST['kitchens']; 
	$menu=$_POST['menu'];  
	// Connect to server and select databse.
	mysql_connect("localhost", "root", "")or die("cannot connect"); 
	mysql_select_db("laikiana_db")or die("cannot select DB");
	
	//insert
	$sql_insert = "INSERT into request_quote_institutions

		    VALUES
		    (id,'$type','$category','$kitchens','$menu','$email','$companyname','$category')";


		mysql_query($sql_insert) or die("Insertion Failed:" . mysql_error());
		
		header("location:my_accjount.php");
}

?>
<!---------------------------------------------------------SECTION------------------------------------------------------------------------------->
<?php

if(isset($_POST['submit2'])=='submit2')

{
	//ob_start();
    $services=$_POST['services']; 
	$members=$_POST['members']; 
	 $employes=$_POST['employees']; 
	$facilities=$_POST['facilities'];  
	// Connect to server and select databse.
	mysql_connect("localhost", "root", "")or die("cannot connect"); 
	mysql_select_db("laikiana_db")or die("cannot select DB");
	
	//insert
	$sql_insert = "INSERT into request_quote_clubs

		    VALUES
		    (id,'$services','$members','$employees','$facilities','$email','$companyname','$category')";


		mysql_query($sql_insert) or die("Insertion Failed:" . mysql_error());
		
		header("location:my_accjount.php");
}

?>
<!---------------------------------------------------------SECTION------------------------------------------------------------------------------->
<?php

if(isset($_POST['submit3'])=='submit3')

{
	//ob_start();
    $kitchens=$_POST['kitchens']; 
	$capacity=$_POST['capacity']; 
	 $population=$_POST['population']; 
	// Connect to server and select databse.
	mysql_connect("localhost", "root", "")or die("cannot connect"); 
	mysql_select_db("laikiana_db")or die("cannot select DB");
	
	//insert
	$sql_insert = "INSERT into request_quote_pubs

		    VALUES
		    (id,'$kitchens','$capacity','$population','$email','$companyname','$category')";


		mysql_query($sql_insert) or die("Insertion Failed:" . mysql_error());
		
		header("location:my_accjount.php");
}

?>
<!---------------------------------------------------------SECTION------------------------------------------------------------------------------->
<?php

if(isset($_POST['submit4'])=='submit4')

{
	//ob_start();
    $catering_unit=$_POST['catering_unit']; 
	$outlets=$_POST['outlets']; 
	 $peak_periods=$_POST['peak_periods']; 
	// Connect to server and select databse.
	mysql_connect("localhost", "root", "")or die("cannot connect"); 
	mysql_select_db("laikiana_db")or die("cannot select DB");
	
	//insert
	$sql_insert = "INSERT into request_quote_catering

		    VALUES
		    (id,'$catering_unit','$outlets','$peak_periods','$email','$companyname','$category')";


		mysql_query($sql_insert) or die("Insertion Failed:" . mysql_error());
		
		header("location:my_accjount.php");
}

?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title></title>

</head>

<body>
<body>
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="css/style.css" />

<form name="form1" onSubmit="return validateForm(this)" method="post" action="" >
<div align="center">

					<?php echo $contactname ?> &nbsp;THANK YOU FOR REQUESTING A QOUTE! Please Fill in the details below to tailor your qoute for &nbsp;
					<?php echo $companyname ?>
					<?php

							if ($category=='hotel')
							{?>

<body>
<div class="container">
	<a id="modal_trigger" href="#modal" class="btn"><?php echo $contactname ?>,Click here to continue</a>

	<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Request a qoute</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="centeredText">
					<span><?php echo $contactname ?>,  Did you know you can sell products on laikiana?</span>
				</div>

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Continue</a></div>
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
<form name="form1" onSubmit="return validateForm(this)" method="post" action="jds.php" >
		  Enter Causines Available:
		    <input type="text" name="causines" value=""> 
		 What services do you offer
		   <input type="text" name="service" value=""> 
		 How many employees do you have
		   <input type="text" name="employees" value="">
		  How many outlets does your hotel hhave
		    <input type="text" name="outlets" value="">
		  How many kitchens do you have
		    <input type="text" name="kitchens" value="">
		  Which recreation Facilities do you have?
		    <input type="text" name="recreation" value="">
		  What is your guest capacity
          <input type="text" name="guestcapacity">
		 What room service do you have
		    <input type="text" name="roomservice" value="">
		What is your peak period
          <input type="text"  name="peakperiod">
		  <br/>
            <input type="submit" name="submit" value="submit" />

           
</form>



			</div>
		</section>
	</div>
</div>

<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 20, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script> 		
<?php 							
							}
						
							if ($category=='institutions')
							{ ?>
<body>
<div class="container">
	<a id="modal_trigger" href="#modal" class="btn"><?php echo $contactname ?>,Click here to continue</a>

	<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Request a qoute</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="centeredText">
					<span><?php echo $contactname ?>,  Did you know you can sell products on laikiana?</span>
				</div>

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Continue</a></div>
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
<form name="form1" onSubmit="return validateForm(this)" method="post" action="jds.php" >
		  Enter Type of Institutions:
		    <input type="text" placeholder="e.g college, high school, university" name="type" value=""> 
		 What services do you offer
		   <input type="text" placeholder="e.g public or private" name="description" value=""> 
	
		  How many kitchens do you have
		    <input type="text" name="kitchens" value="">
		 What is the basic menu?
		    <input type="text" name="menu" value="">
		  <br/>
            <input type="submit" name="submit1" value="submit1" />

           
</form>



			</div>
		</section>
	</div>
</div>

<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 20, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script> 		
<?php									
							}
							if ($category=='clubs')
{ ?>
<body>
<div class="container">
	<a id="modal_trigger" href="#modal" class="btn"><?php echo $contactname ?>,Click here to continue</a>

	<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Request a qoute</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="centeredText">
					<span><?php echo $contactname ?>,  Did you know you can sell products on laikiana?</span>
				</div>

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Continue</a></div>
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
<form name="form1" onSubmit="return validateForm(this)" method="post" action="jds.php" >
		  Enter services offerd:
				<input type="text" id="services" placeholder="Services" value="" name="services"/></li>
		How Many Members do you have
				<input type="text" id="members" placeholder="No of Members" value="" name="members"/></li>
	
		  No of Employees
				<input type="text" id="employees" placeholder="No of employees" value="" name="employees"/></li>
		 How many facillities do you have?
				<input type="text" id="facilities" placeholder="Facilities available" value="" name="facilities"/></li>
		  <br/>
            <input type="submit" name="submit2" value="submit2" />

           
</form>



			</div>
		</section>
	</div>
</div>

<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 20, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script> 
<?php									
							}
							if ($category=='pubs')
{ ?>
<body>
<div class="container">
	<a id="modal_trigger" href="#modal" class="btn"><?php echo $contactname ?>,Click here to continue</a>

	<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Request a qoute</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="centeredText">
					<span><?php echo $contactname ?>,  Did you know you can sell products on laikiana?</span>
				</div>

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Continue</a></div>
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
<form name="form1" onSubmit="return validateForm(this)" method="post" action="jds.php" >
		 Number of Kitchens:
				<input type="text" id="kitchens" placeholder="No of kitchens" value="" name="kitchens"/>
		Capacity:
				<input type="text" id="capacity" placeholder="No of people" value="" name="capacity"/>
	
		 What is your target population
				<input type="text" id="population" value="" placeholder="target population" name="population"/>
		  <br/>
            <input type="submit" name="submit3" value="submit3" />

           
</form>



			</div>
		</section>
	</div>
</div>

<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 20, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script>
<?php									
							}
							if ($category=='catering')
{ ?>
<body>
<div class="container">
	<a id="modal_trigger" href="#modal" class="btn"><?php echo $contactname ?>,Click here to continue</a>

	<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Request a qoute</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="centeredText">
					<span><?php echo $contactname ?>,  Did you know you can sell products on laikiana?</span>
				</div>

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Continue</a></div>
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
<form name="form1" onSubmit="return validateForm(this)" method="post" action="jds.php" >
Describe catering unit
				<input type="text" id="catering_unit" placeholder="The catering unit" value="" name="catering_unit"/></li>
				Number of outlets
				<input type="text" id="outlets" placeholder="Number of Outlets" value="" name="outlets"/></li>
				What are your peak periods
				<input type="text" id="peak_periods" placeholder="Peak Periods" value="" name="peak_periods"/></li>
		  <br/>
            <input type="submit" name="submit4" value="submit4" />

           
</form>



			</div>
		</section>
	</div>
</div>

<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 20, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script>
	<?php									
							}
											
					?>
		
</div>



</form>
</div>
</body>

</html>