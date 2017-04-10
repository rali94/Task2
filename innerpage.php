<!DOCTYPE HTML>
<html>

<head>
<title>Rali's inner page</title>
<meta name="description" content="website description" />
<meta name="keywords" content="website keywords, website keywords" />
<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
<div id="main">
<div id="header">
<div id="logo">
<div id="logo_text">
<!-- class="logo_colour", allows you to change the colour of the text -->
<h1><a href="index.php">colour<span class="logo_colour">purple</span></a></h1>
<h2>IL Web</h2>
</div>
</div>
<div id="menubar">
<ul id="menu">
<!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php?page=1">Home</a></li>
          <li><a href="index.php?page=2">Search</a></li>
          <li class="selected"><a href="index.php?page=3"> Inner Page</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
        <h3>Search</h3>
         <form action="index.php" method="get">
         	<input type= "hidden" name="page" value="2"/>
			<input type="text" name="search" value = "Enter keywords"/>
			<input type="submit" name="submit" value="Search">
		</form>
<!--       </div> -->
<!--       <div id="content"> -->
        <!-- insert the page content here -->
        <h1>Articles</h1>
        <?php 
         $user = 'root';
	     $pass = '';
         $db = 'articles';
         $conn = new mysqli('localhost', $user, $pass, $db);
         $id = (int)$_GET['id'];
         if ($conn->connect_error) {
         	die("Connection failed: " . $conn->connect_error);
         }else{
        		$sql ="SELECT * FROM articles LEFT JOIN images ON articles.ID1 = images.ID
 				WHERE ID1 = ".$id;
// 				$sql = "SELECT * FROM articles LEFT JOIN images ON articles.ImageID = images.FileName
// 				WHERE ID1=".$id;
         		$result=$conn->query($sql)or die($conn->error);
         		if ($result->num_rows > 0) {
                 	while($row=$result->fetch_assoc()){
                     	?>
                   	<h2> <?php echo $row["Title"] ?> </h2> 
                   	<h1> <?php echo $row["Description1"]?></h1>
    				<img src="images/<?php echo $row["FileName"]?>">
        <!--             	echo 'File name'.$row["FileName"]; -->
             <?php      
                 	} 
                   	?> 
                   	<?php 
         		} else {
             		echo "0 results";
             	}
             	}
//              	if(isset())
				$search_value=$_GET["search"];
//              	$id = $_GET['search'];
             	$sql2 = "SELECT Description1 FROM articles WHERE Title like '%$search_value%'";
             	$result=$conn->query($sql2)or die($conn->error);;
             	if ($result->num_rows > 0) {
             		while($row=$result->fetch_assoc()){
             			echo $row['Description1'];
             		}
             	} else {
    				echo "0 results";
    			}
             	$conn->close();
         ?>
      </div>
    </div>
</body>
</html>
