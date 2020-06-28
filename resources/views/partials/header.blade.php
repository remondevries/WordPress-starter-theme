<header>
  <div>
    <div>
      <a href="{{ home_url('/') }}">
        Name
      </a>
    </div>

      <nav>
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav',
            'items_wrap' => '<div>%3$s</div>',
            'walker' => new Nav_Footer_Walker(),
            'echo' => false
          ]) !!}
        @endif
      </nav>

  </div>
</header>
