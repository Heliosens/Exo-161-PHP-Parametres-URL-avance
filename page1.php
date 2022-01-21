<?php
echo isset($_GET['nom']) ? $_GET['nom'] : "le parametre 'nom' n'est pas présent";
echo '<br>';
echo isset($_GET['prenom']) ? $_GET['prenom'] : "le parametre 'prenom' n'est pas présent";