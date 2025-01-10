@extends('layouts.main')

@section('title', 'Hotel Pinguim - GPS')


@section('content')
@section('topnav')
@endsection
<head>
<link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <style>

        .header_map {
            background-color: #00796b;
            color: white;
            padding: 15px;
            text-align: center;
        }
        #map {
            height: 50vh; /* Diminuído o tamanho do mapa */
            width: 100%;
            border: 1px solid #004d40;
        }
        .info {
            position: relative;
           width: 320px;
            background-color: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        .btn_map {
            margin-top: 10px;
            padding: 10px;
            background-color: #004d40;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn_map:hover {
            background-color: #00796b;
        }
        nav .btn_map {
            margin: 0 10px;
        }
        .p_map{
            color: black;
        }
    </style>
</head>
<body>
    
    <header class="header_map">
        <h2>Hotel Pinguim</h2>
        <p>Seu GPS</p>

                <div class="info">
        <p id="userLocation" class="p_map">Sua localização: aguardando...</p>
        <button id="getRoute" class="btn_map" style="display:none;">Rota para o Hotel</button>
    </div>
    </header>




    
    <div id="map">
        <iframe 
            src="https://www.openstreetmap.org/export/embed.html?bbox=-49.1345%2C-17.7373%2C-49.1325%2C-17.7359&layer=mapnik&marker=-17.7366%2C-49.1335" 
            width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
    </div>

    <script>
        let userLat, userLng;

        function showLocationButton() {
            document.getElementById("getRoute").style.display = 'block';
        }

        document.getElementById("getRoute").addEventListener("click", () => {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(position => {
                    userLat = position.coords.latitude;
                    userLng = position.coords.longitude;
                    window.open(`https://www.google.com/maps/dir/?api=1&origin=${userLat},${userLng}&destination=-17.7366,-49.1335`, '_blank');
                }, () => {
                    handleLocationError(true);
                });
            } else {
                handleLocationError(false);
            }
        });

        function handleLocationError(browserHasGeolocation) {
            document.getElementById("userLocation").innerText = browserHasGeolocation ? 
                "Erro: O serviço de geolocalização falhou." : 
                "Erro: Seu navegador não suporta geolocalização.";
        }

        window.onload = function() {
            document.getElementById("userLocation").innerText = "Descubra como chegar em seu Hotel Favorito!.";
            showLocationButton();
        };
    </script>

@endsection