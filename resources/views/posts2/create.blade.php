@extends('layouts2.master')
{{--{{$errors}}--}}
{{--@foreach($errors->all() as $error)--}}
{{--    {{$error}}--}}
{{--@endforeach--}}

{{--@if($errors->any())--}}
{{--    @foreach($errors->all() as $error)--}}
{{--        {{$error}}--}}
{{--    @endforeach--}}
{{--@endif--}}
@section('content')



    <div class="col-md-6 card p-5">
        <form method="post" action="{{route('posts.store')}}">
            @csrf
            <div class="d-flex justify-content-center">
                <h4 class="text-center alert alert-info px-4">Create a Post</h4>
            </div>
            <div class="mb-3">
                <label for="exampleInputTitle" class="form-label">Title</label>
                <input value="{{old('title')}}" name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputTitle" aria-describedby="titleHelp">
                <div id="titleHelp" class="invalid-feedback">
                    @error('title')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="textarea" class="form-label">Description</label>
                <textarea  name="body" class="form-control @error('body') is-invalid @enderror" id="body" cols="30" rows="3" aria-describedby="bodyFeedback">{{old('body')}}</textarea>
                <div id="bodyFeedback" class="invalid-feedback">
                   @error('body')
                    {{$message}}
                    @enderror
                </div>
            </div>


            {{--        <div class="mb-3">--}}
            {{--            <label for="exampleInputPassword1" class="form-label">Password</label>--}}
            {{--            <input type="password" class="form-control" id="exampleInputPassword1">--}}
            {{--        </div>--}}
            {{--        <div class="mb-3 form-check">--}}
            {{--            <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
            {{--            <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
            {{--        </div>--}}
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>





    <script>

       document.addEventListener('DOMContentLoaded', function(event) {

           axios.post('{{route('posts.store')}}', {title: '', body: ''}).then(function(response){
               console.log(response)
           })
       })


    </script>







@endsection
