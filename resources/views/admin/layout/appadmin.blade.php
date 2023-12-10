@include('admin.layout.sidebar')
<div class="container-fluid position-relative d-flex p-0">
<div class="content">
  @include('admin.layout.top')
@yield('content')

</div>
</div>
</div>
@include('admin.layout.footer')