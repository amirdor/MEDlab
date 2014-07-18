<?php
  // connection parameters
$db_host = "localhost";
$username = "root";
$password = "9670";
$db_name = "site_db";
$tb_name = "about";

// connection variables + connection to mysql and db
$db_con = mysql_connect($db_host, $username, $password);
$result = mysql_select_db($db_name, $db_con);
$tag=mysql_real_escape_string($_GET['tag']);


// page variables
$query = "SELECT * FROM $tb_name WHERE tag='$tag'" ;
$result = mysql_query($query, $db_con);
// successful result

$row = mysql_fetch_array($result)
?>
<!DOCTYPE html>
<html lang="en"
      >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo$row['name']?></title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
     <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="imagetoolbar" content="no" />
    <link rel="stylesheet" href="../styles/layout.css" type="text/css" />
    <!-- Add custom CSS here -->
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body class="body-size"
      >
  <form id="form1" runat="server">
     <div class="wrapper" >
        <div id="topmenu">
            <!-- ####################################################################################################### -->
               <div id="header">
                <div class="fl_left">
					<table style="width:100%">
					<tr>
					  <td>	<img src="../img/logo-small.png" width="40" height="70" alt="Med Logo">
					</td>
					  <td><h1 style="color: orangered; width: 523px;"><a href="../index.html">Medical Informatics</a></h1>
                    <p>Research Center</p></td> 
					</tr>
					</table>
                
                </div>
                <br>

            </div>
            <!-- ####################################################################################################### -->
            <div id="topbar">
                <div class="fl_left">
                    <form action=".././search.php" method="get">
                        <div>
                            <br/>
                            <input type="text" name="input"  value="Search the site&hellip;" onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;" />
                            <input type="submit" name="go" id="go" value="GO" />
                        </div>
                    </form>
                </div>
                <div id="topnav">
                    <ul>
                        <li ><a href="../index.html">Home</a></li>
                        <li class="active"><a href="../about.html">Members</a></li>
                        <li><a href="../Publications.html">Publications</a></li>
                        <li><a href="#">Projects</a>
                            <ul>
                                <li><a href="../Projects/OldProjects.html">Old Projects</a></li>
                                <li><a href="../Projects/UGProjects.html">Undergraduate Projects</a></li>
                                <li><a href="../Projects/NewProjects.html">New Projects</a></li>
                            </ul>
                        </li>
                        <li><a href="../contact.html">Contact Us</a></li>
                    </ul>
                </div>
       <div class="clear"></div>
            </div>
			<br/>
        </div>
        <!-- ####################################################################################################### -->
	  <div id="intro">
	            <div>
	                    <!-- Custom CSS for the 'Round About' Template -->
	         <link href="../styles/style.css"rel="stylesheet" />
	     <div class="container">

	        <div class="row">
	                         <div class="col-lg-12" style="width:1000px"
	                    id="<?php echo$row['tag'];?>" >
	                    <h2 class="page-header" style="font-size: 28px"><?php echo$row['name'];?></h2>
	                              <ol class="breadcrumb">
	                                <li><a href="../index.html">Home</a>
	                                </li>
	                                <li><a href="../members.html">Members</a></li>
	                                 <li class="active"><?php echo$row['name'];?></li>
	                            </ol>
	                    <div id="member"
	                         >
	<?php echo$row['text'];?>

<div id="Publications">
	<?php if($row['link']==NULL){
		echo'      <h4><a href="#" onclick="PublicationFunc()" >See Publications</a></h4>
                 <script>
function PublicationFunc() {
alert("Sorry, I don\'t have Publictions yet.");
}
</script>';
	}
	else{
		echo '<h4><a href="'.$row['link'].'" >See Publications</a></h4>';
	}
	
	?>
                  
                        </div>
                </div>
        </div>

    

    </div>
    <!-- /container -->

    <!-- JavaScript -->
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.js"></script>
   </div>
            </div>
        </div>
  <!-- ####################################################################################################### -->
      <div id="footer">
          <div>
              <div align="center">
                  <table width="100%" border="0">
                      <tr>
                          <td height="25" valign="top" bgcolor="#663366">
                              <p align="center">
                                  <a href="../index.html"  style="color: white; background-color: #663366">Home Page</a> | <a href="../Projects/NewProjects.html" style="color: white; background-color: #663366">New
                                                                                                                                                Projects</a> | <a href="../Publications.html" style="color: white; background-color: #663366">Publications</a>
                                  | <a href="../about.html"  style="color: white; background-color: #663366">Research 
                                        Members</a> | <a href="http://www.bgu.ac.il" target="_blank" style="color: white; background-color: #663366">BGU</a> | <a href="http://www.ise.bgu.ac.il/" target="_blank" style="color: white; background-color: #663366">ISE</a>
                                                                        | <a href="../contact.html" style="color: white; background-color: #663366">Contact Us</a>  | <a href="../map.html" style="color: white; background-color: #663366">Map</a>
                              </p>
                          </td>
                      </tr>
                  </table>
                  <p class="bottomMenu">&nbsp;</p>
              </div>

          </div>

          <!-- ####################################################################################################### -->
          <div id="copyright">
              <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">BGU</a></p>
              <br class="clear" />
          </div>
          <!-- ####################################################################################################### -->
        <br class="clear" />
    </div>
</div>
</form>


</body>

</html>

