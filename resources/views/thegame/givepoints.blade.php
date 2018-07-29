<!doctype html>
<link rel="stylesheet" href="{{ secure_asset('css/thegame/indexe.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/errors.css') }}">
<link rel="stylesheet" href="{{secure_asset('css/bootstrap/bootstrap.css')}}">



<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <title>THE GAME</title>
</head>
<body class="thegame-body">

<div class="container justify-content-between" style="margin-top: 100px">

<div class="col-8" style="text-align: center">

    <div class="container-thegame-text">
        <p class="text-thegame-title"><span>THE GAME POINTS 2k{{date('y')}}</span></p>
    </div>

    <form name="addarea-thegame" method="POST" action="/thegame/givepoints">

        <div class="form-group">
            <label for="inputGroupSelect02">Options</label>

            <select class="custom-select" id="inputGroupSelect02" id="areaid" name="areaid" placeholder="Velg omeråde">
                @foreach($areas as $area)
                    <option value={{$area->id}}>{{$area->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Poeng</span>
            </div>
            <input type="text" class="form-control" placeholder="Poeng" name="points" id="points" aria-label="Poeng" aria-describedby="basic-addon1">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Tekst som vises</label>
            <input type="text" class="form-control" name="body" id="body" placeholder="Tekst som vises">
        </div>

        <button class="btn btn-primary" type="submit">Button</button>
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
</div>
</body>
</html>