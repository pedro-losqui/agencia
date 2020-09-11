@extends('layouts.site')

@section('title-page')
Artigos
@endsection

@section('content')
<section class="sidebar-page-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-content">
                    @forelse($articles as $item)
                        <div class="single-blog-content">
                            <div class="inner-box">
                                <figure class="image-box"><a href="#"><img
                                            src="{{ $item->image }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="upper-box">
                                        <div class="post-date"><i class="fas fa-calendar-alt"></i>{{ $item->created_at->diffForHumans() }}</div>
                                        <h3><a href="{{ route('detalhe-artigo', $item->id) }}">{{ $item->title }}</a></h3>
                                        <div class="text">{{ $item->description }}</div>
                                    </div>
                                    <div class="lower-box clearfix">
                                        <div class="left-content pull-left">
                                            <figure class="admin-image"><img src="{{ asset('site/images/resource/admin-1.png') }}">
                                            </figure>
                                            <span class="admin-name"><strong>Autor:</strong>&nbsp; {{ $item->author }}</span>
                                        </div>
                                        <ul class="right-content pull-right">
                                            <li><a href="#">{{ $item->category }} &nbsp;<i class="fas fa-tag"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty

                    @endforelse
                    {{ $articles->links('layouts.pagination') }}
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="sidebar">
                    <div class="sidebar-search sidebar-widget">
                        <div class="search-form">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="search" name="search-field" placeholder="Busca" required="">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
