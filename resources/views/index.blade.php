<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="issayev.adilet@gmail.com">

  <title>@yield('title_description', 'G-Kaz - Доступная мебель под заказ')</title>
  <meta name="description" content="@yield('meta_description', 'Чтобы уточнить стоимость изготовления мебели, сроки, используемые материалы, вопросы доставки и сборки, наличие современного оборудования, позвоните нам в удобное время или оставьте сообщение. Мы сразу свяжемся, подберем оптимальный вариант мебели, оформим соглашение, подсчитаем предварительную стоимость работ, своевременно изготовим и привезем изделие, поможем полезными советами.')">

  <link rel="icon" href="/images/favicon.png" type="image/png" />
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">

  <link href="/css/reset.css" rel="stylesheet" type="text/css">
  <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="/assets/iconmoon/css/iconmoon.css" rel="stylesheet" type="text/css">
  <link href="/assets/owl-carousel/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
  <link href="/css/animate.css" rel="stylesheet" type="text/css">
  <link href="/css/custom.css" rel="stylesheet" type="text/css">
  <link href="/css/my.css" rel="stylesheet" type="text/css">
  <link href="bower_components/photoswipe/dist/photoswipe.css" rel="stylesheet" type="text/css">
  <link href="bower_components/photoswipe/dist/default-skin/default-skin.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
  <div class="container header-sec">
    <div class="row">
      <span class="col-xs-12 col-sm-4 logo"><a href="/"><img src="images/logos/logo-green-white.png" style="max-height: 70px;" class="img-responsive" alt=""></a></span>
      <div class="col-xs-12 col-sm-8 header-right-bottom">
        <!-- Start Header Right Top -->
        <div class="header-right-top">
          <!-- <a class="tel-number"><i class="fa fa-map-marker" aria-hidden="true"></i> г. Алматы</a> -->
          <a class="tel-number" href="tel:+77001449944"><i class="fa fa-phone" aria-hidden="true"></i> +7 700 144 99 44</a>
          <a class="tel-number" href="whatsapp://send?phone=+77001449944"><i class="fa fa-whatsapp text-success-" aria-hidden="true"></i> +7 700 144 99 44</a>
        </div>
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-md navbar-dark navbar-custom">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"> <span class="navbar-toggler-icon"></span> </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="scrollto nav-link" href="#main">Главная</a></li>
              <li class="nav-item"><a class="scrollto nav-link" href="#projects">Наши работы</a></li>
              <li class="nav-item"><a class="scrollto nav-link" href="#advantages">Преимушество</a></li>
              <li class="nav-item"><a class="scrollto nav-link" href="#3d">Дизайн Интерьера</a></li>
              <li class="nav-item"><a class="scrollto nav-link" href="#contacts">Контакты</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>

<!-- BANNER -->
<section class="banner-outer" id="main">
  <div class="banner-image">
    <div style="background-color: rgba(0, 0, 0, 0.35);">
      <div class="container">
        <div class="row">
          <div class="content animated fadeInLeft">
            <div class="col-md-8 col-sm-8">
              <h1><span class="text-green">Мебель</span> для тех кто хочет жить в роскоши!</h1><br>
              <h4>Компания Gkaz – лучший производитель эксклюзивной мебели в Алматы предлагает мебель на заказ</h4><br>
            </div>
            <div class="col-md-12 col-sm-12"><br><br><br>
              <h4>Расчет стоимости мебели</h4><br>
              <form method="post" class="form-row" action="/send-app">
                {{ csrf_field() }}
                <div class="col form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <input name="name" type="text" class="form-control-lg" placeholder="Введите имя*" minlength="2" maxlength="40" value="{{ (old('name')) ? old('name') : '' }}" required>
                  @if ($errors->has('name'))
                    <span class="help-block">{{ $errors->first('name') }}</span>
                  @endif
                </div>
                <div class="col form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                  <input name="phone" type="tel" class="form-control-lg" pattern="(\+?\d[- .]*){7,13}" placeholder="Введите номер телефона*" minlength="5" maxlength="20" value="{{ (old('phone')) ? old('phone') : '' }}" required>
                  @if ($errors->has('phone'))
                    <span class="help-block">{{ $errors->first('phone') }}</span>
                  @endif
                </div>
                <div class="col form-group text-center">
                  <input type="submit" name="submit" class="btn" value="РАСЧИТАТЬ СТОИМОСТЬ">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- APP 
