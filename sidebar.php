<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Form
    <form class="sidebar-form" method="get" action="#">
        <div class="input-group">
            <input type="search" id="criterio" class="form-control" title="Procurar ocorr&ecirc;ncia" placeholder="Busca">
            <span class="input-group-btn">
                <button type="submit" id="search-btn" class="btn btn-flat">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form> /.sidebar-form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
    <?php
        switch($m) {
            case 1:
                echo'
                <li class="active"><a class="toggle-page" href="inicio" title="Vis&atilde;o geral"><i class="fa fa-clock-o"></i> <span>In&iacute;cio</span></a></li>
                <li><a class="toggle-page" href="usuario" title="Dados do usu&aacute;rio"><i class="fa fa-user"></i> <span>Usu&aacute;rio</span></a></li>';
            break;
            case 2:
                echo'
                <li><a class="toggle-page" href="inicio" title="Vis&atilde;o geral"><i class="fa fa-clock-o"></i> <span>In&iacute;cio</span></a></li>
                <li class="active"><a class="toggle-page" href="usuario" title="Dados do usu&aacute;rio"><i class="fa fa-user"></i> <span>Usu&aacute;rio</span></a></li>';
            break;
            default:
                echo'
                <li><a class="toggle-page" href="inicio" title="Vis&atilde;o geral"><i class="fa fa-clock-o"></i> <span>In&iacute;cio</span></a></li>
                <li><a class="toggle-page" href="usuario" title="Dados do usu&aacute;rio"><i class="fa fa-user"></i> <span>Usu&aacute;rio</span></a></li>';
            break;
        }
    ?>
    </ul><!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
