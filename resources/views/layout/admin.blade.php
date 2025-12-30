<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content={{ csrf_token() }}>

    <!-- Title -->
    <title>Users | Front - Admin &amp; Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/icon-set/style.css') }}">
    
    @livewireStyles

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/theme.min.css?v=1.0 ') }}">
  </head>

  <body class="   footer-offset">
    
      <script src="{{ asset('assets/admin/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js') }}"></script>
    

    <!-- ONLY DEV -->
    
      <!-- Builder -->
      <div id="styleSwitcherDropdown" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow" style="width: 35rem;">
        <div class="card card-lg border-0 h-100">
          <div class="card-header align-items-start">
            <div class="mr-2">
              <h3 class="card-header-title">Front Builder</h3>
              <p>Customize your overview page layout. Choose the one that best fits your needs.</p>
            </div>

            <!-- Toggle Button -->
            <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark" href="javascript:;" data-hs-unfold-options='{
                  "target": "#styleSwitcherDropdown",
                  "type": "css-animation",
                  "animationIn": "fadeInRight",
                  "animationOut": "fadeOutRight",
                  "hasOverlay": true,
                  "smartPositionOff": true
                 }'>
              <i class="tio-clear tio-lg"></i>
            </a>
            <!-- End Toggle Button -->
          </div>

          <!-- Body -->
          <div class="card-body sidebar-scrollbar">
            <h4 class="mb-1">Layout skins <span id="js-builder-disabled" class="badge badge-soft-danger" style="opacity: 0">Disabled</span></h4>
            <p>3 kinds of layout skins to choose from.</p>

            <div class="row gx-2 mb-5">
              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input type="radio" class="custom-checkbox-card-input" name="layoutSkinsRadio" id="layoutSkinsRadio1" checked="" value="default">
                    <label class="custom-checkbox-card-label" for="layoutSkinsRadio1">
                      <img class="custom-checkbox-card-img" src="{{ asset('assets/admin/svg/layouts/layouts-sidebar-default.svg')}}" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Default</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->

              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input type="radio" class="custom-checkbox-card-input" name="layoutSkinsRadio" id="layoutSkinsRadio2" value="navbar-dark">
                    <label class="custom-checkbox-card-label" for="layoutSkinsRadio2">
                      <img class="custom-checkbox-card-img" src="{{ asset('assets/admin/svg/layouts/layouts-sidebar-dark.svg')}}" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Dark</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->

              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input type="radio" class="custom-checkbox-card-input" name="layoutSkinsRadio" id="layoutSkinsRadio3" value="navbar-light">
                    <label class="custom-checkbox-card-label" for="layoutSkinsRadio3">
                      <img class="custom-checkbox-card-img" src="{{ asset('assets/admin/svg/layouts/layouts-sidebar-light.svg')}}" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Light</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->
            </div>
            <!-- End Row -->

            <h4 class="mb-1">Sidebar layout options</h4>
            <p>Choose between standard navigation sizing, mini or even compact with icons.</p>

            <div class="row gx-2 mb-5">
              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input type="radio" class="custom-checkbox-card-input" name="sidebarLayoutOptions" id="sidebarLayoutOptions1" checked="" value="default">
                    <label class="custom-checkbox-card-label" for="sidebarLayoutOptions1">
                      <img class="custom-checkbox-card-img" src="{{ asset('assets/admin/svg/layouts/sidebar-default-classic.svg')}}" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Default</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->

              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input type="radio" class="custom-checkbox-card-input" name="sidebarLayoutOptions" id="sidebarLayoutOptions2" value="navbar-vertical-aside-compact-mode">
                    <label class="custom-checkbox-card-label" for="sidebarLayoutOptions2">
                      <img class="custom-checkbox-card-img" src="{{ asset('assets/admin/svg/layouts/sidebar-compact.svg')}}" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Compact</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->

              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input type="radio" class="custom-checkbox-card-input" name="sidebarLayoutOptions" id="sidebarLayoutOptions3" value="navbar-vertical-aside-mini-mode">
                    <label class="custom-checkbox-card-label" for="sidebarLayoutOptions3">
                      <img class="custom-checkbox-card-img" src="{{ asset('assets/admin/svg/layouts/sidebar-mini.svg')}}" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Mini</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->
            </div>
            <!-- End Row -->

            <h4 class="mb-1">Header layout options</h4>
            <p>Choose the primary navigation of your header layout.</p>

            <div class="row gx-2">
              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input type="radio" class="custom-checkbox-card-input" name="headerLayoutOptions" id="headerLayoutOptions1" value="single">
                    <label class="custom-checkbox-card-label" for="headerLayoutOptions1">
                      <img class="custom-checkbox-card-img" src="{{ asset('assets/admin/svg/layouts/header-default-fluid.svg')}}" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Default (Fluid)</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->

              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input type="radio" class="custom-checkbox-card-input" name="headerLayoutOptions" id="headerLayoutOptions2" value="single-container">
                    <label class="custom-checkbox-card-label" for="headerLayoutOptions2">
                      <img class="custom-checkbox-card-img" src="{{ asset('assets/admin/svg/layouts/header-default-container.svg')}}" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Default (Container)</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->

              <!-- Custom Radio -->
              <div class="col-4 text-center">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input type="radio" class="custom-checkbox-card-input" name="headerLayoutOptions" id="headerLayoutOptions3" value="double">
                    <label class="custom-checkbox-card-label" for="headerLayoutOptions3">
                      <img class="custom-checkbox-card-img" src="{{ asset('assets/admin/svg/layouts/header-double-line-fluid.svg')}}" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Double line (Fluid)</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->

              <!-- Custom Radio -->
              <div class="col-4 text-center mt-2">
                <div class="text-center">
                  <div class="custom-checkbox-card mb-2">
                    <input type="radio" class="custom-checkbox-card-input" name="headerLayoutOptions" id="headerLayoutOptions4" value="double-container">
                    <label class="custom-checkbox-card-label" for="headerLayoutOptions4">
                      <img class="custom-checkbox-card-img" src="{{ asset('assets/admin/svg/layouts/header-double-line-container.svg')}}" alt="Image Description">
                    </label>
                    <span class="custom-checkbox-card-text">Double line (Container)</span>
                  </div>
                </div>
              </div>
              <!-- End Custom Radio -->
            </div>
            <!-- End Row -->
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="card-footer">
            <div class="row gx-2">
              <div class="col">
                <button type="button" id="js-builder-reset" class="btn btn-block btn-lg btn-white">
                  <i class="tio-restore"></i> Reset
                </button>
              </div>
              <div class="col">
                <button type="button" id="js-builder-preview" class="btn btn-block btn-lg btn-primary">
                  <i class="tio-visible"></i> Preview
                </button>
              </div>
            </div>
            <!-- End Row -->
          </div>
          <!-- End Footer -->
        </div>
      </div>
      <!-- End Builder -->

      <!-- Builder Toggle -->
      <div class="d-none d-md-block position-fixed bottom-0 right-0 mr-5 mb-10" style="z-index: 3;">
        <div style="position: fixed; top: 50%; right: 0; margin-right: -.25rem; transform: translateY(-50%); writing-mode: vertical-rl; text-orientation: sideways;">
          <div class="hs-unfold">
            <a id="builderPopover" class="js-hs-unfold-invoker btn btn-sm btn-soft-dark py-3" href="javascript:;" data-template='<div class="d-none d-md-block popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-toggle="popover" data-placement="left" title="<div class='d-flex align-items-center'>Front Builder <a href='#!' class='close close-light ml-auto'><i id='closeBuilderPopover' class='tio-clear'></i></a></div>" data-content="Customize your overview page layout. Choose the one that best fits your needs." data-html="true" data-hs-unfold-options='{
                "target": "#styleSwitcherDropdown",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'>
              <i class="tio-tune mr-2"></i>
              <span class="font-weight-bold text-uppercase">Builder</span>
            </a>
          </div>
        </div>
      </div>
      <!-- End Builder Toggle -->

      <!-- JS Preview mode only -->
      <div id="headerMain" class="d-none"><header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
  <div class="navbar-nav-wrap">
    <div class="navbar-brand-wrapper">
      <!-- Logo -->
      <a class="navbar-brand" href="index.html" aria-label="Front">
        <img class="navbar-brand-logo" src="{{ asset('assets/admin/svg/logos/logo.svg')}}" alt="Logo">
        <img class="navbar-brand-logo-mini" src="{{ asset('assets/admin/svg/logos/logo-short.svg')}}" alt="Logo">
      </a>
      <!-- End Logo -->
    </div>

    <div class="navbar-nav-wrap-content-left">
      <!-- Navbar Vertical Toggle -->
      <button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3">
        <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip" data-placement="right" title="Collapse"></i>
        <i class="tio-last-page navbar-vertical-aside-toggle-full-align" data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-toggle="tooltip" data-placement="right" title="Expand"></i>
      </button>
      <!-- End Navbar Vertical Toggle -->

      <!-- Search Form -->
      <div class="d-none d-md-block">
        <form class="position-relative">
          <!-- Input Group -->
          <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="tio-search"></i>
              </div>
            </div>
            <input type="search" class="js-form-search form-control" placeholder="Search in front" aria-label="Search in front" data-hs-form-search-options='{
                     "clearIcon": "#clearSearchResultsIcon",
                     "dropMenuElement": "#searchDropdownMenu",
                     "dropMenuOffset": 20,
                     "toggleIconOnFocus": true,
                     "activeClass": "focus"
                   }'>
            <a class="input-group-append" href="javascript:;">
              <span class="input-group-text">
                <i id="clearSearchResultsIcon" class="tio-clear" style="display: none;"></i>
              </span>
            </a>
          </div>
          <!-- End Input Group -->

          <!-- Card Search Content -->
          <div id="searchDropdownMenu" class="hs-form-search-menu-content card dropdown-menu dropdown-card overflow-hidden">
            <!-- Body -->
            <div class="card-body-height py-3">
              <small class="dropdown-header mb-n2">Recent searches</small>

              <div class="dropdown-item bg-transparent text-wrap my-2">
                <span class="h4 mr-1">
                  <a class="btn btn-xs btn-soft-dark btn-pill" href="index.html">
                    Gulp <i class="tio-search ml-1"></i>
                  </a>
                </span>
                <span class="h4">
                  <a class="btn btn-xs btn-soft-dark btn-pill" href="index.html">
                    Notification panel <i class="tio-search ml-1"></i>
                  </a>
                </span>
              </div>

              <div class="dropdown-divider my-3"></div>

              <small class="dropdown-header mb-n2">Tutorials</small>

              <a class="dropdown-item my-2" href="index.html">
                <div class="media align-items-center">
                  <span class="icon icon-xs icon-soft-dark icon-circle mr-2">
                    <i class="tio-tune"></i>
                  </span>

                  <div class="media-body text-truncate">
                    <span>How to set up Gulp?</span>
                  </div>
                </div>
              </a>

              <a class="dropdown-item my-2" href="index.html">
                <div class="media align-items-center">
                  <span class="icon icon-xs icon-soft-dark icon-circle mr-2">
                    <i class="tio-paint-bucket"></i>
                  </span>

                  <div class="media-body text-truncate">
                    <span>How to change theme color?</span>
                  </div>
                </div>
              </a>

              <div class="dropdown-divider my-3"></div>

              <small class="dropdown-header mb-n2">Members</small>

              <a class="dropdown-item my-2" href="index.html">
                <div class="media align-items-center">
                  <img class="avatar avatar-xs avatar-circle mr-2" src="{{ asset('assets/admin/img/160x160/img10.jpg')}}" alt="Image Description">
                  <div class="media-body text-truncate">
                    <span>Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                  </div>
                </div>
              </a>

              <a class="dropdown-item my-2" href="index.html">
                <div class="media align-items-center">
                  <img class="avatar avatar-xs avatar-circle mr-2" src="{{ asset('assets/admin/img/160x160/img3.jpg')}}" alt="Image Description">
                  <div class="media-body text-truncate">
                    <span>David Harrison</span>
                  </div>
                </div>
              </a>

              <a class="dropdown-item my-2" href="index.html">
                <div class="media align-items-center">
                  <div class="avatar avatar-xs avatar-soft-info avatar-circle mr-2">
                    <span class="avatar-initials">A</span>
                  </div>
                  <div class="media-body text-truncate">
                    <span>Anne Richard</span>
                  </div>
                </div>
              </a>
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <a class="card-footer text-center" href="index.html">
              See all results
              <i class="tio-chevron-right"></i>
            </a>
            <!-- End Footer -->
          </div>
          <!-- End Card Search Content -->
        </form>
      </div>
      <!-- End Search Form -->
    </div>

    <!-- Secondary Content -->
    <div class="navbar-nav-wrap-content-right">
      <!-- Navbar -->
      <ul class="navbar-nav align-items-center flex-row">
        <li class="nav-item d-md-none">
          <!-- Search Trigger -->
          <div class="hs-unfold">
            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                 "target": "#searchDropdown",
                 "type": "css-animation",
                 "animationIn": "fadeIn",
                 "hasOverlay": "rgba(46, 52, 81, 0.1)",
                 "closeBreakpoint": "md"
               }'>
              <i class="tio-search"></i>
            </a>
          </div>
          <!-- End Search Trigger -->
        </li>

        <li class="nav-item d-none d-sm-inline-block">
          <!-- Notification -->
          <div class="hs-unfold">
            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                 "target": "#notificationDropdown",
                 "type": "css-animation"
               }'>
              <i class="tio-notifications-on-outlined"></i>
              <span class="btn-status btn-sm-status btn-status-danger"></span>
            </a>

            <div id="notificationDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">
              <!-- Header -->
              <div class="card-header">
                <span class="card-title h4">Notifications</span>

                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                       "target": "#notificationSettingsOneDropdown",
                       "type": "css-animation"
                     }'>
                    <i class="tio-more-vertical"></i>
                  </a>
                  <div id="notificationSettingsOneDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                    <span class="dropdown-header">Settings</span>
                    <a class="dropdown-item" href="#">
                      <i class="tio-archive dropdown-item-icon"></i> Archive all
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-all-done dropdown-item-icon"></i> Mark all as read
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-toggle-off dropdown-item-icon"></i> Disable notifications
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-gift dropdown-item-icon"></i> What's new?
                    </a>
                    <div class="dropdown-divider"></div>
                    <span class="dropdown-header">Feedback</span>
                    <a class="dropdown-item" href="#">
                      <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
              <!-- End Header -->

              <!-- Nav -->
              <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="notificationNavOne-tab" data-toggle="tab" href="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="notificationNavTwo-tab" data-toggle="tab" href="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                </li>
              </ul>
              <!-- End Nav -->

              <!-- Body -->
              <div class="card-body-height">
                <!-- Tab Content -->
                <div class="tab-content" id="notificationTabContent">
                  <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                    <ul class="list-group list-group-flush navbar-card-list-group">
                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck1" checked="">
                                <label class="custom-control-label" for="notificationCheck1"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img3.jpg')}}" alt="Image Description">
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Brian Warner</span>
                            <p class="card-text font-size-sm">changed an issue from "In Progress" to <span class="badge badge-success">Review</span></p>
                          </div>
                          <small class="col-auto text-muted text-cap">2hr</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->

                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck2" checked="">
                                <label class="custom-control-label" for="notificationCheck2"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                <span class="avatar-initials">K</span>
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Klara Hampton</span>
                            <p class="card-text font-size-sm">mentioned you in a comment</p>
                            <blockquote class="blockquote blockquote-sm">
                              Nice work, love! You really nailed it. Keep it up!
                            </blockquote>
                          </div>
                          <small class="col-auto text-muted text-cap">10hr</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->

                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck4" checked="">
                                <label class="custom-control-label" for="notificationCheck4"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img10.jpg ')}}" alt="Image Description">
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Ruby Walter</span>
                            <p class="card-text font-size-sm">joined the Slack group HS Team</p>
                          </div>
                          <small class="col-auto text-muted text-cap">3dy</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->

                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck3">
                                <label class="custom-control-label" for="notificationCheck3"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img" src="{{ asset('assets/admin/svg/brands/google.svg ')}}" alt="Image Description">
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">from Google</span>
                            <p class="card-text font-size-sm">Start using forms to capture the information of prospects visiting your Google website</p>
                          </div>
                          <small class="col-auto text-muted text-cap">17dy</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->

                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck5">
                                <label class="custom-control-label" for="notificationCheck5"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img7.jpg ')}}" alt="Image Description">
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Sara Villar</span>
                            <p class="card-text font-size-sm">completed <i class="tio-folder-bookmarked text-primary"></i> FD-7 task</p>
                          </div>
                          <small class="col-auto text-muted text-cap">2mn</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->
                    </ul>
                  </div>

                  <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                    <ul class="list-group list-group-flush navbar-card-list-group">
                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck7">
                                <label class="custom-control-label" for="notificationCheck7"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                <span class="avatar-initials">A</span>
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Anne Richard</span>
                            <p class="card-text font-size-sm">accepted your invitation to join Notion</p>
                          </div>
                          <small class="col-auto text-muted text-cap">1dy</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->

                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck6">
                                <label class="custom-control-label" for="notificationCheck6"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img5.jpg ')}}" alt="Image Description">
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Finch Hoot</span>
                            <p class="card-text font-size-sm">left Slack group HS projects</p>
                          </div>
                          <small class="col-auto text-muted text-cap">3dy</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->

                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck8">
                                <label class="custom-control-label" for="notificationCheck8"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-dark avatar-circle">
                                <span class="avatar-initials">HS</span>
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Htmlstream</span>
                            <p class="card-text font-size-sm">you earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>
                          </div>
                          <small class="col-auto text-muted text-cap">6dy</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->

                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck9">
                                <label class="custom-control-label" for="notificationCheck9"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img8.jpg ')}}" alt="Image Description">
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Linda Bates</span>
                            <p class="card-text font-size-sm">Accepted your connection</p>
                          </div>
                          <small class="col-auto text-muted text-cap">17dy</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->

                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck10">
                                <label class="custom-control-label" for="notificationCheck10"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                <span class="avatar-initials">L</span>
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Lewis Clarke</span>
                            <p class="card-text font-size-sm">completed <i class="tio-folder-bookmarked text-primary"></i> FD-134 task</p>
                          </div>
                          <small class="col-auto text-muted text-cap">2mn</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->
                    </ul>
                  </div>
                </div>
                <!-- End Tab Content -->
              </div>
              <!-- End Body -->

              <!-- Card Footer -->
              <a class="card-footer text-center" href="#">
                View all notifications
                <i class="tio-chevron-right"></i>
              </a>
              <!-- End Card Footer -->
            </div>
          </div>
          <!-- End Notification -->
        </li>

        <li class="nav-item d-none d-sm-inline-block">
          <!-- Apps -->
          <div class="hs-unfold">
            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                 "target": "#appsDropdown",
                 "type": "css-animation"
               }'>
              <i class="tio-menu-vs-outlined"></i>
            </a>

            <div id="appsDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">
              <!-- Header -->
              <div class="card-header">
                <span class="card-title h4">Web apps &amp; services</span>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body card-body-height">
                <!-- Nav -->
                <div class="nav nav-pills flex-column">
                  <a class="nav-link" href="#">
                    <div class="media align-items-center">
                      <span class="mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="{{ asset('assets/admin/svg/brands/atlassian.svg ') }}" alt="Image Description">
                      </span>
                      <div class="media-body text-truncate">
                        <span class="h5 mb-0">Atlassian</span>
                        <span class="d-block font-size-sm text-body">Security and control across Cloud</span>
                      </div>
                    </div>
                  </a>

                  <a class="nav-link" href="#">
                    <div class="media align-items-center">
                      <span class="mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="{{ asset('assets/admin/svg/brands/slack.svg ') }}" alt="Image Description">
                      </span>
                      <div class="media-body text-truncate">
                        <span class="h5 mb-0">Slack <span class="badge badge-primary badge-pill text-uppercase ml-1">Try</span></span>
                        <span class="d-block font-size-sm text-body">Email collaboration software</span>
                      </div>
                    </div>
                  </a>

                  <a class="nav-link" href="#">
                    <div class="media align-items-center">
                      <span class="mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="{{ asset('assets/admin/svg/brands/google-webdev.svg ') }}" alt="Image Description">
                      </span>
                      <div class="media-body text-truncate">
                        <span class="h5 mb-0">Google webdev</span>
                        <span class="d-block font-size-sm text-body">Work involved in developing a website</span>
                      </div>
                    </div>
                  </a>

                  <a class="nav-link" href="#">
                    <div class="media align-items-center">
                      <span class="mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="{{ asset('assets/admin/svg/brands/frontapp.svg ') }}" alt="Image Description">
                      </span>
                      <div class="media-body text-truncate">
                        <span class="h5 mb-0">Frontapp</span>
                        <span class="d-block font-size-sm text-body">The inbox for teams</span>
                      </div>
                    </div>
                  </a>

                  <a class="nav-link" href="#">
                    <div class="media align-items-center">
                      <span class="mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="{{ asset('assets/admin/svg/illustrations/review-rating-shield.svg ') }}" alt="Image Description">
                      </span>
                      <div class="media-body text-truncate">
                        <span class="h5 mb-0">HS Support</span>
                        <span class="d-block font-size-sm text-body">Customer service and support</span>
                      </div>
                    </div>
                  </a>

                  <a class="nav-link" href="#">
                    <div class="media align-items-center">
                      <span class="avatar avatar-xs avatar-soft-dark mr-3">
                        <span class="avatar-initials"><i class="tio-apps"></i></span>
                      </span>
                      <div class="media-body text-truncate">
                        <span class="h5 mb-0">More Front products</span>
                        <span class="d-block font-size-sm text-body">Check out more HS products</span>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Nav -->
              </div>
              <!-- End Body -->

              <!-- Footer -->
              <a class="card-footer text-center" href="#">
                View all apps
                <i class="tio-chevron-right"></i>
              </a>
              <!-- End Footer -->
            </div>
          </div>
          <!-- End Apps -->
        </li>

        <li class="nav-item d-none d-sm-inline-block">
          <!-- Activity -->
          <div class="hs-unfold">
            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                "target": "#activitySidebar",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'>
              <i class="tio-voice-line"></i>
            </a>
          </div>
          <!-- Activity -->
        </li>

        <li class="nav-item">
          <!-- Account -->
          <div class="hs-unfold">
            <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;" data-hs-unfold-options='{
                 "target": "#accountNavbarDropdown",
                 "type": "css-animation"
               }'>
              <div class="avatar avatar-sm avatar-circle">
                <img class="avatar-img" src="{{ Auth::user()->avatar ?? asset('assets/admin/img/default.jpg') }}" alt="Image Description">
                <span class="avatar-status avatar-sm-status avatar-status-success"></span>
              </div>
            </a>

            <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
              <div class="dropdown-item-text">
                <div class="media align-items-center">
                  <div class="avatar avatar-sm avatar-circle mr-2">
                    <img class="avatar-img" src="" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="card-title h5">
                        
                            {{ Auth::user()->full_name }}
                        
                </span>
                    <span class="card-text">{{ Auth::user()->email }}</span>
                  </div>
                </div>
              </div>


              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}">
                    <span class="text-truncate pr-2" title="Sign out">Sign out</span>
                </a>
            </div>
          </div>
          <!-- End Account -->
        </li>
      </ul>
      <!-- End Navbar -->
    </div>
    <!-- End Secondary Content -->
  </div>
