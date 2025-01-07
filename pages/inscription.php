<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMarket</title>
    <link rel="stylesheet" href="../assets/styles/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class=" bg-primary-dark h-16 font-extrabold sticky top-0 z-20 flex items-center px-6 justify-center w-full md:px-12 md:h-24">

        <a href="./accueil.php" class="flex items-center"><img src="../assets/img/logo.png" alt="Logo de la marque représentant la Terre sur un livre" class="h-12 w-12 md:h-20 md:w-20 filter brightness-200 ">
            <h1 class="text-4xl text-primary-white hidden md:flex">BookMarket</h1>
        </a>


    </header>
    <main class="flex justify-center flex-col items-center mt-10">
        <h2 class="text-6xl">S'inscrire</h2>


        <section class="bg-green py-20 rounded-md flex justify-center items-center mt-10 md:mt-24 text-primary-white w-[50%]" id="inscription">

            <form class="flex gap-4 flex-col text-xl" action="../process/handleInscription.php" method="post">
                <div class="md:grid grid-cols-2 grid-rows-2 items-center gap-x-52 gap-y-12">

                    <div class="flex flex-col ">
                        <label for="email">Votre email: </label>
                        <input class="text-primary-dark bg-primary-white rounded-lg py-2" type="text" name="email"
                            id="email">
                    </div>

                    <div class="flex flex-col ">
                        <label for="confirmEmail">Confirmer email: </label>
                        <input class="text-primary-dark bg-primary-white] rounded-lg py-2 y-" type="text" name="confirmEmail" id="confirmEmail">
                    </div>
                    <div class="flex flex-col ">
                        <label for="lastname">Nom de famille: </label>
                        <input class="text-primary-dark bg-primary-white] rounded-lg py-2 y-" type="text" name="lastname" id="lastname">
                    </div>
                    <div class="flex flex-col ">
                        <label for="firstname">Prénom: </label>
                        <input class="text-primary-dark bg-primary-white] rounded-lg py-2 y-" type="text" name="firstname" id="firstname">
                    </div>

                    <div class="flex flex-col ">
                        <label for="password">Votre mot de passe: </label>
                        <input class="text-primary-dark bg-primary-white] rounded-lg py-2" type="password" name="password" id="password">
                    </div>

                    <div class="flex flex-col">
                        <label for="confirmPassword">Confirmer mot de passe: </label>
                        <input class="text-primary-dark bg-primary-white rounded-lg py-2" type="password" name="confirmPassword" id="confirmPassword">
                    </div>

                </div>

                <label for="phone">Votre numéro de téléphone: </label>
                <input class="text-primary-dark bg-primary-white rounded-lg py-2" type="text" name="phone" id="phone">

                <input class="bg-red text-3xl rounded-full px-4 py-4 mt-12 cursor-pointer text-primary-white hover:bg-primary-white hover:text-primary-dark" type="submit" value="Créer un compte">

            </form>
        </section>

    </main>
</body>

</html>