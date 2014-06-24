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
                            <div>
                                <input type="button" class="BtnJaune" name="color" value="#CCCA34">
                                <input type="button" class="BtnRose" name="color" value="#CBA0CC">
                                <input type="button" class="BtnBleu" name="color" value="#A2DEFF">
                                <input type="hidden" name="color" value=color.value>
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