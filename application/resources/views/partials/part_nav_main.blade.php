{{-- part_nav_main.blade --}}
<nav class="navbar navbar-expand-md navbar-light bg-light">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
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
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <ul>
                    @foreach ($services as $service)
                        <li id="li-services-{{$service}}">
                                <a href="/services?service={{$service->slug}}" class="dropdown-item" >{{$service->name}}</a>
                        </li>
                    @endforeach
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </nav>