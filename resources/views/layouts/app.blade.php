<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />	
  
    {{-- Title --}}
    <title>@yield('title')</title>

    <!-- Style -->
    @stack('prepend-style')    
      @include('component.styles.css')
    @stack('addon-style')

  </head>

  <body>

  <!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">


  {{-- Sidebar --}}
  @include('component.sidebar')

  <!--  Main wrapper -->
  <div class="body-wrapper">

    
  @include('component.navbar')


    <div class="container-fluid">
      @yield('content')
      @include('component.footer')
    </div>
    
  </div>
</div>

  @stack('prepend-script')
  @include('component.styles.script')
  @stack('addon-script')

  </body>
</html>
