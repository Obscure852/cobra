<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>
                <li>
                    <a href="{{ route('home') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-users"></i>
                        <span data-key="t-apps">HR Module</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('calendar') }}">
                                <span data-key="t-calendar">Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="apps-chat">
                                <span data-key="t-chat">Chat</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-email">Email</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-email-inbox" data-key="t-inbox">Inbox</a></li>
                                <li><a href="apps-email-read"
                                        data-key="t-read-email">Email</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Apps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('calendar') }}">
                                <span data-key="t-calendar">Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="apps-chat">
                                <span data-key="t-chat">Chat</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-email">Email</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-email-inbox" data-key="t-inbox">Inbox</a></li>
                                <li><a href="apps-email-read"
                                        data-key="t-read-email">Email</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-invoices">Invoices</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('invoices-list') }}"
                                        data-key="t-invoice-list">Invoice List</a></li>
                                <li><a href="apps-invoices-detail"
                                        data-key="t-invoice-detail">Invocice Detail</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-contacts">Contacts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-contacts-grid"
                                        data-key="t-user-grid">User Grid</a></li>
                                <li><a href="{{ route('contacts-list') }}"
                                        data-key="t-user-list">User List</a></li>
                                <li><a href="apps-contacts-profile"
                                        data-key="t-profile">Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-authentication">Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login" data-key="t-login">Login</a></li>
                        <li><a href="auth-register" data-key="t-register">Register</a></li>
                        <li><a href="auth-recoverpw"
                                data-key="t-recover-password">Recover Password</a></li>
                        <li><a href="auth-lock-screen" data-key="t-lock-screen">Lockscreen</a>
                        </li>
                        <li><a href="auth-logout" data-key="t-logout">Logout</a>
                        </li>
                        <li><a href="auth-confirm-mail" data-key="t-confirm-mail">Confirm Mail</a>
                        </li>
                        <li><a href="auth-email-verification"
                                data-key="t-email-verification">Email Verification</a></li>
                        <li><a href="auth-two-step-verification"
                                data-key="t-two-step-verification">Two Step Verification</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter" data-key="t-starter-page">Starter Page</a></li>
                        <li><a href="pages-maintenance" data-key="t-maintenance">Maintenance</a>
                        </li>
                        <li><a href="pages-comingsoon" data-key="t-coming-soon">Coming Soon</a>
                        </li>
                        <li><a href="pages-timeline" data-key="t-timeline">Timeline</a></li>
                        <li><a href="pages-faqs" data-key="t-faqs">FAQs</a></li>
                        <li><a href="pages-pricing" data-key="t-pricing">Pricing</a></li>
                        <li><a href="pages-404" data-key="t-error-404">Error 404</a></li>
                        <li><a href="pages-500" data-key="t-error-500">Error 500</a></li>
                    </ul>
                </li>
                <li>
                    <a href="layouts-horizontal">
                        <i data-feather="layout"></i>
                        <span data-key="t-horizontal">Horizontal</span>
                    </a>
                </li>

                <li class="menu-title mt-2" data-key="t-components">Elements</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-components">Components</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts" data-key="t-alerts">Alerts</a></li>
                        <li><a href="ui-buttons" data-key="t-buttons">Buttons</a></li>
                        <li><a href="ui-cards" data-key="t-cards">carousel-indicators-rounded</a></li>
                        <li><a href="ui-carousel" data-key="t-carousel">Carousel</a></li>
                        <li><a href="ui-dropdowns" data-key="t-dropdowns">Dropdowns</a></li>
                        <li><a href="ui-grid" data-key="t-grid">Grid</a></li>
                        <li><a href="{{ route('fontAwesome') }}" data-key="t-grid">Font Awesome</a></li>
                        <li><a href="{{ route('boxicons') }}" data-key="t-grid">Box Icons</a></li>
                        <li><a href="{{ route('dripicons') }}" data-key="t-grid">Drip Icons</a></li>
                        <li><a href="{{ route('materialIcons') }}" data-key="t-grid">Material Icons</a></li>
                        <li><a href="ui-images" data-key="t-images">Images</a></li>
                        <li><a href="ui-modals" data-key="t-modals">Modals</a></li>
                        <li><a href="ui-offcanvas" data-key="t-offcanvas">Off Canvas</a></li>
                        <li><a href="ui-progressbars" data-key="t-progress-bars">Progress Bars</a>
                        </li>
                        <li><a href="ui-placeholders" data-key="t-progress-bars">Placeholders</a></li>
                    </ul>
                </li>
            </ul>

            <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                <div class="card-body">
                    <img src="assets/images/giftbox.png" alt="">
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16">Unlimited Access</h5>
                        <p class="font-size-13">
                          Upgrade from free trial and select Business Plan</p>
                        <a href="#!" class="btn btn-primary mt-2">Upgrade Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
