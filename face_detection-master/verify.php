<?php
	if (isset($_FILES['webcam'])) {
		$url = 'http://localhost:5000/recognize';
		$file = $_FILES['webcam'];
		$tmpfile = $file['tmp_name'];
		$filename = basename($file['name']);
		$data = array(
			'capture' => curl_file_create($tmpfile, $file['type'], $filename),
			'user' => 'crop.jpg'
		);
		$ch = curl_init($url);   
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_exec($ch);
		curl_close($ch);
		echo '';
	}
