<?php

include('config.php');

$result = null;
if ($_GET["id"]) {
	$q = "SELECT * FROM lab_posts WHERE post_id=" . $_GET["id"];
	$result = $conn->query($q);
}

?>

<html>
<head>
	<title>Question</title>
</head>
<body>

<?php

while($row = $result->fetch_assoc()) {
	echo "<h2>" . $row["subject"] . "</h2>";
	echo "<p>" . $row["message"] . "</p>";
}

?>

</body>
</html>