<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> @yield('title', 'Default') | Panel de Administración</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Passion+One|Courgette|Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}"/>
    <link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}"/>

</head>
<body>

    @include('admin.template.partials.nav')

    {{-- @include('admin.template.partials.errors')  --}}

    <section class="container">
        @yield('content')
    </section>

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>
    @yield('js')

</body>
</html>