    <nav class="navbar absolute transparent navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand"><a href="/"><img src="#" srcset="{{ asset('images/n_logo@2x.png') }} 1x, {{ asset('images/n_logo@2x.png') }} 2x" alt="" /></a></div>
            <div class="navbar-other ml-auto order-lg-3">
                <ul class="navbar-nav flex-row align-items-center" data-sm-skip="true">
                    <li class="nav-item">
                        <div class="navbar-hamburger d-lg-none d-xl-none ml-auto"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
                    </li>
                    <li class="dropdown search-dropdown position-static nav-item">
                        <a href="#" role="button" class="collapse-toggle" data-toggle="collapse" data-target=".search-dropdown-menu" aria-haspopup="true" aria-expanded="false"><i class="jam jam-search"></i></a>
                        <div class="dropdown-menu search-dropdown-menu w-100 collapse">
                            <div class="form-wrapper">
                                <form class="inverse-text">
                                    <input type="text" class="form-control" placeholder="Search something">
                                </form>
                                <!-- /.search-form -->
                                <i class="dropdown-close jam jam-close"></i>
                            </div>
                            <!-- /.form-wrapper -->
                        </div>
                    </li>
                    <li class="nav-item"><button class="plain" data-toggle="offcanvas-info"><i class="jam jam-info"></i></button></li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
            <div class="navbar-collapse offcanvas-nav">
                <div class="offcanvas-header d-lg-none d-xl-none">
                    <a href="/"><img src="#" srcset="{{ asset('images/n_logo@2x.png') }} 1x, {{ asset('images/n_logo@2x.png') }} 2x" alt="" /></a>
                    <button class="plain offcanvas-close offcanvas-nav-close"><i class="jam jam-close"></i></button>
                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About Company</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="/portfolio">Portfolio</a></li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>