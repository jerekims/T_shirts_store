<?php  
//check to see the method used
if ($_SERVER["REQUEST_METHOD"]=="POST") {
		//var_dump($_POST);access all the values saved in the input fields.
	// receive the values from the form and assign them to new variable
	$name=$_POST["name"];
	$email=$_POST["email"];
	$message=$_POST["message"];
	echo $name.$email.$message;
// redirect the user to the thanks page once the details are saved
	header("location:contact.php?status=thanks");
	//ensure that browser does not execute any php code below.
	exit;
}
?>
<?php 
//changes the tab  depending on the page the user moves to
$pagetitle="Contact T-shirts Online Store";
//underlines the current page the user is
$section="contact";
//connect to the  header file which contain the header for all the pages
include('inc/header.php');
?>
     <div  id="content" class="section page">

     	<div class="wrapper">

     	     <h1>Contact</h1>

     	 <?php if(isset($_GET["status"]) AND $_GET["status"] =="thanks") {?>

     	<p>Thank you for sharing your comments with us.</p>
     	<?php } else { ?> 

	     	 <p>Please send us any comment in the section below</p>

	     	 <form  method="POST" action=contact.php>
	     		<table>
	     			<tr>
	     				<th>
	     					<label for="name">Enter Your  Full Name:
	     					</label>
	     				</th>
	     				<td> <input type="text" name="name" id="name"></td>
	     			</tr>
	     			<tr>
	     				<th><label for="email">Enter Your Email</label>
	     				</th>
	     				<td><input type="email" name="email" id="email"></td>
	     			</tr>
	     			<tr>
	     				<th><label for="message">Message</label></th>
	     				<td><textarea name="message" id="message"></textarea></td>
	     			</tr>
	     		</table>
	     		<input type="submit" value="send"> 
	     	</form> 
	     	<?php  }  ?>
	 </div
	     	

 </div>
<?php  include('inc/footer.php');?>