<?php

// Liaison avec le fichier handleShowProfile pour transmettre les infos en php
include_once '../process/handleShowProfile.php';
include_once '../process/handleModifyProfile.php';
include_once '../process/handleDeleteProfile.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMarket</title>
    <link rel="stylesheet" href="./assets/styles/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class=" bg-primary-dark h-16 font-extrabold sticky top-0 z-20 flex items-center px-6 justify-center w-full md:px-12 md:h-24">

        <a href="./accueil.php" class="flex items-center"><img src="./assets/img/logo.png" alt="Logo de la marque représentant la Terre sur un livre" class="h-12 w-12 md:h-20 md:w-20 filter brightness-200 ">
            <h1 class="text-4xl text-primary-white hidden md:flex">BookMarket</h1>
        </a>


    </header>
    <main class="flex justify-center flex-col items-center px-10 bg-cover bg-center" style="background-image: url('./assets/img/booksPile.jpeg');">
        <div class="flex items-center gap-5">
            <i class='bx bx-user-circle text-8xl'></i>
            <h2 class="text-6xl">Bienvenue <?php echo $user['lastname'] . " " . $user['firstname'] ?></h2>
        </div>
        <h3 class="text-4xl mt-6 mb-10">Voulez vous modifier vos informations?</h3>


        <form action="../process/handleModifyProfile.php" method="post" class="max-w-4xl mx-auto bg-primary-white p-6 rounded-lg shadow-md">
            <input type="hidden" name="idPatient" value="<?= htmlspecialchars($user['id']) ?>">
            <input type="hidden" name="update" value="1"> <!-- Indicateur de mise à jour -->

            <div class="flex items-center gap-4 mb-6">
                <label class="font-semibold text-3xl w-1/3 text-right" for="lastname">Nom :</label>
                <input class="flex-1 bg-primary-white rounded-md py-4 px-2 border-2 border-primary-dark focus:ring-2 focus:ring-green focus:outline-none text-3xl"
                    type="text" name="lastname" id="lastname" value="<?= htmlspecialchars($user['lastname']) ?>">
            </div>

            <div class="flex items-center gap-4 mb-6">
                <label class="font-semibold text-3xl w-1/3 text-right" for="firstname">Prénom :</label>
                <input class="flex-1 bg-primary-white rounded-md py-4 px-2 border-2 border-primary-dark focus:ring-2 focus:ring-green focus:outline-none text-3xl"
                    type="text" name="firstname" id="firstname" value="<?= htmlspecialchars($user['firstname']) ?>">
            </div>

            <div class="flex items-center gap-4 mb-6">
                <label class="font-semibold text-3xl w-1/3 text-right" for="password">Mot de passe :</label>
                <input class="flex-1 bg-primary-white rounded-md py-4 px-2 border-2 border-primary-dark focus:ring-2 focus:ring-green focus:outline-none text-3xl"
                    type="password" name="password" id="password" value="<?= htmlspecialchars($user['password']) ?>">
            </div>

            <div class="flex items-center gap-4 mb-6">
                <label class="font-semibold text-3xl w-1/3 text-right" for="phone">Numéro de téléphone :</label>
                <input class="flex-1 bg-primary-white rounded-md py-4 px-2 border-2 border-primary-dark focus:ring-2 focus:ring-green focus:outline-none text-3xl"
                    type="text" name="phone" id="phone" maxlength="10"
                    value="<?= htmlspecialchars($user['phone']) ?>"
                    onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
            </div>

            <div class="flex items-center gap-4 mb-6">
                <label class="font-semibold text-3xl w-1/3 text-right" for="email">Email :</label>
                <input class="flex-1 bg-primary-white rounded-md py-4 px-2 border-2 border-primary-dark focus:ring-2 focus:ring-green focus:outline-none text-3xl"
                    type="text" name="email" id="email" value="<?= htmlspecialchars($user['email']) ?>">
            </div>

            <div class="flex justify-center">
                <button class="bg-primary-white rounded-md py-4 px-6 text-3xl font-semibold border-2 hover:bg-primary-dark hover:text-primary-white focus:outline-none focus:ring-2 focus:ring-green"
                    type="submit">Modifier</button>
            </div>
        </form>



        <form action="../process/handleDeleteProfile.php" method="post">
            <input type="hidden" name="email" value="<?php echo $user['email']; ?>">
            <input type="hidden" name="delete" value="1">
            <input type="submit" value="Supprimer le compte" class="bg-red rounded-md py-4 px-2 border-2 hover:bg-primary-dark hover:text-primary-white">
        </form>


    </main>
</body>

</html>