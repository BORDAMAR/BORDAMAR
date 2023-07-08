<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


  
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 
            'resources/js/app.js',
            'resources/sass/index.sass',
            'resources/uikit/css/uikit-rtl.css',
            'resources/uikit/css/uikit-rtl.min.css',
            'resources/uikit/css/uikit.css',
            'resources/uikit/css/uikit.min.css',
            'resources/uikit/js/uikit-icons.js',
            'resources/uikit/js/uikit-icons.min.js',
            'resources/uikit/js/uikit.js',
            'resources/uikit/js/uikit.min.js'])



<div class="uk-position-relative">
    
    
    <img class="centro img-fluid" src="{{ asset('imagenes/index/baner1.png') }}">
        
    <div class="uk-overlay uk-overlay-default uk-position-top">
    
            
        <div class="uk-position-top">

            <div class="uk-container uk-position-top-right">


                    <img class="uk-align-left medidas_tel" src="{{ asset('imagenes/index/telefono.png') }}">
                    <p class="uk-column-span fuente_menu">612 233 7987</p>                     

                
            </div>

            <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarNav">

                                    <ul class="uk-navbar-nav navbar-nav">                                            
                                            
                                            <li class="uk-active nav-item">
                                                <a href="#"><p class="linea_animacion fuente_menu">Inicio</p></a>
                                            </li>
                                            
                                            <li class="uk-active nav-item">
                                                <a href="#"><p class="linea_animacion fuente_menu">Servicios</p></a>
                                            </li>
                                            
                                            <li class="uk-active nav-item">
                                                <a href="#"><p class="linea_animacion fuente_menu">Productos</p></a>
                                            </li>

                                            <li class="uk-active nav-item">
                                                <a href="#"><p class="linea_animacion fuente_menu">Cotización</p></a>
                                            </li>
                                            
                                            <li class="uk-active nav-item">
                                                <a href="#"><p class="linea_animacion fuente_menu">Galeria</p></a>
                                            </li>

                                            <li class="uk-active nav-item">
                                                <a href="#"><p class="linea_animacion fuente_menu">Contacto</p></a>
                                            </li>

                                            <li class="uk-active nav-item">
                                                <a href="#"><p class="linea_animacion fuente_menu">Ubicación</p></a>
                                            </li>
                                        
                                    </ul>        
                                </div>   
                                
                        </div>
                </nav>  


        
        </div>

    </div>   

</div>

</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
