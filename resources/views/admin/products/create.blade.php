@extends('layouts.admin')
@section('header')
    @include('admin.partials.header')
@endsection

@section('content')
    <h2>Add</h2>
     <form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data" class="d-flex justify-content-between gap-3 flex-wrap">
            @csrf
            <label class="text-white">Product Image
                <input type="file" name="image"  class="form-control form-control-lg"/>
            </label>
            <label for="" class="text-white">Product Title
                <input type="text" name="name" class="form-control form-control-lg"
                       value="{{request()->get('title')}}">
                @error('name')
                {{$message}}
                @enderror
            </label>
            <label for="" class="text-white">Product Price
                <input type="number" name="price" class="form-control form-control-lg"
                       value="{{request()->get('price')}}">
            </label>
{{--            <label for="" class="text-white">Product Discount--}}
{{--                <input type="number" name="discount" class="form-control form-control-lg"--}}
{{--                       value="{{request()->get('discount')}}">--}}
{{--            </label>--}}
            <label for="" class="text-white">Product Description
                <input type="text" name="description" class="form-control form-control-lg"
                       value="{{request()->get('description')}}">
            </label>
{{--            <label for="" class="text-white">Product Summary Text--}}
{{--                <input type="text" name="summary_text" class="form-control form-control-lg"--}}
{{--                       value="{{request()->get('summary_text')}}">--}}
{{--            </label>--}}
{{--            <label for="" class="text-white">Product Status--}}
{{--                <input type="text" name="status" class="form-control form-control-lg"--}}
{{--                       value="{{request()->get('status')}}">--}}
{{--            </label>--}}
         <button type="submit" class="btn btn-behance py-3 mx-2 mt-2">Add</button>
     </form>

@endsection

