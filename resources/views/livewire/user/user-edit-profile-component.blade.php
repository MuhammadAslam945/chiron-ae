<main class="no-main">
    <div class="container" style="padding:20px 0;">
        <div class="row">
            <div class="col-md-12 mt-4 mb-4"><a href="{{route('user.dashboard')}}" class="btn btn-info float-right">
                    <p class="text-light">Dashboard</p>
                </a></div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Profile
                    </div>
                    <div class="card-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success">{{Session::get('message')}}</div>
                        @endif
                        <form enctype="multipart/form-data" wire:submit.prevent=" updateProfile">
                            <div class="row">
                                <div class="col-md-4">
                                    @if($newimage)
                                    <img src="{{$newimage->temporaryUrl()}}" width=100%>
                                    @elseif($image)
                                    <img src="{{asset('assets/img/user')}}/{{$image}}" width=100%>
                                    @else
                                    <img src="{{asset('assets/img/user/user.png')}}" width=100%>
                                    @endif
                                    <input type="file" class="form-control" wire:model="newimage" />
                                </div>
                                <div class="col-md-8">
                                    <p><b>Name</b><input type="text" class="form-control input-md" placeholder="Name" wire:model="name"></p>

                                    <p><b>Email</b> {{$email}}</p>

                                    <p><b>Mobile</b><input type="text" class="form-control input-md" placeholder="mobile" wire:model="mobile"></p>
                                    <p><b>Address Line1: </b> <input type="text" class="form-control input-md" placeholder="Address Line1" wire:model="line1"></p>
                                    <p><b>Address Line2: </b> <input type="text" class="form-control input-md" placeholder="Address line2" wire:model="line2"></p>
                                    <p><b>City: </b> <input type="text" class="form-control input-md" placeholder="City" wire:model="city"></p>
                                    <p><b>Province: </b> <input type="text" class="form-control input-md" placeholder="Province" wire:model="province"></p>
                                    <p><b>Country: </b> <input type="text" class="form-control input-md" placeholder="Country" wire:model="country"></p>
                                    <p><b>ZipCode: </b> <input type="text" class="form-control input-md" placeholder="ZipCode" wire:model="zipcode"></p>
                                    <button type="submit" class="btn btn-warning pull-right">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>