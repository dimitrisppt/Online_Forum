<!DOCTYPE html>
<html>

<head>
    <title>Forum</title>
    <link rel="icon" type="image/png"  href="/img/logodark.png" />
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>

<body>
    <div id="MainContainer">
        <div id="HeaderContainer">
            <div id="Header">
                <h1 id="HeaderTitle"><span> <img src="/img/logo1.png" alt="Logo" style="width:50px;height:30px;"></span></span><span> Forum</span><img src="img/kingslogo.png" alt="Logo" style="width:60px;height:40px;float:right;margin-right:1%;"></h1>
       
            </div>
            
             <div id="navigation">
                  
                    <div id="navigation-left">
                      <ul>
                          <li><a href="/index.php">Home</a></li>
                          <li><a href="/views/addPost.php">Add Post</a></li>

                          <li style="float:right"><a href="/views/logout.php">Logout</a></li>
                      
                          <li class="dropdown" style="float:right">
                            <a href="/oauth.php" class="dropbtn">Login/ Sign Up</a>
                          </li>

                      </ul>
                          
                    </div>
     
                </div>
        </div>
        
       
 
<!-- Logout modal -->
    <div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4>Log Out <i class="fa fa-lock"></i></h4>
          </div>
          <div class="modal-body">
            <p><i class="fa fa-question-circle"></i> Are you sure you want to log-off? <br /></p>
                <div class="actionsBtns">
                    
                      
                    
                    <form action="/logout" method="post">
                        <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}"/>
                        <input type="submit" class="btn btn-default btn-primary" name="logout" data-dismiss="modal" value="logout" />
	                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
         </div>
        </div>
      </div>
    </div>
    
</body>