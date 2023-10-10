<div class="site-navbar py-2" style="z-index: 1;">

    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
                <div class="site-logo">
                    <a href="/index.php" class="js-logo-clone">Pharma</a>
                </div>
            </div>
            <div class="main-nav d-none d-lg-block">
                <nav class="site-navigation text-right text-md-center" role="navigation">
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li><a href="/index.php">Inicio</a></li>
                        <li><a href="/pages/client/shop.php">Tienda</a></li>
                        <li><a href="/pages/client/about.php">Sobre nosotros</a></li>
                    </ul>
                </nav>
            </div>
            <div class="icons" style="display: flex;gap: 1rem;">
                <a href="/pages/client/cart.php" class="icons-btn d-inline-block bag">
                    <span class="icon-shopping-bag"></span>
                    <span id="amount_shopping" class="number">0</span>
                </a>

                <?php if ($isLoged) { ?>
                    <div class="dropdown">
                        <p style="margin:0" style="cursor:pointer;">
                            <span class="mr-2 d-none d-lg-inline text-gray-600" id="userName">
                                <?php echo $name ?>
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
                <?php } ?>

                <?php if (!$isLoged) { ?>

                    <a style="margin:0 1rem;color: #343a40;background-color: transparent;background-image: none;border-color: #343a40;"
                        class="btn" href="/pages/login.php">
                        Iniciar Sesion
                    </a>
                <?php } ?>

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