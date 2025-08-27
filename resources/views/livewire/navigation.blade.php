<div class="collapse navbar-collapse" id="sidenav-collapse-main">
    <!-- Collapse header -->
    <div class="navbar-collapse-header d-md-none">
        <div class="row">
            <div class="col-6 collapse-brand">
                <a href="#">
                    <img src="{{ asset('img/brand/blue.png') }}">
                </a>
            </div>
            <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                    aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <ul class="navbar-nav">
        <li class="nav-item {{ Request::route()->named('dashboard') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}" wire:navigate>
                <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
        </li>
    </ul>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Panel de Administración</h6>
   
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Otras Acciones</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item {{ Request::route()->named('profile.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('profile.index') ? 'active' : '' }}"
                href="{{ route('profile.index') }}" wire:navigate>
                <i class="fas fa-user text-blue"></i> Perfil
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt text-gray"></i> Cerrar Sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Acciones</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
       

        <li class="nav-item {{ Request::route()->named('suppliers.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('suppliers.index') ? 'active' : '' }}"
                href="{{ route('suppliers.index') }}" wire:navigate>
                <i class="fas fa-boxes" style="color: #666cd9;"></i> Proveedores
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('type_movements.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('type_movements.index') ? 'active' : '' }}"
                href="{{ route('type_movements.index') }}" wire:navigate>
                <i class="fas fa-exchange-alt" style="color: #666cd9;"></i> Tipos de Movimiento
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('measure_units.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('measure_units.index') ? 'active' : '' }}"
                href="{{ route('measure_units.index') }}" wire:navigate>
                <i class="fas fa-ruler" style="color: #666cd9;"></i> Unidades de Medida
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('categories.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('categories.index') ? 'active' : '' }}"
                href="{{ route('categories.index') }}" wire:navigate>
                <i class="fas fa-list" style="color: #666cd9;"></i> Categorías
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('products.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('products.index') ? 'active' : '' }}"
                href="{{ route('products.index') }}" wire:navigate>
                <i class="fas fa-box" style="color: #666cd9;"></i> Productos
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('movements.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('movements.index') ? 'active' : '' }}"
                href="{{ route('movements.index') }}" wire:navigate>
                <i class="fas fa-exchange-alt" style="color: #666cd9;"></i> Movimientos
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('responsibles.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('responsibles.index') ? 'active' : '' }}"
                href="{{ route('responsibles.index') }}" wire:navigate>
                <i class="fas fa-user" style="color: #666cd9;"></i> Responsables
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('warehouses.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('warehouses.index') ? 'active' : '' }}"
                href="{{ route('warehouses.index') }}" wire:navigate>
                <i class="fas fa-warehouse" style="color: #666cd9;"></i> Bodegas
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('inventories.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('inventories.index') ? 'active' : '' }}"
                href="{{ route('inventories.index') }}" wire:navigate>
                <i class="fas fa-clipboard-list" style="color: #666cd9;"></i> Inventarios
            </a>
        </li>

    </ul>
</div>
