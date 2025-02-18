<!-- Navigation Bar -->
<nav>
    <div class="container">
        <div class="nav-wrapper">
            <!-- Logo or brand name (optional) -->
            <a href="{{ route('home') }}" class="brand-logo">Products</a>

            <!-- Hamburger menu for smaller screens -->
            <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                <i class="material-icons">dehaze</i> <!-- Hamburger icon -->
            </a>

            <!-- Navigation links (Desktop version) -->
            <ul id="nav-mobile" class="right hide-on-med-and-down">

                <li>
                    <a href="{{ route('home') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>

</nav>





<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Sidenav (hamburger menu)
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
</script>
