<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:54:52 GMT -->
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="http://fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet">
    <link href="{{asset('asset/bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="asset/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="asset/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="asset/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="asset/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="asset/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="{{asset('asset/css/main5739.css?')}}version=4.5.0" rel="stylesheet">
</head>
<body class="menu-position-side menu-side-left full-screen with-content-panel">
<div class="all-wrapper with-side-panel solid-bg-all">
    <div class="search-with-suggestions-w">
        <div class="search-with-suggestions-modal">
            <div class="element-search"><input class="search-suggest-input" placeholder="Start typing to search...">
                <div class="close-search-suggestions"><i class="os-icon os-icon-x"></i></div>
            </div>
            <div class="search-suggestions-group">
                <div class="ssg-header">
                    <div class="ssg-icon">
                        <div class="os-icon os-icon-box"></div>
                    </div>
                    <div class="ssg-name">Projects</div>
                    <div class="ssg-info">24 Total</div>
                </div>
                <div class="ssg-content">
                    <div class="ssg-items ssg-items-boxed"><a class="ssg-item" href="users_profile_big.html">
                            <div class="item-media" style="background-image: url(img/company6.png)"></div>
                            <div class="item-name">Integ<span>ration</span> with API</div>
                        </a><a class="ssg-item" href="users_profile_big.html">
                            <div class="item-media" style="background-image: url(img/company7.png)"></div>
                            <div class="item-name">Deve<span>lopm</span>ent Project</div>
                        </a></div>
                </div>
            </div>
            <div class="search-suggestions-group">
                <div class="ssg-header">
                    <div class="ssg-icon">
                        <div class="os-icon os-icon-users"></div>
                    </div>
                    <div class="ssg-name">Customers</div>
                    <div class="ssg-info">12 Total</div>
                </div>
                <div class="ssg-content">
                    <div class="ssg-items ssg-items-list"><a class="ssg-item" href="users_profile_big.html">
                            <div class="item-media" style="background-image: url(img/avatar1.jpg)"></div>
                            <div class="item-name">John Ma<span>yer</span>s</div>
                        </a><a class="ssg-item" href="users_profile_big.html">
                            <div class="item-media" style="background-image: url(img/avatar2.jpg)"></div>
                            <div class="item-name">Th<span>omas</span> Mullier</div>
                        </a><a class="ssg-item" href="users_profile_big.html">
                            <div class="item-media" style="background-image: url(img/avatar3.jpg)"></div>
                            <div class="item-name">Kim C<span>olli</span>ns</div>
                        </a></div>
                </div>
            </div>
            <div class="search-suggestions-group">
                <div class="ssg-header">
                    <div class="ssg-icon">
                        <div class="os-icon os-icon-folder"></div>
                    </div>
                    <div class="ssg-name">Files</div>
                    <div class="ssg-info">17 Total</div>
                </div>
                <div class="ssg-content">
                    <div class="ssg-items ssg-items-blocks"><a class="ssg-item" href="#">
                            <div class="item-icon"><i class="os-icon os-icon-file-text"></i></div>
                            <div class="item-name">Work<span>Not</span>e.txt</div>
                        </a><a class="ssg-item" href="#">
                            <div class="item-icon"><i class="os-icon os-icon-film"></i></div>
                            <div class="item-name">V<span>ideo</span>.avi</div>
                        </a><a class="ssg-item" href="#">
                            <div class="item-icon"><i class="os-icon os-icon-database"></i></div>
                            <div class="item-name">User<span>Tabl</span>e.sql</div>
                        </a><a class="ssg-item" href="#">
                            <div class="item-icon"><i class="os-icon os-icon-image"></i></div>
                            <div class="item-name">wed<span>din</span>g.jpg</div>
                        </a></div>
                    <div class="ssg-nothing-found">
                        <div class="icon-w"><i class="os-icon os-icon-eye-off"></i></div>
                        <span>No files were found. Try changing your query...</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="layout-w">
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
            <div class="mm-logo-buttons-w"><a class="mm-logo" href="{{url('admin')}}"><img src="img/logo.png"><span>Clean Admin</span></a>
                <div class="mm-buttons">
                    <div class="content-panel-open">
                        <div class="os-icon os-icon-grid-circles"></div>
                    </div>
                    <div class="mobile-menu-trigger">
                        <div class="os-icon os-icon-hamburger-menu-1"></div>
                    </div>
                </div>
            </div>
            <div class="menu-and-user">
                <div class="logged-user-w">
                    <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">Maria Gomez</div>
                        <div class="logged-user-role">Administrator</div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
            <div class="logo-w"><a class="logo" href="{{url('admin')}}">
                    <div class="logo-element"></div>
                    <div class="logo-label">Cafe Duke</div>
                </a></div>
            <div class="logged-user-w avatar-inline">
                <div class="logged-user-i">
                    <div class="avatar-w"><img alt="" src="asset/img/avatar1.jpg"></div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">{{\Illuminate\Support\Facades\Auth::user()->name}}</div>
                        <div class="logged-user-role">Administrator</div>
                    </div>
                    <div class="logged-user-toggler-arrow">
                        <div class="os-icon os-icon-chevron-down"></div>
                    </div>
                    <div class="logged-user-menu color-style-bright">
                        <div class="logged-user-avatar-info">
                            <div class="avatar-w"><img alt="" src="asset/img/avatar1.jpg"></div>
                            <div class="logged-user-info-w">
                                <div class="logged-user-name">Maria Gomez</div>
                                <div class="logged-user-role">Administrator</div>
                            </div>
                        </div>
                        <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                        <ul>
                            <li><a href="{{url('profile')}}"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                            </li>
                            <form action="{{url('logout')}}" id="logout" method="post">
                                @csrf
                            <li><a href="javascript:document.getElementById('logout').submit();"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-actions">
                <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right"><i
                        class="os-icon os-icon-mail-14"></i>
                    <div class="os-dropdown light message-list">
                        <ul>
                            <li><a href="#">
                                    <div class="user-avatar-w"><img alt="" src="asset/img/avatar1.jpg"></div>
                                    <div class="message-content"><h6 class="message-from">John Mayers</h6><h6
                                            class="message-title">Account Update</h6></div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user-avatar-w"><img alt="" src="asset/img/avatar2.jpg"></div>
                                    <div class="message-content"><h6 class="message-from">Phil Jones</h6><h6
                                            class="message-title">Secutiry Updates</h6></div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user-avatar-w"><img alt="" src="asset/img/avatar3.jpg"></div>
                                    <div class="message-content"><h6 class="message-from">Bekky Simpson</h6><h6
                                            class="message-title">Vacation Rentals</h6></div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user-avatar-w"><img alt="" src="asset/img/avatar4.jpg"></div>
                                    <div class="message-content"><h6 class="message-from">Alice Priskon</h6><h6
                                            class="message-title">Payment Confirmation</h6></div>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-right"><i
                        class="os-icon os-icon-ui-46"></i>
                    <div class="os-dropdown">
                        <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                        <ul>
                            <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a>
                            </li>
                            <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right"><i
                        class="os-icon os-icon-zap"></i>
                    <div class="os-dropdown light message-list">
                        <div class="icon-w"><i class="os-icon os-icon-zap"></i></div>
                        <ul>
                            <li><a href="#">
                                    <div class="user-avatar-w"><img alt="" src="asset/img/avatar1.jpg"></div>
                                    <div class="message-content"><h6 class="message-from">John Mayers</h6><h6
                                            class="message-title">Account Update</h6></div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user-avatar-w"><img alt="" src="asset/img/avatar2.jpg"></div>
                                    <div class="message-content"><h6 class="message-from">Phil Jones</h6><h6
                                            class="message-title">Secutiry Updates</h6></div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user-avatar-w"><img alt="" src="asset/img/avatar3.jpg"></div>
                                    <div class="message-content"><h6 class="message-from">Bekky Simpson</h6><h6
                                            class="message-title">Vacation Rentals</h6></div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user-avatar-w"><img alt="" src="asset/img/avatar4.jpg"></div>
                                    <div class="message-content"><h6 class="message-from">Alice Priskon</h6><h6
                                            class="message-title">Payment Confirmation</h6></div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <h1 class="menu-page-header">Page Header</h1>
            <ul class="main-menu">
                <li class="sub-header"><span>Menu</span></li>
                <li class="selected has-menu"><a href="{{url('order')}}">
                        <div class="icon-w">
                            <div class="os-icon os-icon-layout"></div>
                        </div>
                        <span>Order Details</span></a>
                <li class="selected has-menu"><a href="{{url('inventory')}}">
                        <div class="icon-w">
                            <div class="os-icon os-icon-layout"></div>
                        </div>
                        <span>Inventory</span></a>

                </li>
                <li class="selected has-menu"><a href="{{url('customers')}}">
                        <div class="icon-w">
                            <div class="os-icon os-icon-layout"></div>
                        </div>
                        <span>Manage Customers</span></a>
                </li>
                <li class="selected has-menu"><a href="{{url('manageWaiters')}}">
                        <div class="icon-w">
                            <div class="os-icon os-icon-layout"></div>
                        </div>
                        <span>Manage Waiters</span></a>
                </li>
                <li class="selected has-menu"><a href="{{url('delivery')}}">
                        <div class="icon-w">
                            <div class="os-icon os-icon-layout"></div>
                        </div>
                        <span>Manage Delivery Person</span></a>
                </li>

            </ul>
        </div>
        <div class="content-w">
            <div class="top-bar color-scheme-transparent">
                <div class="top-menu-controls">
                    <div class="element-search autosuggest-search-activator"><input
                            placeholder="Start typing to search..."></div>
                    <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left"><i
                            class="os-icon os-icon-mail-14"></i>
                        <div class="os-dropdown light message-list">
                            <ul>
                                <li><a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="message-content"><h6 class="message-from">John Mayers</h6><h6
                                                class="message-title">Account Update</h6></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar2.jpg"></div>
                                        <div class="message-content"><h6 class="message-from">Phil Jones</h6><h6
                                                class="message-title">Secutiry Updates</h6></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar3.jpg"></div>
                                        <div class="message-content"><h6 class="message-from">Bekky Simpson</h6><h6
                                                class="message-title">Vacation Rentals</h6></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user-avatar-w"><img alt="" src="img/avatar4.jpg"></div>
                                        <div class="message-content"><h6 class="message-from">Alice Priskon</h6><h6
                                                class="message-title">Payment Confirmation</h6></div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left"><i
                            class="os-icon os-icon-ui-46"></i>
                        <div class="os-dropdown">
                            <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                            <ul>
                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a>
                                </li>
                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a>
                                </li>
                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a>
                                </li>
                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="logged-user-w">
                        <div class="logged-user-i">
                            <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                            <div class="logged-user-menu color-style-bright">
                                <div class="logged-user-avatar-info">
                                    <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                    <div class="logged-user-info-w">
                                        <div class="logged-user-name">Maria Gomez</div>
                                        <div class="logged-user-role">Administrator</div>
                                    </div>
                                </div>
                                <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                                <ul>
                                    <li><a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a>
                                    </li>
                                    <li><a href="users_profile_big.html"><i
                                                class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                                    </li>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a>
                                    </li>
                                    <li><a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a>
                                    </li>
                                    <li><a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
