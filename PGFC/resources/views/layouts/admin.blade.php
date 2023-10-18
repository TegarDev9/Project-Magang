<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PGFC | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="PGFC" name="PT Petrokimia Gresik" />
    
    @include('includes.admin.style')
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        @include('includes.admin.navbar')

        @include('includes.admin.sidebar')

        @yield('content')

        @include('includes.admin.footer')
    </div>
    <!-- END wrapper -->

    @include('includes.admin.theme-settings')

    @include('includes.admin.script')
</body>

</html>
