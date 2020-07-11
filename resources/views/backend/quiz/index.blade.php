@extends('backend.layout.master')

@section('title','All Quizzes')

@section('content')
    
<div class="span9">
    @if (Session::has('message'))
    <div class="alert alert-success">{{Session::get('message')}}</div>
@endif
    <div class="module">
        <div class="module-head">
            <h3>All Quizzes</h3>
        </div>
        <div class="module-body">
            <table class="table table-striped ">
                
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Subject</th>
                            <th>Description</th>
                            <th>Duration</th>
                            <td></td>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($quizzes)>0)
                        @foreach ($quizzes as $key=>$quiz)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$quiz->name}}</td>
                            <td>{{$quiz->description}}</td>
                            <td>{{$quiz->minutes}}</td>
                            <td>
                                <a href="{{route('quiz.edit',[$quiz->id])}}"> <button  class="btn btn-primary">Edit</button> </a>
                            </td>
                            <td>
                               <form id="delete-form{{$quiz->id}}" action="{{route('quiz.destroy',[$quiz->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a href="#" onclick="if(confirm('Do you want to delete this ?')){
                                event.preventDefault();
                                document.getElementById('delete-form{{$quiz->id}}').submit()
                            }else{
                            event.preventDefault();
                            }
                            ">
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </a>
                            </td>
                        </tr>
                        @endforeach
                        
                        @else
                            <td>There is no Exams for you today</td>
                        @endif
                        
                    </tbody>
                </table>
        </div>
    </div>
</div>
    
@endsection