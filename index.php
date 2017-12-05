<?php

include('config.php');
include('header.php');
session_start();

if ($_POST["subject"] && $_POST["message"]) {
    $q = "INSERT INTO lab_posts (subject, message, username, data_posted) VALUES ('" . $_POST["subject"] . "','" . $_POST["message"] . "','" . $_SESSION["username"] . "','" . date("Y-m-d") . "')";
    $conn->query($q);
}

$q = "SELECT * FROM lab_posts";
$result = $conn->query($q);

?>

<div id="Content">
            <div class="sectionTitle">
                <p>Questions: </p>
            </div>
            <div id="questionList" class="questionList">


                <?php
                    while($row = $result->fetch_assoc()) {
                        echo '<div id="questionSection" class="questionSection">';
                            echo '<a href="./question.php?id=' . $row["post_id"] . '">';
                            echo "<h2>" . $row["subject"] . "</h2></a>";
                            echo '<span class="date_posted">' . $row["data_posted"] . '</span>';
                            if ($row["username"]) {
                                echo '<span class="username">' . $row["username"] . '</span>';
                            } else {
                                echo '<span class="username">Anonymous</span>';
                            }
                        echo '</div>';
                    }
                ?>

            </div>


		</div>

        <?php

        while($row = $result->fetch_assoc()) {
            echo '<a href="./question.php?id=' . $row["post_id"] . '">';

            // echo $row["post_id"];
            echo "<h2>" . $row["subject"] . "</h2></a>";

        }

        ?>
       <?php
	        include ('footer.php');
        ?>

    </div>
</body>


<html>
