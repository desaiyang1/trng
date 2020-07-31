<?php
session_start();
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
if (isset($_POST['welcome'])) {
	$code = $_POST['verify'];
	$question = $_POST['question'];
	$answer = $_POST['answer'];
	$code_hash = password_hash($code, PASSWORD_DEFAULT);
	//insert in to private_accounts - there is no code_hash column in the private_accounts table. so re-look at this later.
	$dyn_connect_112 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_select_112 = "select * from dyncould.arec_account_details where private_account_email='$email'";
	$dyn_result_112 = pg_query($dyn_connect_112, $dyn_select_112);
	$account_fetch_112 = pg_fetch_row($dyn_result_112);
	$arec_id_112 = $account_fetch_112[0];
	$private_account_id_112 = $account_fetch_112[1];
	$dyn_connect_113 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_select_113 = "insert into dyncould.arec_smart (arec_id, question_1, answer_1) values ('$arec_id_112','$question','$answer')";
	$dyn_result_113 = pg_query($dyn_connect_113, $dyn_select_113);
	$dyn_connect_111 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_update_111 = "update private_accounts set code_hash='$code_hash' where code_hash=''";
	$dyn_result_111 = pg_query($dyn_connect_111, $dyn_update_111);
	//add email sent and verify option later	
	$dyn_connect_1 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_1 = "CREATE SCHEMA IF NOT EXISTS $d AUTHORIZATION postgres";
	$dyn_result_1 = pg_query($dyn_connect_1, $dyn_create_1);
	$dyn_connect_2 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_2 = "CREATE TABLE IF NOT EXISTS $d.surface (surface_id SERIAL NOT NULL, surface_text TEXT NOT NULL, CONSTRAINT surface_pkey PRIMARY KEY (surface_id))";		
	$dyn_result_2 = pg_query($dyn_connect_2, $dyn_create_2);
	$dyn_connect_3 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_3 = "CREATE TABLE IF NOT EXISTS $d.surface_clicks (surface_clicks_id SERIAL NOT NULL, srch_surface_id INTEGER NOT NULL, srch_surface_text TEXT NOT NULL, CONSTRAINT surface_clicks_pkey PRIMARY KEY (surface_clicks_id))";		
	$dyn_result_3 = pg_query($dyn_connect_3, $dyn_create_3);	
	$dyn_connect_4 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_4 = "CREATE TABLE IF NOT EXISTS $d.surface_doc (surface_doc_id SERIAL NOT NULL, doc_surface_id INTEGER NOT NULL, doc_surface_text TEXT NOT NULL, CONSTRAINT surface_doc_pkey PRIMARY KEY (surface_doc_id))";		
	$dyn_result_4 = pg_query($dyn_connect_4, $dyn_create_4);	
	$dyn_connect_44 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_44 = "CREATE TABLE IF NOT EXISTS $d.surface_email (surface_email_id SERIAL NOT NULL, email_surface_id INTEGER NOT NULL, email_surface_text TEXT NOT NULL, CONSTRAINT surface_email_pkey PRIMARY KEY (surface_email_id))";		
	$dyn_result_44 = pg_query($dyn_connect_44, $dyn_create_44);	
	$dyn_connect_5 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_5 = "CREATE TABLE IF NOT EXISTS $d.surface_doc_clicks (surface_doc_clicks_id SERIAL NOT NULL, doc_surface_id INTEGER NOT NULL, doc_surface_text TEXT NOT NULL, CONSTRAINT surface_doc_clicks_pkey PRIMARY KEY (surface_doc_clicks_id))";		
	$dyn_result_5 = pg_query($dyn_connect_5, $dyn_create_5);	
	$dyn_connect_6 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_6 = "CREATE TABLE IF NOT EXISTS $d.finished_surfaces (finished_surfaces_id SERIAL NOT NULL, finshd_surface_id INTEGER NOT NULL, finshd_surface_text TEXT NOT NULL, CONSTRAINT finished_surfaces_pkey PRIMARY KEY (finished_surfaces_id))";		
	$dyn_result_6 = pg_query($dyn_connect_6, $dyn_create_6);	
	$dyn_connect_62 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_62 = "CREATE TABLE IF NOT EXISTS $d.book (bookid SERIAL NOT NULL, bookname TEXT NOT NULL, booktext TEXT NOT NULL, CONSTRAINT book_pkey PRIMARY KEY (bookid))";		
	$dyn_result_62 = pg_query($dyn_connect_62, $dyn_create_62);	
	$dyn_connect_7 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_7 = "CREATE TABLE IF NOT EXISTS $d.floor (floor_id SERIAL NOT NULL, floor_text TEXT NOT NULL, cats TEXT, topic TEXT, CONSTRAINT floor_pkey PRIMARY KEY (floor_id))";
	$dyn_result_7 = pg_query($dyn_connect_7, $dyn_create_7);
	$dyn_connect_8 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_8 = "CREATE TABLE IF NOT EXISTS $d.floor_clicks (floor_clicks_id SERIAL NOT NULL, srch_floor_id INTEGER NOT NULL, srch_floor_text TEXT NOT NULL, CONSTRAINT floor_clicks_pkey PRIMARY KEY (floor_clicks_id))";		
	$dyn_result_8 = pg_query($dyn_connect_8, $dyn_create_8);			
	$dyn_connect_9 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_9 = "CREATE TABLE IF NOT EXISTS $d.floor_doc (floor_doc_id SERIAL NOT NULL, doc_floor_id INTEGER NOT NULL, doc_floor_text TEXT NOT NULL, CONSTRAINT floor_doc_pkey PRIMARY KEY (floor_doc_id))";		
	$dyn_result_9 = pg_query($dyn_connect_9, $dyn_create_9);		
	$dyn_connect_10 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_10 = "CREATE TABLE IF NOT EXISTS $d.floor_doc_clicks (floor_doc_clicks_id SERIAL NOT NULL, doc_floor_id INTEGER NOT NULL, doc_floor_text TEXT NOT NULL, CONSTRAINT floor_doc_clicks_pkey PRIMARY KEY (floor_doc_clicks_id))";		
	$dyn_result_10 = pg_query($dyn_connect_10, $dyn_create_10);
	$dyn_connect_11 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_11 = "CREATE TABLE IF NOT EXISTS $d.finished_floors (finished_floors_id SERIAL NOT NULL, finshd_floor_id INTEGER NOT NULL, finshd_floor_text TEXT NOT NULL, cats TEXT, topic TEXT, CONSTRAINT finished_floors_pkey PRIMARY KEY (finished_floors_id))";		
	$dyn_result_11 = pg_query($dyn_connect_11, $dyn_create_11);			
	$dyn_connect_12 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_12 = "CREATE TABLE IF NOT EXISTS $d.core_files (core_file_id SERIAL NOT NULL, core_file_name TEXT NOT NULL, core_file_path TEXT NOT NULL, CONSTRAINT core_files_pkey PRIMARY KEY (core_file_id))";		
	$dyn_result_12 = pg_query($dyn_connect_12, $dyn_create_12);			
	$dyn_connect_13 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_13 = "CREATE TABLE IF NOT EXISTS $d.core_finds (core_finds_id SERIAL NOT NULL, core_file_string TEXT NOT NULL, core_file_name TEXT NOT NULL, core_file_path TEXT NOT NULL, CONSTRAINT core_finds_pkey PRIMARY KEY (core_finds_id))";		
	$dyn_result_13 = pg_query($dyn_connect_13, $dyn_create_13);	
	$dyn_connect_14 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_14 = "CREATE TABLE IF NOT EXISTS $d.bkps_files (bkps_file_id SERIAL NOT NULL, bkps_file_name TEXT NOT NULL, bkps_file_path TEXT NOT NULL, CONSTRAINT bkps_files_pkey PRIMARY KEY (bkps_file_id))";		
	$dyn_result_14 = pg_query($dyn_connect_14, $dyn_create_14);		
	$dyn_connect_15 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_15 = "CREATE TABLE IF NOT EXISTS $d.bkps_finds (bkps_finds_id SERIAL NOT NULL, bkps_file_string TEXT NOT NULL, bkps_file_name TEXT NOT NULL, bkps_file_path TEXT NOT NULL, CONSTRAINT bkps_finds_pkey PRIMARY KEY (bkps_finds_id))";		
	$dyn_result_15 = pg_query($dyn_connect_15, $dyn_create_15);		
	$dyn_connect_16 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_16 = "CREATE TABLE IF NOT EXISTS $d.comic (comic_id SERIAL NOT NULL, comic_surface_id INTEGER NOT NULL, comic_surface_text TEXT NOT NULL, CONSTRAINT comic_pkey PRIMARY KEY (comic_id))";		
	$dyn_result_16 = pg_query($dyn_connect_16, $dyn_create_16);
	$dyn_connect_17 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_17 = "CREATE TABLE IF NOT EXISTS $d.core (core_id SERIAL NOT NULL, core_file_name TEXT NOT NULL, core_file_type TEXT NOT NULL, core_file_size TEXT NOT NULL, core_file_datetime TEXT NOT NULL, CONSTRAINT core_pkey PRIMARY KEY (core_id))";
	$dyn_result_17 = pg_query($dyn_connect_17, $dyn_create_17);
	$dyn_connect_18 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_18 = "CREATE TABLE IF NOT EXISTS $d.bkps (bkps_id INTEGER NOT NULL, bkps_file_name TEXT NOT NULL, bkps_file_type TEXT NOT NULL, bkps_file_size TEXT NOT NULL, bkps_file_datetime TEXT NOT NULL, CONSTRAINT bkps_pkey PRIMARY KEY (bkps_id))";
	$dyn_result_18 = pg_query($dyn_connect_18, $dyn_create_18); 
	$dyn_connect_181 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_181 = "CREATE TABLE IF NOT EXISTS $d.certify (certify_id SERIAL NOT NULL, certify_file_name TEXT NOT NULL, certify_file_type TEXT NOT NULL, certify_file_size TEXT NOT NULL, certify_file_datetime TEXT NOT NULL, certify_yes TEXT NOT NULL, certify_request_name TEXT NOT NULL,CONSTRAINT certify_pkey PRIMARY KEY (certify_id))";
	$dyn_result_181 = pg_query($dyn_connect_181, $dyn_create_181); 
	$dyn_connect_19 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
	$dyn_create_19 = "CREATE TABLE IF NOT EXISTS $d.pays (pays_id SERIAL NOT NULL, private_account_id INTEGER NOT NULL, private_account_email TEXT NOT NULL, paid TEXT NOT NULL, date TEXT NOT NULL, CONSTRAINT pays_pkey PRIMARY KEY (pays_id))";
	$dyn_result_19 = pg_query($dyn_connect_19, $dyn_create_19); 
	//storage/$d
	$dest_file_location = "c:/vetuku/storage/$d";
	mkdir("$dest_file_location", 775);
	//storage/$d/bkps
	$bkps_file_location = "c:/vetuku/storage/$d/bkps";
	mkdir("$bkps_file_location", 775);
	$certify_file_location = "c:/vetuku/storage/$d/certify";
	mkdir("$certify_file_location", 775);
	include 'shot2.php';	
}	
?>