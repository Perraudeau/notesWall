<?php

/**
 *
 * @author perraudeau
 */
//affichage des notes
class newNotesContainer {

    public static function container() {
        ?>

        <div id="container">

            <div class="example">
                <form Method="POST" Action="../handler/newNoteHandler.php" >
                    <fieldset>
                        <div>

                            <div class="text" data-role="input-control">

                                <input type="text" name="title" required="required" size="100" placeholder="Votre titre ici">

                            </div>

                            <div class="text" data-role="input-control">
                                <textarea  name="note"  required="required" placeholder="Votre note ici" maxlength ="480" rows="7" cols="76" ></textarea>
                            </div>
                            <div>
                                <input type="text" name ="date" size ="100" placeholder="Date d'alarme" data-field="datetime" readonly>

                                <div id="dtBox"></div>

                                <script type="text/javascript">

                                    $(document).ready(function()
                                    {
                                        $("#dtBox").DateTimePicker();
                                    });

                                </script>
                            </div>
                       
                            <div class="text" data-role="input-control">
                                <input type="text" name="place" required="required" size="100" placeholder="Votre lieu ici">
                            </div>
                            <br>
                            <div align="center">
                               <input type="radio" id="BtnBlanc" name="color" value="#FFFFFF" checked>
                                <label for="BtnBlanc">Blanc</label>
                                
                                <input type="radio" id="BtnJaune" name="color" value="#EAD390">
                                <label for="BtnJaune">Jaune</label>
                                
                                <input type="radio" id="BtnRouge" name="color" value="#EF6F64">
                                <label for="BtnRouge">Rouge</label>
                                
                                <input type="radio" id="BtnRose" name="color" value="#C97EA6">
                                <label for="BtnRose">Rose</label>
                                
                                <input type="radio" id="BtnBleu" name="color" value="#7ACAD1">
                                <label for="BtnBleu">Bleu</label> 
                             </div>
                            <p class="register" align="center">
                                <input type="submit" value="Valider" align="right" >
                            </p> 
                        </div>
                    </fieldset>
                </form>

            </div>

        </div>
        <?php
    }

}
?>
