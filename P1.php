<?php 
  
// Username is root 
$user = 'root'; 
$password = '';  
  
// Database name is gfg 
$database = 'memes_db';  
  
// Server is localhost with 
// port number 3308 
$servername='localhost'; 
$mysqli = new mysqli($servername, $user,  
                $password, $database); 
  
// Checking for connections 
if ($mysqli->connect_error) { 
    die('Connect Error (' .  
    $mysqli->connect_errno . ') '.  
    $mysqli->connect_error); 
} 
  
// SQL query to select data from database 
$sql = "SELECT * FROM meme_tb WHERE User_Id<=100 ORDER BY TimeStamp DESC "; 
$result = $mysqli->query($sql); 
$mysqli->close();  
?> 
<html>
	<head>
		<title style="align-content: center;font-size: 90px;">MEME STREAM</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>

      img {
        width:250px;
        align-content: center;
      }
      td {
        text-align:center; 
        border:2px solid black;
        padding-left: 5px;
        margin-top: 12px;
        border-radius:10px;
      }

			input[type=text], select, textarea {
  				width: 60%;
  				padding: 8px;
  				border: 1px solid black;
  				border-radius: 10px;
  				box-sizing: border-box;
  				resize: vertical;
			}

			input[type=submit] {
  				background-color: #2832C2;
  				color: white;
  				width:15%;
  				margin-top:0px;
   				padding: 12px 12px;
  				border: 1px solid black;
  				border-radius: 5px;
  				cursor: pointer;
			}

			input[type=url] {
				background-color:white;
				width:45%;
				padding: 12px;
  				border: 1px solid black;
  				border-radius: 10px;
  				box-sizing: border-box;
  				resize: vertical;
			}

			input[type=submit]:hover {
  				background-color:#151E3D;
			}

		</style>
	</head>
	<body style="font-family: Algeria; font-size: 20px; background-image: url('i1.jpg'); background-repeat: no-repeat;background-attachment: fixed;
  background-position: center;background-size: cover;">
		<h1 style="margin-left: 370px; font-size:60px">Meme Stream</h1>
		<form style="margin-left: 370px" action="1.php" method="post">

    		<label class='required' for="name">Meme Owner:</label><br>
    		<input type="text" id="name" name="name" placeholder="Enter your Full Name:"><br><br>

    		<label class='required' for="caption">Caption</label><br>
    		<input type="text" id="caption" name="caption" placeholder="Be creative with your caption"><br><br>

		    <label class='required' for="url" style="">URL Meme:</label><br>
    		<input type="url" id="url" name="url" placeholder="Enter URL of your meme here">

    		<input type="submit" value="Submit Meme"><br><br>

  		</form>
      <div class="container">
          <div class="row" style="text-align:center;margin-left: 130px;">
       <?php   
                while($rows=$result->fetch_assoc()) 
                { 
             ?>
                <div class="col-3" style="border: 2px solid black; border-radius:10px; margin-left: 5px; text-align: center; margin-top:5px; margin-bottom:5px;">
                <?php $url=$rows['URL']; 
              $image = base64_encode(file_get_contents("$url"));
        ?>
                <?php echo $rows['Owner'];?><br> 
                <?php echo $rows['Caption'];?> <br>
                <?php echo '<img style="width:210px;" src="data:image/jpeg;base64,'.$image.'">';?><br>
              </div>
              
            <?php 
                } 
             ?> 
             </div
        </div>

	</body>
</html>


