<!DOCTYPE html>
<html>
    <head>
        <title>Complete</title>
        <meta charset="UTF-8">
       
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
</style>
    <div class="title">
            
 <h1>thank you!</h1>
 <h5><font color="black">SCROLL DOWN</font></h5>
 
        </div>
 <?php
 
 session_start () ;
 $totalValue2 = $_POST ['txtTotal'];
 $fullNameValue= $_POST ['txtName'];
 $Email = $_POST['txtNum'];
 echo "Customer name : ".$fullNameValue.".";
 echo "<br></br>";
 echo "The Email is : ".$Email.".";
 echo "<br></br>";
 echo "The total value is : ".$totalValue2."";
 ?>
     <style type="text/css">
        html,body{
  height:100%;
}
body{
  text-align:center;
}
body:before{
  content:'';
  height:50%;
  display:inline-block;
  vertical-align:middle;
}
button{
  background:#1AAB8A;
  color:#fff;
  border:none;
  position:relative;
  height:50px;
  font-size:1.6em;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
}
button:hover{
  background:#fff;
  color:#1AAB8A;
}
button:before,button:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: #1AAB8A;
  transition:400ms ease all;
}
button:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
button:hover:before,button:hover:after{
  width:100%;
  transition:800ms ease all;
}
        </style>
        <br></br> <form method="get" action="index.php" > <button type="submit" class="button button" >Return to Index</button>   </form>
        
        
    </body>
</html>

