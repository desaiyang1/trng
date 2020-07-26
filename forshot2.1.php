<?php
//file: forshot2.1.php
//author: g
//introducing a new logic for admins. if admin shot name is shotadmin.php
//for private accounts the shot is shot2.php
//for error: 		include 'shot1.0.1.php';  [still needs to relooked.]
//notes 6/20 GD : other than that the login works great. and the password_verify and password_hash
session_start();
if (isset($_POST['login'])) {
	$_SESSION['email'] = $_POST['email'];
	$private_account_email = $_POST['email'];
	$entered_poem = $_POST['poem']; 	//password on encryption memories
	$dyn_connect_1 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_select_1 = "select poem_password from private_accounts where (private_account_email='$private_account_email')";
	$dyn_result_1 = pg_query($dyn_connect_1, $dyn_select_1);
	$account_row = pg_fetch_row($dyn_result_1);
	$poem_password = $account_row[0];
		if (password_verify($entered_poem, $poem_password)) {
			$email = $_SESSION['email'];		
			$dyn_connect_session = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
			$dyn_select_session = "select private_account_id from private_accounts where (private_account_email='$email')";
			$dyn_result_session = pg_query($dyn_connect_session, $dyn_select_session);
			$account_found = pg_fetch_row($dyn_result_session);
			$exact_id = $account_found[0];
			//$b = str_replace ('@', 'at', $email);
			//$c = str_replace ('.', 'dot', $b);
			//$d = strtolower($c);
			$d = 'arec'.$exact_id;
			$_SESSION['email'] = $email;
			$_SESSION['exact_id'] = $exact_id;
			$_SESSION['schema'] = $d;
			//add admin code
			//if admin@dyncould.com then show added new menu window. and new shotadmin.php
			$admin_email = 'admin@dyncould.com';
			if ($private_account_email == $admin_email) {
				$dyn = 'dyncould';
				$_SESSION['dyncould'] = $dyn;
				include 'shotadmin.php';
			}
			else {
				include 'shot2.php';	
			}				
		}
	else {
		include 'shot1.0.1.php';
	}
}
?>