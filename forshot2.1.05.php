<?php
session_start();
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
$logsid = $_SESSION['logsid'];
//file: forshot2.1.05.php
//author: g
if (isset($_POST['pccontinue'])) {
	$poem1 = $_POST['poem1'];
	$street1 = $_POST['street1'];	
	$password_1 = password_hash($poem1, PASSWORD_DEFAULT);
	$dyn_connect_1 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_select_1 = "select * from private_accounts where (private_account_email='$email')";
	$dyn_result_1 = pg_query($dyn_connect_1, $dyn_select_1);
	$account_fetch_1 = pg_fetch_row($dyn_result_1);
	$email_1 = $account_fetch_1[1];
	if ($email == $email_1) {
		$dyn_connect_2 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
		$dyn_select_2 = "select address from dyncould.arec_account_details where (private_account_email='$email_1')";
		$dyn_result_2 = pg_query($dyn_connect_2, $dyn_select_2);
		$account_fetch_2 = pg_fetch_row($dyn_result_2);
		$address_2 = $account_fetch_2[0];
		if ($street1 == $address_2) {
			$dyn_connect_3 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
			$dyn_select_3 = "UPDATE dyncould.arec_logs SET password_1='$password_1' WHERE arec_logs_id='$logsid';";
			$dyn_result_3 = pg_query($dyn_connect_3, $dyn_select_3);
			include 'shot2.1.05.php';
		}
		else {
			include 'shot2.1.05.1.php';
		}
	}
	else {
		include 'shot2.1.05.1.php';
	}
}
?>