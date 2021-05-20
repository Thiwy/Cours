<!doctype html>
<html lang="fr">

   <head>


     <meta charset="utf-8">
      <TITLE>Ajax</TITLE>


      <script type="text/javascript" src="ajax.js"></script>




   </head>


   <BODY>




        <p>

             <label for="nombre">Nombre :</label>
             <input type="nombre" id="nombre" name="nombre">

      </p>







      <p>



      <input id="ajoute" name="ajoute" type="button" value="Ajoute un"
            onclick="ajaxx('formulaire.php?nombre='+(document.getElementById('nombre').value),'affiche')"/>


      <div id="affiche">

        &nbsp

      </div>
    </p>




    




   </BODY>
</HTML>
