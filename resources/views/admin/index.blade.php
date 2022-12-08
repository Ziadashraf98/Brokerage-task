<!DOCTYPE html>
<html lang="en">
  <head>
   @include('includes-admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('includes-admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('includes-admin.navbar')
        <!-- partial -->
        @include('includes-admin.body')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('includes-admin.scripts')
  </body>
</html>