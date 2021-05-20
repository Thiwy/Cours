var xmlhttp

function ajaxx(url,laDiv)
{
        // On g�n�re un objet xmlhttp
        xmlhttp=GetXmlHttpObject();
        // Test si le navigateur est compatible ajax
        if (xmlhttp==null) {
                  alert ("Your browser does not support AJAX!");
                  return;
         }

        // Fonction qu'on execute � chaque changement d'�tat du serveur
        xmlhttp.onreadystatechange=function() {
                // On ex�cute les op�rations quand le serveur est pr�t
                if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)) {
                        document.getElementById(laDiv).innerHTML=xmlhttp.responseText;
                }

        }

        // On ouvre le traitement
        xmlhttp.open("GET",url,true);
        // On passe les param�tres n�cessaires
        xmlhttp.send(null);
}

function GetXmlHttpObject()
{
        if (window.XMLHttpRequest)
          {
                  // code for IE7+, Firefox, Chrome, Opera, Safari
                  return new XMLHttpRequest();
          }
        if (window.ActiveXObject)
          {
                  // code for IE6, IE5
                  return new ActiveXObject("Microsoft.XMLHTTP");
          }
        return null;
}