</header></div>
      <div id="headerFluid" class="d-none"><header id="header" class="navbar navbar-expand-xl navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered  ">
  <div class="js-mega-menu navbar-nav-wrap">
    <div class="navbar-brand-wrapper">
      <!-- Logo -->
      
      
        <a class="navbar-brand" href="index.html" aria-label="Front">
          <img class="navbar-brand-logo" src="{{ asset('assets/admin/svg/logos/logo.svg ') }}" alt="Logo">
        </a>
      
      <!-- End Logo -->
    </div>

    <!-- Secondary Content -->
    <div class="navbar-nav-wrap-content-right">
      <!-- Navbar -->
      <ul class="navbar-nav align-items-center flex-row">
        <li class="nav-item d-none d-sm-inline-block">
          <!-- Notification -->
          <div class="hs-unfold">
            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                 "target": "#notificationDropdown",
                 "type": "css-animation"
               }'>
              <i class="tio-notifications-on-outlined"></i>
              <span class="btn-status btn-sm-status btn-status-danger"></span>
            </a>

            <div id="notificationDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">
              <!-- Header -->
              <div class="card-header">
                <span class="card-title h4">Notifications</span>

                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                       "target": "#notificationSettingsOneDropdown",
                       "type": "css-animation"
                     }'>
                    <i class="tio-more-vertical"></i>
                  </a>
                  <div id="notificationSettingsOneDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                    <span class="dropdown-header">Settings</span>
                    <a class="dropdown-item" href="#">
                      <i class="tio-archive dropdown-item-icon"></i> Archive all
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-all-done dropdown-item-icon"></i> Mark all as read
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-toggle-off dropdown-item-icon"></i> Disable notifications
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-gift dropdown-item-icon"></i> What's new?
                    </a>
                    <div class="dropdown-divider"></div>
                    <span class="dropdown-header">Feedback</span>
                    <a class="dropdown-item" href="#">
                      <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
              <!-- End Header -->

              <!-- Nav -->
              <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="notificationNavOne-tab" data-toggle="tab" href="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="notificationNavTwo-tab" data-toggle="tab" href="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                </li>
              </ul>
              <!-- End Nav -->

              <!-- Body -->
              <div class="card-body-height">
                <!-- Tab Content -->
                <div class="tab-content" id="notificationTabContent">
                  <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                    <ul class="list-group list-group-flush navbar-card-list-group">
                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck1" checked="">
                                <label class="custom-control-label" for="notificationCheck1"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img3.jpg ') }}" alt="Image Description">
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Brian Warner</span>
                            <p class="card-text font-size-sm">changed an issue from "In Progress" to <span class="badge badge-success">Review</span></p>
                          </div>
                          <small class="col-auto text-muted text-cap">2hr</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->

                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck2" checked="">
                                <label class="custom-control-label" for="notificationCheck2"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                <span class="avatar-initials">K</span>
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Klara Hampton</span>
                            <p class="card-text font-size-sm">mentioned you in a comment</p>
                            <blockquote class="blockquote blockquote-sm">
                              Nice work, love! You really nailed it. Keep it up!
                            </blockquote>
                          </div>
                          <small class="col-auto text-muted text-cap">10hr</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->

                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck4" checked="">
                                <label class="custom-control-label" for="notificationCheck4"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img10.jpg ') }}" alt="Image Description">
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Ruby Walter</span>
                            <p class="card-text font-size-sm">joined the Slack group HS Team</p>
                          </div>
                          <small class="col-auto text-muted text-cap">3dy</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->

                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck3">
                                <label class="custom-control-label" for="notificationCheck3"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img" src="{{ asset('assets/admin/svg/brands/google.svg ') }}" alt="Image Description">
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">from Google</span>
                            <p class="card-text font-size-sm">Start using forms to capture the information of prospects visiting your Google website</p>
                          </div>
                          <small class="col-auto text-muted text-cap">17dy</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->

                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck5">
                                <label class="custom-control-label" for="notificationCheck5"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img7.jpg ') }}" alt="Image Description">
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Sara Villar</span>
                            <p class="card-text font-size-sm">completed <i class="tio-folder-bookmarked text-primary"></i> FD-7 task</p>
                          </div>
                          <small class="col-auto text-muted text-cap">2mn</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->
                    </ul>
                  </div>

                  <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                    <ul class="list-group list-group-flush navbar-card-list-group">
                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck7">
                                <label class="custom-control-label" for="notificationCheck7"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                <span class="avatar-initials">A</span>
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Anne Richard</span>
                            <p class="card-text font-size-sm">accepted your invitation to join Notion</p>
                          </div>
                          <small class="col-auto text-muted text-cap">1dy</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->

                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck6">
                                <label class="custom-control-label" for="notificationCheck6"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img5.jpg ') }}" alt="Image Description">
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Finch Hoot</span>
                            <p class="card-text font-size-sm">left Slack group HS projects</p>
                          </div>
                          <small class="col-auto text-muted text-cap">3dy</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->

                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck8">
                                <label class="custom-control-label" for="notificationCheck8"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-dark avatar-circle">
                                <span class="avatar-initials">HS</span>
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Htmlstream</span>
                            <p class="card-text font-size-sm">you earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>
                          </div>
                          <small class="col-auto text-muted text-cap">6dy</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->

                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck9">
                                <label class="custom-control-label" for="notificationCheck9"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img8.jpg ') }}" alt="Image Description">
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Linda Bates</span>
                            <p class="card-text font-size-sm">Accepted your connection</p>
                          </div>
                          <small class="col-auto text-muted text-cap">17dy</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->

                      <!-- Item -->
                      <li class="list-group-item custom-checkbox-list-wrapper">
                        <div class="row">
                          <div class="col-auto position-static">
                            <div class="d-flex align-items-center">
                              <div class="custom-control custom-checkbox custom-checkbox-list">
                                <input type="checkbox" class="custom-control-input" id="notificationCheck10">
                                <label class="custom-control-label" for="notificationCheck10"></label>
                                <span class="custom-checkbox-list-stretched-bg"></span>
                              </div>
                              <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                <span class="avatar-initials">L</span>
                              </div>
                            </div>
                          </div>
                          <div class="col ml-n3">
                            <span class="card-title h5">Lewis Clarke</span>
                            <p class="card-text font-size-sm">completed <i class="tio-folder-bookmarked text-primary"></i> FD-134 task</p>
                          </div>
                          <small class="col-auto text-muted text-cap">2mn</small>
                        </div>
                        <a class="stretched-link" href="#"></a>
                      </li>
                      <!-- End Item -->
                    </ul>
                  </div>
                </div>
                <!-- End Tab Content -->
              </div>
              <!-- End Body -->

              <!-- Card Footer -->
              <a class="card-footer text-center" href="#">
                View all notifications
                <i class="tio-chevron-right"></i>
              </a>
              <!-- End Card Footer -->
            </div>
          </div>
          <!-- End Notification -->
        </li>

        <li class="nav-item d-none d-sm-inline-block">
          <!-- Apps -->
          <div class="hs-unfold">
            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                 "target": "#appsDropdown",
                 "type": "css-animation"
               }'>
              <i class="tio-menu-vs-outlined"></i>
            </a>

            <div id="appsDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">
              <!-- Header -->
              <div class="card-header">
                <span class="card-title h4">Web apps &amp; services</span>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body card-body-height">
                <!-- Nav -->
                <div class="nav nav-pills flex-column">
                  <a class="nav-link" href="#">
                    <div class="media align-items-center">
                      <span class="mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="{{ asset('assets/admin/svg/brands/atlassian.svg ') }}" alt="Image Description">
                      </span>
                      <div class="media-body text-truncate">
                        <span class="h5 mb-0">Atlassian</span>
                        <span class="d-block font-size-sm text-body">Security and control across Cloud</span>
                      </div>
                    </div>
                  </a>

                  <a class="nav-link" href="#">
                    <div class="media align-items-center">
                      <span class="mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="{{ asset('assets/admin/svg/brands/slack.svg ') }}" alt="Image Description">
                      </span>
                      <div class="media-body text-truncate">
                        <span class="h5 mb-0">Slack <span class="badge badge-primary badge-pill text-uppercase ml-1">Try</span></span>
                        <span class="d-block font-size-sm text-body">Email collaboration software</span>
                      </div>
                    </div>
                  </a>

                  <a class="nav-link" href="#">
                    <div class="media align-items-center">
                      <span class="mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="{{ asset('assets/admin/svg/brands/google-webdev.svg ') }}" alt="Image Description">
                      </span>
                      <div class="media-body text-truncate">
                        <span class="h5 mb-0">Google webdev</span>
                        <span class="d-block font-size-sm text-body">Work involved in developing a website</span>
                      </div>
                    </div>
                  </a>

                  <a class="nav-link" href="#">
                    <div class="media align-items-center">
                      <span class="mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="{{ asset('assets/admin/svg/brands/frontapp.svg ') }}" alt="Image Description">
                      </span>
                      <div class="media-body text-truncate">
                        <span class="h5 mb-0">Frontapp</span>
                        <span class="d-block font-size-sm text-body">The inbox for teams</span>
                      </div>
                    </div>
                  </a>

                  <a class="nav-link" href="#">
                    <div class="media align-items-center">
                      <span class="mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="{{ asset('assets/admin/svg/illustrations/review-rating-shield.svg ') }}" alt="Image Description">
                      </span>
                      <div class="media-body text-truncate">
                        <span class="h5 mb-0">HS Support</span>
                        <span class="d-block font-size-sm text-body">Customer service and support</span>
                      </div>
                    </div>
                  </a>

                  <a class="nav-link" href="#">
                    <div class="media align-items-center">
                      <span class="avatar avatar-xs avatar-soft-dark mr-3">
                        <span class="avatar-initials"><i class="tio-apps"></i></span>
                      </span>
                      <div class="media-body text-truncate">
                        <span class="h5 mb-0">More Front products</span>
                        <span class="d-block font-size-sm text-body">Check out more HS products</span>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Nav -->
              </div>
              <!-- End Body -->

              <!-- Footer -->
              <a class="card-footer text-center" href="#">
                View all apps
                <i class="tio-chevron-right"></i>
              </a>
              <!-- End Footer -->
            </div>
          </div>
          <!-- End Apps -->
        </li>

        <li class="nav-item d-none d-sm-inline-block">
          <!-- Activity -->
          <div class="hs-unfold">
            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                "target": "#activitySidebar",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'>
              <i class="tio-voice-line"></i>
            </a>
          </div>
          <!-- Activity -->
        </li>

        <li class="nav-item">
          <!-- Account -->
          <div class="hs-unfold">
            <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;" data-hs-unfold-options='{
                 "target": "#accountNavbarDropdown",
                 "type": "css-animation"
               }'>
              <div class="avatar avatar-sm avatar-circle">
                <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img6.jpg ') }}" alt="Image Description">
                <span class="avatar-status avatar-sm-status avatar-status-success"></span>
              </div>
            </a>

            <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
              <div class="dropdown-item-text">
                <div class="media align-items-center">
                  <div class="avatar avatar-sm avatar-circle mr-2">
                    <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img6.jpg ') }}" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="card-title h5">Mark Williams</span>
                    <span class="card-text">mark@example.com</span>
                  </div>
                </div>
              </div>

              <div class="dropdown-divider"></div>

              <!-- Unfold -->
              <div class="hs-unfold w-100">
                <a class="js-hs-unfold-invoker navbar-dropdown-submenu-item dropdown-item d-flex align-items-center" href="javascript:;" data-hs-unfold-options='{
                     "target": "#navSubmenuPagesAccountDropdown1",
                     "event": "hover"
                   }'>
                  <span class="text-truncate pr-2" title="Set status">Set status</span>
                  <i class="tio-chevron-right navbar-dropdown-submenu-item-invoker ml-auto"></i>
                </a>

                <div id="navSubmenuPagesAccountDropdown1" class="hs-unfold-content hs-unfold-has-submenu dropdown-unfold dropdown-menu navbar-dropdown-sub-menu">
                  <a class="dropdown-item" href="#">
                    <span class="legend-indicator bg-success mr-1"></span>
                    <span class="text-truncate pr-2" title="Available">Available</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <span class="legend-indicator bg-danger mr-1"></span>
                    <span class="text-truncate pr-2" title="Busy">Busy</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <span class="legend-indicator bg-warning mr-1"></span>
                    <span class="text-truncate pr-2" title="Away">Away</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <span class="text-truncate pr-2" title="Reset status">Reset status</span>
                  </a>
                </div>
              </div>
              <!-- End Unfold -->

              <a class="dropdown-item" href="#">
                <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp; account</span>
              </a>

              <a class="dropdown-item" href="#">
                <span class="text-truncate pr-2" title="Settings">Settings</span>
              </a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="#">
                <div class="media align-items-center">
                  <div class="avatar avatar-sm avatar-dark avatar-circle mr-2">
                    <span class="avatar-initials">HS</span>
                  </div>
                  <div class="media-body">
                    <span class="card-title h5">Htmlstream <span class="badge badge-primary badge-pill text-uppercase ml-1">PRO</span></span>
                    <span class="card-text">hs.example.com</span>
                  </div>
                </div>
              </a>

              <div class="dropdown-divider"></div>

              <!-- Unfold -->
              <div class="hs-unfold w-100">
                <a class="js-hs-unfold-invoker navbar-dropdown-submenu-item dropdown-item d-flex align-items-center" href="javascript:;" data-hs-unfold-options='{
                     "target": "#navSubmenuPagesAccountDropdown2",
                     "event": "hover"
                   }'>
                  <span class="text-truncate pr-2" title="Customization">Customization</span>
                  <i class="tio-chevron-right navbar-dropdown-submenu-item-invoker  ml-auto"></i>
                </a>

                <div id="navSubmenuPagesAccountDropdown2" class="hs-unfold-content hs-unfold-has-submenu dropdown-unfold dropdown-menu navbar-dropdown-sub-menu">
                  <a class="dropdown-item" href="#">
                    <span class="text-truncate pr-2" title="Invite people">Invite people</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <span class="text-truncate pr-2" title="Analytics">Analytics</span>
                    <i class="tio-open-in-new"></i>
                  </a>
                  <a class="dropdown-item" href="#">
                    <span class="text-truncate pr-2" title="Customize Front">Customize Front</span>
                    <i class="tio-open-in-new"></i>
                  </a>
                </div>
              </div>
              <!-- End Unfold -->

              <a class="dropdown-item" href="#">
                <span class="text-truncate pr-2" title="Manage team">Manage team</span>
              </a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="#">
                <span class="text-truncate pr-2" title="Sign out">Sign out</span>
              </a>
            </div>
          </div>
          <!-- End Account -->
        </li>

        <li class="nav-item">
          <!-- Toggle -->
          <button type="button" class="navbar-toggler btn btn-ghost-secondary rounded-circle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenu" data-toggle="collapse" data-target="#navbarNavMenu">
            <i class="tio-menu-hamburger"></i>
          </button>
          <!-- End Toggle -->
        </li>
      </ul>
      <!-- End Navbar -->
    </div>
    <!-- End Secondary Content -->

    <!-- Navbar -->
    <div class="navbar-nav-wrap-content-left collapse navbar-collapse" id="navbarNavMenu">
      <div class="navbar-body">
        <ul class="navbar-nav flex-grow-1">
          <!-- Dashboards -->
          <li class="hs-has-sub-menu">
            <a id="dashboardsDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkDashboardsDropdown">
              <i class="tio-home-vs-1-outlined nav-icon"></i> Dashboards
            </a>

            <!-- Dropdown -->
            <ul id="navLinkDashboardsDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="dashboardsDropdown" style="min-width: 16rem;">
              <li>
                <a class="dropdown-item" href="index.html">
                  <span class="tio-circle nav-indicator-icon"></span> Default
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="dashboard-alternative.html">
                  <span class="tio-circle nav-indicator-icon"></span> Alternative
                </a>
              </li>
            </ul>
            <!-- End Dropdown -->
          </li>
          <!-- End Dashboards -->

          <!-- Pages -->
          <li class="hs-has-sub-menu">
            <a id="pagesDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkPagesDropdown">
              <i class="tio-pages-outlined nav-icon"></i> Pages
            </a>

            <!-- Dropdown -->
            <ul id="navLinkPagesDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdown" style="min-width: 16rem;">
              <!-- Users -->
              <li class="hs-has-sub-menu">
                <a id="pagesDropdownUsers" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownUsers">
                  <span class="tio-circle nav-indicator-icon"></span> Users
                </a>

                <ul id="navLinkPagesDropdownUsers" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownUsers" style="min-width: 16rem;">
                  <li>
                    <a class="dropdown-item" href="users.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Overview
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="users-leaderboard.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Leaderboard
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="users-add-user.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Add User <span class="badge badge-info badge-pill ml-1">Hot</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- End Users -->

              <!-- User Profile -->
              <li class="hs-has-sub-menu">
                <a id="pagesDropdownUserProfile" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownUserProfile">
                  <span class="tio-circle nav-indicator-icon"></span> User Profile <span class="badge badge-primary badge-pill ml-2">5</span>
                </a>

                <ul id="navLinkPagesDropdownUserProfile" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownUserProfile" style="min-width: 16rem;">
                  <li>
                    <a class="dropdown-item" href="user-profile.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Profile
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="user-profile-teams.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Teams
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="user-profile-projects.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Projects
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="user-profile-connections.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Connections
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="user-profile-my-profile.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> My Profile
                    </a>
                  </li>
                </ul>
              </li>
              <!-- End User Profile -->

              <!-- Account -->
              <li class="hs-has-sub-menu">
                <a id="pagesDropdownAccount" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownAccount">
                  <span class="tio-circle nav-indicator-icon"></span> Account
                </a>

                <ul id="navLinkPagesDropdownAccount" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownAccount" style="min-width: 16rem;">
                  <li>
                    <a class="dropdown-item" href="account-settings.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Settings
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="account-billing.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Billing
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="account-invoice.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Invoice
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="account-api-keys.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> API Keys
                    </a>
                  </li>
                </ul>
              </li>
              <!-- End Account -->

              <!-- E-commerce -->
              <li class="hs-has-sub-menu">
                <a id="pagesDropdownEcommerce" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownEcommerce">
                  <span class="tio-circle nav-indicator-icon"></span> E-commerce
                </a>

                <ul id="navLinkPagesDropdownEcommerce" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownEcommerce" style="min-width: 16rem;">
                  <li>
                    <a class="dropdown-item" href="ecommerce.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Overview
                    </a>
                  </li>

                  <li class="hs-has-sub-menu navbar-nav-item">
                    <a id="pagesDropdownEcommerceSublevel" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownEcommerceProducts">
                      <span class="tio-circle nav-indicator-icon"></span> E-commerce
                    </a>

                    <ul id="navLinkPagesDropdownEcommerceProducts" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownEcommerceSublevel" style="min-width: 16rem;">
                      <li>
                        <a class="dropdown-item" href="ecommerce-products.html">
                          <span class="tio-circle-outlined nav-indicator-icon"></span> Products
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="ecommerce-product-details.html">
                          <span class="tio-circle-outlined nav-indicator-icon"></span> Product Details
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="ecommerce-add-product.html">
                          <span class="tio-circle nav-indicator-icon"></span> Add Product
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="hs-has-sub-menu navbar-nav-item">
                    <a id="pagesDropdownEcommerceSublevel" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownEcommerceOrders">
                      <span class="tio-circle nav-indicator-icon"></span> Orders
                    </a>

                    <ul id="navLinkPagesDropdownEcommerceOrders" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownEcommerceSublevel" style="min-width: 16rem;">
                      <li>
                        <a class="dropdown-item" href="ecommerce-orders.html">
                          <span class="tio-circle-outlined nav-indicator-icon"></span> Orders
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="ecommerce-order-details.html">
                          <span class="tio-circle-outlined nav-indicator-icon"></span> Order Details
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="hs-has-sub-menu navbar-nav-item">
                    <a id="pagesDropdownEcommerceSublevel" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownEcommerceCustomers">
                      <span class="tio-circle nav-indicator-icon"></span> Customers
                    </a>

                    <ul id="navLinkPagesDropdownEcommerceCustomers" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownEcommerceSublevel" style="min-width: 16rem;">
                      <li>
                        <a class="dropdown-item" href="ecommerce-customers.html">
                          <span class="tio-circle-outlined nav-indicator-icon"></span> Customers
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="ecommerce-customer-details.html">
                          <span class="tio-circle-outlined nav-indicator-icon"></span> Customer Details
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="ecommerce-add-customers.html">
                          <span class="tio-circle-outlined nav-indicator-icon"></span> Add Customers
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li>
                    <a class="dropdown-item" href="ecommerce-manage-reviews.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Manage Reviews
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="ecommerce-checkout.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Checkout
                    </a>
                  </li>
                </ul>
              </li>
              <!-- End E-commerce -->

              <!-- Projects -->
              <li class="hs-has-sub-menu">
                <a id="pagesDropdownProjects" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownProjects">
                  <span class="tio-circle nav-indicator-icon"></span> Projects
                </a>

                <ul id="navLinkPagesDropdownProjects" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownProjects" style="min-width: 16rem;">
                  <li>
                    <a class="dropdown-item" href="projects.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Overview
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="projects-timeline.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Timeline
                    </a>
                  </li>
                </ul>
              </li>
              <!-- End Projects -->

              <!-- Project -->
              <li class="hs-has-sub-menu">
                <a id="pagesDropdownProject" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownProject">
                  <span class="tio-circle nav-indicator-icon"></span> Project
                </a>

                <ul id="navLinkPagesDropdownProject" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownProject" style="min-width: 16rem;">
                  <li>
                    <a class="dropdown-item" href="project.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Overview
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="project-files.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Files <span class="badge badge-info badge-pill ml-1">Hot</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="project-activity.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Activity
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="project-teams.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Teams
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="project-settings.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Settings
                    </a>
                  </li>
                </ul>
              </li>
              <!-- End Project -->

              <li>
                <a class="dropdown-item" href="referrals.html">
                  <span class="tio-circle nav-indicator-icon"></span> Referrals
                </a>
              </li>

              <li class="dropdown-divider"></li>

              <!-- Signin -->
              <li class="hs-has-sub-menu">
                <a id="pagesDropdownSignin" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownSignin">
                  <span class="tio-circle nav-indicator-icon"></span> Sign In
                </a>

                <ul id="navLinkPagesDropdownSignin" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownSignin" style="min-width: 16rem;">
                  <li>
                    <a class="dropdown-item" href="authentication-signin-basic.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Basic
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="authentication-signin-cover.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Cover
                    </a>
                  </li>
                </ul>
              </li>
              <!-- End Signin -->

              <!-- Signup -->
              <li class="hs-has-sub-menu">
                <a id="pagesDropdownSignup" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownSignup">
                  <span class="tio-circle nav-indicator-icon"></span> Sign Up
                </a>

                <ul id="navLinkPagesDropdownSignup" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownSignup" style="min-width: 16rem;">
                  <li>
                    <a class="dropdown-item" href="authentication-signup-basic.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Basic
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="authentication-signup-cover.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Cover
                    </a>
                  </li>
                </ul>
              </li>
              <!-- End Signup -->

              <!-- Reset Password -->
              <li class="hs-has-sub-menu">
                <a id="pagesDropdownResetPassword" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownResetPassword">
                  <span class="tio-circle nav-indicator-icon"></span> Reset Password
                </a>

                <ul id="navLinkPagesDropdownResetPassword" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownResetPassword" style="min-width: 16rem;">
                  <li>
                    <a class="dropdown-item" href="authentication-reset-password-basic.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Basic
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="authentication-reset-password-cover.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Cover
                    </a>
                  </li>
                </ul>
              </li>
              <!-- End Reset Password -->

              <!-- Email Verification -->
              <li class="hs-has-sub-menu">
                <a id="pagesDropdownEmailVerification" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownEmailVerification">
                  <span class="tio-circle nav-indicator-icon"></span> Email Verification
                </a>

                <ul id="navLinkPagesDropdownEmailVerification" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownEmailVerification" style="min-width: 16rem;">
                  <li>
                    <a class="dropdown-item" href="authentication-email-verification-basic.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Basic
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="authentication-email-verification-cover.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Cover
                    </a>
                  </li>
                </ul>
              </li>
              <!-- End Email Verification -->

              <!-- 2-step Verification -->
              <li class="hs-has-sub-menu">
                <a id="pagesDropdown2StepVerification" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdown2StepVerification">
                  <span class="tio-circle nav-indicator-icon"></span> 2-step Verification
                </a>

                <ul id="navLinkPagesDropdown2StepVerification" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdown2StepVerification" style="min-width: 16rem;">
                  <li>
                    <a class="dropdown-item" href="authentication-two-step-verification-basic.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Basic
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="authentication-two-step-verification-cover.html">
                      <span class="tio-circle-outlined nav-indicator-icon"></span> Cover
                    </a>
                  </li>
                </ul>
              </li>
              <!-- End 2-step Verification -->

              <li class="dropdown-divider"></li>

              <!-- Welcome Page -->
              <li>
                <a class="dropdown-item" href="error-404.html">
                  <span class="tio-circle nav-indicator-icon"></span> Error 404
                </a>
              </li>
              <!-- ENd Welcome Page -->

              <!-- Welcome Page -->
              <li>
                <a class="dropdown-item" href="error-500.html">
                  <span class="tio-circle nav-indicator-icon"></span> Error 500
                </a>
              </li>
              <!-- ENd Welcome Page -->

              <li class="dropdown-divider"></li>

              <!-- Welcome Page -->
              <li>
                <a class="dropdown-item" href="welcome-page.html">
                  <span class="tio-circle nav-indicator-icon"></span> Welcome Page
                </a>
              </li>
              <!-- ENd Welcome Page -->
            </ul>
            <!-- End Dropdown -->
          </li>
          <!-- End Pages -->

          <!-- Documentation -->
          <li class="hs-has-sub-menu">
            <a id="appsNavDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkappsNavDropdown">
              <i class="tio-apps nav-icon"></i> Apps
            </a>

            <!-- Dropdown -->
            <ul id="navLinkappsNavDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="appsNavDropdown" style="min-width: 16rem;">
              <li>
                <a class="dropdown-item" href="apps-kanban.html">
                  <span class="tio-circle nav-indicator-icon"></span> Kanban
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="apps-calendar.html">
                  <span class="tio-circle nav-indicator-icon"></span> Calendar <span class="badge badge-info badge-pill ml-1">New</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="apps-invoice-generator.html">
                  <span class="tio-circle nav-indicator-icon"></span> Invoice Generator
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="apps-file-manager.html">
                  <span class="tio-circle nav-indicator-icon"></span> File Manager
                </a>
              </li>
            </ul>
            <!-- End Dropdown -->
          </li>
          <!-- End Documentation -->

          <!-- Layouts -->
          <li>
            <a class="navbar-nav-link nav-link" href="layouts/layouts.html">
              <i class="tio-dashboard-vs-outlined nav-icon"></i> Layouts
            </a>
          </li>
          <!-- End Layouts -->

          <!-- Documentation -->
          <li class="hs-has-sub-menu">
            <a id="documentationDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkDocumentationDropdown">
              <i class="tio-book-opened nav-icon"></i> Docs
            </a>

            <!-- Dropdown -->
            <ul id="navLinkDocumentationDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="documentationDropdown" style="min-width: 16rem;">
              <li>
                <a class="dropdown-item" href="documentation/index.html">
                  <span class="tio-circle nav-indicator-icon"></span> Documentation <span class="badge badge-primary badge-pill ml-1">v1.0</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="documentation/index.html">
                  <span class="tio-circle nav-indicator-icon"></span> Components
                </a>
              </li>
            </ul>
            <!-- End Dropdown -->
          </li>
          <!-- End Documentation -->
        </ul>

      </div>
    </div>
    <!-- End Navbar -->
  </div>
</header></div>
      <div id="headerDouble" class="d-none"><header id="header" class="navbar navbar-expand-lg navbar-bordered flex-lg-column px-0">
  <div class="navbar-dark w-100">
    <div class="container-fluid">
      <div class="navbar-nav-wrap">
        <div class="navbar-brand-wrapper">
          <!-- Logo -->
          <a class="navbar-brand" href="index.html" aria-label="Front">
            <img class="navbar-brand-logo" src="{{ asset('assets/admin/svg/logos/logo-white.svg')}}" alt="Logo">
          </a>
          <!-- End Logo -->
        </div>

        <div class="navbar-nav-wrap-content-left">
          <!-- Search Form -->
          <div class="d-none d-lg-block">
            <form class="position-relative">
              <!-- Input Group -->
              <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="tio-search"></i>
                  </div>
                </div>
                <input type="search" class="js-form-search form-control" placeholder="Search in front" aria-label="Search in front" data-hs-form-search-options='{
                         "clearIcon": "#clearSearchResultsIcon",
                         "dropMenuElement": "#searchDropdownMenu",
                         "dropMenuOffset": 20,
                         "toggleIconOnFocus": true,
                         "activeClass": "focus"
                       }'>
                <a class="input-group-append" href="javascript:;">
                  <span class="input-group-text">
                    <i id="clearSearchResultsIcon" class="tio-clear" style="display: none;"></i>
                  </span>
                </a>
              </div>
              <!-- End Input Group -->

              <!-- Card Search Content -->
              <div id="searchDropdownMenu" class="hs-form-search-menu-content card dropdown-menu dropdown-card overflow-hidden">
                <!-- Body -->
                <div class="card-body-height py-3">
                  <small class="dropdown-header mb-n2">Recent searches</small>

                  <div class="dropdown-item bg-transparent text-wrap my-2">
                    <span class="h4 mr-1">
                      <a class="btn btn-xs btn-soft-dark btn-pill" href="index.html">
                        Gulp <i class="tio-search ml-1"></i>
                      </a>
                    </span>
                    <span class="h4">
                      <a class="btn btn-xs btn-soft-dark btn-pill" href="index.html">
                        Notification panel <i class="tio-search ml-1"></i>
                      </a>
                    </span>
                  </div>

                  <div class="dropdown-divider my-3"></div>

                  <small class="dropdown-header mb-n2">Tutorials</small>

                  <a class="dropdown-item my-2" href="index.html">
                    <div class="media align-items-center">
                      <span class="icon icon-xs icon-soft-dark icon-circle mr-2">
                        <i class="tio-tune"></i>
                      </span>

                      <div class="media-body text-truncate">
                        <span>How to set up Gulp?</span>
                      </div>
                    </div>
                  </a>

                  <a class="dropdown-item my-2" href="index.html">
                    <div class="media align-items-center">
                      <span class="icon icon-xs icon-soft-dark icon-circle mr-2">
                        <i class="tio-paint-bucket"></i>
                      </span>

                      <div class="media-body text-truncate">
                        <span>How to change theme color?</span>
                      </div>
                    </div>
                  </a>

                  <div class="dropdown-divider my-3"></div>

                  <small class="dropdown-header mb-n2">Members</small>

                  <a class="dropdown-item my-2" href="index.html">
                    <div class="media align-items-center">
                      <img class="avatar avatar-xs avatar-circle mr-2" src="{{ asset('assets/admin/img/160x160/img10.jpg ') }}" alt="Image Description">
                      <div class="media-body text-truncate">
                        <span>Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                      </div>
                    </div>
                  </a>

                  <a class="dropdown-item my-2" href="index.html">
                    <div class="media align-items-center">
                      <img class="avatar avatar-xs avatar-circle mr-2" src="{{ asset('assets/admin/img/160x160/img3.jpg ') }}" alt="Image Description">
                      <div class="media-body text-truncate">
                        <span>David Harrison</span>
                      </div>
                    </div>
                  </a>

                  <a class="dropdown-item my-2" href="index.html">
                    <div class="media align-items-center">
                      <div class="avatar avatar-xs avatar-soft-info avatar-circle mr-2">
                        <span class="avatar-initials">A</span>
                      </div>
                      <div class="media-body text-truncate">
                        <span>Anne Richard</span>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <a class="card-footer text-center" href="index.html">
                  See all results
                  <i class="tio-chevron-right"></i>
                </a>
                <!-- End Footer -->
              </div>
              <!-- End Card Search Content -->
            </form>
          </div>
          <!-- End Search Form -->
        </div>

        <!-- Secondary Content -->
        <div class="navbar-nav-wrap-content-right">
          <!-- Navbar -->
          <ul class="navbar-nav align-items-center flex-row">
            <li class="nav-item d-lg-none">
              <!-- Search Trigger -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-light rounded-circle" href="javascript:;" data-hs-unfold-options='{
                     "target": "#searchDropdown",
                     "type": "css-animation",
                     "animationIn": "fadeIn",
                     "hasOverlay": "rgba(46, 52, 81, 0.1)",
                     "closeBreakpoint": "md"
                   }'>
                  <i class="tio-search"></i>
                </a>
              </div>
              <!-- End Search Trigger -->
            </li>

            <li class="nav-item d-none d-sm-inline-block">
              <!-- Notification -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-light rounded-circle" href="javascript:;" data-hs-unfold-options='{
                     "target": "#notificationNavbarDropdown",
                     "type": "css-animation"
                   }'>
                  <i class="tio-notifications-on-outlined"></i>
                  <span class="btn-status btn-sm-status btn-status-danger"></span>
                </a>

                <div id="notificationNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">
                  <!-- Header -->
                  <div class="card-header">
                    <span class="card-title h4">Notifications</span>

                    <!-- Unfold -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                           "target": "#notificationSettingsOneDropdown",
                           "type": "css-animation"
                         }'>
                        <i class="tio-more-vertical"></i>
                      </a>
                      <div id="notificationSettingsOneDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                        <span class="dropdown-header">Settings</span>
                        <a class="dropdown-item" href="#">
                          <i class="tio-archive dropdown-item-icon"></i> Archive all
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-all-done dropdown-item-icon"></i> Mark all as read
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-toggle-off dropdown-item-icon"></i> Disable notifications
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-gift dropdown-item-icon"></i> What's new?
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Feedback</span>
                        <a class="dropdown-item" href="#">
                          <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                  <!-- End Header -->

                  <!-- Nav -->
                  <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="notificationNavOne-tab" data-toggle="tab" href="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="notificationNavTwo-tab" data-toggle="tab" href="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                    </li>
                  </ul>
                  <!-- End Nav -->

                  <!-- Body -->
                  <div class="card-body-height">
                    <!-- Tab Content -->
                    <div class="tab-content" id="notificationTabContent">
                      <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                        <ul class="list-group list-group-flush navbar-card-list-group">
                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck1" checked="">
                                    <label class="custom-control-label" for="notificationCheck1"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img3.jpg ')}}" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Brian Warner</span>
                                <p class="card-text font-size-sm">changed an issue from "In Progress" to <span class="badge badge-success">Review</span></p>
                              </div>
                              <small class="col-auto text-muted text-cap">2hr</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck2" checked="">
                                    <label class="custom-control-label" for="notificationCheck2"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                    <span class="avatar-initials">K</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Klara Hampton</span>
                                <p class="card-text font-size-sm">mentioned you in a comment</p>
                                <blockquote class="blockquote blockquote-sm">
                                  Nice work, love! You really nailed it. Keep it up!
                                </blockquote>
                              </div>
                              <small class="col-auto text-muted text-cap">10hr</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck4" checked="">
                                    <label class="custom-control-label" for="notificationCheck4"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img10.jpg ')}}" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Ruby Walter</span>
                                <p class="card-text font-size-sm">joined the Slack group HS Team</p>
                              </div>
                              <small class="col-auto text-muted text-cap">3dy</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck3">
                                    <label class="custom-control-label" for="notificationCheck3"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="{{ asset('assets/admin/svg/brands/google.svg ')}}" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">from Google</span>
                                <p class="card-text font-size-sm">Start using forms to capture the information of prospects visiting your Google website</p>
                              </div>
                              <small class="col-auto text-muted text-cap">17dy</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck5">
                                    <label class="custom-control-label" for="notificationCheck5"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img7.jpg ')}}" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Sara Villar</span>
                                <p class="card-text font-size-sm">completed <i class="tio-folder-bookmarked text-primary"></i> FD-7 task</p>
                              </div>
                              <small class="col-auto text-muted text-cap">2mn</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->
                        </ul>
                      </div>

                      <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                        <ul class="list-group list-group-flush navbar-card-list-group">
                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck7">
                                    <label class="custom-control-label" for="notificationCheck7"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                    <span class="avatar-initials">A</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Anne Richard</span>
                                <p class="card-text font-size-sm">accepted your invitation to join Notion</p>
                              </div>
                              <small class="col-auto text-muted text-cap">1dy</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck6">
                                    <label class="custom-control-label" for="notificationCheck6"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img5.jpg ')}}" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Finch Hoot</span>
                                <p class="card-text font-size-sm">left Slack group HS projects</p>
                              </div>
                              <small class="col-auto text-muted text-cap">3dy</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck8">
                                    <label class="custom-control-label" for="notificationCheck8"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-dark avatar-circle">
                                    <span class="avatar-initials">HS</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Htmlstream</span>
                                <p class="card-text font-size-sm">you earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>
                              </div>
                              <small class="col-auto text-muted text-cap">6dy</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck9">
                                    <label class="custom-control-label" for="notificationCheck9"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img8.jpg ')}}" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Linda Bates</span>
                                <p class="card-text font-size-sm">Accepted your connection</p>
                              </div>
                              <small class="col-auto text-muted text-cap">17dy</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item custom-checkbox-list-wrapper">
                            <div class="row">
                              <div class="col-auto position-static">
                                <div class="d-flex align-items-center">
                                  <div class="custom-control custom-checkbox custom-checkbox-list">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck10">
                                    <label class="custom-control-label" for="notificationCheck10"></label>
                                    <span class="custom-checkbox-list-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                    <span class="avatar-initials">L</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col ml-n3">
                                <span class="card-title h5">Lewis Clarke</span>
                                <p class="card-text font-size-sm">completed <i class="tio-folder-bookmarked text-primary"></i> FD-134 task</p>
                              </div>
                              <small class="col-auto text-muted text-cap">2mn</small>
                            </div>
                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->
                        </ul>
                      </div>
                    </div>
                    <!-- End Tab Content -->
                  </div>
                  <!-- End Body -->

                  <!-- Card Footer -->
                  <a class="card-footer text-center" href="#">
                    View all notifications
                    <i class="tio-chevron-right"></i>
                  </a>
                  <!-- End Card Footer -->
                </div>
              </div>
              <!-- End Notification -->
            </li>

            <li class="nav-item d-none d-sm-inline-block">
              <!-- Apps -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-light rounded-circle" href="javascript:;" data-hs-unfold-options='{
                     "target": "#appsNavbarDropdown",
                     "type": "css-animation"
                   }'>
                  <i class="tio-menu-vs-outlined"></i>
                </a>

                <div id="appsNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">
                  <!-- Header -->
                  <div class="card-header">
                    <span class="card-title h4">Web apps &amp; services</span>
                  </div>
                  <!-- End Header -->

                  <!-- Body -->
                  <div class="card-body card-body-height">
                    <!-- Nav -->
                    <div class="nav nav-pills flex-column">
                      <a class="nav-link" href="#">
                        <div class="media align-items-center">
                          <span class="mr-3">
                            <img class="avatar avatar-xs" src="{{ asset('assets/admin/svg/brands/atlassian.svg ')}}" alt="Image Description">
                          </span>
                          <div class="media-body text-truncate">
                            <span class="h5 mb-0">Atlassian</span>
                            <span class="d-block font-size-sm text-body">Security and control across Cloud</span>
                          </div>
                        </div>
                      </a>

                      <a class="nav-link" href="#">
                        <div class="media align-items-center">
                          <span class="mr-3">
                            <img class="avatar avatar-xs" src="{{ asset('assets/admin/svg/brands/slack.svg ')}}" alt="Image Description">
                          </span>
                          <div class="media-body text-truncate">
                            <span class="h5 mb-0">Slack <span class="badge badge-primary badge-pill text-uppercase ml-1">Try</span></span>
                            <span class="d-block font-size-sm text-body">Email collaboration software</span>
                          </div>
                        </div>
                      </a>

                      <a class="nav-link" href="#">
                        <div class="media align-items-center">
                          <span class="mr-3">
                            <img class="avatar avatar-xs" src="{{ asset('assets/admin/svg/brands/frontapp.svg  ')}}" alt="Image Description">
                          </span>
                          <div class="media-body text-truncate">
                            <span class="h5 mb-0">Frontapp</span>
                            <span class="d-block font-size-sm text-body">The inbox for teams</span>
                          </div>
                        </div>
                      </a>

                      <a class="nav-link" href="#">
                        <div class="media align-items-center">
                          <span class="mr-3">
                            <img class="avatar avatar-xs" src="{{ asset('assets/admin/svg/illustrations/review-rating-shield.svg  ')}}" alt="Image Description">
                          </span>
                          <div class="media-body text-truncate">
                            <span class="h5 mb-0">HS Support</span>
                            <span class="d-block font-size-sm text-body">Customer service and support</span>
                          </div>
                        </div>
                      </a>

                      <a class="nav-link" href="#">
                        <div class="media align-items-center">
                          <span class="avatar avatar-xs avatar-soft-dark mr-3">
                            <span class="avatar-initials"><i class="tio-apps"></i></span>
                          </span>
                          <div class="media-body text-truncate">
                            <span class="h5 mb-0">More Front products</span>
                            <span class="d-block font-size-sm text-body">Check out more HS products</span>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- End Nav -->
                  </div>
                  <!-- End Body -->

                  <!-- Footer -->
                  <a class="card-footer text-center" href="#">
                    View all apps
                    <i class="tio-chevron-right"></i>
                  </a>
                  <!-- End Footer -->
                </div>
              </div>
              <!-- End Apps -->
            </li>

            <li class="nav-item d-none d-sm-inline-block">
              <!-- Activity -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-light rounded-circle" href="javascript:;" data-hs-unfold-options='{
                    "target": "#activitySidebar",
                    "type": "css-animation",
                    "animationIn": "fadeInRight",
                    "animationOut": "fadeOutRight",
                    "hasOverlay": true,
                    "smartPositionOff": true
                   }'>
                  <i class="tio-voice-line"></i>
                </a>
              </div>
              <!-- Activity -->
            </li>

            <li class="nav-item">
              <!-- Account -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;" data-hs-unfold-options='{
                     "target": "#accountNavbarDropdown",
                     "type": "css-animation"
                   }'>
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img6.jpg  ')}}" alt="Image Description">
                    <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                  </div>
                </a>

                <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
                  <div class="dropdown-item-text">
                    <div class="media align-items-center">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="{{ asset('assets/admin/img/160x160/img6.jpg  ')}}" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="card-title h5">Mark Williams</span>
                        <span class="card-text">mark@example.com</span>
                      </div>
                    </div>
                  </div>

                  <div class="dropdown-divider"></div>

                  <!-- Unfold -->
                  <div class="hs-unfold w-100">
                    <a class="js-hs-unfold-invoker navbar-dropdown-submenu-item dropdown-item d-flex align-items-center" href="javascript:;" data-hs-unfold-options='{
                         "target": "#navSubmenuPagesAccountDropdown1",
                         "event": "hover"
                       }'>
                      <span class="text-truncate pr-2" title="Set status">Set status</span>
                      <i class="tio-chevron-right navbar-dropdown-submenu-item-invoker ml-auto"></i>
                    </a>

                    <div id="navSubmenuPagesAccountDropdown1" class="hs-unfold-content hs-unfold-has-submenu dropdown-unfold dropdown-menu navbar-dropdown-sub-menu">
                      <a class="dropdown-item" href="#">
                        <span class="legend-indicator bg-success mr-1"></span>
                        <span class="text-truncate pr-2" title="Available">Available</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <span class="legend-indicator bg-danger mr-1"></span>
                        <span class="text-truncate pr-2" title="Busy">Busy</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <span class="legend-indicator bg-warning mr-1"></span>
                        <span class="text-truncate pr-2" title="Away">Away</span>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <span class="text-truncate pr-2" title="Reset status">Reset status</span>
                      </a>
                    </div>
                  </div>
                  <!-- End Unfold -->

                  <a class="dropdown-item" href="#">
                    <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp; account</span>
                  </a>

                  <a class="dropdown-item" href="#">
                    <span class="text-truncate pr-2" title="Settings">Settings</span>
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <div class="media align-items-center">
                      <div class="avatar avatar-sm avatar-dark avatar-circle mr-2">
                        <span class="avatar-initials">HS</span>
                      </div>
                      <div class="media-body">
                        <span class="card-title h5">Htmlstream <span class="badge badge-primary badge-pill text-uppercase ml-1">PRO</span></span>
                        <span class="card-text">hs.example.com</span>
                      </div>
                    </div>
                  </a>

                  <div class="dropdown-divider"></div>

                  <!-- Unfold -->
                  <div class="hs-unfold w-100">
                    <a class="js-hs-unfold-invoker navbar-dropdown-submenu-item dropdown-item d-flex align-items-center" href="javascript:;" data-hs-unfold-options='{
                         "target": "#navSubmenuPagesAccountDropdown2",
                         "event": "hover"
                       }'>
                      <span class="text-truncate pr-2" title="Customization">Customization</span>
                      <i class="tio-chevron-right navbar-dropdown-submenu-item-invoker  ml-auto"></i>
                    </a>

                    <div id="navSubmenuPagesAccountDropdown2" class="hs-unfold-content hs-unfold-has-submenu dropdown-unfold dropdown-menu navbar-dropdown-sub-menu">
                      <a class="dropdown-item" href="#">
                        <span class="text-truncate pr-2" title="Invite people">Invite people</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <span class="text-truncate pr-2" title="Analytics">Analytics</span>
                        <i class="tio-open-in-new"></i>
                      </a>
                      <a class="dropdown-item" href="#">
                        <span class="text-truncate pr-2" title="Customize Front">Customize Front</span>
                        <i class="tio-open-in-new"></i>
                      </a>
                    </div>
                  </div>
                  <!-- End Unfold -->

                  <a class="dropdown-item" href="#">
                    <span class="text-truncate pr-2" title="Manage team">Manage team</span>
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <span class="text-truncate pr-2" title="Sign out">Sign out</span>
                  </a>
                </div>
              </div>
              <!-- End Account -->
            </li>

            <li class="nav-item">
              <!-- Toggle -->
              <button type="button" class="navbar-toggler btn btn-ghost-light rounded-circle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenu" data-toggle="collapse" data-target="#navbarNavMenu">
                <i class="tio-menu-hamburger"></i>
              </button>
              <!-- End Toggle -->
            </li>
          </ul>
          <!-- End Navbar -->
        </div>
        <!-- End Secondary Content -->
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <nav class="js-mega-menu flex-grow-1">
      <!-- Navbar -->
      <div class="navbar-nav-wrap-navbar collapse navbar-collapse" id="navbarNavMenu">
        <div class="navbar-body">
          <ul class="navbar-nav flex-grow-1">
            <!-- Dashboards -->
            <li class="hs-has-sub-menu navbar-nav-item">
              <a id="dashboardsDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkDashboardsDropdown">
                <i class="tio-home-vs-1-outlined nav-icon"></i> Dashboards
              </a>

              <!-- Dropdown -->
              <ul id="navLinkDashboardsDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="dashboardsDropdown" style="min-width: 16rem;">
                <li>
                  <a class="dropdown-item" href="index.html">
                    <span class="tio-circle nav-indicator-icon"></span> Default
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="dashboard-alternative.html">
                    <span class="tio-circle nav-indicator-icon"></span> Alternative
                  </a>
                </li>
              </ul>
              <!-- End Dropdown -->
            </li>
            <!-- End Dashboards -->

            <!-- Pages -->
            <li class="hs-has-sub-menu navbar-nav-item">
              <a id="pagesDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkPagesDropdown">
                <i class="tio-pages-outlined nav-icon"></i> Pages
              </a>

              <!-- Dropdown -->
              <ul id="navLinkPagesDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdown" style="min-width: 16rem;">
                <!-- Users -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesDropdownUsers" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownUsers">
                    <span class="tio-circle nav-indicator-icon"></span> Users
                  </a>

                  <ul id="navLinkPagesDropdownUsers" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownUsers" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="users.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Overview
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="users-leaderboard.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Leaderboard
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="users-add-user.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Add User <span class="badge badge-info badge-pill ml-1">Hot</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Users -->

                <!-- User Profile -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesDropdownUserProfile" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownUserProfile">
                    <span class="tio-circle nav-indicator-icon"></span> User Profile <span class="badge badge-primary badge-pill ml-2">5</span>
                  </a>

                  <ul id="navLinkPagesDropdownUserProfile" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownUserProfile" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="user-profile.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Profile
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="user-profile-teams.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Teams
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="user-profile-projects.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Projects
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="user-profile-connections.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Connections
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="user-profile-my-profile.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> My Profile
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End User Profile -->

                <!-- Account -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesDropdownAccount" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownAccount">
                    <span class="tio-circle nav-indicator-icon"></span> Account
                  </a>

                  <ul id="navLinkPagesDropdownAccount" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownAccount" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="account-settings.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Settings
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="account-billing.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Billing
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="account-invoice.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Invoice
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="account-api-keys.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> API Keys
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Account -->

                <!-- E-commerce -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesDropdownEcommerce" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownEcommerce">
                    <span class="tio-circle nav-indicator-icon"></span> E-commerce
                  </a>

                  <ul id="navLinkPagesDropdownEcommerce" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownEcommerce" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="ecommerce.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Overview
                      </a>
                    </li>

                    <li class="hs-has-sub-menu navbar-nav-item">
                      <a id="pagesDropdownEcommerceSublevel" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownEcommerceProducts">
                        <span class="tio-circle nav-indicator-icon"></span> E-commerce
                      </a>

                      <ul id="navLinkPagesDropdownEcommerceProducts" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownEcommerceSublevel" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="ecommerce-products.html">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Products
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="ecommerce-product-details.html">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Product Details
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="ecommerce-add-product.html">
                            <span class="tio-circle nav-indicator-icon"></span> Add Product
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="hs-has-sub-menu navbar-nav-item">
                      <a id="pagesDropdownEcommerceSublevel" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownEcommerceOrders">
                        <span class="tio-circle nav-indicator-icon"></span> Orders
                      </a>

                      <ul id="navLinkPagesDropdownEcommerceOrders" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownEcommerceSublevel" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="ecommerce-orders.html">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Orders
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="ecommerce-order-details.html">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Order Details
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="hs-has-sub-menu navbar-nav-item">
                      <a id="pagesDropdownEcommerceSublevel" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownEcommerceCustomers">
                        <span class="tio-circle nav-indicator-icon"></span> Customers
                      </a>

                      <ul id="navLinkPagesDropdownEcommerceCustomers" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownEcommerceSublevel" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="ecommerce-customers.html">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Customers
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="ecommerce-customer-details.html">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Customer Details
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="ecommerce-add-customers.html">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Add Customers
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li>
                      <a class="dropdown-item" href="ecommerce-manage-reviews.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Manage Reviews
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="ecommerce-checkout.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Checkout
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End E-commerce -->

                <!-- Projects -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesDropdownProjects" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownProjects">
                    <span class="tio-circle nav-indicator-icon"></span> Projects
                  </a>

                  <ul id="navLinkPagesDropdownProjects" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownProjects" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="projects.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Overview
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="projects-timeline.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Timeline
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Projects -->

                <!-- Project -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesDropdownProject" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownProject">
                    <span class="tio-circle nav-indicator-icon"></span> Project
                  </a>

                  <ul id="navLinkPagesDropdownProject" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownProject" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="project.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Overview
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="project-files.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Files <span class="badge badge-info badge-pill ml-1">Hot</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="project-activity.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Activity
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="project-teams.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Teams
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="project-settings.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Settings
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Project -->

                <li class="navbar-nav-item">
                  <a class="dropdown-item" href="referrals.html">
                    <span class="tio-circle nav-indicator-icon"></span> Referrals
                  </a>
                </li>

                <li class="dropdown-divider"></li>

                <!-- Signin -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesDropdownSignin" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownSignin">
                    <span class="tio-circle nav-indicator-icon"></span> Sign In
                  </a>

                  <ul id="navLinkPagesDropdownSignin" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownSignin" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="authentication-signin-basic.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Basic
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="authentication-signin-cover.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Cover
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Signin -->

                <!-- Signup -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesDropdownSignup" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownSignup">
                    <span class="tio-circle nav-indicator-icon"></span> Sign Up
                  </a>

                  <ul id="navLinkPagesDropdownSignup" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownSignup" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="authentication-signup-basic.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Basic
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="authentication-signup-cover.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Cover
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Signup -->

                <!-- Reset Password -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesDropdownResetPassword" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownResetPassword">
                    <span class="tio-circle nav-indicator-icon"></span> Reset Password
                  </a>

                  <ul id="navLinkPagesDropdownResetPassword" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownResetPassword" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="authentication-reset-password-basic.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Basic
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="authentication-reset-password-cover.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Cover
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Reset Password -->

                <!-- Email Verification -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesDropdownEmailVerification" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdownEmailVerification">
                    <span class="tio-circle nav-indicator-icon"></span> Email Verification
                  </a>

                  <ul id="navLinkPagesDropdownEmailVerification" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdownEmailVerification" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="authentication-email-verification-basic.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Basic
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="authentication-email-verification-cover.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Cover
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Email Verification -->

                <!-- 2-step Verification -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesDropdown2StepVerification" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkPagesDropdown2StepVerification">
                    <span class="tio-circle nav-indicator-icon"></span> 2-step Verification
                  </a>

                  <ul id="navLinkPagesDropdown2StepVerification" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="pagesDropdown2StepVerification" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="authentication-two-step-verification-basic.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Basic
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="authentication-two-step-verification-cover.html">
                        <span class="tio-circle-outlined nav-indicator-icon"></span> Cover
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End 2-step Verification -->

                <li class="dropdown-divider"></li>

                <!-- Welcome Page -->
                <li class="navbar-nav-item">
                  <a class="dropdown-item" href="error-404.html">
                    <span class="tio-circle nav-indicator-icon"></span> Error 404
                  </a>
                </li>
                <!-- ENd Welcome Page -->

                <!-- Welcome Page -->
                <li class="navbar-nav-item">
                  <a class="dropdown-item" href="error-500.html">
                    <span class="tio-circle nav-indicator-icon"></span> Error 500
                  </a>
                </li>
                <!-- ENd Welcome Page -->

                <li class="dropdown-divider"></li>

                <!-- Welcome Page -->
                <li class="navbar-nav-item">
                  <a class="dropdown-item" href="welcome-page.html">
                    <span class="tio-circle nav-indicator-icon"></span> Welcome Page
                  </a>
                </li>
                <!-- ENd Welcome Page -->
              </ul>
              <!-- End Dropdown -->
            </li>
            <!-- End Pages -->

            <!-- Documentation -->
            <li class="hs-has-sub-menu navbar-nav-item">
              <a id="appsNavDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkappsNavDropdown">
                <i class="tio-apps nav-icon"></i> Apps
              </a>

              <!-- Dropdown -->
              <ul id="navLinkappsNavDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="appsNavDropdown" style="min-width: 16rem;">
                <li>
                  <a class="dropdown-item" href="apps-kanban.html">
                    <span class="tio-circle nav-indicator-icon"></span> Kanban
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="apps-calendar.html">
                    <span class="tio-circle nav-indicator-icon"></span> Calendar <span class="badge badge-info badge-pill ml-1">New</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="apps-invoice-generator.html">
                    <span class="tio-circle nav-indicator-icon"></span> Invoice Generator
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="apps-file-manager.html">
                    <span class="tio-circle nav-indicator-icon"></span> File Manager
                  </a>
                </li>
              </ul>
              <!-- End Dropdown -->
            </li>
            <!-- End Documentation -->

            <!-- Layouts -->
            <li class="navbar-nav-item">
              <a class="navbar-nav-link nav-link" href="layouts/layouts.html">
                <i class="tio-dashboard-vs-outlined nav-icon"></i> Layouts
              </a>
            </li>
            <!-- End Layouts -->

            <!-- Documentation -->
            <li class="hs-has-sub-menu navbar-nav-item">
              <a id="documentationDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkDocumentationDropdown">
                <i class="tio-book-opened nav-icon"></i> Docs
              </a>

              <!-- Dropdown -->
              <ul id="navLinkDocumentationDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="documentationDropdown" style="min-width: 16rem;">
                <li>
                  <a class="dropdown-item" href="documentation/index.html">
                    <span class="tio-circle nav-indicator-icon"></span> Documentation <span class="badge badge-primary badge-pill ml-1">v1.0</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="documentation/alerts.html">
                    <span class="tio-circle nav-indicator-icon"></span> Components
                  </a>
                </li>
              </ul>
              <!-- End Dropdown -->
            </li>
            <!-- End Documentation -->
          </ul>

        </div>
      </div>
      <!-- End Navbar -->
    </nav>
  </div>
