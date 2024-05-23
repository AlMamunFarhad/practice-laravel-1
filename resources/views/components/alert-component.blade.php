@props(['type' => 'info','message'])
{{--@aware(['master'])--}}
<div class="alert alert-{{$type}}" role="alert">
    <h1>{{$message}}</h1>
</div>
