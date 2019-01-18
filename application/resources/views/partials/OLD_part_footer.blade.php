<footer id="footer" class="mt-4 text-color-ancillary">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-12 text-center">Mobile: 07729 673 542</div>
@if ($title !== 'Contact')
      <div class="col-xs-12 col-md-12 text-nowrap text-center">Email: steve@stevethewebdev.co.uk</div>
@endif
    </div>
    <br/>
    <div class="row">
      <div class="col-12 text-center"> &copy; Steve Brown  {{ Carbon\Carbon::now()->format('Y')}} </div>
    </div>
  </div>
</footer>
