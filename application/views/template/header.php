<header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url() ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>PO</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b> Pajak Online</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= base_url() ?>img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs">Alexander Pierce</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= base_url() ?>img/user2-160x160.jpg" class="img-circle" alt="User Image">

                            <p>
                                Alexander Pierce
                                <small>Admin Pajak Online</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer btn-group" role="group" aria-label="..." style="align-items: center">
                            <button class="btn btn-primary" onclick="profil()">Profil</button>
                            <button class="btn btn-primary" onclick="gantiPassword()">Ganti Password</button>
                            <button class="btn btn-primary" onclick="signout()">Sign out</button>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>