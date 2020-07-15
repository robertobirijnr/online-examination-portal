@extends('backend.layout.master')

@section('title','Set Questions')

@section('content')
    <div class="span9">
        <div class="content">


            @if (Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif

            <form action="{{route('question.store')}}" method="POST">@csrf
            <div class="module">
                <div class="module-head">
                    <h3>Set Questions</h3>
                </div>
                <div class="module-body">
                    <div class="control-group">
                        <label class="control-label" >Select Subject</label>
                        <div class="controls">
                          <select class="span8" name="quiz">
                              @foreach (App\Quiz::all() as $quiz)
                              <option value="{{$quiz->id}}">{{$quiz->name}}</option>
                              @endforeach
                          
                          </select>
                        
                    </div>
                </div>
           
                    <div class="control-group">
                        <label class="control-label" >Qustion name</label>
                        <div class="controls">
                            <input type="text" name="question" class="span8" placeholder="type question here" value="{{old('question')}}"><br>
                            @error('question')
                            <span class="invalid-feedback" role="alert">
                                <strong >{{ $message }}</strong>
                            </span>
                        @enderror
                        </div> 
                 </div>
                 <div class="control-group">
                    <label class="control-label" >Options</label>
                    <div class="controls">
                        @for ($i = 0; $i < 4; $i++)
                        <input type="text" name="options[]" class="span7 @error('name') border-red @enderror" placeholder="option{{$i+1}}" required >
                        <input type="radio" name="correct_answer" value="{{$i}}"> <span>Is correct answer</span>
                        @endfor
                    </div>
                        @error('question')
                        <span class="invalid-feedback" role="alert">
                            <strong >{{ $message }}</strong>
                        </span>
                    @enderror
                     
                 </div>
                 <div class="controls">
                    <button type="submit" class="btn btn-success">Submit</button>
                 </div>
            </div>
        </form>
        </div>
    </div>
    
@endsection