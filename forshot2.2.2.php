<?php
session_start();
//file: forshot2.2.2.php
//author: g
if (isset($_POST['RE-CONFIRM'])) {
	$re_account_email = $_POST['reemail'];
	$reconfirm_poem = $_POST['repoem'];	
	$re_poem_password = password_hash($reconfirm_poem, PASSWORD_DEFAULT);	
	//update in to private_accounts
	$dyn_connect_1 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_select_1 = "select * from private_accounts where (private_account_email='$re_account_email')";
	$dyn_result_1 = pg_query($dyn_connect_1, $dyn_select_1);
	$accounts_row = pg_fetch_row($dyn_result_1);
	$private_account_id = $accounts_row[0];
	$account_status = 'verified';
	$dyn_connect_2 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_update_2 = "update private_accounts set private_account_email='$re_account_email', poem_password='$re_poem_password', account_status='$account_status' where private_account_id='$private_account_id'";
	$dyn_result_2 = pg_query($dyn_connect_2, $dyn_update_2);
	//add email sent and verify option later
	//if email has . and _ needs code. first check if email has numbers, . between names, and _ s.
	//then code to create $d for schema. for now cut the code in forshot3.php and move to forshot2.2.2.php (this file)
	//$b = str_replace ('@', 'at', $re_account_email);
	//$c = str_replace ('.', 'dot', $b);
	//$d = strtolower($c);	
	$d = 'arec'.$private_account_id;
	$_SESSION['email'] = $re_account_email;
	$_SESSION['exact_id'] = $private_account_id;
	$_SESSION['schema'] = $d;
	include 'shot2.1.0.2.php';	
}
?>