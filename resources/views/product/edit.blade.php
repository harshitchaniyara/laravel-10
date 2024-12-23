@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6 rounded bg-light p-4">
        <form action="{{ route('product.update', $products->id) }}" method="POST">
            @csrf
        <div class="mb-3">
                <label for="code" class="form-label">Code</label>
                <input type="text" name="code" class="form-control" id="code" value="{{ $products->code }}" placeholder="Enter a product code">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $products->name }}" placeholder="Enter a product name">
            </div>
            <div class="mb-3">
                <label for="Category" class="form-label">Category</label>
                <select class="form-select" name="category">
                    <option selected>Open this select menu</option>
                    <option value="one" {{ $products->category == 'one' ? 'selected' : '' }}>One</option>
                    <option value="two" {{ $products->category == 'two' ? 'selected' : '' }}>Two</option>
                    <option value="three" {{ $products->category == 'three' ? 'selected' : '' }}>Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="size" class="form-label">Size</label>
                <input type="text" name="size" class="form-control" id="size" value="{{ $products->size }}" placeholder="Enter a product size">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" id="price" value="{{ $products->price }}" placeholder="Enter a product price">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ !empty($products->description) ? $products->description : '' }}</textarea>
            </div>
            <div class="mb-3">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" value="Save" class="btn btn-primary">
            </div>
        </form>
        </div>    

    </div>
</div>
@endsection