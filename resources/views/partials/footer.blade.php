<footer>
    <div class="footer_top d-flex justify-content-between">
        <div class="inner">
          <div class="row">
            <!-- COL Left -->
            <div class="col">
              <div class="dc-comics">
                <ul>
                  <h6>DC COMICS</h6>
                  @foreach ($foot_links['dcComicsLinks'] as $links_lists) 
                  
                      <li class="list-group-item">
                          <a class="text-decoration-none" href="#">{{ $links_lists }} </a>
                      </li>
                    @endforeach

                </ul>
              </div>
              <div class="shop margin-top">
                <ul>
                  <h6>SHOP</h6>
                  @foreach ($foot_links['shopLinks'] as $links_lists) 
                  
                  <li class="list-group-item">
                      <a class="text-decoration-none" href="#">{{ $links_lists }} </a>
                  </li>
                @endforeach
                </ul>
              </div>
            </div>
            <!-- // COL Left -->
            <!-- COL Center -->
            <div class="col">
              <div class="dc">
                <ul>
                  <h6>DC</h6>
                  @foreach ($foot_links['dcLinks'] as $links_lists) 
                  
                  <li class="list-group-item">
                      <a class="text-decoration-none" href="#">{{ $links_lists }} </a>
                  </li>
                @endforeach
                </ul>
              </div>
            </div>
            <!-- // COL Center -->
            <!-- COL Right -->
            <div class="col">
              <div class="sites">
                <ul>
                  <h6>SITES</h6>
                  @foreach ($foot_links['sitesLinks'] as $links_lists) 
                  
                  <li class="list-group-item">
                      <a class="text-decoration-none" href="#">{{ $links_lists }} </a>
                  </li>
                @endforeach
                </ul>
              </div>
            </div>
            <!-- // COL Right -->
          </div>
          <div class="copyrights">
            <span>All Site Content TM and © 2020 DC Entertainment, unless otherwise <a href="">noted here</a>. All rights reserved. <a href="">Cookies Settings</a>  </span>
          </div>
        </div>
      
        <div class="logo-bg"></div>
      </div>
    </footer>