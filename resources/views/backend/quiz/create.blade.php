@extends('backend.layout.master')

@section('title','create quiz')

@section('content')
    <div class="span9">
        <div class="content">


            @if (Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif

            <form action="{{route('quiz.store')}}" method="POST">@csrf
            <div class="module">
                <div class="module-head">
                    <h3>Create Quiz</h3>
                </div>
                <div class="module-body">
                    <div class="control-group">
                        <label class="control-label" >Subject name</label>
                        <div class="controls">
                            <input type="text" name="name" class="span8" placeholder="Examination subject name" value="{{old('name')}}"><br>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong >{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <label class="control-label" >Quiz Description</label>
                        <div class="controls">
                           <textarea name="description" class="span8">
                               
                           </textarea><br>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong >{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <label class="control-label" >Quiz Duration</label>
                        <input type="text" name="minutes" class="span8" value="{{old('minutes')}}"><br>
                        @error('minutes')
                        <span class="invalid-feedback" role="alert">
                            <strong >{{ $message }}</strong>
                        </span>
                    @enderror
                        <div class="controls">
                           <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
@endsection