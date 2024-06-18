<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ tenant('name') }} - {{ config('app.name', 'Laravel') }}</title>

    <script>
        window.Laravel = {
            baseURL: "<?php echo \Illuminate\Support\Facades\URL::to("/"); ?>",
            assetURL: "{{ asset("") }}"
        }
    </script>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="/backend/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/backend/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
    <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div id="app">
            <!--begin::Page-->
            <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <main class="py-4">
                <app></app>
            </main>
            </div>
        </div>
    </div>


    <!--begin::Javascript-->
    <script>var hostUrl = "/backend/assets";</script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="/backend/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/backend/assets/js/scripts.bundle.js"></script>
</body>
</html>
