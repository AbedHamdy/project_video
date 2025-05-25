@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 style="color: var(--dark-brown); font-weight: bold; margin-bottom: 1rem;">Dashboard</h1>
    <p style="color: var(--dark-brown); margin-bottom: 2rem;">Welcome to the Admin Panel Home Page.</p>
    {{-- {{ dd($videoCount) }} --}}
    <div class="row">
        @if($videoCount > 0)
            <div class="col-md-4">
                <div class="card" style="background: linear-gradient(145deg, #fff, var(--beige));">
                    <div class="card-body">
                        <h5 class="card-title" style="color: var(--gold); font-weight: bold;">Video Count</h5>
                        <p class="card-text" style="color: var(--dark-brown);">{{ $videoCount }}</p>
                    </div>
                </div>
            </div>
        @else
            <div class="col-md-12">
                <div class="alert alert-warning" role="alert" style="background-color: var(--beige); color: var(--dark-brown);">
                    No videos found. Please add some videos to get started.
                </div>
            </div>
        @endif
        {{-- <div class="col-md-4">
            <div class="card" style="background: linear-gradient(145deg, #fff, var(--beige));">
                <div class="card-body">
                    <h5 class="card-title" style="color: var(--gold); font-weight: bold;">Card 2</h5>
                    <p class="card-text" style="color: var(--dark-brown);">Content for card 2.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="background: linear-gradient(145deg, #fff, var(--beige));">
                <div class="card-body">
                    <h5 class="card-title" style="color: var(--gold); font-weight: bold;">Card 3</h5>
                    <p class="card-text" style="color: var(--dark-brown);">Content for card 3.</p>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
