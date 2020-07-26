<?php
//forshot3.php
session_start();
$email = $_SESSION['email'];
$exact_id = $_SESSION['exact_id'];
$d = $_SESSION['schema'];
//code
if (isset($_POST['keep'])) {	
	$surfacing = $_POST['surfacing'];
	if ($exact_id > 0) {			
		$dyn_connect_17 = pg_connect("host=localhost port=5432 user=postgres password=dynCOULD2053 dbname=postgres");
		$dyn_insert_17 = "insert into $d.surface (surface_text) values ('$surfacing')";
		$dyn_result_17 = pg_query($dyn_connect_17, $dyn_insert_17);
		include 'shot3.php';
	}		
}
?>