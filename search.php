
<?php
$user = 'root';
$pass = '';
$db = 'articles';

$conn = new mysqli('localhost', $user, $pass, $db);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$cookieSearch = "search";
$cookie_value = $_GET['search'];
setcookie($cookieSearch, $cookie_value, time() + (86400 * 30), "/");
// $search_value=$_GET["search"];
// $_SESSION['search'] = $_GET['search'];
$_COOKIE["search"]=$cookie_value;
	?>
<!-- <input id="searchPhrase" type="text" name="search" value = "<?php // echo $_SESSION['search'];?>"/> -->
	<?php 
// }
	if($conn->connect_error){
		echo 'Connection Faild: '.$conn->connect_error;
	}else{
		$sql="select * from images where Description like '%$cookie_value%'";
		$result=$conn->query($sql)or die($conn->error);;
		if ($result->num_rows > 0) {
			?>
       		<ul>
       		<?php 
        		while($row=$result->fetch_assoc()){
        			if(($row['ID']==1)||($row['ID']==3)||($row['ID']==5)){
        	 	   		echo "<li><a href='index.php?page=3&id={$row['ID']}'>".$row['Description']."</a></li>";
        	 	   ?>		<img src="images/<?php echo $row["FileName"]?>">
<?php 				}else{
        				echo "<li> ".$row['Description']."</li>";
        				?>
        				<img src="images/<?php echo $row["FileName"]?>">
        	<?php 	}
        	    ?>

<?php       	} 
           	?> 
           	</ul>
           	<?php 
    	}else {
    		echo "0 results";
    	}
    }
//}

        $conn->close();
?>test


