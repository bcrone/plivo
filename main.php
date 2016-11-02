<html>
	<head>
	</head>
	<body>
		<?php
			require 'vendor/autoload.php';
			use Plivo\RestAPI;
			$auth_id = "MANZY5YTQYZTDIODM4NT";
			$auth_token = "YTA5OTMyNWQ1NmQwZmM2OTZiMzc5N2Q1ZTdkM2Uz";
			$num_arr = explode("\n",$_POST['number']);
			$num_arr = array_filter(array_map('trim',$num_arr));
			$num_str = implode("<",$num_arr);
			$p = new RestAPI($auth_id, $auth_token);
			if($_POST['sendMessage'] == "Send")
			{
				$params = array(
					'src'  => '13308862927',
					'dst'  => $num_str,
					'text' => $_POST['message']);
				$response = $p->send_message($params);
			}
			echo "<h1>Success!</h1>";
			echo "Message sent to " . $_POST['number'];
		?>
	</body>
</html>