<section class="app-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <h2><span class="text-uppercase-">Бесплатный Замер</span><br> и расчет стоимости мебели</h2><br>
        <form class="form-row" method="post" action="/send-app">
          {{ csrf_field() }}
          <div class="col form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input name="name" type="text" class="form-control-lg" placeholder="Введите имя*" minlength="2" maxlength="40" value="{{ (old('name')) ? old('name') : '' }}" required>
            @if ($errors->has('name'))
              <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
          </div>
          <div class="col form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <input name="phone" type="tel" class="form-control-lg" pattern="(\+?\d[- .]*){7,13}" placeholder="Введите номер телефона*" minlength="5" maxlength="20" value="{{ (old('phone')) ? old('phone') : '' }}" required>
            @if ($errors->has('phone'))
              <span class="help-block">{{ $errors->first('phone') }}</span>
            @endif
          </div>
          <div class="col form-group text-center">
            <input type="submit" name="submit" class="btn" value="Отправить заявку">
          </div>
        </form>
      </div>
      <div class="col-sm-2">
        <h2>Адрес:</h2><br>
        <h5 class="text-white">Город Алматы, ул. Толе би, Ауэзова, 3/5</h5>
      </div>
    </div>
  </div>
</section>-->

<!-- PROJECTS -->
<section class="feature-outer" id="projects">
  <div class="container">
    <div class="head">
      <h3>Наши Работы</h3>
    </div>
    <?php $grouped = $gallery->groupBy('title'); ?>
    @foreach($grouped as $data => $group)
      <br>
      <h3>{{ $data }}</h3><br><br>
      <div class="row my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
        @foreach($group as $image)
          <figure class="col-sm-4 " itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/images/gallery/{{ $image->image }}" itemprop="contentUrl" data-size="1280x768">
              <img src="/images/gallery/mini-{{ $image->image }}" itemprop="thumbnail" alt="Image description" /><br>
            </a>
          </figure>
        @endforeach
      </div>
    @endforeach
  </div>
</section>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>

<!-- APP -->
<section class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4 text-center">
      <h4>Расчет стоимости мебели</h4><br>
      <form method="post" action="/send-app">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <input name="name" type="text" class="form-control-lg" placeholder="Введите имя*" minlength="2" maxlength="40" value="{{ (old('name')) ? old('name') : '' }}" required>
          @if ($errors->has('name'))
            <span class="help-block">{{ $errors->first('name') }}</span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
          <input name="phone" type="tel" class="form-control-lg" pattern="(\+?\d[- .]*){7,13}" placeholder="Введите номер телефона*" minlength="5" maxlength="20" value="{{ (old('phone')) ? old('phone') : '' }}" required>
          @if ($errors->has('phone'))
            <span class="help-block">{{ $errors->first('phone') }}</span>
          @endif
        </div>
        <div class="form-group text-center">
          <input type="submit" name="submit" class="btn" value="РАСЧИТАТЬ СТОИМОСТЬ">
        </div>
      </form>
    </div>
  </div>
</section><br><br>

