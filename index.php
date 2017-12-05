<?php

include('config.php');
include('header.php');

// if($_SESSION['username']) {
    if ($_POST["subject"] && $_POST["message"]) {
        $q = "INSERT INTO lab_posts (subject, message) VALUES ('" . $_POST["subject"] . "','" . $_POST["message"] . "')";
        $conn->query($q);
    }

    $q = "SELECT * FROM lab_posts";
    $result = $conn->query($q);
// }


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
                                // echo $row["post_id"];
                                echo "<h2>" . $row["subject"] . "</h2></a>";
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
