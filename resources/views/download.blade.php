<form name="pass" method="POST" action="/secretdownload/auth/{{$hash}}">
    {{csrf_field()}}
    <div class="">
        <h2>Supply Password</h2>
        <input type="text" class="" id="secretinput" name="secretinput" placeholder="">
    </div>
    <button type="submit" class="thegame-form-button">Submit</button>
</form>