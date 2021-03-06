<div class="page-header @if(has_post_thumbnail()) page-header--media @endif">
  <div class="page-header__inside">
    @if(has_post_thumbnail())
    <figure class="page-header__media">
        @thumbnail('banner')
    </figure>
    @endif
    <div class="page-header__content">
      @if(!is_404())
        @include('partials/breadcrumb')
      @endif
      <h1>{!! App::title() !!}</h1>
      @if(isset($person_data['title']))
        {!! wpautop($person_data['title']) !!}
      @endif
      @if(isset($person_data['locality']))
        <p class="locality">{{ $person_data['locality'] }}</p>
      @endif
    </div>
    @if(has_post_thumbnail())
      <div class="fold">
        @svg('fold', ['aria-hidden' => 'true'])
      </div>
    @endif
  </div>
</div>
