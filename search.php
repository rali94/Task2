<!DOCTYPE HTML>
<html>

<head>
<title>Rali's search page</title>
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
          <li><a href="index.php">Home</a></li>
          <li class="selected"><a href="search.php">Search</a></li>
          <li><a href="innerpage.php"> Inner Page</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
<?php
$user = 'root';
$pass = '';
$db = 'articles';

$conn = new mysqli('localhost', $user, $pass, $db);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$search_value=$_GET["search"];
if(isset($_GET['submit'])){
	if($conn->connect_error){
		echo 'Connection Faild: '.$conn->connect_error;
	}else{
		$sql="select * from images where Description like '%$search_value%'";
		$result=$conn->query($sql)or die($conn->error);;
		if ($result->num_rows > 0) {
			?>
       		<ul>
       		<?php 
        	while($row=$result->fetch_assoc()){
//         		echo "<p><strong>Location:</strong>&nbsp;<a href='"
// 		.$results['Location']."' target='_blank'>".$results['SchoolLocation']."</a>".$results['text']."</p><br />";
// <!--             	echo '<a href="php page which you want to display on click">$info['descr']</a>' -->
// <!-- '<a href="'.$info['descr'].'">bla link</a>' -->
        	    echo "<li><a href='innerpage.php'>".$row['Description']."</a></li>";
        	    ?>
             	<img src="images/<?php echo $row["FileName"]?>">
 <!--             	echo 'File name'.$row["FileName"]; -->
     <?php       	} 
           	?> 
           	</ul>
           	<?php 
    	} else {
    		echo "0 results";
    	}
    	}
	}
        $conn->close();
?>
</div>
</div>
</div>
</body>
</html>


