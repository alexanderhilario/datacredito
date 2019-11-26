  <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:black;">
          <ul class="nav">
            <li class="nav-item sidebar-category">
            <center>
            
            <img src="{{ asset('assets-app/brand2.png') }}" alt="logo" style="width: 80px;" />

            </center>
              
              <span></span>
            </li><br>
          
          <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Dashboard</span>
               </a>
            </li>

          <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                <i class="mdi mdi-account-plus menu-icon"></i>
                  <span class="menu-title">Registrar afiliado</span>
              </a> 
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-account-search menu-icon"></i>
                <span class="menu-title">Consultar afiliados</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> 
                    <a class="nav-link" href="{{ route('libre') }}">Sin Reclutamiento</a>
                  </li>
                  
                  <li class="nav-item"> 
                    <a class="nav-link" href="{{ route('contratado') }}">Contratados</a>
                  </li> 
                </ul>
              </div>
            </li>
          </ul>
        </nav>