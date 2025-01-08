<?php

session_start();
$isUserConnected = isset($_SESSION['user']); // Adaptez 'user' à la clé utilisée dans votre session pour stocker l'utilisateur connecté

?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMarket</title>
    <link rel="stylesheet" href="../assets/styles/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body class="bg-primary-white">

    <header class=" bg-primary-dark h-16 font-extrabold sticky top-0 z-20 flex items-center px-6 justify-between w-full md:px-12 md:h-24">
        <a href="#" class="flex items-center"><img src="../assets/img/logo.png" alt="Logo de la marque représentant la Terre sur un livre" class="h-12 w-12 md:h-20 md:w-20 filter brightness-200 ">
            <h1 class="text-4xl text-primary-white hidden md:flex">BookMarket</h1>
        </a>

        <nav class="flex justify-evenly w-[150px] md:w-[250px] lg:w-[300px]">

            <a href="#" id="cart"><i class='bx bx-cart text-4xl text-primary-white md:text-6xl'></i></a>
            <a href="#" id="search"><i class='bx bx-search-alt-2 text-4xl text-primary-white md:text-6xl'></i></a>
            <a href="#" id="profil"><i class='bx bx-user text-4xl text-primary-white md:text-6xl'></i></a>


            <?php
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user'];
            ?>
                <script src="../js/openProfileConnected.js"></script>
            <?php
            } else {
            ?>
                <script src="../js/openProfile.js"></script>
            <?php
            }
            ?>

            </form>
        </nav>
    </header>
    <main>

        <section>
            <article class="hidden" id="connexion">
                <div id="modalConnexion" class="fixed hidden inset-0 bg-primary-dark bg-opacity-50 flex justify-center items-center z-50">
                    <div class="bg-red rounded-lg shadow-lg w-[300px] h-[400px] p-6 relative flex flex-col md:w-[1000px] md:h-[1000px]">
                        <h4 class="text-md font-bold mb-4 md:text-lg text-primary-white">Vous n'êtes pas connecté</h4>
                        <div class="flex flex-col items-center space-y-4 justify-center h-[300px] md:h-[1000px]">
                            <form class="flex flex-col items-center space-y-4" action="../process/handleConnect.php" method="post">
                                <label class="md:text-2xl md:font-semibold text-primary-white" for="email">Email</label>
                                <input class="md:w-[300px] md:h-[30px] px-3 rounded-sm" type="email" name="email" id="email" placeholder="Votre email">
                                <label class="md:text-2xl md:font-semibold text-primary-white" for="password">Mot de passe</label>
                                <input class="md:w-[300px] md:h-[30px] px-3" type="password" name="password" id="password" placeholder="Votre mot de passe">
                                <input type="submit" value="Se connecter" class="bg-green text-primary-white rounded-lg p-2 cursor-pointer hover:bg-primary-white hover:text-primary-dark">
                            </form>
                            <a class="bg-green text-primary-white rounded-lg p-2 cursor-pointer hover:bg-primary-white hover:text-primary-dark" href="../pages/inscription.php">Pas encore inscrit?</a>
                            <i id="close" class="absolute top-1 right-1 md:top-2 md:right-2 text-primary-dark hover:text-primary-white focus:outline-none font-bold bx bx-x text-3xl md:text-5xl cursor-pointer"></i>
                        </div>
                    </div>
                </div>
            </article>
            <article class="hidden" id="connected">
                <div id="modalConnected" class="fixed hidden  inset-0 bg-primary-dark bg-opacity-50 flex justify-end items-center z-50">
                    <div class="bg-red shadow-lg w-[300px] h-[100vh] py-6 relative flex flex-col md:w-[300px] md:h-[100vh]">
                        <h4 class="text-md px-6 font-bold mb-4 md:text-xl text-primary-white">Vous êtes connecté bienvenue <?php echo $user['firstname'] . " " . $user['lastname'] ?></h4>
                        <div class="flex flex-col items-start space-y-4 justify-start h-[300px] md:h-[1000px]">
                            <a class="bg-green text-center w-full text-primary-white  p-2 cursor-pointer hover:bg-primary-white hover:text-primary-dark md:text-xl md:px-4 md:py-4" href="./profil.php">Voir profil</a>
                            <form class="flex flex-col items-center space-y-4 w-full" action="../process/handleLogout.php" method="post">
                                <input class="bg-green w-full text-primary-white  p-2 cursor-pointer hover:bg-primary-white hover:text-primary-dark md:text-xl md:px-4 md:py-4" type="submit" value="Se déconnecter">

                            </form>


                        </div>
                    </div>
                </div>

            </article>

        </section>



        <section id="bestSeller" class="flex flex-col items-center mt-6">
            <h2 class="text-4xl md:text-6xl lg:text-7xl font-semibold mb-24 text-primary-dark">Best Seller</h2>
            <article class="flex w-full justify-evenly">
                <i class='bx bx-left-arrow-alt text-6xl text-primary-white absolute z-10 left-0 top-1/2 bg-red bg-opacity-80 cursor-pointer'></i>
                <div class="bg-green w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white flex flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-dark h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm max-sm:truncate md:">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>

                    </div>
                </div>
                <div class="bg-green w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white flex flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-dark h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm max-sm:truncate md:">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>
                <div class="hidden bg-green w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white xl:flex xl:flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-dark h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm max-sm:truncate md:">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>
                <div class="hidden bg-green w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white xl:flex xl:flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-dark h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm max-sm:truncate md:">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>
                <div class="hidden bg-green w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white lg:flex lg:flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-dark h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm max-sm:truncate md:">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>

                <i class='bx bx-right-arrow-alt text-6xl text-primary-white absolute z-10 right-0 top-1/2 bg-red bg-opacity-80 cursor-pointer'></i>
            </article>



        </section>
        <section class="bg-primary-dark flex flex-col items-center mt-36 pb-16">
            <h2 class="text-4xl md:text-6xl lg:text-7xl font-semibold mt-6 mb-24 text-primary-white">Nouveautés</h2>
            <article class="grid grid-cols-2 gap-10 md:grid-cols-3 items-center justify-center md:gap-24">
                <div class="bg-green w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white flex flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-white h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm max-sm:truncate md:">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>
                <div class="bg-green w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white flex flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-white h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm max-sm:truncate md:">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>
                <div class="bg-green w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white flex flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-white h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm max-sm:truncate md:">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>
                <div class="bg-green w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white flex flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-white h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm max-sm:truncate md:">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>
                <div class="bg-green w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white flex flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-white h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm max-sm:truncate md:">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>
                <div class="bg-green w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white flex flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-white h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm max-sm:truncate md:">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>
                <div class="bg-green hidden w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white md:flex flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-white h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm max-sm:truncate md:">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>
                <div class="bg-green hidden w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white md:flex flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-white h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm max-sm:truncate md:">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>
                <div class="bg-green hidden w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white md:flex flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-white h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm max-sm:truncate md:">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>
            </article>
        </section>
        <footer>
            <section class="bg-primary-white flex flex-col items-center mt-20 pb-16">
                <article id="links" class="grid grid-cols-3 gap-5 md:gap-0 justify-between w-[70%]">
                    <div class="flex flex-col items-center text-center">
                        <h4 class="text-lg md:text-xl font-semibold mb-5">BookMarket</h4>
                        <a href="#" class="underline hover:text-xl hover:text-green">
                            <p class="text-md md:text-lg hover:text-xl">Nous contacter</p>
                        </a>
                    </div>
                    <div class="flex flex-col items-center text-center gap-3">
                        <h4 class="text-lg md:text-xl font-semibold mb-5">Liens rapides</h4>
                        <a href="#" class="underline hover:text-xl hover:text-green">
                            <p class="text-md md:text-lg hover:text-xl">FAQ</p>
                        </a>
                        <a href="#" class="underline hover:text-xl hover:text-green">
                            <p class="text-md md:text-lg hover:text-xl">Qui sommes-nous?</p>
                        </a>
                        <a href="#" class="underline hover:text-xl hover:text-green">
                            <p class="text-md md:text-lg hover:text-xl">Protection des données</p>
                        </a>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <h4 class="text-lg md:text-xl font-semibold mb-5">Informations générales</h4>
                        <a href="#" class="underline  hover:text-green">
                            <p class="text-md md:text-lg hover:text-xl">Informations de livraisons</p>
                    </div>
                </article>
                <article id="socials" class="mt-10">
                    <div class="flex">
                        <a href="#" class="mr-5"><i class='bx bxl-facebook text-4xl text-primary-dark hover:text-green'></i></a>
                        <a href="#" class="mr-5"><i class='bx bxl-twitter text-4xl text-primary-dark hover:text-green'></i></a>
                        <a href="#"><i class='bx bxl-instagram text-4xl text-primary-dark hover:text-green'></i></a>
                    </div>
                </article>
            </section>
        </footer>
    </main>



</body>

</html>