<HTML>
<HEAD>
<TITLE>Test.php3: Affichage des données utilisateur</TITLE>
</HEAD>
<BODY>

<?php
    if ($_POST['entregistrer']=="ok") {
 if (($nom=="")||($prenom=="")||($age=="")){
  if($nom=="") print("Veuillez saisir le nom de l'utilisateur<BR>\n");
  if($prenom=="") print("Veuillez saisir le prénom de l'utilisateur<BR>\n");
  if($age=="") print("Veuillez saisir l'age de l'utilisateur<BR>\n");

 }
 else {
 echo "Récapitulatif des informations saisies<BR>\n
 <UL>
 <LI>Nom: $nom</LI>
 <LI>Prenom: $prenom</LI>
 <LI>Age: $age</LI>
 </UL>
 ";

 }
}
else {
 echo "<p>Vous n'avez pas demandé que les informations soient affichées.<p>";
}

?>

</BODY>
</HTML>