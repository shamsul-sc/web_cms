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
        <a class="nav-link menu-link" href="#sidebarServices" data-bs-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="sidebarServices">
            <i class="ri-pages-line"></i> <span data-key="t-services">Project</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarServices">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ route('dashboard.list') }}" class="nav-link" data-key="t-starter">Project List</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.category_list') }}" class="nav-link" data-key="t-starter">Category
                        List</a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{% url 'create_service' %}" class="nav-link" data-key="t-starter">Services Create</a>
                </li> --}}
            </ul>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false"
            aria-controls="sidebarPages">
            <i class="ri-pages-line"></i>
            <span data-key="t-pages">CaseStudy</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarPages">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ route('dashboard.case_study_list') }}" class="nav-link" data-key="t-category-list">
                        CaseStudy List
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.follow_up_list') }}" class="nav-link" data-key="t-category-list">
                        FollwUp List
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false"
            aria-controls="sidebarPages">
            <i class="ri-pages-line"></i>
            <span data-key="t-pages">Gallery</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarPages">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ route('dashboard.gallery_type_list') }}" class="nav-link" data-key="t-category-list">
                        Gallery Type
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.gallery_photo_list') }}" class="nav-link" data-key="t-category-list">
                        Gallery Photo
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.gallery_album_list') }}" class="nav-link" data-key="t-category-list">
                        Gallery Albums
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false"
            aria-controls="sidebarPages">
            <i class="ri-pages-line"></i>
            <span data-key="t-pages">FAQ</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarPages">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ route('dashboard.faq_list') }}" class="nav-link" data-key="t-category-list">
                        FAQ List
                    </a>
                    <a href="{{ route('dashboard.faq_category_list') }}" class="nav-link" data-key="t-category-list">
                        FAQ Category
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarServices" data-bs-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="sidebarServices">
            <i class="ri-pages-line"></i> <span data-key="t-services">Testimonial</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarServices">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ route('dashboard.testimonial_list') }}" class="nav-link"
                        data-key="t-starter">Testimonial
                        List</a>
                </li>
        </div>
    </li>


    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-services">Services</span>
    </li>
    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarServices" data-bs-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="sidebarServices">
            <i class="ri-pages-line"></i> <span data-key="t-services">MediaCoverage</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarServices">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ route('dashboard.media_cover_list') }}" class="nav-link"
                        data-key="t-starter">MediaCoverage List</a>
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


</ul>