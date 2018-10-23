{{-- pages.X.blade.php --}}
@extends('layouts.main')
@section('main')
  <main id="main">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <p class="card-text">Web Analytics allow you to determine the success of your website using <em>measurable indicators</em></p>
          <p class="card-text">I can help you determine some Key Performance Indicators (KPIs) for you business, these could include:</p>
          <h4 class="card-title">Traffic Analysis</h4>
          <ul>
            <li>Visits</li>
            <li>Unique visits</li>
            <li>Return visits</li>
            <li>Visitor recency (how long since the person last visited)</li>
            <li>'Bounce' rates</li>
            <li>Temporal data e.g time on site / time on page, time of day, day of week</li>
          </ul>
          <h4 class="card-title">Demographics</h4>
          <ul>
            <li>Age</li>
            <li>Gender</li>
            <li>Geo-location data</li>
          </ul>
          <h4 class="card-title">Channel</h4>
            <ul>
              <li>Organic (search-engine)</li>
              <li>Direct</li>
              <li>Social</li>
              <li>Email</li>
              <li>Paid</li>
            </ul>
          <h4 class="card-title">Conversion</h4>
            <ul>
              <li>Click-through</li>
              <li>Conversion ratio</li>
              <li>Campaign metrics</li>
              <li>Abandoned orders</li>
            </ul>
          <h4 class="card-title">Sales data</h4>
            <ul>
              <li>Revenue</li>
              <li>Average order value</li>
              <li>Product & category performance</li>
              <li>Through-sales</li>
              <li>Visit-to-purchase ratio</li>
              <li>Time-to-purchase ratio</li>
              <li>Customer loyalty / repeat business</li>
            </ul>
        </div>
      </div>
    </div>
  </main>
@endsection
@section('scripts')
  @parent
@endsection
