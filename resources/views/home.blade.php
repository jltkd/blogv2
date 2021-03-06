@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($posts as $post)
                        <h1>{{ $post->title }}</h1>
                        <p>{{ $post->body }}</p>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
