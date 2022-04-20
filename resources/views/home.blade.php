@extends('layout.app')
@section('content')
<h1>Home</h1>

<div class="container-fluid gedf-wrapper">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="h5 text-bold">Bram Velthoven</div>
                    <div class="h7">Developer of web applications, JavaScript, PHP,
                        etc.
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="h6 text-muted">Followers</div>
                        <div class="h5">5.2342</div>
                    </li>
                    <li class="list-group-item">
                        <div class="h6 text-muted">Following</div>
                        <div class="h5">6758</div>
                    </li>
                    <li class="list-group-item">
                        <div class="h6 text-muted">Likes</div>
                        <div class="h5">328</div>
                    </li>

                </ul>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="h5 text-bold">Laravel portfolio</div>
                    <div class="h7">PHP
                        etc.
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="h6 text-muted">Time spend</div>
                        <div class="h5">4 week</div>
                    </li>
                    <li class="list-group-item">
                        <div class="h6 text-muted">Grade</div>
                        <div class="h5">7.5</div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="h5 text-bold">Netflix Project</div>
                    <div class="h7">Taal: Javascript
                        etc.
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="h6 text-muted">Time</div>
                        <div class="h5">4 weeks</div>
                    </li>
                    <li class="list-group-item">
                        <div class="h6 text-muted">Grade</div>
                        <div class="h5">8</div>

                </ul>
            </div>
        </div>
        @endsection