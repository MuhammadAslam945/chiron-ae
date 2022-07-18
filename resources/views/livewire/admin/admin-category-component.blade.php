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
                    <span></span>Category Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="conatiner">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>All Categories</h4>
                    </div>
                </div>
            
            <div class="card-body" wire:ignore>
                <table class="table table-striped table-responsive table-border">
                    <thead>
                        <tr>
                            <th>Category ID</th>
                            <th>Category Logo</th>
                            <th>Category Name</th>
                            <th>Category Slug</th>
                            <th>Sub-Category</th>
                            <th>Category Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td><img src="{{asset('assets/img/category')}}/{{$category->logo}}" alt="{{$category->name}}"></td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td>
                                <ul class="list">
                                    @foreach($category->subcategories as $scategory)
                                    <li style="padding:5px;">{{$scategory->name}} &nbsp;<a class="btn btn-info btn-sm m-0 p-0" style="width:30px;height:30px;" href="{{route('admin.editcategory',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}"><img src="{{asset('admin/assets/images/edit.png')}}" style="width:24px;height:24px;" alt=""></a>
                                        <a href="#" class="btn btn-danger btn-sm m-0 p-0" wire:click.prevent="deleteSubCategory({{$scategory->id}})"><img src="{{asset('admin/assets/images/delete.png')}}" style="width:24px;height:24px;" alt=""></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{$category->created_at}}</td>
                            <td>

                                <a href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}" class="btn btn-info btn-sm m-0 p-0"><img src="{{asset('admin/assets/images/edit.png')}}" alt=""></a>
                                <a onclick="confirm('Are You Sure, You want to delete the Category!.') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})" class="btn btn-danger btn-sm m-0 p-0"><img src="{{asset('admin/assets/images/delete.png')}}" alt=""></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$categories->links('pagination::bootstrap-5')}}
            </div>
            </div>
        </div>
    </div>
</div>