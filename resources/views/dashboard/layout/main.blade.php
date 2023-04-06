<!--

=========================================================
* Argon Dashboard 2 Tailwind - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-tailwind
* Copyright 2022 Creative Tim (https://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="apple-touch-icon"
            sizes="76x76"
            href="/dashboard/build/assets/img/apple-icon.png"
        />
        
        <title>Dashboard Marketing</title>
        <!--     Fonts and icons     -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
            rel="stylesheet"
        />
        <!-- Font Awesome Icons -->
        <script
            src="https://kit.fontawesome.com/42d5adcbca.js"
            crossorigin="anonymous"
        ></script>
        <!-- Nucleo Icons -->
        <link href="/dashboard/build/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="/dashboard/build/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Main Styling -->
        <link
            href="/dashboard/build/assets/css/argon-dashboard-tailwind.css"
            rel="stylesheet"
        />
        <script
                    src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
                    defer
                ></script>
    </head>

    <body
        class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500"
    >
        <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>

        @include('dashboard.layout.partial.sidebar')

        <main
            class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl"
        >
        @include('dashboard.layout.partial.header')

            <div class="w-full px-6 py-6 mx-auto">
                <!-- table 1 -->

                @yield('content')

                <!-- card 2 -->

                
                <footer class="pt-4">
                    <div class="w-full px-6 mx-auto">
                        
                    </div>
                </footer>
            </div>
        </main>
        
        @include('dashboard.layout.partial.setting')

    </body>
    <!-- plugin for scrollbar  -->
    <script src="/dashboard/build/assets/js/plugins/perfect-scrollbar.min.js" async></script>
    <!-- main script file  -->
    <script
        src="/dashboard/build/assets/js/argon-dashboard-tailwind.js"
        async
    ></script>
</html>
