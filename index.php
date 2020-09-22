<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SLAM4</title>
  </head>
  <body>
        <h1>Vous souhaiter trouver un prénom pour votre enfant ?</h1>
    <form action="Prenoms.php" method="post">
      <div>
        Nombre de lettres pour les prénoms:
        <input type="number" name="nbLetter" size="10"/>
          <br>
          <br>
        Première lettre pour ces prénoms: 
        <input type="text" name="firstLettre" size="1" maxlength="1"/>
          <br>
        <input type="submit" value="Envoyer">
        <input type="reset" value="Effacer">
      </div>
    </form>
  </body>
</html>