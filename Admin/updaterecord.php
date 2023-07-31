<?php
session_start();
include 'connection.php';
	$student_code = $_POST['clicked_id'];
	

	$visited = $_POST['visit'];
	
	$vwith = $_POST['vwith'];
	
	$cert = $_POST['cert'];
	
	$member = $_POST['member'];
	
	$form_id = $_POST['form_id'];
	
	$base_member = $_SESSION['id'];
	
	$branch_id=$_SESSION['member_branch_id'];
	
	$sql ="UPDATE `atse_student_session` SET visited='{$visited}', person_visited='{$vwith}', form_id='{$form_id}', certificate='{$cert}',transfer_member_id='{$member}',base_member_id='{$base_member}', visit_date=CURDATE(), branch_id='{$branch_id}' WHERE student_code='{$student_code}'";
	mysqli_query($conn, $sql)
	
	
?>