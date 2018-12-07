{{-- part_header_status.blade.php --}}


  @switch(env('APP_ENV'))
      
    @case('dev')
      <header id="header-env-status-dev" class="transient">
        <marquee  class="alert alert-danger display-3">Application in <strong>DEVELOPMENT CONFIGURATION</strong></marquee>        
      </header>
      
      @break
      
    @case('draft')
         
      <header id="header-env-status-draft" class="transient">
          <marquee  class="alert alert-danger">Application in <strong>DRAFT CONFIGURATION</strong></marquee> 
      </header>   
      
      @break
      
    @case('live')
      <header hidden id="header-env-status-live" class="transient">
        <marquee  class="alert alert-danger">
          Application in <strong>LIVE CONFIGURATION</strong>
        </marquee>
      </header>
          
      @break
  
    @default
  
      <header id="header-env-status-noenv" class="transient">
          <marquee  class="alert alert-danger">Application in <strong>CONFIGURATION CANNOT BE DETERMINED!</strong></marquee>
      </header> 
              
  @endswitch
