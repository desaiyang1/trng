<?php
session_start();
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
$logsid = $_SESSION['logsid'];
//file: forshot2.1.06.php
//author: g
if (isset($_POST['pccontinue'])) {
	$poem2 = $_POST['poem2'];	
	$answer2 = $_POST['answer2'];
	$password_2 = password_hash($poem2, PASSWORD_DEFAULT);
	$dyn_connect_1 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_select_1 = "select * from dyncould.arec_account_details where private_account_email='$email'";
	$dyn_result_1 = pg_query($dyn_connect_1, $dyn_select_1);
	$account_fetch_1 = pg_fetch_row($dyn_result_1);
	$arec_id_1 = $account_fetch_1[0];
	$private_account_id_1 = $account_fetch_1[1];
	if ($exact_id == $private_account_id_1) {
		$dyn_connect_2 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
		$dyn_select_2 = "select question_1 from dyncould.arec_smart where arec_id='$arec_id_1'";
		$dyn_result_2 = pg_query($dyn_connect_2, $dyn_select_2);
		$account_fetch_2 = pg_fetch_row($dyn_result_2);
		$question_1_2 = $account_fetch_2[0];
		$dyn_connect_3 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
		$dyn_select_3 = "select answer_1 from dyncould.arec_smart where question_1='$question_1_2'";
		$dyn_result_3 = pg_query($dyn_connect_3, $dyn_select_3);
		$smart_fetch_3 = pg_fetch_row($dyn_result_3);
		$answer_1_3 = $smart_fetch_3[0];
	}
	if ($answer2 == $answer_1_3) {
		$dyn_connect_4 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
		$dyn_select_4 = "select password_1 from dyncould.arec_logs WHERE arec_logs_id='$logsid'";
		$dyn_result_4 = pg_query($dyn_connect_4, $dyn_select_4);
		$logs_fetch_4 = pg_fetch_row($dyn_result_4);
		$password_1_4 = $logs_fetch_4[0];
	}
	if (password_verify($poem2, $password_1_4)) {	
		$dyn_connect_5 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
		$dyn_select_5 = "UPDATE dyncould.arec_logs SET password_2='$password_2' WHERE arec_logs_id='$logsid'";
		$dyn_result_5 = pg_query($dyn_connect_5, $dyn_select_5);
		$dyn_connect_6 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
		$dyn_select_6 = "UPDATE private_accounts SET poem_password='$password_2' WHERE private_account_email='$email'";
		$dyn_result_6 = pg_query($dyn_connect_6, $dyn_select_6);			
		include 'shot2.1.06.php';
	}
	else {
		include 'shot2.1.06.1.php';			
	}				
}
?>