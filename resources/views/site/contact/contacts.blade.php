@extends('layouts.site')

@section('title-page')
Contato
@endsection

@section('content')
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 big-column">
                <div class="info-content centred">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <figure class="icon-box"><img
                                        src="{{ asset('site/images/icons/info-icon-1.png') }}">
                                </figure>
                                <h2>Telefone</h2>
                                <div class="phone"><a href="">
                                        (11) 4527 3444 <br>
                                        0800 772 8445
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <figure class="icon-box"><img
                                        src="{{ asset('site/images/icons/info-icon-2.png') }}">
                                </figure>
                                <h2>E-mail</h2>
                                <div class="phone"><a href="mailto:info@example.com">email@email.com.br</a></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <figure class="icon-box"><img
                                        src="{{ asset('site/images/icons/info-icon-3.png') }}">
                                </figure>
                                <h2>Endereço</h2>
                                <div class="phone"><a href="#">Av. Doutor Adoniro Ladeira, 94, (km 55,5 Rodovia Anhanguera), Jundiaí São Paulo 13210-795</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-container">
                    <figure class="image-box"><img
                            src="{{ asset('site/images/resource/contact-1.png') }}"></figure>
                </div>
                <div class="contact-form-area">
                    <div class="sec-title center">
                        <h2>Contate-Nos</h2>
                    </div>
                    <div class="form-inner">
                        <form method="post" id="contact-form" class="default-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <i class="fas fa-user"></i>
                                        <input type="text" name="" placeholder="Nome Completo" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" name="" placeholder="E-mail" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <i class="fas fa-file"></i>
                                        <input type="text" name="" placeholder="Assunto" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <i class="fas fa-phone"></i>
                                        <input type="text" name="" placeholder="Telefone" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <textarea name="" placeholder="Mensagem"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group message-btn centred">
                                        <button type="submit" class="theme-btn-two" name="submit-form">Enviar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
