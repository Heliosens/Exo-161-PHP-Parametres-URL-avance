<?php
echo isset($_GET['batiment']) ? $_GET['batiment'] : "le parametre 'batiment' n'est pas présent";
echo '<br>';
echo isset($_GET['salle']) ? $_GET['salle'] : "le parametre 'salle' n'est pas présent";