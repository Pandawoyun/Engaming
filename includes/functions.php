<?php  
	function confirm_query($result_set){
		if(!$subject_set){
			die("Database query failed:".mysql_error());
		}
	}
?>