</header></div>
      <div id="sidebarMain" class="d-none"><aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
  <div class="navbar-vertical-container">
    <div class="navbar-vertical-footer-offset">
      <div class="navbar-brand-wrapper justify-content-between">
        <!-- Logo -->
        
        
          <a class="navbar-brand" href="index.html" aria-label="Front">
            <img class="navbar-brand-logo" src="{{ asset('assets/admin/svg/logos/logo.svg') }}" alt="Logo">
            <img class="navbar-brand-logo-mini" src="{{ asset('assets/admin/svg/logos/logo-short.svg') }}" alt="Logo">
          </a>
        
        <!-- End Logo -->

        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
          <i class="tio-clear tio-lg"></i>
        </button>
        <!-- End Navbar Vertical Toggle -->
      </div>

      <!-- Content -->
      <div class="navbar-vertical-content">
        <ul class="navbar-nav navbar-nav-lg nav-tabs">
          <!-- Dashboards -->
          <li class="navbar-vertical-aside-has-menu">
            <a class="js-navbar-vertical-aside-menu-link nav-link  " href="{{ route('admin.dashboard') }}" title="Dashboards">
              <i class="tio-home-vs-1-outlined nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboards</span>
            </a>
          </li>
          <!-- End Dashboards -->

          <li class="nav-item">
            <small class="nav-subtitle" title="Pages"></small>
            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
          </li>

          <!-- Pages -->
          <li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Pages">
              <i class="tio-pages-outlined nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Quản trị</span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="navbar-vertical-aside-has-menu ">
                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Các khoá học">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Các khoá học</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.courses.index') }}" title="Overview">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Danh sách khoá học</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.courses.draft.index') }}" title="Leaderboard">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Các khoá học chờ duyệt</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="navbar-vertical-aside-has-menu ">
                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="User Profile">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Người dùng</span>
                </a>

                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.students.index') }}" title="Profile">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Danh sách học viên</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.teachers.index') }}" title="Teams">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Danh sách giảng viên</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.admins.index') }}" title="Projects">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Danh sách quản trị viên</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.user.create') }}" title="Connections">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Thêm người dùng</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="navbar-vertical-aside-has-menu ">
                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Account">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Hoá đơn</span>
                </a>

                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <li class="nav-item">
                    <a class="nav-link " href="account-settings.html" title="Settings">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Danh sách hoá đơn</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="account-billing.html" title="Billing">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Billing</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="account-invoice.html" title="Invoice">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Invoice</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="account-api-keys.html" title="API Keys">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">API Keys</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="navbar-vertical-aside-has-menu ">
                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="E-commerce">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">E-commerce</span>
                </a>

                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <li class="nav-item">
                    <a class="nav-link " href="ecommerce.html" title="Overview">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Overview</span>
                    </a>
                  </li>

                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Products">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Products</span>
                    </a>

                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="ecommerce-products.html" title="Products">
                          <span class="tio-circle nav-indicator-icon"></span>
                          <span class="text-truncate">Products</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="ecommerce-product-details.html" title="Product Details">
                          <span class="tio-circle nav-indicator-icon"></span>
                          <span class="text-truncate">Product Details</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="ecommerce-add-product.html" title="Add Product">
                          <span class="tio-circle nav-indicator-icon"></span>
                          <span class="text-truncate">Add Product</span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Orders">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Orders</span>
                    </a>

                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="ecommerce-orders.html" title="Orders">
                          <span class="tio-circle nav-indicator-icon"></span>
                          <span class="text-truncate">Orders</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="ecommerce-order-details.html" title="Order Details">
                          <span class="tio-circle nav-indicator-icon"></span>
                          <span class="text-truncate">Order Details</span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Customers">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Customers</span>
                    </a>

                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="ecommerce-customers.html" title="Customers">
                          <span class="tio-circle nav-indicator-icon"></span>
                          <span class="text-truncate">Customers</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="ecommerce-customer-details.html" title="Customer Details">
                          <span class="tio-circle nav-indicator-icon"></span>
                          <span class="text-truncate">Customer Details</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="ecommerce-add-customers.html" title="Add Customers">
                          <span class="tio-circle nav-indicator-icon"></span>
                          <span class="text-truncate">Add Customers</span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link " href="ecommerce-manage-reviews.html" title="Manage Reviews">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Manage Reviews</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="ecommerce-checkout.html" title="Checkout">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Checkout</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="navbar-vertical-aside-has-menu ">
                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Projects">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Projects</span>
                </a>

                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <li class="nav-item">
                    <a class="nav-link " href="projects.html" title="Overview">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Overview</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="projects-timeline.html" title="Timeline">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Timeline</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="navbar-vertical-aside-has-menu ">
                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Project">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Project</span>
                </a>

                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <li class="nav-item">
                    <a class="nav-link " href="project.html" title="Overview">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Overview</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="project-files.html" title="Files">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Files <span class="badge badge-info badge-pill ml-1">Hot</span></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="project-activity.html" title="Activity">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Activity</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="project-teams.html" title="Teams">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Teams</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="project-settings.html" title="Settings">
                      <span class="tio-circle-outlined nav-indicator-icon"></span>
                      <span class="text-truncate">Settings</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="referrals.html" title="Referrals">
                  <span class="tio-circle nav-indicator-icon"></span>
                  <span class="text-truncate">Referrals</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- End Pages -->



          <!-- Front Builder -->
          <li class="nav-item nav-footer-item ">
            <a class="d-none d-md-flex js-hs-unfold-invoker nav-link nav-link-toggle" href="javascript:;" data-hs-unfold-options='{
                 "target": "#styleSwitcherDropdown",
                 "type": "css-animation",
                 "animationIn": "fadeInRight",
                 "animationOut": "fadeOutRight",
                 "hasOverlay": true,
                 "smartPositionOff": true
               }'>
              <i class="tio-tune nav-icon"></i>
            </a>
            <a class="d-flex d-md-none nav-link nav-link-toggle" href="javascript:;">
              <i class="tio-tune nav-icon"></i>
            </a>
          </li>
          <!-- End Front Builder -->

          <!-- Help -->
          <li class="navbar-vertical-aside-has-menu nav-footer-item ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Help">
              <i class="tio-home-vs-1-outlined nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Help</span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link" href="#" title="Resources &amp; tutorials">
                  <i class="tio-book-outlined dropdown-item-icon"></i> Resources &amp; tutorials
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Keyboard shortcuts">
                  <i class="tio-command-key dropdown-item-icon"></i> Keyboard shortcuts
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Connect other apps">
                  <i class="tio-alt dropdown-item-icon"></i> Connect other apps
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="What's new?">
                  <i class="tio-gift dropdown-item-icon"></i> What's new?
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Contact support">
                  <i class="tio-chat-outlined dropdown-item-icon"></i> Contact support
                </a>
              </li>
            </ul>
          </li>
          <!-- End Help -->

          <!-- Language -->
          <li class="navbar-vertical-aside-has-menu nav-footer-item ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Language">
              <img class="avatar avatar-xss avatar-circle" src="assets\vendor\flag-icon-css\flags\1x1\us.svg" alt="United States Flag">
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Language</span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link" href="#" title="English (US)">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="assets\vendor\flag-icon-css\flags\1x1\us.svg" alt="Flag">
                  English (US)
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="English (UK)">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="assets\vendor\flag-icon-css\flags\1x1\gb.svg" alt="Flag">
                  English (UK)
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Deutsch">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="assets\vendor\flag-icon-css\flags\1x1\de.svg" alt="Flag">
                  Deutsch
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Dansk">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="assets\vendor\flag-icon-css\flags\1x1\dk.svg" alt="Flag">
                  Dansk
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Italiano">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="assets\vendor\flag-icon-css\flags\1x1\it.svg" alt="Flag">
                  Italiano
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="中文 (繁體)">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="assets\vendor\flag-icon-css\flags\1x1\cn.svg" alt="Flag">
                  中文 (繁體)
                </a>
              </li>
            </ul>
          </li>
          <!-- End Language -->
        </ul>
      </div>
   
      <!-- End Content -->

      <!-- Footer -->
      <div class="navbar-vertical-footer">
        <ul class="navbar-vertical-footer-list">
          <li class="navbar-vertical-footer-list-item">
            <!-- Unfold -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                  "target": "#styleSwitcherDropdown",
                  "type": "css-animation",
                  "animationIn": "fadeInRight",
                  "animationOut": "fadeOutRight",
                  "hasOverlay": true,
                  "smartPositionOff": true
                 }'>
                <i class="tio-tune"></i>
              </a>
            </div>
            <!-- End Unfold -->
          </li>

          <li class="navbar-vertical-footer-list-item">
            <!-- Other Links -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                  "target": "#otherLinksDropdown",
                  "type": "css-animation",
                  "animationIn": "slideInDown",
                  "hideOnScroll": true
                 }'>
                <i class="tio-help-outlined"></i>
              </a>

              <div id="otherLinksDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu navbar-vertical-footer-dropdown">
                <span class="dropdown-header">Help</span>
                <a class="dropdown-item" href="#">
                  <i class="tio-book-outlined dropdown-item-icon"></i>
                  <span class="text-truncate pr-2" title="Resources &amp; tutorials">Resources &amp; tutorials</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-command-key dropdown-item-icon"></i>
                  <span class="text-truncate pr-2" title="Keyboard shortcuts">Keyboard shortcuts</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-alt dropdown-item-icon"></i>
                  <span class="text-truncate pr-2" title="Connect other apps">Connect other apps</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-gift dropdown-item-icon"></i>
                  <span class="text-truncate pr-2" title="What's new?">What's new?</span>
                </a>
                <div class="dropdown-divider"></div>
                <span class="dropdown-header">Contacts</span>
                <a class="dropdown-item" href="#">
                  <i class="tio-chat-outlined dropdown-item-icon"></i>
                  <span class="text-truncate pr-2" title="Contact support">Contact support</span>
                </a>
              </div>
            </div>
            <!-- End Other Links -->
          </li>

          <li class="navbar-vertical-footer-list-item">
            <!-- Language -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                  "target": "#languageDropdown",
                  "type": "css-animation",
                  "animationIn": "slideInDown",
                  "hideOnScroll": true
                 }'>
                <img class="avatar avatar-xss avatar-circle" src="{{ asset('assets/admin/vendor/flag-icon-css/flags/1x1/us.svg ') }}" alt="United States Flag">
              </a>

              <div id="languageDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu navbar-vertical-footer-dropdown">
                <span class="dropdown-header">Select language</span>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset('assets/admin/vendor/flag-icon-css/flags/1x1/us.svg ') }}" alt="Flag">
                  <span class="text-truncate pr-2" title="English">English (US)</span>
                </a>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset('assets/admin/vendor/flag-icon-css/flags/1x1/gb.svg ') }}" alt="Flag">
                  <span class="text-truncate pr-2" title="English">English (UK)</span>
                </a>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset('assets/admin/vendor/flag-icon-css/flags/1x1/de.svg ') }}" alt="Flag">
                  <span class="text-truncate pr-2" title="Deutsch">Deutsch</span>
                </a>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset('assets/admin/vendor/flag-icon-css/flags/1x1/dk.svg ') }}" alt="Flag">
                  <span class="text-truncate pr-2" title="Dansk">Dansk</span>
                </a>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset('assets/admin/vendor/flag-icon-css/flags/1x1/it.svg ') }}" alt="Flag">
                  <span class="text-truncate pr-2" title="Italiano">Italiano</span>
                </a>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset('assets/admin/vendor/flag-icon-css/flags/1x1/cn.svg ') }}" alt="Flag">
                  <span class="text-truncate pr-2" title="中文 (繁體)">中文 (繁體)</span>
                </a>
              </div>
            </div>
            <!-- End Language -->
          </li>
        </ul>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</aside></div>
      <div id="sidebarCompact" class="d-none"><aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
  <div class="navbar-vertical-container">
    <div class="navbar-brand d-flex justify-content-center">
      <!-- Logo -->
      
      
        <a class="navbar-brand" href="index.html" aria-label="Front">
          <img class="navbar-brand-logo-short" src="{{ asset('assets/admin/svg/logos/logo-short.svg ') }}" alt="Logo">
        </a>
      
      <!-- End Logo -->
    </div>

    <!-- Content -->
    <div class="navbar-vertical-content">
      <ul class="navbar-nav nav-compact">
        <!-- Dashboards -->
        <li class="navbar-vertical-aside-has-menu nav-item">
          <a class="js-navbar-vertical-aside-menu-link nav-link " href="javascript:;" title="Dashboards">
            <i class="tio-home-vs-1-outlined nav-icon"></i>
            <span class="nav-compact-title text-truncate">Dashboards</span>
          </a>

          <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
            <li class="nav-item">
              <a class="nav-link " href="index.html" title="Default">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Default</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="dashboard-alternative.html" title="Alternative">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Alternative</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Dashboards -->

        <!-- Pages -->
        <li class="navbar-vertical-aside-has-menu nav-item">
          <a class="js-navbar-vertical-aside-menu-link nav-link " href="javascript:;" title="Pages">
            <i class="tio-pages-outlined nav-icon"></i>
            <span class="nav-compact-title text-truncate">Pages</span>
          </a>

          <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
            <li class="navbar-vertical-aside-has-menu ">
              <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Users">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Users</span>
              </a>

              <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                <li class="nav-item">
                  <a class="nav-link " href="users.html" title="Overview">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Overview</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="users-leaderboard.html" title="Leaderboard">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Leaderboard</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="users-add-user.html" title="Add User">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Add User <span class="badge badge-info badge-pill ml-1">Hot</span></span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="navbar-vertical-aside-has-menu ">
              <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="User Profile">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">User Profile <span class="badge badge-primary badge-pill ml-1">5</span></span>
              </a>

              <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                <li class="nav-item">
                  <a class="nav-link " href="user-profile.html" title="Profile">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Profile</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="user-profile-teams.html" title="Teams">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Teams</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="user-profile-projects.html" title="Projects">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Projects</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="user-profile-connections.html" title="Connections">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Connections</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="user-profile-my-profile.html" title="My Profile">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">My Profile</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="navbar-vertical-aside-has-menu ">
              <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Account">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Account</span>
              </a>

              <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                <li class="nav-item">
                  <a class="nav-link " href="account-settings.html" title="Settings">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Settings</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="account-billing.html" title="Billing">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Billing</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="account-invoice.html" title="Invoice">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Invoice</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="account-api-keys.html" title="API Keys">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">API Keys</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="navbar-vertical-aside-has-menu ">
              <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="E-commerce">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">E-commerce</span>
              </a>

              <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                <li class="nav-item">
                  <a class="nav-link " href="ecommerce.html" title="Overview">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Overview</span>
                  </a>
                </li>

                <li class="navbar-vertical-aside-has-menu ">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Products">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Products</span>
                  </a>

                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="nav-item">
                      <a class="nav-link " href="ecommerce-products.html" title="Products">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Products</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="ecommerce-product-details.html" title="Product Details">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Product Details</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="ecommerce-add-product.html" title="Add Product">
                        <span class="tio-circle-outlined nav-indicator-icon"></span>
                        <span class="text-truncate">Add Product</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="navbar-vertical-aside-has-menu ">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Orders">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Orders</span>
                  </a>

                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="nav-item">
                      <a class="nav-link " href="ecommerce-orders.html" title="Orders">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Orders</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="ecommerce-order-details.html" title="Order Details">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Order Details</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="navbar-vertical-aside-has-menu ">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Customers">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Customers</span>
                  </a>

                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="nav-item">
                      <a class="nav-link " href="ecommerce-customers.html" title="Customers">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Customers</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="ecommerce-customer-details.html" title="Customer Details">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Customer Details</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="ecommerce-add-customers.html" title="Add Customers">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Add Customers</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a class="nav-link " href="ecommerce-manage-reviews.html" title="Manage Reviews">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Manage Reviews</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="ecommerce-checkout.html" title="Checkout">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Checkout</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="navbar-vertical-aside-has-menu ">
              <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Projects">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Projects</span>
              </a>

              <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                <li class="nav-item">
                  <a class="nav-link " href="projects.html" title="Overview">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Overview</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="projects-timeline.html" title="Timeline">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Timeline</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="navbar-vertical-aside-has-menu ">
              <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Project">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Project</span>
              </a>

              <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                <li class="nav-item">
                  <a class="nav-link " href="project.html" title="Overview">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Overview</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="project-files.html" title="Files">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Files <span class="badge badge-info badge-pill ml-1">Hot</span></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="project-activity.html" title="Activity">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Activity</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="project-teams.html" title="Teams">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Teams</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="project-settings.html" title="Settings">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Settings</span>
                  </a>
                </li>
              </ul>
            </li>
    
            <li class="nav-item">
              <a class="nav-link " href="referrals.html" title="Referrals">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Referrals</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Pages -->

        <!-- Apps -->
        <li class="navbar-vertical-aside-has-menu nav-item">
          <a class="js-navbar-vertical-aside-menu-link nav-link " href="javascript:;" title="Apps">
            <i class="tio-apps nav-icon"></i>
            <span class="nav-compact-title text-truncate">Apps</span>
          </a>

          <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
            <li class="nav-item">
              <a class="nav-link " href="apps-kanban.html" title="Kanban">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Kanban</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="apps-calendar.html" title="Calendar">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Calendar <span class="badge badge-info badge-pill ml-1">New</span></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="apps-invoice-generator.html" title="Invoice Generator">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Invoice Generator</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="apps-file-manager.html" title="File Manager">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">File Manager</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Apps -->

        <!-- Authentication -->
        <li class="navbar-vertical-aside-has-menu nav-item">
          <a class="js-navbar-vertical-aside-menu-link nav-link " href="javascript:;" title="Authentication">
            <i class="tio-lock-outlined nav-icon"></i>
            <span class="nav-compact-title text-truncate">Authentication</span>
          </a>

          <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
            <li class="navbar-vertical-aside-has-menu nav-item">
              <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Sign In">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Sign In</span>
              </a>

              <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                <li class="nav-item">
                  <a class="nav-link " href="authentication-signin-basic.html" title="Basic">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Basic</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="authentication-signin-cover.html" title="Cover">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Cover</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="navbar-vertical-aside-has-menu nav-item">
              <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Sign Up">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Sign Up</span>
              </a>

              <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                <li class="nav-item">
                  <a class="nav-link " href="authentication-signup-basic.html" title="Basic">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Basic</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="authentication-signup-cover.html" title="Cover">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Cover</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="navbar-vertical-aside-has-menu nav-item">
              <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Reset Password">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Reset Password</span>
              </a>

              <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                <li class="nav-item">
                  <a class="nav-link " href="authentication-reset-password-basic.html" title="Basic">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Basic</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="authentication-reset-password-cover.html" title="Cover">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Cover</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="navbar-vertical-aside-has-menu nav-item">
              <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Email Verification">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Email Verification</span>
              </a>

              <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                <li class="nav-item">
                  <a class="nav-link " href="authentication-email-verification-basic.html" title="Basic">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Basic</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="authentication-email-verification-cover.html" title="Cover">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Cover</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="navbar-vertical-aside-has-menu nav-item">
              <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="2-step Verification">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">2-step Verification</span>
              </a>

              <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                <li class="nav-item">
                  <a class="nav-link " href="authentication-two-step-verification-basic.html" title="Basic">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Basic</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="authentication-two-step-verification-cover.html" title="Cover">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Cover</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="javascript:;" data-toggle="modal" data-target="#welcomeMessageModal" title="Welcome Message">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Welcome Message</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="error-404.html" title="Error 404">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Error 404</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="error-500.html" title="Error 500">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Error 500</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Authentication -->

        <li class="nav-item">
          <a class="nav-link " href="welcome-page.html" title="Welcome Page">
            <i class="tio-visible-outlined nav-icon"></i>
            <span class="nav-compact-title text-truncate">Welcome Page</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="layouts/layouts.html" title="Layouts">
            <i class="tio-dashboard-vs-outlined nav-icon"></i>
            <span class="nav-compact-title text-truncate">Layouts</span>
          </a>
        </li>

        <li class="nav-item ">
          <a class="nav-link" href="documentation/index.html" title="Documentation">
            <i class="tio-book-opened nav-icon"></i>
            <span class="nav-compact-title text-truncate">Documentation</span>
            <span class="badge badge-primary badge-pill">v1.1</span>
          </a>
        </li>

        <li class="nav-item ">
          <a class="nav-link" href="documentation/typography.html" title="Components">
            <i class="tio-layers-outlined nav-icon"></i>
            <span class="nav-compact-title text-truncate">Components</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- End Content -->
  </div>
