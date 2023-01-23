<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express Node.js & Flask Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head><base href=""/>
    <title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular & Laravel by Keenthemes</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express Node.js & Flask Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <meta class="csrf-token" name="csrf-token" content="{{csrf_token()}}">
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
<!--end::Theme mode setup on page load-->
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside overflow-visible overflow-lg-auto bg-primary" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
            <!--begin::Logo-->
            <div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-8" id="kt_aside_logo">
                <a href="../../demo4/dist/index.html">
                    <img alt="Logo" src="{{asset('assets/media/logos/demo4.svg')}}" class="h-55px" />
                </a>
            </div>
            <!--end::Logo-->
            <!--begin::Nav-->
            <div class="aside-nav d-flex flex-column align-lg-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
                <!--begin::Primary menu-->
                <div class="hover-scroll-overlay-y my-2 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
                    <!--begin::Menu-->
                    <div id="kt_aside_menu" class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-6" data-kt-menu="true">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
                            <!--begin:Menu link-->
                            <span class="menu-link menu-center">
										<span class="menu-icon me-0">
											<i class="fonticon-house fs-1"></i>
										</span>
									</span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu content-->
                                    <div class="menu-content">
                                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Home</span>
                                    </div>
                                    <!--end:Menu content-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link active" href="../../demo4/dist/index.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Default</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="../../demo4/dist/dashboards/ecommerce.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">eCommerce</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="../../demo4/dist/dashboards/projects.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Projects</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="../../demo4/dist/dashboards/online-courses.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Online Courses</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="../../demo4/dist/dashboards/marketing.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Marketing</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_dashboards_collapse">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo4/dist/dashboards/bidding.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Bidding</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo4/dist/dashboards/pos.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">POS System</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo4/dist/dashboards/call-center.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Call Center</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo4/dist/dashboards/logistics.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Logistics</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo4/dist/dashboards/website-analytics.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Website Analytics</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo4/dist/dashboards/finance-performance.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Finance Performance</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo4/dist/dashboards/store-analytics.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Store Analytics</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo4/dist/dashboards/social.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Social</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo4/dist/dashboards/delivery.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Delivery</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo4/dist/dashboards/crypto.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Crypto</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo4/dist/dashboards/school.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">School</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo4/dist/dashboards/podcast.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Podcast</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo4/dist/landing.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Landing</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <div class="menu-item">
                                    <div class="menu-content">
                                        <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse" data-kt-toggle-text="Show Less">
                                            <span data-kt-toggle-text-target="true">Show 12 More</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                            <span class="svg-icon toggle-on svg-icon-2 me-0">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
															<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                            <span class="svg-icon toggle-off svg-icon-2 me-0">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
															<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
															<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                            <!--begin:Menu link-->
                            <span class="menu-link menu-center">
										<span class="menu-icon me-0">
											<i class="fonticon-stats fs-1"></i>
										</span>
									</span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu content-->
                                    <div class="menu-content">
                                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Pages</span>
                                    </div>
                                    <!--end:Menu content-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">User Profile</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/user-profile/overview.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Overview</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/user-profile/projects.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Projects</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/user-profile/campaigns.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Campaigns</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/user-profile/documents.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Documents</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/user-profile/followers.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Followers</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/user-profile/activity.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Activity</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Account</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/account/overview.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Overview</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/account/settings.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Settings</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/account/security.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Security</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/account/activity.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Activity</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/account/billing.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Billing</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/account/statements.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Statements</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/account/referrals.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Referrals</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/account/api-keys.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">API Keys</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/account/logs.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Logs</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Authentication</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Corporate Layout</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/corporate/sign-in.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Sign-in</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/corporate/sign-up.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Sign-up</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/corporate/two-steps.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Two-steps</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/corporate/reset-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Reset Password</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/corporate/new-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">New Password</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Overlay Layout</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/overlay/sign-in.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Sign-in</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/overlay/sign-up.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Sign-up</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/overlay/two-steps.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Two-steps</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/overlay/reset-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Reset Password</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/overlay/new-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">New Password</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Creative Layout</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/creative/sign-in.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Sign-in</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/creative/sign-up.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Sign-up</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/creative/two-steps.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Two-steps</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/creative/reset-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Reset Password</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/creative/new-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">New Password</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Fancy Layout</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/fancy/sign-in.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Sign-in</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/fancy/sign-up.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Sign-up</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/fancy/two-steps.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Two-steps</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/fancy/reset-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Reset Password</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/layouts/fancy/new-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">New Password</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Email Templates</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/email/welcome-message.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Welcome Message</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/email/reset-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Reset Password</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/email/subscription-confirmed.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Subscription Confirmed</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/email/card-declined.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Credit Card Declined</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/email/promo-1.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Promo 1</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/email/promo-2.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Promo 2</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/authentication/email/promo-3.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Promo 3</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/authentication/extended/multi-steps-sign-up.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Multi-steps Sign-up</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/authentication/extended/two-factor-auth.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Two Factor Auth</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/authentication/general/welcome.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Welcome Message</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/authentication/general/verify-email.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Verify Email</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/authentication/general/coming-soon.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Coming Soon</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/authentication/general/password-confirmation.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Password Confirmation</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/authentication/general/account-deactivated.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Account Deactivation</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/authentication/general/error-404.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Error 404</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/authentication/general/error-500.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Error 500</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Corporate</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/about.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">About</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/team.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Our Team</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/contact.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Contact Us</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/licenses.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Licenses</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/sitemap.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Sitemap</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Social</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/social/feeds.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Feeds</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/social/activity.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Activty</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/social/followers.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Followers</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/social/settings.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Settings</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Blog</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/blog/home.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Blog Home</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/blog/post.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Blog Post</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Careers</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/careers/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Careers List</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/pages/careers/apply.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Careers Apply</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                            <!--begin:Menu link-->
                            <span class="menu-link menu-center">
										<span class="menu-icon me-0">
											<i class="fonticon-layers fs-1"></i>
										</span>
									</span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu content-->
                                    <div class="menu-content">
                                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Utilities</span>
                                    </div>
                                    <!--end:Menu content-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Modals</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">General</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/general/invite-friends.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Invite Friends</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/general/view-users.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">View Users</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/general/select-users.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Select Users</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/general/upgrade-plan.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Upgrade Plan</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/general/share-earn.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Share & Earn</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Forms</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/forms/new-target.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">New Target</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/forms/new-card.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">New Card</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/forms/new-address.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">New Address</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/forms/create-api-key.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Create API Key</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/forms/bidding.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Bidding</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Wizards</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/wizards/create-app.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Create App</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/wizards/create-campaign.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Create Campaign</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/wizards/create-account.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Create Business Acc</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/wizards/create-project.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Create Project</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/wizards/top-up-wallet.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Top Up Wallet</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/wizards/offer-a-deal.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Offer a Deal</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/wizards/two-factor-authentication.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Two Factor Auth</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Search</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/search/users.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Users</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/utilities/modals/search/select-location.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Select Location</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Wizards</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/utilities/wizards/horizontal.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Horizontal</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/utilities/wizards/vertical.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Vertical</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/utilities/wizards/two-factor-authentication.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Two Factor Auth</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/utilities/wizards/create-app.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Create App</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/utilities/wizards/create-campaign.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Create Campaign</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/utilities/wizards/create-account.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Create Account</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/utilities/wizards/create-project.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Create Project</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/utilities/modals/wizards/top-up-wallet.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Top Up Wallet</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/utilities/wizards/offer-a-deal.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Offer a Deal</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Search</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/utilities/search/horizontal.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Horizontal</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/utilities/search/vertical.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Vertical</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/utilities/search/users.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Users</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/utilities/search/select-location.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Location</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                            <!--begin:Menu link-->
                            <span class="menu-link menu-center">
										<span class="menu-icon me-0">
											<i class="fonticon-app-store fs-1"></i>
										</span>
									</span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu content-->
                                    <div class="menu-content">
                                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Apps</span>
                                    </div>
                                    <!--end:Menu content-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="bi bi-patch-check fs-3"></i>
												</span>
												<span class="menu-title">Projects</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/projects/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">My Projects</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/projects/project.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">View Project</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/projects/targets.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Targets</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/projects/budget.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Budget</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/projects/users.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Users</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/projects/files.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Files</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/projects/activity.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Activity</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/projects/settings.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Settings</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="bi bi-cart fs-3"></i>
												</span>
												<span class="menu-title">eCommerce</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Catalog</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/catalog/products.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Products</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/catalog/categories.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Categories</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/catalog/add-product.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Add Product</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/catalog/edit-product.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Edit Product</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/catalog/add-category.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Add Category</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/catalog/edit-category.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Edit Category</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Sales</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/sales/listing.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Orders Listing</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/sales/details.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Order Details</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/sales/add-order.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Add Order</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/sales/edit-order.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Edit Order</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Customers</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/customers/listing.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Customer Listing</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/customers/details.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Customer Details</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Reports</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/reports/view.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Products Viewed</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/reports/sales.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Sales</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/reports/returns.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Returns</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/reports/customer-orders.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Customer Orders</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/ecommerce/reports/shipping.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Shipping</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/ecommerce/settings.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Settings</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="bi bi-telephone-fill fs-3"></i>
												</span>
												<span class="menu-title">Contacts</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/contacts/getting-started.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Getting Started</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/contacts/add-contact.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Add Contact</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/contacts/edit-contact.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Edit Contact</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/contacts/view-contact.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">View Contact</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="bi bi-people fs-3"></i>
												</span>
												<span class="menu-title">Support Center</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/support-center/overview.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Overview</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tickets</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/support-center/tickets/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Tickets List</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/support-center/tickets/view.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">View Ticket</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tutorials</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/support-center/tutorials/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Tutorials List</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/support-center/tutorials/post.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Tutorial Post</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/support-center/faq.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">FAQ</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/support-center/licenses.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Licenses</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/support-center/contact.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Contact Us</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="bi bi-people fs-3"></i>
												</span>
												<span class="menu-title">User Management</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Users</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/user-management/users/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Users List</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/user-management/users/view.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">View User</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Roles</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/user-management/roles/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Roles List</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/user-management/roles/view.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">View Role</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/user-management/permissions.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Permissions</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="bi bi-printer fs-3"></i>
												</span>
												<span class="menu-title">Customers</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/customers/getting-started.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Getting Started</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/customers/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Customer Listing</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/customers/view.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Customer Details</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="bi bi-cart fs-3"></i>
												</span>
												<span class="menu-title">Subscription</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/subscriptions/getting-started.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Getting Started</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/subscriptions/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Subscription List</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/subscriptions/add.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Add Subscription</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/subscriptions/view.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">View Subscription</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="bi bi-hr fs-3"></i>
												</span>
												<span class="menu-title">Invoice Manager</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Invoices</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/invoices/view/invoice-1.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Invoice 1</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/invoices/view/invoice-2.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Invoice 2</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo4/dist/apps/invoices/view/invoice-3.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">Invoice 3</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/invoices/create.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Create Invoice</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="bi-chat-left fs-3"></i>
												</span>
												<span class="menu-title">File Manager</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/file-manager/folders.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Folders</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/file-manager/files.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Files</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/file-manager/blank.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Blank Directory</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/file-manager/settings.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Settings</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="bi-chat-left fs-3"></i>
												</span>
												<span class="menu-title">Inbox</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/inbox/listing.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Messages</span>
                                                <span class="menu-badge">
															<span class="badge badge-success">3</span>
														</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/inbox/compose.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Compose</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/inbox/reply.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">View & Reply</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="bi-chat-left fs-3"></i>
												</span>
												<span class="menu-title">Chat</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/chat/private.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Private Chat</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/chat/group.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Group Chat</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo4/dist/apps/chat/drawer.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Drawer Chat</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="../../demo4/dist/apps/calendar.html">
												<span class="menu-icon">
													<i class="bi bi-calendar3-event fs-3"></i>
												</span>
                                        <span class="menu-title">Calendar</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                            <!--begin:Menu link-->
                            <span class="menu-link menu-center">
										<span class="menu-icon me-0">
											<i class="fonticon-setting fs-1"></i>
										</span>
									</span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-dropdown px-2 py-4 w-200px w-lg-225px mh-75 overflow-auto">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu content-->
                                    <div class="menu-content">
                                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Help</span>
                                    </div>
                                    <!--end:Menu content-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank" title="Check out over 200 in-house components" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Components</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Documentation</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo4/layout-builder.html" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Layout Builder</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Changelog v8.1.6</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Primary menu-->
            </div>
            <!--end::Nav-->
            <!--begin::Footer-->
            <div class="aside-footer d-flex flex-column align-items-center flex-column-auto" id="kt_aside_footer">
                <!--begin::Menu-->
                <div class="mb-7">
                    <button type="button" class="btn btm-sm btn-custom btn-icon" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" title="Quick actions">
                        <i class="fonticon-notification fs-1"></i>
                    </button>
                    <!--begin::Menu 2-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator mb-3 opacity-75"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">New Ticket</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">New Customer</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                            <!--begin::Menu item-->
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">New Group</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--end::Menu item-->
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Member Group</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">New Contact</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator mt-3 opacity-75"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content px-3 py-3">
                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                            </div>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 2-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            @include('diario.includes.header')
            <!--end::Header-->
            <!--begin::Search form-->

            <!--end::Search form-->
            @yield('content')
            <!--begin::Content-->

            <!--end::Content-->
            @include('diario.includes.footer')
            <!--begin::Footer-->
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<script>var BaseUrl = "{{url('/')}}";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
@stack('js')
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->

<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
