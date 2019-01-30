{{-- OLD_part_nav_main.blade --}}

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
                <a href="/services?service={{$service->slug}}" class="dropdown-item" >{{$service->name}}</a>                    @endforeach
                </ul>
            </div>
      </li> 
    </nav>
  