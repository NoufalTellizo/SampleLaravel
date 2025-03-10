<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="../index.html" class="brand-link">
            <!--begin::Brand Image--> <!--end::Brand Image--> <!--begin::Brand Text--> <span
                class="font-extrabold text-white">LAUNDRY BOX</span> <!--end::Brand Text--> </a>
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

                <li class="nav-header">Orders</li>
                {{-- <li class="nav-item"> <a href="{{ route('orders.pos')}}" class="nav-link {{ Request::is('pos') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            POS
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item"> <a href="{{ route('orders.pos')}}" class="nav-link {{ Request::is('pos') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            POS
                        </p>
                    </a>
                </li>
                <li class="nav-item"> <a href="{{ route('orders.productlist')}}" class="nav-link {{ Request::is('pos') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Product List
                        </p>
                    </a>
                </li>
                <li class="nav-item"> <a href="" class="nav-link {{ Request::is('orders') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Orders
                        </p>
                    </a>
                </li>
                <li class="nav-item"> <a href=""
                        class="nav-link {{ Request::is('order_status_screen') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Order Status Screen
                        </p>
                    </a>
                </li>

                <li class="nav-header">Applications</li>
                <li class="nav-item"> <a href="{{ route('customers.customerlists')}}" class="nav-link {{ Request::is('customer') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Customers
                        </p>
                    </a>
                </li>
                <li class="nav-item  {{ Request::is('services*') ? 'menu-open' : '' }} "> <a href="#"
                        class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Services
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('services/lists') ? 'active' : '' }} "> <a href="{{ route('services.servicelists')}}"
                                class="nav-link {{ Request::is('services/lists') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Service List</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('services/type') ? 'active' : '' }}"> <a href="{{ route('services.servicetypes')}}"
                                class="nav-link {{ Request::is('services/type') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Service Type</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('services/addons') ? 'active' : '' }}"> <a href=""
                                class="nav-link {{ Request::is('services/addons') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Addons</p>
                            </a> </li>

                    </ul>

                </li>
                <li class="nav-item  {{ Request::is('inventory*') ? 'menu-open' : '' }} "> <a href="#"
                        class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Inventory
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('items/lists') ? 'active' : '' }} "> <a href="{{ route('inventory.itemlist')}}"
                                class="nav-link {{ Request::is('items/lists') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Items List</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('inventory.addonslist') ? 'active' : '' }}"> <a href="{{ route('inventory.addonslist')}}"
                                class="nav-link {{ Request::is('services/type') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>AddON</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('inventory.itemlist') ? 'active' : '' }}"> <a href="{{ route('inventory.itemslist')}}"
                                class="nav-link {{ Request::is('services/type') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Items</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('inventory.productlist') ? 'active' : '' }}"> <a href="{{ route('inventory.productlist')}}"
                                class="nav-link {{ Request::is('services/type') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Products</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('inventory.categorylist') ? 'active' : '' }}"> <a href="{{ route('inventory.categorylist')}}"
                                class="nav-link {{ Request::is('services/type') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Cateogires</p>
                            </a> </li>
                        {{-- <li class="nav-item {{ Request::is('services/addons') ? 'active' : '' }}"> <a href=""
                                class="nav-link {{ Request::is('services/addons') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Addons</p>
                            </a> </li> --}}

                    </ul>

                </li>
                {{-- <li class="nav-item  {{ Request::is('inventory-two*') ? 'menu-open' : '' }} "> <a href="#"
                        class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Inventory 2
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('items/lists') ? 'active' : '' }} "> <a href="{{ route('inventory_two.itemlist')}}"
                                class="nav-link {{ Request::is('items/lists') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Items List 2</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('services/type') ? 'active' : '' }}"> <a href="{{ route('services.servicetypes')}}"
                                class="nav-link {{ Request::is('services/type') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Item Type</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('services/addons') ? 'active' : '' }}"> <a href=""
                                class="nav-link {{ Request::is('services/addons') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Addons</p>
                            </a> </li>

                    </ul>

                </li> --}}
                {{-- <li class="nav-item  {{ Request::is('inventory-three*') ? 'menu-open' : '' }} "> <a href="#"
                        class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Inventory 3
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('items/lists') ? 'active' : '' }} "> <a href="{{ route('inventory_three.itemlist')}}"
                                class="nav-link {{ Request::is('items/lists') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Items List 3</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('services/type') ? 'active' : '' }}"> <a href="{{ route('services.servicetypes')}}"
                                class="nav-link {{ Request::is('services/type') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Item Type</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('services/addons') ? 'active' : '' }}"> <a href=""
                                class="nav-link {{ Request::is('services/addons') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Addons</p>
                            </a> </li>

                    </ul>

                </li> --}}
                <li class="nav-item  {{ Request::is('expenses*') ? 'menu-open' : '' }}"> <a href=#
                        class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Expense
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item  {{ Request::is('expenses/lists') ? 'active' : '' }}"> <a href="{{ route('expenses.expenselists')}}"
                                class="nav-link  {{ Request::is('expenses/lists') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Expense List</p>
                            </a> </li>
                        <li class="nav-item  {{ Request::is('expenses/category') ? 'active' : '' }}"> <a href="{{ route('expenses.categories')}}"
                                class="nav-link  {{ Request::is('expenses/category') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p> Expense Category</p>
                            </a> </li>
                    </ul>
                </li>

                <li class="nav-item"> <a href=""
                        class="nav-link {{ Request::is('payment_receipt') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Payment Receipt
                        </p>
                    </a>
                </li>

                <li class="nav-item {{ Request::is('reports*') ? 'menu-open' : '' }}"> <a href="#"
                        class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Reports
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('reports/dailyreport') ? 'active' : '' }}"> <a
                                href=""
                                class="nav-link {{ Request::is('reports/dailyreport') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Daily Report</p>
                            </a> </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('reports/orderreport') ? 'active' : '' }}"> <a
                                href=""
                                class="nav-link {{ Request::is('reports/orderreport') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Order Report</p>
                            </a> </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('reports/salesreport') ? 'active' : '' }}"> <a
                                href=""
                                class="nav-link {{ Request::is('reports/salesreport') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Sales Report</p>
                            </a> </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('reports/ledgerreport') ? 'active' : '' }}"> <a
                                href=""
                                class="nav-link {{ Request::is('reports/ledgerreport') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Ledger Report</p>
                            </a> </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('reports/expensereport') ? 'active' : '' }}"> <a
                                href=""
                                class="nav-link {{ Request::is('reports/expensereport') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Expense Report</p>
                            </a> </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('reports/taxreport') ? 'active' : '' }}"> <a
                                href=""
                                class="nav-link {{ Request::is('reports/taxreport') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Tax Report</p>
                            </a> </li>

                    </ul>
                </li>


                <li class="nav-header">Accounts</li>
                {{-- <li class="nav-item {{ Request::is('tools*') ? 'menu-open' : '' }}"> <a href="#"
                        class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Tools
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Request::is('tools/financialyear') ? 'active' : '' }}"> <a
                                href=""
                                class="nav-link {{ Request::is('tools/financialyear') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Financial Year</p>
                            </a> </li>

                        <li class="nav-item {{ Request::is('tools/staff') ? 'active' : '' }}"> <a href=""
                                class="nav-link {{ Request::is('tools/staff') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Staff</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('tools/accountsettings') ? 'active' : '' }}"> <a
                                href=""
                                class="nav-link {{ Request::is('tools/accountsettings') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Account Settings</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('tools/companysettings') ? 'active' : '' }}"> <a
                                href=""
                                class="nav-link {{ Request::is('tools/companysettings') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Company Settings</p>
                            </a> </li>
                        <li class="nav-item {{ Request::is('tools/mastersettings') ? 'active' : '' }}"> <a
                                href=""
                                class="nav-link {{ Request::is('tools/mastersettings') ? 'active' : '' }}"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Master Settings</p>
                            </a> </li>

                    </ul>
                </li> --}}
                <li class="nav-item"> <a href="{{ route('cards')}}" class="nav-link {{ Request::is('cards') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-speedometer"></i>
                    <p>
                        Cards
                    </p>
                </a>
            </li>
                <li class="nav-item"> <a href="{{ route('ui.components')}}" class="nav-link {{ Request::is('ui_components') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-speedometer"></i>
                    <p>
                        UI Components
                    </p>
                </a>
            </li>
            </li>
                <li class="nav-item"> <a href="{{ route('new_sidebar')}}" class="nav-link {{ Request::is('new_sidebar') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-speedometer"></i>
                    <p>
                        New Sidebar
                    </p>
                </a>
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
