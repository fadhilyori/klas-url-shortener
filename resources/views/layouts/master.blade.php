<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="descriptions" content="Alat Pemendek Tautan yang dibuat dan dirawat oleh KLAS (Kelompok Linux Arek Suroboyo)."/>

    <link rel="icon" href="{{ asset('img/logo-32x32.png') }}" sizes="32x32">
    <title>{{ __('URL Shortener by Kelompok Linux Arek Suroboyo') }}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style rel="stylesheet">.card-footer{padding:1%}main{margin-top:4%}.text-description{margin-bottom:0}@media (max-width:575.98px){.hide-on-med-down{display:none!important}main{margin-top:90px}}@media (min-width:576px) and (max-width:767.98px){.hide-on-med-down{display:none!important}main{margin-top:90px}}@media (min-width:768px) and (max-width:991.98px){.hide-on-med-down{display:none!important}main{margin-top:90px}}@media (min-width:992px) and (max-width:1199.98px){.hide-on-lg-up{display:none!important}}@media (min-width:1200px){.hide-on-lg-up{display:none!important}}</style>
</head>
<body id="app">
<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light hide-on-lg-up">
        <a class="navbar-brand" href="https://klas.or.id"><img height="54px" width="auto" alt="KLAS LOGO" src="{{ asset('img/logo.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="https://github.com/cangkrukan-klas/klas-url-shortener"><i class="fab fa-github"></i>{{ __('GitHub Repository') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="https://klas.or.id">{{ __('About Us') }}</a></li>
                <li class="nav-item"><a class="nav-link disabled" href="#">{{ __('Short link created') }}: {{ (\App\DataStatistik::query()->where('nama', 'shortlinkgenerate')->first()->nilai) + (\App\DataStatistik::query()->where('nama', 'shortlinkcustom')->first()->nilai) }}</a></li>
                <li class="nav-item"><a class="nav-link" {{ session()->get('locale') == 'en' || config('app.locale') == 'en' ? 'hidden' : '' }} href="{{ url('/en') }}">English</a><a class="nav-link" {{ session()->get('locale') == 'id' || config('app.locale') == 'id' ? 'hidden' : '' }} href="{{ url('/id') }}">Bahasa Indonesia</a></li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <div class="container">
        <div class="row hide-on-med-down"><div class="col-12 text-center"><a href="https://klas.or.id"><img alt="KLAS LOGO" src="{{ asset('img/logo.png') }}" width="158px" height="100px"></a></div></div>
        <div class="row"><div class="col-12 text-center text-title"><h2>{{ __('SIMPLE AND FAST URL SHORTENER') }}</h2></div></div>
        <div class="row"><div class="col-12 text-center text-description"><p>{{ __('by Kelompok Linux Arek Suroboyo') }}</p></div></div>
        <div class="row"><div class="col-sm-12 col-md-12 col-lg-8 offset-sm-0 offset-md-0 offset-lg-2 text-left"><main style="margin-top: 0;">@yield('content')</main></div></div>
    </div>
</main>
<footer class="fixed-bottom card-footer hide-on-med-down">
    <div class="row text-center">
        <div class="col"><span class="text-muted"><a href="https://github.com/cangkrukan-klas/klas-url-shortener"><i class="fab fa-github fa-2x" style="color: black"></i></a></span></div>
        <div class="col">{{ __('Short link created') }}: {{ (\App\DataStatistik::query()->where('nama', 'shortlinkgenerate')->first()->nilai) + (\App\DataStatistik::query()->where('nama', 'shortlinkcustom')->first()->nilai) }}</div>
        <div class="col"><a href="/en/" {{ session()->get('locale') == 'en' || config('app.locale') == 'en' ? 'hidden' : '' }}>en</a><a href="/id/" {{ session()->get('locale') == 'id' || config('app.locale') == 'id' ? 'hidden' : '' }}>id</a></div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
{{--    Global site tag (gtag.js) - Google Analytics --}}
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146828802-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-146828802-1');
</script>
@yield('jsscript')
</body>
</html>
