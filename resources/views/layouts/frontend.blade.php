<!doctype html>
<html lang="en">

<!-- Mirrored from iqonic.design/themes/socialv/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Oct 2020 08:35:40 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SocialV - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/typography.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
</head>
<body class="right-column-fixed">
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Sidebar  -->
    <div class="iq-sidebar">
        <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li class="active">
                        <a href="index.html" class="iq-waves-effect"><i class="las la-newspaper"></i><span>Newsfeed</span></a>
                    </li>
                    @auth
                    <li>
                        <a href="profile.html" class="iq-waves-effect"><i class="las la-user"></i><span>Profile</span></a>
                    </li>
                    <li>
                        <a href="friend-list.html" class="iq-waves-effect"><i class="las la-user-friends"></i><span>Friend Lists</span></a>
                    </li>
                    <li>
                        <a href="group.html" class="iq-waves-effect"><i class="las la-users"></i><span>Group</span></a>
                    </li>
                    <li>
                        <a href="profile-images.html" class="iq-waves-effect"><i class="las la-image"></i><span>Profile Image</span></a>
                    </li>
                    <li>
                        <a href="profile-video.html" class="iq-waves-effect"><i class="las la-video"></i><span>Profile Video</span></a>
                    </li>
                    <li>
                        <a href="profile-event.html" class="iq-waves-effect"><i class="las la-film"></i><span>Profile Events</span></a>
                    </li>
                    <li>
                        <a href="notification.html" class="iq-waves-effect"><i class="las la-bell"></i><span>Notification</span></a>
                    </li>
                    <li>
                        <a href="file.html" class="iq-waves-effect"><i class="las la-file"></i><span>Files</span></a>
                    </li>
                    <li>
                        <a href="friend-request.html" class="iq-waves-effect"><i class="las la-anchor"></i><span>Friend Request</span></a>
                    </li>
                    <li>
                        <a href="chat.html" class="iq-waves-effect"><i class="lab la-rocketchat"></i><span>Chat</span></a>
                    </li>
                    <li>
                        <a href="todo.html" class="iq-waves-effect"><i class="las la-check-circle"></i><span>Todo</span></a>
                    </li>
                    <li>
                        <a href="calendar.html" class="iq-waves-effect"><i class="las la-calendar"></i><span>Calendar</span></a>
                    </li>
                    <li>
                        <a href="birthday.html" class="iq-waves-effect"><i class="las la-birthday-cake"></i><span>Birthday</span></a>
                    </li>
                    <li>
                        <a href="weather.html" class="iq-waves-effect"><i class="ri-snowy-line"></i><span>Weather</span></a>
                    </li>
                    <li>
                        <a href="music.html" class="iq-waves-effect"><i class="ri-play-circle-line"></i><span>Music</span></a>
                    </li>
                    <li>
                        <a href="#mailbox" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-mail-line"></i><span>Email</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="app/index.html"><i class="ri-inbox-line"></i>Inbox</a></li>
                            <li><a href="app/email-compose.html"><i class="ri-edit-line"></i>Email Compose</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-focus-2-line"></i><span>Ui-Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li>
                                <a href="#ui-kit" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pencil-ruler-line"></i><span>UI Kit</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="ui-kit" class="iq-submenu collapse" data-parent="#ui-elements">
                                    <li><a href="ui-colors.html"><i class="ri-font-color"></i>colors</a></li>
                                    <li><a href="ui-typography.html"><i class="ri-text"></i>Typography</a></li>
                                    <li><a href="ui-alerts.html"><i class="ri-alert-line"></i>Alerts</a></li>
                                    <li><a href="ui-badges.html"><i class="ri-building-3-line"></i>Badges</a></li>
                                    <li><a href="ui-breadcrumb.html"><i class="ri-menu-2-line"></i>Breadcrumb</a></li>
                                    <li><a href="ui-buttons.html"><i class="ri-checkbox-blank-line"></i>Buttons</a></li>
                                    <li><a href="ui-cards.html"><i class="ri-bank-card-line"></i>Cards</a></li>
                                    <li><a href="ui-carousel.html"><i class="ri-slideshow-line"></i>Carousel</a></li>
                                    <li><a href="ui-embed-video.html"><i class="ri-slideshow-2-line"></i>Video</a></li>
                                    <li><a href="ui-grid.html"><i class="ri-grid-line"></i>Grid</a></li>
                                    <li><a href="ui-images.html"><i class="ri-image-line"></i>Images</a></li>
                                    <li><a href="ui-list-group.html"><i class="ri-file-list-3-line"></i>list Group</a></li>
                                    <li><a href="ui-media-object.html"><i class="ri-camera-line"></i>Media</a></li>
                                    <li><a href="ui-modal.html"><i class="ri-stop-mini-line"></i>Modal</a></li>
                                    <li><a href="ui-notifications.html"><i class="ri-notification-line"></i>Notifications</a></li>
                                    <li><a href="ui-pagination.html"><i class="ri-pages-line"></i>Pagination</a></li>
                                    <li><a href="ui-popovers.html"><i class="ri-folder-shield-2-line"></i>Popovers</a></li>
                                    <li><a href="ui-progressbars.html"><i class="ri-battery-low-line"></i>Progressbars</a></li>
                                    <li><a href="ui-tabs.html"><i class="ri-database-line"></i>Tabs</a></li>
                                    <li><a href="ui-tooltips.html"><i class="ri-record-mail-line"></i>Tooltips</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-profile-line"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="forms" class="iq-submenu collapse" data-parent="#ui-elements">
                                    <li><a href="form-layout.html"><i class="ri-tablet-line"></i>Form Elements</a></li>
                                    <li><a href="form-validation.html"><i class="ri-device-line"></i>Form Validation</a></li>
                                    <li><a href="form-switch.html"><i class="ri-toggle-line"></i>Form Switch</a></li>
                                    <li><a href="form-chechbox.html"><i class="ri-checkbox-line"></i>Form Checkbox</a></li>
                                    <li><a href="form-radio.html"><i class="ri-radio-button-line"></i>Form Radio</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#wizard-form" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-archive-drawer-line"></i><span>Forms Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="wizard-form" class="iq-submenu collapse" data-parent="#ui-elements">
                                    <li><a href="form-wizard.html"><i class="ri-clockwise-line"></i>Simple Wizard</a></li>
                                    <li><a href="form-wizard-validate.html"><i class="ri-clockwise-2-line"></i>Validate Wizard</a></li>
                                    <li><a href="form-wizard-vertical.html"><i class="ri-anticlockwise-line"></i>Vertical Wizard</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="tables" class="iq-submenu collapse" data-parent="#ui-elements">
                                    <li><a href="tables-basic.html"><i class="ri-table-line"></i>Basic Tables</a></li>
                                    <li><a href="data-table.html"><i class="ri-database-line"></i>Data Table</a></li>
                                    <li><a href="table-editable.html"><i class="ri-refund-line"></i>Editable Table</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="icons" class="iq-submenu collapse" data-parent="#ui-elements">
                                    <li><a href="icon-dripicons.html"><i class="ri-stack-line"></i>Dripicons</a></li>
                                    <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a></li>
                                    <li><a href="icon-lineawesome.html"><i class="ri-keynote-line"></i>line Awesome</a></li>
                                    <li><a href="icon-remixicon.html"><i class="ri-remixicon-line"></i>Remixicon</a></li>
                                    <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pages" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li>
                                <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="authentication" class="iq-submenu collapse" data-parent="#pages">
                                    <li><a href="sign-in.html"><i class="ri-login-box-line"></i>Login</a></li>
                                    <li><a href="sign-up.html"><i class="ri-login-circle-line"></i>Register</a></li>
                                    <li><a href="pages-recoverpw.html"><i class="ri-record-mail-line"></i>Recover Password</a></li>
                                    <li><a href="pages-confirm-mail.html"><i class="ri-file-code-line"></i>Confirm Mail</a></li>
                                    <li><a href="pages-lock-screen.html"><i class="ri-lock-line"></i>Lock Screen</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="extra-pages" class="iq-submenu collapse" data-parent="#pages">
                                    <li><a href="pages-timeline.html"><i class="ri-map-pin-time-line"></i>Timeline</a></li>
                                    <li><a href="pages-invoice.html"><i class="ri-question-answer-line"></i>Invoice</a></li>
                                    <li><a href="blank-page.html"><i class="ri-invision-line"></i>Blank Page</a></li>
                                    <li><a href="pages-error.html"><i class="ri-error-warning-line"></i>Error 404</a></li>
                                    <li><a href="pages-error-500.html"><i class="ri-error-warning-line"></i>Error 500</a></li>
                                    <li><a href="pages-pricing.html"><i class="ri-price-tag-line"></i>Pricing</a></li>
                                    <li><a href="pages-pricing-one.html"><i class="ri-price-tag-2-line"></i>Pricing 1</a></li>
                                    <li><a href="pages-maintenance.html"><i class="ri-archive-line"></i>Maintenance</a></li>
                                    <li><a href="pages-comingsoon.html"><i class="ri-mastercard-line"></i>Coming Soon</a></li>
                                    <li><a href="pages-faq.html"><i class="ri-compasses-line"></i>Faq</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
