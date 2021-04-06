@extends('layout.app')

@section('content')
<div class="container">
    <h1>student</h1>
     @if(count($student) >=1)
        @foreach ($student as $students)
            {{$students->id}}
            <li>{{$students->name}}</li>
            
        @endforeach
    @else

        <p>Not found</p>
        
        
    @endif
</div>


    
@endsection