@extends('admin.layout.master')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <form role="form" method="POST" action={{ route("saveOldStore") }} enctype="multipart/form-data">
                            <div class="card-header">
                                <h3 class="card-title">Edit store</h3>
                            </div>
                            <div class="card-body">
                                @csrf
                                <input type="hidden" name="id" value="{{ $store->id }}" />
                                @if (session('successMsg'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('successMsg') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                @if (session('errorMsg'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('errorMsg') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="inputName">product Name</label>
                                    <input type="text" name="proName" id="inputName" class="form-control"
                                        value="{{ $store->name }}">
                                </div>
                                <!--
                              <div class="form-group">
                                <label for="inputName">Project Company</label>
                                <input type="text" id="inputName" class="form-control">
                              </div>
                            -->

                                <div class="form-group">
                                    <label for="inputSpentBudget">store discreption</label>
                                    <input type="text" name="ProPrice" id="inputSpentBudget" class="form-control"
                                        value="{{ $store->discreptin }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">store Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="Product_image" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="Product_image">Image</label><br />
                                    <div class="how-itemcart1"><img src="{{ $store->image_path }}" class="logoMD" alt="IMG"/>
                                        <input type="hidden" name="oldProduct_image" value='{{ $store->image_path }}' />
                                    </div>
                                </div>

                               
                                <!--
                                  <div class="form-group">
                                    <label for="inputDescription">Project Description</label>
                                    <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                                  </div>
                                  -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Save</button>

                                <a href="{{ route("StoreList") }}" class="btn btn-primary col-md-2">Back</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                    <!-- Form Element sizes -->

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
    </section>
@endsection
