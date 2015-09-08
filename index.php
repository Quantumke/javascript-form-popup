<!DOCTYPE html>
<html lang="en">


<?php

    if(isset($_POST['submit']))  

{
	//ob_start();
    $companyname=$_POST['companyname']; 
	$address=$_POST['address']; 
	 $location=$_POST['location']; 
	$contactname=$_POST['contactname'];  
	$designation=$_POST['designation'];  
$number=$_POST['number']; 
    $email=$_POST['email']; 	
	if ($_POST['category']=='pubs' )
	{
		$category='pubs';
		
	}
	if ($_POST['category']=='clubs' )
	{
		$category='clubs';
		
	}
		if ($_POST['category']=='hotel' )
	{
		$category='hotel';
		
	}
			if ($_POST['category']=='institutions' )
	{
		$category='institutions';
		
	}
			if ($_POST['category']=='catering' )
	{
		$category='catering';
		
	}

	// Connect to server and select databse.
	mysql_connect("localhost", "root", "")or die("cannot connect"); 
	mysql_select_db("laikiana_db")or die("cannot select DB");
	
	//insert
	$sql_insert = "INSERT into request_quote

		    VALUES
		    (id,'$category','$companyname','$address','$location','$contactname','$designation','$number','$email')";


		mysql_query($sql_insert) or die("Insertion Failed:" . mysql_error());
$sess="SELECT * FROM request_quote  WHERE category='$category'  and email='$email' and companyname='$companyname' and contactname='$contactname'and number='$number'";
	$result=mysql_query($sess);
		session_start();
		
		$_SESSION['category']= mysql_result($result,0,"category"); 
		$_SESSION['email']= mysql_result($result,0,"email");
		$_SESSION['companyname']= mysql_result($result,0,"companyname"); 
		$_SESSION['contactname']= mysql_result($result,0,"contactname");
		$_SESSION['number']= mysql_result($result,0,"number");
		
		
		
		header("location:my_account.php");
}
?>
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="css/style2.css" />

<body>
<div class="container">
	<a id="modal_trigger" href="#modal" class="btn">Click here to Login or register</a>

	<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Request a qoute</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="centeredText">
					<span>Thank you for requesting a quote with laikiana. <br/> please fill up the form for us to tailor you qoute</span>
				</div>

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Continue</a></div>
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
<form name="form1"  method="post" action="" >
		  Enter Company Name
		    <input type="text" class="form-control" name="companyname" required value=""> 
		  Adress   
		    <input type="text" class="form-control" name="address" required value=""> 
		  Enter location
		    <input type="text" class="form-control" name="location" required value="">
		  Enter Contact Name
		    <input type="text" class="form-control" name="contactname" required value="">
		  Enter Your Designation
		    <input type="text" class="form-control" name="designation" required value="">
		  Enter Phone Number
		    <input type="text" class="form-control" name="number"  required value="">
		  Enter Email
		
                                        <input type="text" required class="form-control" placeholder="Email" name="email">


            <label>
            <input type="radio" name="category" value="pubs" /> pub
            </label>
			<label>
            <input type="radio" name="category" value="clubs" /> Club
            </label><label>
            <input type="radio" name="category" value="hotel" /> Hotel
			
            </label>
            <label>
            <input type="radio" name="category" value="institutions" /> Institution
            </label>
			           <label>
            <input type="radio" name="category" value="catering" /> Catering Services
            </label>
   
			
			
            <label>
            <input type="submit" name="submit" value="submit" />
            </label>
          </p>
</form>

			</div>


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

</body>
</html>
