<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?= base_url('dashboard') ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-heading">interface</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('aplikasinya'); ?>">
                <i class="bi bi-calendar2-plus"></i>
                <span>tulis catatan</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('tampil_catatan'); ?>">
                <i class="bi bi-card-list"></i>
                <span>catatan perjalanan</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('auth/logout'); ?>">
                <i class="bi bi-power"></i>
                <span>log out</span>
            </a>
        </li>
        <!-- End Contact Page Nav -->
    </ul>

</aside><!-- End Sidebar-->