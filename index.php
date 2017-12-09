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

$SessionUser = $_SESSION["username"];

$nrq= $conn->query("SELECT COUNT(reply_id) FROM post_replies");
$numberOfReplies = $nrq->fetch_assoc();

?>

<div id="Content">
            <div class="sectionTitle">
                <h3>
                
                    Discussion Topics
                <br>
                </h3>
            </div>
           
            
            
            <div id="questionList" class="questionList">

                <?php
                    
                    while($row = $result->fetch_assoc()) {
                        
                       
                        echo '<div id="questionSection" class="questionSection">';
                            echo  '<div id="c1">';
                                echo '<h4 id="questionTitles">' . "Discussion" . "</h4>";
                                echo '<a href="./question.php?id=' . $row["post_id"] . '">';
                                echo "<h4>" . $row["subject"] . "</h4></a>";
                            echo '</div>';
                            
                            echo  '<div id="c2">';
                                echo '<h4 id="questionTitles">' . "Author" . "</h4>";
                                echo '<img src="user.png" style="width:20px; height:20px;"/>';
                                if ($row["username"]) {
                                    echo '<span class="username">' . $row["username"] . '</span>';
                                } else {
                                    echo '<span class="username">Anonymous</span>';
                                }
                            echo '</div>'; 
                            
                            echo  '<div id="c3">';
                                echo '<h4 id="questionTitles">' . "Replies" . "</h4>";
                                echo '<span class="numberOfReplies">' . $numberOfReplies . '</span>';
                            echo '</div>';
                            
                            echo  '<div id="c4">';
                                echo '<h4 id="questionTitles">' . "Date Posted" . "</h4>";
                                echo '<span class="date_posted">' . $row["data_posted"] . '</span>';
                            echo '</div>';
                                    
                        echo '</div>';
                       
                    }
                ?>

            </div>
            <?php
              
            if ($_SESSION["username"]) {
                                echo "<h5>" . "Logged in as: " . $SessionUser . "</5> <style> h5 {float:right; padding-right: 2%; font-style: italic} </style>";
                            } else {
                                echo "<h5>" . "You are not yet signed in." . "</h5> <style> h5 {float:right; padding-right: 2%; font-style: italic} </style>";
                            }
            ?>
		</div>
        
       <?php
	        include ('footer.php');
        ?>

    </div>
</body>


<html>
