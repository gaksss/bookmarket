<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMarket</title>
    <link rel="stylesheet" href="../assets/styles/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body class="bg-primary-white">
    <header class=" bg-primary-dark h-16 font-extrabold flex items-center px-6 justify-between w-full md:px-12 md:h-24">

        <a href="#" class="flex items-center"><img src="../assets/img/logo.png" alt="Logo de la marque représentant la Terre sur un livre" class="h-12 w-12 md:h-20 md:w-20 filter brightness-200 ">
            <h1 class="text-4xl text-primary-white hidden md:flex">BookMarket</h1>
        </a>

        <nav class="flex justify-evenly w-[150px] md:w-[250px] lg:w-[300px]">

            <a href="#"><i class='bx bx-cart text-4xl text-primary-white md:text-6xl'></i></a>
            <a href="#"><i class='bx bx-search-alt-2 text-4xl text-primary-white md:text-6xl'></i></a>
            <a href="#"><i class='bx bx-user text-4xl text-primary-white md:text-6xl'></i></a>
        </nav>
    </header>
    <main>
        <section id="bestSeller" class="flex flex-col items-center mt-6">
            <h2 class="text-4xl md:text-6xl lg:text-7xl font-semibold mb-24">Best Seller</h2>
            <article class="flex w-full justify-evenly">
                <i class='bx bx-left-arrow-alt text-6xl text-primary-white absolute z-10 left-0 top-1/2 bg-red bg-opacity-80'></i>
                <div class="bg-green w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white flex flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-dark h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>
                <div class="bg-green w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white flex flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-dark h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>
                <div class="hidden bg-green w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white xl:flex xl:flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-dark h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>
                <div class="hidden bg-green w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white xl:flex xl:flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-dark h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>
                <div class="hidden bg-green w-[150px] h-[250px] lg:h-[400px] lg:w-[300px] text-primary-white lg:flex lg:flex-col justify-end ">

                    <div id="imageHolder" class="bg-primary-dark h-[200px] w-[150px] lg:w-[300px] lg:h-[400px]">
                        <p class="bg-red w-[40%] lg:w-[20%] px-2 rounded-br-sm">Genre</p>
                    </div>
                    <div class="pb-2 px-2 lg:pb-5 lg:px-5">
                        <h3 class="text-xl lg:text-3xl lg:mb-2">Titre</h3>
                        <p class="text-sm truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, laudantium.</p>
                    </div>
                </div>

                <i class='bx bx-right-arrow-alt text-6xl text-primary-white absolute z-10 right-0 top-1/2 bg-red bg-opacity-80'></i>
            </article>



        </section>

    </main>

</body>

</html>