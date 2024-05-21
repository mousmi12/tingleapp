<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.header')
</head>

<body class="">
    <div class="wrapper">
        @include('admin.sidebar')
        <div class="main-panel">
            @include('admin.navigation')
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Edit Category</h5>
                            </div>
                            <div class="card-body">
                                @if(session()->has('message'))
                                    <h6>{{ session()->get('message') }}</h6>
                                @endif
                                <form action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!-- @method('POST') -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" id="name" name="name" class="form-control" value="{{ $category->name }}" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <input type="text" id="description" name="description" class="form-control" value="{{ $category->description }}" placeholder="Description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="image" class="form-label">Upload Image:</label>
                                                <input type="file" name="image" class="form-control">
                                                @if ($category->image)
                                                    <img src="{{ asset($category->image) }}" alt="Category Image" class="img-fluid mt-2">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Status</label>
                                                <select class="form-control" name="status" style="background-color: #1e1e2f; color: white;">
                                                <option value="Active" {{ $category->status == 'Active' ? 'selected' : '' }}>Active</option>
        <option value="Inactive" {{ $category->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 text-right">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.category.index') }}" class="btn btn-secondary">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.js')
        </div>
    </div>
</body>

</html>
