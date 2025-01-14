<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="es">
	<!--begin::Head-->
	<head><base href="../../../">
		<title>@yield('title','Iniciar Sesión | ERP IMAQ')</title>
		<meta charset="utf-8" />
		<meta name="description" content="IMAQ Enterprise Resource Planning. Licencia Industrial Maquiladora OSC" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Admin - IMAQ Enterprise Resource Planning" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('metronic/assets/plugins/global/plugins.bundle.css?v='.rand()) }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/assets/css/style.bundle.css?v='.rand()) }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/assets/plugins/custom/prismjs/prismjs.bundle.css?v='.rand()) }}" rel="stylesheet" type="text/css" />
        {{-- <link href="{{ asset('css/styles.css?v='.rand()) }}" rel="stylesheet" type="text/css" /> --}}
		<!--end::Global Stylesheets Bundle-->
        <!--begin::Page bg image-->
        <style>body { background-image: url('metronic/assets/media/auth/bg7.jpg'); } [data-theme="dark"] body { background-image: url('metronic/assets/media/auth/bg9-dark.jpg'); }</style>
        <!--end::Page bg image-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body data-kt-name="metronic" id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		<!--begin::Main-->
		<!--begin::Root-->
        <div class="d-flex flex-column flex-root" id="app">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::Aside-->
					<div class="d-flex flex-column">
						<!--begin::Logo-->
						<a xhref="../../demo13/dist/index.html" class="mb-7">
							{{-- <img alt="Logo" src="{{ asset('metronic/assets/media/logos/custom-3.svg') }}" /> --}}
							<img class="h-65px" alt="Logo" src="{{ asset('metronic/assets/media/logos/logoimaq.png') }}" />
						</a>
						<!--end::Logo-->
						<!--begin::Title-->
						{{-- <h2 class="text-white fw-normal m-0">Servicios Integrales en Telefonía Celular</h2> --}}
						<h2 class="text-white fw-normal m-0">Sistema de Control Almacén</h2>
						<!--end::Title-->
					</div>
					<!--begin::Aside-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
                @yield('content')
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
        <!--begin::Theme mode setup on page load-->
		<script>
            if ( document.documentElement ) { const defaultThemeMode = "system"; const name = document.body.getAttribute("data-kt-name"); let themeMode = localStorage.getItem("kt_" + ( name !== null ? name + "_" : "" ) + "theme_mode_value"); if ( themeMode === null ) { if ( defaultThemeMode === "system" ) { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } else { themeMode = defaultThemeMode; } } document.documentElement.setAttribute("data-theme", themeMode); }
        </script>
		<!--end::Theme mode setup on page load-->
		<script>var HOST_URL = "{{ url('/') }}";</script>
        <script>
            window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
                    'baseUrl' 	=> url('/')
            ]) !!}
        </script>
        <script src="{{ asset('js/app.js?v='.rand())}}"></script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('metronic/assets/plugins/global/plugins.bundle.js?v='.rand()) }}"></script>
		<script src="{{ asset('metronic/assets/js/scripts.bundle.js?v='.rand()) }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used by this page)-->
		<script src="{{ asset('metronic/assets/js/custom/authentication/sign-in/general.js?v='.rand()) }}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
