
<div class="container">
<button class="btn btn-primary"

{{--    {{$attributes->merge(['class'=> 'down left', 'id'=>'right'])}} --}}

    type="{{$type}}">
    @foreach($attributes as $attribute => $value)
           {{$checkClass($value)}}
    @endforeach



</button>

</div>
