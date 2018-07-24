<!doctype html>
<link rel="stylesheet" href="{{ secure_asset('css/thegame/indexe.css') }}">

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>THE GAME</title>
</head>
<body class="thegame-score-body">
<?php $count = 1; ?>
@foreach ($all as $area => $points)
    <div class="tableContent">
        <p class="tableHeaderTG">{{$area}}</p>
        <p class="scoreTG">{{$points['total']}}</p>
        @foreach($points as $key => $point)
            <?php if($key != 'total') { ?>
            <div class="pointTGcontainer <?php if($point->points >= 0) {echo "good";}else{echo "bad";}?> "><div class="divPoints"><a class="pointTGcontainerPoint">{{$point->points}} points</a></div><div class="divBody"><a class="pointTGcontainerBody"> {{$point->body}}</a></div>
            </div>
            <?php } ?>
        @endforeach
    </div>
@endforeach
</table>

</body>
</html>