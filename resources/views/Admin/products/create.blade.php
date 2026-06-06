@extends('layouts.app')
@section('title', 'Add New Product')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="mb-0 fw-bold">
            <i class="bi bi-plus-circle text-primary me-2"></i>Add New Product
        </h4>
        <small class="text-muted">Fill in all details to add a product</small>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left me-1"></i> Back to Products
    </a>
</div>

<div class="card">
    <div class="card-header bg-primary text-white py-3">
        <i class="bi bi-box-seam me-2"></i> Product Information
    </div>

    <div class="card-body p-4">

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Please fix the following errors:</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row g-4">

                <!-- Product Name -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Product Name *</label>
                    <input type="text" name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}" required>

                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Brand -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Brand *</label>
                    <input type="text" name="brand"
                        class="form-control @error('brand') is-invalid @enderror"
                        value="{{ old('brand') }}" required>

                    @error('brand')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Category -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Category *</label>
                    <select name="category" class="form-select @error('category') is-invalid @enderror" required>
                        <option value="">Select Category</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Clothing">Clothing</option>
                        <option value="Accessories">Accessories</option>
                        <option value="Home & Kitchen">Home & Kitchen</option>
                        <option value="Sports">Sports</option>
                        <option value="Books">Books</option>
                        <option value="Other">Other</option>
                    </select>

                    @error('category')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Status -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Status *</label>
                    <select name="status" class="form-select @error('status') is-invalid @enderror" required>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>

                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Price -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Price *</label>
                    <input type="number" name="price"
                        class="form-control @error('price') is-invalid @enderror"
                        value="{{ old('price') }}" min="0" required>

                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Quantity -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Quantity *</label>
                    <input type="number" name="quantity"
                        class="form-control @error('quantity') is-invalid @enderror"
                        value="{{ old('quantity') }}" min="0" required>

                    @error('quantity')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Description -->
                <div class="col-12">
                    <label class="form-label fw-semibold">Description *</label>
                    <textarea name="description" rows="4"
                        class="form-control @error('description') is-invalid @enderror"
                        required>{{ old('description') }}</textarea>

                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image -->
                <div class="col-12">
                    <label class="form-label fw-semibold">Product Image</label>

                    <input type="file" name="image"
                        class="form-control @error('image') is-invalid @enderror"
                        accept="image/*">

                    @error('image')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <hr class="my-4">

            <button type="submit" class="btn btn-primary px-4">
                <i class="bi bi-save me-1"></i> Save Product
            </button>

            <a href="{{ route('products.index') }}" class="btn btn-secondary px-4">
                Cancel
            </a>

        </form>
    </div>
</div>

@endsection