<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <title>Document</title>
</head>

<body>
    <?php
    include 'nav.html';
    ?>
    <div class="h-full bg-gray-200 p-8">
        <div class="bg-gray-700 rounded-lg shadow-xl pb-8">
            <div class="w-full h-[250px]">
                <img src="https://vojislavd.com/ta-template-demo/assets/img/profile-background.jpg"
                    class="w-full h-full rounded-tl-lg rounded-tr-lg">
            </div>
            <div class="flex flex-col items-center -mt-20">
                <img src="https://i2-prod.mirror.co.uk/incoming/article25094393.ece/ALTERNATES/s1200c/1_Paris-Saint-Germain-v-Manchester-City-Group-A-UEFA-Champions-League.jpg"
                    class="w-40 border-4 border-white rounded-full">
                <div class="flex items-center space-x-2 mt-2">
                    <p class="text-gray-100 text-2xl">Lionel Messi</p>
                </div>
                <p class="text-gray-200">Paris Saint-Germain</p>
                <p class="text-sm text-gray-300">Rosario, Argentinië</p>
            </div>
        </div>

        <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-gray-700 rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-200 font-bold">Personal Info</h4>
                    <ul class="mt-2 text-gray-200">
                        <li class="flex border-y py-2">
                            <span class="font-bold w-24">Full name:</span>
                            <span class="text-gray-200">Lionel Andrés Messi Cuccittini</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Birthday:</span>
                            <span class="text-gray-200">24 Jun, 1987</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Debut:</span>
                            <span class="text-gray-200">Okt 2004</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Goals:</span>
                            <span class="text-gray-200">750</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Assists:</span>
                            <span class="text-gray-200">306</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Gele kaarten:</span>
                            <span class="text-gray-200">86</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Rode kaarten:</span>
                            <span class="text-gray-200">2</span>
                        </li>
                        <li class="flex items-center border-b py-2 space-x-2">
                            <span class="font-bold w-24">Clubs:</span>
                            <span class="text-gray-200">FC Barcelona en Paris Saint-Germain</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full 2xl:w-2/3">
            <div class="flex-1 bg-gray-700 rounded-lg shadow-xl p-8">
                <h4 class="text-xl text-gray-200 font-bold">About</h4>
                <p class="mt-2 text-gray-200">Lionel Messi is een Argentijnse voetballer die bekend staat om
                    zijn ongelooflijke balbeheersing en technische vaardigheden op het veld. Hij begon zijn carrière bij FC Barcelona
                    en heeft daar zijn hele carrière gespeeld, met uitzondering van zijn huidige club, Paris Saint-Germain. Messi heeft talloze prijzen
                    en onderscheidingen gewonnen, waaronder de Ballon d'Or en de Champions League, en wordt beschouwd als een van de grootste voetballers aller tijden.
                    Naast zijn voetbalprestaties staat hij ook bekend om zijn filantropische werk en zijn inzet voor het ondersteunen van kinderen met medische behoeften via zijn stichting,
                    de Leo Messi Foundation.</p>
            </div>

            <div class="mt-4">
                <canvas id="verticalBarChart"
                    style="display: block; box-sizing: border-box; height: 414px; width: 828px;" width="1656"
                    height="828"></canvas>
            </div>
        </div>
    </div>
    </div>

    <script src="messi.js"></script>
</body>

</html>