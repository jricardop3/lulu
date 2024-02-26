<!DOCTYPE html>
<html lang="pt-br">

<head>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alice&family=BIZ+UDMincho&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Gulzar&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        

    </head>

<body style="  background-image: linear-gradient(to top, #ffb3e7, #ffb4d0, #ffbbbb, #ffc4ac, #ffcfa6, #ffd4a5, #ffd9a4, #ffdfa4, #ffdfa4, #ffdfa4, #ffdfa4, #ffdfa4);">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alice&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Gulzar&display=swap')
    </style>
    @component('site.components.nav')
    @endcomponent
    <!-- yield precisa do section vindo da pagina correspondente. liga com extends na pagina correspondente. -->
    @yield('conteudo')
    <!--  componet no singular, necessida da pasta components no plural. -->
    @component('site.components.footer')
    @endcomponent
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    @stack('iconcard')
    <script>
        AOS.init();
    </script>
</body>

</html>