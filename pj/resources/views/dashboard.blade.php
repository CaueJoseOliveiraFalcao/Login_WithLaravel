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
        <style>
            .alert-success{
            background-color: green;
            color: white;
            width: 250px;
}
        </style>
    </head>
    <body class="antialiased">
       Bem vindo {{$user->name}}

       @if (session("success"))
           <div class="alert-success">
            {{session('success')}}
           </div>
        @endif
        <!--Permitions-->
        <h1>Voce tem as seguintes permissoes</h1>
        @if($user->permition == 'bronze')
           <button>Bronze</button>
        @endif
        @if($user->permition == 'prata')
           <button>Prata</button>
        @endif
        @if($user->permition == 'ouro')
           <button>Ouro</button>
        @endif
    </body>

</html>
