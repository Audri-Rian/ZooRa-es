<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocate()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ crsf-token() }}">

    <title>{{ config('app.name','Laravel') }}/</title>

    @vite(['resources/css/app.css'])
</head>
<body>
    
    <div>
        <x-navbar/> 
    </div>


</body>
</html>