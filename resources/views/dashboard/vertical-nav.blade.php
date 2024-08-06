<ul class="navbar-nav iq-main-menu"  id="sidebar">
    <li class="nav-item static-item">
        <a class="nav-link static-item disabled" href="#" tabindex="-1">
            <span class="default-icon">Home</span>
            <span class="mini-icon">-</span>
        </a>
    </li>

    @can('view-dashboards')
    <!-- DASHBOARDS -->
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-dashboards" role="button"  aria-expanded="false" aria-controls="sidebar-special-pages">
            <i class="icon">
                <svg width="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Dashboards</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-dashboards" data-bs-parent="#sidebar">
            @can('view-dashboard-purchases')
            <li class=" nav-item">
                <a class="nav-link {{activeRoute(route('dashboards.purchases',[date('Y')]))}}" href="{{route('dashboards.purchases',[date('Y')])}}">
                <i class="icon">
                    @include('partials.icons.circle')
                    </i>
                <i class="sidenav-mini-icon"> V </i>
                <span class="item-name">Ventas</span>
                </a>
            </li>
            @endcan
            @can('view-dashboard-consumptions')
            <li class=" nav-item">
                <a class="nav-link {{activeRoute(route('dashboards.consumptions',[date('Y')]))}}" href="{{route('dashboards.consumptions',[date('Y')])}}">
                <i class="icon">
                    @include('partials.icons.circle')
                    </i>
                <i class="sidenav-mini-icon"> C </i>
                <span class="item-name">Consumos</span>
                </a>
            </li>
            @endcan
            @can('view-dashboard-production')
            <li class=" nav-item">
                <a class="nav-link {{activeRoute(route('dashboards.deliveries',7))}}" href="{{route('dashboards.deliveries',7)}}">
                <i class="icon">
                    @include('partials.icons.circle')
                    </i>
                <i class="sidenav-mini-icon"> D </i>
                <span class="item-name">Despachos</span>
                </a>
            </li>
            @endcan
            @can('view-dashboard-lab')
            <li class=" nav-item">
                <a class="nav-link {{activeRoute(route('dashboards.laboratory',[date('Y')]))}}" href="{{route('dashboards.laboratory',[date('Y')])}}">
                <i class="icon">
                        @include('partials.icons.circle')
                </i>
                <i class="sidenav-mini-icon"> L </i>
                <span class="item-name">Laboratorio</span>
                </a>
            </li>
            @endcan
            @can('view-dashboard-raw-material')
            <li class=" nav-item">
                <a class="nav-link {{activeRoute(route('dashboards.rawmaterial',[date('Y')]))}}" href="{{route('dashboards.rawmaterial',[date('Y')])}}">
                <i class="icon">
                        @include('partials.icons.circle')
                </i>
                <i class="sidenav-mini-icon"> M </i>
                <span class="item-name">Materia Prima</span>
                </a>
            </li>
            @endcan
            @can('view-dashboard-production')
            <li class=" nav-item">
                <a class="nav-link {{activeRoute(route('dashboards.production',[date('Y')]))}}" href="{{route('dashboards.production',[date('Y')])}}">

                <i class="icon">
                    @include('partials.icons.circle')
                    </i>
                <i class="sidenav-mini-icon"> P </i>
                <span class="item-name">Producción</span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="nav-link {{activeRoute(route('dashboards.stock',[date('Y')]))}}" href="{{route('dashboards.stock',[date('Y')])}}">
                <i class="icon">
                    @include('partials.icons.circle')
                    </i>
                <i class="sidenav-mini-icon"> S </i>
                <span class="item-name">Stock</span>
                </a>
            </li>
            @endcan
        </ul>
    </li>
    <!-- FIN DASHBOARDS -->
    @endcan


    @can('view-dashboards')
    <!-- REPORTS -->
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-reportes" role="button"  aria-expanded="false" aria-controls="sidebar-special-pages">
            <i class="icon">
                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M16.6756 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0711 3.92889 22 7.33333 22H16.6756C20.08 22 22 20.0711 22 16.6667V7.33333C22 3.92889 20.08 2 16.6756 2Z" fill="currentColor"></path>                                <path d="M7.36866 9.3689C6.91533 9.3689 6.54199 9.74223 6.54199 10.2045V17.0756C6.54199 17.5289 6.91533 17.9022 7.36866 17.9022C7.83088 17.9022 8.20421 17.5289 8.20421 17.0756V10.2045C8.20421 9.74223 7.83088 9.3689 7.36866 9.3689Z" fill="currentColor"></path>                                <path d="M12.0352 6.08887C11.5818 6.08887 11.2085 6.4622 11.2085 6.92442V17.0755C11.2085 17.5289 11.5818 17.9022 12.0352 17.9022C12.4974 17.9022 12.8707 17.5289 12.8707 17.0755V6.92442C12.8707 6.4622 12.4974 6.08887 12.0352 6.08887Z" fill="currentColor"></path>                                <path d="M16.6398 12.9956C16.1775 12.9956 15.8042 13.3689 15.8042 13.8312V17.0756C15.8042 17.5289 16.1775 17.9023 16.6309 17.9023C17.0931 17.9023 17.4664 17.5289 17.4664 17.0756V13.8312C17.4664 13.3689 17.0931 12.9956 16.6398 12.9956Z" fill="currentColor"></path>                                </svg>
            </i>
            <span class="item-name">Informes</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-reportes" data-bs-parent="#sidebar">

            @can('view-dashboard-consumptions')
            <li class=" nav-item">
                <a class="nav-link {{activeRoute(route('consumptions.index-report'))}}" href="{{route('consumptions.index-report')}}">
                <i class="icon">
                    @include('partials.icons.circle')
                </i>
                <i class="sidenav-mini-icon"> C </i>
                <span class="item-name">Consumos</span>
                </a>
            </li>
            @endcan
            @can('view-dashboard-production')
            <li class=" nav-item">
                <a class="nav-link {{activeRoute(route('deliveries.index-report'))}}" href="{{route('deliveries.index-report')}}">
                <i class="icon">
                        @include('partials.icons.circle')
                </i>
                <i class="sidenav-mini-icon"> D </i>
                <span class="item-name">Despachos</span>
                </a>
            </li>
            @endcan
            @can('view-dashboard-lab')
            <li class=" nav-item">
                <a class="nav-link {{activeRoute(route('analysis.index-report'))}}" href="{{route('analysis.index-report')}}">
                <i class="icon">
                        @include('partials.icons.circle')
                </i>
                <i class="sidenav-mini-icon"> L </i>
                <span class="item-name">Laboratorio</span>
                </a>
            </li>
            @endcan
            @can('view-dashboard-raw-material')
            <li class=" nav-item">
                <a class="nav-link {{activeRoute(route('raw-materials.index-report'))}}" href="{{route('raw-materials.index-report')}}">
                <i class="icon">
                        @include('partials.icons.circle')
                </i>
                <i class="sidenav-mini-icon"> M </i>
                <span class="item-name">Materia Prima</span>
                </a>
            </li>
            @endcan
            @can('view-dashboard-production')
            <li class=" nav-item">
                <a class="nav-link {{activeRoute(route('production.index-report'))}}" href="{{route('production.index-report')}}">
                <i class="icon">
                        @include('partials.icons.circle')
                </i>
                <i class="sidenav-mini-icon"> P </i>
                <span class="item-name">Producción</span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="nav-link {{activeRoute(route('stock.index-report'))}}" href="{{route('stock.index-report')}}">
                <i class="icon">
                        @include('partials.icons.circle')
                </i>
                <i class="sidenav-mini-icon"> S </i>
                <span class="item-name">Stock</span>
                </a>
            </li>
            @endcan

        </ul>
    </li>
    <!-- FIN REPORTS -->
    @endcan

    @canany(['admin','view-abm'])
    <!-- Admin -->
    <li><hr class="hr-horizontal"></li>
    <li class="nav-item static-item">
        <a class="nav-link static-item disabled" href="#" tabindex="-1">
            <span class="default-icon">Admin</span>
            <span class="mini-icon">-</span>
        </a>
    </li>

    <!-- ALTAS -->
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-altas" role="button"  aria-expanded="false" aria-controls="sidebar-special-pages">
            <i class="icon">
                <svg class="icon-22" width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M16.6667 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0622 3.92 22 7.33333 22H16.6667C20.0711 22 22 20.0622 22 16.6667V7.33333C22 3.92889 20.0711 2 16.6667 2Z" fill="currentColor"></path>                                <path d="M15.3205 12.7083H12.7495V15.257C12.7495 15.6673 12.4139 16 12 16C11.5861 16 11.2505 15.6673 11.2505 15.257V12.7083H8.67955C8.29342 12.6687 8 12.3461 8 11.9613C8 11.5765 8.29342 11.2539 8.67955 11.2143H11.2424V8.67365C11.2824 8.29088 11.6078 8 11.996 8C12.3842 8 12.7095 8.29088 12.7495 8.67365V11.2143H15.3205C15.7066 11.2539 16 11.5765 16 11.9613C16 12.3461 15.7066 12.6687 15.3205 12.7083Z" fill="currentColor">
                    </path>
                </svg>
            </i>
            <span class="item-name">Altas</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-altas" data-bs-parent="#sidebar">

            @canany(['admin','view-abm'])
                <li class=" nav-item">
                    <a class="nav-link {{activeRoute(route('store-areas.index'))}}" href="{{route('store-areas.index')}}">
                    <i class="icon">
                        @include('partials.icons.circle')
                    </i>
                    <i class="sidenav-mini-icon"> CL </i>
                    <span class="item-name">Áreas Depósito</span>
                    </a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link {{activeRoute(route('clients.index'))}}" href="{{route('clients.index')}}">
                    <i class="icon">
                        @include('partials.icons.circle')
                    </i>
                    <i class="sidenav-mini-icon"> CL </i>
                    <span class="item-name">Clientes</span>
                    </a>
                </li>
            @endcanany

            @can('admin')
                <!--<li class=" nav-item">
                    <a class="nav-link {{--activeRoute(route('stores.index'))--}}" href="{{--route('stores.index')--}}">
                    <i class="icon">
                        @include('partials.icons.circle')
                    </i>
                    <i class="sidenav-mini-icon"> CL </i>
                    <span class="item-name">Depósitos</span>
                    </a>
                </li>-->
                <!--<li class=" nav-item">
                    <a class="nav-link {{--activeRoute(route('employees.index'))--}}" href="{{--route('employees.index')--}}">
                        <i class="icon">
                            @include('partials.icons.circle')
                        </i>
                    <i class="sidenav-mini-icon"> E </i>
                    <span class="item-name">Empleados</span>
                    </a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link {{--activeRoute(route('raw-material-types.index'))--}}" href="{{--route('raw-material-types.index')--}}">
                        <i class="icon">
                            @include('partials.icons.circle')
                        </i>
                    <i class="sidenav-mini-icon"> ES </i>
                    <span class="item-name">Especies</span>
                    </a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link {{--activeRoute(route('qualities.index'))--}}" href="{{--route('qualities.index')--}}">
                    <i class="icon">
                        @include('partials.icons.circle')
                    </i>
                    <i class="sidenav-mini-icon"> CL </i>
                    <span class="item-name">Estados M.P.</span>
                    </a>
                </li>-->
                <li class=" nav-item">
                    <a class="nav-link {{activeRoute(route('consumables.index'))}}" href="{{route('consumables.index')}}">
                        <i class="icon">
                            @include('partials.icons.circle')
                        </i>
                    <i class="sidenav-mini-icon"> IN </i>
                    <span class="item-name">Insumos</span>
                    </a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link {{activeRoute(route('consumption-sources.index'))}}" href="{{route('consumption-sources.index')}}">
                        <i class="icon">
                            @include('partials.icons.circle')
                        </i>
                    <i class="sidenav-mini-icon"> FC </i>
                    <span class="item-name">Fuentes de Consumo</span>
                    </a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link {{activeRoute(route('products.index'))}}" href="{{route('products.index')}}">
                    <i class="icon">
                        @include('partials.icons.circle')
                    </i>
                    <i class="sidenav-mini-icon"> PV </i>
                    <span class="item-name">Productos</span>
                    </a>
                </li>
                <!--<li class=" nav-item">
                    <a class="nav-link {{--activeRoute(route('providers.index'))--}}" href="{{--route('providers.index')--}}">
                    <i class="icon">
                        @include('partials.icons.circle')
                    </i>
                    <i class="sidenav-mini-icon"> PV </i>
                    <span class="item-name">Proveedores</span>
                    </a>
                </li>-->
                <li class=" nav-item">
                    <a class="nav-link {{activeRoute(route('analysis-types.index'))}}" href="{{route('analysis-types.index')}}">
                    <i class="icon">
                        @include('partials.icons.circle')
                    </i>
                    <i class="sidenav-mini-icon"> TA </i>
                    <span class="item-name">Tipos de Análisis</span>
                    </a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link {{activeRoute(route('consumption-types.index'))}}" href="{{route('consumption-types.index')}}">
                    <i class="icon">
                        @include('partials.icons.circle')
                    </i>
                    <i class="sidenav-mini-icon"> TC </i>
                    <span class="item-name">Tipos de Consumo</span>
                    </a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link {{activeRoute(route('consumption-source-types.index'))}}" href="{{route('consumption-source-types.index')}}">
                    <i class="icon">
                        @include('partials.icons.circle')
                    </i>
                    <i class="sidenav-mini-icon"> TF </i>
                    <span class="item-name">Tipos de Fuente</span>
                    </a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link {{activeRoute(route('consumable-types.index'))}}" href="{{route('consumable-types.index')}}">
                    <i class="icon">
                        @include('partials.icons.circle')
                    </i>
                    <i class="sidenav-mini-icon"> TI </i>
                    <span class="item-name">Tipos de Insumo</span>
                    </a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link {{activeRoute(route('lab-sample-types.index'))}}" href="{{route('lab-sample-types.index')}}">
                    <i class="icon">
                        @include('partials.icons.circle')
                    </i>
                    <i class="sidenav-mini-icon"> TM </i>
                    <span class="item-name">Tipos de Muestra</span>
                    </a>
                </li>
                <!--<li class=" nav-item">
                    <a class="nav-link {{--activeRoute(route('product-types.index'))--}}" href="{{--route('product-types.index')--}}">
                    <i class="icon">
                        @include('partials.icons.circle')
                    </i>
                    <i class="sidenav-mini-icon"> TM </i>
                    <span class="item-name">Tipos de Producto</span>
                    </a>
                </li>-->
                <!--<li class=" nav-item">
                    <a class="nav-link {{--activeRoute(route('transports.index'))--}}" href="{{--route('transports.index')--}}">
                    <i class="icon">
                        @include('partials.icons.circle')
                    </i>
                    <i class="sidenav-mini-icon"> TT </i>
                    <span class="item-name">Transportes</span>
                    </a>
                </li>-->
                <li class=" nav-item">
                    <a class="nav-link {{activeRoute(route('units.index'))}}" href="{{route('units.index')}}">
                    <i class="icon">
                        @include('partials.icons.circle')
                    </i>
                    <i class="sidenav-mini-icon"> UM </i>
                    <span class="item-name">U. de Medida</span>
                    </a>
                </li>
            @endcan
        </ul>
    </li>
    <!-- FIN ALTAS -->

        @can('admin')
        <!-- USUARIOS -->
        <li class="nav-item">
            <a class="nav-link {{activeRoute(route('users.index'))}}" aria-current="page" href="{{route('users.index')}}">
                <i class="icon">
                    <svg class="icon-22" width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z" fill="currentColor"></path>                                <path opacity="0.4" d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z" fill="currentColor"></path>                                <path opacity="0.4" d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z" fill="currentColor"></path>                                <path d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z" fill="currentColor"></path>                                <path opacity="0.4" d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z" fill="currentColor"></path>                                <path d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z" fill="currentColor">
                        </path>
                    </svg>
                </i>
                <span class="item-name">Usuarios</span>
            </a>
        </li>
        <!-- FIN USUARIOS -->
        @endcan

    @endcanany

    @can('data-entry')
    <!-- DATA ENTRY -->
    <li><hr class="hr-horizontal"></li>
    <li class="nav-item static-item">
        <a class="nav-link static-item disabled" href="#" tabindex="-1">
            <span class="default-icon">Data Entry</span>
            <span class="mini-icon">-</span>
        </a>
    </li>

    @can('manage-purchases')
    <!-- COMPRAS -->
    <li class="nav-item">
        <a class="nav-link {{activeRoute(route('purchases.index'))}}" aria-current="page" href="{{route('purchases.index')}}">
            <i class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                </svg>
            </i>
            <span class="item-name">Compras</span>
        </a>
    </li>
    <!-- FIN COMPRAS -->
    @endcan


    @can('manage-consumptions')
    <!-- CONSUMOS -->
    <li class="nav-item">
        <a class="nav-link {{activeRoute(route('consumptions.index',[date('Y-m-d')]))}}" aria-current="page" href="{{route('consumptions.index',[date('Y-m-d')])}}">
            <i class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-lightning-charge-fill" viewBox="0 0 18 18">
                    <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
                </svg>
            </i>
            <span class="item-name">Consumos</span>
        </a>
    </li>
    <!-- FIN CONSUMOS -->
    @endcan


    @can('manage-stores')
    <!-- Stock -->
    <li class="nav-item">
        <a class="nav-link {{activeRoute(route('stock.index',[date('Y-m-d')]))}}" aria-current="page" href="{{route('stock.index',[date('Y-m-d')])}}">
            <i class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                    <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z"/>
                </svg>
            </i>
            <span class="item-name">Stock</span>
        </a>
    </li>


    <!--Despachos-->
    <li class="nav-item">
        <a class="nav-link {{activeRoute(route('deliveries.index',[date('Y-m-d')]))}}" aria-current="page" href="{{route('deliveries.index',[date('Y-m-d')])}}">
            <i class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                </svg>
            </i>
            <span class="item-name">Despachos</span>
        </a>
    </li>
    <!--Fin Despachos-->
    @endcan


    @can('manage-lab')
     <!-- LABORATORIO -->
    <li class="nav-item">
        <a class="nav-link {{activeRoute(route('analysis.index',[date('Y-m-d')]))}}" aria-current="page" href="{{route('analysis.index',[date('Y-m-d')])}}">
            <i class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-eyedropper" viewBox="0 0 16 16">
                    <path d="M13.354.646a1.207 1.207 0 0 0-1.708 0L8.5 3.793l-.646-.647a.5.5 0 1 0-.708.708L8.293 5l-7.147 7.146A.5.5 0 0 0 1 12.5v1.793l-.854.853a.5.5 0 1 0 .708.707L1.707 15H3.5a.5.5 0 0 0 .354-.146L11 7.707l1.146 1.147a.5.5 0 0 0 .708-.708l-.647-.646 3.147-3.146a1.207 1.207 0 0 0 0-1.708zM2 12.707l7-7L10.293 7l-7 7H2z"/>
                </svg>
            </i>
            <span class="item-name">Laboratorio</span>
        </a>
    </li>
    <!-- FIN LABORATORIO -->
    @endcan

    @can('manage-raw-material')
     <!-- MATERIA PRIMA -->
     <li class="nav-item">
        <a class="nav-link {{activeRoute(route('raw-materials.index',[date('Y-m-d')]))}}" href="{{route('raw-materials.index',[date('Y-m-d')])}}">
            <i class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16">
                    <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.5.5 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244z"/>
                </svg>
            </i>
            <span class="item-name">Materia Prima</span>
        </a>
    </li>
    <!-- FIN MATERIA PRIMA -->
    @endcan

    @endcan

    <li class="nav-item mt-4">
    </li>
</ul>

<script>

</script>
