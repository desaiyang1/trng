<?php
//file: forshot2.2.1.php
//author: g
session_start();
if (isset($_POST['register'])) {
	$private_account_email = $_POST['email'];
	$entered_poem = $_POST['poem'];
	$poem_password = password_hash($entered_poem, PASSWORD_DEFAULT);
	$account_status = 'not verified';
	//check private_accounts if email exists
	$dyn_connect_1 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_select_1 = "select private_account_email from private_accounts where private_account_email='$private_account_email'";
	$dyn_result_1 = pg_query($dyn_connect_1, $dyn_select_1);
	$looking_for = pg_fetch_row($dyn_result_1);
	if (empty($looking_for)) {
		$dyn_connect_3 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
		$dyn_insert_3 = "insert into private_accounts (private_account_email, poem_password, account_status) values ('$private_account_email', '$poem_password', '$account_status')";
		$dyn_result_3 = pg_query($dyn_connect_3, $dyn_insert_3);
		include 'shot2.2.1.php';		
	}
	else {
		$_SESSION['dupemail'] = $private_account_email;
		include 'shot2.2.01.php';
	}			
}
?>