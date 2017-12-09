<?php

require_once('core/init.php');
include('core/header.php');

if ($_POST["subject"] && $_POST["message"]) {
    $posts->makePost($_POST["subject"], $_POST["message"], $_POST["username"]);
}

?>
<div id="Content">
    <div class="sectionTitle">
        <h3>Discussion Topics<br></h3>
    </div>
    
    <div id="questionList" class="questionList">
        <?php $posts->displayPosts(); ?>
    </div>
    <?php
        if ($_SESSION["username"]) {
            echo "<h5>" . "Logged in as: " . $SessionUser . "</5> <style> h5 {float:right; padding-right: 2%; font-style: italic} </style>";
        } else {
            echo "<h5>" . "You are not yet signed in." . "</h5> <style> h5 {float:right; padding-right: 2%; font-style: italic} </style>";
        }
    ?>
</div>
    
    <?php include ('core/footer.php'); ?>

</div>
</body>

<html>