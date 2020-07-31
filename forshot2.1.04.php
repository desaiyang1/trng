<?php
session_start();
//file: forshot2.1.04.php
//author: g
if (isset($_POST['pwdchange'])) {
	$email = $_POST['email'];
	$poem = $_POST['poem'];	 
	$logged = "$email - changing password";
	$password_change = 'yes'; 
	$poem_password_1 = 'db.data.override';
	$poem_password_2 = 'db.data.override';
	$dyn_connect_1 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_select_1 = "select private_account_email from private_accounts where (private_account_email='$email')";
	$dyn_result_1 = pg_query($dyn_connect_1, $dyn_select_1);
	$account_fetch_1 = pg_fetch_row($dyn_result_1);
	$email_1 = $account_fetch_1[0];
	if ($email == $email_1) {
		$_SESSION['email'] = $email_1;
		$dyn_connect_2 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
		$dyn_select_2 = "select private_account_id from private_accounts where (private_account_email='$email_1')";
		$dyn_result_2 = pg_query($dyn_connect_2, $dyn_select_2);
		$account_fetch_2 = pg_fetch_row($dyn_result_2);
		$id_2 = $account_fetch_2[0];
		$_SESSION['exact_id'] = $id_2;
		$d = 'arec'.$id_2;
		$_SESSION['schema'] = $d;
		$dyn_connect_3 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
		$dyn_select_3 = "select arec_id from dyncould.arec_account_details where (private_account_email='$email_1')";
		$dyn_result_3 = pg_query($dyn_connect_3, $dyn_select_3);
		$account_fetch_3 = pg_fetch_row($dyn_result_3);
		$arec_id_3 = $account_fetch_3[0];
		$dyn_connect_4 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
		$dyn_select_4 = "INSERT INTO dyncould.arec_logs(logged, password_change, arec_id, password_1, password_2)	VALUES ('$logged', '$password_change', '$arec_id_3', '$poem_password_1', '$poem_password_2');";
		$dyn_result_4 = pg_query($dyn_connect_4, $dyn_select_4);
		$dyn_connect_5 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
		$dyn_select_5 = "select arec_logs_id from dyncould.arec_logs where arec_id='$arec_id_3' order by arec_logs_id desc";
		$dyn_result_5 = pg_query($dyn_connect_5, $dyn_select_5);
		$logs_fetch_5 = pg_fetch_row($dyn_result_5);
		$logs_id_5 = $logs_fetch_5[0];
		$_SESSION['logsid'] = $logs_id_5;
		include 'shot2.1.04.php';
	}
	else {
		include 'shot2.1.04.1.php';
	}
}
?>