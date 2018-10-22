{{-- pages.amp.blade.php --}}
@extends('layouts.main')
@section('main')
  <main class="container-fluid">
  <div class="grid-container">
      <div class="grid-item" id="div-gi-maintxt">
        <div class="card">
          <div class="card-body">
            <p>There are a range of factors determining the performance of your website on mobile platforms. Built on open-standards with the backing of big names like Google, Accelerated Mobile Pages (AMP) utlilse a variety of methods to deliver content quickly
              and render it in a flash!</p>
          </div>
        </div>
      </div>
      <div class="grid-item" id="div-gi-quote">
        <div class="card">
          <div class="card-body">
            <blockquote class="blockquote blockquote-formal font-display">
              <i class="fa fa-quote-left fa-3x fa-pull-left fa-border"></i>
              <p class="text-muted">AMP is an open-source library that provides a straightforward way to create web pages that are compelling, smooth, and load near instantaneously for users. AMP pages are just web pages that you can link to and are controlled by you.</p>
              <p class="text-muted"> AMP's ecosystem includes 25 million domains, 100+ technology providers, and leading platforms, that span the areas of publishing, advertising, e-commerce, local and small businesses, and more!
                <i class="fa fa-quote-right fa-2x fa-pull-right"></i>
                <footer class="blockquote-footer"><a href="https://www.ampproject.org/">The AMP Project</a></footer>
              </p>
            </blockquote>
          </div>
        </div>
      </div>
      <div class="grid-item" id="div-gi-video"><div class="container-fluid">
    <div class="card">
      <iframe width="100%" height="480" src="https://www.youtube.com/embed/9Cfxm7cikMY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div></div>
  </div>
  </main>
@endsection
@section('scripts')
  @parent
@endsection
