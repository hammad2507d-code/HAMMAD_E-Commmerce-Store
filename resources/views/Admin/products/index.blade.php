@extends('layouts.app')
@section('title', 'All Products')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="mb-0 fw-bold"><i class="bi bi-grid-fill text-primary me-2"></i>All Products</h4>
        <small class="text-muted">{{ $products->total() }} product(s) found</small>
    </div>
    <a href="{{ route('products.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg me-1"></i> Add New Product
    </a>
</div>

<div class="card">
    <div class="card-body p-0">
        @if ($products->isEmpty())
            <div class="text-center py-5">
                <i class="bi bi-box-seam text-muted" style="font-size:3rem;"></i>
                <p class="mt-3 text-muted">No products yet.
                    <a href="{{ route('products.create') }}">Add your first product</a>
                </p>
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th>Date Added</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td class="text-muted">{{ $product->id }}</td>
                            <td>
                                @if ($product->image)
                                    <img src="{{ asset('storage/'.$product->image) }}"
                                        width="50" height="50"
                                        style="object-fit:cover; border-radius:8px;">
                                @else
                                    <div class="bg-light d-flex align-items-center justify-content-center"
                                         style="width:50px;height:50px;border-radius:8px;">
                                        <i class="bi bi-image text-muted"></i>
                                    </div>
                                @endif
                            </td>
                            <td><strong>{{ $product->name }}</strong></td>
                            <td>{{ $product->brand }}</td>
                            <td><span class="badge bg-secondary">{{ $product->category }}</span></td>
                            <td class="fw-semibold">Rs. {{ number_format($product->price, 2) }}</td>
                            <td>
                                @if ($product->quantity > 0)
                                    <span class="text-success fw-bold">{{ $product->quantity }}</span>
                                @else
                                    <span class="text-danger fw-bold">Out of Stock</span>
                                @endif
                            </td>
                            <td>
                                @if ($product->status === 'active')
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td class="text-muted small">{{ $product->created_at->format('d M Y') }}</td>
                            <td class="text-center">
                                <a href="{{ route('products.show', $product) }}"
                                   class="btn btn-sm btn-outline-info me-1">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <form action="{{ route('products.destroy', $product) }}"
                                      method="POST" class="d-inline"
                                      onsubmit="return confirm('Delete this product?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if ($products->hasPages())
                <div class="p-3 border-top">{{ $products->links() }}</div>
            @endif
        @endif
    </div>
</div>

@endsection