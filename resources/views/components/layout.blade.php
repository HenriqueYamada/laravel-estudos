<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }} </title>
</head>
<body>
    <h1>{{ $title }}</h1>

    {{ $slot }}  <!--tudo que estiver em components/layout.blade.php -> x-layout será colocado no $slot-->

</body>
</html>