<?php

require_once('core/init.php');
include('core/header.php');

if ($_POST["subject"] && $_POST["message"]) {
    $madePost = $posts->makePost($_POST["subject"], $_POST["message"], $_SESSION["username"], $_SESSION["given_name"]);
}

?>
<?php
    if ($_SESSION["did_register"]) {
        echo '<div class="alert alert-success" role="alert" style="margin-bottom:0px;text-align:center;">
                Successfully Reigstered!
            </div>';
        $_SESSION["did_register"] = false;
    } else if ($_SESSION["did_login"]) {
        echo '<div class="alert alert-success" role="alert" style="margin-bottom:0px;text-align:center;">
                Successfully logged in!
            </div>';
        $_SESSION["did_login"] = false;
    }
?>

<div id="Content">
    <div class="sectionTitle">
        <h3>Discussion Topics<br></h3>
    </div>
    
    <div id="wrapper">
        <div id="column1">
            <img src="img/kingsimg.png" id="kingsimg">
        </div>
    
        <div id="questionList" class="questionList">
            <div id="column2">
                <?php $posts->displayPosts(); ?>
            </div>
        </div>
        
       
        
        <div id="column3">
            <img src="img/kingsimg.png" id="kingsimg">
        </div>
        
    </div>
    <?php
        if ($_SESSION["username"] != "") {
            echo "<h5>" . "Logged in as: " . $_SESSION["username"] . "</5> <style> h5 {float:right; padding-right: 2%; font-style: italic} </style>";
        } else {
            echo "<h5>" . "You are not yet signed in." . "</h5> <style> h5 {float:right; padding-right: 2%; font-style: italic} </style>";
        }
    ?>
</div>
    
    <?php include ('core/footer.php'); ?>

</div>
</body>

<html>