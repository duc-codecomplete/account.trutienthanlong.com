<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tru Tiên Thần Long - Phiên bản 18 class</title>
    <!-- CSS files -->
    <link href="/ui/dist/css/tabler.min.css?1692870487" rel="stylesheet" />
    <link href="/ui/dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
    <link href="/ui/dist/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
    <link href="/ui/dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
    <link href="/ui/dist/css/demo.min.css?1692870487" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="/ui/dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="/" class="navbar-brand navbar-brand-autodark">
                    <img src="/ui/logo2.png" width="174" height="200" alt="Tabler" class="" style="height:auto">
                </a>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="/ui/dist/js/tabler.min.js?1692870487" defer></script>
    <script src="/ui/dist/js/demo.min.js?1692870487" defer></script>
</body>

</html>