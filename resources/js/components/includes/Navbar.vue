<template>
 <div>
    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box horizontal-logo">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{% static 'assets/images/logo-sm.png' %}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{% static 'assets/images/logo-dark.png' %}" alt="" height="40">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{% static 'assets/images/logo-sm.png' %}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{% static 'assets/images/logo-light.png' %}" alt="" height="40">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                        <span class="hamburger-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>

                <div class="d-flex align-items-center">

                    <div class="dropdown d-md-none topbar-head-dropdown header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-search fs-22"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-flex align-items-center">
                                <img class="rounded-circle header-profile-user" src="{% static 'assets/images/users/user-dummy-img.jpg' %}" alt="Header Avatar">
                                <span class="text-start ms-xl-2">
                                    <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Anna Adame</span>
                                </span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
{#                                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>#}
                            <a class="dropdown-item" href="#"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="auth-lockscreen-cover.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                            <a class="dropdown-item" href="{% url 'logout' %}"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{% static 'assets/images/logo-sm.png' %}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{% static 'assets/images/logo-dark.png' %}" alt="" height="17">
                </span>
            </a>
            <!-- Light Logo-->
            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{% static 'assets/images/logo-sm.png' %}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{% static 'assets/images/logo-light.png' %}" alt="" height="17">
                </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>

        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{% url 'dashboard' %}">
                            <i class="ri-dashboard-line"></i> <span data-key="t-dashboard">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{% url 'question_list' %}">
                            <i class="ri-pages-line"></i> <span data-key="t-qa">Q&A</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                            <i class="ri-pages-line"></i>
                            <span data-key="t-pages">Machinery & Spare-parts</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarPages">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{% url 'category_list' %}" class="nav-link" data-key="t-category-list"> Category List </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarMachineries" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMachineries" data-key="t-Machineries"> Machineries
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarMachineries">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{% url 'machinery_list' %}" class="nav-link" data-key="t-Machinery-List">Machinery List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{% url 'create_machinery' %}" class="nav-link" data-key="t-Machinery-Create">Machinery Create</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarSpareParts" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSpareParts" data-key="t-Spare-parts"> Spare-parts
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarSpareParts">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{% url 'spare_part_list' %}" class="nav-link" data-key="t-Spare-parts-List">Spare-parts List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{% url 'create_spare_part' %}" class="nav-link" data-key="t-Spare-parts-Create">Spare-parts Create</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarWorkforces" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarWorkforces">
                            <i class="ri-pages-line"></i>
                            <span data-key="t-Workforces"> Workforces </span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarWorkforces">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="#sidebarMechanics" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMechanics" data-key="t-Mechanics"> Mechanics
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarMechanics">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{% url 'mechanics_list' %}" class="nav-link" data-key="t-Mechanic-List"> Mechanic List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{% url 'create_mechanics' %}" class="nav-link" data-key="t-Mechanic-Create"> Mechanic Create </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarDriver" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDriver" data-key="t-Driver"> Driver
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarDriver">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{% url 'driver_list' %}" class="nav-link" data-key="t-Driver-List">Driver List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{% url 'create_driver' %}" class="nav-link" data-key="t-Driver-Create">Driver Create</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-services">Services</span></li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarServices" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarServices">
                            <i class="ri-pages-line"></i> <span data-key="t-services">Services</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarServices">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{% url 'service_type_list' %}" class="nav-link" data-key="t-starter">Service Type List</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{% url 'service_list' %}" class="nav-link" data-key="t-starter">Services List</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{% url 'create_service' %}" class="nav-link" data-key="t-starter">Services Create</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarOthers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarOthers">
                            <i class="ri-pages-line"></i>
                            <span data-key="t-Others"> Others </span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarOthers">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="#sidebarManufacturer" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarManufacturer" data-key="t-Manufacturer"> Manufacturer
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarManufacturer">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{% url 'manufacturer_list' %}" class="nav-link" data-key="t-Manufacturer-List">Manufacturer List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{% url 'create_manufacturer' %}" class="nav-link" data-key="t-Manufacturer-Create">Manufacturer Create</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarGovFacilities" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarGovFacilities" data-key="t-GovFacilities"> GovFacilities
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarGovFacilities">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{% url 'gov_facility_list' %}" class="nav-link" data-key="t-gov-facility-list">Gov Facility List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{% url 'create_gov_facility' %}" class="nav-link" data-key="t-gov-facility-create">Gov Facility Create</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarVideos" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarVideos" data-key="t-Videos"> YouTube Videos
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarVideos">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{% url 'video_list' %}" class="nav-link" data-key="t-video-list">Video List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{% url 'entry_video' %}" class="nav-link" data-key="t-video-create">Video Create</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarContributor" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarContributor" data-key="t-contributor"> Contributor
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarContributor">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{% url 'contributor_list' %}" class="nav-link" data-key="t-Contributor-list">Contributor List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{% url 'create_contributor' %}" class="nav-link" data-key="t-Contributor-create">Contributor Create</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->

    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

 </div>
</template>

