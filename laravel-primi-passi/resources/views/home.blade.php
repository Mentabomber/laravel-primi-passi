<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>homepage</title>

</head>

<body>
    <h1> Hello {{ $name }} !</h1>

    <ul>
        @foreach ($datas as $data)
            <li> <a href="{{ $data }}"> {{ $data }}</a> </li>

            {{-- alternativa
            <a href="{{ route('home') }}">HOME</a> --}}
        @endforeach
        <a href="{{ route('home') }}">HOME</a>
    </ul>


</body>

</html>
