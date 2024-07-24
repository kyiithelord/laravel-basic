<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- {{$data['career']}} --}}
    {{-- <h1>He is {{$name}}.He is {{$age}} years old.He is {{$career}} </h1> --}}

    {{-- get data from (array data method) --}}
    {{-- <h1>He is {{$data['name']}}. He is {{$data['age']}} ole. He is a {{$data['career']}} </h1> --}}

    {{-- how to get data from html tag --}}
    {{-- {!! $htmlString !!} --}}

    {{-- <h1>Name List</h1>
    <ul>
        @foreach ($names as $name)
        <li> {{$name}} </li>

        @endforeach
    </ul> --}}
{{--
    {{$age}}

    @if ($age == 18)
        <p>Your are eighteen.</p>
    @elseif ($age >= 18 && $age < 30)
        <p>Your are youth.</p>
    @elseif ($age > 30)
        <p>Your are man.</p>
    @else
        <p>You are child.</p>

    @endif --}}


    {{-- @php
        $count = 0;
    @endphp
    <ul>
        @for ($count = 0; $count < 25; $count ++)
        <li> {{$count}} </li>
        @endfor
    </ul> --}}

    {{-- @php
        $count = 0;
    @endphp
    <ul>
        @while ($count < 10)
            <li> {{$count}} </li>
            @php
                $count ++;
            @endphp
        @endwhile
    </ul> --}}


    @php
        $fruit = 'banana';
    @endphp

    @switch($fruite)
        @case('apple')
            <p>This is an apple</p>
            @break
        @case('orange')
            <p>This is an orange</p>
            @break
        @case('mango')
            <p>This is mango</p>
            @break
        @default
            <p>This is no fruit.</p>
    @endswitch


</body>
</html>
