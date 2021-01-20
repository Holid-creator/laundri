<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">

        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="index.php">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                    </span>
                </a>

                <?php if ($_SESSION['admin']) { ?>
                    <a href="?page=pengguna">
                        <i class="fa fa-user"></i> <span>Pengguna</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                    <a href="?page=pelanggan">
                        <i class="fa fa-users"></i> <span>Pelanggan</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                <?php } ?>

                <a href="?page=laundry">
                    <i class="fa fa-stumbleupon"></i> <span>Transaksi Laundry</span>
                    <span class="pull-right-container">
                    </span>
                </a>
                <a href="?page=transaksi">
                    <i class="fa fa-money"></i> <span>Transaksi</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>