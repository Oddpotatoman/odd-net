<script>
    var result;
    function getNextResult() {
        jQuery.ajax({
            type: "POST",
            url: '/quotes/getquote',
            dataType: 'json',

            success: function (obj, textstatus) {
                if( !('error' in obj) ) {
                   result = obj.result;
                }
                else {
                    console.log(obj.error);
                }
            }
        });
    }

</script>

<body style="background-image: url({{ asset('img/WP_000030.png') }}); background-repeat: no-repeat, repeat; background-size:cover; height: 100%">
    <div class="container">

    </div>
</body>