<?php

include('config.php');

if ($_POST["subject"] && $_POST["message"]) {
    $q = "INSERT INTO lab_posts (subject, message) VALUES ('" . $_POST["subject"] . "','" . $_POST["message"] . "')";
    $conn->query($q);
}

$q = "SELECT * FROM lab_posts";
$result = $conn->query($q);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Forum</title>

    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="./main.css">
</head>

<body>
    <div id="MainContainer">
        <div id="HeaderContainer">
            <div id="Header">
                <h1 id="HeaderTitle"><span>Forum</span></h1>
                <div id="navigation">
                    <style>
                        #navigation ul {
                            list-style-type: none;
                            margin: 0;
                            padding: 0;
                            overflow: hidden;
                            background-color: darkgrey;
                        }

                        #navigation li {
                            float: left;
                        }

                        #navigation li a {
                            display: block;
                            color: black;
                            text-align: center;
                            padding: 14px 16px;
                            text-decoration: none;
                        }

                        #navigation li a:hover {
                            background-color: lightgrey;
                            font-weight: bold;
                        }
                    </style>
                    <ul>
                      <li><a href="<?php echo 'login.php'; ?>">Login</a></li>
                      <li><a href="<?php echo 'addPost.php'; ?>">Add Post</a></li>
                    </ul>
                </div>
            </div>
        </div>







        <?php

        while($row = $result->fetch_assoc()) {
            echo '<a href="./question.php?id=' . $row["post_id"] . '">';
            // echo $row["post_id"];
            echo "<h2>" . $row["subject"] . "</h2></a>";

        }

        ?>
        <!-- <h2>Test</h2> -->

    </div>
</body>


<html>
