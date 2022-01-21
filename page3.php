<?php
echo isset($_GET['dateDebut']) ? $_GET['dateDebut'] : "le parametre 'dateDebut' n'est pas présent";
echo '<br>';
echo isset($_GET['dateFin']) ? $_GET['dateFin'] : "le parametre 'dateFin' n'est pas présent";
