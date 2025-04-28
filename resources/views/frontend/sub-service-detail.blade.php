@extends('layouts.frontend')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-4">{{ $subService->title }}</h1>

                <div class="content">
                    {!! $subService->description !!}
                </div>
            </div>
            <div class="col-md-4">
            <div class="mb-4">
                    <img src="{{ asset('storage/'.$subService->image) }}" alt="{{ $subService->title }}" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
@endsection 