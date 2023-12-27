@extends('layouts.admin')

@section('header')
    @include('admin.partials.header')
@endsection

@section('content')
    <div class="container-fluid py-4">
        <form action="{{ route('admin.users') }}" method="get">
            <label>
                <input type="text" name="name" class="form-control form-control-lg" value="{{ request()->get('name') }}" placeholder="Enter the user name">
            </label>
            <label>
                <input type="email" name="email" placeholder="Enter the email" class="form-control form-control-lg">
            </label>
            <button type="submit" class=" btn btn-success mt-3 mx-1">Search</button>
        </form>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Authors table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">User Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>
                                            <p>{{$user->id}}</p>
                                        </td>
                                        <td>
                                            <p>{{$user->name}}</p>
                                        </td>
                                        <td>
                                            <span>{{$user->email}}</span>
                                        </td>
                                        <td>
                                            <span>{{$user->created_at->format('y/m/d')}}</span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $users->appends(request()->all())->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
