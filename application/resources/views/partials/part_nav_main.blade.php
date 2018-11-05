{{-- partials.part_nav_main.blade --}}

 <nav id="nav-main-nav" class="navbar navbar-expand-lg navbar-light bg-light">
    <h1 class="sr-only">Main navigation <a href="#main" target="_self">Skip to main content</a></h1>
    <a class="navbar-brand img-fluid" href="{{ ($title == 'Welcome') ? '#' : '/' }}">
    <p id="par-brand-title">stevethewebdev.co.uk</p>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a href="{{($title!=='Welcome')? '/':'#'}}" class="nav-link {{($title!='Welcome')? 'active':''}}">Home</a>
      </li>
      <li class="nav-item">
        <a href="{{($title!=='Contact')? '/contact':'#'}}" class="nav-link  {{($title!='Contact')? 'active':''}}">Contact</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{($title!=='Services')? 'active':''}}" data-toggle="dropdown" href="{{($title!='Services')? '/services':'#'}}" role="button" aria-haspopup="true" aria-expanded="false" >Services</a>
              <div class="dropdown-menu">
                <ul>
                  @foreach ($services as $service)
                <a href="" class="dropdown-item {{($title!==$service->name)? 'active':''}}" >{{$service->name}}</a>  
                  @endforeach
                </ul>

                {{-- <a class="dropdown-item {{($title!=='Templates')? 'active':''}}"  href="{{($title!=='Templates')? '/templates':'#'}}">Template websites</a>
                <a class="dropdown-item {{($title!=='Mobile')? 'active':''}}"  href="{{($title!=='Templates')? '/templates':'#'}}">Mobile-first sites</a>
                <a class="dropdown-item {{($title!=='Design & build')? 'active':''}}"  href="{{($title!=='Templates')? '/templates':'#'}}">Bespoke design & build</a>
                <a class="dropdown-item {{($title!=='Booking forms')? 'active':''}}"  href="{{($title!=='Templates')? '/templates':'#'}}">Booking forms</a>
                <a class="dropdown-item {{($title!=='AMP')? 'active':''}}"  href="{{($title!=='Templates')? '/templates':'#'}}">Accelerated Mobile Pages (AMP)</a>
                <a class="dropdown-item {{($title!=='Accessible')? 'active':''}}"  href="{{($title!=='Templates')? '/templates':'#'}}">Accessible sites</a>
                <a class="dropdown-item {{($title!=='Social media')? 'active':''}}"  href="{{($title!=='Templates')? '/templates':'#'}}">Social media integration</a> --}}
            </div>
      </li> 
    </nav>

      {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{($title!=='Welcome')? '/#div-card-mobile':'#div-card-mobile'}}">Mobile-ready</a>
          <a class="dropdown-item" href="{{($title!=='Welcome')? '/#div-card-design':'#div-card-design'}}">Web Design</a>
          <a class="dropdown-item" href="{{($title!=='Welcome')? '/#div-card-amp':'#div-card-amp'}}">Accelerated Mobile Pages (AMP)</a>
          <a class="dropdown-item" href="{{($title!=='Welcome')? '/#div-card-cms':'#div-card-cms'}}" >Content Managment System (CMS)</a>
          <a class="dropdown-item" href="{{($title!=='Welcome')? '/#div-card-ecommerce ':'#div-card-ecommerce'}}">E-commerce</a>
          <a class="dropdown-item" href="{{($title!=='Welcome')? '/#div-card-copywriting':'#div-card-copywriting'}}" >Copy Writing</a>
          <a class="dropdown-item" href="{{($title!=='Welcome')? '/#div-card-seo':'#div-card-seo'}}">Search Engine optimisation (SEO)</a>
          <a class="dropdown-item" href="{{($title!=='Welcome')? '/#div-card-analytics':'#div-card-analytics'}}">Web Analytics</a>
          <a class="dropdown-item" href="{{($title!=='Welcome')? '/#div-card-social-media':'#div-card-social-media'}}">Social Media</a>
          <a class="dropdown-item" href="{{($title!=='Welcome')? '/#div-card-accessibility':'#div-card-accessibility'}}">Accessibility</a>
        </div>
      </li> --
      </ul>
  </div>
</nav> --}}
