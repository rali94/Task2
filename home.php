<!DOCTYPE HTML>
<html>
<head>
  <title>Rali's page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">colour<span class="logo_colour">purple</span></a></h1>
          <h2>IL WEB</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="search.php">Search</a></li>
          <li><a href="innerpage.php">Inner Page</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
    <h3>Search</h3>
<!--     <form method="post" action="edit-record.php?id='. $row['id'].'"> -->
    <form action="search.php?id='.$row['ID'].'" method="get">
		<input type="text" name="search" value = "Enter keywords"/>
		<input type="submit" name="submit" value="Search">
	</form>
	<?php
//  	$user = 'root';
//  	$pass = '';
//  	$db = 'articles';
//  	$id = "";
//  	$conn = new mysqli('localhost', $user, $pass, $db);
	
//  	if ($conn->connect_error) {
//  		die("Connection failed: " . $conn->connect_error);
//  	}
//  	$id=$_GET["id"];
//  	if(isset($_GET['submit'])){ 
//  		if($conn->connect_error){
//     			 echo 'Connection Faild: '.$conn->connect_error;
//     	}else{
//     		$id=$_GET["ID"];
//     		$sql="select * from images where Description like '%$search_value%'";
//     		$result=$conn->query($sql)or die($conn->error);;
//         		if ($result->num_rows > 0) {
        		?>
<!--        		<ul> -->
       		<?php 
//         	while($row=$result->fetch_assoc()){
//             	?>
  <!--           	<li> <h2> <?php echo $row["Description"] ?> </h2> -->
     <!--        	<img src="images/<?php echo $row['FileName']?>"></li> -->
     <?php       
// } 
           	?> 
<!--            	</ul> -->
           	<?php 
//     	} else {
//     		echo "0 results";
//     	}
//     	}
// 	}
//         $conn->close();
        
//         $sql = "SELECT ID1, Name,ImageID FROM articles";
//         $result = $conn->query($sql);
        
//         if ($result->num_rows > 0) {
//         	while($row = $result->fetch_assoc()) {
//         		echo "id: " . $row["ID1"]. " - Name: " . $row["Name"]. " " . $row["ImageID"]. "<br>";
//         	}
//         } else {
//         	echo "0 results";
//         }
?>
<!--         <h3>Search</h3> -->
<!--         <form method="post" action="#" id="search_form"> -->
<!--           <p> -->
<!--             <input class="search" type="text" name="search_field" value="Enter keywords....." /> -->
<!--           <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" /> -->
<!--           </p> -->
      <div id="content">
		        <div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="images/1.jpg" alt="Chania">
		    </div>
		
		    <div class="item">
		      <img src="images/2.jpg" alt="Chania">
		    </div>
		
		    <div class="item">
		      <img src="images/3.jpg" alt="Flower">
		    </div>
		
		    <div class="item">
		      <img src="images/4.jpg" alt="Flower">
		    </div>
		  </div>
		
		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
    </div>
     </form>
      </div>
    </div>
</body>
</html>

