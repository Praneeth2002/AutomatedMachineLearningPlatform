<?php
	function get_html($csv_file){
		$html = '<table border=1px;width=10px>';
		$file = fopen($csv_file,'r');
		$header_arr = fgetcsv($file);
		$html.='<thead>';
		foreach($header_arr as $k=>$v){
			$html.='<th>'.$v.'</th>';
		}
		$count = 0;
		$html.='<thead>';
		$html.='<tbody>';
		while($line=fgetcsv($file)){
			$html.='<tr>';
			foreach($line as $k=>$v){
				$html.='<td>'.$v.'</td>';
			}
			$html.='</tr>';
			$count+=1;
			if($count==5){
				break;
			}
		}
		$html.='</tbody>';
		$html.='</table>';
		return $html;
	}
?>