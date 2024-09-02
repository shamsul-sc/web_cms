<div id="two-column-menu">
</div>
<ul class="navbar-nav " id="sortable">
    <li class="menu-title"><span data-key="t-menu">Menu</span></li>

    <li class="nav-item">
        <a class="nav-link menu-link" href="{{ url('/dashboard') }}">
            <i class="ri-dashboard-line"></i> <span data-key="t-dashboard">Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link" href="{% url 'question_list' %}">
            <i class="ri-pages-line"></i> <span data-key="t-qa">Q&A</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false"
            aria-controls="sidebarPages">
            <i class="ri-pages-line"></i>
            <span data-key="t-pages">Category</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarPages">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ route('dashboard.category_list') }}" class="nav-link" data-key="t-category-list">
                        Category List
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#sidebarMachineries" class="nav-link" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarMachineries" data-key="t-Machineries"> Machineries
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMachineries">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{% url 'machinery_list' %}" class="nav-link"
                                    data-key="t-Machinery-List">Machinery List</a>
                            </li>
                            <li class="nav-item">
                                <a href="{% url 'create_machinery' %}" class="nav-link"
                                    data-key="t-Machinery-Create">Machinery Create</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#sidebarSpareParts" class="nav-link" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarSpareParts" data-key="t-Spare-parts"> Spare-parts
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSpareParts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{% url 'spare_part_list' %}" class="nav-link"
                                    data-key="t-Spare-parts-List">Spare-parts List</a>
                            </li>
                            <li class="nav-item">
                                <a href="{% url 'create_spare_part' %}" class="nav-link"
                                    data-key="t-Spare-parts-Create">Spare-parts Create</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarWorkforces" data-bs-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="sidebarWorkforces">
            <i class="ri-pages-line"></i>
            <span data-key="t-Workforces"> Workforces </span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarWorkforces">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="#sidebarMechanics" class="nav-link" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarMechanics" data-key="t-Mechanics"> Mechanics
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMechanics">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{% url 'mechanics_list' %}" class="nav-link" data-key="t-Mechanic-List">
                                    Mechanic List</a>
                            </li>
                            <li class="nav-item">
                                <a href="{% url 'create_mechanics' %}" class="nav-link" data-key="t-Mechanic-Create">
                                    Mechanic Create </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#sidebarDriver" class="nav-link" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDriver" data-key="t-Driver"> Driver
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDriver">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{% url 'driver_list' %}" class="nav-link" data-key="t-Driver-List">Driver
                                    List</a>
                            </li>
                            <li class="nav-item">
                                <a href="{% url 'create_driver' %}" class="nav-link" data-key="t-Driver-Create">Driver
                                    Create</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </li>

    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-services">Services</span>
    </li>
    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarServices" data-bs-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="sidebarServices">
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
        <a class="nav-link menu-link" href="#sidebarOthers" data-bs-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="sidebarOthers">
            <i class="ri-pages-line"></i>
            <span data-key="t-Others"> Others </span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarOthers">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="#sidebarManufacturer" class="nav-link" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarManufacturer" data-key="t-Manufacturer">
                        Manufacturer
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarManufacturer">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{% url 'manufacturer_list' %}" class="nav-link"
                                    data-key="t-Manufacturer-List">Manufacturer List</a>
                            </li>
                            <li class="nav-item">
                                <a href="{% url 'create_manufacturer' %}" class="nav-link"
                                    data-key="t-Manufacturer-Create">Manufacturer Create</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#sidebarGovFacilities" class="nav-link" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarGovFacilities" data-key="t-GovFacilities">
                        GovFacilities
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarGovFacilities">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{% url 'gov_facility_list' %}" class="nav-link"
                                    data-key="t-gov-facility-list">Gov Facility List</a>
                            </li>
                            <li class="nav-item">
                                <a href="{% url 'create_gov_facility' %}" class="nav-link"
                                    data-key="t-gov-facility-create">Gov Facility Create</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#sidebarVideos" class="nav-link" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarVideos" data-key="t-Videos"> YouTube Videos
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarVideos">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{% url 'video_list' %}" class="nav-link" data-key="t-video-list">Video List</a>
                            </li>
                            <li class="nav-item">
                                <a href="{% url 'entry_video' %}" class="nav-link" data-key="t-video-create">Video
                                    Create</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#sidebarContributor" class="nav-link" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarContributor" data-key="t-contributor"> Contributor
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarContributor">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{% url 'contributor_list' %}" class="nav-link"
                                    data-key="t-Contributor-list">Contributor List</a>
                            </li>
                            <li class="nav-item">
                                <a href="{% url 'create_contributor' %}" class="nav-link"
                                    data-key="t-Contributor-create">Contributor Create</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </li>
</ul>
