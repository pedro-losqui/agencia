@extends('layouts.site')

@section('title-page')
Cursos de Extensão
@endsection

@section('content')
<section class="best-hosting elements sec-pad-two">
    <div class="container">
        <div class="inner-content">
            <div class="row">
                @forelse($courses as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="icon-box">
                            <figure class="image-box"><a href="#"><img style="border-radius: 10px;" src="{{ $item->image }}"></a></figure>
                        </div>
                        <br>
                        <div class="single-item wow flipInY" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bg-layer"></div>
                                <h3><a href="#">{{ $item->title }}</a></h3>
                                <div class="text">{{ $item->body }}</div>
                                <div class="link-btn"><a href="#"><i class="fas fa-long-arrow-alt-right"></i></a></div>
                                <div class="table-content">
                                    <ul> 
                                        <li><i class="fas fa-chalkboard-teacher"></i> <strong>Prof:</strong> {{ $item->teacher }}</li>
                                        <hr>
                                        <li><i class="fas fa-calendar-alt"></i> <strong>Início:</strong> {{ $item->date_start->format('d/m/Y') }}</li>
                                        <hr>
                                        <li><i class="fas fa-calendar-alt"></i> <strong>Término:</strong> {{ $item->date_end->format('d/m/Y') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                @empty

                @endforelse
                {{ $courses->links('layouts.pagination') }}
            </div>
        </div>
    </div>
</section>
@endsection
