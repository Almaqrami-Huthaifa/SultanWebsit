@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="our-work text-center pt-5 pb-5">
            <div class="container">
                <h2>اخر <b>العروض</b></h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                    <div class="row">
                        @foreach ($products as $prod)
                            <div class="col-md-4">
                                <div class="card" style="border-radius: 15px;">
                                    <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                        data-mdb-ripple-color="light">
                                        <img src="{{  $prod->Product_image}}"
                                            style="border-top-left-radius: 15px; border-top-right-radius: 15px;"
                                            class="img-fluid" alt="Laptop" />
                                        <a href="#!">
                                            <div class="mask"></div>
                                        </a>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p><a href="#!" class="text-dark">{{$prod->product_name}}</a>
                                                </p>
                                                <p class="small text-muted">
                                                    {{$prod->category->category_name}}
                                                </p>
                                            </div>
                                            <div>
                                                <div
                                                    class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <p class="small text-muted">Rated 4.0/5</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between">
                                            <p><a href="#!" class="text-dark">{{$prod->Product_Price}}</a></p>
                                            <p class="text-dark">#### 8787</p>
                                        </div>
                                        <p class="small text-muted">VISA Platinum</p>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <div
                                            class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                            <a href="#!" class="text-dark fw-bold">Cancel</a>
                                            <button type="button" class="btn btn-primary">Buy now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






  