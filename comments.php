<?php

function setComments($conn) {
	if  (isset($_POST['commentSubmit'])) {
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		$sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
		$result = mysqli_query($conn, $sql);
		header("Location: random.php");
		}
}

function getComments($conn) {
	$sql = "SELECT * FROM comments";
	$result = mysqli_query($conn, $sql);
	while ($row = $result->fetch_assoc()) {
		echo "<div class='comment-box'>";
		echo $row['uid']."<br>";
		echo $row['date']."<br>";
		echo $row['message']."<br><br>";
		echo "<div>";
	}	
}