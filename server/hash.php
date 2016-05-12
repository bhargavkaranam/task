<?php
	if(isset($_POST['val']) && !empty($_POST['val']) && $_POST['type'] === "hash")
	{
		$original = $_POST['val'];
		$hash = md5($_POST['val']);
		echo json_encode(array("type" => "hash",
			"input" => $original,
			"hash" => $hash));
	}
	
?>	