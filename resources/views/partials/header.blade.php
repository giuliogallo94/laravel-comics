<header>
    <div class="ms_container d-flex justify-content-between align-items-center">
      <div class="logo">
        <img src="{{ Vite::asset('/resources/images/dc-logo.png')}}" alt="Logo DC" />
      </div>
      <nav>
        <ul class="d-flex align-items-center gap-3 m-0">
          @foreach ($nav_links as $link)
          <li class="list-group-item">
            <a class="text-decoration-none fw-bold" href="{{($link)}}">{{strtoupper($link)}}</a>
          </li>
          @endforeach
        </ul>
      </nav>
      <div class="text-end w-100">
        <input type="text" class="searchbar" placeholder="Search">
        
      </div>
    </div>
  </header>