<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Passion+One|Courgette|Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>
<body>

    @include('admin.template.partials.nav')

    <section class="container">
        @yield('content')
    </section>

    <footer>
        <div class="container">
            <h5 class="text-center">Diseño y desarrollo del sitio realizado por Jhonatan C. Hurtado - @jhonatandev</h5>
        </div>
    </footer>

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>