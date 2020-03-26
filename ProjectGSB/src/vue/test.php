


<!DOCTYPE HTML>
<html>
<head>
  <title>GSB</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script language="JavaScript">
    function ChangeUrl(formulaire)
    {
    if (formulaire.ListeUrl.selectedIndex != 0)
    {
    location.href = formulaire.ListeUrl.options[formulaire.ListeUrl.selectedIndex].value;
    }
    }
  </script>
</head>
<body>
    <form action="form.php">
    <div id="main">
      <div id="header">
        <div id="logo">
          <div id="logo_text">
            <h1><a href="index.html">GSB</a></h1>
            <h2>Galaxy-Swiss Bourdin</h2>
          </div>
        </div>
        <div id="menubar">
          <ul id="menu">
            <li class="selected"><a href="index.html">Accueil </a></li>
            <li><a href="formulaire.html">Formulaire</a></li>
            <li><a href="test.php">Afficher</a></li>
          </ul>
        </div>
      </div>
      <div id="content">
      	<?php
        		include 'connectAD.php';
        		
        		
        		
        		$sql="select * from fichefrais";
        		$cptuser = compteSQL($sql);
        		$results = tableSQL($sql);
        		
        		
        		echo "<table id=\"affichetableau\">";
        		echo "<thead>
			    <tr>
			    	<th>Date</th>
					<th>Supprimer</th>
                    <th>Modifier </th>
	    			<th>Voir </th>

	  		    </tr>
	          </thead>
	          <tbody>";
        		
        		
        
        		    

        		
        		$cpt=0;
        		
        		if ($cptuser>0) {
        		    foreach ($results as $ligne) {
        		        //on extrait chaque valeur de la ligne courante
        		        $annee = $ligne[3];
                   

        		        
        		        
        		        $cpt++;
        		        if ($cpt %2 == 0)
        		            echo "<tr class=\"even\">";
        		            else
        		                echo "<tr class=\"odd\">";
        		                
        		                
        		                echo "<td width=\"100%\">".$annee."</td>";
        		                
        		                echo "<td width=\"32\">  </td>";
        		                
        		                echo "<td width=\"32\"> <img src=\"edit.png\" title=\"Modifier...\" /> </td>";
        		                
        		                echo "<td width=\"32\"></td>";
        		                

        		                

        		                
        		               
        		    
        		                
        		                
        		                echo "</tr>";
        		    }
        		    
        		} else {
        		    
        		    echo "<tr class=\"odd\">";
        		    
        		    echo "<td width=\"100%\">Aucune information...</td>";
        		    
        		    echo "</tr>";
        		    
        		}
        		
        		
        		
        		echo "</tbody>
		</table> ";

        		
        		

  			?>
      
      </div>
    <div id="content_footer"></div>
      <div id="footer">
		
      </div>
    </div>
  </form>
</body>
</html>












