<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="{{url('/')}}"><img src="{{asset('assets/images/logo.svg')}}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="{{url('/')}}"><img src="{{asset('assets/images/logo-mini.svg')}}" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="{{asset('assets/images/faces/face15.jpg')}}" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
              <span>Gold Member</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      
      @can('user-sidebar')
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#auth1" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Users</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth1">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('users.index')}}">Users list</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('roles.index')}}">Users permissions</a></li>
          </ul>
        </div>
      </li>
      @endcan
      
      @can('customer-sidebar')
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#auth2" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Customers</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth2">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('customer.form')}}">Add customer</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('action.form')}}">Add action</a></li>
          </ul>
        </div>
      </li>
      @endcan
      
      
      
    </ul>
  </nav>