@extends('layouts.site')

@section('title-page')
Imagens
@endsection

@section('content')
<section class="portfolio-details">
    <div class="lower-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-content">
                        @foreach($images as $item)
                            <div class="image-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <figure class="image"><a href="{{ $item->image }}"
                                        class="lightbox-image" data-fancybox="gallery"><img
                                            src="{{ $item->image }}" alt=""></a>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
