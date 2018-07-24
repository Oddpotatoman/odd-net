<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetAccess</title>
    <link rel="stylesheet" href="{{secure_asset('css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{secure_asset('css/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{secure_asset('css/thagame/Login-Form-Dark.css')}}">
    <link rel="stylesheet" href="{{secure_asset('css/thegame/styles.css')}}">
</head>

<body>
<div class="container justify-content-between" style="margin-top: 100px">
    <div class="col-lg-4 col-md-8 col-sm-10">
        <p style="margin-bottom: 20px;">This adds a cookie to your browser. The cookie is only used to identify you when you want to add give someone points
            or do any other types of administrative changes. It expires within 2 weeks. if you press add cookie you agree to the cookie being placed on your computer.</p>
        <p>For a guide on removing cookies check this link: <a href="https://www.lifewire.com/how-to-delete-cookies-2617981">Removing cookies, a lifewire link</a> </p>
        <div class="login-dark" style="background-color:rgba(71,93,98,0);background-repeat:no-repeat;background-size:cover;">
            <form method="post" action="/thegame/addcookie">
                {{csrf_field()}}
                <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Add Cookie</button></div>
            </form>
        </div>
    </div>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>