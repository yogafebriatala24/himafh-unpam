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
                <span>DPT</span>
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
            <a class="nav-link  {{ request()->is('dashboard/calons*') ? '' : 'collapsed' }}"
                data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
                <i class="bi bi-person-square"></i>
                <span>Kandidat</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse {{ request()->is('dashboard/calons*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav" style="">
                <li>
                    <a href="{{ route('paslon.index') }}"
                        class="{{ request()->is('dashboard/calons/paslon') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Paslon</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('livewire-calon') }}"
                        class="{{ request()->is('dashboard/calons') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Calon</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>

</aside>
