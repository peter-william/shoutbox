<?php
//connect to mysql
$con=mysqli_connect("localhost","root","shanthi","shoutit");

//test connection_aborted
if(mysqli_connect_errno()){
	echo 'failed to connect to MYSQL: '.mysqli_connect_error();
	
	
}