<?php

/**
 *
 * @author perraudeau
 */
//affichage des notes
class paramsContainer {

    public static function container() {
        ?>


        <div id="container">
            <?php
            echo $_SESSION['errorParams'];
            $_SESSION['errorParams'] = "";
            ?>
            <div class="example">
                <form Method="POST" Action="../handler/paramsHandler.php" >
                    <fieldset>
                        <div id="params" align="center">
                            <label>Mot de passe actuel :</label>
                            <div class="input-control password" data-role="input-control">
                                <input type="password" name="currentPassword" autofocus required="required" >
                            </div>
                            
                            <label>Nouveau mot de passe :</label>
                            <div class="input-control password" data-role="input-control">
                                <input type="password" name="newPassword1" autofocus required="required" >
                            </div>

                            <label>Confirmation du nouveau mot de passe :</label>

                            <div class="input-control password" data-role="input-control">
                                <input type="password" name="newPassword2" autofocus required="required" >
                            </div>
                            
                            <p class="register" align="center">
                                <input type="submit" value="Valider" align="right" >
                            </p> 
                        </div>
                    </fieldset>
                </form>
            </div>
      
            <?php
        }

    }
    ?>