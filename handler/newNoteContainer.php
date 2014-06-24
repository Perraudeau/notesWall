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

                                <input type="text" name="title" required="required" size="106" placeholder="Votre titre ici">

                            </div>

                            <div class="text" data-role="input-control">
                                <textarea  name="note" placeholder="Votre note ici" required="required" maxlength ="480" rows="7" cols="81" ></textarea>
                            </div>
                            <div>
                                <input type="text" name ="date" size ="106" placeholder="date d'alarme" data-field="datetime" readonly>

                                <div id="dtBox"></div>

                                <script type="text/javascript">

                                    $(document).ready(function()
                                    {
                                        $("#dtBox").DateTimePicker();
                                    });

                                </script>
                            </div>
                       
                            <div class="text" data-role="input-control">
                                <input type="text" name="place" required="required" size="106" placeholder="Votre lieu ici">
                            </div>
                            <br>
                            <div align="center">
                               
                                <input type="radio" id="BtnJaune" name="radios" value="#CCCA34">
                                <label for="BtnJaune">Jaune</label>
                                <input type="radio" id="BtnRose" name="radios" value="#CBA0CC">
                                <label for="BtnRose">Rose</label>
                                <input type="radio" id="BtnBleu" name="radios" value="#A2DEFF">
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