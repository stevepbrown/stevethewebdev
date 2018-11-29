{{-- part_header_status.blade.php --}}


  @switch(env('APP_ENV'))
      
    @case('dev')
      <header>
        <marquee  class="alert alert-danger display-3">Application in <strong>DEVELOPMENT CONFIGURATION</strong></marquee>        
        @break
      </header>
      
    @case('draft')
         
      <header>
          <marquee  class="alert alert-danger">Application in <strong>DRAFT CONFIGURATION</strong></marquee> 
      </header>   
      
      @break
      
    @case('live')
      <header hidden>
        <marquee  class="alert alert-danger">
          Application in <strong>LIVE CONFIGURATION</strong>
        </marquee>
      </header>
          
              @break
  
    @default
  
      <header>
          <marquee  class="alert alert-danger">Application in <strong>CONFIGURATION CANNOT BE DETERMINED!</strong></marquee>
      </header> 
              
  @endswitch
