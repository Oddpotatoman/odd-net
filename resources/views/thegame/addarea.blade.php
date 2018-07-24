<!doctype html>
<link rel="stylesheet" href="{{ secure_asset('css/thegame/indexe.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/errors.css') }}">


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <title>THE GAME</title>
</head>
<body class="thegame-body">
<div class="container-thegame-text">
    <p class="text-thegame-title"><span>THE GAME 2k{{date('y')}}</span></p>
</div>
<div class="container-thegame-form-addarea">
    <form name="addarea-thegame" method="POST" action="/thegame/addarea">
        {{csrf_field()}}
        <div class="thegame-form-group">
            <h2>Navngi område</h2>
            <input type="text" class="thegame-form-text" id="areaname" name="areaname" placeholder="areaname">
        </div>
        <div class="thegame-form-group">
            <h2>Ansvarlig</h2>
            <input type="text" class="thegame-form-text" name="responsible" id="responsible"></input>
        </div>

        <button type="submit" class="thegame-form-button">Submit</button>
    </form>
    @if(count($errors))
        <div class="error-report">
            <ul>
                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>

                @endforeach
            </ul>
        </div>
    @endif
</div>
</body>
</html>