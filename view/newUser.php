<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Notes Wall</title>


        <meta name="author" content="Perraudeau Victor & Leroux Alexis" />
        <link href="./css/style.css" rel="stylesheet">
        <link href="./css/metro-bootstrap.css" rel="stylesheet">
        <!-- Load JavaScript Libraries -->
        <script src="./js/jquery/jquery.min.js"></script>
        <script src="./js/jquery/jquery.widget.min.js"></script>
        <script src="./js/jquery/jquery.mousewheel.js"></script>
        <script src="./js/prettify/prettify.js"></script>
        <script src="./js/holder/holder.js"></script>

        <!-- Metro UI CSS JavaScript plugins -->
        <script src="./js/load-metro.js"></script>

        <!-- Local JavaScript -->
        <script src="./js/docs.js"></script>
        <script src="./js/github.info.js"></script>

    </head>
    <body>
        <div class="metro">
				
			<header>
                                <br><br><br><br>
				<h1 align="center">Notes <strong>Wall</strong></h1>
			</header>
			 <center><?php
                if (isset($_SESSION['errorCreate'])){
                echo $_SESSION['errorCreate'];}
                ?></center><br>
			<div class="example">
                                
				<form class="form-1" Method="POST" Action="../handler/createUserHandler.php" >
                                    <center>Création d'un nouvel utilisateur</center><br>
					<p class="field">
						<input type="text" name="email" placeholder="Email">
						<i class="icon-user icon-large"></i>
					</p>
						<p class="field">
							<input type="password" name="password" placeholder="Password">
							<i class="icon-lock icon-large"></i>
					</p>
					<p class="submit">
						<button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
					</p>
                                        
                                        <br>                                              
				</form>
             
			</div>
        </div>
    </body>
</html>