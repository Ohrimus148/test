@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Managers</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Performer</th>
                                <th scope="col">Start</th>
                                <th scope="col">End</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($projects as $project)
                                <tr>
                                    <th scope="row">{{$project->id}}</th>
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->price}}</td>
                                    <td>{{$project->maker}}</td>
                                    <td>{{$project->start}}</td>
                                    <td>{{$project->start}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12" class="text-center">No Projects Yet</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection