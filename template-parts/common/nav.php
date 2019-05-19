<nav class="navbar main-nav navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler m-menu-btn" type="button" data-toggle="collapse" data-target="#mainNav">
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="">
                    <!--navbar nav-->
                    <?php 
                    $hexa_menu = wp_nav_menu(array(
                        'theme_location' => 'topmenu',
                        'menu_id' => 'mainNav',
                        'menu_class' => 'navbar-nav'
                    ));
                    echo $hexa_menu;
                    ?>
                </div>
                <!--search form-->
                <form class="form-inline ml-auto" action="#" method="get">
                    <input class="form-control border-0 " type="search" placeholder="write something">
                </form>
            </div>
        </nav>