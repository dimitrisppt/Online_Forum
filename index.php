<?php

require_once('core/init.php');
include('core/header.php');

if ($_POST["subject"] && $_POST["message"]) {
    $posts->makePost($_POST["subject"], $_POST["message"], $_POST["username"]);
}

?>
    
    <div id="Content">
        <div class="sectionTitle">
            <p>Questions: </p>
        </div>
        <div id="questionList" class="questionList">
            <?php $posts->displayPosts(); ?>
        </div>
    </div>

    <?php include ('core/footer.php'); ?>

</div>
</body>

<html>