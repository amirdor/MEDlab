 <?php
require('func.php');
$tb_name="Pages";
$title="contact";
$query="SELECT * FROM $tb_name WHERE title=\"$title\"";
$row=getDB($tb_name,$query);

$tb_name="template";
$query="SELECT * FROM $tb_name WHERE id='2'";
$main_rows=getDB($tb_name,$query);



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact Us</title>
<?php echo $main_rows['head']?>
</head>

<body  dir="ltr" >
	<?php
		editable("mail");

	?>
     <div class="wrapper" >
        <div id="topmenu" class="topmenu">

<?php echo $main_rows['header']?>

<?php echo $row['topbar']?>
<div id="intro">
<link href="styles/style.css" rel="stylesheet" />



            <div class="container">

                <div class="row wrap"> 

                    <div class="col-lg-12">
                        <h1 class="page-header-top">Contact Us
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a>
                            </li>
                            <li><a href="contact.php">Contact Us</a></li>
							<li class="active">Mail</li>
                        </ol>
                    

                </div>
                <div class="col-lg-12">
                
             		<form action="mail.php" method="POST">
				<h5>Name</h5> <input type="text"  required="required" name="name"style="margin: 2px; width: 40%; height: 100%;">
			
				<h5>Email</h5> <input type="text" tabindex="1" required="required" autocomplete="off" class="inset ls-spr email" placeholder="email" name="email"style="margin: 2px; width: 40%; height: 100%;">
				<h5>Message</h5><textarea name="message" required="required"  rows="10" cols="25" style="margin: 2px; width: 100%; height: 100%;"></textarea><br />
				<input type="submit" value="Send"><input type="reset" value="Clear">
				</form>
			
           </div>

</div>          <!--  end container -->

      </div>

	    </div>
			   
     
<?php echo $main_rows['footer'];?>
   
			<?php echo $main_rows['copyright'];?>



      </div>
         </div>
</body>

</html>