<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dischi</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div id="app">
        <header class="d-flex align-items-center px-4">
            <h2>Spotify</h2>
        </header>

        <main class="">
            <div id="containerCard" class="d-flex flex-wrap pt-5 container justify-content-center gap-10 ">
                <div
                v-for="(element, index) in arrayDischi" :key="index"
                class="text-white flex-basis-3 rounded bg-blue py-4" 
                >   
                    <div class="d-flex flex-column justify-content-center align-items-center gap-2 ">
                        <img :src="element.poster" alt="" width="200">

                        <span>{{ element.title }}</span>
                        <span class="text-secondary">{{ element.author }}</span>
                        <span>{{ element.year }}</span>

                    </div>

                </div>
            </div>
                
        </main>
    </div>


    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Js -->
    <script src="./partials/main.js"></script>
</body>
</html>