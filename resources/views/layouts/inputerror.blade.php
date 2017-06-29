<link rel="stylesheet" href="{{ asset('css/errors.css') }}">

@if(count($errors))
    <div class="error-report">
        <ul>
            @foreach($errors->all() as $error)

                <li>{{$error}}</li>

            @endforeach
        </ul>
    </div>
@endif