<div>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">

        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
        @include('sweetalert::alert')

        <link rel="stylesheet" href="{{asset('css/form/main.css')}}">
    </head>

    <body  class="sidebar-mini layout-navbar-fixed layout-fixed layout-footer-fixed" >
    <div class="wrapper">

        <div class="content-wrapper">

            <div class="content">
                <div class="container-fluid">
                    <x-navbar></x-navbar>
                    <x-sidebar></x-sidebar>
                    {{$slot}}
                    <x-footer></x-footer>
                </div>

            </div>
        </div>

    </div>

    <!-- jQuery -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>

    <script src="{{asset('dist/js/chart.sample.js')}}"></script>

    <script src="{{asset('dist/js/main.js')}}"></script>
    <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
    </body>
    </html>

</div>
