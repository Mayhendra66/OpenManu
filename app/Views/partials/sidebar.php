<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Page</div>
                <a class="nav-link" href="<?= base_url('pages/dashboard') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Master</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="bi bi-box2-fill"></i></div>
                    Product
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>



                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= base_url('products') ?>">Master Product</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Suppliers</a> 
                        <a class="nav-link" href="layout-sidenav-light.html">Customers</a> 
                    </nav>
                </div>


                
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="bi bi-inboxes"></i></div>
                    Inventory Layer
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                     <a class="nav-link" href="layout-static.html">Warehouses</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Stocks</a> 
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMaterials" aria-expanded="false" aria-controls="collapseMaterials">
                    <div class="sb-nav-link-icon"><i class="bi bi-columns"></i></div>
                    Production
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseMaterials" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                     <a class="nav-link" href="layout-static.html">Materials</a>
                        <a class="nav-link" href="layout-sidenav-light.html">BOM</a> 
                        <a class="nav-link" href="layout-sidenav-light.html">Production Orders</a> 
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSales" aria-expanded="false" aria-controls="collapseSales">
                    <div class="sb-nav-link-icon"><i class="bi bi-basket2-fill  "></i></div>
                    Sales
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseSales" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                     <a class="nav-link" href="layout-static.html">Sales</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Sales Items</a> 
                </div>

               <div class="sb-sidenav-menu-heading">Add On</div>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="bi bi-envelope"></i></div>
                    Forms Client
                </a>
              

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?= esc(session('email')) ?>

        </div>
    </nav>
</div>