<?php 
	
	include("includes/connection.php");
	require_once("includes/functions.php");
	include("includes/header.php");
	
?>
        	<?php 
        		$username=$_POST["email"];
        		$password=$_POST["password"];
        		$sex = $_POST["sex"];
        		if($sex == "male"){
        			$a = 1;
        		}
        		else{
        			$a = 0;
        		}
        		$query = "INSERT INTO users(email,password,sex) VALUES('{$username}','{$password}','{$a}')";
        		$result = mysql_query($query);
        		if(!$result){
        			die("something is fking wrong".mysql_error());
        		}
        		else{
        			echo "Thanks for registering And we will certainly response to you soon";
        		}
        	?>
<?php include("includes/footer.php");?>