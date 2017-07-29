<!doctype html>
<link rel="stylesheet" href="{{ asset('css/thegame/indexe.css') }}">
<link rel="stylesheet" href="{{ asset('css/errors.css') }}">


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <title>THE GAME</title>
</head>
<body class="thegame-body">
<div class="container-thegame-text">
    <p class="text-thegame-title"><span>THE GAME POINTS 2k{{date('y')}}</span></p>
</div>
<div class="container-thegame-form-addarea">
    <form name="addarea-thegame" method="POST" action="/thegame/givepoints">
        {{csrf_field()}}

        <div class="thegame-form-group">
            <h2>Til omeråde</h2>
            <select type="text" class="thegame-form-selector" id="areaid" name="areaid" placeholder="Velg omeråde">
                @foreach($areas as $key => $area)
                <option value={{$key+1}}>{{$area}}</option>
                    @endforeach
            </select>
        </div>

        <div class="thegame-form-group">
            <h2>Poeng</h2>
            <input type="text" class="thegame-form-text" name="points" id="points"></input>
        </div>

        <div class="thegame-form-group">
            <h2>Tekst som vises</h2>
            <input type="text" class="thegame-form-text" name="body" id="body"></input>
        </div>

        <div class="thegame-form-group">
            <h2>Gitt av</h2>
            <input type="text" class="thegame-form-text" name="bywho" id="bywho"></input>
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