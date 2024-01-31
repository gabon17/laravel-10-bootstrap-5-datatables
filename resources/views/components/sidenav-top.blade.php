
        <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
                <a href="{{ route('dashboard') }}" class="nav-link text-white p-0">
                    Dashboard
                </a>
            </li>
            <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
                <a href="{{ route('tables') }}" class="nav-link text-white p-0">
                    Tables
                </a>
            </li>
            <li class="nav-item px-3 py-3 border-radius-sm bg-slate-800 d-flex align-items-center">
                <a href="{{ route('wallet') }}" class="nav-link text-white p-0">
                    Wallet
                </a>
            </li>
            <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
                <a href="{{ route('RTL') }}" class="nav-link text-white p-0">
                    RTL
                </a>
            </li>
        </ul>
       
    <hr class="horizontal w-100 my-0 dark">
    <div class="container pb-3 pt-3">
        <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item border-radius-sm px-3 py-3 me-2  d-flex align-items-center">
                <a href="{{ route('profile') }}" class="nav-link text-white p-0">
                    Profile
                </a>
            </li>
            <li class="nav-item border-radius-sm px-3 py-3 me-2  d-flex align-items-center">
                <a href="{{ route('signin') }}" class="nav-link text-white p-0">
                    Sign In
                </a>
            </li>
            <li class="nav-item border-radius-sm px-3 py-3 me-2  d-flex align-items-center">
                <a href="{{ route('signup') }}" class="nav-link text-white p-0">
                    Sign Up
                </a>
            </li>
        </ul>
       
        </div>
    </div>
</nav>
