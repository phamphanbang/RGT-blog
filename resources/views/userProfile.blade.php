@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-xl-10">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    <div class="card">
                        <div class="card-header">Join on <?php 
                            $create_at = date_create($user->created_at);
                            $y = date_format($create_at, "M d/Y");
                            $x = date_format($create_at,"H:i:s") ;
                            echo $y . " at " . $x;
                            ?></div>
        
                        <div class="card-body">
                            <div class="card-text">
                                <table>
                                    <tr>
                                        <td>Total Posts</td>
                                        <td>{{ $posts }}</td>
                                        <td><a href="#">Show all</a></td>
                                    </tr>
                                    <tr>
                                        <td>Published Posts</td>
                                        <td>{{ $posts }}</td>
                                        <td><a href="#">Show all</a></td>
                                    </tr>
                                    <tr>
                                        <td>Posts in Draft</td>
                                        <td>{{ $posts }}</td>
                                        <td><a href="#">Show all</a></td>
                                    </tr>
                                </table>
                            </div>
                            
                        </div>
                        <div class="card-header">
                            Total Comments {{ $posts }}
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h3>Latest Post</h3>
                        </div>
        
                        <div class="card-body">
                            <div class="card-text">
                                <table>
                                    <tr>
                                        <td><a href="#">latest post</a></td>
                                        <td>Join on <?php 
                                            $create_at = date_create($user->created_at);
                                            $y = date_format($create_at, "M d/Y");
                                            $x = date_format($create_at,"H:i:s") ;
                                            echo $y . " at " . $x;
                                            ?></td>
                                    </tr>
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
                                <div>
                                    folder <a href="#">link</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <p>folder</p>
                                <p>folder</p>
                                <div>
                                    folder <a href="#">link</a>
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