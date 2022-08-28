@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Questions</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! -->

                    @foreach ($questions as $question)
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mt-0">{{$question->title }}</h3>
                            {{str_limit($question->body, 250)}} 
                        </div>
                    </div>
                    <hr>
                    @endforeach

                    {{$questions->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
