<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Dashboard
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Add Category</h4>
                    </div>

                </div>
                @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                <div class="card-body">
                    <div class="justify-content-center">
                        <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control input-md" placeholder="Product Name" wire:model="name" wire:keyup="generateslug" />
                                    @error('name')<p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Slug</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control input-md" placeholder="Product Slug" wire:model="slug" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Short Description</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea class="form-control" id="short_description" placeholder="Usage Precautions" wire:model="short_description"></textarea>
                                    @error('short_description')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Description</label>
                                <div class="col-md-12" wire:ignore>
                                    <textarea class="form-control" id="description" placeholder="Description" wire:model="description"></textarea>
                                    @error('description')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Regular Price</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control input-md" placeholder="Regular Price" wire:model="regular_price" />
                                    @error('regular_price')<p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Sale price</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control input-md" placeholder="Sale price" wire:model="sale_price" />

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">SKU</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control input-md" placeholder="SKU" wire:model="SKU" />
                                    @error('SKU')<p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Stock</label>
                                <div class="col-md-12">
                                    <select name="" id="" class="form-control" wire:model="stock_status">

                                        <option value="instock">InStock</option>
                                        <option value="outofstock">Out of Stock</option>
                                    </select>
                                    @error('stock_status')<p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Featured</label>
                                <div class="col-md-12">
                                    <select name="" id="" class="form-control" wire:model="featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Quantity</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control input-md" placeholder="Quantity" wire:model="quantity">
                                    @error('quantity')<p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">weight(mg)</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control input-md" placeholder="100" wire:model="weight">
                                    @error('weight')<p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Image</label>
                                <div class="col-md-12">
                                    <input type="file" class="input-file" wire:model="image" />
                                    @error('image')<p class="text-danger">{{$message}}</p>@enderror
                                    @if($image)
                                    <img src="{{$image->temporaryurl()}}" width="120" />
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Gallery</label>
                                <div class="col-md-12">
                                    <input type="file" class="input-file" multiple wire:model="images" />
                                    @error('images')<p class="text-danger">{{$message}}</p>@enderror
                                    @if($images)
                                    @foreach($images as $image)
                                    <img src="{{$image->temporaryurl()}}" width="120" />
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Category</label>
                                <div class="col-md-12">
                                    <select class="form-control" wire:model="category_id" wire:change="changeSubcategory">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach

                                    </select>
                                    @error('category_id')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Sub Category</label>
                                <div class="col-md-12">
                                    <select class="form-control" wire:model="scategory_id">
                                        <option value="0">Select SubCategory</option>
                                        @foreach($scategories as $scategory)
                                        <option value="{{$scategory->id}}">{{$scategory->name}}</option>
                                        @endforeach

                                    </select>
                                    @error('scategory_id')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-info pull-right">Add</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@push('scripts')
<script>
    $(function() {
        tinymce.init({
            selector: '#short_description',
            setup: function(editor) {
                editor.on('Change', function(e) {
                    tinyMCE.triggerSave();
                    var sd_data = $('#short_description').val();
                    @this.set('short_description', sd_data);
                });
            }
        });
        tinymce.init({
            selector: '#description',
            setup: function(editor) {
                editor.on('Change', function(e) {
                    tinyMCE.triggerSave();
                    var d_data = $('#description').val();
                    @this.set('description', d_data);
                });
            }
        });
    });
</script>
@endpush