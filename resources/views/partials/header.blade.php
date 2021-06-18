<header class="banner container">
  <div class="row justify-content-center">
    <img class="col-sm-7" src="@asset('images/logo.png')" alt="The Crabapple Tree" />
    {{-- <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> --}}
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
