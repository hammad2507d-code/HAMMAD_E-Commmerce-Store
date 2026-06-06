@extends('layouts.app')
@section('title', 'Edit Product')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="mb-0 fw-bold"><i class="bi bi-pencil-square text-primary me-2"></i>Edit Product</h4>
        <small class="text-muted">Update product details below</small>
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

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row g-4">
                <!-- Product Name -->
                <div class="col-md-6">
                    <label for="name" class="form-label fw-semibold">Product Name <span class="text-danger">*</span></label>
                    <input type="text" id="name" name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name', $product->name) }}" required>
                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <!-- Brand -->
                <div class="col-md-6">
                    <label for="brand" class="form-label fw-semibold">Brand <span class="text-danger">*</span></label>
                    <input type="text" id="brand" name="brand"
                        class="form-control @error('brand') is-invalid @enderror"
                        value="{{ old('brand', $product->brand) }}" required>
                    @error('brand') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <!-- Category -->
                <div class="col-md-6">
                    <label for="category" class="form-label fw-semibold">Category <span class="text-danger">*</span></label>
                    <select id="category" name="category" class="form-select @error('category') is-invalid @enderror" required>
                        <option value="Electronics"    {{ old('category', $product->category)=='Electronics' ? 'selected':'' }}>Electronics</option>
                        <option value="Clothing"       {{ old('category', $product->category)=='Clothing' ? 'selected':'' }}>Clothing</option>
                        <option value="Accessories"    {{ old('category', $product->category)=='Accessories' ? 'selected':'' }}>Accessories</option>
                        <option value="Home & Kitchen" {{ old('category', $product->category)=='Home & Kitchen' ? 'selected':'' }}>Home & Kitchen</option>
                        <option value="Sports"         {{ old('category', $product->category)=='Sports' ? 'selected':'' }}>Sports</option>
                        <option value="Books"          {{ old('category', $product->category)=='Books' ? 'selected':'' }}>Books</option>
                        <option value="Other"          {{ old('category', $product->category)=='Other' ? 'selected':'' }}>Other</option>
                    </select>
                    @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <!-- Status -->
                <div class="col-md-6">
                    <label for="status" class="form-label fw-semibold">Status <span class="text-danger">*</span></label>
                    <select id="status" name="status" class="form-select @error('status') is-invalid @enderror" required>
                        <option value="active" {{ old('status', $product->status)=='active' ? 'selected':'' }}>Active</option>
                        <option value="inactive" {{ old('status', $product->status)=='inactive' ? 'selected':'' }}>Inactive</option>
                    </select>
                    @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <!-- Price -->
                <div class="col-md-6">
                    <label for="price" class="form-label fw-semibold">Price (PKR) <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">Rs.</span>
                        <input type="number" id="price" name="price"
                               class="form-control @error('price') is-invalid @enderror"
                               step="0.01" min="0"
                               value="{{ old('price', $product->price) }}" required>
                        @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <!-- Quantity -->
                <div class="col-md-6">
                    <label for="quantity" class="form-label fw-semibold">Quantity / Stock <span class="text-danger">*</span></label>
                    <input type="number" id="quantity" name="quantity"
                           class="form-control @error('quantity') is-invalid @enderror"
                           min="0" value="{{ old('quantity', $product->quantity) }}" required>
                    @error('quantity') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <!-- Description -->
                <div class="col-12">
                    <label for="description" class="form-label fw-semibold">Product Description <span class="text-danger">*</span></label>
                    <textarea id="description" name="description" rows="4"
                              class="form-control @error('description') is-invalid @enderror" required>{{ old('description', $product->description) }}</textarea>
                    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <!-- Product Image -->
                <div class="col-12">
                    <label for="image" class="form-label fw-semibold">Product Image</label>
                    <div class="d-flex align-items-start gap-3">
                        <img id="imagePreview"
                             src="{{ $product->image ? asset('storage/'.$product->image) : 'https://placehold.co/120x120?text=Preview' }}"
                             alt="Preview" class="product-image-preview">
                        <div class="flex-grow-1">
                            <input type="file" id="image" name="image"
                                   class="form-control @error('image') is-invalid @enderror"
                                   accept="image/*">
                            <div class="form-text">Accepted: JPG, PNG, GIF, WEBP — Max size: 2MB</div>
                            @error('image') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>

            </div>

            <hr class="my-4">

            <div class="d-flex gap-3">
                <button type="submit" class="btn btn-success px-4">
                    <i class="bi bi-save-fill me-2"></i> Update Product
                </button>
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-secondary px-4">
                    <i class="bi bi-x-circle me-2"></i> Cancel
                </a>
            </div>

        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
document.getElementById('image').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(event) {
            document.getElementById('imagePreview').src = event.target.result;
        };
        reader.readAsDataURL(file);
    }
});
</script>
@endpush