
<!-- WHY WORK -->
<section class="bg-process" id="advantages">
  <div class="bg-grey-2">
  <div class="container">
    <div class="head">
      <h3>Почему с нами работают?</h3>
      <!-- <p>Став одним из наших заказчиков и поручив нам изготовление вашей мебели вы получите оптимальный результат, поскольку:</p> -->
    </div>
    <div class="team-list">
      <div class="row">
        <div class="col-sm-4 col-xs-12">
          <div class="team-box">
            <figure><img src="images/best-icon1.png"></figure>
            <h4>Предлагаем лучшее</h4>
            <p>Мы работаем только на современном оборудовании, используем новейшие станки, позволяющие минимизировать вероятность появления брака или недоделок.</p>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="team-box">
            <figure><img src="images/best-icon2.png"></figure>
            <h4>Контролируем качество</h4>
            <p>Мы обязательно учитываем любые требования заказчиков, внимательно разрабатываем проект будущей мебели, все этапы работы контролируем.</p>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="team-box">
            <figure><img src="images/best-icon3.png"></figure>
            <h4>Даем гарантию от 3-х лет</h4>
            <p>На изготовленную нами, мебель даем длительную гарантию. Если возникнут претензии, решаем их незамедлительно.</p>
          </div>
        </div>
      </div><br><br>
      <div class="row">
        <div class="col-md-4 offset-md-4 text-center">
          <h4>Оставьте заявку для расчета стоимости мебели</h4><br>
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
              <input type="submit" name="submit" class="btn" value="Оставить заявку">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
