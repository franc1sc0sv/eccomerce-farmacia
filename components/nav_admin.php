<div class="site-navbar py-2" style="z-index: 1;margin-bottom: 2rem;">

    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
                <div class="site-logo">
                    <a href="/pages/admin/dashboard.php" class="js-logo-clone">Pharma</a>
                </div>
            </div>
            <div class="main-nav d-none d-lg-block">
                <nav class="site-navigation text-right text-md-center" role="navigation">
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li><a href="/pages/admin/dashboard.php">Dashboard</a></li>
                        <li><a href="/pages/admin/ordenes.php">Ordenes</a></li>

                    </ul>
                </nav>
            </div>
            <div class="dropdown">
                <p style="margin:0" style="cursor:pointer;">
                    <span class="mr-2 d-none d-lg-inline text-gray-600" id="userName">
                        <?php echo $_SESSION['name'] ?>
                    </span>
                    <img style="height: 48px;cursor:pointer" class="img-profile rounded-circle"
                        src="/assets/images/undraw_profile_2.svg" id="userImage" onclick="toggleDropdown()" />
                </p>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" id="dropdownMenu">
                    <a class="dropdown-item" href="../../controllers/logout.php">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Cerrar Sesion
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    function toggleDropdown() {
        const dropdownMenu = document.getElementById("dropdownMenu");
        dropdownMenu.classList.toggle("show");
    }
</script>