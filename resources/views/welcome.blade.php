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
    <body>
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


    @if($count === 20)
        <h1>It is equel 20</h1>

    @else
        <h1>It is NOT equel 20</h1>
    @endif

    @unless($count === 0)
        <h1>It is FALSE</h1>
    @endunless

    @isset($count)
        <h1>It is SET</h1>
    @endisset

    @empty($count)
        <h1>It is EMPTY</h1>
    @endempty


    @switch($count)

        @case(20)
           <h1>It is 20</h1>
        @break
        @case(10)
            <h1>It is 10</h1>
       @break
       @default
            <h1>It is DEFAULT</h1>
    @endswitch


    @for($count = 1; $count <= 10; $count++)

                <h1>Current loop iteration {{$count}}</h1>
    @endfor

    @while($count <= 20)
        <h1>{{$count}}</h1>
       <?php $count++ ?>
    @endwhile

    </body>
</html>
