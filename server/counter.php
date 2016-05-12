<?php
	if($_POST['val'] == 0 || !is_numeric($_POST['val']))
		echo json_encode(array("type" => "counter",
			"input" => $_POST['val'],
			"count" => "invalid"));
	else if(isset($_POST['val']) && !empty($_POST['val']) && $_POST['type'] === "counter")
	{		
		$original = $_POST['val'];						
		$count = 1 + $original;
		echo json_encode(array("type" => "counter",
			"input" => $original,
			"count" => $count));		
	}
	
?>	