@endauth
                </ul>
            </nav>
            <div class="p-3"></div>
        </div>
    </div>
    <!-- TOP Nav Bar -->
    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-navbar-logo d-flex justify-content-between">
                    <a href="index.html">
                        <img src="images/logo.png" class="img-fluid" alt="">
                        <span>SocialV</span>
                    </a>
                    <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="ri-menu-line"></i></div>
                        </div>
                    </div>
                </div>
                <div class="iq-search-bar">
                    <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                    </form>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                @guest
                    <a class="bg-primary iq-sign-btn" href="{{'login'}}" role="button"  >My Account<i class="ri-login ml-2"></i>
                    </a>
                @endguest
                @auth
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list">
                        <li>
                            <a href="profile.html" class="iq-waves-effect d-flex align-items-center">
                                <img src="{{asset('frontend/images/user/1.jpg')}}" class="img-fluid rounded-circle mr-3" alt="user">
                                <div class="caption">
                                    <h6 class="mb-0 line-height">Bni Cyst</h6>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html" class="iq-waves-effect d-flex align-items-center">
                                <i class="ri-home-line"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="search-toggle iq-waves-effect" href="#"><i class="ri-group-line"></i></a>
                            <div class="iq-sub-dropdown iq-sub-dropdown-large">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white">Friend Request<small class="badge  badge-light float-right pt-1">4</small></h5>
                                        </div>
                                        <div class="iq-friend-request">
                                            <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="{{asset('frontend/images/user/01.jpg')}}" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Jaques Amole</h6>
                                                        <p class="mb-0">40  friends</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                                    <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-friend-request">
                                            <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="{{asset('frontend/images/user/02.jpg')}}" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Lucy Tania</h6>
                                                        <p class="mb-0">12  friends</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                                    <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-friend-request">
                                            <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="{{asset('frontend/images/user/03.jpg')}}" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Manny Petty</h6>
                                                        <p class="mb-0">3  friends</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                                    <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-friend-request">
                                            <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="{{asset('frontend/images/user/04.jpg')}}" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Marsha Mello</h6>
                                                        <p class="mb-0">15  friends</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                                    <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <a href="#" class="mr-3 btn text-primary">View More Request</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="search-toggle iq-waves-effect">
                                <div id="lottie-beil"></div>
                                <span class="bg-danger dots"></span>
                            </a>
                            <div class="iq-sub-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                        </div>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{asset('frontend/images/user/01.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Emma Watson Bni</h6>
                                                    <small class="float-right font-size-12">Just Now</small>
                                                    <p class="mb-0">95 MB</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{asset('frontend/images/user/02.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">New customer is join</h6>
                                                    <small class="float-right font-size-12">5 days ago</small>
                                                    <p class="mb-0">Cyst Bni</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{asset('frontend/images/user/03.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Two customer is left</h6>
                                                    <small class="float-right font-size-12">2 days ago</small>
                                                    <p class="mb-0">Cyst Bni</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{asset('frontend/images/user/04.jpg')}}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                    <small class="float-right font-size-12">3 days ago</small>
                                                    <p class="mb-0">Cyst Bni</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="search-toggle iq-waves-effect">
                                <div id="lottie-mail"></div>
                                <span class="bg-primary count-mail"></span>
                            </a>
                            <div class="iq-sub-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                        </div>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Bni Emma Watson</h6>
                                                    <small class="float-left font-size-12">13 Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                    <small class="float-left font-size-12">20 Apr</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Why do we use it?</h6>
                                                    <small class="float-left font-size-12">30 Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Variations Passages</h6>
                                                    <small class="float-left font-size-12">12 Sep</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card" >
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                    <small class="float-left font-size-12">5 Dec</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-list">
                        <li>
                            <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                <i class="ri-arrow-down-s-fill"></i>
                            </a>
                            <div class="iq-sub-dropdown iq-user-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3 line-height">
                                            <h5 class="mb-0 text-white line-height">Hello Bni Cyst</h5>
                                            <span class="text-white font-size-12">Available</span>
                                        </div>
                                        <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-file-user-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">My Profile</h6>
                                                    <p class="mb-0 font-size-12">View personal profile details.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="profile-edit.html" class="iq-sub-card iq-bg-warning-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-warning">
                                                    <i class="ri-profile-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Edit Profile</h6>
                                                    <p class="mb-0 font-size-12">Modify your personal details.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="account-setting.html" class="iq-sub-card iq-bg-info-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-info">
                                                    <i class="ri-account-box-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Account settings</h6>
                                                    <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="privacy-setting.html" class="iq-sub-card iq-bg-danger-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-danger">
                                                    <i class="ri-lock-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Privacy Settings</h6>
                                                    <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="d-inline-block w-100 text-center p-3">


                                            <a class="bg-primary iq-sign-btn" href="{{'logout'}}" role="button"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out<i class="ri-login-box-line ml-2"></i>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                    @endauth
            </nav>
        </div>
    </div>
    <!-- TOP Nav Bar END -->
    <!-- Right Sidebar Panel Start-->
    @auth
    <div class="right-sidebar-mini right-sidebar">
        <div class="right-sidebar-panel p-0">
            <div class="iq-card shadow-none">
                <div class="iq-card-body p-0">
                    <div class="media-height p-3">
                        <div class="media align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="{{asset('frontend/images/user/01.jpg')}}" alt="">
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-0"><a href="#">Anna Sthesia</a></h6>
                                <p class="mb-0">Just Now</p>
                            </div>
                        </div>
                        <div class="media align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="{{asset('frontend/images/user/02.jpg')}}" alt="">
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-0"><a href="#">Paul Molive</a></h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="media align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="{{asset('frontend/images/user/03.jpg')}}" alt="">
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-0"><a href="#">Anna Mull</a></h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="media align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="{{asset('frontend/images/user/04.jpg')}}" alt="">
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-0"><a href="#">Paige Turner</a></h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>


                    </div>
                    <div class="right-sidebar-toggle bg-primary mt-3">
                        <i class="ri-arrow-left-line side-left-icon"></i>
                        <i class="ri-arrow-right-line side-right-icon"><span class="ml-3 d-inline-block">Close Menu</span></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Right Sidebar Panel End
@endauth
    @yield('content')


    </div>
<!-- Wrapper END -->
    <!-- Footer -->
    <footer class="bg-white iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#">SocialV</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <!-- Appear JavaScript -->
    <script src="{{asset('frontend/js/jquery.appear.js')}}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{asset('frontend/js/countdown.min.js')}}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <!-- Wow JavaScript -->
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    <!-- Apexcharts JavaScript -->
    <script src="{{asset('frontend/js/apexcharts.js')}}"></script>
    <!-- Slick JavaScript -->
    <script src="{{asset('frontend/js/slick.min.js')}}"></script>
    <!-- Select2 JavaScript -->
    <script src="{{asset('frontend/js/select2.min.js')}}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{asset('frontend/js/smooth-scrollbar.js')}}"></script>
    <!-- lottie JavaScript -->
    <script src="{{asset('frontend/js/lottie.js')}}"></script>
    <!-- am core JavaScript -->
    <script src="{{asset('frontend/js/core.')}}"></script>
    <!-- am charts JavaScript -->
    <script src="{{asset('frontend/js/charts.js')}}"></script>
    <!-- am animated JavaScript -->
    <script src="{{asset('frontend/js/animated.js')}}"></script>
    <!-- am kelly JavaScript -->
    <script src="{{asset('frontend/js/kelly.js')}}"></script>
    <!-- am maps JavaScript -->
    <script src="{{asset('frontend/js/maps.js')}}"></script>
    <!-- am worldLow JavaScript -->
    <script src="{{asset('frontend/js/worldLow.js')}}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('frontend/js/chart-custom.js')}}"></script>
    <!-- Custom JavaScript -->
    <script src="{{asset('frontend/js/custom.js')}}"></script>

</body>

<!-- Mirrored from iqonic.design/themes/socialv/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Oct 2020 08:38:05 GMT -->
</html>
