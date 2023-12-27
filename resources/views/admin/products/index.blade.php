@extends('layouts.admin')

@section('header')
    @include('admin.partials.header')
@endsection

@section('content')
    <div class="container-fluid py-4">
        <form action="{{ route('admin.products') }}" method="get">
            <label>
                <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter the ">
            </label>
            <label>
                <input type="email" name="email" placeholder="Enter the" class="form-control form-control-lg">
            </label>
            <button type="submit" class=" btn btn-success mt-3 mx-1">Search</button>
        </form>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between">
                        <h6>Authors table</h6>
                        <button><a href="{{route('admin.products.create')}}">+Add new product</a></button>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary opacity-7">Id</th>
                                    <th class="text-uppercase text-secondary opacity-7">Product Name</th>
                                    <th class="text-uppercase text-secondary opacity-7">User Name</th>
                                    <th class="text-uppercase text-secondary opacity-7">Price</th>
                                    <th class="text-uppercase text-secondary  opacity-7">Created At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>
                                            <p>{{$product->id}}</p>
                                        </td>
                                        <td>
                                            <p>{{$product->name}}</p>
                                        </td>
                                        <td>
{{--                                            <p>{{$product->user->name}}</p>--}}
                                        </td>
                                        <td>
                                            <span>${{$product->price}}</span>
                                        </td>
                                        <td>
                                            <span>{{$product->created_at}}</span>
{{--//->format('d/m/y')--}}
                                        </td>
                                        <td>
                                            <form action="{{route('admin.products.updateProducts')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="productId" value="{{$product->id}}">
                                                <button class="bg-white border-0 text-success"><i class="fa-solid fa-pen-to-square"></i></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form method="post" action="{{ route('admin.products.destroy') }}">
                                                @csrf
                                                <input type="hidden" name="productId" value="{{$product->id}}">
                                                <button type="submit" class="bg-white border-0 text-danger"><i class="fa-regular fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $products->appends(request()->all())->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
