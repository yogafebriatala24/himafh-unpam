<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link  collapsed" href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ request()->is('dashboard/users') ? '' : 'collapsed' }}"
                href="{{ route('livewire-user') }}">
                <i class="bi bi-people"></i>
                <span>User</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ request()->is('dashboard/rooms') ? '' : 'collapsed' }}"
                href="{{ route('livewire-room') }}">
                <i class="bi bi-window-stack"></i>
                <span>Room</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ request()->is('dashboard/kandidats') ? '' : 'collapsed' }}"
                href="{{ route('livewire-kandidat') }}">
                <i class="bi bi-person-square"></i>
                <span>Kandidat</span>
            </a>
        </li>

    </ul>

</aside>
