@extends('layouts.app')

@section('content')

<!-- product create button to open model like this create -->

<!-- open product model -->
<div class="modal fade" tabindex="-1" id="productModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="code" class="form-label">Code</label>
                <input type="text" name="code" class="form-control" id="code" placeholder="Enter a product code">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter a product name">
            </div>
            <div class="mb-3">
                <label for="Category" class="form-label">Category</label>
                <select class="form-select" name="category">
                    <option selected>Open this select menu</option>
                    <option value="one">One</option>
                    <option value="two">Two</option>
                    <option value="three">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="size" class="form-label">Size</label>
                <input type="text" name="size" class="form-control" id="size" placeholder="Enter a product size">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="Enter a product price">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" value="Save" class="btn btn-primary">
            </div>
        </form>    
      </div>
    </div>
  </div>
</div>
<!-- close product model -->

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal">Create Product</button>
                </div>

                <div class="card-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="align-middle">
                                <th scope="col">#</th>
                                <th scope="col">Code</th>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Size</th>
                                <th scope="col">Price</th>
                                <th scope="col">
                                    <button class="btn btn-success">Edit</button>
                                </th>
                                <th scope="col">
                                    <button class="btn btn-danger">Delete</button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $product->code }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category }}</td>
                                    <td>{{ $product->size }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#productModal">Edit</a>
                                    </td>
                                    <td>
                                        <!-- csrf token pass to delete -->
                                        <form action="{{ route('product.delete', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
