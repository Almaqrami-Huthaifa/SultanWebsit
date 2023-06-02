@extends('admin.layout.master')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-danger">                        
                        <!-- /.card-header -->                        
                            <form role="form" method="POST" action={{ route('confirmDeletePro') }}>
                              <div class="card-header">
                                <h3 class="card-title">Do you want to delete?</h3>
                              </div>
                              <div class="card-body">
                                @csrf
                                <input type="hidden" name="id" value="{{$store->id}}"/>
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
                                    <label for="inputName">store Name</label>
                                    <input type="text" name="proName" id="inputName" class="form-control" value="{{$store->image_path}}" readonly>
                                </div>
                                <!--
                          <div class="form-group">
                            <label for="inputName">Project Company</label>
                            <input type="text" id="inputName" class="form-control">
                          </div>
                        -->

                        <div class="form-group">
                            <label for="inputSpentBudget">store Discreption</label>
                            <input type="text" name="ProPrice" id="inputSpentBudget" class="form-control"  value="{{$store->discreptin}}" readonly>
                        </div>
                                <div class="form-group">
                                    <label class="form-label" for="Product_image">Image</label><br />
                                    <div class="how-itemcart1"><img src="{{ $store->image_path }}" class="logoMD" alt="IMG" />
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
                            <button type="submit" class="btn btn-danger">Confirm Delete</button>

                            <a href="{{ route("StoreList") }}"
                                class="btn btn-primary col-md-2">Back</a>
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
