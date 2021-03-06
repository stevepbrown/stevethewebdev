{{-- component_consent_cookie.blade.php --}}

{{--

1. True - has extant consent cookie
2. False - no extant consent cookie
3. Success - AJAX consent call


--}}


@switch(session('cookieStatus'))
@case('true')
@verbatim
<!-- The user has already given cookie consent -->
@endverbatim
@break
@case('false')
<div id="div-cookie-consent-declaration" class="container-fluid">
  <form action="./ajax/consent_cookies" class="card">
    <div class="form-group">
      <div id="div-cookie-statment" class="font-display">
        <p>This site uses session and other cookies to provide a secure & rewarding experience for users. By using the
          site you are consenting to the use of cookies.</p>
        <p>For more information on the use of cookies, please consult the <a data-toggle="collapse" href="#section-cookie-policy">Cookie
            Policy</a></p>
      </div>
    </div>
    <div id="section-cookie-policy" class="collapse text-muted">
      <h3 class="text-center">Cookie Policy</h3>

      <p>This cookie policy details how this site uses cookies in accordance with EU law. Consent to use these cookies
        is
        confirmed by clicking the 'OK'
        button on this page. A cookie will be be used to retain your consent & prevent the cookie consent dialogue from
        appearing again.
        If you do not consent to the use of cookies in accordance with this policy, you cannot proceed to the main
        site,
        and <strong>no</strong> persistent cookies will remain on your device after you terminate your browser session.</p>

      <p>Should you choose to proceed by using the 'OK' button, cookies of the following type will may be used on the
        site:</p>
      <ul>
        <li>First-party session (non-persistent) cookie - required for the essential operation of the site, to maintain
          session-state.</li>
        <li>First-party session (non-persistent) cookie - security token , used to guard against cross-site scripting
          (XSS) attacks.</li>
        <li>First-party persistent cookie - used for the purposes of web analytics.</li>
        <li>This site does <strong>NOT</strong> use 3rd Party cookies for the purposes of tracking you, and no
          Personally
          Identifiable Information (PID) should be transmitted in conjunction with the analytics process.</li>
      </ul>
    </div>
    <div class="form-group mx-auto">
      <button id="btn-consent-cookies" type="button" class="btn btn-info btn-lg">OK</button>
    </div>
  </form>
</div>
@break

@case('pending')
<div id="div-cookie-consent-flash" class="container-fluid animated fadeOut delay-4s">
  <div class="row">
    <div class="col">
      <p id="para-consent-confirmed" class="bg-success text-warning text-center">Cookie consent confirmed</p>
    </div>
  </div>
</div>
@break

@endswitch
