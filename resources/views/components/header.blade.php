<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- facebook -->
        <meta property="og:image" content="img/logo-bela-vista-car.png"/>
        <meta property="og:image:type" content="img/png">
        <meta property="og:image:width" content="150">
        <meta property="og:image:height" content="150">
        <meta property="og:company" content="Bela Vista Car"/>
        <meta property="og:title" content="Bela Vista Car"/>
        <meta property="og:description" content="A Bela Vista Car é uma fabricante de auto-peças que fica sediada no estado de São Paulo e atua há mais de 13 anos neste mercado."/>
        <meta itemprop="url" property="og:url" content="https://www.belavistacar.com.br"/>
        <meta property="og:locale" content="pt_BR"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" sizes="194x194" href="" type="image/png">
        <link itemprop="url" rel="canonical" href="https://www.belavistacar.com.br"/>
         <!-- icon -->
        <link rel="icon" href="{{ asset('resources/img/logo-bela-vista-car.png') }}" sizes="32x32" type="image/png">
        <link rel="shortcut icon" href="{{ asset('resources/img/logo-bela-vista-car.png') }}" sizes="16x16" type="image/x-icon">
        <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" as="stylesheet">

        <!-- assets -->
        @vite(['resources/js/app.js', 'resources/sass/app.scss'])

        <title>Bela Vista Car - Porta Chaves para Carros</title>
    </head>
<body>

<nav class="navbar navbar-expand-lg bg-light px-3 mt-2">
    <div class="container-fluid border h-75 shadow-sm">
        <a class="navbar-brand navbar-brand-sm" href="#">
            <img src="{{ asset('images/logo-660-340.png') }}" class="my-2 d-inline-block" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Depoimentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Parceiros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Galeria</a>
                </li>
                <li class="nav-item">
                    <a href="https://www.instagram.com/portachavesbelavista/">
                        <i style="color:#000000;" class="fa fa-instagram fa-lg i-rede" target="_blank" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.facebook.com/BelaVistaCar/">
                        <i style="color:#000000;" class="fa fa-facebook fa-lg i-rede" target="_blank" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5511998962290" target="_blank">
                        <i style="color:#000000;" class="fa fa-whatsapp fa-lg i-rede" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
