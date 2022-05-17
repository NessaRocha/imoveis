<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ storage('images/favicon.ico')}}" type="image/x-icon" />
    <link ref="stylesheet" href="{{ storage('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ storage('/css/index.css') }}">
    <link rel="stylesheet" href="{{ storage('/css/master.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>@yield('title')</title>
    @yield('head')
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg py-4 px-2" id="navbar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark p-4">
                        <h5 class="text-white h4">Collapsed content</h5>
                        <span class="text-muted">Toggleable via the navbar brand.</span>
                    </div>
                </div>
                <nav class="navbar navbar-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>
                <a href="{{url('/')}}" class="navbar-brand"><img src="{{ storage('images/webimoveis.png')}}" rounded
                        mx-auto d-blockalt="Seu Imóvel"> </a>
                <div id="navbar-items">
                    <h4><strong>Nossas Redes Sociais</strong></h4>
                    <a href="https://www.instagram.com/"><img src="{{ storage('images/insta.png')}}" alt="Insta"></a><a
                        href="https://twitter.com/"><img src="{{ storage('images/twitter.png')}}" alt="Twiter"><a
                            href="https://www.facebook.com/"><img src="{{ storage('images/faceb2.png')}}"
                                alt="Face"></b>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg prymary-bg-color p-2" id="bottom-navbar-container">
            <div class="container-s">
                <ul class="navbar-nav mb-2 mb-lg-0 collapse navbar-collapse" id="bottom-navbar">
                    <li class="nav-item">
                        <a href="{{url('/somos')}}" class="nav-link">Quem somos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/venda')}}" class="nav-link">Venda seu Imóvel</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/compre-seu-imovel')}}" class="nav-link">Compre seu Imóvel</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/contato')}}" class="nav-link">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="company-info-container">
        <div class="company-info-backgound"></div>
        <div class="company-info-titlebox">
            <h2><strong>Aqui você encontra as melhores opções de Imóveis</strong></h2>
            <p>Nossa plataforma completa para vendas e compras de imóveis, é aqui onde você encontra as melhores
                opções e ofertas imobiliárias</p>
        </div>
    </div>
    </div>
    <div class="pesquisaimob">
        <div class="row">
            <div class="imovel" id="cidade">
            <input type="text" class="form-imoveis" placeholder="Busque por cidade">
            <div class="imovel" id="bairro">
            <input type="text" class="form-imoveis" placeholder="Busque por bairro">
                    <div class="imovel" id=valor>
                    <input type="text" class="form-imoveis" placeholder="Busque por valor">
                        <div class="imovel" id="quartos">
                        <input type="text" class="form-imoveis" placeholder="Busque por n° de quartos">

                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>

    <br><br><br><br>


    @yield('content')

    <script src="js/script.js"></script>
    <footer id="footer">
        <div class="container-fluid" id="footer-links-container">
            <div class="row">
                <div class="col-12 col-md-4 footer-column">
                    <h3>Sobre Web Imóveis</h3>
                    <ul class="list">
                        <li class="mb-2"><a href="#" class="primary-color">Sobre Nós</a></li>
                        <li class="mb-2"><a href="#" class="primary-color">Nossa História</a></li>
                        <li class="mb-2"><a href="#" class="primary-color">Artigos</a></li>
                        <li class="mb-2"><a href="#" class="primary-color">Fale Conosco</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 footer-column" id="footer-center">
                    <h3>Nossas Redes Sociais</h3>
                    <ul class="list">
                        <li class="mb-2"><a href="#" class="primary-color">Instagram <i
                                    class="fa-brands fa-instagram-square"></i></a></li>
                        <li class="mb-2"><a href="#" class="primary-color">Facebook <i
                                    class="fa-brands fa-facebook-square"></i></a></li>
                        <li class="mb-2"><a href="#" class="primary-color">Twitter <i
                                    class="fa-brands fa-twitter-square"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 footer-column">
                    <h3>Perguntas Frequentes</h3>
                    <ul class="list">
                        <li class="mb-2"><a href="#" class="primary-color">Politica de Privacidade</a></li>
                        <li class="mb-2"><a href="#" class="primary-color">Termo de Uso</a></li>
                    </ul>
                </div>
                <div class="container-fluid" id="newsletter-container">
                    <div class="col-12">
                        <div class="row">
                            <p class="secondary-color">Se inscreva na nossa Newsletter:</p>
                            <form class="d-flex" id="news-form">
                                <i class=" 
          <i class=" fa-solid fa-envelope"></i>
                                <input type="email" class="form-control me-2" placeholder="Insira seu melhor e-mail">
                                <button class="btn secondary-bg-color" type="submit">Enviar</button>
                            </form>
                        </div>
                    </div>
                    <div class="container" id="copy-container">
                        <p>Todos os direitos reservados @2022<span class="primary-color"> Web Imóveis </span></p>
                    </div>
    </footer>

</body>

</html>