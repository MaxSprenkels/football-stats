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
                <img src="https://cdn.wallpapersafari.com/84/77/fSBshu.jpg"
                    class="w-full h-full rounded-tl-lg rounded-tr-lg">
            </div>
            <div class="flex flex-col items-center -mt-20">
                <img src="https://logowik.com/content/uploads/images/premier-league3330.jpg"
                    class="w-40 border-4 border-white rounded-full">
                <div class="flex items-center space-x-2 mt-2">
                    <p class="text-gray-100 text-2xl">Premier League</p>
                </div>
                <p class="text-gray-200">England</p>
                <p class="text-sm text-gray-300">Founded: February 20, 1992</p>
            </div>
        </div>
        <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
  <div class="w-full flex flex-col 2xl:w-1/3">
    <div class="flex-1 bg-gray-700 rounded-lg shadow-xl p-8">
      <h4 class="text-xl text-gray-200 font-bold">Premier League Info</h4>
      <ul class="mt-2 text-gray-200">
        <li class="flex border-y py-2">
          <span class="font-bold w-24">Number of teams:</span>
          <span class="text-gray-200">20</span>
        </li>
        <li class="flex border-b py-2">
          <span class="font-bold w-24">Current champion:</span>
          <span class="text-gray-200">Manchester City</span>
        </li>
        <li class="flex border-b py-2">
          <span class="font-bold w-24">Top scorer:</span>
          <span class="text-gray-200">Alan Shearer</span>
        </li>
        <li class="flex border-b py-2">
          <span class="font-bold w-24">Most assists:</span>
          <span class="text-gray-200">Ryan Giggs</span>
        </li>
        <li class="flex border-b py-2">
          <span class="font-bold w-24">All-time top scorer:</span>
          <span class="text-gray-200">Alan Shearer</span>
        </li>
        <li class="flex border-b py-2">
          <span class="font-bold w-24">Most appearances:</span>
          <span class="text-gray-200">Ryan Giggs</span>
        </li>
        <li class="flex border-b py-2">
          <span class="font-bold w-24">Most yellow cards:</span>
          <span class="text-gray-200">Lee Cattermole</span>
        </li>
        <li class="flex border-b py-2">
          <span class="font-bold w-24">Most red cards:</span>
          <span class="text-gray-200">Lee Cattermole</span>
        </li>
        <li class="flex border-b py-2">
          <span class="font-bold w-24">Most clean sheets:</span>
          <span class="text-gray-200">Peter Schmeichel</span>
        </li>
        </div>
  </div>
        </div>
        <div class="flex flex-col w-full 2xl:w-2/3">
            <div class="flex-1 bg-gray-700 rounded-lg shadow-xl p-8">
                <h4 class="text-xl text-gray-200 font-bold">About</h4>
                <p class="mt-2 text-gray-200">De Premier League is de hoogste professionele voetbalcompetitie in Engeland,
                    bestaande uit 20 teams die elk twee keer tegen elkaar spelen gedurende het seizoen, wat loopt van augustus tot mei.
                    Het is een van de meest populaire en meest bekeken voetbalcompetities ter wereld, met enkele van de meest bekende clubs ter wereld zoals
                    Manchester United, Liverpool, Arsenal en Chelsea. Elk seizoen strijden de clubs om de felbegeerde titel van Premier League-kampioen en
                    om zich te kwalificeren voor Europese competities zoals de Champions League en Europa League. De competitie staat bekend om zijn snelle en
                    fysieke speelstijl en trekt enkele van de beste spelers van over de hele wereld aan.
</p>
            </div>

            <div class="mt-4">
                <canvas id="verticalBarChart"
                    style="display: block; box-sizing: border-box; height: 414px; width: 828px;" width="1656"
                    height="828"></canvas>
            </div>
        </div>
    </div>
    </div>
    <script src="pl.js"></script>
</body>

</html>