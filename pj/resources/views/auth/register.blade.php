<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body class="antialiased">
       <form action="/login" method="GET">
        <h1>Registrar</h1>
            <label for="email">Email :</label>
            <input type="text" name="email">
            <label for="password">Password :</label>
            <input type="password" name="password"> 
            <label for="confirmedPassword">Password :</label>
            <input type="password" name="confirmedPassword"> 
            <input type="submit" value="Enviar">
       </form>
       <a href="/">Já tem um login?</a>
    </body>
</html>
