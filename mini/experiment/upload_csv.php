<?php
	include_once('csv.php');
	$display_table = '';
	if(isset($_POST['Upload']) && $_POST['Upload']=='Upload CSV'){
		$upload_dir = getcwd().DIRECTORY_SEPARATOR.'/uploads';
		if($_FILES['csv']['error']==UPLOAD_ERR_OK){
			$tmp_name = $_FILES['csv']['tmp_name'];
			$name=basename($_FILES['csv']['name']);
			$csvfile = $upload_dir.'/'.$name;
			move_uploaded_file($tmp_name,$csvfile);
			echo 'uploaded';
			$display_table = get_html($csvfile);
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
		<input type="file" name="csv">
		<input type="submit" name="Upload" value="Upload CSV">
	</form>
	<div>
		<?php
			if(strlen($display_table)>0){
				echo $display_table;
			}
		?>
	</div>
</body>
</html>