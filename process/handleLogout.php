<?php
session_start();

// Détruit toutes les données de session
session_unset();
session_destroy();

// Redirige vers la page d'accueil ou une autre page appropriée
header('Location: ../public/accueil.php');
exit;
