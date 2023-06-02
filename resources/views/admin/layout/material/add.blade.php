@extends('admin.layout.master')
@section('content')
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <!-- /.card-header -->
                                <form role="form" method="POST" action={{ url('/storeMat') }}
                                    enctype="multipart/form-data">
                                    <div class="card-header">
                                        <h3 class="card-title">Creat New category</h3>
                                    </div>
                                    <div class="card-body">
                                        @csrf
                                        @if (session('successMsg'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('successMsg') }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif

                                        @if (session('errorMsg'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ session('errorMsg') }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="productName" class="formbold-form-label">category Name</label>
                                            <input type="text" name="productName" id="productName"
                                                placeholder="ادخل اسم المنتج" class="formbold-form-input">
                                        </div>

                                        <!--
                              <div class="form-group">
                                <label for="inputName">Project Company</label>
                                <input type="text" id="inputName" class="form-control">
                              </div>
                            -->
                                        <div class="form">
                                            <label for="inputStatus"> material</label>
                                            <select class="formbold-form-input" id="occupation" name="category_id">
                                                <option selected disabled>Select one</option>
                                                @foreach ($allcategories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">category Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="Product_image" class="custom-file-input"
                                                        id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success">Save</button>
                                        <a href="{{ route("MatlList") }}" class="btn btn-primary col-md-2">Back</a>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->

                            <!-- Form Element sizes -->

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
            </section>

            <style>
                @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                body {
                    font-family: 'Inter', sans-serif;
                }

                .formbold-mb-3 {
                    margin-bottom: 15px;
                }

                .formbold-main-wrapper {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 48px;
                }

                .formbold-form-wrapper {
                    margin: 0 auto;
                    max-width: 570px;
                    width: 100%;
                    background: white;
                    padding: 40px;
                }

                .formbold-img {
                    display: block;
                    margin: 0 auto 45px;
                }

                .formbold-input-wrapp>div {
                    display: flex;
                    gap: 20px;
                }

                .formbold-input-flex {
                    display: flex;
                    gap: 20px;
                    margin-bottom: 15px;
                }

                .formbold-input-flex>div {
                    width: 50%;
                }

                .formbold-form-input {
                    width: 100%;
                    padding: 13px 22px;
                    border-radius: 5px;
                    border: 1px solid #dde3ec;
                    background: #ffffff;
                    font-weight: 500;
                    font-size: 16px;
                    color: #536387;
                    outline: none;
                    resize: none;
                }

                .formbold-form-input::placeholder,
                select.formbold-form-input,
                .formbold-form-input[type='date']::-webkit-datetime-edit-text,
                .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
                .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
                .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
                    color: rgba(83, 99, 135, 0.5);
                }

                .formbold-form-input:focus {
                    border-color: #6a64f1;
                    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                }

                .formbold-form-label {
                    color: #07074D;
                    font-weight: 500;
                    font-size: 14px;
                    line-height: 24px;
                    display: block;
                    margin-bottom: 10px;
                }

                .formbold-form-file-flex {
                    display: flex;
                    align-items: center;
                    gap: 20px;
                }

                .formbold-form-file-flex .formbold-form-label {
                    margin-bottom: 0;
                }

                .formbold-form-file {
                    font-size: 14px;
                    line-height: 24px;
                    color: #536387;
                }

                .formbold-form-file::-webkit-file-upload-button {
                    display: none;
                }

                .formbold-form-file:before {
                    content: 'Upload file';
                    display: inline-block;
                    background: #EEEEEE;
                    border: 0.5px solid #FBFBFB;
                    box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.25);
                    border-radius: 3px;
                    padding: 3px 12px;
                    outline: none;
                    white-space: nowrap;
                    -webkit-user-select: none;
                    cursor: pointer;
                    color: #637381;
                    font-weight: 500;
                    font-size: 12px;
                    line-height: 16px;
                    margin-right: 10px;
                }

                .formbold-btn {
                    text-align: center;
                    width: 100%;
                    font-size: 16px;
                    border-radius: 5px;
                    padding: 14px 25px;
                    border: none;
                    font-weight: 500;
                    background-color: #6a64f1;
                    color: white;
                    cursor: pointer;
                    margin-top: 25px;
                }

                .formbold-btn:hover {
                    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                }

                .formbold-w-45 {
                    width: 45%;
                }
            </style>
        @endsection
