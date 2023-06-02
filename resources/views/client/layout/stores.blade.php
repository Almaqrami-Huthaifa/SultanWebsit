@extends('client.layout.master')
@section('content')
<section class="sec-blog bg0 p-t-60 p-b-90">
    <div class="container">
        <div class="p-b-66">
            <h3 class="ltext-105 cl5 txt-center respon1">
                Our Stores
            </h3>
        </div>

        <div class="row">
            @foreach ($allStores as $stors)
            <div class="col-sm-6 col-md-4 p-b-40">
                <div class="blog-item">
                    <div class="hov-img0">
                        
                            <img src="{{$stors->image_path}}" alt="IMG-BLOG">
                        </a>
                    </div>

                    <div class="p-t-15">

                        <h4 class="p-b-12">
                            <a href="{{ route("storedetails", ['id' => $stors->id]) }}" class="mtext-101 cl2 hov-cl1 trans-04">
                                {{$stors->name}}
                            </a>
                        </h4>

                        <p class="stext-108 cl6">
                           {{$stors->discreptin}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection