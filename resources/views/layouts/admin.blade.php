<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/skin-modes.css') }}" rel="stylesheet" />
    <link href="http://ksylvest.github.io/jquery-growl/stylesheets/jquery.growl.css" rel="stylesheet" />


    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('admin/assets/colors/color1.css') }}" />

    <!-- Scripts -->
    @livewireStyles
    @powerGridStyles

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('admin/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="sticky app-header header">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                            href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.html">
                            <img src="{{ asset('admin/assets/images/brand/logo.png') }}"
                                class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('admin/assets/images/brand/logo-3.png') }}"
                                class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="main-header-center ms-3 d-none d-lg-block">
                            <input type="text" class="form-control" id="typehead"
                                placeholder="Search for results...">
                            <button class="px-0 pt-2 btn"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </div>
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="p-0 navbar navbar-collapse responsive-navbar">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon"
                                                data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="p-2 input-group w-100">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex country">
                                            <a class="text-center nav-link icon" data-bs-target="#country-selector"
                                                data-bs-toggle="modal">
                                                <i class="fe fe-globe"></i><span
                                                    class="fs-16 ms-2 d-none d-xl-block">English</span>
                                            </a>
                                        </div>
                                        <!-- COUNTRY -->
                                        <div class="d-flex country">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        <!-- Theme-Layout -->
                                        <div class="dropdown d-flex shopping-cart">
                                            <a class="text-center nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fe fe-shopping-cart"></i><span
                                                    class="badge bg-secondary header-badge">4</span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark"> My Shopping
                                                            Cart</h6>
                                                        <div class="ms-auto">
                                                            <span
                                                                class="badge bg-danger-transparent header-badge text-danger fs-14">Hurry
                                                                Up!</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="header-dropdown-list message-menu">
                                                    <div class="p-4 dropdown-item d-flex">
                                                        <a href="cart.html" class="open-file"></a>
                                                        <span
                                                            class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('admin/assets/images/pngs/4.jpg') }}"></span>
                                                        <div class="wd-50p">
                                                            <h5 class="mb-1">Flower Pot for Home Decor</h5>
                                                            <span>Status: <span class="text-success">In
                                                                    Stock</span></span>
                                                            <p class="mb-0 fs-13 text-muted">Quantity: 01</p>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex fs-16">
                                                            <span class="px-4 fs-16 text-dark d-none d-sm-block">
                                                                $438
                                                            </span>
                                                            <a href="javascript:void(0)"
                                                                class="p-0 fs-16 btn cart-trash">
                                                                <i
                                                                    class="p-2 border fe fe-trash-2 text-danger brround d-block"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="p-4 dropdown-item d-flex">
                                                        <a href="cart.html" class="open-file"></a>
                                                        <span
                                                            class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('admin/assets/images/pngs/6.jpg') }}"></span>
                                                        <div class="wd-50p">
                                                            <h5 class="mb-1">Black Digital Camera</h5>
                                                            <span>Status: <span class="text-danger">Out
                                                                    Stock</span></span>
                                                            <p class="mb-0 fs-13 text-muted">Quantity: 06</p>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex">
                                                            <span class="px-4 fs-16 text-dark d-none d-sm-block">
                                                                $867
                                                            </span>
                                                            <a href="javascript:void(0)"
                                                                class="p-0 fs-16 btn cart-trash">
                                                                <i
                                                                    class="p-2 border fe fe-trash-2 text-danger brround d-block"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="p-4 dropdown-item d-flex">
                                                        <a href="cart.html" class="open-file"></a>
                                                        <span
                                                            class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('admin/assets/images/pngs/8.jpg') }}"></span>
                                                        <div class="wd-50p">
                                                            <h5 class="mb-1">Stylish Rockerz 255 Ear Pods</h5>
                                                            <span>Status: <span class="text-success">In
                                                                    Stock</span></span>
                                                            <p class="mb-0 fs-13 text-muted">Quantity: 05</p>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex">
                                                            <span class="px-4 fs-16 text-dark d-none d-sm-block">
                                                                $323
                                                            </span>
                                                            <a href="javascript:void(0)"
                                                                class="p-0 fs-16 btn cart-trash">
                                                                <i
                                                                    class="p-2 border fe fe-trash-2 text-danger brround d-block"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="p-4 dropdown-item d-flex">
                                                        <a href="cart.html" class="open-file"></a>
                                                        <span
                                                            class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('admin/assets/images/pngs/1.jpg') }}"></span>
                                                        <div class="wd-50p">
                                                            <h5 class="mb-1">Women Party Wear Dress</h5>
                                                            <span>Status: <span class="text-success">In
                                                                    Stock</span></span>
                                                            <p class="mb-0 fs-13 text-muted">Quantity: 05</p>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex">
                                                            <span class="px-4 fs-16 text-dark d-none d-sm-block">
                                                                $867
                                                            </span>
                                                            <a href="javascript:void(0)"
                                                                class="p-0 fs-16 btn cart-trash">
                                                                <i
                                                                    class="p-2 border fe fe-trash-2 text-danger brround d-block"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="p-4 dropdown-item d-flex">
                                                        <a href="cart.html" class="open-file"></a>
                                                        <span
                                                            class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('admin/assets/images/pngs/3.jpg') }}"></span>
                                                        <div class="wd-50p">
                                                            <h5 class="mb-1">Running Shoes for men</h5>
                                                            <span>Status: <span class="text-success">In
                                                                    Stock</span></span>
                                                            <p class="mb-0 fs-13 text-muted">Quantity: 05</p>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex">
                                                            <span class="px-4 fs-16 text-dark d-none d-sm-block">
                                                                $456
                                                            </span>
                                                            <a href="javascript:void(0)"
                                                                class="p-0 fs-16 btn cart-trash">
                                                                <i
                                                                    class="p-2 border fe fe-trash-2 text-danger brround d-block"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-0 dropdown-divider"></div>
                                                <div class="dropdown-footer">
                                                    <a class="py-2 btn btn-primary btn-pill w-sm btn-sm"
                                                        href="checkout.html"><i class="fe fe-check-circle"></i>
                                                        Checkout</a>
                                                    <span class="p-2 float-end fs-17 fw-semibold">Total: $6789</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- CART -->
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>
                                        <!-- FULL-SCREEN -->
                                        <div class="dropdown d-flex notifications">
                                            <a class="nav-link icon" data-bs-toggle="dropdown"><i
                                                    class="fe fe-bell"></i><span class=" pulse"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="notifications-menu">
                                                    <a class="dropdown-item d-flex" href="notify-list.html">
                                                        <div
                                                            class="me-3 notifyimg bg-primary brround box-shadow-primary">
                                                            <i class="fe fe-mail"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="mb-1 notification-label">New Application
                                                                received
                                                            </h5>
                                                            <span class="notification-subtext">3 days ago</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="notify-list.html">
                                                        <div
                                                            class="me-3 notifyimg bg-secondary brround box-shadow-secondary">
                                                            <i class="fe fe-check-circle"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="mb-1 notification-label">Project has been
                                                                approved</h5>
                                                            <span class="notification-subtext">2 hours ago</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="notify-list.html">
                                                        <div
                                                            class="me-3 notifyimg bg-success brround box-shadow-success">
                                                            <i class="fe fe-shopping-cart"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="mb-1 notification-label">Your Product Delivered
                                                            </h5>
                                                            <span class="notification-subtext">30 min ago</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="notify-list.html">
                                                        <div class="me-3 notifyimg bg-pink brround box-shadow-pink">
                                                            <i class="fe fe-user-plus"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="mb-1 notification-label">Friend Requests</h5>
                                                            <span class="notification-subtext">1 day ago</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="m-0 dropdown-divider"></div>
                                                <a href="notify-list.html"
                                                    class="p-3 text-center dropdown-item text-muted">View all
                                                    Notification</a>
                                            </div>
                                        </div>
                                        <!-- NOTIFICATIONS -->
                                        <div class="dropdown d-flex message">
                                            <a class="text-center nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fe fe-message-square"></i><span class="pulse-danger"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">You have 5
                                                            Messages</h6>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0)"
                                                                class="p-0 text-muted fs-12">make all unread</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="message-menu message-menu-scroll">
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('admin/assets/images/users/1.jpg') }}"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Peter Theil</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    6:45 am
                                                                </small>
                                                            </div>
                                                            <span>Commented on file Guest list....</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('admin/assets/images/users/15.jpg') }}"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Abagael Luth</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    10:35 am
                                                                </small>
                                                            </div>
                                                            <span>New Meetup Started......</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('admin/assets/images/users/12.jpg') }}"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Brizid Dawson</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    2:17 pm
                                                                </small>
                                                            </div>
                                                            <span>Brizid is in the Warehouse...</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('admin/assets/images/users/4.jpg') }}"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Shannon Shaw</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    7:55 pm
                                                                </small>
                                                            </div>
                                                            <span>New Product Realease......</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('admin/assets/images/users/3.jpg') }}"></span>
                                                        <div class="wd-90p">
                                                            <div class="d-flex">
                                                                <h5 class="mb-1">Cherry Blossom</h5>
                                                                <small class="text-muted ms-auto text-end">
                                                                    7:55 pm
                                                                </small>
                                                            </div>
                                                            <span>You have appointment on......</span>
                                                        </div>
                                                    </a>

                                                </div>
                                                <div class="m-0 dropdown-divider"></div>
                                                <a href="javascript:void(0)"
                                                    class="p-3 text-center dropdown-item text-muted">See all
                                                    Messages</a>
                                            </div>
                                        </div>
                                        <!-- MESSAGE-BOX -->
                                        <div class="dropdown d-flex header-settings">
                                            <a href="javascript:void(0);" class="nav-link icon"
                                                data-bs-toggle="sidebar-right" data-target=".sidebar-right">
                                                <i class="fe fe-align-right"></i>
                                            </a>
                                        </div>
                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                class="leading-none nav-link d-flex">
                                                <img src="{{ asset('admin/assets/images/users/21.jpg') }}"
                                                    alt="profile-user"
                                                    class="avatar profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="mb-0 text-dark fs-14 fw-semibold">Percy Kewshun</h5>
                                                        <small class="text-muted">Senior Admin</small>
                                                    </div>
                                                </div>
                                                <div class="m-0 dropdown-divider"></div>
                                                <a class="dropdown-item" href="profile.html">
                                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                                </a>
                                                <a class="dropdown-item" href="email-inbox.html">
                                                    <i class="dropdown-icon fe fe-mail"></i> Inbox
                                                    <span class="badge bg-danger rounded-pill float-end">5</span>
                                                </a>
                                                <a class="dropdown-item" href="lockscreen.html">
                                                    <i class="dropdown-icon fe fe-lock"></i> Lockscreen
                                                </a>
                                                <a class="dropdown-item" href="login.html">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.html">
                            <img src="{{ asset('admin/assets/images/brand/logo.png') }}"
                                class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('admin/assets/images/brand/logo-1.png') }}"
                                class="header-brand-img toggle-logo" alt="logo">
                            <img src="{{ asset('admin/assets/images/brand/logo-2.png') }}"
                                class="header-brand-img light-logo" alt="logo">
                            <img src="{{ asset('admin/assets/images/brand/logo-3.png') }}"
                                class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i
                                        class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>UI Kit</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-slack"></i><span
                                        class="side-menu__label">Apps</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                                    <li><a href="cards.html" class="slide-item"> Cards design</a></li>
                                    <li><a href="calendar.html" class="slide-item"> Default calendar</a></li>
                                    <li><a href="calendar2.html" class="slide-item"> Full calendar</a></li>
                                    <li><a href="chat.html" class="slide-item"> Chat</a></li>
                                    <li><a href="notify.html" class="slide-item"> Notifications</a></li>
                                    <li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
                                    <li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
                                    <li><a href="scroll.html" class="slide-item"> Content Scroll bar</a></li>
                                    <li><a href="loaders.html" class="slide-item"> Loaders</a></li>
                                    <li><a href="counters.html" class="slide-item"> Counters</a></li>
                                    <li><a href="rating.html" class="slide-item"> Rating</a></li>
                                    <li><a href="timeline.html" class="slide-item"> Timeline</a></li>
                                    <li><a href="treeview.html" class="slide-item"> Treeview</a></li>
                                    <li><a href="chart.html" class="slide-item"> Charts</a></li>
                                    <li><a href="footers.html" class="slide-item"> Footers</a></li>
                                    <li><a href="users-list.html" class="slide-item"> User List</a></li>
                                    <li><a href="search.html" class="slide-item">Search</a></li>
                                    <li><a href="crypto-currencies.html" class="slide-item"> Crypto-currencies</a>
                                    </li>
                                    <li><a href="widgets.html" class="slide-item"> Widgets</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-package"></i><span
                                        class="side-menu__label">Bootstrap</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu mega-slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Bootstrap</a></li>
                                    <div class="mega-menu">
                                        <div class="">
                                            <ul>
                                                <li><a href="alerts.html" class="slide-item"> Alerts</a></li>
                                                <li><a href="buttons.html" class="slide-item"> Buttons</a></li>
                                                <li><a href="colors.html" class="slide-item"> Colors</a></li>
                                                <li><a href="avatarsquare.html" class="slide-item"> Avatar Square</a>
                                                </li>
                                                <li><a href="avatar-radius.html" class="slide-item"> Avatar Radius</a>
                                                </li>
                                                <li><a href="avatar-round.html" class="slide-item"> Avatar Rounded</a>
                                                </li>
                                                <li><a href="dropdown.html" class="slide-item"> Dropdowns</a></li>
                                            </ul>
                                        </div>
                                        <div class="">
                                            <ul>
                                                <li><a href="listgroup.html" class="slide-item"> List Group</a></li>
                                                <li><a href="tags.html" class="slide-item"> Tags</a></li>
                                                <li><a href="pagination.html" class="slide-item"> Pagination</a></li>
                                                <li><a href="navigation.html" class="slide-item"> Navigation</a></li>
                                                <li><a href="typography.html" class="slide-item"> Typography</a></li>
                                                <li><a href="breadcrumbs.html" class="slide-item"> Breadcrumbs</a>
                                                </li>
                                                <li><a href="badge.html" class="slide-item"> Badges / Pills</a></li>
                                            </ul>
                                        </div>
                                        <div class="">
                                            <ul>
                                                <li><a href="panels.html" class="slide-item"> Panels</a></li>
                                                <li><a href="thumbnails.html" class="slide-item"> Thumbnails</a></li>
                                                <li><a href="offcanvas.html" class="slide-item"> Offcanvas</a></li>
                                                <li><a href="toast.html" class="slide-item"> toast</a></li>
                                                <li><a href="scrollspy.html" class="slide-item"> Scrollspy</a></li>
                                                <li><a href="mediaobject.html" class="slide-item"> Media Object</a>
                                                </li>
                                                <li><a href="accordion.html" class="slide-item"> Accordions </a></li>
                                            </ul>
                                        </div>
                                        <div class="">
                                            <ul>
                                                <li><a href="tabs.html" class="slide-item"> Tabs</a></li>
                                                <li><a href="modal.html" class="slide-item"> Modal</a></li>
                                                <li><a href="tooltipandpopover.html" class="slide-item"> Tooltip and
                                                        popover</a></li>
                                                <li><a href="progress.html" class="slide-item"> Progress</a></li>
                                                <li><a href="carousel.html" class="slide-item"> Carousels</a></li>
                                                <li><a href="ribbons.html" class="slide-item"> Ribbons</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li>
                                <a class="side-menu__item has-link" href="landing-page.html" target="_blank"><i
                                        class="side-menu__icon fe fe-zap"></i><span class="side-menu__label">Landing
                                        Page</span><span
                                        class="pb-1 badge bg-green br-5 side-badge blink-text">New</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>Pre-build Pages</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-layers"></i><span
                                        class="side-menu__label">Pages</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                                    <li><a href="profile.html" class="slide-item"> Profile</a></li>
                                    <li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
                                    <li><a href="notify-list.html" class="slide-item"> Notifications List</a></li>
                                    <li><a href="email-compose.html" class="slide-item"> Mail-Compose</a></li>
                                    <li><a href="email-inbox.html" class="slide-item"> Mail-Inbox</a></li>
                                    <li><a href="email-read.html" class="slide-item"> Mail-Read</a></li>
                                    <li><a href="gallery.html" class="slide-item"> Gallery</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide"
                                            href="javascript:void(0)"><span
                                                class="sub-side-menu__label">Forms</span><i
                                                class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a href="form-elements.html" class="sub-slide-item"> Form Elements</a>
                                            </li>
                                            <li><a href="form-layouts.html" class="sub-slide-item"> Form Layouts</a>
                                            </li>
                                            <li><a href="form-advanced.html" class="sub-slide-item"> Form Advanced</a>
                                            </li>
                                            <li><a href="form-editor.html" class="sub-slide-item"> Form Editor</a>
                                            </li>
                                            <li><a href="form-wizard.html" class="sub-slide-item"> Form Wizard</a>
                                            </li>
                                            <li><a href="form-validation.html" class="sub-slide-item"> Form
                                                    Validation</a></li>
                                            <li><a href="form-input-spinners.html" class="sub-slide-item"> Form Input
                                                    Spinners</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide"
                                            href="javascript:void(0)"><span
                                                class="sub-side-menu__label">Tables</span><i
                                                class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a href="tables.html" class="sub-slide-item">Default table</a></li>
                                            <li><a href="datatable.html" class="sub-slide-item"> Data Tables</a></li>
                                            <li><a href="edit-table.html" class="sub-slide-item"> Edit Tables</a></li>
                                            <li><a href="extension-tables.html" class="sub-slide-item"> Extension
                                                    Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide"
                                            href="javascript:void(0)"><span
                                                class="sub-side-menu__label">Extension</span><i
                                                class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a href="about.html" class="sub-slide-item"> About Company</a></li>
                                            <li><a href="services.html" class="sub-slide-item"> Services</a></li>
                                            <li><a href="faq.html" class="sub-slide-item"> FAQS</a></li>
                                            <li><a href="terms.html" class="sub-slide-item"> Terms</a></li>
                                            <li><a href="invoice.html" class="sub-slide-item"> Invoice</a></li>
                                            <li><a href="pricing.html" class="sub-slide-item"> Pricing Tables</a></li>
                                            <li><a href="settings.html" class="sub-slide-item"> Settings</a></li>
                                            <li><a href="blog.html" class="sub-slide-item"> Blog</a></li>
                                            <li><a href="blog-details.html" class="sub-slide-item"> Blog Details</a>
                                            </li>
                                            <li><a href="blog-post.html" class="sub-slide-item"> Blog Post</a></li>
                                            <li><a href="empty.html" class="sub-slide-item"> Empty Page</a></li>
                                            <li><a href="construction.html" class="sub-slide-item"> Under
                                                    Construction</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="switcher-1.html" class="slide-item"> Switcher</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-shopping-bag"></i><span
                                        class="side-menu__label">E-Commerce</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">E-Commerce</a></li>
                                    <li><a href="shop.html" class="slide-item"> Shop</a></li>
                                    <li><a href="shop-description.html" class="slide-item"> Product Details</a></li>
                                    <li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
                                    <li><a href="add-product.html" class="slide-item"> Add Product</a></li>
                                    <li><a href="wishlist.html" class="slide-item"> Wishlist</a></li>
                                    <li><a href="checkout.html" class="slide-item"> Checkout</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">File
                                        Manager</span><span class="badge bg-pink side-badge">4</span><i
                                        class="angle fe fe-chevron-right hor-angle"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">File Manager</a></li>
                                    <li><a href="file-manager.html" class="slide-item"> File Manager</a></li>
                                    <li><a href="filemanager-list.html" class="slide-item"> File Manager List</a></li>
                                    <li><a href="filemanager-details.html" class="slide-item"> File Details</a></li>
                                    <li><a href="file-attachments.html" class="slide-item"> File Attachments</a></li>
                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>Misc Pages</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-users"></i><span
                                        class="side-menu__label">Authentication</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Authentication</a></li>
                                    <li><a href="login.html" class="slide-item"> Login</a></li>
                                    <li><a href="register.html" class="slide-item"> Register</a></li>
                                    <li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
                                    <li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide"
                                            href="javascript:void(0)"><span class="sub-side-menu__label">Error
                                                Pages</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a href="400.html" class="sub-slide-item"> 400</a></li>
                                            <li><a href="401.html" class="sub-slide-item"> 401</a></li>
                                            <li><a href="403.html" class="sub-slide-item"> 403</a></li>
                                            <li><a href="404.html" class="sub-slide-item"> 404</a></li>
                                            <li><a href="500.html" class="sub-slide-item"> 500</a></li>
                                            <li><a href="503.html" class="sub-slide-item"> 503</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <i class="side-menu__icon fe fe-cpu"></i>
                                    <span class="side-menu__label">Submenu items</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Submenu items</a></li>
                                    <li><a href="javascript:void(0)" class="slide-item">Submenu-1</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide"
                                            href="javascript:void(0)"><span
                                                class="sub-side-menu__label">Submenu-2</span><i
                                                class="sub-angle fe fe-chevron-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.1</a>
                                            </li>
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.2</a>
                                            </li>
                                            <li class="sub-slide2">
                                                <a class="sub-side-menu__item2" href="javascript:void(0)"
                                                    data-bs-toggle="sub-slide2"><span
                                                        class="sub-side-menu__label2">Submenu-2.3</span><i
                                                        class="sub-angle2 fe fe-chevron-right"></i></a>
                                                <ul class="sub-slide-menu2">
                                                    <li><a href="javascript:void(0)"
                                                            class="sub-slide-item2">Submenu-2.3.1</a></li>
                                                    <li><a href="javascript:void(0)"
                                                            class="sub-slide-item2">Submenu-2.3.2</a></li>
                                                    <li><a href="javascript:void(0)"
                                                            class="sub-slide-item2">Submenu-2.3.3</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.4</a>
                                            </li>
                                            <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.5</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>General</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-map-pin"></i><span
                                        class="side-menu__label">Maps</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Maps</a></li>
                                    <li><a href="maps1.html" class="slide-item">Leaflet Maps</a></li>
                                    <li><a href="maps2.html" class="slide-item">Mapel Maps</a></li>
                                    <li><a href="maps.html" class="slide-item">Vector Maps</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-bar-chart-2"></i><span
                                        class="side-menu__label">Charts</span><span
                                        class="badge bg-secondary side-badge">6</span><i
                                        class="angle fe fe-chevron-right hor-angle"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Charts</a></li>
                                    <li><a href="chart-chartist.html" class="slide-item">Chart Js</a></li>
                                    <li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
                                    <li><a href="chart-echart.html" class="slide-item"> ECharts</a></li>
                                    <li><a href="chart-morris.html" class="slide-item"> Morris Charts</a></li>
                                    <li><a href="chart-nvd3.html" class="slide-item"> Nvd3 Charts</a></li>
                                    <li><a href="charts.html" class="slide-item"> C3 Bar Charts</a></li>
                                    <li><a href="chart-line.html" class="slide-item"> C3 Line Charts</a></li>
                                    <li><a href="chart-donut.html" class="slide-item"> C3 Donut Charts</a></li>
                                    <li><a href="chart-pie.html" class="slide-item"> C3 Pie charts</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-wind"></i><span
                                        class="side-menu__label">Icons</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Icons</a></li>
                                    <li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
                                    <li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
                                    <li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
                                    <li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
                                    <li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
                                    <li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
                                    <li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
                                    <li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
                                    <li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
                                    <li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
                                    <li><a href="icons11.html" class="slide-item">Bootstrap Icons</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>

            <!--app-content open-->
            <div class="mt-0 main-content app-content">
                <div class="side-app">
                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">{{ $header }}</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $header }}</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">{{ $header }}</h3>
                                    </div>
                                    <div class="card-body">
                                        {{ $slot }}
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

        </div>

        <!-- Sidebar-right -->
        <div class="sidebar sidebar-right sidebar-animate">
            <div class="mb-0 border-0 shadow-none panel panel-primary card">
                <div class="p-3 border-0 tab-menu-heading d-flex">
                    <div class="mb-0 card-title"><i class="fe fe-bell me-2"></i><span
                            class=" pulse"></span>Notifications</div>
                    <div class="card-options ms-auto">
                        <a href="javascript:void(0);" class="mb-1 sidebar-icon text-end float-end me-3"
                            data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i
                                class="text-white fe fe-x"></i></a>
                    </div>
                </div>
                <div class="p-0 border-0 panel-body tabs-menu-body latest-tasks">
                    <div class="tabs-menu border-bottom">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i
                                        class="fe fe-settings me-1"></i>Feeds</a></li>
                            <li><a href="#side2" data-bs-toggle="tab"><i class="fe fe-message-circle"></i> Chat</a>
                            </li>
                            <li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-anchor me-1"></i>Timeline</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="side1">
                            <div class="p-3 fw-semibold ps-5">Feeds</div>
                            <div class="pt-2 card-body">
                                <div class="browser-stats">
                                    <div class="mb-4 row">
                                        <div class="mb-3 col-sm-2 mb-sm-0">
                                            <span class="feeds avatar-circle brround bg-primary-transparent"><i
                                                    class="fe fe-user text-primary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New user registered</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i
                                                            class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="mb-3 col-sm-2 mb-sm-0">
                                            <span
                                                class="feeds avatar-circle avatar-circle-secondary brround bg-secondary-transparent"><i
                                                    class="fe fe-shopping-cart text-secondary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New order delivered</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i
                                                            class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="mb-3 col-sm-2 mb-sm-0">
                                            <span
                                                class="feeds avatar-circle avatar-circle-danger brround bg-danger-transparent"><i
                                                    class="fe fe-bell text-danger"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">You have pending tasks</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i
                                                            class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="mb-3 col-sm-2 mb-sm-0">
                                            <span
                                                class="feeds avatar-circle avatar-circle-warning brround bg-warning-transparent"><i
                                                    class="fe fe-gitlab text-warning"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New version arrived</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i
                                                            class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="mb-3 col-sm-2 mb-sm-0">
                                            <span
                                                class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i
                                                    class="fe fe-database text-pink"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Server #1 overloaded</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i
                                                            class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-sm-2 mb-sm-0">
                                            <span
                                                class="feeds avatar-circle avatar-circle-info brround bg-info-transparent"><i
                                                    class="fe fe-check-circle text-info"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New project launched</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i
                                                            class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 fw-semibold ps-5">Settings</div>
                            <div class="pt-2 card-body">
                                <div class="browser-stats">
                                    <div class="mb-4 row">
                                        <div class="mb-3 col-sm-2 mb-sm-0">
                                            <span class="feeds avatar-circle brround bg-primary-transparent"><i
                                                    class="fe fe-settings text-primary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">General Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i
                                                            class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="mb-3 col-sm-2 mb-sm-0">
                                            <span
                                                class="feeds avatar-circle avatar-circle-secondary brround bg-secondary-transparent"><i
                                                    class="fe fe-map-pin text-secondary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Map Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i
                                                            class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="mb-3 col-sm-2 mb-sm-0">
                                            <span
                                                class="feeds avatar-circle avatar-circle-danger brround bg-danger-transparent"><i
                                                    class="fe fe-headphones text-danger"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Support Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i
                                                            class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="mb-3 col-sm-2 mb-sm-0">
                                            <span
                                                class="feeds avatar-circle avatar-circle-warning brround bg-warning-transparent"><i
                                                    class="fe fe-credit-card text-warning"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Payment Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i
                                                            class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="mb-3 col-sm-2 mb-sm-0">
                                            <span
                                                class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i
                                                    class="fe fe-bell text-pink"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Notification Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i
                                                            class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="side2">
                            <div class="list-group list-group-flush">
                                <div class="pt-3 fw-semibold ps-5">Today</div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('admin/assets/images/users/2.jpg') }}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Addie Minstra</div>
                                            <p class="mb-0 fs-12 text-muted"> Hey! there I' am available.... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('admin/assets/images/users/11.jpg') }}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Rose Bush</div>
                                            <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('admin/assets/images/users/10.jpg') }}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Claude Strophobia</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project......
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('admin/assets/images/users/13.jpg') }}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Eileen Dover</div>
                                            <p class="mb-0 fs-12 text-muted"> New product Launching... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('admin/assets/images/users/12.jpg') }}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Willie Findit</div>
                                            <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('admin/assets/images/users/15.jpg') }}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Manny Jah</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project......
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('admin/assets/images/users/4.jpg') }}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Cherry Blossom</div>
                                            <p class="mb-0 fs-12 text-muted"> Hey! there I' am available....</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="pt-3 fw-semibold ps-5">Yesterday</div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('admin/assets/images/users/7.jpg') }}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Simon Sais</div>
                                            <p class="mb-0 fs-12 text-muted">Schedule Realease...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('admin/assets/images/users/9.jpg') }}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Laura Biding</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project......
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('admin/assets/images/users/2.jpg') }}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Addie Minstra</div>
                                            <p class="mb-0 fs-12 text-muted">Contact me for details....</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('admin/assets/images/users/9.jpg') }}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Ivan Notheridiya</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project......
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('admin/assets/images/users/14.jpg') }}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Dulcie Veeta</div>
                                            <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('admin/assets/images/users/11.jpg') }}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Florinda Carasco</div>
                                            <p class="mb-0 fs-12 text-muted">New product Launching...</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('admin/assets/images/users/4.jpg') }}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Cherry Blossom</div>
                                            <p class="mb-0 fs-12 text-muted">cherryblossom@gmail.com</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="side3">
                            <ul class="task-list timeline-task">
                                <li class="mt-4 d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Finished<span
                                                class="mx-2 text-muted fs-11 fw-normal">09 July 2021</span></h6>
                                        <p class="text-muted fs-12">Adam Berry finished task on<a
                                                href="javascript:void(0)" class="fw-semibold"> Project
                                                Management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span
                                                class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span
                                                class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">New Comment<span
                                                class="mx-2 text-muted fs-11 fw-normal">05 July 2021</span></h6>
                                        <p class="text-muted fs-12">Victoria commented on Project <a
                                                href="javascript:void(0)" class="fw-semibold"> AngularJS
                                                Template</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span
                                                class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span
                                                class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">New Comment<span
                                                class="mx-2 text-muted fs-11 fw-normal">25 June 2021</span></h6>
                                        <p class="text-muted fs-12">Victoria commented on Project <a
                                                href="javascript:void(0)" class="fw-semibold"> AngularJS
                                                Template</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span
                                                class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span
                                                class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Overdue<span
                                                class="mx-2 text-muted fs-11 fw-normal">14 June 2021</span></h6>
                                        <p class="mb-0 text-muted fs-12">Petey Cruiser finished task <a
                                                href="javascript:void(0)" class="fw-semibold"> Integrated
                                                management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span
                                                class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span
                                                class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Overdue<span
                                                class="mx-2 text-muted fs-11 fw-normal">29 June 2021</span></h6>
                                        <p class="mb-0 text-muted fs-12">Petey Cruiser finished task <a
                                                href="javascript:void(0)" class="fw-semibold"> Integrated
                                                management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span
                                                class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span
                                                class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Finished<span
                                                class="mx-2 text-muted fs-11 fw-normal">09 July 2021</span></h6>
                                        <p class="text-muted fs-12">Adam Berry finished task on<a
                                                href="javascript:void(0)" class="fw-semibold"> Project
                                                Management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span
                                                class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span
                                                class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Sidebar-right-->

        <!-- Country-selector modal-->
        <div class="modal fade" id="country-selector">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content country-select-modal">
                    <div class="modal-header">
                        <h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <ul class="p-3 row">
                            <li class="mb-2 col-lg-6">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block active">
                                    <span class="country-selector"><img alt=""
                                            src="{{ asset('admin/assets/images/flags/us_flag.jpg') }}"
                                            class="me-3 language"></span>USA
                                </a>
                            </li>
                            <li class="mb-2 col-lg-6">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                            src="{{ asset('admin/assets/images/flags/italy_flag.jpg') }}"
                                            class="me-3 language"></span>Italy
                                </a>
                            </li>
                            <li class="mb-2 col-lg-6">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                            src="{{ asset('admin/assets/images/flags/spain_flag.jpg') }}"
                                            class="me-3 language"></span>Spain
                                </a>
                            </li>
                            <li class="mb-2 col-lg-6">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                            src="{{ asset('admin/assets/images/flags/india_flag.jpg') }}"
                                            class="me-3 language"></span>India
                                </a>
                            </li>
                            <li class="mb-2 col-lg-6">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                            src="{{ asset('admin/assets/images/flags/french_flag.jpg') }}"
                                            class="me-3 language"></span>French
                                </a>
                            </li>
                            <li class="mb-2 col-lg-6">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                            src="{{ asset('admin/assets/images/flags/russia_flag.jpg') }}"
                                            class="me-3 language"></span>Russia
                                </a>
                            </li>
                            <li class="mb-2 col-lg-6">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                            src="{{ asset('admin/assets/images/flags/germany_flag.jpg') }}"
                                            class="me-3 language"></span>Germany
                                </a>
                            </li>
                            <li class="mb-2 col-lg-6">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                            src="{{ asset('admin/assets/images/flags/argentina.jpg') }}"
                                            class="me-3 language"></span>Argentina
                                </a>
                            </li>
                            <li class="mb-2 col-lg-6">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                            src="{{ asset('admin/assets/images/flags/malaysia.jpg') }}"
                                            class="me-3 language"></span>Malaysia
                                </a>
                            </li>
                            <li class="mb-2 col-lg-6">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                            src="{{ asset('admin/assets/images/flags/turkey.jpg') }}"
                                            class="me-3 language"></span>Turkey
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Country-selector modal-->

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="flex-row-reverse row align-items-center">
                    <div class="text-center col-md-12 col-sm-12">
                        Copyright © <span id="year"></span> <a href="javascript:void(0)">Laravel 9 Admin</a>.
                        Designed
                        with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> laravel
                            9
                        </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    </div>
    <!-- BEGIN: JS Assets-->
    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{ asset('admin/assets/js/jquery.sparkline.min.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('admin/assets/js/sticky.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ asset('admin/assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('admin/assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/p-scroll/pscroll.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/p-scroll/pscroll-1.js') }}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- INTERNAL Notifications js -->
    <script src="{{ asset('admin/assets/plugins/notify/js/jquery.growl.js') }}"></script>

    @if (Session::has('message'))
        <script>
            $(function() {
                $.growl.warning({
                    title: "Success",
                    message: "{{ Session::get('message') }}",

                });

            });
        </script>
    @endif
    <!-- SIDE-MENU JS-->
    <script src="{{ asset('admin/assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- TypeHead js -->
    <script src="{{ asset('admin/assets/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
    <script src="{{ asset('admin/assets/js/typehead.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('admin/assets/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>

    <!-- END: JS Assets-->
    <!-- Scripts -->
    @livewireScripts
    @powerGridScripts
    @stack('scripts')
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(function() {

            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.users.list') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'created_at',
                        name: 'Created at'
                    },
                    {
                        data: 'updated_at',
                        name: 'Updated at'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

        });
    </script>
    </head>
</body>

</html>
