<?php
//image decoder to save into database 
function image($file){
	$name = $_FILES[$file]['name'];
	$tmp_name = $_FILES[$file]['tmp_name']; 
	if(isset($name)){
	if(!empty($name)){ 
		$target_path = basename( $_FILES[$file]['name']);
		if(move_uploaded_file($_FILES[$file]['tmp_name'], $target_path)) {
			$im = file_get_contents($_FILES[$file]['name']);
			$imdata = base64_encode($im); 
			$src = 'data: '.mime_content_type($_FILES[$file]['name']).';base64,'.$imdata;
             		unlink($_FILES[$file]['name']);
			return $src;
        	}
		
   	}
 	}

}

?>