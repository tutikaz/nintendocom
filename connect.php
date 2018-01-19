<?php

$conn = mysqli_connect('localhost','id4300264_tutikaz','verysecure69','id4300264_commentsection');

	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}