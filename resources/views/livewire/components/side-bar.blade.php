<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="../index.html" class="brand-link">
            <!--begin::Brand Image--> <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span
                class="brand-text fw-light ">AdminLTE</span> <!--end::Brand Text--> </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item"> <a href="{{ route('dashboard') }}"
                        class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}"> <i
                            class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>

                <li class="nav-header">Applications</li>
                <li class="nav-item"> <a href=""
                        class="nav-link {{ Request::is('customer') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Customers
                        </p>
                    </a>
                </li>
                <li class="nav-item  {{ Request::is('products*') ? 'menu-open' : '' }} "> <a href="#"
                        class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Products
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('products/lists') ? 'active' : '' }} "> <a
                                href=""
                                class="nav-link {{ Request::is('products/lists') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Products List</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('products/category') ? 'active' : '' }}"> <a
                                href=""
                                class="nav-link {{ Request::is('products/category') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Product Category</p>
                            </a> </li>

                    </ul>

                </li>
                <li class="nav-item"> <a href=""
                        class="nav-link {{ Request::is('warehouse') ? 'active' : '' }}"> <i
                            class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Warehouses
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('services*') ? 'menu-open' : '' }}"> <a href="#"
                        class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Services
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('services/lists') ? 'active' : '' }} "> <a
                                href=""
                                class="nav-link {{ Request::is('services/lists') ? 'active' : '' }} "> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Service List</p>
                            </a> </li>
                        <li class="nav-item  {{ Request::is('services/types') ? 'active' : '' }}"> <a href="" class="nav-link  {{ Request::is('services/types') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Service Type</p>
                            </a> </li>
                        <li class="nav-item  {{ Request::is('services/addons') ? 'active' : '' }}"> <a href="" class="nav-link  {{ Request::is('services/addons') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Addons</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item  {{ Request::is('expenses*') ? 'menu-open' : '' }}"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Expense
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item  {{ Request::is('expenses/lists') ? 'active' : '' }}"> <a href="" class="nav-link  {{ Request::is('expenses/lists') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Expense List</p>
                            </a> </li>
                        <li class="nav-item  {{ Request::is('expenses/category') ? 'active' : '' }}"> <a href="" class="nav-link  {{ Request::is('expenses/category') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p> Expense Category</p>
                            </a> </li>
                    </ul>
                </li>

                <li class="nav-item {{ Request::is('reports*') ? 'menu-open' : '' }}"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Reports
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('reports/expensereport') ? 'active' : '' }}"> <a href="" class="nav-link {{ Request::is('reports/expensereport') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Expense Report</p>
                            </a> </li>

                    </ul>
                </li>


                <li class="nav-header">Accounts</li>
                <li class="nav-item {{ Request::is('tools*') ? 'menu-open' : '' }}"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Tools
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('tools/financialyear') ? 'active' : '' }}"> <a href="" class="nav-link {{ Request::is('tools/financialyear') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Financial Year</p>
                            </a> </li>

                        <li class="nav-item {{ Request::is('tools/staff') ? 'active' : '' }}"> <a href="" class="nav-link {{ Request::is('tools/staff') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Staff</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('tools/accountsettings') ? 'active' : '' }}"> <a href="" class="nav-link {{ Request::is('tools/accountsettings') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Account Settings</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('tools/companysettings') ? 'active' : '' }}"> <a href="" class="nav-link {{ Request::is('tools/companysettings') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Company Settings</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('tools/mastersettings') ? 'active' : '' }}"> <a href="" class="nav-link {{ Request::is('tools/mastersettings') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Master Settings</p>
                            </a> </li>

                    </ul>
                </li>
                <li class="nav-item tw-cursor-pointer " wire:click="logout"> <a class="nav-link"> <i
                            class="nav-icon bi bi-speedometer"></i>

                        <span>LogOut</span>
                    </a>
                </li>

            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside>