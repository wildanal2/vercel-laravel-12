<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<!-- SEO META -->
<meta name="description" content="Dashboard admin Melonponik - Sistem monitoring pertanian hidroponik berbasis IoT. Pantau kondisi greenhouse secara real-time." />
<meta name="author" content="PT Melonponik" />
<meta name="keywords" content="hidroponik, monitoring, greenhouse, pertanian, dashboard, IoT, sensor, melonponik, agritech" />
<meta name="robots" content="index, follow" />
<meta name="language" content="id" />
<meta name="theme-color" content="#4CAF50" />

<title>@yield('title', 'Dashboard Admin | Melonponik')</title>

<!-- FAVICONS -->
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
<link rel="manifest" href="{{ asset('build/manifest.json') }}">

<!-- OPEN GRAPH -->
<meta property="og:title" content="Dashboard Admin | Melonponik" />
<meta property="og:description" content="Pantau sistem hidroponik real-time dengan dashboard Melonponik." />
<meta property="og:image" content="{{ url('og-image.jpg') }}" />
<meta property="og:image:width" content="225" />
<meta property="og:image:height" content="225" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Melonponik" />

<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
@vite(['resources/css/app.css', 'resources/js/app.js'])
