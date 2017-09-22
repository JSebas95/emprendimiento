<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distrivan</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header" ><a class="navbar-brand navbar-link" href="#inicio"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
            <img src="{{asset('img/logo.png')}}" width="160" height="50">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="#inicio">Inicio</a></li>
                    <li role="presentation"><a href="#productos">Nuestros Productos</a></li>
                    <li role="presentation"><a href="#mapa">Ubicación</a></li>
                    <li role="presentation"><a href="#contactanos">Contáctanos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="inicio">
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <video src="{{asset('img/video.mp4')}}" autoplay muted loop width="1400" height="700"></video>

            </div>


        </div>
    </div>
    @yield('contenido')
    <h1 align="center" class="text-center text-primary">Ubicacion</h1>
     
        <div class="container" align="Center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1987.880875530377!2d-75.6988075700274!3d4.81092212461211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x8e388745b181f391%3A0x1204295a678942b7!2sCra.+12+%2323-45%2C+Pereira%2C+Risaralda%2C+Colombia!3m2!1d4.8108846!2d-75.69835929999999!4m0!5e0!3m2!1ses!2ses!4v1506014469617" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
 
    <div class="container" id="contactanos">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <h1 class="text-center text-primary bigtitle"><strong>Contáctanos</strong></h1>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="name" type="text" placeholder="Apellido" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Correo Electronico" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Celular" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Ingresa tu mensaje aqui, te responderemos lo antes posible." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
                        <footer class="wrapper style1 align-center">
                        <div class="inner" align="center">
                            <ul class="icons">

                               <a href="https://www.facebook.com/#" target="_blank"><img src="{{asset('img/face.png')}}"  width="50" height="50" alt="Facebook" style="margin:0 5px 0 0;" /></a>
                               <a href="https://twitter.com/#" target="_blank"><img src="{{asset('img/twt.png')}}"  width="50" height="50" alt="Twitter" style="margin:0 5px 0 0;" /></a>
                               <a href="https://www.instagram.com/#" target="_blank"><img src="{{asset('img/ins.jpg')}}"  width="50" height="50" alt="Instagram" style="margin:0 5px 0 0;" /></a>
                            </ul>
                            
                        </div>
                    </footer>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!--Si se extiende esta plantilla para otra
    se pueden utilzar scripts  para trabajar con javascript-->
    @stack('scripts')
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>