@extends('layouts.site')

@section('title-page')
Geleria
@endsection

@section('content')
<section class="portfolio-section">
    <div class="large-container">
        <div class="sortable-masonry">
            <div class="items-container row clearfix">
                @forelse($galleries as $item)
                    <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column all graphic design branding">
                        <div class="portfolio-block-one">
                            <div class="image-box">
                                <figure class="image"><img src="{{ $item->image }}" alt="">
                                </figure>
                                <div class="content-box">
                                    <div class="inner">
                                        <div class="title">{{ $item->title }}</div>
                                        <h3><a href="{{ route('imagens', $item->id) }}">{{ $item->description }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
                {{ $galleries->links('layouts.pagination') }}
            </div>
        </div>
    </div>
</section>
@endsection
