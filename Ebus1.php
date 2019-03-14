
<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="https.//www.w3.org/1999/xhtml"
    <head>
          <meta charset="utf-8" />
          <title> Ebusiness</title>
          <link rel="stylesheet" href="style.css" type="text/css" />
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
            
 <h1>ebusiness</h1>
 <h5><font color="black">SCROLL DOWN</font></h5>
 
        </div>
        
    </head>
     <style>
         table {
  border: 1px solid black;
}
     body   {background: url(wall.jpg);}
     
    
    </style>
    <body>
    
        <div class="form">
            <form name="intCalc" method="post" action="eBus2.php">
                
                
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b><h3 style=""><font face="verdana">Select a Consulting Service:</font></h3></b></td> 
                        </tr>
                         <tr> 
                            <td> Blockchain @ $1000</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" required ></td>
                        </tr>
                        <tr>
                            <td>Autonomous Things (Robots) @ $2000</td>
                            <td><input type="radio" id="Autonomous" name="rdoGroup" value="2000" ></td>
                        </tr>
                        <tr>
                            <td>Immersive Experience @ $3000</td>
                            <td><input type="radio" id="Immersive" name="rdoGroup" value="3000" ></td>
                        </tr>
                    </table>
                </center>
                <br />
                
                <center> 
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td>  <b > Amount</b></td>
                        </tr>
                        <tr>
                            <td>Sub Total</td>
                            <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                        </tr>
                        <tr>
                            <td>Discount @ 10%</td>
                            <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                        </tr>
                        <tr>
                            <td>+VAT @ 20%</td>
                            <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                        </tr>
                    </table>
                </center>
                <br />
                <center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount" style=background-color:green;    />
                    
                        <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear Choice" style=background-color:white; />
                    <input type="submit" name="btnAdd" id="btnAdd" onclick="" value="Add to Shopping Cart" style=background-color:yellow; />
                </center>
            </form>
        </div>
        
        <script type="text/javascript">
            function calcSub() {
                //Assigning variables to the values
                var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                var Autonomous = parseFloat(document.getElementById('Autonomous').value);
                var Immersive = parseFloat(document.getElementById('Immersive').value);
                
                //If radio buttons are clicked, values are assigned
                if (document.getElementById('Blockchain').checked) {
                    document.intCalc.txtSubTot.value = Blockchain;
                    subAmount = Blockchain;
                    calculation(subAmount);
                }
                else if (document.getElementById('Autonomous').checked) {
                    document.intCalc.txtSubTot.value = Autonomous;
                    subAmount = Autonomous;
                    calculation(subAmount);
            }
            else if (document.getElementById('Immersive').checked) {
                    document.intCalc.txtSubTot.value = Immersive;
                    subAmount = Immersive;
                    calculation(subAmount);
                }
            }
            
            //Function for calculating  the values
            function calculation(parmSTotal) {
                var subTotal = parseFloat(parmSTotal);
                var discCalc = parseFloat(subTotal * .10);
                var vatCalc = parseFloat(subTotal * .20);
                var total = parseFloat(subTotal - discCalc + vatCalc);
                
                //Inserting them into the correct fields
                document.intCalc.txtDisc.value = discCalc;
                document.intCalc.txtVat.value = vatCalc;
                document.intCalc.txtTotal.value = total;
            }
            
            function AmountClear() {
                document.getElementById('txtSubTot').value ="";
                document.getElementById('txtDisc').value ="";
                document.getElementById('txtVat').value ="";
                document.getElementById('txtTotal').value ="";
            }
            
        </script>
    </body>
</html>