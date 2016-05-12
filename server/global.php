<?php 
	session_start();
	if($_POST['val'] == 0 || !is_numeric($_POST['val']))
		echo json_encode(array("type" => "global",
			"input" => $_POST['val'],
			"old" => $_SESSION['global'],
			"count" => "invalid"));
	if(isset($_POST['val']) && $_POST['type'] === "global" )
	{
		if(isset($_SESSION['global']))
		{
			$val = $_POST['val'];
			$old = $_SESSION['global'];
			$_SESSION['global'] = $_SESSION['global'] + $_POST['val'];
			echo json_encode(array("type" => "global",
				"input" => $val,
				"old" => $old,
				"new" => $_SESSION['global']));
		}
		else
		{
		$val = $_POST['val'];	
		$old = 0;
		$_SESSION['global'] = $_POST['val'];
		echo json_encode(array("type" => "global",
			"input" => $val,
			"old" => $old,
			"new" => $_SESSION['global']));	
		}
	}
	
 ?>