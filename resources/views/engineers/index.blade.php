@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('flash::message')
            <div class="row">
                <div class="col-md-12">
                    <h3>Future software engineers</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover table-bordered">
                        <thead class="">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($engineers as $engineer)
                            <tr>
                                <td>{{ $engineer->name }}</td>
                                <td>{{ $engineer->email }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td>aaaa</td>
                                <td>bbb@test.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 my-3">
                    <a href="{{ route('engineers.create') }}" class="btn btn-primary">Join</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
