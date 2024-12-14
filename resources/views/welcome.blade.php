@extends('layouts.app');

@section('content')
    <div class="container d-flex flex-column justify-content-center min-vh-100">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Laravel</div>

                    <div class="card-body">
                        <h2 class="card-title">Welcome to Laravel!</h2>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card bg-light">
                                    <div class="card-header">Articles</div>

                                    <div class="card-body">
                                        <a href="https://laravel.com/docs">Docs</a>
                                        <a href="https://laracasts.com">Laracasts</a>
                                        <a href="https://laravel-news.com">News</a>
                                        <a href="https://blog.laravel.com">Blog</a>
                                        <a href="https://nova.laravel.com">Nova</a>
                                        <a href="https://forge.laravel.com">Forge</a>
                                        <a href="https://vapor.laravel.com">Vapor</a>
                                        <a href="https://github.com/laravel/laravel">GitHub</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light">
                                    <div class="card-header">Other Stuff</div>

                                    <div class="card-body">
                                        <a href="https://laravel.com/training">Training</a>
                                        <a href="https://laravel.com/team">Team</a>
                                        <a href="https://laravel.com/foundation">Foundation</a>
                                        <a href="https://laravel.com/resources">Resources</a>
                                        <a href="https://laravel.com/docs/security">Security</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div> 
@endsection
