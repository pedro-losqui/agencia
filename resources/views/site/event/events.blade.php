@extends('layouts.site')

@section('title-page')
Eventos
@endsection

@section('content')
<section class="team-style-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 inner-content">
                @forelse($events as $item)
                    <div class="inner-content">
                        <div class="team-block-two">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                    <figure class="image-box"><a href="#"><img src="{{ $item->image }}"></a>
                                    </figure>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 content-column d-flex">
                                    <div class="content-box my-auto">
                                        <h4><a href="#">{{ $item->title }}</a></h4>
                                        <div class="text">{{ $item->description }}</div>
                                        <ul class="team-social">
                                            <li><a href="#"><i class="fas fa-calendar-alt"></i></a></li> {{ $item->date->format('d/m/Y') }} <br>
                                            <li><a href="#"><i class="fas fa-clock"></i></a></li> {{ $item->hour }} <br>
                                            <li><a href="#"><i class="fas fa-map-marker-alt"></i></a></li> {{ $item->local }} <br>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
                {{ $events->links('layouts.pagination') }}
            </div>
        </div>
    </div>
</section>
@endsection
