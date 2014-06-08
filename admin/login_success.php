
<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start();
//if(!session_is_registered($myusername)){
if (!isset($_SESSION['myusername'])){
    echo "here";
header("location:main_login.php");
}
?>

<html>
<head>
    <script type="text/javascript" src="jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="generic-tools.js"></script>
    <script type="text/javascript" src="experiment-tools.js"></script>
    <script type="text/javascript" src="browserid.js"></script>

    <script type="text/javascript" src="probExp.js"></script>

    <link rel="stylesheet" type="text/css" href="experiment-style.css" />
    <link rel="stylesheet" type="text/css" href="TSP.css" />

    <title>DataBase</title>
 
</head>
<body>


    <div id="demographics" class="page">
        <div class="intro demographics">
                <h2>Insert into your DB</h2>
             <form action="add.php" method="post">
                    <table>
                <tr>
                    <td>
                        <p>Title:</p>
                    </td>
                    <td>
                         
                        <div>
                            <br/>
                            <input type="text" name="title" />
                        </div>
                   </td>
                </tr>
                         <tr>
                    <td>
                        <p>Description:</p>
                    </td>
                    <td>
                        <input type="text" name="description" size="300" /></td>
                </tr>
                         <tr>
                    <td>
                        <p>Keywords:</p>
                    </td>
                    <td>
                        <input type="text" name="keywords" size="300" /></td>
                </tr>
                         <tr>
                    <td>
                        <p>Links:</p>
                    </td>
                    <td>
                        <input type="text" name="links" size="40" /></td>
                </tr>
                
            </table>
                             <input type="submit" name="go" id="go" value="GO" />
                  </form>


        </div>
    </div>
    
    
   





</body>
</html>