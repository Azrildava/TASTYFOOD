<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link"> <!--begin::Brand Image--> <img src="{{asset ('assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">Admin <b>TASTYFOOD</b></span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open"> <a href="{{ route ('home')}}" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Dashboard
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="{{route ('berita.index')}}" class="nav-link active"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Berita</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="{{route ('galeri.index')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Galeri</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="{{route ('tentang.index')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Tentang</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="{{route ('contact.index')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Kontak</p>
                                    </a> </li>
                                    <li class="user-footer"> <a href="#" class="btn btn-default btn-flat">Profile</a> <a
                                class="btn btn-default btn-flat float-end" href="{{ route('logout') }}"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                            </ul>
                        </li>
                    </ul>
                    <!--end::Sidebar Menu-->
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside>
