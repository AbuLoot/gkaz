
<!-- PROJECTS -->
<section class="feature-outer" id="projects">
  <div class="container">
    <div class="head">
      <h3>Наши Работы</h3>
    </div>

    <?php $grouped = $gallery->groupBy('slug'); ?>
    <ul class="tabs filter-button-group"">
      <li class="active" data-filter="*"><a>Все группы</a></li>
      @foreach($grouped as $data => $group)
        <li data-filter=".{{ $data }}"><a>{{ $group[0]['title'] }}</a></li>
      @endforeach
    </ul>

    <div class="row grid" id="lightgallery">
      @foreach($grouped as $data => $group)
        @foreach($group as $image)
          <div class="col-sm-4 item {{ $image->slug }}" data-category="{{ $image->slug }}" data-sort="{{ $image->title }}" data-src="/images/gallery/{{ $image->image }}">
            <figure><img src="/images/gallery/mini-{{ $image->image }}"></figure><br>
          </div>
        @endforeach
      @endforeach
    </div>
  </div>
</section>