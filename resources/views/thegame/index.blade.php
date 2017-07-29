<!doctype html>
<link rel="stylesheet" href="{{ asset('css/thegame/indexe.css') }}">

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <title>index</title>
</head>
<body class="body page-index clearfix">
<div class="container main body clearfix">
    <div class="container-thegame-text">
        <p class="text-thegame-title"><span>THE GAME</span></p>
    </div>
    <div class="container-buttons-thegame">
        <button onClick="window.location='/thegame/addarea';" id="addarea" class="button-thegame">Add Area</button>
        <button onClick="window.location='/thegame/addpoint';" id="givepoints" class="button-thegame">Give Points</button>
        <button onClick="window.location='/thegame/view';" id="showscore" class="button-thegame">Show Score</button>
    </div>
</div>
</body>
</html>