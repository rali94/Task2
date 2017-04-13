<?php 
// $cookieSearch = "search";
// setcookie($cookieSearch, $cookie_value, time() + (86400 * 30), "/");
?>
	<h3>Search</h3>
		<input type="hidden" name="page" value = "2"/>
		<input id="searchPhrase" type="text" name="search" value = "<?php echo $_COOKIE['search'];?>"/>
		<!--<input id="searchPhrase" type="text" name="search" value = "<?php //echo $_SESSION['search'];?>"/>-->
		<input id="searchBtn" type="button" name="submit" value="Search">
		<div id="result"></div>
		<script type="text/javascript">
		
		$(document).ready(function () {
			$("#searchBtn").click(function() {
				$.ajax({ //create an ajax request to load_page.php
					type: "GET",
					url: "index.php?page=2&search=" + $("#searchPhrase").val(),
					dataType: "html", //expect html to be returned
					success: function (response) {
						$("#result").html(response);
					}
				});
			});
		});
		</script>
