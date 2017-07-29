<link rel="stylesheet" href="{{ asset('index.css') }}">

@if(count($errors))
    <div class="error-report">
        <ul>
            @foreach($errors->all() as $error)

                <li>{{$error}}</li>

            @endforeach
        </ul>
    </div>
@endif