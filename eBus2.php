<?php
session_start();
$fullNameValue = "" ;
$totalValue2="" ;
$Email ="";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal']= $totalValue2 ;
$_SESSION['txtnum']= $Email;
/**
 * Allocate the mobile number session variable to a text
 */
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Customer Details </title>
     <style type="text/css">
            @import url('https://fonts.googleapis.com/css?family=Montserrat');
            body{
                Background-image: url(wall.jpg);
                background-size: cover;
                background-attachment: fixed;
            }
            

.title {
	font-family: "Montserrat";
	text-align: center;
	color: #FFF;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	height: 100vh;
	letter-spacing: 8px;
}

h1 {
	background-image: url(https://media.giphy.com/media/26BROrSHlmyzzHf3i/giphy.gif);
	background-size: cover;
	color: transparent;
	-moz-background-clip: text;
	-webkit-background-clip: text;
	text-transform: uppercase;
	font-size: 120px;
	line-height: .75;
	margin: 10px 0;
}

img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5%;
    margin-bottom: 30%;
    border-radius: 20px;
    width: 40%;
    height: 60%;
   
}



    table {
  border: 1px solid black;
}
       

</style>
<div class="title">
            
 <h1>Enter details</h1>
 <h5><font color="black">SCROLL DOWN</font></h5>
 
        </div>

<body>
    <div class ="form">
        <form name ="Details" method ="post" action= "eBus3.php">
            <center>
                <table cellspacing ="10">
                    <tr>
                        <td><b></b></td>
                        <td><b> Enter in your details below</b></td>
                    </tr>
        
                    <tr>
                         <td> Name </td>
                         <td><input type="text" id="txtName" name="txtName" value="" required="" /> </td>
                    </tr>
        
                     <tr>
                         <td> Email </td>
                         <td><input type="text" id="txtNum" name="txtNum" value="" required=""/> </td>
                    </tr>
        
                    <tr>
                         <td> Password </td>
                         <td><input type="password" id="txtPassword" name="txtPassword" value="" required="" maxlength="4"/> </td>
                    </tr>
        
                    <tr>
                         <td><input type="Hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /> </td>
                    </tr>
        
                </table>
         </center>
        
        
            <center>   
        <input type="submit" name ="btnContinue" id="btnContinue" onclick="" value="Continue"  style=background-color:green; />
         
            </center>
    </div>
</form>
    </body>
    </html>



