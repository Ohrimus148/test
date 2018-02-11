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
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Company</th>
                                <th scope="col">Photo</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($managers as $manager)
                            <tr>
                                <th scope="row">{{$manager->id}}</th>
                                <td>{{$manager->name}}</td>
                                <td>{{$manager->email}}</td>
                                <td>{{$manager->phone}}</td>
                                <td>{{$manager->company}}</td>
                                <td><img src="/uploads/files/{{$manager->photo}}"  height="100" width="100" /></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
