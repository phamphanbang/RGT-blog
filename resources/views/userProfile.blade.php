@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/posts/userProfile.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-xl-10">
            <div class="card">
                <div class="card-header">
                    <h3> {{ $data["user"]->name }} </h3>
                </div>

                <div class="card-body">
                    <div class="card">
                        <div class="card-header">Join on <?php 
                            $create_at = date_create($data["user"]->created_at);
                            $y = date_format($create_at, "M d/Y");
                            $x = date_format($create_at,"H:i A") ;
                            echo $y . " at " . $x;
                            ?></div>

                        <div class="card-body">
                            <div class="card-text">
                                <table>
                                    <tr>
                                        <td>Total Posts</td>
                                        <td>{{ $data["posts_count"] }}</td>
                                        <td><a href="#">Show all</a></td>
                                    </tr>
                                    <tr>
                                        <td>Published Posts</td>
                                        <td>{{ 
                                        $data["posts_public_count"] }}</td>
                                        <td><a href="#">Show all</a></td>
                                    </tr>
                                    <tr>
                                        <td>Posts in Draft</td>
                                        <td>{{ $data["posts_draft_count"] }}</td>
                                        <td><a href="#">Show all</a></td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                        <div class="card-header">
                            Total Comments {{ $data["comments_count"] }}
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h3>Latest Post</h3>
                        </div>

                        <div class="card-body">
                            <div class="card-text">
                                <table>
                                    @foreach ($data["posts_public"] as $post )
                                    <tr>
                                        <td><a href="#">{{ $post->title }}</a></td>
                                        <td>Join on <?php 
                                            $create_at = date_create($post->created_at);
                                            $y = date_format($create_at, "M d/Y");
                                            $x = date_format($create_at,"H:i A") ;
                                            echo $y . " at " . $x;
                                            ?></td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h3>Latest Comments</h3>
                        </div>

                        <div class="card-body border-bottom">
                            <div class="card-text">
                                <p>folder</p>
                                <p>folder</p>
                                <p>
                                    folder <a href="#">link</a>
                                </p>
                            </div>
                        </div>
                        <div class="card-body border-bottom">
                            <div class="card-text">
                                <p>folder</p>
                                <p>folder</p>
                                <p>
                                    folder <a href="#">link</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection