<button

{{--    {{$attributes->merge(['class'=> 'down left', 'id'=>'right'])}} --}}

    type="{{$type}}">
    @foreach($attributes as $attribute => $value)
        @if($value === 'up')
            {{'down'}}
        @endif
    @endforeach



</button>

