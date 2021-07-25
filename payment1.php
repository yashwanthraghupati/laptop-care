<!DOCTYPE html>
<html>
<link href="Css/style.css" rel="stylesheet" type="text/css" />
    <head>
        <title>LapCare.com</title>
        <link rel="stylesheet" type="text/css" href="Css/stylesheet.css" />
		<link href="Css/stylebutton.css" rel="stylesheet" type="text/css" />
		<link href="Css/slides.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/script1.js"></script>
		<style>
body {
  background-color: #E0FFFF;
}
table, th, td {
  border: 1px solid black;
}
</style>
    </head>



<body class="s1">

	<div class="whole">
    	<div class="head">
        	<div class="headcol1" id="whole"><img src="img/logo1.png" width="350" /></div>

      	</div><!--end of head-->


<body>




<div class=	"btn-group">
  <button class="button" onclick = "document.location='adminpage.html'">Home</button>

</div>
<div class=	"btn-group1">
  <button class="button" onclick = "document.location='payment1.php'">Payment</button>
</div>
<div class= "btn-group">
  <button class="button" onclick = "document.location='appoint1.php'">appointments</button>
  <button class="button" onclick = "document.location='index1.html'">Logout</button>

</div>


<br><br><br>






<body>

<h1 style="color: orange">Payments</h1>

        <table>
        <thead>
            <tr>
                <th>Name</th>
                <th><b>Skin no</b></th>
                <th>Mobile no</th>
                <th>Address</th>
                <th>Email</th>
                <th>UPI ID</th>
                <th>Message</th>
            </tr>

        </thead>
        <tbody>
        <?php
            $conn = new mysqli('localhost:3307','root','root','lapcare');
            if (!$conn) {
                die(mysql_error());
            }
           $stmt = "select * from payment";
            $result = $conn->query($stmt);if ($result->num_rows > 0) {
  // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["name"]."</td><td>".$row["skin"]."</td><td>".$row["mobile"]."</td><td>".$row["address"]."</td><td>".$row["email"]."</td><td>".$row["upiid"]."</td><td>".$row["message"]."</td></tr>";
            }
            echo "</table>";
    }           else {
             echo "0 results";
    }
            $conn->close();
        ?>
            
            </tbody>
            </table>
    
</body>
</html>
