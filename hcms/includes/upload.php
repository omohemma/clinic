<?php

//upload.php



if(!empty($_FILES))
{
	if(is_uploaded_file($_FILES['file']['tmp_name']))
	{
		$file_name = $_FILES['file']['name'];
		$source_path = $_FILES['file']['tmp_name'];
		$target_path = $target.$_FILES['file']['name'];
		if(move_uploaded_file($source_path, $target_path))
		{
			//echo '<img src="'.$target_path.'" class="img-thumbnail" width="300" height="250" />';
			echo "File Uploaded...";
		}
	}
}





?>