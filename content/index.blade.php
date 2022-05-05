@extends('template.'.config('settings.template').'.content.master')
@section ('title','WEB IMÓVEIS')
@section('content')
<div class="container" id="mini-banners">
    <div class="row justify-content-around pt-5">
        <h2 class="primery-bg-color">Casa de Campo</h2>
        <div class="card anuncio">
            <div class="card-img-top">
                <img class=" img-fluid rounded" src="{{ storage('images/casa_de_campo.jpg')}}" alt="casadecampo">
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
        </div>
        <div class="card anuncio">
            <div class="card-img-top">
                <img class="img-fluid rounded" src="{{ storage('images/cdc2.jpg')}}" alt="casadecampo1">
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
        </div>
        <div class="card anuncio">
            <div class="card-img-top">
                <img class="img-fluid rounded" src="{{ storage('images/cdc3.jpg')}}" alt="casadecampo2">
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
        </div>
        <div class="card anuncio">
            <div class="card-img-top">
                <img class="img-fluid rounded" src="{{ storage('images/cdc4.jpg')}}" alt="casadecampo3">
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
        </div>
        <div class="container" id="mini-banners1">
            <div class="row justify-content-around pt-5">
                <h2 class="primery-bg-color">Casa de Praia</h2>
                <div class="card anuncio">
                    <div class="card-img-top">
                        <img class="img-fluid rounded" src="{{ storage('images/casa_de_praia.jpg')}}" alt="casadepraia">
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
                <div class="card anuncio">
                    <div class="card-img-top">
                        <img class="img-fluid rounded" src="{{ storage('images/cdp2.jpg')}}" alt="casadepraia">
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
                <div class="card anuncio">
                    <div class="card-img-top">
                        <img class="img-fluid rounded" src="{{ storage('images/cdp3.jpg')}}" alt="casadepraia">
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
                <div class="card anuncio">
                    <img class="img-fluid rounded" src="{{ storage('images/cdp4.jpg')}}" alt="casadepraia">
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
                <div class="container" id="mini-banners2">
                    <div class="row justify-content-around pt-5">
                        <h2 class="primery-bg-color">Casa na Cidade</h2>
                        <div class="card anuncio">
                            <img class="img-fluid rounded" src="{{ storage('images/casa_de_cidade.jpg')}}"
                                alt="casadecidade">
                            <div class="card-body">
                                <a href="#" class="btn btn-primary">Saiba Mais</a>
                            </div>
                        </div>
                        <div class="card anuncio">
                            <img class="img-fluid rounded" src="{{ storage('images/casadecidad2.jpg')}}"
                                alt="casadecidade">
                            <div class="card-body">
                                <a href="#" class="btn btn-primary">Saiba Mais</a>
                            </div>
                        </div>
                        <div class="card anuncio">
                            <img class="img-fluid rounded" src="{{ storage('images/casadecidad3.jpg')}}"
                                alt="casadecidade">
                            <div class="card-body">
                                <a href="#" class="btn btn-primary">Saiba Mais</a>
                            </div>
                        </div>
                        <div class="card anuncio">
                            <img class="img-fluid rounded" src="{{ storage('images/casadecid4.jpg')}}"
                                alt="casadecidade">
                            <div class="card-body">
                                <a href="#" class="btn btn-primary">>Saiba Mais</a>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <p>Como foi pensado a Web Imóveis, em um unico lugar,
            você tem as opções de imóveis anunciados em diversas
            plataformas de venda, assim como o seu anuncio
            também.</p>
        <p>Um lugar para sua venda e sua compra de Imóveis na
            web</p>
        <p>Viva a experiencia de conhecer as opçções de compra e
            venda em um unico portal</p>
        @stop