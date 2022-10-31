{{-- <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Home
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Orders
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Products
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Customers
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" class="rounded-circle me-2" width="32" height="32">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
</div> --}}

<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-cyan sidebar-no-expand">
  <!-- Brand Logo -->
  <a href="/admin" class="brand-link tealBG" style="background-color: #001f3f !important; color:#fff">
      <div class="row">
          <div class="col-3">
              <img src="\image\LOGO_Vive_76x40px.png" alt="logo" class="brand-image  elevation-3">
          </div>
          <div class="col-9">
              <p class="titulo-home brand-text text-sm my-0 py-0"></p>
          </div>
      </div>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar user (optional) -->
      {{--<div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
              <img src="{{ Session::get('avatarUsuario')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
              <a href="/admin/profesional/1" class="d-block">{{ Session::get('nombreUsuario')}}</a>
          </div>
      </div>--}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact" data-widget="treeview" role="menu"
              data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->

              <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-user-alt"></i>
                      <p>
                          Roles
                          <i class="right fas fa-angle-right"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="/admin/roles" class="nav-link">
                              <i class="fas fa-user nav-icon"></i>
                              <p>Listado Roles</p>
                          </a>
                      </li>
                
                      <li class="nav-item">
                          <a href="/admin/roles/nuevo" class="nav-link">
                              <i class="fas fa-user-plus nav-icon"></i>
                              <p>Nuevo Rol</p>
                          </a>
                      </li>
                  </ul>
              </li>
             
              <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-user-alt"></i>
                      <p>
                          Usuarios
                          <i class="right fas fa-angle-right"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="/admin/usuarios" class="nav-link">
                              <i class="fas fa-users nav-icon"></i>
                              <p>Listado Usuarios</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="/admin/usuarios/nuevo" class="nav-link">
                              <i class="fas fa-user-plus nav-icon"></i>
                              <p>Nuevo Usuario</p>
                          </a>
                      </li>

                      {{-- <li class="nav-item">
                          <a href="admin/usuarios/carga" class="nav-link">
                              <i class="fas fa-user nav-icon"></i>
                              <p>Cargar Usuarios</p>
                          </a>
                      </li> --}}

                  </ul>
              </li>
              
              <li class="nav-item has-treeview">
                  <a href="/admin" class="nav-link">
                      <i class="nav-icon fas fa-user-alt"></i>
                      <p>Formulario de Contacto</p>
                  </a>
              </li>
            
              <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-user-alt"></i>
                      <p>
                          Comunas
                          <i class="right fas fa-angle-right"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="/admin/Comunas" class="nav-link">
                              <i class="fas fa-users nav-icon"></i>
                              <p>Listado de comunas</p>
                          </a>
                      </li>
                     
                  </ul>
              </li>
              
              <li class="nav-item has-treeview">
                  <a href="/admin/historicoUF" class="nav-link">
                      <i class="nav-icon fas fa-user-alt"></i>
                      <p>Historico UF</p>
                  </a>
              </li>
              <li class="nav-item has-treeview">
                  <a href="/admin/formulario" class="nav-link">
                      <i class="nav-icon fas fa-user-alt"></i>
                      <p>Formulario</p>
                  </a>
              </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
