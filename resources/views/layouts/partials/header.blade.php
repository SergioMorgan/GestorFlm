<header>
    <h1>Proyecto FLM</h1>
    <nav>
        <ul>
            <li><a href="{{ route('index') }}" class="{{request()->routeIs('index') ? 'active' : ''}}">Inicio</a></li>
            {{-- <li><a href="{{ route('xxxxxxx') }}">Pendientes</a></li> --}}
            <li><a href="{{ route('sites.index') }}" class="{{request()->routeIs('sites.*') ? 'active' : ''}}">Locales</a></li>
            <li><a href="{{ route('ostickets.index') }}" class="{{request()->routeIs('ostickets.*') ? 'active' : ''}}">Tickets OS</a></li>
            <li><a href="{{ route('actions.index') }}" class="{{request()->routeIs('actions.*') ? 'active' : ''}}">Actuaciones</a></li>
            <li><a href="{{ route('aboutus') }}" class="{{request()->routeIs('aboutus') ? 'active' : ''}}">Acerca de</a></li>
        </ul>
    </nav>
</header>
