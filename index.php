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
                <h6 class="titleOverride" >Questions: </h6>
            </div>

            <style>
            .demo-card-wide.mdl-card {
              width: 512px;
              margin: 25px;
            }
            .demo-card-wide > .mdl-card__title {
              color: #fff;
              height: 176px;
              background: url('../assets/demos/welcome_card.jpg') center / cover;
            }
            .demo-card-wide > .mdl-card__menu {
              color: #fff;
            }
            .headerQues {
                padding-top: 10px;
                font-size: 25px;
                color: #656d7a;
            }

            </style>

            <div id="questionList" class="questionList">

                    <?php
                        while($row = $result->fetch_assoc()) {
                            echo '<div class="demo-card-wide mdl-card mdl-shadow--2dp">';
                              //   echo '<div class="mdl-card__title">';
                              //   echo '<h2 class="mdl-card__title-text">Welcome</h2>';
                              // echo '</div>';
                              // echo '<div class="mdl-card__supporting-text">';
                              //   echo '</div>';
                                echo '<div class="mdl-card__actions mdl-card--border">';
                                  echo '<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./question.php?id=' . $row["post_id"] . '">';
                                  // echo $row["post_id"];
                                  echo "<p class= \"headerQues\">" . $row["subject"] . "</p></a>";

                                echo '</div>';
                                echo '<div>';
                                echo "<p class= \"\" >" . $row["message"] . "</p></a>";
                                echo '</div>';

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
