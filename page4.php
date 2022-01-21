<?php
echo isset($_GET['langage']) ? $_GET['langage'] : "le parametre 'langage' n'est pas présent";
echo '<br>';
echo isset($_GET['serveur']) ? $_GET['serveur'] : "le parametre 'serveur' n'est pas présent";
