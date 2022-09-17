<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Online Editor</title>
	</head>
	<body ng-app=''>
		<style>
			<?php include "online.css"?>
		</style>
		<?php
			include './experiment/csv.php';
			function php_func(){
				exec('./experiment/upload_csv.php');
			}
		?>
		
		<script>
			function upload_system(){
				var result ="<?php php_func(); ?>"
				document.write(result);
			}
			var divState = {};
			function showhide(id) {
			    if (document.getElementById) {
			        var divid = document.getElementById(id);
			        divState[id] = (divState[id]) ? false : true;
			        for (var div in divState){
			            if (divState[div] && div != id){
			                document.getElementById(div).style.display = 'none';
			                divState[div] = false;
			            }
			        }
			        divid.style.display = (divid.style.display == 'block' ? 'none' : 'block');
			    }
			}
			function func(){
				document.getElementById('file').style.display='none';
			}
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
		<div class="wrapper">
			<div class="sidebar">
				<h2>Menu</h2>
				<ul>
					<script>
						window.onload = function(){
							document.getElementById('button1').click();
						}
					</script>
					<li>
						<button type="button" class="button" id="button1" onclick="showhide('div1')">Choosing the dataset</button>
		            </li>
		            <li>
		            	<button type="button" class="button" id="button2" onclick="showhide('div2')">Details of dataset</button>
		            </li>
					<li>
						<button type="button" class="button" id="button2" onclick="showhide('div3')">Preparing the dataset</button>
		            </li>
					<!-- <li>
						<button type="button" class="button" id="button3" onclick="showhide('div5')">Choosing the ratio</button>
		            </li> -->
					<li>
						<button type="button" class="button" id="button5" onclick="showhide('div6')">Evaluating the model</button>
			        </li>
			        <li>
						<button type="button" class="button" id="button4" onclick="showhide('div4')">Training the model</button>
		            </li>
				</ul>
			</div>
			<div class="main_content">
				<div class="header">
					Welcome
				</div>
			</div>
		</div>
		<div class='download'>
			<ul>
				<li><a href="#"><pre>     Download the set</pre></a></li>
				<li><a href="#"><pre>     Download the model</pre></a></li>
			</ul>
		</div>
		<div class="section1">
			<div id="div1">
				<ul>
					<li><a href="#uploading">From System</a></li><br>
					<li><a href="https:drive.google.com">Google Drive</a></li>
				</ul>
			</div>
			<div id="div2">
				<ul>
					<form method="post">
						<input type="checkbox" name="check_list[]" value="information"/>&nbsp;Info of the dataset<br><br>
						<input type="checkbox" name="check_list[]" value="description"/>&nbsp;Description of dataset
					</form>
				</ul>
			</div>
			<div id="div3">
				<ul>
					<li><a href="">Numeric values</a></li>
						<select name="numeric">
							<option value="none" selected="selected">None</option>
							<option value="mean">SimpleImputer (Mean)</option>
							<option value="median">SimpleImputer (Median)</option>
							<option value="knnimputer">KNNImputer</option>
						</select>
						<br>
					<li><a href="">Categorical values</a></li>
						<select name="category">
							<option value="none" selected="selected">None</option>
							<option value="mode">Fill by mode</option>
							<option value="label">Label Encoding</option>
							<option value="one_hot">One Hot Encoding</option>
						</select>&nbsp;&nbsp;&nbsp;
					<input type="submit" name="click" value="Submit">
				</ul>
		    </div>
		    <div id="div4" class="">
		    	<form method="post" action="online.php">
					<ul>
					    <li><a href="">Regression</a></li>
						    <select name="regression">
						    	<option value="" selected="selected">None</option>
						    	<option value="all">All algorthims</option>
						    	<option value="linear">Linear Regression</option>
						    	<option value="knn">KNN</option>
						    	<option value="random_forest">Random Forest</option>
						    	<option value="decision">Decision Tree</option>
						    	<option value="svm">Support Vector Regression</option>
						    </select>
					    <br>
					    <li><a href="">Classification</a></li>
						    <select name="classification">
						    	<option value="none" selected="selected">None</option>
						    	<option value="binary_class">Binary Classification</option>
						    	<option value="multi_class">Multi-Classification</option>
						    	<option value="logistic">Logistic Regression</option>
						    	<option value="knn_class">KNN</option>
						    	<option value="svm_class">SVM</option>
						    	<option value="naive">Naive Bayes</option>
						    	<option value="decision_class">Decision Tree</option>
						    </select>
						    &nbsp;&nbsp;&nbsp;
					    <input type="submit" name="submit" value="Submit" onclick=>
					</ul>
				</form>
				    <?php
						if(isset($_POST['submit'])){//to run PHP script on submit
							if(!empty($_POST['check_list'])){
								$arr = array();
								$pythonScript = "input.py";
							// Loop to store and display values of individual checked checkbox.
								foreach($_POST['check_list'] as $selected){
									echo 'hi';
									array_push($arr,$selected);
								}
								echo $arr;
							}
						}
							// $after_json = json_encode($arr);
							// $command = escapeshellcmd("main.py $after_json");
						 //    $output = shell_exec($command);
						 //    echo $output;
							// $cmd = array("python", $pythonScript, escapeshellarg(json_encode($arr)));
							// $cmdText = implode(' ', $cmd);
							// $result = shell_exec($cmdText);
			  		// 		var_dump(json_decode($result, true));
					?>
			</div>
			<div id="div6">
				<ul>
					<form method="post">
						<input type="checkbox" name="check_list[]" value="Accuracy"/>&nbsp;Model Accuracy<br><br>
						<input type="checkbox" name="check_list[]" value="Summary"/>&nbsp;Model Summary
					</form>
				</ul>
			</div>
		</div>
		<div class="line">
			<hr>
		</div>
		<div class="section2">
			<div class="myDiv" id="uploading">
				<?php
					include_once('./experiment/csv.php');
					$display_table = '';
					if((isset($_POST['Upload']) && $_POST['Upload']=='Upload CSV') || (isset($_POST['Refresh']) && $_POST['Refresh']=='Refresh CSV')){
						$upload_dir = getcwd().DIRECTORY_SEPARATOR.'/experiment'.DIRECTORY_SEPARATOR.'/uploads';
						if($_FILES['csv']['error']==UPLOAD_ERR_OK){
							$tmp_name = $_FILES['csv']['tmp_name'];
							$name=basename($_FILES['csv']['name']);
							$csvfile = $upload_dir.'/'.$name;
							move_uploaded_file($tmp_name,$csvfile);
							$display_table = get_html($csvfile);
						}
					}
				?>
				<div ng-hide="su">
					<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
						<input type="file" name="csv" id='file' class="click">
						<input type="submit" name="Upload" value="Upload CSV" class="click" onclick="func()" ng-model='su'>
					</form>
				</div>
				<div>
					<?php
						if(strlen($display_table)>0){
							echo $display_table;
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>