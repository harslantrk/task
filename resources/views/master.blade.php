<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <title>Laravel</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> Ziyaretçi Sayfası</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Ziyaretçi Ekle</a></li>
                <li><a href="/tum-ziyaretciler">Tüm Ziyaretçiler</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
@yield('content')
<script type="text/javascript" src="/js/jquery-2.1.0.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script>
    function save()
    {
        var name = document.getElementById('inputName').value;
        var email = document.getElementById('inputEmail').value;
        var phone = document.getElementById('inputPhone').value;
        if(name==""){
            alert("Lütfen 'Ad Soyad' Alanını Doldurun");
        }
        else if(email==""){
            alert("Lütfen 'E Mail' Alanını Doldurun");
        }
        else if(phone==""){
            alert("Lütfen 'Telefon' Alanını Doldurun");
        }
        else{
            $.ajax({
                url: '/addGuest',
                type: 'POST',
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                cache: false,
                data: {name: name, email:  email, phone:  phone },
                success: function(data){
                    $('#inputName').val("");
                    $('#inputEmail').val("");
                    $('#inputPhone').val("");
                    document.getElementById('guestResults').innerHTML="<div class=\"col-md-12 tab\"><h3 class=\" alert-success\">Ziyaretçi Başarıyla Eklendi.</h3></div>";
                },
                error: function(jqXHR, textStatus, err){}
            });
        }
    }
</script>
</body>
</html>