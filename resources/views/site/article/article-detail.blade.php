@extends('layouts.site')

@section('title-page')
{{ $article->title }}
@endsection

@section('content')
<section class="sidebar-page-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-12 col-sm-12 content-side">
                <div class="blog-single-content">
                    <div class="post-details">
                        <figure class="image-box"><img src="{{ $article->image }}"></figure>
                        <div class="inner-box">
                            <div class="upper-box">
                                <div class="post-date"><i
                                        class="fas fa-calendar-alt"></i>{{ $article->created_at->format('d/m/Y') }}
                                </div>
                                <blockquote>{{ $article->description }}</blockquote>
                                <h3>{{ $article->title }}</h3>
                                <div class="text">{{ $article->body }}</div>
                            </div>
                            <div class="lower-box clearfix">
                                <div class="left-content pull-left">
                                    <figure class="admin-image"><img
                                            src="{{ asset('site/images/resource/admin-1.png') }}">
                                    </figure>
                                    <span class="admin-name"><strong>Autor:</strong> {{ $article->author }}</span>
                                </div>
                                <ul class="right-content pull-right">
                                    <li><a href="#">{{ $article->category }} &nbsp;<i class="fas fa-tag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 sidebar-side">
                @if($article->file)
                    <div id="content_block_16">
                        <div class="content-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="sec-title">
                                <h2>Download do Trabalho</h2>
                            </div>
                            <div class="download-btn">
                                <a href="{{ $article->file }}" class="app-store-btn">
                                    <i class="fas fa-file-pdf"></i>
                                    <span>Download do documento</span>PDF
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