</aside></div>

      <script src="{{ asset('assets/admin/js/demo.js ') }}"></script>
    
    <!-- END ONLY DEV -->

    <!-- Search Form -->
    <div id="searchDropdown" class="hs-unfold-content dropdown-unfold search-fullwidth d-md-none">
      <form class="input-group input-group-merge input-group-borderless">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="tio-search"></i>
          </div>
        </div>

        <input class="form-control rounded-0" type="search" placeholder="Search in front" aria-label="Search in front">

        <div class="input-group-append">
          <div class="input-group-text">
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker" href="javascript:;" data-hs-unfold-options='{
                   "target": "#searchDropdown",
                   "type": "css-animation",
                   "animationIn": "fadeIn",
                   "hasOverlay": "rgba(46, 52, 81, 0.1)",
                   "closeBreakpoint": "md"
                 }'>
                <i class="tio-clear tio-lg"></i>
              </a>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- End Search Form -->

    <!-- ========== HEADER ========== -->
    

    

    
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->
    

    
    <!-- End Navbar Vertical -->

    <main id="content" role="main" class="main">
      <!-- Content -->
@yield('content')



      <!-- End Content -->

      <!-- Footer -->
      
        <div class="footer">
          <div class="row justify-content-between align-items-center">
            <div class="col">
              <p class="font-size-sm mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2020 Htmlstream.</span></p>
            </div>
            <div class="col-auto">
              <div class="d-flex justify-content-end">
                <!-- List Dot -->
                <ul class="list-inline list-separator">
                  <li class="list-inline-item">
                    <a class="list-separator-link" href="#">FAQ</a>
                  </li>

                  <li class="list-inline-item">
                    <a class="list-separator-link" href="#">License</a>
                  </li>

                  <li class="list-inline-item">
                    <!-- Keyboard Shortcuts Toggle -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                              "target": "#keyboardShortcutsSidebar",
                              "type": "css-animation",
                              "animationIn": "fadeInRight",
                              "animationOut": "fadeOutRight",
                              "hasOverlay": true,
                              "smartPositionOff": true
                             }'>
                        <i class="tio-command-key"></i>
                      </a>
                    </div>
                    <!-- End Keyboard Shortcuts Toggle -->
                  </li>
                </ul>
                <!-- End List Dot -->
              </div>
            </div>
          </div>
        </div>
      

      
      <!-- End Footer -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <div id="keyboardShortcutsSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
      <div class="card card-lg sidebar-card">
        <div class="card-header">
          <h4 class="card-header-title">Keyboard shortcuts</h4>

          <!-- Toggle Button -->
          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;" data-hs-unfold-options='{
                "target": "#keyboardShortcutsSidebar",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'>
            <i class="tio-clear tio-lg"></i>
          </a>
          <!-- End Toggle Button -->
        </div>

        <!-- Body -->
        <div class="card-body sidebar-body sidebar-scrollbar">
          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Formatting</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span class="font-weight-bold">Bold</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">b</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <em>italic</em>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">i</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <u>Underline</u>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">u</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <s>Strikethrough</s>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span class="small">Small text</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <mark>Highlight</mark>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">e</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Insert</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Mention person <a href="#">(@Brian)</a></span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">@</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Link to doc <a href="#">(+Meeting notes)</a></span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">+</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <a href="#">#hashtag</a>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">#hashtag</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Date</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/date</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                  <kbd class="d-inline-block mb-1">/datetime</kbd>
                  <kbd class="d-inline-block mb-1">/datetime</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Time</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/time</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Note box</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/note</kbd>
                  <kbd class="d-inline-block mb-1">Enter</kbd>
                  <kbd class="d-inline-block mb-1">/note red</kbd>
                  <kbd class="d-inline-block mb-1">/note red</kbd>
                  <kbd class="d-inline-block mb-1">Enter</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Editing</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find and replace</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">r</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find next</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">n</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find previous</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">p</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Indent</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Tab</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Un-indent</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Tab</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Move line up</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-upward-outlined"></i></kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Move line down</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-downward-outlined font-size-sm"></i></kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Add a comment</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">m</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Undo</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">z</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Redo</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">y</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
            <div class="list-group-item">
              <h5 class="mb-1">Application</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Create new doc</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">n</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Present</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">p</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Share</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Search docs</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">o</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Keyboard shortcuts</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">/</kbd>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Body -->
      </div>
    </div>
    <!-- End Keyboard Shortcuts -->

    <!-- Activity -->
    <div id="activitySidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
      <div class="card card-lg sidebar-card">
        <div class="card-header">
          <h4 class="card-header-title">Activity stream</h4>

          <!-- Toggle Button -->
          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;" data-hs-unfold-options='{
              "target": "#activitySidebar",
              "type": "css-animation",
              "animationIn": "fadeInRight",
              "animationOut": "fadeOutRight",
              "hasOverlay": true,
              "smartPositionOff": true
             }'>
            <i class="tio-clear tio-lg"></i>
          </a>
          <!-- End Toggle Button -->
        </div>

        <!-- Body -->
        <div class="card-body sidebar-body sidebar-scrollbar">
          <!-- Step -->
          <ul class="step step-icon-sm step-avatar-sm">
            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="{{ asset('assets/admin/img/160x160/img9.jpg ') }}" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Iana Robinson</h5>

                  <p class="font-size-sm mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fd-7</a></p>

                  <ul class="list-group list-group-sm">
                    <!-- List Item -->
                    <li class="list-group-item list-group-item-light">
                      <div class="row gx-1">
                        <div class="col-6">
                          <div class="media">
                              <span class="mt-1 mr-2">
                                <img class="avatar avatar-xs" src="{{ asset('assets/admin/svg/brands/excel.svg ') }}" alt="Image Description">
                              </span>
                            <div class="media-body text-truncate">
                              <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                              <small class="d-block text-muted">12kb</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="media">
                              <span class="mt-1 mr-2">
                                <img class="avatar avatar-xs" src="{{ asset('assets/admin/svg/brands/word.svg ') }}" alt="Image Description">
                              </span>
                            <div class="media-body text-truncate">
                              <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                              <small class="d-block text-muted">4kb</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- End List Item -->
                  </ul>

                  <small class="text-muted text-uppercase">Now</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <span class="step-icon step-icon-soft-dark">B</span>

                <div class="step-content">
                  <h5 class="mb-1">Bob Dean</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-6</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                  <small class="text-muted text-uppercase">Today</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="{{ asset('assets/admin/img/160x160/img3.jpg ') }}" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="h5 mb-1">Crane</h5>

                  <p class="font-size-sm mb-1">Added 5 card to <a href="#">Payments</a></p>

                  <ul class="list-group list-group-sm">
                    <li class="list-group-item list-group-item-light">
                      <div class="row gx-1">
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="{{ asset('assets/admin/svg/illustrations/card-1.svg ') }}" alt="Image Description">
                        </div>
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="{{ asset('assets/admin/svg/illustrations/card-2.svg ') }}" alt="Image Description">
                        </div>
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="{{ asset('assets/admin/svg/illustrations/card-3.svg ') }}" alt="Image Description">
                        </div>
                        <div class="col-auto align-self-center">
                          <div class="text-center">
                            <a href="#">+2</a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                  <small class="text-muted text-uppercase">May 12</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <span class="step-icon step-icon-soft-info">D</span>

                <div class="step-content">
                  <h5 class="mb-1">David Lidell</h5>

                  <p class="font-size-sm mb-1">Added a new member to Front Dashboard</p>

                  <small class="text-muted text-uppercase">May 15</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="{{ asset('assets/admin/img/160x160/img7.jpg ') }}" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Rachel King</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                  <small class="text-muted text-uppercase">Apr 29</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="{{ asset('assets/admin/img/160x160/img5.jpg ') }}" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Finch Hoot</h5>

                  <p class="font-size-sm mb-1">Earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>

                  <small class="text-muted text-uppercase">Apr 06</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                  <span class="step-icon step-icon-soft-primary">
                    <i class="tio-user"></i>
                  </span>

                <div class="step-content">
                  <h5 class="mb-1">Project status updated</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

                  <small class="text-muted text-uppercase">Feb 10</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->
          </ul>
          <!-- End Step -->

          <a class="btn btn-block btn-white" href="javascript:;">View all <i class="tio-chevron-right"></i></a>
        </div>
        <!-- End Body -->
      </div>
    </div>
    <!-- End Activity -->

    <!-- Welcome Message Modal -->
    <div class="modal fade" id="welcomeMessageModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-close">
            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body p-sm-5">
            <div class="text-center">
              <div class="w-75 w-sm-50 mx-auto mb-4">
                <img class="img-fluid" src="{{ asset('assets/admin/svg/illustrations/graphs.svg ') }}" alt="Image Description">
              </div>

              <h4 class="h1">Welcome to Front</h4>

              <p>We're happy to see you in our community.</p>
            </div>
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer d-block text-center py-sm-5">
            <small class="text-cap mb-4">Trusted by the world's best teams</small>

            <div class="w-85 mx-auto">
              <div class="row justify-content-between">
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="{{ asset('assets/admin/svg/brands/gitlab-gray.svg ') }}" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="{{ asset('assets/admin/svg/brands/fitbit-gray.svg ') }}" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="{{ asset('assets/admin/svg/brands/flow-xo-gray.svg ') }}" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="{{ asset('assets/admin/svg/brands/layar-gray.svg ') }}" alt="Image Description">
                </div>
              </div>
            </div>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
    <!-- End Welcome Message Modal -->

    <!-- Edit user Modal -->
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="editUserModalTitle" class="modal-title">Edit user</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <!-- Nav -->
            <ul class="js-tabs-to-dropdown nav nav-segment nav-fill nav-lg-down-break mb-5" id="editUserModalTab" role="tablist" data-hs-transform-tabs-to-btn-options='{
                  "transformResolution": "lg",
                  "btnClassNames": "btn btn-block btn-white dropdown-toggle justify-content-center mb-3"
                }'>
              <li class="nav-item">
                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab">
                  <i class="tio-user-outlined mr-1"></i> Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="billing-address-tab" data-toggle="tab" href="#billing-address" role="tab">
                  <i class="tio-city mr-1"></i> Billing address
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="change-password-tab" data-toggle="tab" href="#change-password" role="tab">
                  <i class="tio-lock-outlined mr-1"></i> Change password
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="notifications-tab" data-toggle="tab" href="#notifications" role="tab">
                  <i class="tio-notifications-on-outlined mr-1"></i> Notifications
                </a>
              </li>
            </ul>
            <!-- End Nav -->

            <!-- Tab Content -->
            <div class="tab-content" id="editUserModalTabContent">
              <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <form>
                  <!-- Profile Cover -->
                  <div class="profile-cover">
                    <div class="profile-cover-img-wrapper">
                      <img id="editProfileCoverImgModal" class="profile-cover-img" src="{{ asset('assets/admin/img/1920x400/img1.jpg ') }}" alt="Image Description">

                      <!-- Custom File Cover -->
                      <div class="profile-cover-content profile-cover-btn p-3">
                        <div class="custom-file-btn">
                          <input type="file" class="js-file-attach custom-file-btn-input" id="editProfileCoverUplaoderModal" data-hs-file-attach-options='{
                                      "textTarget": "#editProfileCoverImgModal",
                                      "mode": "image",
                                      "targetAttr": "src",
                                      "allowTypes": [".png", ".jpeg", ".jpg"]
                                   }'>
                          <label class="custom-file-btn-label btn btn-sm btn-white" for="editProfileCoverUplaoderModal">
                            <i class="tio-add-photo"></i>
                            <span class="d-none d-sm-inline-block ml-1">Upload header</span>
                          </label>
                        </div>
                      </div>
                      <!-- End Custom File Cover -->
                    </div>
                  </div>
                  <!-- End Profile Cover -->

                  <!-- Avatar -->
                  <label class="avatar avatar-xxl avatar-circle avatar-border-lg avatar-uploader profile-cover-avatar mb-5" for="editAvatarUploaderModal">
                    <img id="editAvatarImgModal" class="avatar-img" src="{{ asset('assets/admin/img/160x160/img9.jpg ') }}" alt="Image Description">

                    <input type="file" class="js-file-attach avatar-uploader-input" id="editAvatarUploaderModal" data-hs-file-attach-options='{
                                "textTarget": "#editAvatarImgModal",
                                "mode": "image",
                                "targetAttr": "src",
                                "allowTypes": [".png", ".jpeg", ".jpg"]
                             }'>

                    <span class="avatar-uploader-trigger">
                      <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                    </span>
                  </label>
                  <!-- End Avatar -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label input-label">Full name <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front."></i></label>

                    <div class="col-sm-9">
                      <div class="js-form-message input-group input-group-sm-down-break">
                        <input type="text" class="form-control" name="editFirstNameModal" id="editFirstNameModalLabel" placeholder="Your first name" aria-label="Your first name" value="Ella">
                        <input type="text" class="form-control" name="editLastNameModal" id="editLastNameModalLabel" placeholder="Your last name" aria-label="Your last name" value="Lauda">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editEmailModalLabel" class="col-sm-3 col-form-label input-label">Email</label>

                    <div class="col-sm-9">
                      <div class="js-form-message">
                        <input type="email" class="form-control" name="editEmailModal" id="editEmailModalLabel" placeholder="Email" aria-label="Email" value="ella@example.com">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                    <div class="row form-group">
                      <label for="editPhoneLabel" class="col-sm-3 col-form-label input-label">Phone <span class="input-label-secondary">(Optional)</span></label>

                      <div class="col-sm-9">
                        <div class="input-group input-group-sm-down-break align-items-center">
                          <input type="text" class="js-masked-input form-control" name="phone" id="editPhoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" value="1(609)972-22-22" data-hs-mask-options='{
                                   "template": "+0(000)000-00-00"
                                 }'>

                          <div class="input-group-append">
                            <!-- Select -->
                            <div class="select2-custom">
                              <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" name="editPhoneSelect" data-hs-select2-options='{
                                      "minimumResultsForSearch": "Infinity",
                                      "dropdownAutoWidth": true,
                                      "width": "6rem"
                                    }'>
                                <option value="Mobile" selected="">Mobile</option>
                                <option value="Home">Home</option>
                                <option value="Work">Work</option>
                                <option value="Fax">Fax</option>
                                <option value="Direct">Direct</option>
                              </select>
                              <!-- End Select -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editOrganizationModalLabel" class="col-sm-3 col-form-label input-label">Organization</label>

                    <div class="col-sm-9">
                      <div class="js-form-message">
                        <input type="text" class="form-control" name="editOrganizationModal" id="editOrganizationModalLabel" placeholder="Your organization" aria-label="Your organization" value="Htmlstream">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editDepartmentModalLabel" class="col-sm-3 col-form-label input-label">Department</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editDepartmentModal" id="editDepartmentModalLabel" placeholder="Your department" aria-label="Your department">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label input-label">Account type</label>

                    <div class="col-sm-9">
                      <div class="js-form-message input-group input-group-sm-down-break">
                        <!-- Custom Radio -->
                        <div class="form-control">
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="editUserModalAccountTypeModalRadio" id="editUserModalAccountTypeModalRadio1" checked="">
                            <label class="custom-control-label" for="editUserModalAccountTypeModalRadio1">Individual</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->

                        <!-- Custom Radio -->
                        <div class="form-control">
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="editUserModalAccountTypeModalRadio" id="editUserModalAccountTypeModalRadio2">
                            <label class="custom-control-label" for="editUserModalAccountTypeModalRadio2">Company</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="billing-address" role="tabpanel" aria-labelledby="billing-address-tab">
                <form>
                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editLocationModalLabel" class="col-sm-3 col-form-label input-label">Location</label>

                    <div class="col-sm-9">
                      <!-- Select -->
                      <div class="js-form-message mb-3">
                        <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="editLocationModalLabel" data-hs-select2-options='{
                                    "customClass": "custom-select",
                                    "placeholder": "Select country",
                                    "searchInputPlaceholder": "Search a country"
                                  }'>
                          <option label="empty"></option>
                          <option value="AF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/af.svg" alt="Afghanistan Flag" />Afghanistan</span>'>Afghanistan</option>
                          <option value="AX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ax.svg" alt="Aland Islands Flag" />Aland Islands</span>'>Aland Islands</option>
                          <option value="AL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/al.svg" alt="Albania Flag" />Albania</span>'>Albania</option>
                          <option value="DZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dz.svg" alt="Algeria Flag" />Algeria</span>'>Algeria</option>
                          <option value="AS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/as.svg" alt="American Samoa Flag" />American Samoa</span>'>American Samoa</option>
                          <option value="AD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ad.svg" alt="Andorra Flag" />Andorra</span>'>Andorra</option>
                          <option value="AO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ao.svg" alt="Angola Flag" />Angola</span>'>Angola</option>
                          <option value="AI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ai.svg" alt="Anguilla Flag" />Anguilla</span>'>Anguilla</option>
                          <option value="AG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ag.svg" alt="Antigua and Barbuda Flag" />Antigua and Barbuda</span>'>Antigua and Barbuda</option>
                          <option value="AR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ar.svg" alt="Argentina Flag" />Argentina</span>'>Argentina</option>
                          <option value="AM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/am.svg" alt="Armenia Flag" />Armenia</span>'>Armenia</option>
                          <option value="AW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/aw.svg" alt="Aruba Flag" />Aruba</span>'>Aruba</option>
                          <option value="AU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/au.svg" alt="Australia Flag" />Australia</span>'>Australia</option>
                          <option value="AT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/at.svg" alt="Austria Flag" />Austria</span>'>Austria</option>
                          <option value="AZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/az.svg" alt="Azerbaijan Flag" />Azerbaijan</span>'>Azerbaijan</option>
                          <option value="BS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bs.svg" alt="Bahamas Flag" />Bahamas</span>'>Bahamas</option>
                          <option value="BH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bh.svg" alt="Bahrain Flag" />Bahrain</span>'>Bahrain</option>
                          <option value="BD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bd.svg" alt="Bangladesh Flag" />Bangladesh</span>'>Bangladesh</option>
                          <option value="BB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bb.svg" alt="Barbados Flag" />Barbados</span>'>Barbados</option>
                          <option value="BY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/by.svg" alt="Belarus Flag" />Belarus</span>'>Belarus</option>
                          <option value="BE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/be.svg" alt="Belgium Flag" />Belgium</span>'>Belgium</option>
                          <option value="BZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bz.svg" alt="Belize Flag" />Belize</span>'>Belize</option>
                          <option value="BJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bj.svg" alt="Benin Flag" />Benin</span>'>Benin</option>
                          <option value="BM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bm.svg" alt="Bermuda Flag" />Bermuda</span>'>Bermuda</option>
                          <option value="BT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bt.svg" alt="Bhutan Flag" />Bhutan</span>'>Bhutan</option>
                          <option value="BO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bo.svg" alt="Bolivia (Plurinational State of) Flag" />Bolivia (Plurinational State of)</span>'>Bolivia (Plurinational State of)</option>
                          <option value="BQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bq.svg" alt="Bonaire, Sint Eustatius and Saba Flag" />Bonaire, Sint Eustatius and Saba</span>'>Bonaire, Sint Eustatius and Saba</option>
                          <option value="BA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ba.svg" alt="Bosnia and Herzegovina Flag" />Bosnia and Herzegovina</span>'>Bosnia and Herzegovina</option>
                          <option value="BW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bw.svg" alt="Botswana Flag" />Botswana</span>'>Botswana</option>
                          <option value="BR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/br.svg" alt="Brazil Flag" />Brazil</span>'>Brazil</option>
                          <option value="IO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/io.svg" alt="British Indian Ocean Territory Flag" />British Indian Ocean Territory</span>'>British Indian Ocean Territory</option>
                          <option value="BN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bn.svg" alt="Brunei Darussalam Flag" />Brunei Darussalam</span>'>Brunei Darussalam</option>
                          <option value="BG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bg.svg" alt="Bulgaria Flag" />Bulgaria</span>'>Bulgaria</option>
                          <option value="BF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bf.svg" alt="Burkina Faso Flag" />Burkina Faso</span>'>Burkina Faso</option>
                          <option value="BI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bi.svg" alt="Burundi Flag" />Burundi</span>'>Burundi</option>
                          <option value="CV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cv.svg" alt="Cabo Verde Flag" />Cabo Verde</span>'>Cabo Verde</option>
                          <option value="KH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kh.svg" alt="Cambodia Flag" />Cambodia</span>'>Cambodia</option>
                          <option value="CM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cm.svg" alt="Cameroon Flag" />Cameroon</span>'>Cameroon</option>
                          <option value="CA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ca.svg" alt="Canada Flag" />Canada</span>'>Canada</option>
                          <option value="KY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ky.svg" alt="Cayman Islands Flag" />Cayman Islands</span>'>Cayman Islands</option>
                          <option value="CF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cf.svg" alt="Central African Republic Flag" />Central African Republic</span>'>Central African Republic</option>
                          <option value="TD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/td.svg" alt="Chad Flag" />Chad</span>'>Chad</option>
                          <option value="CL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cl.svg" alt="Chile Flag" />Chile</span>'>Chile</option>
                          <option value="CN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="China Flag" />China</span>'>China</option>
                          <option value="CX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cx.svg" alt="Christmas Island Flag" />Christmas Island</span>'>Christmas Island</option>
                          <option value="CC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cc.svg" alt="Cocos (Keeling) Islands Flag" />Cocos (Keeling) Islands</span>'>Cocos (Keeling) Islands</option>
                          <option value="CO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/co.svg" alt="Colombia Flag" />Colombia</span>'>Colombia</option>
                          <option value="KM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/km.svg" alt="Comoros Flag" />Comoros</span>'>Comoros</option>
                          <option value="CK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ck.svg" alt="Cook Islands Flag" />Cook Islands</span>'>Cook Islands</option>
                          <option value="CR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cr.svg" alt="Costa Rica Flag" />Costa Rica</span>'>Costa Rica</option>
                          <option value="HR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/hr.svg" alt="Croatia Flag" />Croatia</span>'>Croatia</option>
                          <option value="CU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cu.svg" alt="Cuba Flag" />Cuba</span>'>Cuba</option>
                          <option value="CW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cw.svg" alt="Curaçao Flag" />Curaçao</span>'>Curaçao</option>
                          <option value="CY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cy.svg" alt="Cyprus Flag" />Cyprus</span>'>Cyprus</option>
                          <option value="CZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cz.svg" alt="Czech Republic Flag" />Czech Republic</span>'>Czech Republic</option>
                          <option value="CI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ci.svg" alt=Côte d&apos;Ivoire Flag" />Côte d&apos;Ivoire</span>'>Côte d'Ivoire</option>
                          <option value="CD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cd.svg" alt="Democratic Republic of the Congo Flag" />Democratic Republic of the Congo</span>'>Democratic Republic of the Congo</option>
                          <option value="DK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Denmark Flag" />Denmark</span>'>Denmark</option>
                          <option value="DJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dj.svg" alt="Djibouti Flag" />Djibouti</span>'>Djibouti</option>
                          <option value="DM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dm.svg" alt="Dominica Flag" />Dominica</span>'>Dominica</option>
                          <option value="DO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/do.svg" alt="Dominican Republic Flag" />Dominican Republic</span>'>Dominican Republic</option>
                          <option value="EC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ec.svg" alt="Ecuador Flag" />Ecuador</span>'>Ecuador</option>
                          <option value="EG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/eg.svg" alt="Egypt Flag" />Egypt</span>'>Egypt</option>
                          <option value="SV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sv.svg" alt="El Salvador Flag" />El Salvador</span>'>El Salvador</option>
                          <option value="GB-ENG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-eng.svg" alt="England Flag" />England</span>'>England</option>
                          <option value="GQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gq.svg" alt="Equatorial Guinea Flag" />Equatorial Guinea</span>'>Equatorial Guinea</option>
                          <option value="ER" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/er.svg" alt="Eritrea Flag" />Eritrea</span>'>Eritrea</option>
                          <option value="EE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ee.svg" alt="Estonia Flag" />Estonia</span>'>Estonia</option>
                          <option value="ET" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/et.svg" alt="Ethiopia Flag" />Ethiopia</span>'>Ethiopia</option>
                          <option value="FK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fk.svg" alt="Falkland Islands Flag" />Falkland Islands</span>'>Falkland Islands</option>
                          <option value="FO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fo.svg" alt="Faroe Islands Flag" />Faroe Islands</span>'>Faroe Islands</option>
                          <option value="FM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fm.svg" alt="Federated States of Micronesia Flag" />Federated States of Micronesia</span>'>Federated States of Micronesia</option>
                          <option value="FJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fj.svg" alt="Fiji Flag" />Fiji</span>'>Fiji</option>
                          <option value="FI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fi.svg" alt="Finland Flag" />Finland</span>'>Finland</option>
                          <option value="FR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/fr.svg" alt="France Flag" />France</span>'>France</option>
                          <option value="GF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gf.svg" alt="French Guiana Flag" />French Guiana</span>'>French Guiana</option>
                          <option value="PF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pf.svg" alt="French Polynesia Flag" />French Polynesia</span>'>French Polynesia</option>
                          <option value="TF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tf.svg" alt="French Southern Territories Flag" />French Southern Territories</span>'>French Southern Territories</option>
                          <option value="GA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ga.svg" alt="Gabon Flag" />Gabon</span>'>Gabon</option>
                          <option value="GM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gm.svg" alt="Gambia Flag" />Gambia</span>'>Gambia</option>
                          <option value="GE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ge.svg" alt="Georgia Flag" />Georgia</span>'>Georgia</option>
                          <option value="DE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Germany Flag" />Germany</span>'>Germany</option>
                          <option value="GH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gh.svg" alt="Ghana Flag" />Ghana</span>'>Ghana</option>
                          <option value="GI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gi.svg" alt="Gibraltar Flag" />Gibraltar</span>'>Gibraltar</option>
                          <option value="GR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gr.svg" alt="Greece Flag" />Greece</span>'>Greece</option>
                          <option value="GL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gl.svg" alt="Greenland Flag" />Greenland</span>'>Greenland</option>
                          <option value="GD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gd.svg" alt="Grenada Flag" />Grenada</span>'>Grenada</option>
                          <option value="GP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gp.svg" alt="Guadeloupe Flag" />Guadeloupe</span>'>Guadeloupe</option>
                          <option value="GU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gu.svg" alt="Guam Flag" />Guam</span>'>Guam</option>
                          <option value="GT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gt.svg" alt="Guatemala Flag" />Guatemala</span>'>Guatemala</option>
                          <option value="GG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gg.svg" alt="Guernsey Flag" />Guernsey</span>'>Guernsey</option>
                          <option value="GN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gn.svg" alt="Guinea Flag" />Guinea</span>'>Guinea</option>
                          <option value="GW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gw.svg" alt="Guinea-Bissau Flag" />Guinea-Bissau</span>'>Guinea-Bissau</option>
                          <option value="GY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gy.svg" alt="Guyana Flag" />Guyana</span>'>Guyana</option>
                          <option value="HT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ht.svg" alt="Haiti Flag" />Haiti</span>'>Haiti</option>
                          <option value="VA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/va.svg" alt="Holy See Flag" />Holy See</span>'>Holy See</option>
                          <option value="HN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/hn.svg" alt="Honduras Flag" />Honduras</span>'>Honduras</option>
                          <option value="HK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/hk.svg" alt="Hong Kong Flag" />Hong Kong</span>'>Hong Kong</option>
                          <option value="HU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/hu.svg" alt="Hungary Flag" />Hungary</span>'>Hungary</option>
                          <option value="IS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/is.svg" alt="Iceland Flag" />Iceland</span>'>Iceland</option>
                          <option value="IN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/in.svg" alt="India Flag" />India</span>'>India</option>
                          <option value="ID" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/id.svg" alt="Indonesia Flag" />Indonesia</span>'>Indonesia</option>
                          <option value="IR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ir.svg" alt="Iran (Islamic Republic of) Flag" />Iran (Islamic Republic of)</span>'>Iran (Islamic Republic of)</option>
                          <option value="IQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/iq.svg" alt="Iraq Flag" />Iraq</span>'>Iraq</option>
                          <option value="IE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ie.svg" alt="Ireland Flag" />Ireland</span>'>Ireland</option>
                          <option value="IM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/im.svg" alt="Isle of Man Flag" />Isle of Man</span>'>Isle of Man</option>
                          <option value="IL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/il.svg" alt="Israel Flag" />Israel</span>'>Israel</option>
                          <option value="IT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Italy Flag" />Italy</span>'>Italy</option>
                          <option value="JM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/jm.svg" alt="Jamaica Flag" />Jamaica</span>'>Jamaica</option>
                          <option value="JP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/jp.svg" alt="Japan Flag" />Japan</span>'>Japan</option>
                          <option value="JE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/je.svg" alt="Jersey Flag" />Jersey</span>'>Jersey</option>
                          <option value="JO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/jo.svg" alt="Jordan Flag" />Jordan</span>'>Jordan</option>
                          <option value="KZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kz.svg" alt="Kazakhstan Flag" />Kazakhstan</span>'>Kazakhstan</option>
                          <option value="KE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ke.svg" alt="Kenya Flag" />Kenya</span>'>Kenya</option>
                          <option value="KI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ki.svg" alt="Kiribati Flag" />Kiribati</span>'>Kiribati</option>
                          <option value="KW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kw.svg" alt="Kuwait Flag" />Kuwait</span>'>Kuwait</option>
                          <option value="KG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kg.svg" alt="Kyrgyzstan Flag" />Kyrgyzstan</span>'>Kyrgyzstan</option>
                          <option value="LA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/la.svg" alt="Laos Flag" />Laos</span>'>Laos</option>
                          <option value="LV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lv.svg" alt="Latvia Flag" />Latvia</span>'>Latvia</option>
                          <option value="LB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lb.svg" alt="Lebanon Flag" />Lebanon</span>'>Lebanon</option>
                          <option value="LS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ls.svg" alt="Lesotho Flag" />Lesotho</span>'>Lesotho</option>
                          <option value="LR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lr.svg" alt="Liberia Flag" />Liberia</span>'>Liberia</option>
                          <option value="LY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ly.svg" alt="Libya Flag" />Libya</span>'>Libya</option>
                          <option value="LI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/li.svg" alt="Liechtenstein Flag" />Liechtenstein</span>'>Liechtenstein</option>
                          <option value="LT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lt.svg" alt="Lithuania Flag" />Lithuania</span>'>Lithuania</option>
                          <option value="LU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lu.svg" alt="Luxembourg Flag" />Luxembourg</span>'>Luxembourg</option>
                          <option value="MO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mo.svg" alt="Macau Flag" />Macau</span>'>Macau</option>
                          <option value="MG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mg.svg" alt="Madagascar Flag" />Madagascar</span>'>Madagascar</option>
                          <option value="MW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mw.svg" alt="Malawi Flag" />Malawi</span>'>Malawi</option>
                          <option value="MY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/my.svg" alt="Malaysia Flag" />Malaysia</span>'>Malaysia</option>
                          <option value="MV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mv.svg" alt="Maldives Flag" />Maldives</span>'>Maldives</option>
                          <option value="ML" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ml.svg" alt="Mali Flag" />Mali</span>'>Mali</option>
                          <option value="MT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mt.svg" alt="Malta Flag" />Malta</span>'>Malta</option>
                          <option value="MH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mh.svg" alt="Marshall Islands Flag" />Marshall Islands</span>'>Marshall Islands</option>
                          <option value="MQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mq.svg" alt="Martinique Flag" />Martinique</span>'>Martinique</option>
                          <option value="MR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mr.svg" alt="Mauritania Flag" />Mauritania</span>'>Mauritania</option>
                          <option value="MU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mu.svg" alt="Mauritius Flag" />Mauritius</span>'>Mauritius</option>
                          <option value="YT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/yt.svg" alt="Mayotte Flag" />Mayotte</span>'>Mayotte</option>
                          <option value="MX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mx.svg" alt="Mexico Flag" />Mexico</span>'>Mexico</option>
                          <option value="MD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/md.svg" alt="Moldova Flag" />Moldova</span>'>Moldova</option>
                          <option value="MC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mc.svg" alt="Monaco Flag" />Monaco</span>'>Monaco</option>
                          <option value="MN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mn.svg" alt="Mongolia Flag" />Mongolia</span>'>Mongolia</option>
                          <option value="ME" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/me.svg" alt="Montenegro Flag" />Montenegro</span>'>Montenegro</option>
                          <option value="MS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ms.svg" alt="Montserrat Flag" />Montserrat</span>'>Montserrat</option>
                          <option value="MA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ma.svg" alt="Morocco Flag" />Morocco</span>'>Morocco</option>
                          <option value="MZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mz.svg" alt="Mozambique Flag" />Mozambique</span>'>Mozambique</option>
                          <option value="MM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mm.svg" alt="Myanmar Flag" />Myanmar</span>'>Myanmar</option>
                          <option value="NA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/na.svg" alt="Namibia Flag" />Namibia</span>'>Namibia</option>
                          <option value="NR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nr.svg" alt="Nauru Flag" />Nauru</span>'>Nauru</option>
                          <option value="NP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/np.svg" alt="Nepal Flag" />Nepal</span>'>Nepal</option>
                          <option value="NL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nl.svg" alt="Netherlands Flag" />Netherlands</span>'>Netherlands</option>
                          <option value="NC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nc.svg" "alt="New Caledonia Flag" />New Caledonia</span>'>New Caledonia</option>
                          <option value="NZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nz.svg" alt="New Zealand Flag" />New Zealand</span>'>New Zealand</option>
                          <option value="NI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ni.svg" alt="Nicaragua Flag" />Nicaragua</span>'>Nicaragua</option>
                          <option value="NE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ne.svg" alt="Niger Flag" />Niger</span>'>Niger</option>
                          <option value="NG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ng.svg" alt="Nigeria Flag" />Nigeria</span>'>Nigeria</option>
                          <option value="NU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nu.svg" alt="Niue Flag" />Niue</span>'>Niue</option>
                          <option value="NF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/nf.svg" alt="Norfolk Island Flag" />Norfolk Island</span>'>Norfolk Island</option>
                          <option value="KP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kp.svg" alt="North Korea Flag" />North Korea</span>'>North Korea</option>
                          <option value="MK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mk.svg" alt="North Macedonia Flag" />North Macedonia</span>'>North Macedonia</option>
                          <option value="GB-NIR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-nir.svg" alt="Northern Ireland Flag" />Northern Ireland</span>'>Northern Ireland</option>
                          <option value="MP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mp.svg" alt="Northern Markna Islands Flag" />Northern Markna Islands</span>'>Northern Markna Islands</option>
                          <option value="NO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/no.svg" alt="Norway Flag" />Norway</span>'>Norway</option>
                          <option value="OM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/om.svg" alt="Oman Flag" />Oman</span>'>Oman</option>
                          <option value="PK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pk.svg" alt="Pakistan Flag" />Pakistan</span>'>Pakistan</option>
                          <option value="PW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pw.svg" alt="Palau Flag" />Palau</span>'>Palau</option>
                          <option value="PA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pa.svg" alt="Panama Flag" />Panama</span>'>Panama</option>
                          <option value="PG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pg.svg" alt="Papua New Guinea Flag" />Papua New Guinea</span>'>Papua New Guinea</option>
                          <option value="PY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/py.svg" alt="Paraguay Flag" />Paraguay</span>'>Paraguay</option>
                          <option value="PE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pe.svg" alt="Peru Flag" />Peru</span>'>Peru</option>
                          <option value="PH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ph.svg" alt="Philippines Flag" />Philippines</span>'>Philippines</option>
                          <option value="PN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pn.svg" alt="Pitcairn Flag" />Pitcairn</span>'>Pitcairn</option>
                          <option value="PL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pl.svg" alt="Poland Flag" />Poland</span>'>Poland</option>
                          <option value="PT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pt.svg" alt="Portugal Flag" />Portugal</span>'>Portugal</option>
                          <option value="PR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pr.svg" alt="Puerto Rico Flag" />Puerto Rico</span>'>Puerto Rico</option>
                          <option value="QA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/qa.svg" alt="Qatar Flag" />Qatar</span>'>Qatar</option>
                          <option value="CG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cg.svg" alt="Republic of the Congo Flag" />Republic of the Congo</span>'>Republic of the Congo</option>
                          <option value="RO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ro.svg" alt="Romania Flag" />Romania</span>'>Romania</option>
                          <option value="RU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ru.svg" alt="Russia Flag" />Russia</span>'>Russia</option>
                          <option value="RW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/rw.svg" alt="Rwanda Flag" />Rwanda</span>'>Rwanda</option>
                          <option value="RE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/re.svg" alt="Réunion Flag" />Réunion</span>'>Réunion</option>
                          <option value="BL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/bl.svg" alt="Saint Barthélemy Flag" />Saint Barthélemy</span>'>Saint Barthélemy</option>
                          <option value="SH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sh.svg" alt="Saint Helena, Ascension and Tristan da Cunha Flag" />Saint Helena, Ascension and Tristan da Cunha</span>'>Saint Helena, Ascension and Tristan da Cunha</option>
                          <option value="KN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kn.svg" alt="Saint Kitts and Nevis Flag" />Saint Kitts and Nevis</span>'>Saint Kitts and Nevis</option>
                          <option value="LC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lc.svg" alt="Saint Lucia Flag" />Saint Lucia</span>'>Saint Lucia</option>
                          <option value="MF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/mf.svg" alt="Saint Martin Flag" />Saint Martin</span>'>Saint Martin</option>
                          <option value="PM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/pm.svg" alt="Saint Pierre and Miquelon Flag" />Saint Pierre and Miquelon</span>'>Saint Pierre and Miquelon</option>
                          <option value="VC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/vc.svg" alt="Saint Vincent and the Grenadines Flag" />Saint Vincent and the Grenadines</span>'>Saint Vincent and the Grenadines</option>
                          <option value="WS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ws.svg" alt="Samoa Flag" />Samoa</span>'>Samoa</option>
                          <option value="SM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sm.svg" "alt="San Marino Flag" />San Marino</span>'>San Marino</option>
                          <option value="ST" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/st.svg" "alt="Sao Tome and Principe Flag" />Sao Tome and Principe</span>'>Sao Tome and Principe</option>
                          <option value="SA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sa.svg" alt="Saudi Arabia Flag" />Saudi Arabia</span>'>Saudi Arabia</option>
                          <option value="GB-SCT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-sct.svg" alt="Scotland Flag" />Scotland</span>'>Scotland</option>
                          <option value="SN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sn.svg" alt="Senegal Flag" />Senegal</span>'>Senegal</option>
                          <option value="RS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/rs.svg" alt="Serbia Flag" />Serbia</span>'>Serbia</option>
                          <option value="SC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sc.svg" alt="Seychelles Flag" />Seychelles</span>'>Seychelles</option>
                          <option value="SL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sl.svg" alt="Sierra Leone Flag" />Sierra Leone</span>'>Sierra Leone</option>
                          <option value="SG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sg.svg" alt="Singapore Flag" />Singapore</span>'>Singapore</option>
                          <option value="SX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sx.svg" alt="Sint Maarten Flag" />Sint Maarten</span>'>Sint Maarten</option>
                          <option value="SK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sk.svg" alt="Slovakia Flag" />Slovakia</span>'>Slovakia</option>
                          <option value="SI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/si.svg" alt="Slovenia Flag" />Slovenia</span>'>Slovenia</option>
                          <option value="SB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sb.svg" alt="Solomon Islands Flag" />Solomon Islands</span>'>Solomon Islands</option>
                          <option value="SO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/so.svg" alt="Somalia Flag" />Somalia</span>'>Somalia</option>
                          <option value="ZA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/za.svg" alt="South Africa Flag" />South Africa</span>'>South Africa</option>
                          <option value="GS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gs.svg" alt="South Georgia and the South Sandwich Islands Flag" />South Georgia and the South Sandwich Islands</span>'>South Georgia and the South Sandwich Islands</option>
                          <option value="KR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/kr.svg" alt="South Korea Flag" />South Korea</span>'>South Korea</option>
                          <option value="SS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ss.svg" alt="South Sudan Flag" />South Sudan</span>'>South Sudan</option>
                          <option value="ES" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Spain Flag" />Spain</span>'>Spain</option>
                          <option value="LK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/lk.svg" "alt="Sri Lanka Flag" />Sri Lanka</span>'>Sri Lanka</option>
                          <option value="PS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ps.svg" alt="State of Palestine Flag" />State of Palestine</span>'>State of Palestine</option>
                          <option value="SD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sd.svg" alt="Sudan Flag" />Sudan</span>'>Sudan</option>
                          <option value="SR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sr.svg" alt="Suriname Flag" />Suriname</span>'>Suriname</option>
                          <option value="SJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sj.svg" alt="Svalbard and Jan Mayen Flag" />Svalbard and Jan Mayen</span>'>Svalbard and Jan Mayen</option>
                          <option value="SZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sz.svg" alt="Swaziland Flag" />Swaziland</span>'>Swaziland</option>
                          <option value="SE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/se.svg" alt="Sweden Flag" />Sweden</span>'>Sweden</option>
                          <option value="CH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ch.svg" alt="Switzerland Flag" />Switzerland</span>'>Switzerland</option>
                          <option value="SY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/sy.svg" alt="Syrian Arab Republic Flag" />Syrian Arab Republic</span>'>Syrian Arab Republic</option>
                          <option value="TW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tw.svg" alt="Taiwan Flag" />Taiwan</span>'>Taiwan</option>
                          <option value="TJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tj.svg" alt="Tajikistan Flag" />Tajikistan</span>'>Tajikistan</option>
                          <option value="TZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tz.svg" alt="Tanzania Flag" />Tanzania</span>'>Tanzania</option>
                          <option value="TH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/th.svg" alt="Thailand Flag" />Thailand</span>'>Thailand</option>
                          <option value="TL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tl.svg" alt="Timor-Leste Flag" />Timor-Leste</span>'>Timor-Leste</option>
                          <option value="TG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tg.svg" alt="Togo Flag" />Togo</span>'>Togo</option>
                          <option value="TK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tk.svg" alt="Tokelau Flag" />Tokelau</span>'>Tokelau</option>
                          <option value="TO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/to.svg" alt="Tonga Flag" />Tonga</span>'>Tonga</option>
                          <option value="TT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tt.svg" alt="Trinidad and Tobago Flag" />Trinidad and Tobago</span>'>Trinidad and Tobago</option>
                          <option value="TN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tn.svg" alt="Tunisia Flag" />Tunisia</span>'>Tunisia</option>
                          <option value="TR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tr.svg" alt="Turkey Flag" />Turkey</span>'>Turkey</option>
                          <option value="TM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tm.svg" alt="Turkmenistan Flag" />Turkmenistan</span>'>Turkmenistan</option>
                          <option value="TC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tc.svg" alt="Turks and Caicos Islands Flag" />Turks and Caicos Islands</span>'>Turks and Caicos Islands</option>
                          <option value="TV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/tv.svg" alt="Tuvalu Flag" />Tuvalu</span>'>Tuvalu</option>
                          <option value="UG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ug.svg" alt="Uganda Flag" />Uganda</span>'>Uganda</option>
                          <option value="UA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ua.svg" alt="Ukraine Flag" />Ukraine</span>'>Ukraine</option>
                          <option value="AE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ae.svg" alt="United Arab Emirates Flag" />United Arab Emirates</span>'>United Arab Emirates</option>
                          <option value="GB" selected="" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="United Kingdom Flag" />United Kingdom</span>'>United Kingdom</option>
                          <option value="UM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/um.svg" alt="United States Minor Outlying Islands Flag" />United States Minor Outlying Islands</span>'>United States Minor Outlying Islands</option>
                          <option value="US" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States of America Flag" />United States of America</span>'>United States of America</option>
                          <option value="UY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/uy.svg" alt="Uruguay Flag" />Uruguay</span>'>Uruguay</option>
                          <option value="UZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/uz.svg" alt="Uzbekistan Flag" />Uzbekistan</span>'>Uzbekistan</option>
                          <option value="VU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/vu.svg" alt="Vanuatu Flag" />Vanuatu</span>'>Vanuatu</option>
                          <option value="VE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ve.svg" alt="Venezuela (Bolivarian Republic of) Flag" />Venezuela (Bolivarian Republic of)</span>'>Venezuela (Bolivarian Republic of)</option>
                          <option value="VN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/vn.svg" alt="Vietnam Flag" />Vietnam</span>'>Vietnam</option>
                          <option value="VG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/vg.svg" alt="Virgin Islands (British) Flag" />Virgin Islands (British)</span>'>Virgin Islands (British)</option>
                          <option value="VI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/vi.svg" alt="Virgin Islands (U.S.) Flag" />Virgin Islands (U.S.)</span>'>Virgin Islands (U.S.)</option>
                          <option value="GB-WLS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-wls.svg" alt="Wales Flag" />Wales</span>'>Wales</option>
                          <option value="WF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/wf.svg" alt="Wallis and Futuna Flag" />Wallis and Futuna</span>'>Wallis and Futuna</option>
                          <option value="EH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/eh.svg" alt="Western Sahara Flag" />Western Sahara</span>'>Western Sahara</option>
                          <option value="YE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/ye.svg" alt="Yemen Flag" />Yemen</span>'>Yemen</option>
                          <option value="ZM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/zm.svg" alt="Zambia Flag" />Zambia</span>'>Zambia</option>
                          <option value="ZW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/zw.svg" alt="Zimbabwe Flag" />Zimbabwe</span>'>Zimbabwe</option>
                        </select>
                      </div>
                      <!-- End Select -->

                      <div class="js-form-message mb-3">
                        <input type="text" class="form-control" name="editCityModal" id="editCityModalLabel" placeholder="City" aria-label="City" value="London">
                      </div>
                      <input type="text" class="form-control" name="editStateModal" id="editStateModalLabel" placeholder="State" aria-label="State">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editAddressLine1ModalLabel" class="col-sm-3 col-form-label input-label">Address line 1</label>

                    <div class="col-sm-9">
                      <div class="js-form-message">
                        <input type="text" class="form-control" name="editAddressLine1Modal" id="editAddressLine1ModalLabel" placeholder="Your address" aria-label="Your address" value="45 Roker Terrace, Latheronwheel">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editAddressLine2ModalLabel" class="col-sm-3 col-form-label input-label">Address line 2 <span class="input-label-secondary">(Optional)</span></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="editAddressLine2Modal" id="editAddressLine2ModalLabel" placeholder="Your address" aria-label="Your address">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editZipCodeModalLabel" class="col-sm-3 col-form-label input-label">Zip code <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="You can find your code in a postal address."></i></label>

                    <div class="col-sm-9">
                      <div class="js-form-message">
                        <input type="text" class="js-masked-input form-control" name="editZipCodeModal" id="editZipCodeModalLabel" placeholder="Your zip code" aria-label="Your zip code" value="KW5 8NW" data-hs-mask-options='{
                                   "template": "AA0 0AA"
                                 }'>
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <hr>

                  <!-- Toggle Switch -->
                  <label class="row form-group toggle-switch" for="editUserModalBillingPreferencesSwitch1">
                    <span class="col-8 col-sm-9 toggle-switch-content ml-0">
                      <span class="d-block text-dark mb-1">Default billing address</span>
                      <span class="d-block font-size-sm text-muted">Set as default billing address</span>
                    </span>
                    <span class="col-4 col-sm-3">
                      <input type="checkbox" class="toggle-switch-input" id="editUserModalBillingPreferencesSwitch1" checked="">
                      <span class="toggle-switch-label ml-auto">
                        <span class="toggle-switch-indicator"></span>
                      </span>
                    </span>
                  </label>
                  <!-- End Toggle Switch -->

                  <!-- Toggle Switch -->
                  <label class="row form-group toggle-switch" for="editUserModalBillingPreferencesSwitch2">
                    <span class="col-8 col-sm-9 toggle-switch-content ml-0">
                      <span class="d-block text-dark mb-1">See info about people who view my profile</span>
                      <span class="d-block font-size-sm text-muted"><a class="link" href="#">More about viewer info</a>.</span>
                    </span>
                    <span class="col-4 col-sm-3">
                      <input type="checkbox" class="toggle-switch-input" id="editUserModalBillingPreferencesSwitch2">
                      <span class="toggle-switch-label ml-auto">
                        <span class="toggle-switch-indicator"></span>
                      </span>
                    </span>
                  </label>
                  <!-- End Toggle Switch -->

                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-white" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <span class="mx-2"></span>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
                <form>
                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editUserModalCurrentPasswordLabel" class="col-sm-3 col-form-label input-label">Current password</label>

                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <input type="password" class="js-toggle-password form-control" name="currentPassword" id="editUserModalCurrentPasswordLabel" placeholder="Enter current password" aria-label="Enter current password" data-hs-toggle-password-options='{
                                   "target": "#editUserModalChangePassModalTarget",
                                   "defaultClass": "tio-hidden-outlined",
                                   "showClass": "tio-visible-outlined",
                                   "classChangeTarget": "#editUserModalChangePassModalIcon"
                                 }'>
                        <div id="editUserModalChangePassModalTarget" class="input-group-append">
                          <a class="input-group-text" href="javascript:;">
                            <i id="editUserModalChangePassModalIcon" class="tio-visible-outlined"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editUserModalNewPassword" class="col-sm-3 col-form-label input-label">New password</label>

                    <div class="col-sm-9">
                      <input type="password" class="js-toggle-password form-control" name="editUserModalNewPassword" id="editUserModalNewPassword" placeholder="Enter new password" aria-label="Enter new password" data-hs-toggle-password-options='{
                                 "target": "#editUserModalChangePassModalCheckbox"
                               }'>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="editUserModalConfirmNewPasswordLabel" class="col-sm-3 col-form-label input-label">Confirm new password</label>

                    <div class="col-sm-9">
                      <input type="password" class="js-toggle-password form-control" name="confirmNewPassword" id="editUserModalConfirmNewPasswordLabel" placeholder="Confirm your new password" aria-label="Confirm your new password" data-hs-toggle-password-options='{
                                 "target": "#editUserModalChangePassModalCheckbox"
                               }'>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <div class="col-sm-9 offset-sm-3">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="editUserModalChangePassModalCheckbox" class="custom-control-input">
                        <label class="custom-control-label" for="editUserModalChangePassModalCheckbox">Show password</label>
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
                <!-- Table -->
                <div class="table-responsive datatable-custom">
                  <table class="table table-thead-bordered table-nowrap table-align-middle table-first-col-px-0">
                    <thead class="thead-light">
                      <tr>
                        <th>Type</th>
                        <th class="text-center">
                          <div class="mb-1">
                            <img class="avatar avatar-xs" src="{{ asset('assets/admin/svg/illustrations/at-line.svg ')}}" alt="Image Description">
                          </div>
                          Email
                        </th>
                        <th class="text-center">
                          <div class="mb-1">
                            <img class="avatar avatar-xs" src="{{ asset('assets/admin/svg/illustrations/world-line.svg ')}}" alt="Image Description">
                          </div>
                          Browser
                        </th>
                        <th class="text-center">
                          <div class="mb-1">
                            <img class="avatar avatar-xs" src="{{ asset('assets/admin/svg/illustrations/phone-line.svg ')}}" alt="Image Description">
                          </div>
                          App
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>New for you</td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox1" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox1"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox2">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox2"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox3">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox3"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>Account activity <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Get important notifications about you or activity you've missed"></i></td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox4" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox4"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox5" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox5"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox6" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox6"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>A new browser used to sign in</td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox7" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox7"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox8" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox8"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox9" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox9"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>A new device is linked</td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox10">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox10"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox11" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox11"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox12">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox12"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>A new device connected <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Email me when a new device connected"></i></td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox13">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox13"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox14" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox14"></label>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="custom-control custom-checkbox mb-3 mr-n2">
                            <input type="checkbox" class="custom-control-input" id="editUserModalAlertsCheckbox15" checked="">
                            <label class="custom-control-label" for="editUserModalAlertsCheckbox15"></label>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- End Table -->

                <hr>

                <div class="row">
                  <div class="col-sm">
                    <!-- Form Group -->
                    <div class="form-group">
                      <span class="d-block mb-2">When should we send notifications?</span>

                      <!-- Select -->
                      <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" data-hs-select2-options='{
                                  "minimumResultsForSearch": "Infinity",
                                  "customClass": "custom-select",
                                  "width": "15rem"
                                }'>
                        <option value="whenToSendNotification1">Always</option>
                        <option value="whenToSendNotification2">Only when I'm online</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Form Group -->
                  </div>

                  <div class="col-sm">
                    <!-- Form Group -->
                    <div class="form-group">
                      <span class="d-block mb-2">Send a daily summary ("Daily Digest") of task activity.</span>

                      <div class="form-row">
                        <div class="col-auto">
                          <!-- Select -->
                          <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" data-hs-select2-options='{
                                      "minimumResultsForSearch": "Infinity",
                                      "customClass": "custom-select",
                                      "dropdownAutoWidth": true,
                                      "width": true
                                    }'>
                            <option value="EveryDay">Every day</option>
                            <option value="weekdays" selected="">Weekdays</option>
                            <option value="Never">Never</option>
                          </select>
                          <!-- End Select -->
                        </div>

                        <div class="col-auto">
                          <!-- Select -->
                          <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" data-hs-select2-options='{
                                      "minimumResultsForSearch": "Infinity",
                                      "customClass": "custom-select",
                                      "dropdownAutoWidth": true,
                                      "width": true
                                    }'>
                            <option value="0">at 12 AM</option>
                            <option value="1">at 1 AM</option>
                            <option value="2">at 2 AM</option>
                            <option value="3">at 3 AM</option>
                            <option value="4">at 4 AM</option>
                            <option value="5">at 5 AM</option>
                            <option value="6">at 6 AM</option>
                            <option value="7">at 7 AM</option>
                            <option value="8">at 8 AM</option>
                            <option value="9" selected="">at 9 AM</option>
                            <option value="10">at 10 AM</option>
                            <option value="11">at 11 AM</option>
                            <option value="12">at 12 PM</option>
                            <option value="13">at 1 PM</option>
                            <option value="14">at 2 PM</option>
                            <option value="15">at 3 PM</option>
                            <option value="16">at 4 PM</option>
                            <option value="17">at 5 PM</option>
                            <option value="18">at 6 PM</option>
                            <option value="19">at 7 PM</option>
                            <option value="20">at 8 PM</option>
                            <option value="21">at 9 PM</option>
                            <option value="22">at 10 PM</option>
                            <option value="23">at 11 PM</option>
                          </select>
                          <!-- End Select -->
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                  </div>
                </div>

                <p>In order to cut back on noise, email notifications are grouped together and only sent when you're idle or offline.</p>

                <div class="d-flex justify-content-end">
                  <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
            <!-- End Tab Content -->
          </div>
          <!-- End Body -->
        </div>
      </div>
    </div>
    <!-- End Edit user Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->


    <!-- JS Implementing Plugins -->
    <script src="{{ asset('assets/admin/js/vendor.min.js ')}}"></script>
    <script src="{{ asset('assets/admin/vendor/chart.js/dist/Chart.min.js ')}}"></script>
    <script src="{{ asset('assets/admin/vendor/chart.js.extensions/chartjs-extensions.js ')}}"></script>
    {{-- <script src="{{ asset('assets/admin/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js ')}}"></script> --}}
    

    <!-- JS Front -->
    <script src="{{ asset('assets/admin/js/theme.min.js ')}}"></script>
    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // ONLY DEV
        // =======================================================
        
          if (window.localStorage.getItem('hs-builder-popover') === null) {
            $('#builderPopover').popover('show')
              .on('shown.bs.popover', function () {
                $('.popover').last().addClass('popover-dark')
              });

            $(document).on('click', '#closeBuilderPopover' , function() {
              window.localStorage.setItem('hs-builder-popover', true);
              $('#builderPopover').popover('dispose');
            });
          } else {
            $('#builderPopover').on('show.bs.popover', function () {
              return false
            });
          }
        
        // END ONLY DEV
        // =======================================================


        // BUILDER TOGGLE INVOKER
        // =======================================================
        $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
          $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
        });

        
          // INITIALIZATION OF MEGA MENU
          // =======================================================
          var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
              position: 'left'
            }
          }).init();
        

        
        // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
        // =======================================================
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();

        
        // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
        // =======================================================
        $('.js-nav-tooltip-link').tooltip({ boundary: 'window' })

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
          if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
            return false;
          }
        });

        
        // INITIALIZATION OF UNFOLD
        // =======================================================
        $('.js-hs-unfold-invoker').each(function () {
          var unfold = new HSUnfold($(this)).init();
        });

        
        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $('.js-form-search').each(function () {
          new HSFormSearch($(this)).init()
        });

        
        // INITIALIZATION OF SHOW PASSWORD
        // =======================================================
        $('.js-toggle-password').each(function () {
          new HSTogglePassword(this).init()
        });

        
        // INITIALIZATION OF FILE ATTACH
        // =======================================================
        $('.js-file-attach').each(function () {
          var customFile = new HSFileAttach($(this)).init();
        });

        
        // INITIALIZATION OF TABS
        // =======================================================
        $('.js-tabs-to-dropdown').each(function () {
          var transformTabsToBtn = new HSTransformTabsToBtn($(this)).init();
        });

        
        // INITIALIZATION OF STEP FORM
        // =======================================================
        $('.js-step-form').each(function () {
          var stepForm = new HSStepForm($(this), {
            finish: function() {
              $("#addUserStepFormProgress").hide();
              $("#addUserStepFormContent").hide();
              $("#successMessageContent").show();
            }
          }).init();
        });

        
        // INITIALIZATION OF MASKED INPUT
        // =======================================================
        $('.js-masked-input').each(function () {
          var mask = $.HSCore.components.HSMask.init($(this));
        });

        
        // INITIALIZATION OF SELECT2 *
        // =======================================================
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

       

        
        // INITIALIZATION OF COUNTERS
        // =======================================================
        $('.js-counter').each(function() {
          var counter = new HSCounter($(this)).init();
        });

        
        // INITIALIZATION OF DATATABLES *
        // =======================================================
        var datatable = $.HSCore.components.HSDatatables.init($('#datatable'), {
          dom: 'Bfrtip',
          buttons: [
            {
              extend: 'copy',
              className: 'd-none'
            },
            {
              extend: 'excel',
              className: 'd-none'
            },
            {
              extend: 'csv',
              className: 'd-none'
            },
            {
              extend: 'pdf',
              className: 'd-none'
            },
            {
              extend: 'print',
              className: 'd-none'
            },
          ],
          select: {
            style: 'multi',
            selector: 'td:first-child input[type="checkbox"]',
            classMap: {
              checkAll: '#datatableCheckAll',
              counter: '#datatableCounter',
              counterInfo: '#datatableCounterInfo'
            }
          },
          language: {
            zeroRecords: '<div class="text-center p-4">' +
                '<img class="mb-3" src="./assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
                '<p class="mb-0">No data to show</p>' +
                '</div>'
          }
        });

        $('#export-copy').click(function() {
          datatable.button('.buttons-copy').trigger()
        });

        $('#export-excel').click(function() {
          datatable.button('.buttons-excel').trigger()
        });

        $('#export-csv').click(function() {
          datatable.button('.buttons-csv').trigger()
        });

        $('#export-pdf').click(function() {
          datatable.button('.buttons-pdf').trigger()
        });

        $('#export-print').click(function() {
          datatable.button('.buttons-print').trigger()
        });

        $('.js-datatable-filter').on('change', function() {
          var $this = $(this),
            elVal = $this.val(),
            targetColumnIndex = $this.data('target-column-index');

          datatable.column(targetColumnIndex).search(elVal).draw();
        });

        $('#datatableSearch').on('mouseup', function (e) {
          var $input = $(this),
            oldValue = $input.val();

          if (oldValue == "") return;

          setTimeout(function(){
            var newValue = $input.val();

            if (newValue == ""){
              // Gotcha
              datatable.search('').draw();
            }
          }, 1);
        });

        // Tìm kiếm khi nhấp chuỗi
        var datatable2 = $.HSCore.components.HSDatatables.init($('#datatable2'), {
          dom: 'Bfrtip',
          buttons: [
            {
              extend: 'copy',
              className: 'd-none'
            },
            {
              extend: 'excel',
              className: 'd-none'
            },
            {
              extend: 'csv',
              className: 'd-none'
            },
            {
              extend: 'pdf',
              className: 'd-none'
            },
            {
              extend: 'print',
              className: 'd-none'
            },
          ],
          select: {
            style: 'multi',
            selector: 'td:first-child input[type="checkbox"]',
            classMap: {
              checkAll: '#datatableCheckAll',
              counter: '#datatableCounter',
              counterInfo: '#datatableCounterInfo'
            }
          },
          language: {
            zeroRecords: '<div class="text-center p-4">' +
                '<img class="mb-3" src="./assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
                '<p class="mb-0">No data to show</p>' +
                '</div>'
          }
        });

        $('#export-copy').click(function() {
          datatable2.button('.buttons-copy').trigger()
        });

        $('#export-excel').click(function() {
          datatable2.button('.buttons-excel').trigger()
        });

        $('#export-csv').click(function() {
          datatable2.button('.buttons-csv').trigger()
        });

        $('#export-pdf').click(function() {
          datatable2.button('.buttons-pdf').trigger()
        });

        $('#export-print').click(function() {
          datatable2.button('.buttons-print').trigger()
        });

        $('.js-datatable-filter').on('change', function() {
          var $this = $(this),
            elVal = $this.val(),
            targetColumnIndex = $this.data('target-column-index');

          datatable.column(targetColumnIndex).search(elVal).draw();
        });

        $('#datatableSearch2').on('mouseup', function (e) {
          var $input = $(this),
            oldValue = $input.val();

          if (oldValue == "") return;

          setTimeout(function(){
            var newValue = $input.val();

            if (newValue == ""){
              // Gotcha
              datatable2.search('').draw();
            }
          }, 1);
        });

        
        
        
        // INITIALIZATION OF CHARTJS
        // =======================================================
        $('.js-chart').each(function () {
          $.HSCore.components.HSChartJS.init($(this));
        });

        // INITIALIZATION OF CHARTJS
        // =======================================================
        $.HSCore.components.HSChartJS.init($('.js-chartjs-doughnut-half'), {
          options: {
            tooltips: {
              postfix: "%"
            },
            cutoutPercentage: 85,
            rotation: 1 * Math.PI,
            circumference: 1 * Math.PI
          }
        });
        
        // INITIALIZATION OF QUICK VIEW POPOVER
        // =======================================================
        $('#editUserPopover').popover('show');

        $(document).on('click', '#closeEditUserPopover' , function() {
          $('#editUserPopover').popover('dispose');
        });

        $('#editUserModal').on('show.bs.modal', function() {
          $('#editUserPopover').popover('dispose');
        });


        // DARK POPOVER
        // =======================================================
        $('[data-toggle="popover-dark"]').on('shown.bs.popover', function () {
          $('.popover').last().addClass('popover-dark')
        })
      });
    </script>
    @yield('scripts')
    <!-- IE Support -->
    <script>
      if (/MSIE /d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="{{asset('assets/admin/vendor/babel-polyfill/polyfill.min.js')}}"><//script>');
    </script>
    @livewireScripts
  </body>
</html>
