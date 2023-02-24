<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <?php
            date_default_timezone_set("Europe/Paris");

            echo "<h1>Les Boucles</h1>";

            //---------------------------------
            echo "<p>1. Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...</p>";

            for($i = 1; $i <= 150; $i++){
                echo $i." ";

                $i++;
            }

            //--------------------------------

            echo "<p>2. Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers</p>";
            echo "for($.i = 0; $.i <= 500; $.i++){ <br>
                echo Je dois faire des sauvegardes régulières de mes fichiers; <br>
            }";
            
            /*for($i = 0; $i <= 500; $i++){
                echo "Je dois faire des sauvegardes régulières de mes fichiers";
            }*/

            //---------------------------------
            echo "<p>3. Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau HTML. Le résultat doit être le suivant : </p>";

            echo "<table border=1>";
                echo "<tr>";
                echo "<td></td>";
                for($i = 0; $i <= 12; $i++){
                    echo "<th>". $i ."</th>";
                }
                
                echo "</tr>";
                for($j = 0; $j <= 12; $j++){
                    echo "<tr>";
                    echo "<th>". $j ."</th>";

                    for($h =0; $h <= 12; $h++){
                        echo "<td>". $h * $j ."</td>";
                    }
                    echo "</tr>";
                }
            echo "</table>";

            //---------------------------------

            echo "<h1>Les Tableaux</h1>";
            echo "<h3>1. Mois de l'année</h3>";
            
            $tableau_mois = array(
                "Janvier" => "30",
                "Février" => "28",
                "Mars" => "31",
                "Avril" => "30",
                "Mai" => "30",
                "Juin" => "30",
                "Juillet" => "31",
                "Août" => "31",
                "Septembre" => "30",
                "Octobre" => "31",
                "Novembre" => "30",
                "Decembre" => "31",
            );
            echo "<table border=1>";
                
                foreach($tableau_mois as $cle => $valeur){
                    echo "<tr> <td>". $cle. "</td> <td>" .$valeur ."</td> </tr>"; 
                }
                
            echo "</table>";
            echo "<br>";
            echo "<table border=1>";
                asort($tableau_mois);

                foreach($tableau_mois as $cle => $valeur){

                    echo "<tr> <td>". $cle. "</td> <td>" .$valeur ."</td> </tr>"; 
                }
                
            echo "</table>";

            //---------------------------------

            echo "<h3>2. Capitales</h3>";

            $capitales = array(
                "Bucarest" => "Roumanie",
                "Bruxelles" => "Belgique",
                "Oslo" => "Norvège",
                "Ottawa" => "Canada",
                "Paris" => "France",
                "Port-au-Prince" => "Haïti",
                "Port-d'Espagne" => "Trinité-et-Tobago",
                "Prague" => "République tchèque",
                "Rabat" => "Maroc",
                "Riga" => "Lettonie",
                "Rome" => "Italie",
                "San José" => "Costa Rica",
                "Santiago" => "Chili",
                "Sofia" => "Bulgarie",
                "Alger" => "Algérie",
                "Amsterdam" => "Pays-Bas",
                "Andorre-la-Vieille" => "Andorre",
                "Asuncion" => "Paraguay",
                "Athènes" => "Grèce",
                "Bagdad" => "Irak",
                "Bamako" => "Mali",
                "Berlin" => "Allemagne",
                "Bogota" => "Colombie",
                "Brasilia" => "Brésil",
                "Bratislava" => "Slovaquie",
                "Varsovie" => "Pologne",
                "Budapest" => "Hongrie",
                "Le Caire" => "Egypte",
                "Canberra" => "Australie",
                "Caracas" => "Venezuela",
                "Jakarta" => "Indonésie",
                "Kiev" => "Ukraine",
                "Kigali" => "Rwanda",
                "Kingston" => "Jamaïque",
                "Lima" => "Pérou",
                "Londres" => "Royaume-Uni",
                "Madrid" => "Espagne",
                "Malé" => "Maldives",
                "Mexico" => "Mexique",
                "Minsk" => "Biélorussie",
                "Moscou" => "Russie",
                "Nairobi" => "Kenya",
                "New Delhi" => "Inde",
                "Stockholm" => "Suède",
                "Téhéran" => "Iran",
                "Tokyo" => "Japon",
                "Tunis" => "Tunisie",
                "Copenhague" => "Danemark",
                "Dakar" => "Sénégal",
                "Damas" => "Syrie",
                "Dublin" => "Irlande",
                "Erevan" => "Arménie",
                "La Havane" => "Cuba",
                "Helsinki" => "Finlande",
                "Islamabad" => "Pakistan",
                "Vienne" => "Autriche",
                "Vilnius" => "Lituanie",
                "Zagreb" => "Croatie"
            );
            
            echo "<p>1. Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.</p>";
            echo "<table border=1>";
                ksort($capitales);
                foreach($capitales as $cap => $vil){
                    echo"<tr> <td>". $cap ."</td> <td>". $vil ."</td> </tr>";
                }
            echo "</table>";
            
            echo "<p>2. Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.</p>";
            echo "<table border=1>";
                asort($capitales);
                foreach($capitales as $cap => $vil){
                    echo"<tr> <td>". $vil ."</td> <td>". $cap ."</td> </tr>";
                }
            echo "</table>";

            echo "<p>3. Affichez le nombre de pays dans le tableau.</p>";
            echo "Il y as ". count($capitales) ." capitales dans le tableau";

            echo "<p>4. Supprimer du tableau toutes les capitales commençant par la lettre 'B', puis affichez le contenu du tableau.</p>";
            echo "<table border=1>";
            ksort($capitales);
            $i = 0;
                foreach($capitales as $vil => $cap){
        
                    if(substr($vil, 0, 1) == "B"){
                        echo"<tr> <td>Ligne supprimé</td> <td>Ligne supprimé</td> </tr>";
                        unset($capitales[$i]);
                        
                    }
                    else {echo"<tr> <td>". $vil ."</td> <td>". $cap ."</td> </tr>";}
                    $i++;
                }
                
            echo "</table>";

            //---------------------------------

            echo "<h3>2. Départements</h3>";

            $departements = array(
                "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
                "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
                "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
                "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
            );

            echo "<p>1. Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements</p>";
            echo "<table border=1>";
                arsort($departements);
                $a = 0;
                foreach($departements as $depart => $regi) {
                    for($i = 0; $i < count($regi); $i++){
                        echo"<tr> <td>". $regi[$i] ."</td> <td>". $depart ."</td> </tr>";
                    }
                    $a++;
                }
            echo "</table>";

            echo "<p>2. Affichez la liste des régions suivie du nombre de départements</p>";
            echo "<table border=1>";
                foreach($departements as $depart => $regi) {
                    echo"<tr> <td>". $depart ."</td> <td>". count($regi) ."</td> </tr>";
                }
            echo "</table>";

            //---------------------------------

            echo "<h1>Les Fonctions</h1>";
            
            echo "<p>1. Ecrivez une fonction qui permette de générer un lien.</p>";
            function lien($lien, $titre) {
                echo "<a href=". $lien .">". $titre ."</a>";
            }

            lien("https://www.reddit.com/", "Reddit Hug");

            echo "<p>2. Ecrivez une fonction qui calcul la somme des valeurs d'un tableau</p>";
            function resultat() {
                $tab = array(4, 3, 8, 2);
                echo array_sum($tab);
            }

            resultat();

            echo "<p>3. Créer une fonction qui vérifie le niveau de complexité d'un mot de passe</p>";
            function mdp($umdp) {
                $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
                echo preg_match($regex, $umdp);
            }            
            mdp("a1aAdeee");

            //---------------------------------

            echo "<h1>Les Dates et les Heures</h1>";
            echo "<p>1. Trouvez le numéro de semaine de la date suivante : 14/07/2019</p>";
            $timestamp = strtotime('14-07-2019');
            echo idate('W', $timestamp);

            echo "<p>2. Combien reste-t-il de jours avant la fin de votre formation ?</p>";
            $d_fin = new DateTime("31-03-2023");
            $d_aujd = new datetime("now");
            $diff = $d_fin->diff($d_aujd)->format("%a");
            echo $diff;

            echo "<p>2. Comment déterminer si une année est bissextile ?</p>";
            function annee_bissextile($annee) {
                $a = $annee / 4;
                if(is_int($a)) {
                    echo $annee ." est une année bissextile";
                } else {
                    echo $annee ." n'est pas une année bissextile";
                }
            }
            annee_bissextile(2024);

            echo "<p>2. Montrez que la date du 32/17/2019 est erronée</p>";
            function verif_date($date, $format = 'd/m/Y') {
                if(checkdate($date, $format) == true) {
                    echo $date ." est valide";
                } else {
                    echo $date ." n'est pas valide";
                }
            }
            verif_date(6/6/2019);
            ?>
        </body>
    </html>