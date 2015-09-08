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
	if ($_POST['category']=='bars' )
	{
		$category='bars';
		
	}
		if ($_POST['category']=='hotel' )
	{
		$category='hotel';
		
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

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title></title>
<link href="Style.css" rel="stylesheet" type="text/css" />

</head>

<body>
<body>
     <div id="contentForm">
		<form action="insertserv.php" method="post" enctype="multipart/form-data"/>

			<ol id="hotel" class="formset">
				<li><strong>Hotel And Resturants:</strong></li>
				<li><label for="cousine">Type of Cousine: </label>
				<input type="text" id="causine" value="" name="causine"/></li>
				<li><label for="hours">Hours of services: </label>
				<input type="text" id="hours" value="" name="hours"/></li>
				<li><label for="employees">Number of employees: </label>
				<input type="text" id="employees" value="" name="employees"/></li>
				<li><label for="outlets">Number of Outlets: </label>
				<input type="text" id="outlets" value="" name="outlets"/></li>
				<li><label for="kitchen">Number of Kitckens: </label>
				<input type="text" id="kitchen" value="" name="kitchen"/></li>
				<li><label for="reacreation">Recreation of facillities avilable: </label>
				<input type="text" id="recreation" value="" name="recreation"/></li>
				<li><label for="capacity">Guest Capacity: </label>
				<input type="text" id="capacity" value="" name="capacity"/></li>
				<li><label for="rservice">Room Services available: </label>
				<input type="text" id="rservice" value="" name="rservice"/></li>
				<li><label for="rooms">Number of Rooms: </label>
				<input type="text" id="rooms" value="" name="rooms"/></li>
				<li><label for="peak">Peak Period: </label>
				<input type="text" id="peak" value="" name="peak"/></li>
				<li><label for="Email">Confirm Email.: </label>
				<input type="text" id="email" value="" name="email"/></li>
				<input type="button" name="hotels" value="Hotels"/>
				
			</ol>
			</form>
						</div>

			</body>
			</html>
			