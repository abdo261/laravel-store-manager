@props(['title','category'=>null,'product'=>null,'commande'=>null])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/smartphone.png') }}">
    <title>{{ env('APP_NAME') }} | {{ $title }}</title>
</head>

<body>
    <div class="left shadow-lg">
       <x-sidebar :category="$category" :product="$product" :commande="$commande" />
    </div>
    <div class="right">
       <x-header/>
        <main class="main p-3">{{ $slot }} <i class="fa-solid fa-arrow-right"></i></main>
    </div>







</body>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/index.js') }}"></script>

</html>
