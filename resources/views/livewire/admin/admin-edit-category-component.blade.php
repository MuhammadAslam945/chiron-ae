<div class="content-wrapper" >
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Dashboard
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Category Update <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

<div class="row">
    <div class="container">

        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h4>Edit Category</h4>
                </div>

            </div>
            @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
            @endif
            <div class="card-body">

                <form class="form-horizontal" wire:submit.prevent="updateCategory">

                    <div class="form-group">
                        <label class="col-md-4 control-label">Category Name</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Category Name"   wire:model="name" wire:keyup="generateslug">
                            @error('name') <p class="text-danger">{{$message}}</p> @enderror

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Category Slug</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Category Slug"   wire:model="slug">
                            @error('slug') <p class="text-danger">{{$message}}</p> @enderror

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Parent Category</label>
                        <div class="col-md-8">
                            <select class="form-control" wire:model="category_id">
                                <option value="">None</option>
                                @foreach($categories as $category)
                                <option  value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-info">Update</button>

                        </div>
                    </div>

                </form>


            </div>
        </div>

    </div>
</div>
</div>