<!-- OUR DIFFERENCE FROM COMPITITORS -->
<section class="bg-process-2" id="advantages">
  <div class="bg-blue">
  <div class="container">
    <div class="head">
      <h3>Наше отличие от конкурентов</h3><br>
      <!-- <p>Став одним из наших заказчиков и поручив нам изготовление вашей мебели вы получите оптимальный результат, поскольку:</p> -->
    </div>
    <div class="team-list">
      <div class="row">
        <div class="col-sm-4 col-xs-12">
          <div class="team-box">
            <figure><img src="images/offer_icon5.png"></figure>
            <h4>Высшее специальное образование мастеров</h4>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="team-box">
            <figure><img src="images/offer_icon5.png"></figure>
            <h4>Наши учителя заслуженные деятели искусства РК</h4>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="team-box">
            <figure><img src="images/offer_icon5.png"></figure>
            <h4>Используем современное программное обеспечение и оборудование</h4>
          </div><br><br><br>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="team-box">
            <figure><img src="images/offer_icon5.png"></figure>
            <h4>Около 160 довольных клиентов</h4>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="team-box">
            <figure><img src="images/offer_icon5.png"></figure>
            <h4>10 лет ценного опыта</h4>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="team-box">
            <figure><img src="images/offer_icon5.png"></figure>
            <h4>Главный принцип: не экономить на качестве</h4>
          </div>
        </div>
      </div><br><br>
      <div class="row">
        <div class="col-md-4 offset-md-4 text-center">
          <h3>Расчет стоимости мебели</h3><br>
          <form method="post" action="/send-app">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <input name="name" type="text" class="form-control-lg" placeholder="Введите имя*" minlength="2" maxlength="40" value="{{ (old('name')) ? old('name') : '' }}" required>
              @if ($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
              <input name="phone" type="tel" class="form-control-lg" pattern="(\+?\d[- .]*){7,13}" placeholder="Введите номер телефона*" minlength="5" maxlength="20" value="{{ (old('phone')) ? old('phone') : '' }}" required>
              @if ($errors->has('phone'))
                <span class="help-block">{{ $errors->first('phone') }}</span>
              @endif
            </div>
            <div class="form-group text-center">
              <input type="submit" name="submit" class="btn" value="РАСЧИТАТЬ СТОИМОСТЬ">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- OFFER -->
<section class="offer-custom bg-dark-blue2">
  <div class="container-fluid-">
    <div class="offer-section-1">
      <div class="row no-gutters align-items-center">
        <div class="col-sm-7 col-xs-12">
          <div class="col-sm-10 offset-sm-2">
            <h3>Избавьтесь от косяков новичков  доверившись профессионалам!</h3><br>
          </div>
        </div>
        <!-- <div class="col-sm-5">
          <img src="images/q/photo_2018-07-11_20-25-28.jpg" class="img-responsive">
        </div> -->
      </div>
    </div>
    <div class="offer-section-2">
      <div class="row no-gutters align-items-center">
        <!-- <div class="col-sm-5 order-xs-2">
          <img src="images/q/photo_2018-07-11_20-23-59.jpg" class="img-responsive">
        </div> -->
        <div class="offset-sm-5 col-sm-7 col-xs-12 order-xs-1">
          <div class="col-sm-12">
            <h3>Мы экономим ваше время предлогая только то что вам нужно! </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="offer-section-3">
      <div class="row no-gutters align-items-center">
        <div class="col-sm-7 col-xs-12">
          <div class="col-sm-10 offset-sm-2">
            <h3>Собственное производство из лучших материалов</h3>
          </div>
        </div>
        <!-- <div class="col-sm-6">
          <img src="images/q/photo_2018-07-11_20-25-45.jpg" class="img-responsive">
        </div> -->
      </div>
    </div>
  </div>
</section>

<!-- HOW WE WORK -->
<section class="bg-process" id="advantages">
  <div class="bg-dark-2">
    <div class="container">
      <div class="head">
        <h3>Как мы работаем?</h3>
        <!-- <p>Став одним из наших заказчиков и поручив нам изготовление вашей мебели вы получите оптимальный результат, поскольку:</p> -->
      </div>
      <div class="row">
        <div class="col-sm-6">
          <h4>1. Звонок/заявка</h4><br>
          <h4>2. Бесплатный замер</h4><br>
          <h4>3. Выявление ваших потребностей</h4><br>
          <h4>4. Подбор наилучших вариантов</h4><br>
        </div><br><br>
        <div class="col-sm-6">
          <h4>5. Договор и выполнение работ</h4><br>
          <h4>6. Рекомендации по эксплуатации и уходу за изделиями</h4><br>
          <h4>7. Наслаждение отличным выбором</h4>
        </div><br><br>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-4 text-center">
          <h3>Расчет стоимости мебели</h3><br>
          <form method="post" action="/send-app">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <input name="name" type="text" class="form-control-lg" placeholder="Введите имя*" minlength="2" maxlength="40" value="{{ (old('name')) ? old('name') : '' }}" required>
              @if ($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
              <input name="phone" type="tel" class="form-control-lg" pattern="(\+?\d[- .]*){7,13}" placeholder="Введите номер телефона*" minlength="5" maxlength="20" value="{{ (old('phone')) ? old('phone') : '' }}" required>
              @if ($errors->has('phone'))
                <span class="help-block">{{ $errors->first('phone') }}</span>
              @endif
            </div>
            <div class="form-group text-center">
              <input type="submit" name="submit" class="btn" value="РАСЧИТАТЬ СТОИМОСТЬ">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- REVIEWS -->
<section class="testimonial-outer" id="reviews">
  <div class="container">
    <div class="head">
      <h3>Отзывы наших клиентов</h3>
    </div>
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="testimonial-slider owl-carousel">
          <div class="testimonial-box item">
            <!-- <figure><img src="images/placeholder-107x107.png" alt=""></figure> -->
            <p>Доброго дня всем! Мне хочется поблагодарить ребят из eliteroom.kz за проделанную работу. За короткий срок они нам сделали мебель для детской, кухни, прихожей. Ребята очень вежливые, пунктуальные, аккуратные,и у них цена не дорогая  по сравнению с другими фирмами. В общем наша семья осталась довольной заказом, теперь и впредь будем только у них заказывать и сами, и советуем знакомым и друзьям!</p>
            <strong>- Маулет</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="why-outer" id="3d">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-xs-12">
        <!-- <h3>Что еще мы умеем?</h3> -->
        <!-- <h5>Помимо всех видов мебели для дома и офисов мы изготавливаем межкомнатные двери, лестницы, стеновые панели и столярные изделия.</h5> -->

        <h3>Средние цифры</h3><br>
        <ul>
          <li><h4 class="text-white">• Отклик на заявку 5 минут</h4></li>
          <li><h4 class="text-white">• Замер 30 минут</h4></li>
          <li><h4 class="text-white">• Изготовление 6 дней</h4></li>
          <li><h4 class="text-white">• Монтаж 1 день</h4></li>
          <li><h4 class="text-white">• Гарантия 2 года</h4></li>
        </ul>
      </div>
      <div class="col-sm-6 offset-sm-32 col-xs-12 p-l-30  ">
        <h3>Отправка заявки</h3><br>
        <form method="post" action="/send-app">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input name="name" type="text" class="form-control-lg" placeholder="Введите имя*" minlength="2" maxlength="40" value="{{ (old('name')) ? old('name') : '' }}" required>
            @if ($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
              @endif
          </div>
          <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <input name="phone" type="tel" class="form-control-lg" pattern="(\+?\d[- .]*){7,13}" placeholder="Введите номер телефона*" minlength="5" maxlength="20" value="{{ (old('phone')) ? old('phone') : '' }}" required>
            @if ($errors->has('phone'))
              <span class="help-block">{{ $errors->first('phone') }}</span>
            @endif
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn" value="Отправить">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT BUTTONS -->
<div class="fixed-button">
  <a href="whatsapp://send?phone=+77001449944" target="_top" data-attr="whatsapp_call">
    <img src="/images/whatsapp-logo.png">
  </a>
</div>
<div class="fixed-button2">
  <a href="tel:+77001449944" target="_top" data-attr="phone">
    <img src="/images/phone-receiver.png">
  </a>
</div>

<!-- MESSAGE STATUS -->
<div class="modal fade" id="message-status" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center text-uppercase">Статус заявки</h4>
      </div>
      <div class="modal-body">
        <p class="alert {{ session('alert') }}">{{ session('message') }}</p>
      </div>
    </div>
  </div>
</div>

<!-- FOOTER -->
<footer class="footer" id="contacts"> 
  <!-- Start Footer top -->
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-xs-12">
          <div class="footer-detail">
            <a href="/" class="footer-logo"><img src="images/logos/logo-green-white.png" style="max-height: 100px;" alt=""></a>
            <!-- <p>Чтобы уточнить стоимость изготовления мебели, сроки, используемые материалы, вопросы доставки и сборки, компетенцию мастеров, применяемые технологии, наличие современного оборудования, позвоните нам в удобное время или оставьте сообщение. Мы сразу свяжемся, подберем оптимальный вариант мебели, оформим соглашение, подсчитаем предварительную стоимость работ, своевременно изготовим и привезем изделие, поможем полезными советами.</p> -->
            <p>Компания Gkaz – лучший производитель эксклюзивной мебели в Алматы</p>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="imp-links">
            <h3>Ссылки на разделы</h3>
            <ul class="clearfix imp_list">
              <li><a href="#main">Главная</a></li>
              <li><a href="#app">Форма для заявки</a></li>
              <li><a href="#projects">Наши работы</a></li>
              <li><a href="#advantages">Преимушество</a></li>
              <li><a href="#reviews">Отзывы</a></li>
              <li><a href="#3d">Дизайн Интерьера</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="contact-us">
            <h3>Контакты</h3>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Казахстан, г. Алматы, ул. Немировича-Данченко 51а</p>
            <a href="tel:+77001449944"><i class="fa fa-phone" aria-hidden="true"></i> +7 700 144 9944</a>
            <a href="whatsapp://send?phone=+77001449944"><i class="fa fa-whatsapp text-success" aria-hidden="true"></i> +7 700 144 99 44</a>
            <a href="/mailto:eliteroom.company@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> eliteroom.company@gmail.com</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Copy Rights -->
  <div class="copy-rights-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <p>© <?php echo date('Y'); ?> EliteRoom - Все права зарезервированы</p>
        </div>
        <div class="col-sm-6 col-xs-12">
          <ul class="follow-us clearfix">
            <li><a href="https://www.instagram.com/g_kaz.mebel/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="/#" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="/#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="/#" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="/#" target="_blank"><i class="fa fa-vk"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Scroll to top --> 
<a href="/#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter50226655 = new Ya.Metrika2({
                    id:50226655,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/50226655" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.min.js"></script> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/owl-carousel/js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
<!-- Message Status -->
@if (session('alert'))
  <script type="text/javascript">
    $(window).on('load',function(){
        $('#message-status').modal('show');
    });
  </script>
@endif

<script src="bower_components/photoswipe/dist/photoswipe.min.js"></script>
<script src="bower_components/photoswipe/dist/photoswipe-ui-default.min.js"></script>
<script type="text/javascript">
  // SCROLL PAGE
  $(document).ready(function () {
    $("a.scrollto").click(function () {
      var el = $(this).attr('href');
      $('html, body').animate({ scrollTop: $(el).offset().top }, 1000);
      return false;
    });
  });


  var initPhotoSwipeFromDOM = function(gallerySelector) {

      // parse slide data (url, title, size ...) from DOM elements 
      // (children of gallerySelector)
      var parseThumbnailElements = function(el) {
        // var thumbElements = Array.prototype.slice.call(document.querySelectorAll('.find-them-all')),
            // clickedGallery = document.querySelectorAll('.my-gallery')[0],
            // childNodes = Array.prototype.slice.call(document.querySelectorAll('.find-them-all')),
          var thumbElements = el.childNodes,
              numNodes = thumbElements.length,
              items = [],
              figureEl,
              linkEl,
              size,
              item;

          for(var i = 0; i < numNodes; i++) {

              figureEl = thumbElements[i]; // <figure> element

              // include only element nodes 
              if(figureEl.nodeType !== 1) {
                  continue;
              }

              linkEl = figureEl.children[0]; // <a> element

              size = linkEl.getAttribute('data-size').split('x');

              // create slide object
              item = {
                  src: linkEl.getAttribute('href'),
                  w: parseInt(size[0], 10),
                  h: parseInt(size[1], 10)
              };

              if(figureEl.children.length > 1) {
                  // <figcaption> content
                  item.title = figureEl.children[1].innerHTML; 
              }

              console.log(figureEl.children);

              if(linkEl.children.length > 0) {
                  // <img> thumbnail element, retrieving thumbnail url
                  item.msrc = linkEl.children[0].getAttribute('src');
              } 

              item.el = figureEl; // save link to element for getThumbBoundsFn
              items.push(item);
          }

          return items;
      };

      // find nearest parent element
      var closest = function closest(el, fn) {
          return el && ( fn(el) ? el : closest(el.parentNode, fn) );
      };

      // triggers when user clicks on thumbnail
      var onThumbnailsClick = function(e) {
          e = e || window.event;
          e.preventDefault ? e.preventDefault() : e.returnValue = false;

          var eTarget = e.target || e.srcElement;

          // find root element of slide
          var clickedListItem = closest(eTarget, function(el) {
              return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
          });

          if(!clickedListItem) {
              return;
          }

          // find index of clicked item by looping through all child nodes
          // alternatively, you may define index via data- attribute
          var clickedGallery = clickedListItem.parentNode,
              childNodes = clickedListItem.parentNode.childNodes,
              numChildNodes = childNodes.length,
              nodeIndex = 0,
              index;

          for (var i = 0; i < numChildNodes; i++) {
              if(childNodes[i].nodeType !== 1) { 
                  continue; 
              }

              if(childNodes[i] === clickedListItem) {
                  index = nodeIndex;
                  break;
              }
              nodeIndex++;
          }



          if(index >= 0) {
              // open PhotoSwipe if valid index found
              openPhotoSwipe( index, clickedGallery );
          }
          return false;
      };

      // parse picture index and gallery index from URL (#&pid=1&gid=2)
      var photoswipeParseHash = function() {
          var hash = window.location.hash.substring(1),
          params = {};

          if(hash.length < 5) {
              return params;
          }

          var vars = hash.split('&');
          for (var i = 0; i < vars.length; i++) {
              if(!vars[i]) {
                  continue;
              }
              var pair = vars[i].split('=');  
              if(pair.length < 2) {
                  continue;
              }           
              params[pair[0]] = pair[1];
          }

          if(params.gid) {
              params.gid = parseInt(params.gid, 10);
          }

          return params;
      };

      var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
          var pswpElement = document.querySelectorAll('.pswp')[0],
              gallery,
              options,
              items;

          items = parseThumbnailElements(galleryElement);

          // define options (if needed)
          options = {

              // define gallery index (for URL)
              galleryUID: galleryElement.getAttribute('data-pswp-uid'),

              getThumbBoundsFn: function(index) {
                  // See Options -> getThumbBoundsFn section of documentation for more info
                  var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                      pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                      rect = thumbnail.getBoundingClientRect(); 

                  return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
              }

          };

          // PhotoSwipe opened from URL
          if(fromURL) {
              if(options.galleryPIDs) {
                  // parse real index when custom PIDs are used 
                  // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                  for(var j = 0; j < items.length; j++) {
                      if(items[j].pid == index) {
                          options.index = j;
                          break;
                      }
                  }
              } else {
                  // in URL indexes start from 1
                  options.index = parseInt(index, 10) - 1;
              }
          } else {
              options.index = parseInt(index, 10);
          }

          // exit if index not found
          if( isNaN(options.index) ) {
              return;
          }

          if(disableAnimation) {
              options.showAnimationDuration = 0;
          }

          // Pass data to PhotoSwipe and initialize it
          gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
          gallery.init();
      };

      // loop through all gallery elements and bind events
      var galleryElements = document.querySelectorAll( gallerySelector );

      for(var i = 0, l = galleryElements.length; i < l; i++) {
          galleryElements[i].setAttribute('data-pswp-uid', i+1);
          galleryElements[i].onclick = onThumbnailsClick;
      }

      // Parse URL and open gallery if it contains #&pid=3&gid=1
      var hashData = photoswipeParseHash();
      if(hashData.pid && hashData.gid) {
          openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
      }
  };

  // execute above function
  initPhotoSwipeFromDOM('.my-gallery');

</script>
</body>
</html>