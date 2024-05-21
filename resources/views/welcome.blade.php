<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
{{--    <body>--}}
{{--    <a href="/">HOME Page</a>--}}
{{--    <br>--}}
{{--    <a href="{{route('contact.info')}}">CONTACT</a>--}}
{{--    <br>--}}
{{--    <a href="/profile">Profile</a>--}}
{{--    <form method="post" action="/photo/1" id="example-csrf">--}}
{{--      @csrf--}}
{{--        @method('PATCH')--}}
{{--        <button type="submit">update</button>--}}
{{--    </form>--}}

{{--<form action="/colors" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" value="green" name="colors[]">--}}
{{--    <input type="text" value="red" name="colors[]">--}}
{{--    <input type="text" value="blue" name="colors[]">--}}
{{--    <input type="text" value="yellow" name="colors[]">--}}
{{--    <input type="text" value="brown" name="colors[]">--}}
{{--    <button type="submit">Submit</button>--}}
{{--</form>--}}

{{--<form action="/date" method="post">--}}
{{--    @csrf--}}
{{--    <input type="date" name="appointment">--}}
{{--    <button type="submit">Submit</button>--}}
{{--</form>--}}
<div class="container ">
    <div class="row">
        <div class="col-lg-12 py-5">

{{--            <div class="col-md-6 py-5 offset-md-3">--}}
{{--                <form action="/form/custom" method="post">--}}
{{--                    <form>--}}
{{--                        @csrf--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="exampleInputEmail1" class="form-label">Email address</label>--}}
{{--                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
{{--                        </div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="exampleInputPassword1" class="form-label">Password</label>--}}
{{--                            <input name="password" type="password" class="form-control" id="exampleInputPassword1">--}}
{{--                        </div>--}}
{{--                        <div class="mb-3 form-check">--}}
{{--                            <input name="checkBox" type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                            <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--                        </div>--}}
{{--                        <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                    </form>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--            <form action="/flash" method="post">--}}
{{--                @csrf--}}
{{--                <input type="email" name="email" placeholder="Enter your email address" value="{{old('email')}}">--}}
{{--                <input type="text" name="username" placeholder="Enter your username" value="{{old('username')}}">--}}
{{--                <button type="submit" class="btn btn-success btn-sm">Submit</button>--}}
{{--            </form>--}}
{{--            {{old('email')}}--}}
{{--            {{old('username')}}--}}

{{--            <h1>Json Data</h1>--}}
{{--            @vite('resources/js/app.js');--}}
{{--            <script>--}}
{{--                document.addEventListener('DOMContentLoaded', function (){--}}
{{--                    axios.get('/json').then(function (data){--}}
{{--                        console.log(data.data.name);--}}
{{--                    })--}}
{{--                })--}}
{{--            </script>--}}

{{--            {{microtime(true) - LARAVEL_START}}--}}
{{--    </div>--}}
{{--</div>--}}



{{--@if(session('user'))--}}
{{--    <div>--}}
{{--        <h1>My name is farhad</h1>--}}
{{--    </div>--}}
{{--@endif--}}


{{--    @if($count === 20)--}}
{{--        <h1>It is equel 20</h1>--}}

{{--    @else--}}
{{--        <h1>It is NOT equel 20</h1>--}}
{{--    @endif--}}

{{--    @unless($count === 0)--}}
{{--        <h1>It is FALSE</h1>--}}
{{--    @endunless--}}

{{--    @isset($count)--}}
{{--        <h1>It is SET</h1>--}}
{{--    @endisset--}}

{{--    @empty($count)--}}
{{--        <h1>It is EMPTY</h1>--}}
{{--    @endempty--}}


{{--    @switch($count)--}}

{{--        @case(20)--}}
{{--           <h1>It is 20</h1>--}}
{{--        @break--}}
{{--        @case(10)--}}
{{--            <h1>It is 10</h1>--}}
{{--       @break--}}
{{--       @default--}}
{{--            <h1>It is DEFAULT</h1>--}}
{{--    @endswitch--}}


{{--    @for($count = 1; $count <= 10; $count++)--}}

{{--                <h1>Current loop iteration {{$count}}</h1>--}}
{{--    @endfor--}}

{{--    @while($count <= 20)--}}
{{--        <h1>{{$count}}</h1>--}}
{{--       <?php $count++ ?>--}}
{{--    @endwhile--}}

{{--@foreach($users as $user)--}}

{{--    <h1>{{$user[1]}}</h1>--}}

{{--@endforeach--}}

{{--    @forelse($users as $user)--}}
{{--                <h1>{{$user[1]}}</h1>--}}
{{--     @empty--}}
{{--                <h1>NO users</h1>--}}
{{--    @endforelse--}}
{{--@foreach($users as $user)--}}
{{--    {{$user[0]}}--}}
{{--    @if($user[0] === 'Farhad')--}}
{{--        <h1>Hi Farhad</h1>--}}
{{--    @endif--}}

{{--    @if($user[0] === 'Farhad')--}}
{{--        @continue--}}
{{--    @endif--}}
{{--    @if($user[0] === 'Farhad')--}}
{{--        @break--}}
{{--    @endif--}}
{{--@endforeach--}}

{{--    @foreach($datas as $data)--}}
{{--        @if($data == 2)--}}
{{--            @continue--}}
{{--            @break--}}
{{--        @endif--}}

{{--            @continue($data === 5)--}}
{{--            @break($data === 5)--}}
{{--      <h1>{{$data}}</h1>--}}
{{--    @endforeach--}}

@foreach($datas as $data)

    @if($loop->first)
        <h1>Hi I am First {{$data}}</h1>
                    <br>
    @endif
        @if($loop->last)
            <h1>Hi I am Last {{$data}}</h1>
            <br>
    @endif
        @if($loop->even)
            <h1>Hi I am Even {{$data}}</h1>
        @endif

        @if($loop->odd)
            <h1>Hi I am ODD {{$data}}</h1>
         @endif

@endforeach

{{--    @foreach($datas as $data)--}}
{{--        @foreach($data->user as $user)--}}
{{--            {{$loop->parent->first}}--}}
{{--        @endforeach--}}
{{--    @endforeach--}}

            <style>
                .red{
                    color: red;
                }
                .blue{
                    color: blue;
                }
            </style>
            @php
            $isActive = true;
            $isNotActive = false;
         @endphp

    <div @class(['red'=> $isActive, 'blue'=> $isNotActive])>
      <h1 @style(['background: yellow'=> $isActive])>Conditional Class Check</h1>
    </div>


{{--       @foreach($datas as $data)--}}
{{--           @include('listItem')--}}
{{--       @endforeach    --}}

@php
$active = true;
$notActive = false;
 @endphp


{{--           @includeWhen($active, 'listItem', ['extra' => 'This is extra data True'])--}}
{{--           @includeUnless($notActive, 'listItem', ['extra' => 'This is extra data False'])--}}


{{--@includeUnless($notActive, 'listItem', ['extra' => 'This is extra data False'])--}}
{{--@foreach($datas as $data)--}}
{{--    @includeFirst(['nav','welcome', 'listItem'],['extra' => 'This is extra data'])--}}
{{--@endforeach--}}
@each('listItem', $datas, 'data')

            <br>
            <br>
            <br>
            @extends('layouts.master')
            @section('content')

                <h1>Welcome</h1>

            @show

            @section('sidebar')
                <h1>This is sidebar OK</h1>
            @show




        </div>
    </div>
</body>
</html>
