<div class="sidebar" data-color="purple" data-background-color="white"
data-image="{{url('backend/img/sidebar-1.jpg')}}">
<div class="logo">
    <a href="" class="simple-text logo-normal">
            Hola {{Auth::user()->name}}
    </a>
</div>
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item active  ">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        @hasrole('su')
        <li class="nav-item ">
        <a class="nav-link" href="{{route('alojamiento.index')}}">
                <i class="material-icons">account_box</i>
                <p>Alojamientos</p>
            </a>
        </li>
        @endhasrole


        <li class="nav-item ">
            <a class="nav-link" href="{{route('reservacion')}}">
                <i class="material-icons">content_paste</i>
                <p>Reservaciones</p>
            </a>
        </li>

        @hasrole('admin')
        <li class="nav-item ">
            <a class="nav-link" href="{{route('habitacion.index')}}">
                <i class="material-icons">hotel</i>
                <p>Habitaciones</p>
            </a>
        </li>
        @endhasrole

        <li class="nav-item ">
            <a class="nav-link" href="{{route('promocion.index')}}">
                <i class="material-icons">attach_money</i>
                <p>Promociones</p>
            </a>
        </li>

        @hasrole('su')
        <li class="nav-item ">
            <a class="nav-link" href="./map.html">
                <i class="material-icons">chat</i>
                <p>Mensajes</p>
            </a>
        </li>
        @endhasrole


        @hasrole('su')
        <li class="nav-item ">
        <a class="nav-link" href="{{route('registro.index')}}">
                <i class="material-icons">perm_contact_calendar</i>
                <p>Registro</p>
            </a>
        </li>
        @endhasrole

        <li class="nav-item active-pro ">
                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="material-icons">block</i>
                    <p>Cerrar Sesion</p></a>
                <form id="logout-form" action="{{route('logout')}}" method="post" style="display:none">
                @csrf
                </form>
              </li>
    </ul>
</div>
</div>
