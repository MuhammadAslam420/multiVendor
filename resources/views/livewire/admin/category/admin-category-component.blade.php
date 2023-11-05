<div id="content" wire:ignore>

    <!-- Topbar -->
    @livewire('admin.top-header-component')
    <!-- End of Topbar -->
    @if(Session::has('message'))
    <div class="alert alert-success">{{Session::get('message')}}</div>
    @elseif(Session::has('warning'))
    <div class="alert alert-danger">{{Session::get('warning')}}</div>
    @endif
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New Category</h6>
            </div>
            <div class="card-body">
                <form action=""  enctype="multipart/form-data" wire:submit.prevent="storeCategory">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="label-control">Category Name</label>
                                <input type="text" placeholder="Category Name"  class="form-control" wire:model="name" wire:keyup="generateslug">
                                @error('name') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="label-control">Category Slug</label>
                                <input type="text" placeholder="Category Slug"  class="form-control" wire:model="slug">
                                @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="logo" class="label-control">Category Image</label>
                                <input type="file"  class="form-control" wire:model="logo">
                                @if($logo)
                                <img src="{{ $logo->temporaryurl() }}" width="120">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success bg-warning">Add New Category</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
