<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script>
		window.onload = function(){
			var input_left_about_us = document.getElementsByClassName('left_col_value');
			var lcn = input_left_about_us;
			for(i=0;i<lcn.length;i++){
				lcn[i].setAttribute('disabled','disabled');
	
			starter = document.getElementsByClassName('starter')[i];
			starter.addEventListener('click', function(){
				console.log(this)
				this.getElementsByClassName('left_col_value')[0].removeAttribute('disabled')
			})}

		}
	</script>	
</head>
<body>
	<?php 
	$left_post_name = $_POST['left_col_value'];
	$right_post_name = $_POST['right_col_value'];
	if (!empty($left_post_name)){
		$post_left = array(
			'ID' => 4,
			'post_title' => $left_post_name
			);
		wp_update_post($post_left);
	}
	if (!empty($right_post_name)){
		$post_right = array(
			'ID' => 7,
			'post_title' => $right_post_name
			);
		wp_update_post($post_right);
	}

 	$left_post_title = get_post(4);
 	$left_post_title = $left_post_title->post_title;
 	$right_post_title = get_post(7);
 	$right_post_title = $right_post_title->post_title;
	 ?>
	 <h2>ОБО МНЕ</h2>
	 <form method="post">
	 	<label for="text" class="starter">Изменить заголовок левой колонки:
	 		<input type="text" name="left_col_value" value="<?php echo $left_post_title ?>" class="left_col_value">
	 	</label>
	 	<label for="text" class="starter">Изменить заголовок левой колонки:
	 		<input type="text" name="right_col_value" value="<?php echo $right_post_title ?>" class="left_col_value">
	 	</label>
	 	<input type="submit" value="Change name">	
	 </form>
</body>
</html>