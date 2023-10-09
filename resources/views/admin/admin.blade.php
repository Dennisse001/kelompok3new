@extends('admin.index')
@section('isi')
<main class="main" id="top">
    <div class="container" data-layout="container">
        <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
      if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
      }
        </script>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg"
            data-double-top-nav="data-double-top-nav" style="display: none;">
            <div class="w-100">
                <div class="d-flex flex-between-center">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarDoubleTop" aria-controls="navbarDoubleTop"
                        aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="index.html">
                        <div class="d-flex align-items-center"><img class="me-2"
                                src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span
                                class="font-sans-serif text-primary">falcon</span></div>
                    </a>
                    <ul class="navbar-nav align-items-center d-none d-lg-block">
                        <li class="nav-item">
                            <div class="search-box" data-list='{"valueNames":["title"]}'>
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                    <input class="form-control search-input fuzzy-search" type="search"
                                        placeholder="Search..." aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>
                                </form>
                                <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none"
                                    data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0"
                                        aria-label="Close"></button></div>
                                <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">
                                            Recently Browsed</h6><a
                                            class="dropdown-item fs--1 px-x1 py-1 hover-primary"
                                            href="app/events/event-detail.html">
                                            <div class="d-flex align-items-center">
                                                <span class="fas fa-circle me-2 text-300 fs--2"></span>
                                                <div class="fw-normal title">Pages <span
                                                        class="fas fa-chevron-right mx-1 text-500 fs--2"
                                                        data-fa-transform="shrink-2"></span> Events</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item fs--1 px-x1 py-1 hover-primary"
                                            href="app/e-commerce/customers.html">
                                            <div class="d-flex align-items-center">
                                                <span class="fas fa-circle me-2 text-300 fs--2"></span>
                                                <div class="fw-normal title">E-commerce <span
                                                        class="fas fa-chevron-right mx-1 text-500 fs--2"
                                                        data-fa-transform="shrink-2"></span> Customers</div>
                                            </div>
                                        </a>
                                        <hr class="text-200 dark__text-900" />
                                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">
                                            Suggested Filter</h6><a class="dropdown-item px-x1 py-1 fs-0"
                                            href="app/e-commerce/customers.html">
                                            <div class="d-flex align-items-center"><span
                                                    class="badge fw-medium text-decoration-none me-2 badge-subtle-warning">customers:</span>
                                                <div class="flex-1 fs--1 title">All customers list</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-x1 py-1 fs-0"
                                            href="app/events/event-detail.html">
                                            <div class="d-flex align-items-center"><span
                                                    class="badge fw-medium text-decoration-none me-2 badge-subtle-success">events:</span>
                                                <div class="flex-1 fs--1 title">Latest events in current month</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-x1 py-1 fs-0"
                                            href="app/e-commerce/product/product-grid.html">
                                            <div class="d-flex align-items-center"><span
                                                    class="badge fw-medium text-decoration-none me-2 badge-subtle-info">products:</span>
                                                <div class="flex-1 fs--1 title">Most popular products</div>
                                            </div>
                                        </a>
                                        <hr class="text-200 dark__text-900" />
                                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">
                                            Files</h6><a class="dropdown-item px-x1 py-2" href="#!">
                                            <div class="d-flex align-items-center">
                                                <div class="file-thumbnail me-2"><img
                                                        class="border h-100 w-100 object-fit-cover rounded-3"
                                                        src="assets/img/products/3-thumb.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">iPhone</h6>
                                                    <p class="fs--2 mb-0 d-flex"><span
                                                            class="fw-semi-bold">Antony</span><span
                                                            class="fw-medium text-600 ms-2">27 Sep at 10:30
                                                            AM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-x1 py-2" href="#!">
                                            <div class="d-flex align-items-center">
                                                <div class="file-thumbnail me-2"><img class="img-fluid"
                                                        src="assets/img/icons/zip.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Falcon v1.8.2</h6>
                                                    <p class="fs--2 mb-0 d-flex"><span
                                                            class="fw-semi-bold">John</span><span
                                                            class="fw-medium text-600 ms-2">30 Sep at 12:30
                                                            PM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="text-200 dark__text-900" />
                                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">
                                            Members</h6><a class="dropdown-item px-x1 py-2"
                                            href="pages/user/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l status-online me-2">
                                                    <img class="rounded-circle" src="assets/img/team/1.jpg"
                                                        alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Anna Karinina</h6>
                                                    <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-x1 py-2" href="pages/user/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l me-2">
                                                    <img class="rounded-circle" src="assets/img/team/2.jpg"
                                                        alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Antony Hopkins</h6>
                                                    <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-x1 py-2" href="pages/user/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l me-2">
                                                    <img class="rounded-circle" src="assets/img/team/3.jpg"
                                                        alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Emma Watson</h6>
                                                    <p class="fs--2 mb-0 d-flex">Google</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="text-center mt-n3">
                                        <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                        <li class="nav-item ps-2 pe-0">
                            <div class="dropdown theme-control-dropdown"><a
                                    class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-0 pe-1 py-0"
                                    href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-2"
                                        data-fa-transform="shrink-2"
                                        data-theme-dropdown-toggle-icon="light"></span><span
                                        class="fas fa-moon fs-2" data-fa-transform="shrink-3"
                                        data-theme-dropdown-toggle-icon="dark"></span><span
                                        class="fas fa-adjust fs-2" data-fa-transform="shrink-2"
                                        data-theme-dropdown-toggle-icon="auto"></span></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3"
                                    aria-labelledby="themeSwitchDropdown">
                                    <div class="bg-white dark__bg-1000 rounded-2 py-2"><button
                                            class="dropdown-item d-flex align-items-center gap-2" type="button"
                                            value="light" data-theme-control="theme"><span
                                                class="fas fa-sun"></span>Light<span
                                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                                            class="dropdown-item d-flex align-items-center gap-2" type="button"
                                            value="dark" data-theme-control="theme"><span class="fas fa-moon"
                                                data-fa-transform=""></span>Dark<span
                                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                                            class="dropdown-item d-flex align-items-center gap-2" type="button"
                                            value="auto" data-theme-control="theme"><span class="fas fa-adjust"
                                                data-fa-transform=""></span>Auto<span
                                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-none d-sm-block">
                            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                                href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                                    data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                                    class="notification-indicator-number">1</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                                id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                                    data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                                aria-labelledby="navbarDropdownNotification">
                                <div class="card card-notification shadow-none">
                                    <div class="card-header">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <h6 class="card-header-title mb-0">Notifications</h6>
                                            </div>
                                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal"
                                                    href="#">Mark all as read</a></div>
                                        </div>
                                    </div>
                                    <div class="scrollbar-overlay" style="max-height:19rem">
                                        <div class="list-group list-group-flush fw-normal fs--1">
                                            <div class="list-group-title border-bottom">NEW</div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle"
                                                                src="assets/img/team/1-thumb.png" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Emma Watson</strong> replied to your
                                                            comment : "Hello world 😍"</p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">💬</span>Just
                                                            now</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <div class="avatar-name rounded-circle"><span>AB</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                                            <strong>Mia Khalifa's</strong> status</p>
                                                        <span class="notification-time"><span
                                                                class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-title border-bottom">EARLIER</div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush" href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle"
                                                                src="assets/img/icons/weather-sm.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1">The forecast today shows a low of 20&#8451;
                                                            in California. See today's weather.</p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">🌤️</span>1d</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="border-bottom-0 notification-unread  notification notification-flush"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-xl me-3">
                                                            <img class="rounded-circle"
                                                                src="assets/img/logos/oxford.png" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>University of Oxford</strong>
                                                            created an event : "Causal Inference Hilary 2019"</p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">✌️</span>1w</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="border-bottom-0 notification notification-flush"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-xl me-3">
                                                            <img class="rounded-circle" src="assets/img/team/10.jpg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>James Cameron</strong> invited to
                                                            join the group: United Nations International Children's
                                                            Fund</p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">🙋‍</span>2d</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                                            href="app/social/notifications.html">View all</a></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown px-1">
                            <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
                                data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="43" viewBox="0 0 16 16" fill="none">
                                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                                </svg></a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
                                aria-labelledby="navbarDropdownMenu">
                                <div class="card shadow-none">
                                    <div class="scrollbar-overlay nine-dots-dropdown">
                                        <div class="card-body px-3">
                                            <div class="row text-center gx-0 gy-0">
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="pages/user/profile.html" target="_blank">
                                                        <div class="avatar avatar-2xl"> <img class="rounded-circle"
                                                                src="assets/img/team/3.jpg" alt="" /></div>
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2">
                                                            Account</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="https://themewagon.com/" target="_blank"><img
                                                            class="rounded"
                                                            src="assets/img/nav-icons/themewagon.png" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Themewagon</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="https://mailbluster.com/" target="_blank"><img
                                                            class="rounded"
                                                            src="assets/img/nav-icons/mailbluster.png" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Mailbluster</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank"><img class="rounded"
                                                            src="assets/img/nav-icons/google.png" alt="" width="40"
                                                            height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Google</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank"><img class="rounded"
                                                            src="assets/img/nav-icons/spotify.png" alt="" width="40"
                                                            height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Spotify</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank"><img class="rounded"
                                                            src="assets/img/nav-icons/steam.png" alt="" width="40"
                                                            height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Steam</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank"><img class="rounded"
                                                            src="assets/img/nav-icons/github-light.png" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Github</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank"><img class="rounded"
                                                            src="assets/img/nav-icons/discord.png" alt="" width="40"
                                                            height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Discord</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank"><img class="rounded"
                                                            src="assets/img/nav-icons/xbox.png" alt="" width="40"
                                                            height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            xbox</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank"><img class="rounded"
                                                            src="assets/img/nav-icons/trello.png" alt="" width="40"
                                                            height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Kanban</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank"><img class="rounded"
                                                            src="assets/img/nav-icons/hp.png" alt="" width="40"
                                                            height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Hp</p>
                                                    </a></div>
                                                <div class="col-12">
                                                    <hr class="my-3 mx-n3 bg-200" />
                                                </div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank"><img class="rounded"
                                                            src="assets/img/nav-icons/linkedin.png" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Linkedin</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank"><img class="rounded"
                                                            src="assets/img/nav-icons/twitter.png" alt="" width="40"
                                                            height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Twitter</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank"><img class="rounded"
                                                            src="assets/img/nav-icons/facebook.png" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Facebook</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank"><img class="rounded"
                                                            src="assets/img/nav-icons/instagram.png" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Instagram</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank"><img class="rounded"
                                                            src="assets/img/nav-icons/pinterest.png" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Pinterest</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank"><img class="rounded"
                                                            src="assets/img/nav-icons/slack.png" alt="" width="40"
                                                            height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Slack</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank"><img class="rounded"
                                                            src="assets/img/nav-icons/deviantart.png" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Deviantart</p>
                                                    </a></div>
                                                <div class="col-4"><a
                                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="app/events/event-detail.html" target="_blank">
                                                        <div class="avatar avatar-2xl">
                                                            <div
                                                                class="avatar-name rounded-circle bg-primary-subtle text-primary">
                                                                <span class="fs-2">E</span></div>
                                                        </div>
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2">
                                                            Events</p>
                                                    </a></div>
                                                <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4"
                                                        href="#!">Show more</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                                aria-labelledby="navbarDropdownUser">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                    <a class="dropdown-item fw-bold text-warning" href="#!"><span
                                            class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Set status</a>
                                    <a class="dropdown-item" href="pages/user/profile.html">Profile &amp;
                                        account</a>
                                    <a class="dropdown-item" href="#!">Feedback</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                                    <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <hr class="my-2 d-none d-lg-block" />
                <div class="collapse navbar-collapse scrollbar py-lg-2" id="navbarDoubleTop">
                    <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="dashboards">Dashboard</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                aria-labelledby="dashboards">
                                <div class="bg-white dark__bg-1000 rounded-3 py-2"><a
                                        class="dropdown-item link-600 fw-medium" href="index.html">Default</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="dashboard/analytics.html">Analytics</a><a
                                        class="dropdown-item link-600 fw-medium" href="dashboard/crm.html">CRM</a><a
                                        class="dropdown-item link-600 fw-medium" href="dashboard/e-commerce.html">E
                                        commerce</a><a class="dropdown-item link-600 fw-medium"
                                        href="dashboard/lms.html">LMS<span
                                            class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="dashboard/project-management.html">Management</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="dashboard/saas.html">SaaS</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="dashboard/support-desk.html">Support desk<span
                                            class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="apps">App</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                aria-labelledby="apps">
                                <div class="card navbar-card-app shadow-none dark__bg-1000">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                            src="assets/img/icons/spot-illustrations/authentication-corner.png"
                                            width="130" alt="" />
                                        <div class="row">
                                            <div class="col-6 col-md-4">
                                                <div class="nav flex-column"><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/calendar.html">Calendar</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/chat.html">Chat</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/kanban.html">Kanban</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Social</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/social/feed.html">Feed</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/social/activity-log.html">Activity log</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/social/notifications.html">Notifications</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/social/followers.html">Followers</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/support-desk/table-view.html">Table view</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/support-desk/card-view.html">Card view</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/support-desk/contacts.html">Contacts</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/support-desk/contact-details.html">Contact
                                                        details</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/support-desk/tickets-preview.html">Tickets
                                                        preview</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/support-desk/quick-links.html">Quick links</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-learning/course/course-list.html">Course
                                                        list</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-learning/course/course-grid.html">Course
                                                        grid</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-learning/course/course-details.html">Course
                                                        details</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-learning/course/create-a-course.html">Create a
                                                        course</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-learning/student-overview.html">Student
                                                        overview</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-learning/trainer-profile.html">Trainer
                                                        profile</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Events</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/events/create-an-event.html">Create an event</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/events/event-detail.html">Event detail</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/events/event-list.html">Event list</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Email</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/email/inbox.html">Inbox</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/email/email-detail.html">Email detail</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/email/compose.html">Compose</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/product/product-list.html">Product
                                                        list</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/product/product-grid.html">Product
                                                        grid</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/product/product-details.html">Product
                                                        details</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/product/add-product.html">Add
                                                        product</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/orders/order-list.html">Order
                                                        list</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/orders/order-details.html">Order
                                                        details</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/customers.html">Customers</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/customer-details.html">Customer
                                                        details</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/shopping-cart.html">Shopping cart</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/checkout.html">Checkout</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/billing.html">Billing</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/invoice.html">Invoice</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="pagess">Pages</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                aria-labelledby="pagess">
                                <div class="card navbar-card-pages shadow-none dark__bg-1000">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                            src="assets/img/icons/spot-illustrations/authentication-corner.png"
                                            width="130" alt="" />
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/simple/login.html">Login</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/simple/logout.html">Logout</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/simple/register.html">Register</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/simple/forgot-password.html">Forgot
                                                        password</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/simple/confirm-mail.html">Confirm
                                                        mail</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/simple/reset-password.html">Reset
                                                        password</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/simple/lock-screen.html">Lock
                                                        screen</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/card/login.html">Login</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/card/logout.html">Logout</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/card/register.html">Register</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/card/forgot-password.html">Forgot
                                                        password</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/card/confirm-mail.html">Confirm
                                                        mail</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/card/reset-password.html">Reset
                                                        password</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/card/lock-screen.html">Lock
                                                        screen</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/split/login.html">Login</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/split/logout.html">Logout</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/split/register.html">Register</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/split/forgot-password.html">Forgot
                                                        password</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/split/confirm-mail.html">Confirm
                                                        mail</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/split/reset-password.html">Reset
                                                        password</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/split/lock-screen.html">Lock
                                                        screen</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="demo/navbar-vertical.html">Navbar vertical</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="demo/navbar-top.html">Top nav</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="demo/navbar-double-top.html">Double top<span
                                                            class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="demo/combo-nav.html">Combo nav</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Others</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/starter.html">Starter</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/landing.html">Landing</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">User</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/user/profile.html">Profile</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/user/settings.html">Settings</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/pricing/pricing-default.html">Pricing
                                                        default</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/pricing/pricing-alt.html">Pricing alt</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/errors/404.html">404</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/errors/500.html">500</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/miscellaneous/associations.html">Associations</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/miscellaneous/invite-people.html">Invite
                                                        people</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/miscellaneous/privacy-policy.html">Privacy
                                                        policy</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/faq/faq-basic.html">Faq basic</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/faq/faq-alt.html">Faq alt</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/faq/faq-accordion.html">Faq accordion</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/wizard.html">Wizard</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="#authentication-modal"
                                                        data-bs-toggle="modal">Modal</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="moduless">Modules</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                aria-labelledby="moduless">
                                <div class="card navbar-card-components shadow-none dark__bg-1000">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                            src="assets/img/icons/spot-illustrations/authentication-corner.png"
                                            width="130" alt="" />
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Components</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/accordion.html">Accordion</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/alerts.html">Alerts</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/anchor.html">Anchor</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/animated-icons.html">Animated
                                                        icons</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/background.html">Background</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/badges.html">Badges</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/bottom-bar.html">Bottom bar<span
                                                            class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/breadcrumbs.html">Breadcrumbs</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/buttons.html">Buttons</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/calendar.html">Calendar</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/cards.html">Cards</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/carousel/bootstrap.html">Bootstrap
                                                        carousel</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column mt-md-4 pt-md-1"><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/carousel/swiper.html">Swiper</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/collapse.html">Collapse</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/cookie-notice.html">Cookie
                                                        notice</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/countup.html">Countup</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/draggable.html">Draggable</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/dropdowns.html">Dropdowns</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/jquery-components.html">Jquery<span
                                                            class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/list-group.html">List group</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/modals.html">Modals</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/navs-and-tabs/navs.html">Navs</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/navs-and-tabs/navbar.html">Navbar</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/navs-and-tabs/vertical-navbar.html">Navbar
                                                        vertical</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/navs-and-tabs/top-navbar.html">Top
                                                        nav</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/navs-and-tabs/double-top-navbar.html">Double
                                                        top<span
                                                            class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/navs-and-tabs/combo-navbar.html">Combo
                                                        nav</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/navs-and-tabs/tabs.html">Tabs</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/offcanvas.html">Offcanvas</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/pictures/avatar.html">Avatar</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/pictures/images.html">Images</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/pictures/figures.html">Figures</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/pictures/hoverbox.html">Hoverbox</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/pictures/lightbox.html">Lightbox</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/progress-bar.html">Progress
                                                        bar</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/placeholder.html">Placeholder</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/pagination.html">Pagination</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/popovers.html">Popovers</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/scrollspy.html">Scrollspy</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/search.html">Search</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/spinners.html">Spinners</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/timeline.html">Timeline</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/toasts.html">Toasts</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/tooltips.html">Tooltips</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/treeview.html">Treeview</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/typed-text.html">Typed text</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/videos/embed.html">Embed</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/videos/plyr.html">Plyr</a></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/background.html">Background</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/borders.html">Borders</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/clearfix.html">Clearfix</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/colors.html">Colors</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/colored-links.html">Colored
                                                        links</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/display.html">Display</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/flex.html">Flex</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/float.html">Float</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/focus-ring.html">Focus ring</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/grid.html">Grid</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/icon-link.html">Icon link</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/overlayscrollbar.html">Overlay
                                                        scrollbar</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/position.html">Position</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/ratio.html">Ratio</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/spacing.html">Spacing</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/sizing.html">Sizing</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/stretched-link.html">Stretched
                                                        link</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/text-truncation.html">Text
                                                        truncation</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/typography.html">Typography</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/vertical-align.html">Vertical
                                                        align</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/vertical-rule.html">Vertical
                                                        rule</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/visibility.html">Visibility</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/tables/basic-tables.html">Basic tables</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/tables/advance-tables.html">Advance
                                                        tables</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/tables/bulk-select.html">Bulk select</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/chartjs.html">Chartjs</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/d3js.html">D3js<span
                                                            class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/line-charts.html">Line
                                                        charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/bar-charts.html">Bar
                                                        charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/candlestick-charts.html">Candlestick
                                                        charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/geo-map.html">Geo map</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/scatter-charts.html">Scatter
                                                        charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/pie-charts.html">Pie
                                                        charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/gauge-charts.html">Gauge
                                                        charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/radar-charts.html">Radar
                                                        charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/heatmap-charts.html">Heatmap
                                                        charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/how-to-use.html">How to use</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/basic/form-control.html">Form
                                                        control</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/basic/input-group.html">Input
                                                        group</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/basic/select.html">Select</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/basic/checks.html">Checks</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/basic/range.html">Range</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/basic/layout.html">Layout</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/advance/advance-select.html">Advance
                                                        select</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/advance/date-picker.html">Date
                                                        picker</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/advance/editor.html">Editor</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/advance/emoji-button.html">Emoji
                                                        button</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/advance/file-uploader.html">File
                                                        uploader</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/advance/input-mask.html">Input
                                                        mask</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/advance/range-slider.html">Range
                                                        slider</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/advance/rating.html">Rating</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/floating-labels.html">Floating
                                                        labels</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/wizard.html">Wizard</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/validation.html">Validation</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column pt-xxl-1">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/icons/font-awesome.html">Font awesome</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/icons/bootstrap-icons.html">Bootstrap
                                                        icons</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/icons/feather.html">Feather</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/icons/material-icons.html">Material icons</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/maps/google-map.html">Google map</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/maps/leaflet-map.html">Leaflet map</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="documentations">Documentation</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                aria-labelledby="documentations">
                                <div class="bg-white dark__bg-1000 rounded-3 py-2"><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="documentation/getting-started.html">Getting started</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="documentation/customization/configuration.html">Configuration</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="documentation/customization/styling.html">Styling<span
                                            class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="documentation/customization/dark-mode.html">Dark mode</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="documentation/customization/plugin.html">Plugin</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="documentation/faq.html">Faq</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="documentation/gulp.html">Gulp</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="documentation/design-file.html">Design file</a><a
                                        class="dropdown-item link-600 fw-medium" href="changelog.html">Changelog</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
            <script>
                var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
          document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
            </script>
            <div class="d-flex align-items-center">
                <div class="toggle-icon-wrapper">
                    <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span
                            class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                </div><a class="navbar-brand" href="index.html">
                    <div class="d-flex align-items-center py-3"><img class="me-2"
                            src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span
                            class="font-sans-serif text-primary">falcon</span></div>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                <div class="navbar-vertical-content scrollbar">
                    <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                        <li class="nav-item">
                            <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard"
                                role="button" data-bs-toggle="collapse" aria-expanded="true"
                                aria-controls="dashboard">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-chart-pie"></span></span><span
                                        class="nav-link-text ps-1">Dashboard</span></div>
                            </a>
                            <ul class="nav collapse show" id="dashboard">
                                <li class="nav-item"><a class="nav-link active" href="index.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Default</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="dashboard/analytics.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Analytics</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="dashboard/crm.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">CRM</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="dashboard/e-commerce.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">E
                                                commerce</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="dashboard/lms.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">LMS</span><span
                                                class="badge rounded-pill ms-2 badge-subtle-success">New</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="dashboard/project-management.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Management</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="dashboard/saas.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">SaaS</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="dashboard/support-desk.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Support desk</span><span
                                                class="badge rounded-pill ms-2 badge-subtle-success">New</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <!-- label-->
                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                <div class="col-auto navbar-vertical-label">App</div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider" />
                                </div>
                            </div><!-- parent pages--><a class="nav-link" href="app/calendar.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-calendar-alt"></span></span><span
                                        class="nav-link-text ps-1">Calendar</span></div>
                            </a><!-- parent pages--><a class="nav-link" href="app/chat.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-comments"></span></span><span
                                        class="nav-link-text ps-1">Chat</span></div>
                            </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#email"
                                role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-envelope-open"></span></span><span
                                        class="nav-link-text ps-1">Email</span></div>
                            </a>
                            <ul class="nav collapse" id="email">
                                <li class="nav-item"><a class="nav-link" href="app/email/inbox.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Inbox</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/email/email-detail.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Email detail</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/email/compose.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Compose</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#events"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="events">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-calendar-day"></span></span><span
                                        class="nav-link-text ps-1">Events</span></div>
                            </a>
                            <ul class="nav collapse" id="events">
                                <li class="nav-item"><a class="nav-link" href="app/events/create-an-event.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Create an event</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/events/event-detail.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Event detail</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/events/event-list.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Event list</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-commerce"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="e-commerce">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-shopping-cart"></span></span><span
                                        class="nav-link-text ps-1">E commerce</span></div>
                            </a>
                            <ul class="nav collapse" id="e-commerce">
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#product"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Product</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="product">
                                        <li class="nav-item"><a class="nav-link"
                                                href="app/e-commerce/product/product-list.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Product list</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="app/e-commerce/product/product-grid.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Product grid</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="app/e-commerce/product/product-details.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Product details</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="app/e-commerce/product/add-product.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Add product</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#orders"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Orders</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="orders">
                                        <li class="nav-item"><a class="nav-link"
                                                href="app/e-commerce/orders/order-list.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Order list</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="app/e-commerce/orders/order-details.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Order details</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/customers.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Customers</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="app/e-commerce/customer-details.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Customer details</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/shopping-cart.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Shopping cart</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/checkout.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Checkout</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/billing.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Billing</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/e-commerce/invoice.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Invoice</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-learning"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="e-learning">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-graduation-cap"></span></span><span
                                        class="nav-link-text ps-1">E learning</span><span
                                        class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                            </a>
                            <ul class="nav collapse" id="e-learning">
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#course"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Course</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="course">
                                        <li class="nav-item"><a class="nav-link"
                                                href="app/e-learning/course/course-list.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Course list</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="app/e-learning/course/course-grid.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Course grid</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="app/e-learning/course/course-details.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Course details</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="app/e-learning/course/create-a-course.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Create a course</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="app/e-learning/student-overview.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Student overview</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/e-learning/trainer-profile.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Trainer profile</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link" href="app/kanban.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fab fa-trello"></span></span><span
                                        class="nav-link-text ps-1">Kanban</span></div>
                            </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#social"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="social">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-share-alt"></span></span><span
                                        class="nav-link-text ps-1">Social</span></div>
                            </a>
                            <ul class="nav collapse" id="social">
                                <li class="nav-item"><a class="nav-link" href="app/social/feed.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Feed</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/social/activity-log.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Activity log</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/social/notifications.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Notifications</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/social/followers.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Followers</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#support-desk"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="support-desk">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-ticket-alt"></span></span><span
                                        class="nav-link-text ps-1">Support desk</span></div>
                            </a>
                            <ul class="nav collapse" id="support-desk">
                                <li class="nav-item"><a class="nav-link" href="app/support-desk/table-view.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Table view</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/support-desk/card-view.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Card
                                                view</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/support-desk/contacts.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Contacts</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="app/support-desk/contact-details.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Contact details</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="app/support-desk/tickets-preview.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Tickets preview</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/support-desk/quick-links.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Quick links</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="app/support-desk/reports.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Reports</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <!-- label-->
                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                <div class="col-auto navbar-vertical-label">Pages</div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider" />
                                </div>
                            </div><!-- parent pages--><a class="nav-link" href="pages/starter.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-flag"></span></span><span
                                        class="nav-link-text ps-1">Starter</span></div>
                            </a><!-- parent pages--><a class="nav-link" href="pages/landing.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-globe"></span></span><span
                                        class="nav-link-text ps-1">Landing</span></div>
                            </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#authentication"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="authentication">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-lock"></span></span><span
                                        class="nav-link-text ps-1">Authentication</span></div>
                            </a>
                            <ul class="nav collapse" id="authentication">
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#simple"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="authentication">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Simple</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="simple">
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/simple/login.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Login</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/simple/logout.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Logout</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/simple/register.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Register</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/simple/forgot-password.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Forgot password</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/simple/confirm-mail.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Confirm mail</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/simple/reset-password.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Reset password</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/simple/lock-screen.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Lock screen</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#card"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="authentication">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Card</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="card">
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/card/login.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Login</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/card/logout.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Logout</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/card/register.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Register</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/card/forgot-password.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Forgot password</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/card/confirm-mail.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Confirm mail</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/card/reset-password.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Reset password</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/card/lock-screen.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Lock screen</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#split"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="authentication">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Split</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="split">
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/split/login.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Login</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/split/logout.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Logout</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/split/register.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Register</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/split/forgot-password.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Forgot password</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/split/confirm-mail.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Confirm mail</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/split/reset-password.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Reset password</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="pages/authentication/split/lock-screen.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Lock screen</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/authentication/wizard.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Wizard</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#authentication-modal"
                                        data-bs-toggle="modal">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Modal</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#user"
                                role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-user"></span></span><span
                                        class="nav-link-text ps-1">User</span></div>
                            </a>
                            <ul class="nav collapse" id="user">
                                <li class="nav-item"><a class="nav-link" href="pages/user/profile.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Profile</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/user/settings.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Settings</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#pricing"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="pricing">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-tags"></span></span><span
                                        class="nav-link-text ps-1">Pricing</span></div>
                            </a>
                            <ul class="nav collapse" id="pricing">
                                <li class="nav-item"><a class="nav-link" href="pages/pricing/pricing-default.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Pricing default</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/pricing/pricing-alt.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Pricing alt</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#faq"
                                role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faq">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-question-circle"></span></span><span
                                        class="nav-link-text ps-1">Faq</span></div>
                            </a>
                            <ul class="nav collapse" id="faq">
                                <li class="nav-item"><a class="nav-link" href="pages/faq/faq-basic.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq
                                                basic</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/faq/faq-alt.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq
                                                alt</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/faq/faq-accordion.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq
                                                accordion</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#errors"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="errors">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-exclamation-triangle"></span></span><span
                                        class="nav-link-text ps-1">Errors</span></div>
                            </a>
                            <ul class="nav collapse" id="errors">
                                <li class="nav-item"><a class="nav-link" href="pages/errors/404.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">404</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/errors/500.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">500</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#miscellaneous"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="miscellaneous">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-thumbtack"></span></span><span
                                        class="nav-link-text ps-1">Miscellaneous</span></div>
                            </a>
                            <ul class="nav collapse" id="miscellaneous">
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/miscellaneous/associations.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Associations</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/miscellaneous/invite-people.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Invite people</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/miscellaneous/privacy-policy.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Privacy policy</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#Layouts"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="Layouts">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="far fa-window-restore"></span></span><span
                                        class="nav-link-text ps-1">Layouts</span></div>
                            </a>
                            <ul class="nav collapse" id="Layouts">
                                <li class="nav-item"><a class="nav-link" href="demo/navbar-vertical.html"
                                        target="_blank">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Navbar vertical</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/navbar-top.html"
                                        target="_blank">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Top
                                                nav</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/navbar-double-top.html"
                                        target="_blank">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Double top</span><span
                                                class="badge rounded-pill ms-2 badge-subtle-success">New</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/combo-nav.html" target="_blank">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Combo nav</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <!-- label-->
                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                <div class="col-auto navbar-vertical-label">Modules</div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider" />
                                </div>
                            </div><!-- parent pages--><a class="nav-link dropdown-indicator" href="#forms"
                                role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-file-alt"></span></span><span
                                        class="nav-link-text ps-1">Forms</span></div>
                            </a>
                            <ul class="nav collapse" id="forms">
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#basic"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Basic</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="basic">
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/forms/basic/form-control.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Form control</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/forms/basic/input-group.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Input group</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/forms/basic/select.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Select</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/forms/basic/checks.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Checks</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/forms/basic/range.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Range</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/forms/basic/layout.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Layout</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#advance"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Advance</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="advance">
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/forms/advance/advance-select.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Advance select</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/forms/advance/date-picker.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Date picker</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/forms/advance/editor.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Editor</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/forms/advance/emoji-button.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Emoji button</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/forms/advance/file-uploader.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">File uploader</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/forms/advance/input-mask.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Input mask</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/forms/advance/range-slider.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Range slider</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/forms/advance/rating.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Rating</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/floating-labels.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Floating labels</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/wizard.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Wizard</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/validation.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Validation</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#tables"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="tables">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-table"></span></span><span
                                        class="nav-link-text ps-1">Tables</span></div>
                            </a>
                            <ul class="nav collapse" id="tables">
                                <li class="nav-item"><a class="nav-link" href="modules/tables/basic-tables.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Basic tables</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/tables/advance-tables.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Advance tables</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/tables/bulk-select.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bulk
                                                select</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#charts"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="charts">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-chart-line"></span></span><span
                                        class="nav-link-text ps-1">Charts</span></div>
                            </a>
                            <ul class="nav collapse" id="charts">
                                <li class="nav-item"><a class="nav-link" href="modules/charts/chartjs.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Chartjs</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/charts/d3js.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">D3js</span><span
                                                class="badge rounded-pill ms-2 badge-subtle-success">New</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#eCharts"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">ECharts</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="eCharts">
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/charts/echarts/line-charts.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Line charts</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/charts/echarts/bar-charts.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Bar charts</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/charts/echarts/candlestick-charts.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Candlestick charts</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/charts/echarts/geo-map.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Geo map</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/charts/echarts/scatter-charts.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Scatter charts</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/charts/echarts/pie-charts.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Pie charts</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/charts/echarts/gauge-charts.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Gauge charts</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/charts/echarts/radar-charts.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Radar charts</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/charts/echarts/heatmap-charts.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Heatmap charts</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/charts/echarts/how-to-use.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">How to use</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#icons"
                                role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="icons">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-shapes"></span></span><span
                                        class="nav-link-text ps-1">Icons</span></div>
                            </a>
                            <ul class="nav collapse" id="icons">
                                <li class="nav-item"><a class="nav-link" href="modules/icons/font-awesome.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Font
                                                awesome</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/icons/bootstrap-icons.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Bootstrap icons</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/icons/feather.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Feather</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/icons/material-icons.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Material icons</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#maps"
                                role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="maps">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-map"></span></span><span
                                        class="nav-link-text ps-1">Maps</span></div>
                            </a>
                            <ul class="nav collapse" id="maps">
                                <li class="nav-item"><a class="nav-link" href="modules/maps/google-map.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Google map</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/maps/leaflet-map.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Leaflet map</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#components"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="components">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-puzzle-piece"></span></span><span
                                        class="nav-link-text ps-1">Components</span></div>
                            </a>
                            <ul class="nav collapse" id="components">
                                <li class="nav-item"><a class="nav-link" href="modules/components/accordion.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Accordion</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/alerts.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Alerts</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/anchor.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Anchor</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/components/animated-icons.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Animated icons</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/background.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Background</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/badges.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Badges</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/bottom-bar.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Bottom bar</span><span
                                                class="badge rounded-pill ms-2 badge-subtle-success">New</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/breadcrumbs.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Breadcrumbs</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/buttons.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Buttons</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/calendar.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Calendar</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/cards.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Cards</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#carousel"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Carousel</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="carousel">
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/components/carousel/bootstrap.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Bootstrap</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/components/carousel/swiper.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Swiper</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/collapse.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Collapse</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/components/cookie-notice.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Cookie notice</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/countup.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Countup</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/draggable.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Draggable</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/dropdowns.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Dropdowns</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/components/jquery-components.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Jquery</span><span
                                                class="badge rounded-pill ms-2 badge-subtle-success">New</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/list-group.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">List
                                                group</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/modals.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Modals</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#navs-_and_-Tabs"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navs
                                                &amp; Tabs</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="navs-_and_-Tabs">
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/components/navs-and-tabs/navs.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Navs</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/components/navs-and-tabs/navbar.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Navbar</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/components/navs-and-tabs/vertical-navbar.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Navbar vertical</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/components/navs-and-tabs/top-navbar.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Top nav</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/components/navs-and-tabs/double-top-navbar.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Double top</span><span
                                                        class="badge rounded-pill ms-2 badge-subtle-success">New</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/components/navs-and-tabs/combo-navbar.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Combo nav</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/components/navs-and-tabs/tabs.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Tabs</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/offcanvas.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Offcanvas</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pictures"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Pictures</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="pictures">
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/components/pictures/avatar.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Avatar</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/components/pictures/images.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Images</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/components/pictures/figures.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Figures</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/components/pictures/hoverbox.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Hoverbox</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/components/pictures/lightbox.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Lightbox</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/components/progress-bar.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Progress bar</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/placeholder.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Placeholder</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/pagination.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Pagination</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/popovers.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Popovers</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/scrollspy.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Scrollspy</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/search.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Search</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/spinners.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Spinners</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/timeline.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Timeline</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/toasts.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Toasts</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/tooltips.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Tooltips</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/treeview.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Treeview</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/typed-text.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Typed text</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#videos"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Videos</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="videos">
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/components/videos/embed.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Embed</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="modules/components/videos/plyr.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Plyr</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#utilities"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="utilities">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-fire"></span></span><span
                                        class="nav-link-text ps-1">Utilities</span></div>
                            </a>
                            <ul class="nav collapse" id="utilities">
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/background.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Background</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/borders.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Borders</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/clearfix.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Clearfix</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/colors.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Colors</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/utilities/colored-links.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Colored links</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/display.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Display</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/flex.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Flex</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/float.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Float</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/focus-ring.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Focus ring</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/grid.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Grid</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/icon-link.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Icon
                                                link</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/utilities/overlayscrollbar.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Overlay scrollbar</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/position.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Position</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/ratio.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Ratio</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/spacing.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Spacing</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/sizing.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Sizing</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/utilities/stretched-link.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Stretched link</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/utilities/text-truncation.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Text
                                                truncation</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/typography.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Typography</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/utilities/vertical-align.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Vertical align</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/utilities/vertical-rule.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Vertical rule</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/visibility.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Visibility</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="modules/utilities/visually-hidden.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Visually hidden</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link" href="widgets.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-poll"></span></span><span
                                        class="nav-link-text ps-1">Widgets</span></div>
                            </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#multi-level"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="multi-level">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-layer-group"></span></span><span
                                        class="nav-link-text ps-1">Multi level</span></div>
                            </a>
                            <ul class="nav collapse" id="multi-level">
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-two"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Level two</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="level-two">
                                        <li class="nav-item"><a class="nav-link" href="#!.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Item 1</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#!.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Item 2</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-three"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Level three</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="level-three">
                                        <li class="nav-item"><a class="nav-link" href="#!.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Item 3</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-4"
                                                data-bs-toggle="collapse" aria-expanded="false"
                                                aria-controls="level-three">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Item 4</span></div>
                                            </a><!-- more inner pages-->
                                            <ul class="nav collapse" id="item-4">
                                                <li class="nav-item"><a class="nav-link" href="#!.html">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text ps-1">Item 5</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#!.html">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text ps-1">Item 6</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-four"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Level four</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="level-four">
                                        <li class="nav-item"><a class="nav-link" href="#!.html">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Item 6</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-7"
                                                data-bs-toggle="collapse" aria-expanded="false"
                                                aria-controls="level-four">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Item 7</span></div>
                                            </a><!-- more inner pages-->
                                            <ul class="nav collapse" id="item-7">
                                                <li class="nav-item"><a class="nav-link" href="#!.html">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text ps-1">Item 8</span></div>
                                                    </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                        href="#item-9" data-bs-toggle="collapse"
                                                        aria-expanded="false" aria-controls="item-7">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text ps-1">Item 9</span></div>
                                                    </a><!-- more inner pages-->
                                                    <ul class="nav collapse" id="item-9">
                                                        <li class="nav-item"><a class="nav-link" href="#!.html">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text ps-1">Item 10</span>
                                                                </div>
                                                            </a><!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link" href="#!.html">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text ps-1">Item 11</span>
                                                                </div>
                                                            </a><!-- more inner pages-->
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <!-- label-->
                            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                <div class="col-auto navbar-vertical-label">Documentation</div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider" />
                                </div>
                            </div><!-- parent pages--><a class="nav-link" href="documentation/getting-started.html"
                                role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-rocket"></span></span><span
                                        class="nav-link-text ps-1">Getting started</span></div>
                            </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#customization"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="customization">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-wrench"></span></span><span
                                        class="nav-link-text ps-1">Customization</span></div>
                            </a>
                            <ul class="nav collapse" id="customization">
                                <li class="nav-item"><a class="nav-link"
                                        href="documentation/customization/configuration.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Configuration</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="documentation/customization/styling.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Styling</span><span
                                                class="badge rounded-pill ms-2 badge-subtle-success">Updated</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="documentation/customization/dark-mode.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dark
                                                mode</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="documentation/customization/plugin.html">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Plugin</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul><!-- parent pages--><a class="nav-link" href="documentation/faq.html"
                                role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-question-circle"></span></span><span
                                        class="nav-link-text ps-1">Faq</span></div>
                            </a><!-- parent pages--><a class="nav-link" href="documentation/gulp.html"
                                role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fab fa-gulp"></span></span><span
                                        class="nav-link-text ps-1">Gulp</span></div>
                            </a><!-- parent pages--><a class="nav-link" href="documentation/design-file.html"
                                role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-palette"></span></span><span
                                        class="nav-link-text ps-1">Design file</span></div>
                            </a><!-- parent pages--><a class="nav-link" href="changelog.html" role="button">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-code-branch"></span></span><span
                                        class="nav-link-text ps-1">Changelog</span></div>
                            </a>
                        </li>
                    </ul>
                    <div class="settings mb-3">
                        <div class="card shadow-none">
                            <div class="card-body alert mb-0" role="alert">
                                <div class="btn-close-falcon-container"><button
                                        class="btn btn-link btn-close-falcon p-0" aria-label="Close"
                                        data-bs-dismiss="alert"></button></div>
                                <div class="text-center"><img
                                        src="assets/img/icons/spot-illustrations/navbar-vertical.png" alt=""
                                        width="80" />
                                    <p class="fs--2 mt-2">Loving what you see? <br />Get your copy of <a
                                            href="#!">Falcon</a></p>
                                    <div class="d-grid"><a class="btn btn-sm btn-primary"
                                            href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/"
                                            target="_blank">Purchase</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard"
                aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.html">
                <div class="d-flex align-items-center"><img class="me-2"
                        src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span
                        class="font-sans-serif text-primary">falcon</span></div>
            </a>
            <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
                <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            id="dashboards">Dashboard</a>
                        <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                            aria-labelledby="dashboards">
                            <div class="bg-white dark__bg-1000 rounded-3 py-2"><a
                                    class="dropdown-item link-600 fw-medium" href="index.html">Default</a><a
                                    class="dropdown-item link-600 fw-medium"
                                    href="dashboard/analytics.html">Analytics</a><a
                                    class="dropdown-item link-600 fw-medium" href="dashboard/crm.html">CRM</a><a
                                    class="dropdown-item link-600 fw-medium" href="dashboard/e-commerce.html">E
                                    commerce</a><a class="dropdown-item link-600 fw-medium"
                                    href="dashboard/lms.html">LMS<span
                                        class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                    class="dropdown-item link-600 fw-medium"
                                    href="dashboard/project-management.html">Management</a><a
                                    class="dropdown-item link-600 fw-medium" href="dashboard/saas.html">SaaS</a><a
                                    class="dropdown-item link-600 fw-medium"
                                    href="dashboard/support-desk.html">Support desk<span
                                        class="badge rounded-pill ms-2 badge-subtle-success">New</span></a></div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                        <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                            aria-labelledby="apps">
                            <div class="card navbar-card-app shadow-none dark__bg-1000">
                                <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                        src="assets/img/icons/spot-illustrations/authentication-corner.png"
                                        width="130" alt="" />
                                    <div class="row">
                                        <div class="col-6 col-md-4">
                                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium"
                                                    href="app/calendar.html">Calendar</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/chat.html">Chat</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/kanban.html">Kanban</a>
                                                <p class="nav-link text-700 mb-0 fw-bold">Social</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/social/feed.html">Feed</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/social/activity-log.html">Activity log</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/social/notifications.html">Notifications</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/social/followers.html">Followers</a>
                                                <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/support-desk/table-view.html">Table view</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/support-desk/card-view.html">Card view</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/support-desk/contacts.html">Contacts</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/support-desk/contact-details.html">Contact
                                                    details</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="app/support-desk/tickets-preview.html">Tickets
                                                    preview</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="app/support-desk/quick-links.html">Quick links</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-learning/course/course-list.html">Course list</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-learning/course/course-grid.html">Course grid</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-learning/course/course-details.html">Course
                                                    details</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-learning/course/create-a-course.html">Create a
                                                    course</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-learning/student-overview.html">Student
                                                    overview</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-learning/trainer-profile.html">Trainer profile</a>
                                                <p class="nav-link text-700 mb-0 fw-bold">Events</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/events/create-an-event.html">Create an event</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/events/event-detail.html">Event detail</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/events/event-list.html">Event list</a>
                                                <p class="nav-link text-700 mb-0 fw-bold">Email</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/email/inbox.html">Inbox</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/email/email-detail.html">Email detail</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/email/compose.html">Compose</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-commerce/product/product-list.html">Product
                                                    list</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-commerce/product/product-grid.html">Product
                                                    grid</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-commerce/product/product-details.html">Product
                                                    details</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-commerce/product/add-product.html">Add product</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-commerce/orders/order-list.html">Order list</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-commerce/orders/order-details.html">Order
                                                    details</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-commerce/customers.html">Customers</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-commerce/customer-details.html">Customer
                                                    details</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-commerce/shopping-cart.html">Shopping cart</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-commerce/checkout.html">Checkout</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-commerce/billing.html">Billing</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="app/e-commerce/invoice.html">Invoice</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            id="pagess">Pages</a>
                        <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                            aria-labelledby="pagess">
                            <div class="card navbar-card-pages shadow-none dark__bg-1000">
                                <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                        src="assets/img/icons/spot-illustrations/authentication-corner.png"
                                        width="130" alt="" />
                                    <div class="row">
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/simple/login.html">Login</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/simple/logout.html">Logout</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/simple/register.html">Register</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/simple/forgot-password.html">Forgot
                                                    password</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/simple/confirm-mail.html">Confirm
                                                    mail</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/simple/reset-password.html">Reset
                                                    password</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/simple/lock-screen.html">Lock
                                                    screen</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/card/login.html">Login</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/card/logout.html">Logout</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/card/register.html">Register</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/card/forgot-password.html">Forgot
                                                    password</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/card/confirm-mail.html">Confirm
                                                    mail</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/card/reset-password.html">Reset
                                                    password</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/card/lock-screen.html">Lock
                                                    screen</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/split/login.html">Login</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/split/logout.html">Logout</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/split/register.html">Register</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/split/forgot-password.html">Forgot
                                                    password</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/split/confirm-mail.html">Confirm
                                                    mail</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/split/reset-password.html">Reset
                                                    password</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/split/lock-screen.html">Lock
                                                    screen</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="demo/navbar-vertical.html">Navbar vertical</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="demo/navbar-top.html">Top nav</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="demo/navbar-double-top.html">Double top<span
                                                        class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="demo/combo-nav.html">Combo nav</a>
                                                <p class="nav-link text-700 mb-0 fw-bold">Others</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/starter.html">Starter</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/landing.html">Landing</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">User</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/user/profile.html">Profile</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/user/settings.html">Settings</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/pricing/pricing-default.html">Pricing default</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/pricing/pricing-alt.html">Pricing alt</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/errors/404.html">404</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/errors/500.html">500</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/miscellaneous/associations.html">Associations</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/miscellaneous/invite-people.html">Invite
                                                    people</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/miscellaneous/privacy-policy.html">Privacy
                                                    policy</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/faq/faq-basic.html">Faq basic</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/faq/faq-alt.html">Faq alt</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/faq/faq-accordion.html">Faq accordion</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="pages/authentication/wizard.html">Wizard</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="#authentication-modal" data-bs-toggle="modal">Modal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            id="moduless">Modules</a>
                        <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                            aria-labelledby="moduless">
                            <div class="card navbar-card-components shadow-none dark__bg-1000">
                                <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                        src="assets/img/icons/spot-illustrations/authentication-corner.png"
                                        width="130" alt="" />
                                    <div class="row">
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Components</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/accordion.html">Accordion</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/alerts.html">Alerts</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/anchor.html">Anchor</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/animated-icons.html">Animated
                                                    icons</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/background.html">Background</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/badges.html">Badges</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/bottom-bar.html">Bottom bar<span
                                                        class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/breadcrumbs.html">Breadcrumbs</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/buttons.html">Buttons</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/calendar.html">Calendar</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/cards.html">Cards</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/carousel/bootstrap.html">Bootstrap
                                                    carousel</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column mt-md-4 pt-md-1"><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/carousel/swiper.html">Swiper</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/collapse.html">Collapse</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/cookie-notice.html">Cookie notice</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/countup.html">Countup</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/draggable.html">Draggable</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/dropdowns.html">Dropdowns</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/jquery-components.html">Jquery<span
                                                        class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/list-group.html">List group</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/modals.html">Modals</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/navs-and-tabs/navs.html">Navs</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/navs-and-tabs/navbar.html">Navbar</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/navs-and-tabs/vertical-navbar.html">Navbar
                                                    vertical</a></div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/navs-and-tabs/top-navbar.html">Top
                                                    nav</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/navs-and-tabs/double-top-navbar.html">Double
                                                    top<span
                                                        class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/navs-and-tabs/combo-navbar.html">Combo
                                                    nav</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/navs-and-tabs/tabs.html">Tabs</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/offcanvas.html">Offcanvas</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/pictures/avatar.html">Avatar</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/pictures/images.html">Images</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/pictures/figures.html">Figures</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/pictures/hoverbox.html">Hoverbox</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/pictures/lightbox.html">Lightbox</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/progress-bar.html">Progress bar</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/placeholder.html">Placeholder</a></div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/pagination.html">Pagination</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/popovers.html">Popovers</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/scrollspy.html">Scrollspy</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/search.html">Search</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/spinners.html">Spinners</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/timeline.html">Timeline</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/toasts.html">Toasts</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/tooltips.html">Tooltips</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/treeview.html">Treeview</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/typed-text.html">Typed text</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/videos/embed.html">Embed</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/components/videos/plyr.html">Plyr</a></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/background.html">Background</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/borders.html">Borders</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/clearfix.html">Clearfix</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/colors.html">Colors</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/colored-links.html">Colored links</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/display.html">Display</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/flex.html">Flex</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/float.html">Float</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/focus-ring.html">Focus ring</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/grid.html">Grid</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/icon-link.html">Icon link</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/overlayscrollbar.html">Overlay
                                                    scrollbar</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/position.html">Position</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/ratio.html">Ratio</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/spacing.html">Spacing</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/sizing.html">Sizing</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/stretched-link.html">Stretched
                                                    link</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/text-truncation.html">Text
                                                    truncation</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/typography.html">Typography</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/vertical-align.html">Vertical
                                                    align</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/vertical-rule.html">Vertical rule</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/utilities/visibility.html">Visibility</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/tables/basic-tables.html">Basic tables</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/tables/advance-tables.html">Advance tables</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/tables/bulk-select.html">Bulk select</a>
                                                <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/charts/chartjs.html">Chartjs</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/charts/d3js.html">D3js<span
                                                        class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                                                <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/charts/echarts/line-charts.html">Line charts</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/charts/echarts/bar-charts.html">Bar charts</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/charts/echarts/candlestick-charts.html">Candlestick
                                                    charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/charts/echarts/geo-map.html">Geo map</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/charts/echarts/scatter-charts.html">Scatter
                                                    charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/charts/echarts/pie-charts.html">Pie charts</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/charts/echarts/gauge-charts.html">Gauge
                                                    charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/charts/echarts/radar-charts.html">Radar
                                                    charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/charts/echarts/heatmap-charts.html">Heatmap
                                                    charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/charts/echarts/how-to-use.html">How to use</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column">
                                                <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/basic/form-control.html">Form control</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/basic/input-group.html">Input group</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/basic/select.html">Select</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/basic/checks.html">Checks</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/basic/range.html">Range</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/basic/layout.html">Layout</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/advance/advance-select.html">Advance
                                                    select</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/advance/date-picker.html">Date picker</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/advance/editor.html">Editor</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/advance/emoji-button.html">Emoji
                                                    button</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/advance/file-uploader.html">File
                                                    uploader</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/advance/input-mask.html">Input mask</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/advance/range-slider.html">Range
                                                    slider</a><a class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/advance/rating.html">Rating</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/floating-labels.html">Floating labels</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/wizard.html">Wizard</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/forms/validation.html">Validation</a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="nav flex-column pt-xxl-1">
                                                <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/icons/font-awesome.html">Font awesome</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/icons/bootstrap-icons.html">Bootstrap icons</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/icons/feather.html">Feather</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/icons/material-icons.html">Material icons</a>
                                                <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/maps/google-map.html">Google map</a><a
                                                    class="nav-link py-1 link-600 fw-medium"
                                                    href="modules/maps/leaflet-map.html">Leaflet map</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            id="documentations">Documentation</a>
                        <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                            aria-labelledby="documentations">
                            <div class="bg-white dark__bg-1000 rounded-3 py-2"><a
                                    class="dropdown-item link-600 fw-medium"
                                    href="documentation/getting-started.html">Getting started</a><a
                                    class="dropdown-item link-600 fw-medium"
                                    href="documentation/customization/configuration.html">Configuration</a><a
                                    class="dropdown-item link-600 fw-medium"
                                    href="documentation/customization/styling.html">Styling<span
                                        class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a
                                    class="dropdown-item link-600 fw-medium"
                                    href="documentation/customization/dark-mode.html">Dark mode</a><a
                                    class="dropdown-item link-600 fw-medium"
                                    href="documentation/customization/plugin.html">Plugin</a><a
                                    class="dropdown-item link-600 fw-medium" href="documentation/faq.html">Faq</a><a
                                    class="dropdown-item link-600 fw-medium"
                                    href="documentation/gulp.html">Gulp</a><a
                                    class="dropdown-item link-600 fw-medium"
                                    href="documentation/design-file.html">Design file</a><a
                                    class="dropdown-item link-600 fw-medium" href="changelog.html">Changelog</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                <li class="nav-item ps-2 pe-0">
                    <div class="dropdown theme-control-dropdown"><a
                            class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-0 pe-1 py-0"
                            href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-2"
                                data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span
                                class="fas fa-moon fs-2" data-fa-transform="shrink-3"
                                data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-2"
                                data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3"
                            aria-labelledby="themeSwitchDropdown">
                            <div class="bg-white dark__bg-1000 rounded-2 py-2"><button
                                    class="dropdown-item d-flex align-items-center gap-2" type="button"
                                    value="light" data-theme-control="theme"><span
                                        class="fas fa-sun"></span>Light<span
                                        class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                                    class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark"
                                    data-theme-control="theme"><span class="fas fa-moon"
                                        data-fa-transform=""></span>Dark<span
                                        class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                                    class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto"
                                    data-theme-control="theme"><span class="fas fa-adjust"
                                        data-fa-transform=""></span>Auto<span
                                        class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item d-none d-sm-block">
                    <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                        href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                            data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                            class="notification-indicator-number">1</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                        id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span
                            class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                    <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                        aria-labelledby="navbarDropdownNotification">
                        <div class="card card-notification shadow-none">
                            <div class="card-header">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h6 class="card-header-title mb-0">Notifications</h6>
                                    </div>
                                    <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark
                                            all as read</a></div>
                                </div>
                            </div>
                            <div class="scrollbar-overlay" style="max-height:19rem">
                                <div class="list-group list-group-flush fw-normal fs--1">
                                    <div class="list-group-title border-bottom">NEW</div>
                                    <div class="list-group-item">
                                        <a class="notification notification-flush notification-unread" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-2xl me-3">
                                                    <img class="rounded-circle" src="assets/img/team/1-thumb.png"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>Emma Watson</strong> replied to your comment
                                                    : "Hello world 😍"</p>
                                                <span class="notification-time"><span class="me-2" role="img"
                                                        aria-label="Emoji">💬</span>Just now</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-group-item">
                                        <a class="notification notification-flush notification-unread" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-2xl me-3">
                                                    <div class="avatar-name rounded-circle"><span>AB</span></div>
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                                    <strong>Mia Khalifa's</strong> status</p>
                                                <span class="notification-time"><span
                                                        class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-group-title border-bottom">EARLIER</div>
                                    <div class="list-group-item">
                                        <a class="notification notification-flush" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-2xl me-3">
                                                    <img class="rounded-circle"
                                                        src="assets/img/icons/weather-sm.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1">The forecast today shows a low of 20&#8451; in
                                                    California. See today's weather.</p>
                                                <span class="notification-time"><span class="me-2" role="img"
                                                        aria-label="Emoji">🌤️</span>1d</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-group-item">
                                        <a class="border-bottom-0 notification-unread  notification notification-flush"
                                            href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-xl me-3">
                                                    <img class="rounded-circle" src="assets/img/logos/oxford.png"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>University of Oxford</strong> created an
                                                    event : "Causal Inference Hilary 2019"</p>
                                                <span class="notification-time"><span class="me-2" role="img"
                                                        aria-label="Emoji">✌️</span>1w</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-group-item">
                                        <a class="border-bottom-0 notification notification-flush" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-xl me-3">
                                                    <img class="rounded-circle" src="assets/img/team/10.jpg"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>James Cameron</strong> invited to join the
                                                    group: United Nations International Children's Fund</p>
                                                <span class="notification-time"><span class="me-2" role="img"
                                                        aria-label="Emoji">🙋‍</span>2d</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center border-top"><a class="card-link d-block"
                                    href="app/social/notifications.html">View all</a></div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown px-1">
                    <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
                        data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="43" viewBox="0 0 16 16" fill="none">
                            <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                            <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                            <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                            <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                            <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                            <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                            <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                            <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                            <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                        </svg></a>
                    <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
                        aria-labelledby="navbarDropdownMenu">
                        <div class="card shadow-none">
                            <div class="scrollbar-overlay nine-dots-dropdown">
                                <div class="card-body px-3">
                                    <div class="row text-center gx-0 gy-0">
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="pages/user/profile.html" target="_blank">
                                                <div class="avatar avatar-2xl"> <img class="rounded-circle"
                                                        src="assets/img/team/3.jpg" alt="" /></div>
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2">Account</p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="https://themewagon.com/" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/themewagon.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                    Themewagon</p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="https://mailbluster.com/" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/mailbluster.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                    Mailbluster</p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="#!" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/google.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Google
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="#!" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/spotify.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Spotify
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="#!" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/steam.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Steam
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="#!" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/github-light.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Github
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="#!" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/discord.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Discord
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="#!" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/xbox.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">xbox</p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="#!" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/trello.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Kanban
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="#!" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/hp.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Hp</p>
                                            </a></div>
                                        <div class="col-12">
                                            <hr class="my-3 mx-n3 bg-200" />
                                        </div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="#!" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/linkedin.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Linkedin
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="#!" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/twitter.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Twitter
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="#!" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/facebook.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Facebook
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="#!" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/instagram.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                    Instagram</p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="#!" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/pinterest.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                    Pinterest</p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="#!" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/slack.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Slack
                                                </p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="#!" target="_blank"><img class="rounded"
                                                    src="assets/img/nav-icons/deviantart.png" alt="" width="40"
                                                    height="40" />
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                    Deviantart</p>
                                            </a></div>
                                        <div class="col-4"><a
                                                class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                href="app/events/event-detail.html" target="_blank">
                                                <div class="avatar avatar-2xl">
                                                    <div
                                                        class="avatar-name rounded-circle bg-primary-subtle text-primary">
                                                        <span class="fs-2">E</span></div>
                                                </div>
                                                <p class="mb-0 fw-medium text-800 text-truncate fs--2">Events</p>
                                            </a></div>
                                        <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4"
                                                href="#!">Show more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                        aria-labelledby="navbarDropdownUser">
                        <div class="bg-white dark__bg-1000 rounded-2 py-2">
                            <a class="dropdown-item fw-bold text-warning" href="#!"><span
                                    class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Set status</a>
                            <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
                            <a class="dropdown-item" href="#!">Feedback</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                            <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="content">
            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
                <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                    aria-controls="navbarVerticalCollapse" aria-expanded="false"
                    aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                            class="toggle-line"></span></span></button>
                <a class="navbar-brand me-1 me-sm-3" href="index.html">
                    <div class="d-flex align-items-center"><img class="me-2"
                            src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span
                            class="font-sans-serif text-primary">falcon</span></div>
                </a>
                <ul class="navbar-nav align-items-center d-none d-lg-block">
                    <li class="nav-item">
                        <div class="search-box" data-list='{"valueNames":["title"]}'>
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                    class="form-control search-input fuzzy-search" type="search"
                                    placeholder="Search..." aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                            <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none"
                                data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0"
                                    aria-label="Close"></button></div>
                            <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                                <div class="scrollbar list py-3" style="max-height: 24rem;">
                                    <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">
                                        Recently Browsed</h6><a class="dropdown-item fs--1 px-x1 py-1 hover-primary"
                                        href="app/events/event-detail.html">
                                        <div class="d-flex align-items-center">
                                            <span class="fas fa-circle me-2 text-300 fs--2"></span>
                                            <div class="fw-normal title">Pages <span
                                                    class="fas fa-chevron-right mx-1 text-500 fs--2"
                                                    data-fa-transform="shrink-2"></span> Events</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item fs--1 px-x1 py-1 hover-primary"
                                        href="app/e-commerce/customers.html">
                                        <div class="d-flex align-items-center">
                                            <span class="fas fa-circle me-2 text-300 fs--2"></span>
                                            <div class="fw-normal title">E-commerce <span
                                                    class="fas fa-chevron-right mx-1 text-500 fs--2"
                                                    data-fa-transform="shrink-2"></span> Customers</div>
                                        </div>
                                    </a>
                                    <hr class="text-200 dark__text-900" />
                                    <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">
                                        Suggested Filter</h6><a class="dropdown-item px-x1 py-1 fs-0"
                                        href="app/e-commerce/customers.html">
                                        <div class="d-flex align-items-center"><span
                                                class="badge fw-medium text-decoration-none me-2 badge-subtle-warning">customers:</span>
                                            <div class="flex-1 fs--1 title">All customers list</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item px-x1 py-1 fs-0" href="app/events/event-detail.html">
                                        <div class="d-flex align-items-center"><span
                                                class="badge fw-medium text-decoration-none me-2 badge-subtle-success">events:</span>
                                            <div class="flex-1 fs--1 title">Latest events in current month</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item px-x1 py-1 fs-0"
                                        href="app/e-commerce/product/product-grid.html">
                                        <div class="d-flex align-items-center"><span
                                                class="badge fw-medium text-decoration-none me-2 badge-subtle-info">products:</span>
                                            <div class="flex-1 fs--1 title">Most popular products</div>
                                        </div>
                                    </a>
                                    <hr class="text-200 dark__text-900" />
                                    <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Files
                                    </h6><a class="dropdown-item px-x1 py-2" href="#!">
                                        <div class="d-flex align-items-center">
                                            <div class="file-thumbnail me-2"><img
                                                    class="border h-100 w-100 object-fit-cover rounded-3"
                                                    src="assets/img/products/3-thumb.png" alt="" /></div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 title">iPhone</h6>
                                                <p class="fs--2 mb-0 d-flex"><span
                                                        class="fw-semi-bold">Antony</span><span
                                                        class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item px-x1 py-2" href="#!">
                                        <div class="d-flex align-items-center">
                                            <div class="file-thumbnail me-2"><img class="img-fluid"
                                                    src="assets/img/icons/zip.png" alt="" /></div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 title">Falcon v1.8.2</h6>
                                                <p class="fs--2 mb-0 d-flex"><span
                                                        class="fw-semi-bold">John</span><span
                                                        class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="text-200 dark__text-900" />
                                    <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">
                                        Members</h6><a class="dropdown-item px-x1 py-2"
                                        href="pages/user/profile.html">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-l status-online me-2">
                                                <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 title">Anna Karinina</h6>
                                                <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item px-x1 py-2" href="pages/user/profile.html">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-l me-2">
                                                <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 title">Antony Hopkins</h6>
                                                <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item px-x1 py-2" href="pages/user/profile.html">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-l me-2">
                                                <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 title">Emma Watson</h6>
                                                <p class="fs--2 mb-0 d-flex">Google</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center mt-n3">
                                    <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                    <li class="nav-item ps-2 pe-0">
                        <div class="dropdown theme-control-dropdown"><a
                                class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-0 pe-1 py-0"
                                href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-2"
                                    data-fa-transform="shrink-2"
                                    data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-2"
                                    data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span><span
                                    class="fas fa-adjust fs-2" data-fa-transform="shrink-2"
                                    data-theme-dropdown-toggle-icon="auto"></span></a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3"
                                aria-labelledby="themeSwitchDropdown">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2"><button
                                        class="dropdown-item d-flex align-items-center gap-2" type="button"
                                        value="light" data-theme-control="theme"><span
                                            class="fas fa-sun"></span>Light<span
                                            class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                                        class="dropdown-item d-flex align-items-center gap-2" type="button"
                                        value="dark" data-theme-control="theme"><span class="fas fa-moon"
                                            data-fa-transform=""></span>Dark<span
                                            class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                                        class="dropdown-item d-flex align-items-center gap-2" type="button"
                                        value="auto" data-theme-control="theme"><span class="fas fa-adjust"
                                            data-fa-transform=""></span>Auto<span
                                            class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-none d-sm-block">
                        <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                            href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                                data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                                class="notification-indicator-number">1</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                            id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"
                            data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                                data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                            aria-labelledby="navbarDropdownNotification">
                            <div class="card card-notification shadow-none">
                                <div class="card-header">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <h6 class="card-header-title mb-0">Notifications</h6>
                                        </div>
                                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal"
                                                href="#">Mark all as read</a></div>
                                    </div>
                                </div>
                                <div class="scrollbar-overlay" style="max-height:19rem">
                                    <div class="list-group list-group-flush fw-normal fs--1">
                                        <div class="list-group-title border-bottom">NEW</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread"
                                                href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <img class="rounded-circle"
                                                            src="assets/img/team/1-thumb.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Emma Watson</strong> replied to your
                                                        comment : "Hello world 😍"</p>
                                                    <span class="notification-time"><span class="me-2" role="img"
                                                            aria-label="Emoji">💬</span>Just now</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread"
                                                href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <div class="avatar-name rounded-circle"><span>AB</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                                        <strong>Mia Khalifa's</strong> status</p>
                                                    <span class="notification-time"><span
                                                            class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-title border-bottom">EARLIER</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <img class="rounded-circle"
                                                            src="assets/img/icons/weather-sm.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1">The forecast today shows a low of 20&#8451; in
                                                        California. See today's weather.</p>
                                                    <span class="notification-time"><span class="me-2" role="img"
                                                            aria-label="Emoji">🌤️</span>1d</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="border-bottom-0 notification-unread  notification notification-flush"
                                                href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-xl me-3">
                                                        <img class="rounded-circle"
                                                            src="assets/img/logos/oxford.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>University of Oxford</strong> created an
                                                        event : "Causal Inference Hilary 2019"</p>
                                                    <span class="notification-time"><span class="me-2" role="img"
                                                            aria-label="Emoji">✌️</span>1w</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="border-bottom-0 notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-xl me-3">
                                                        <img class="rounded-circle" src="assets/img/team/10.jpg"
                                                            alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>James Cameron</strong> invited to join
                                                        the group: United Nations International Children's Fund</p>
                                                    <span class="notification-time"><span class="me-2" role="img"
                                                            aria-label="Emoji">🙋‍</span>2d</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center border-top"><a class="card-link d-block"
                                        href="app/social/notifications.html">View all</a></div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown px-1">
                        <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
                            data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="43" viewBox="0 0 16 16" fill="none">
                                <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                                <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                                <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                                <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                                <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                                <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                                <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                                <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                                <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                            </svg></a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
                            aria-labelledby="navbarDropdownMenu">
                            <div class="card shadow-none">
                                <div class="scrollbar-overlay nine-dots-dropdown">
                                    <div class="card-body px-3">
                                        <div class="row text-center gx-0 gy-0">
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="pages/user/profile.html" target="_blank">
                                                    <div class="avatar avatar-2xl"> <img class="rounded-circle"
                                                            src="assets/img/team/3.jpg" alt="" /></div>
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2">Account
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="https://themewagon.com/" target="_blank"><img
                                                        class="rounded" src="assets/img/nav-icons/themewagon.png"
                                                        alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Themewagon</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="https://mailbluster.com/" target="_blank"><img
                                                        class="rounded" src="assets/img/nav-icons/mailbluster.png"
                                                        alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Mailbluster</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/google.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Google</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/spotify.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Spotify</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/steam.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Steam</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/github-light.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Github</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/discord.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Discord</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/xbox.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">xbox
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/trello.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Kanban</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/hp.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Hp
                                                    </p>
                                                </a></div>
                                            <div class="col-12">
                                                <hr class="my-3 mx-n3 bg-200" />
                                            </div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/linkedin.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Linkedin</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/twitter.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Twitter</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/facebook.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Facebook</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/instagram.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Instagram</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/pinterest.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Pinterest</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/slack.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Slack</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/deviantart.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Deviantart</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="app/events/event-detail.html" target="_blank">
                                                    <div class="avatar avatar-2xl">
                                                        <div
                                                            class="avatar-name rounded-circle bg-primary-subtle text-primary">
                                                            <span class="fs-2">E</span></div>
                                                    </div>
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2">Events
                                                    </p>
                                                </a></div>
                                            <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4"
                                                    href="#!">Show more</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                            aria-labelledby="navbarDropdownUser">
                            <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                <a class="dropdown-item fw-bold text-warning" href="#!"><span
                                        class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#!">Set status</a>
                                <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
                                <a class="dropdown-item" href="#!">Feedback</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                                <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;"
                data-move-target="#navbarVerticalNav" data-navbar-top="combo">
                <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                    aria-controls="navbarVerticalCollapse" aria-expanded="false"
                    aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                            class="toggle-line"></span></span></button>
                <a class="navbar-brand me-1 me-sm-3" href="index.html">
                    <div class="d-flex align-items-center"><img class="me-2"
                            src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span
                            class="font-sans-serif text-primary">falcon</span></div>
                </a>
                <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
                    <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="dashboards">Dashboard</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                aria-labelledby="dashboards">
                                <div class="bg-white dark__bg-1000 rounded-3 py-2"><a
                                        class="dropdown-item link-600 fw-medium" href="index.html">Default</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="dashboard/analytics.html">Analytics</a><a
                                        class="dropdown-item link-600 fw-medium" href="dashboard/crm.html">CRM</a><a
                                        class="dropdown-item link-600 fw-medium" href="dashboard/e-commerce.html">E
                                        commerce</a><a class="dropdown-item link-600 fw-medium"
                                        href="dashboard/lms.html">LMS<span
                                            class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="dashboard/project-management.html">Management</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="dashboard/saas.html">SaaS</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="dashboard/support-desk.html">Support desk<span
                                            class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="apps">App</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                aria-labelledby="apps">
                                <div class="card navbar-card-app shadow-none dark__bg-1000">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                            src="assets/img/icons/spot-illustrations/authentication-corner.png"
                                            width="130" alt="" />
                                        <div class="row">
                                            <div class="col-6 col-md-4">
                                                <div class="nav flex-column"><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/calendar.html">Calendar</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/chat.html">Chat</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/kanban.html">Kanban</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Social</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/social/feed.html">Feed</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/social/activity-log.html">Activity log</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/social/notifications.html">Notifications</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/social/followers.html">Followers</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/support-desk/table-view.html">Table view</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/support-desk/card-view.html">Card view</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/support-desk/contacts.html">Contacts</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/support-desk/contact-details.html">Contact
                                                        details</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/support-desk/tickets-preview.html">Tickets
                                                        preview</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/support-desk/quick-links.html">Quick links</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-learning/course/course-list.html">Course
                                                        list</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-learning/course/course-grid.html">Course
                                                        grid</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-learning/course/course-details.html">Course
                                                        details</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-learning/course/create-a-course.html">Create a
                                                        course</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-learning/student-overview.html">Student
                                                        overview</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-learning/trainer-profile.html">Trainer
                                                        profile</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Events</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/events/create-an-event.html">Create an event</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/events/event-detail.html">Event detail</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/events/event-list.html">Event list</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Email</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/email/inbox.html">Inbox</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/email/email-detail.html">Email detail</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/email/compose.html">Compose</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/product/product-list.html">Product
                                                        list</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/product/product-grid.html">Product
                                                        grid</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/product/product-details.html">Product
                                                        details</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/product/add-product.html">Add
                                                        product</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/orders/order-list.html">Order
                                                        list</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/orders/order-details.html">Order
                                                        details</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/customers.html">Customers</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/customer-details.html">Customer
                                                        details</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/shopping-cart.html">Shopping cart</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/checkout.html">Checkout</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/billing.html">Billing</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/e-commerce/invoice.html">Invoice</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="pagess">Pages</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                aria-labelledby="pagess">
                                <div class="card navbar-card-pages shadow-none dark__bg-1000">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                            src="assets/img/icons/spot-illustrations/authentication-corner.png"
                                            width="130" alt="" />
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/simple/login.html">Login</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/simple/logout.html">Logout</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/simple/register.html">Register</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/simple/forgot-password.html">Forgot
                                                        password</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/simple/confirm-mail.html">Confirm
                                                        mail</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/simple/reset-password.html">Reset
                                                        password</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/simple/lock-screen.html">Lock
                                                        screen</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/card/login.html">Login</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/card/logout.html">Logout</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/card/register.html">Register</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/card/forgot-password.html">Forgot
                                                        password</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/card/confirm-mail.html">Confirm
                                                        mail</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/card/reset-password.html">Reset
                                                        password</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/card/lock-screen.html">Lock
                                                        screen</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/split/login.html">Login</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/split/logout.html">Logout</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/split/register.html">Register</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/split/forgot-password.html">Forgot
                                                        password</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/split/confirm-mail.html">Confirm
                                                        mail</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/split/reset-password.html">Reset
                                                        password</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/split/lock-screen.html">Lock
                                                        screen</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="demo/navbar-vertical.html">Navbar vertical</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="demo/navbar-top.html">Top nav</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="demo/navbar-double-top.html">Double top<span
                                                            class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="demo/combo-nav.html">Combo nav</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Others</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/starter.html">Starter</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/landing.html">Landing</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">User</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/user/profile.html">Profile</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/user/settings.html">Settings</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/pricing/pricing-default.html">Pricing
                                                        default</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/pricing/pricing-alt.html">Pricing alt</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/errors/404.html">404</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/errors/500.html">500</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/miscellaneous/associations.html">Associations</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/miscellaneous/invite-people.html">Invite
                                                        people</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/miscellaneous/privacy-policy.html">Privacy
                                                        policy</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/faq/faq-basic.html">Faq basic</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/faq/faq-alt.html">Faq alt</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/faq/faq-accordion.html">Faq accordion</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="pages/authentication/wizard.html">Wizard</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="#authentication-modal"
                                                        data-bs-toggle="modal">Modal</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="moduless">Modules</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                aria-labelledby="moduless">
                                <div class="card navbar-card-components shadow-none dark__bg-1000">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                            src="assets/img/icons/spot-illustrations/authentication-corner.png"
                                            width="130" alt="" />
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Components</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/accordion.html">Accordion</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/alerts.html">Alerts</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/anchor.html">Anchor</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/animated-icons.html">Animated
                                                        icons</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/background.html">Background</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/badges.html">Badges</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/bottom-bar.html">Bottom bar<span
                                                            class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/breadcrumbs.html">Breadcrumbs</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/buttons.html">Buttons</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/calendar.html">Calendar</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/cards.html">Cards</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/carousel/bootstrap.html">Bootstrap
                                                        carousel</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column mt-md-4 pt-md-1"><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/carousel/swiper.html">Swiper</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/collapse.html">Collapse</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/cookie-notice.html">Cookie
                                                        notice</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/countup.html">Countup</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/draggable.html">Draggable</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/dropdowns.html">Dropdowns</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/jquery-components.html">Jquery<span
                                                            class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/list-group.html">List group</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/modals.html">Modals</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/navs-and-tabs/navs.html">Navs</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/navs-and-tabs/navbar.html">Navbar</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/navs-and-tabs/vertical-navbar.html">Navbar
                                                        vertical</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/navs-and-tabs/top-navbar.html">Top
                                                        nav</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/navs-and-tabs/double-top-navbar.html">Double
                                                        top<span
                                                            class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/navs-and-tabs/combo-navbar.html">Combo
                                                        nav</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/navs-and-tabs/tabs.html">Tabs</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/offcanvas.html">Offcanvas</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/pictures/avatar.html">Avatar</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/pictures/images.html">Images</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/pictures/figures.html">Figures</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/pictures/hoverbox.html">Hoverbox</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/pictures/lightbox.html">Lightbox</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/progress-bar.html">Progress
                                                        bar</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/placeholder.html">Placeholder</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/pagination.html">Pagination</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/popovers.html">Popovers</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/scrollspy.html">Scrollspy</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/search.html">Search</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/spinners.html">Spinners</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/timeline.html">Timeline</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/toasts.html">Toasts</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/tooltips.html">Tooltips</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/treeview.html">Treeview</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/typed-text.html">Typed text</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/videos/embed.html">Embed</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/components/videos/plyr.html">Plyr</a></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/background.html">Background</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/borders.html">Borders</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/clearfix.html">Clearfix</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/colors.html">Colors</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/colored-links.html">Colored
                                                        links</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/display.html">Display</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/flex.html">Flex</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/float.html">Float</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/focus-ring.html">Focus ring</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/grid.html">Grid</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/icon-link.html">Icon link</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/overlayscrollbar.html">Overlay
                                                        scrollbar</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/position.html">Position</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/ratio.html">Ratio</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/spacing.html">Spacing</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/sizing.html">Sizing</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/stretched-link.html">Stretched
                                                        link</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/text-truncation.html">Text
                                                        truncation</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/typography.html">Typography</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/vertical-align.html">Vertical
                                                        align</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/vertical-rule.html">Vertical
                                                        rule</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/utilities/visibility.html">Visibility</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/tables/basic-tables.html">Basic tables</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/tables/advance-tables.html">Advance
                                                        tables</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/tables/bulk-select.html">Bulk select</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/chartjs.html">Chartjs</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/d3js.html">D3js<span
                                                            class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/line-charts.html">Line
                                                        charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/bar-charts.html">Bar
                                                        charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/candlestick-charts.html">Candlestick
                                                        charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/geo-map.html">Geo map</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/scatter-charts.html">Scatter
                                                        charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/pie-charts.html">Pie
                                                        charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/gauge-charts.html">Gauge
                                                        charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/radar-charts.html">Radar
                                                        charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/heatmap-charts.html">Heatmap
                                                        charts</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/charts/echarts/how-to-use.html">How to use</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/basic/form-control.html">Form
                                                        control</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/basic/input-group.html">Input
                                                        group</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/basic/select.html">Select</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/basic/checks.html">Checks</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/basic/range.html">Range</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/basic/layout.html">Layout</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/advance/advance-select.html">Advance
                                                        select</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/advance/date-picker.html">Date
                                                        picker</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/advance/editor.html">Editor</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/advance/emoji-button.html">Emoji
                                                        button</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/advance/file-uploader.html">File
                                                        uploader</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/advance/input-mask.html">Input
                                                        mask</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/advance/range-slider.html">Range
                                                        slider</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/advance/rating.html">Rating</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/floating-labels.html">Floating
                                                        labels</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/wizard.html">Wizard</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/forms/validation.html">Validation</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column pt-xxl-1">
                                                    <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/icons/font-awesome.html">Font awesome</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/icons/bootstrap-icons.html">Bootstrap
                                                        icons</a><a class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/icons/feather.html">Feather</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/icons/material-icons.html">Material icons</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/maps/google-map.html">Google map</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="modules/maps/leaflet-map.html">Leaflet map</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="documentations">Documentation</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                aria-labelledby="documentations">
                                <div class="bg-white dark__bg-1000 rounded-3 py-2"><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="documentation/getting-started.html">Getting started</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="documentation/customization/configuration.html">Configuration</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="documentation/customization/styling.html">Styling<span
                                            class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="documentation/customization/dark-mode.html">Dark mode</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="documentation/customization/plugin.html">Plugin</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="documentation/faq.html">Faq</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="documentation/gulp.html">Gulp</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="documentation/design-file.html">Design file</a><a
                                        class="dropdown-item link-600 fw-medium" href="changelog.html">Changelog</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                    <li class="nav-item ps-2 pe-0">
                        <div class="dropdown theme-control-dropdown"><a
                                class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-0 pe-1 py-0"
                                href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-2"
                                    data-fa-transform="shrink-2"
                                    data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-2"
                                    data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span><span
                                    class="fas fa-adjust fs-2" data-fa-transform="shrink-2"
                                    data-theme-dropdown-toggle-icon="auto"></span></a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3"
                                aria-labelledby="themeSwitchDropdown">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2"><button
                                        class="dropdown-item d-flex align-items-center gap-2" type="button"
                                        value="light" data-theme-control="theme"><span
                                            class="fas fa-sun"></span>Light<span
                                            class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                                        class="dropdown-item d-flex align-items-center gap-2" type="button"
                                        value="dark" data-theme-control="theme"><span class="fas fa-moon"
                                            data-fa-transform=""></span>Dark<span
                                            class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                                        class="dropdown-item d-flex align-items-center gap-2" type="button"
                                        value="auto" data-theme-control="theme"><span class="fas fa-adjust"
                                            data-fa-transform=""></span>Auto<span
                                            class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-none d-sm-block">
                        <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                            href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                                data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                                class="notification-indicator-number">1</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                            id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"
                            data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                                data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                            aria-labelledby="navbarDropdownNotification">
                            <div class="card card-notification shadow-none">
                                <div class="card-header">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <h6 class="card-header-title mb-0">Notifications</h6>
                                        </div>
                                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal"
                                                href="#">Mark all as read</a></div>
                                    </div>
                                </div>
                                <div class="scrollbar-overlay" style="max-height:19rem">
                                    <div class="list-group list-group-flush fw-normal fs--1">
                                        <div class="list-group-title border-bottom">NEW</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread"
                                                href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <img class="rounded-circle"
                                                            src="assets/img/team/1-thumb.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Emma Watson</strong> replied to your
                                                        comment : "Hello world 😍"</p>
                                                    <span class="notification-time"><span class="me-2" role="img"
                                                            aria-label="Emoji">💬</span>Just now</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread"
                                                href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <div class="avatar-name rounded-circle"><span>AB</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                                        <strong>Mia Khalifa's</strong> status</p>
                                                    <span class="notification-time"><span
                                                            class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-title border-bottom">EARLIER</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <img class="rounded-circle"
                                                            src="assets/img/icons/weather-sm.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1">The forecast today shows a low of 20&#8451; in
                                                        California. See today's weather.</p>
                                                    <span class="notification-time"><span class="me-2" role="img"
                                                            aria-label="Emoji">🌤️</span>1d</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="border-bottom-0 notification-unread  notification notification-flush"
                                                href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-xl me-3">
                                                        <img class="rounded-circle"
                                                            src="assets/img/logos/oxford.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>University of Oxford</strong> created an
                                                        event : "Causal Inference Hilary 2019"</p>
                                                    <span class="notification-time"><span class="me-2" role="img"
                                                            aria-label="Emoji">✌️</span>1w</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="border-bottom-0 notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-xl me-3">
                                                        <img class="rounded-circle" src="assets/img/team/10.jpg"
                                                            alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>James Cameron</strong> invited to join
                                                        the group: United Nations International Children's Fund</p>
                                                    <span class="notification-time"><span class="me-2" role="img"
                                                            aria-label="Emoji">🙋‍</span>2d</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center border-top"><a class="card-link d-block"
                                        href="app/social/notifications.html">View all</a></div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown px-1">
                        <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
                            data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="43" viewBox="0 0 16 16" fill="none">
                                <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                                <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                                <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                                <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                                <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                                <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                                <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                                <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                                <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                            </svg></a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
                            aria-labelledby="navbarDropdownMenu">
                            <div class="card shadow-none">
                                <div class="scrollbar-overlay nine-dots-dropdown">
                                    <div class="card-body px-3">
                                        <div class="row text-center gx-0 gy-0">
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="pages/user/profile.html" target="_blank">
                                                    <div class="avatar avatar-2xl"> <img class="rounded-circle"
                                                            src="assets/img/team/3.jpg" alt="" /></div>
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2">Account
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="https://themewagon.com/" target="_blank"><img
                                                        class="rounded" src="assets/img/nav-icons/themewagon.png"
                                                        alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Themewagon</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="https://mailbluster.com/" target="_blank"><img
                                                        class="rounded" src="assets/img/nav-icons/mailbluster.png"
                                                        alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Mailbluster</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/google.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Google</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/spotify.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Spotify</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/steam.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Steam</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/github-light.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Github</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/discord.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Discord</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/xbox.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">xbox
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/trello.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Kanban</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/hp.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Hp
                                                    </p>
                                                </a></div>
                                            <div class="col-12">
                                                <hr class="my-3 mx-n3 bg-200" />
                                            </div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/linkedin.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Linkedin</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/twitter.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Twitter</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/facebook.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Facebook</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/instagram.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Instagram</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/pinterest.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Pinterest</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/slack.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Slack</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="assets/img/nav-icons/deviantart.png" alt="" width="40"
                                                        height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Deviantart</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="app/events/event-detail.html" target="_blank">
                                                    <div class="avatar avatar-2xl">
                                                        <div
                                                            class="avatar-name rounded-circle bg-primary-subtle text-primary">
                                                            <span class="fs-2">E</span></div>
                                                    </div>
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2">Events
                                                    </p>
                                                </a></div>
                                            <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4"
                                                    href="#!">Show more</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                            aria-labelledby="navbarDropdownUser">
                            <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                <a class="dropdown-item fw-bold text-warning" href="#!"><span
                                        class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#!">Set status</a>
                                <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
                                <a class="dropdown-item" href="#!">Feedback</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                                <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <script>
                var navbarPosition = localStorage.getItem('navbarPosition');
        var navbarVertical = document.querySelector('.navbar-vertical');
        var navbarTopVertical = document.querySelector('.content .navbar-top');
        var navbarTop = document.querySelector('[data-layout] .navbar-top:not([data-double-top-nav');
        var navbarDoubleTop = document.querySelector('[data-double-top-nav]');
        var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');

        if (localStorage.getItem('navbarPosition') === 'double-top') {
          document.documentElement.classList.toggle('double-top-nav-layout');
        }

        if (navbarPosition === 'top') {
          navbarTop.removeAttribute('style');
          navbarTopVertical.remove(navbarTopVertical);
          navbarVertical.remove(navbarVertical);
          navbarTopCombo.remove(navbarTopCombo);
          navbarDoubleTop.remove(navbarDoubleTop);
        } else if (navbarPosition === 'combo') {
          navbarVertical.removeAttribute('style');
          navbarTopCombo.removeAttribute('style');
          navbarTop.remove(navbarTop);
          navbarTopVertical.remove(navbarTopVertical);
          navbarDoubleTop.remove(navbarDoubleTop);
        } else if (navbarPosition === 'double-top') {
          navbarDoubleTop.removeAttribute('style');
          navbarTopVertical.remove(navbarTopVertical);
          navbarVertical.remove(navbarVertical);
          navbarTop.remove(navbarTop);
          navbarTopCombo.remove(navbarTopCombo);
        } else {
          navbarVertical.removeAttribute('style');
          navbarTopVertical.removeAttribute('style');
          navbarTop.remove(navbarTop);
          navbarDoubleTop.remove(navbarDoubleTop);
          navbarTopCombo.remove(navbarTopCombo);
        }
            </script>
            <div class="row g-3 mb-3">
                <div class="col-md-6 col-xxl-3">
                    <div class="card h-md-100 ecommerce-card-min-width">
                        <div class="card-header pb-0">
                            <h6 class="mb-0 mt-2 d-flex align-items-center">Weekly Sales<span class="ms-1 text-400"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Calculated according to last week's sales"><span
                                        class="far fa-question-circle" data-fa-transform="shrink-1"></span></span>
                            </h6>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-end">
                            <div class="row">
                                <div class="col">
                                    <p class="font-sans-serif lh-1 mb-1 fs-4">$47K</p><span
                                        class="badge badge-subtle-success rounded-pill fs--2">+3.5%</span>
                                </div>
                                <div class="col-auto ps-0">
                                    <div class="echart-bar-weekly-sales h-100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="card h-md-100">
                        <div class="card-header pb-0">
                            <h6 class="mb-0 mt-2">Total Order</h6>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-end">
                            <div class="row justify-content-between">
                                <div class="col-auto align-self-end">
                                    <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1">58.4K</div><span
                                        class="badge rounded-pill fs--2 bg-200 text-primary"><span
                                            class="fas fa-caret-up me-1"></span>13.6%</span>
                                </div>
                                <div class="col-auto ps-0 mt-n4">
                                    <div class="echart-default-total-order"
                                        data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["Week 4","Week 5","Week 6","Week 7"]},"series":[{"type":"line","data":[20,40,100,120],"smooth":true,"lineStyle":{"width":3}}],"grid":{"bottom":"2%","top":"2%","right":"10px","left":"10px"}}'
                                        data-echart-responsive="true"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="card h-md-100">
                        <div class="card-body">
                            <div class="row h-100 justify-content-between g-0">
                                <div class="col-5 col-sm-6 col-xxl pe-2">
                                    <h6 class="mt-1">Market Share</h6>
                                    <div class="fs--2 mt-3">
                                        <div class="d-flex flex-between-center mb-1">
                                            <div class="d-flex align-items-center"><span
                                                    class="dot bg-primary"></span><span
                                                    class="fw-semi-bold">Samsung</span></div>
                                            <div class="d-xxl-none">33%</div>
                                        </div>
                                        <div class="d-flex flex-between-center mb-1">
                                            <div class="d-flex align-items-center"><span
                                                    class="dot bg-info"></span><span
                                                    class="fw-semi-bold">Huawei</span></div>
                                            <div class="d-xxl-none">29%</div>
                                        </div>
                                        <div class="d-flex flex-between-center mb-1">
                                            <div class="d-flex align-items-center"><span
                                                    class="dot bg-300"></span><span
                                                    class="fw-semi-bold">Apple</span></div>
                                            <div class="d-xxl-none">20%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto position-relative">
                                    <div class="echart-market-share"></div>
                                    <div class="position-absolute top-50 start-50 translate-middle text-1100 fs-2">
                                        26M</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="card h-md-100">
                        <div class="card-header d-flex flex-between-center pb-0">
                            <h6 class="mb-0">Weather</h6>
                            <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                    class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                                    type="button" id="dropdown-weather-update" data-bs-toggle="dropdown"
                                    data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-2"
                                    aria-labelledby="dropdown-weather-update"><a class="dropdown-item"
                                        href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                        href="#!">Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <div class="row g-0 h-100 align-items-center">
                                <div class="col">
                                    <div class="d-flex align-items-center"><img class="me-3"
                                            src="assets/img/icons/weather-icon.png" alt="" height="60" />
                                        <div>
                                            <h6 class="mb-2">New York City</h6>
                                            <div class="fs--2 fw-semi-bold">
                                                <div class="text-warning">Sunny</div>Precipitation: 50%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto text-center ps-2">
                                    <div class="fs-4 fw-normal font-sans-serif text-primary mb-1 lh-1">31&deg;</div>
                                    <div class="fs--1 text-800">32&deg; / 25&deg;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 pe-lg-2 mb-3">
                    <div class="card h-lg-100 overflow-hidden">
                        <div class="card-header bg-body-tertiary">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="mb-0">Running Projects</h6>
                                </div>
                                <div class="col-auto text-center pe-x1"><select class="form-select form-select-sm">
                                        <option>Working Time</option>
                                        <option>Estimated Time</option>
                                        <option>Billable Time</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                                <div class="col ps-x1 py-1 position-static">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-name rounded-circle bg-primary-subtle text-dark">
                                                <span class="fs-0 text-primary">F</span></div>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 d-flex align-items-center"><a
                                                    class="text-800 stretched-link" href="#!">Falcon</a><span
                                                    class="badge rounded-pill ms-2 bg-200 text-primary">38%</span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col py-1">
                                    <div class="row flex-end-center g-0">
                                        <div class="col-auto pe-2">
                                            <div class="fs--1 fw-semi-bold">12:50:00</div>
                                        </div>
                                        <div class="col-5 pe-x1 ps-2">
                                            <div class="progress bg-200 me-2" style="height: 5px;"
                                                role="progressbar" aria-valuenow="38" aria-valuemin="0"
                                                aria-valuemax="100">
                                                <div class="progress-bar rounded-pill" style="width: 38%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                                <div class="col ps-x1 py-1 position-static">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-name rounded-circle bg-success-subtle text-dark">
                                                <span class="fs-0 text-success">R</span></div>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 d-flex align-items-center"><a
                                                    class="text-800 stretched-link" href="#!">Reign</a><span
                                                    class="badge rounded-pill ms-2 bg-200 text-primary">79%</span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col py-1">
                                    <div class="row flex-end-center g-0">
                                        <div class="col-auto pe-2">
                                            <div class="fs--1 fw-semi-bold">25:20:00</div>
                                        </div>
                                        <div class="col-5 pe-x1 ps-2">
                                            <div class="progress bg-200 me-2" style="height: 5px;"
                                                role="progressbar" aria-valuenow="79" aria-valuemin="0"
                                                aria-valuemax="100">
                                                <div class="progress-bar rounded-pill" style="width: 79%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                                <div class="col ps-x1 py-1 position-static">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-name rounded-circle bg-info-subtle text-dark"><span
                                                    class="fs-0 text-info">B</span></div>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 d-flex align-items-center"><a
                                                    class="text-800 stretched-link" href="#!">Boots4</a><span
                                                    class="badge rounded-pill ms-2 bg-200 text-primary">90%</span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col py-1">
                                    <div class="row flex-end-center g-0">
                                        <div class="col-auto pe-2">
                                            <div class="fs--1 fw-semi-bold">58:20:00</div>
                                        </div>
                                        <div class="col-5 pe-x1 ps-2">
                                            <div class="progress bg-200 me-2" style="height: 5px;"
                                                role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                                aria-valuemax="100">
                                                <div class="progress-bar rounded-pill" style="width: 90%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                                <div class="col ps-x1 py-1 position-static">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-name rounded-circle bg-warning-subtle text-dark">
                                                <span class="fs-0 text-warning">R</span></div>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 d-flex align-items-center"><a
                                                    class="text-800 stretched-link" href="#!">Raven</a><span
                                                    class="badge rounded-pill ms-2 bg-200 text-primary">40%</span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col py-1">
                                    <div class="row flex-end-center g-0">
                                        <div class="col-auto pe-2">
                                            <div class="fs--1 fw-semi-bold">21:20:00</div>
                                        </div>
                                        <div class="col-5 pe-x1 ps-2">
                                            <div class="progress bg-200 me-2" style="height: 5px;"
                                                role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                aria-valuemax="100">
                                                <div class="progress-bar rounded-pill" style="width: 40%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center py-2 position-relative">
                                <div class="col ps-x1 py-1 position-static">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl me-3">
                                            <div class="avatar-name rounded-circle bg-danger-subtle text-dark"><span
                                                    class="fs-0 text-danger">S</span></div>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 d-flex align-items-center"><a
                                                    class="text-800 stretched-link" href="#!">Slick</a><span
                                                    class="badge rounded-pill ms-2 bg-200 text-primary">70%</span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col py-1">
                                    <div class="row flex-end-center g-0">
                                        <div class="col-auto pe-2">
                                            <div class="fs--1 fw-semi-bold">31:20:00</div>
                                        </div>
                                        <div class="col-5 pe-x1 ps-2">
                                            <div class="progress bg-200 me-2" style="height: 5px;"
                                                role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                aria-valuemax="100">
                                                <div class="progress-bar rounded-pill" style="width: 70%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-body-tertiary p-0"><a
                                class="btn btn-sm btn-link d-block w-100 py-2" href="#!">Show all projects<span
                                    class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-2 mb-3">
                    <div class="card h-lg-100">
                        <div class="card-header">
                            <div class="row flex-between-center">
                                <div class="col-auto">
                                    <h6 class="mb-0">Total Sales</h6>
                                </div>
                                <div class="col-auto d-flex"><select
                                        class="form-select form-select-sm select-month me-2">
                                        <option value="0">January</option>
                                        <option value="1">February</option>
                                        <option value="2">March</option>
                                        <option value="3">April</option>
                                        <option value="4">May</option>
                                        <option value="5">Jun</option>
                                        <option value="6">July</option>
                                        <option value="7">August</option>
                                        <option value="8">September</option>
                                        <option value="9">October</option>
                                        <option value="10">November</option>
                                        <option value="11">December</option>
                                    </select>
                                    <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                            class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                                            type="button" id="dropdown-total-sales" data-bs-toggle="dropdown"
                                            data-boundary="viewport" aria-haspopup="true"
                                            aria-expanded="false"><span
                                                class="fas fa-ellipsis-h fs--2"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2"
                                            aria-labelledby="dropdown-total-sales"><a class="dropdown-item"
                                                href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                                href="#!">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body h-100 pe-0">
                            <!-- Find the JS file for the following chart at: src\js\charts\echarts\total-sales.js-->
                            <!-- If you are not using gulp based workflow, you can find the transpiled code at: public\assets\js\theme.js-->
                            <div class="echart-line-total-sales h-100" data-echart-responsive="true"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 col-xl-7 col-xxl-8 mb-3 pe-lg-2 mb-3">
                    <div class="card h-lg-100">
                        <div class="card-body d-flex align-items-center">
                            <div class="w-100">
                                <h6 class="mb-3 text-800">Using Storage <strong class="text-1100">1775.06 MB
                                    </strong>of 2 GB</h6>
                                <div class="progress-stacked mb-3 rounded-3" style="height: 10px;">
                                    <div class="progress" style="width: 43.72%;" role="progressbar"
                                        aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                                        <div
                                            class="progress-bar bg-progress-gradient border-end border-100 border-2">
                                        </div>
                                    </div>
                                    <div class="progress" style="width: 18.76%;" role="progressbar"
                                        aria-valuenow="18.76" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info border-end border-100 border-2"></div>
                                    </div>
                                    <div class="progress" style="width: 9.38%;" role="progressbar"
                                        aria-valuenow="9.38" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success border-end border-100 border-2"></div>
                                    </div>
                                    <div class="progress" style="width: 28.14%;" role="progressbar"
                                        aria-valuenow="28.14" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-200"></div>
                                    </div>
                                </div>
                                <div class="row fs--1 fw-semi-bold text-500 g-0">
                                    <div class="col-auto d-flex align-items-center pe-3"><span
                                            class="dot bg-primary"></span><span>Regular</span><span
                                            class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(895MB)</span>
                                    </div>
                                    <div class="col-auto d-flex align-items-center pe-3"><span
                                            class="dot bg-info"></span><span>System</span><span
                                            class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(379MB)</span>
                                    </div>
                                    <div class="col-auto d-flex align-items-center pe-3"><span
                                            class="dot bg-success"></span><span>Shared</span><span
                                            class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(192MB)</span>
                                    </div>
                                    <div class="col-auto d-flex align-items-center"><span
                                            class="dot bg-200"></span><span>Free</span><span
                                            class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(576MB)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 col-xxl-4 mb-3 ps-lg-2">
                    <div class="card h-lg-100">
                        <div class="bg-holder bg-card"
                            style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);"></div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                            <h5 class="text-warning">Running out of your space?</h5>
                            <p class="fs--1 mb-0">Your storage will be running out soon. Get more space and powerful
                                productivity features.</p><a class="btn btn-link fs--1 text-warning mt-lg-3 ps-0"
                                href="#!">Upgrade storage<span class="fas fa-chevron-right ms-1"
                                    data-fa-transform="shrink-4 down-1"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-7 col-xl-8 pe-lg-2 mb-3">
                    <div class="card h-lg-100 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="table-responsive scrollbar">
                                <table class="table table-dashboard mb-0 table-borderless fs--1 border-200">
                                    <thead class="bg-body-tertiary">
                                        <tr>
                                            <th class="text-900">Best Selling Products</th>
                                            <th class="text-900 text-end">Revenue ($3333)</th>
                                            <th class="text-900 pe-x1 text-end" style="width: 8rem">Revenue (%)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-bottom border-200">
                                            <td>
                                                <div class="d-flex align-items-center position-relative"><img
                                                        class="rounded-1 border border-200"
                                                        src="assets/img/products/12.png" width="60" alt="" />
                                                    <div class="flex-1 ms-3">
                                                        <h6 class="mb-1 fw-semi-bold"><a
                                                                class="text-1100 stretched-link" href="#!">Raven
                                                                Pro</a></h6>
                                                        <p class="fw-semi-bold mb-0 text-500">Landing</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-end fw-semi-bold">$1311</td>
                                            <td class="align-middle pe-x1">
                                                <div class="d-flex align-items-center">
                                                    <div class="progress me-3 rounded-3 bg-200"
                                                        style="height: 5px; width:80px;" role="progressbar"
                                                        aria-valuenow="39" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar rounded-pill" style="width: 39%;">
                                                        </div>
                                                    </div>
                                                    <div class="fw-semi-bold ms-2">39%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom border-200">
                                            <td>
                                                <div class="d-flex align-items-center position-relative"><img
                                                        class="rounded-1 border border-200"
                                                        src="assets/img/products/10.png" width="60" alt="" />
                                                    <div class="flex-1 ms-3">
                                                        <h6 class="mb-1 fw-semi-bold"><a
                                                                class="text-1100 stretched-link"
                                                                href="#!">Boots4</a></h6>
                                                        <p class="fw-semi-bold mb-0 text-500">Portfolio</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-end fw-semi-bold">$860</td>
                                            <td class="align-middle pe-x1">
                                                <div class="d-flex align-items-center">
                                                    <div class="progress me-3 rounded-3 bg-200"
                                                        style="height: 5px; width:80px;" role="progressbar"
                                                        aria-valuenow="26" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar rounded-pill" style="width: 26%;">
                                                        </div>
                                                    </div>
                                                    <div class="fw-semi-bold ms-2">26%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom border-200">
                                            <td>
                                                <div class="d-flex align-items-center position-relative"><img
                                                        class="rounded-1 border border-200"
                                                        src="assets/img/products/11.png" width="60" alt="" />
                                                    <div class="flex-1 ms-3">
                                                        <h6 class="mb-1 fw-semi-bold"><a
                                                                class="text-1100 stretched-link"
                                                                href="#!">Falcon</a></h6>
                                                        <p class="fw-semi-bold mb-0 text-500">Admin</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-end fw-semi-bold">$539</td>
                                            <td class="align-middle pe-x1">
                                                <div class="d-flex align-items-center">
                                                    <div class="progress me-3 rounded-3 bg-200"
                                                        style="height: 5px; width:80px;" role="progressbar"
                                                        aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar rounded-pill" style="width: 16%;">
                                                        </div>
                                                    </div>
                                                    <div class="fw-semi-bold ms-2">16%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom border-200">
                                            <td>
                                                <div class="d-flex align-items-center position-relative"><img
                                                        class="rounded-1 border border-200"
                                                        src="assets/img/products/14.png" width="60" alt="" />
                                                    <div class="flex-1 ms-3">
                                                        <h6 class="mb-1 fw-semi-bold"><a
                                                                class="text-1100 stretched-link" href="#!">Slick</a>
                                                        </h6>
                                                        <p class="fw-semi-bold mb-0 text-500">Builder</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-end fw-semi-bold">$343</td>
                                            <td class="align-middle pe-x1">
                                                <div class="d-flex align-items-center">
                                                    <div class="progress me-3 rounded-3 bg-200"
                                                        style="height: 5px; width:80px;" role="progressbar"
                                                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar rounded-pill" style="width: 10%;">
                                                        </div>
                                                    </div>
                                                    <div class="fw-semi-bold ms-2">10%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center position-relative"><img
                                                        class="rounded-1 border border-200"
                                                        src="assets/img/products/13.png" width="60" alt="" />
                                                    <div class="flex-1 ms-3">
                                                        <h6 class="mb-1 fw-semi-bold"><a
                                                                class="text-1100 stretched-link" href="#!">Reign
                                                                Pro</a></h6>
                                                        <p class="fw-semi-bold mb-0 text-500">Agency</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-end fw-semi-bold">$280</td>
                                            <td class="align-middle pe-x1">
                                                <div class="d-flex align-items-center">
                                                    <div class="progress me-3 rounded-3 bg-200"
                                                        style="height: 5px; width:80px;" role="progressbar"
                                                        aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar rounded-pill" style="width: 8%;">
                                                        </div>
                                                    </div>
                                                    <div class="fw-semi-bold ms-2">8%</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer bg-body-tertiary py-2">
                            <div class="row flex-between-center">
                                <div class="col-auto"><select class="form-select form-select-sm">
                                        <option>Last 7 days</option>
                                        <option>Last Month</option>
                                        <option>Last Year</option>
                                    </select></div>
                                <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="#!">View
                                        All</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 ps-lg-2 mb-3">
                    <div class="card h-100">
                        <div class="card-header d-flex flex-between-center bg-body-tertiary py-2">
                            <h6 class="mb-0">Shared Files</h6><a class="py-1 fs--1 font-sans-serif" href="#!">View
                                All</a>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                                <div class="file-thumbnail"><img
                                        class="border h-100 w-100 object-fit-cover rounded-2"
                                        src="assets/img/products/5-thumb.png" alt="" /></div>
                                <div class="ms-3 flex-shrink-1 flex-grow-1">
                                    <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold"
                                            href="#!">apple-smart-watch.png</a></h6>
                                    <div class="fs--1"><span class="fw-semi-bold">Antony</span><span
                                            class="fw-medium text-600 ms-2">Just Now</span></div>
                                    <div class="hover-actions end-0 top-50 translate-middle-y"><a
                                            class="btn btn-tertiary border-300 btn-sm me-1 text-600"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Download"
                                            href="assets/img/icons/cloud-download.svg" download="download"><img
                                                src="assets/img/icons/cloud-download.svg" alt=""
                                                width="15" /></a><button
                                            class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none"
                                            type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Edit"><img src="assets/img/icons/edit-alt.svg" alt=""
                                                width="15" /></button></div>
                                </div>
                            </div>
                            <hr class="text-200" />
                            <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                                <div class="file-thumbnail"><img
                                        class="border h-100 w-100 object-fit-cover rounded-2"
                                        src="assets/img/products/3-thumb.png" alt="" /></div>
                                <div class="ms-3 flex-shrink-1 flex-grow-1">
                                    <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold"
                                            href="#!">iphone.jpg</a></h6>
                                    <div class="fs--1"><span class="fw-semi-bold">Antony</span><span
                                            class="fw-medium text-600 ms-2">Yesterday at 1:30 PM</span></div>
                                    <div class="hover-actions end-0 top-50 translate-middle-y"><a
                                            class="btn btn-tertiary border-300 btn-sm me-1 text-600"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Download"
                                            href="assets/img/icons/cloud-download.svg" download="download"><img
                                                src="assets/img/icons/cloud-download.svg" alt=""
                                                width="15" /></a><button
                                            class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none"
                                            type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Edit"><img src="assets/img/icons/edit-alt.svg" alt=""
                                                width="15" /></button></div>
                                </div>
                            </div>
                            <hr class="text-200" />
                            <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                                <div class="file-thumbnail"><img class="img-fluid" src="assets/img/icons/zip.png"
                                        alt="" /></div>
                                <div class="ms-3 flex-shrink-1 flex-grow-1">
                                    <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold"
                                            href="#!">Falcon v1.8.2</a></h6>
                                    <div class="fs--1"><span class="fw-semi-bold">Jane</span><span
                                            class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></div>
                                    <div class="hover-actions end-0 top-50 translate-middle-y"><a
                                            class="btn btn-tertiary border-300 btn-sm me-1 text-600"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Download"
                                            href="assets/img/icons/cloud-download.svg" download="download"><img
                                                src="assets/img/icons/cloud-download.svg" alt=""
                                                width="15" /></a><button
                                            class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none"
                                            type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Edit"><img src="assets/img/icons/edit-alt.svg" alt=""
                                                width="15" /></button></div>
                                </div>
                            </div>
                            <hr class="text-200" />
                            <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                                <div class="file-thumbnail"><img
                                        class="border h-100 w-100 object-fit-cover rounded-2"
                                        src="assets/img/products/2-thumb.png" alt="" /></div>
                                <div class="ms-3 flex-shrink-1 flex-grow-1">
                                    <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold"
                                            href="#!">iMac.jpg</a></h6>
                                    <div class="fs--1"><span class="fw-semi-bold">Rowen</span><span
                                            class="fw-medium text-600 ms-2">23 Sep at 6:10 PM</span></div>
                                    <div class="hover-actions end-0 top-50 translate-middle-y"><a
                                            class="btn btn-tertiary border-300 btn-sm me-1 text-600"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Download"
                                            href="assets/img/icons/cloud-download.svg" download="download"><img
                                                src="assets/img/icons/cloud-download.svg" alt=""
                                                width="15" /></a><button
                                            class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none"
                                            type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Edit"><img src="assets/img/icons/edit-alt.svg" alt=""
                                                width="15" /></button></div>
                                </div>
                            </div>
                            <hr class="text-200" />
                            <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                                <div class="file-thumbnail"><img class="img-fluid" src="assets/img/icons/docs.png"
                                        alt="" /></div>
                                <div class="ms-3 flex-shrink-1 flex-grow-1">
                                    <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold"
                                            href="#!">functions.php</a></h6>
                                    <div class="fs--1"><span class="fw-semi-bold">John</span><span
                                            class="fw-medium text-600 ms-2">1 Oct at 4:30 PM</span></div>
                                    <div class="hover-actions end-0 top-50 translate-middle-y"><a
                                            class="btn btn-tertiary border-300 btn-sm me-1 text-600"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Download"
                                            href="assets/img/icons/cloud-download.svg" download="download"><img
                                                src="assets/img/icons/cloud-download.svg" alt=""
                                                width="15" /></a><button
                                            class="btn btn-tertiary border-300 btn-sm me-1 text-600 shadow-none"
                                            type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Edit"><img src="assets/img/icons/edit-alt.svg" alt=""
                                                width="15" /></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-6 col-xxl-3 pe-md-2 mb-3 mb-xxl-0">
                    <div class="card">
                        <div class="card-header d-flex flex-between-center bg-body-tertiary py-2">
                            <h6 class="mb-0">Active Users</h6>
                            <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                    class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                                    type="button" id="dropdown-active-user" data-bs-toggle="dropdown"
                                    data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-2"
                                    aria-labelledby="dropdown-active-user"><a class="dropdown-item"
                                        href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                        href="#!">Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body py-2">
                            <div class="d-flex align-items-center position-relative mb-3">
                                <div class="avatar avatar-2xl status-online">
                                    <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />
                                </div>
                                <div class="flex-1 ms-3">
                                    <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                            href="pages/user/profile.html">Emma Watson</a></h6>
                                    <p class="text-500 fs--2 mb-0">Admin</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-relative mb-3">
                                <div class="avatar avatar-2xl status-online">
                                    <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />
                                </div>
                                <div class="flex-1 ms-3">
                                    <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                            href="pages/user/profile.html">Antony Hopkins</a></h6>
                                    <p class="text-500 fs--2 mb-0">Moderator</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-relative mb-3">
                                <div class="avatar avatar-2xl status-away">
                                    <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />
                                </div>
                                <div class="flex-1 ms-3">
                                    <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                            href="pages/user/profile.html">Anna Karinina</a></h6>
                                    <p class="text-500 fs--2 mb-0">Editor</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-relative mb-3">
                                <div class="avatar avatar-2xl status-offline">
                                    <img class="rounded-circle" src="assets/img/team/4.jpg" alt="" />
                                </div>
                                <div class="flex-1 ms-3">
                                    <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                            href="pages/user/profile.html">John Lee</a></h6>
                                    <p class="text-500 fs--2 mb-0">Admin</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center position-relative false">
                                <div class="avatar avatar-2xl status-offline">
                                    <img class="rounded-circle" src="assets/img/team/5.jpg" alt="" />
                                </div>
                                <div class="flex-1 ms-3">
                                    <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                            href="pages/user/profile.html">Rowen Atkinson</a></h6>
                                    <p class="text-500 fs--2 mb-0">Editor</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-body-tertiary p-0"><a
                                class="btn btn-sm btn-link d-block w-100 py-2" href="app/social/followers.html">All
                                active users<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3 ps-md-2 order-xxl-1 mb-3 mb-xxl-0">
                    <div class="card h-100">
                        <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">
                            <h6 class="mb-0">Bandwidth Saved</h6>
                            <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                    class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                                    type="button" id="dropdown-bandwidth-saved" data-bs-toggle="dropdown"
                                    data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-2"
                                    aria-labelledby="dropdown-bandwidth-saved"><a class="dropdown-item"
                                        href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                        href="#!">Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-center flex-column">
                            <!-- Find the JS file for the following chart at: src/js/charts/echarts/bandwidth-saved.js-->
                            <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                            <div class="echart-bandwidth-saved" data-echart-responsive="true"></div>
                            <div class="text-center mt-3">
                                <h6 class="fs-0 mb-1"><span class="fas fa-check text-success me-1"
                                        data-fa-transform="shrink-2"></span>35.75 GB saved</h6>
                                <p class="fs--1 mb-0">38.44 GB total bandwidth</p>
                            </div>
                        </div>
                        <div class="card-footer bg-body-tertiary py-2">
                            <div class="row flex-between-center">
                                <div class="col-auto"><select class="form-select form-select-sm">
                                        <option>Last 6 Months</option>
                                        <option>Last Year</option>
                                        <option>Last 2 Year</option>
                                    </select></div>
                                <div class="col-auto"><a class="fs--1 font-sans-serif" href="#!">Help</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 px-xxl-2">
                    <div class="card h-100">
                        <div class="card-header bg-body-tertiary py-2">
                            <div class="row flex-between-center">
                                <div class="col-auto">
                                    <h6 class="mb-0">Top Products</h6>
                                </div>
                                <div class="col-auto d-flex"><a class="btn btn-link btn-sm me-2" href="#!">View
                                        Details</a>
                                    <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                            class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                                            type="button" id="dropdown-top-products" data-bs-toggle="dropdown"
                                            data-boundary="viewport" aria-haspopup="true"
                                            aria-expanded="false"><span
                                                class="fas fa-ellipsis-h fs--2"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2"
                                            aria-labelledby="dropdown-top-products"><a class="dropdown-item"
                                                href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                                href="#!">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body h-100">
                            <!-- Find the JS file for the following chart at: src/js/charts/echarts/top-products.js-->
                            <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                            <div class="echart-bar-top-products h-100" data-echart-responsive="true"></div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-600">Thank you for creating with Falcon <span
                                class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2023 &copy; <a
                                href="https://themewagon.com/">Themewagon</a></p>
                    </div>
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-600">v3.18.0</p>
                    </div>
                </div>
            </footer>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog"
            aria-labelledby="authentication-modal-label" aria-hidden="true">
            <div class="modal-dialog mt-6" role="document">
                <div class="modal-content border-0">
                    <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                        <div class="position-relative z-1">
                            <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                            <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                        </div><button class="btn-close position-absolute top-0 end-0 mt-2 me-2"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-4 px-5">
                        <form>
                            <div class="mb-3"><label class="form-label" for="modal-auth-name">Name</label><input
                                    class="form-control" type="text" autocomplete="on" id="modal-auth-name" /></div>
                            <div class="mb-3"><label class="form-label" for="modal-auth-email">Email
                                    address</label><input class="form-control" type="email" autocomplete="on"
                                    id="modal-auth-email" /></div>
                            <div class="row gx-2">
                                <div class="mb-3 col-sm-6"><label class="form-label"
                                        for="modal-auth-password">Password</label><input class="form-control"
                                        type="password" autocomplete="on" id="modal-auth-password" /></div>
                                <div class="mb-3 col-sm-6"><label class="form-label"
                                        for="modal-auth-confirm-password">Confirm Password</label><input
                                        class="form-control" type="password" autocomplete="on"
                                        id="modal-auth-confirm-password" /></div>
                            </div>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="modal-auth-register-checkbox" /><label class="form-label"
                                    for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a
                                        class="white-space-nowrap" href="#!">privacy policy</a></label></div>
                            <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                    name="submit">Register</button></div>
                        </form>
                        <div class="position-relative mt-5">
                            <hr />
                            <div class="divider-content-center">or register with</div>
                        </div>
                        <div class="row g-2 mt-2">
                            <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100"
                                    href="#"><span class="fab fa-google-plus-g me-2"
                                        data-fa-transform="grow-8"></span> google</a></div>
                            <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100"
                                    href="#"><span class="fab fa-facebook-square me-2"
                                        data-fa-transform="grow-8"></span> facebook</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection