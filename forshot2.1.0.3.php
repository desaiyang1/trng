<?php
session_start();
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
//file: forshot2.1.0.3.php
//author: g
if (isset($_POST['pay'])) {
	$yourname = $_POST['yourname'];
	$cardnumber = $_POST['cardnumber'];
	$cardexpiration = $_POST['cardexpiration'];
	$securitycode = $_POST['securitycode'];
	$address = $_POST['address'];
	//use your own dyncould - schema, tables, code, etc...for security reasons.
	$dyn_connect_1 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_select_1 = "select * from private_accounts where (private_account_email='$email')";
	$dyn_result_1 = pg_query($dyn_connect_1, $dyn_select_1);
	$account_rows = pg_fetch_row($dyn_result_1);
	$private_id = $account_rows[0];
	$private_email = $account_rows[1];
	//--
	//HERE GOES YOUR CARD PAYMENTS CODE WITH EXTERNAL AGENCIES - REMEMBER
	//--
	//insert into - schema - dyncould/table - arec_account_details
	//arec_id - is serial, auto increment and primary key in dyncould.arec_account_details table
	////another logic
	$dyn_connect_11 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_select_11 = "select arec_id from dyncould.arec_account_details where (private_account_id='$private_id')";
	$dyn_result_11 = pg_query($dyn_connect_11, $dyn_select_11);
	$arec_row_11 = pg_fetch_row($dyn_result_11);
	$arec_id_11 = $arec_row_11[0];
	if (empty($arec_row_11)) {
		$dyn_connect_2 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
		$dyn_insert_2 = "insert into dyncould.arec_account_details(private_account_id, private_account_email, yourname, cardnumber, cardexpiration, securitycode, address) values ('$private_id', '$private_email', '$yourname', '$cardnumber', '$cardexpiration', '$securitycode', '$address')";
		$dyn_result_2 = pg_query($dyn_connect_2, $dyn_insert_2);
	}
	else {
		$dyn_connect_22 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
		$dyn_insert_22 = "update dyncould.arec_account_details set private_account_id='$private_id', private_account_email='$private_email', yourname='$yourname', cardnumber='$cardnumber', cardexpiration='$cardexpiration', securitycode='$securitycode', address='$address' where arec_id='$arec_id_11'";
		$dyn_result_22 = pg_query($dyn_connect_22, $dyn_insert_22);
	}
	//
	//
	//another logic
	$dyn_connect_3 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_select_3 = "select arec_id from dyncould.arec_account_details where (private_account_email='$email')";
	$dyn_result_3 = pg_query($dyn_connect_3, $dyn_select_3);
	$arec_row_3 = pg_fetch_row($dyn_result_3);
	$arec_id_3 = $arec_row_3[0];
	//	
	//another logic - updating dyncould.arec_pays using arec_id
	//arec_pays_id - is serial and auto increment
	//arec_id - got from above
	//date - can be used at the time of transaction
	$paid = '$330.00';
	$date_01 = date("F d Y H:i:s"); //or it should be precise time of payment
	//still need to get $paid, $date
	$dyn_connect_4 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_insert_4 = "insert into dyncould.arec_pays (arec_id, paid, date) values ('$arec_id_3', '$paid', '$date_01')";
	$dyn_result_4 = pg_query($dyn_connect_4, $dyn_insert_4);
	//then insert in to pays another payment.
	//another logic
	//
	//insert into - schema - $d/table - pays
	//(pays_id SERIAL NOT NULL, private_account_id INTEGER NOT NULL, private_account_email TEXT NOT NULL, paid TEXT NOT NULL, date TEXT NOT NULL, CONSTRAINT pays_pkey PRIMARY KEY (pays_id))";
	$payset = 'paid';
	$date_02 = date("F d Y H:i:s");
	$dyn_connect_5 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_insert_5 = "insert into $d.pays(private_account_id, private_account_email, paid, date) values ('$private_id', '$private_email', '$payset', '$date_02')";
	$dyn_result_5 = pg_query($dyn_connect_5, $dyn_insert_5);
	//
	include 'shot2.1.0.3.php';		
}
?>