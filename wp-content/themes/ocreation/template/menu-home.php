<button type="button" data-toggle="false" id="toggle-nav-home" class="navbar-toggle">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>
<div class="voile-menu" id="voile-home"></div>
<nav id="nav-home" class="row">
    <ul id="menu-home">
        <li>
            <a href="<?php echo get_permalink(42); ?>">Origine</a>
        </li>
        <li>
            <span>Actualités</span>
            <ul>
                <?php foreach($tax_actu as $actu){ ?>
                    <li><a href="<?php echo get_term_link($actu); ?>"><?php echo $actu->name; ?></a></li>
                <?php } ?>
            </ul>
        </li>
        <li id="logo-home">
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo_white_315px.png" class="logo-home" alt="Logo">
            </a>
        </li>
        <li>
            <span>Univers</span>
            <ul>
                <?php foreach($tax_creations as $creation){ ?>
                    <li><a href="<?php echo get_term_link($creation); ?>"><?php echo $creation->name; ?></a></li>
                <?php } ?>
            </ul>
        </li>
        <li>
            <a href="<?php echo get_permalink(6); ?>">Contact</a>
        </li>
    </ul>
    <p class="subheader" id="visions">Visions de conscience</p>
</nav>