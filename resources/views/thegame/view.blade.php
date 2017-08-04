<!doctype html>
<link rel="stylesheet" href="{{ asset('css/thegame/indexe.css') }}">

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>THE GAME</title>
</head>
<body class="thegame-score-body">
@foreach ($all as $area => $points)

    <div class="thegame-contain-score">
        <div class="thegame-score-title">
            <h1>{{$area}}</h1>
        </div>
        <div class="thegame-total-score-contain">
            <h1 class="thegame-show-total-score">{{$points['total']}}</h1>
        </div>
        <div class="thegame-score-points">
            @foreach($points as $key => $point)
                <div class="thegame-point">
                    @if($key != 'total')
                        <h3 class="thegame-score-neutral"><span @if($point->points > 0)class="thegame-score-good" @endif
                        @if($point->points < 0) class="thegame-score-bad" @endif
                            >{{$point->points}}</span>{{' '.$point->body}}</h3>
                        @endif
                </div>
                @endforeach
        </div>
    </div>

    @endforeach
</body>
</html>