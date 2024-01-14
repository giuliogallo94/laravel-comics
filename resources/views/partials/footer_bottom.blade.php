<div class="footer_bottom">
    <div class="footer-bottom">
        <div class="inner d-flex justify-content-between align-items-center">
          <div class="sign-up">
            <button>SIGN-UP NOW!</button>
          </div>
    
          <div class="social-media d-flex justify-content-between align-items-center">
            <h4 class="fw-bold m-0">FOLLOW US</h4>
            @foreach ($social_media as $social)
                
            <div  class="social-logo">
                <img src="{{ Vite::asset('/resources/images/'.$social['url'])}}" alt="" />
               
            </div>
            @endforeach
          </div>
        </div>
      </div>
</div>