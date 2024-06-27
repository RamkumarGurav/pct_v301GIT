<?
$CI =& get_instance();
if (empty($meta_title)) {
   $meta_title = _project_name_;
}

if (empty($meta_description)) {
   $meta_description = _project_name_;
}

if (empty($meta_keywords)) {
   $meta_keywords = _project_name_;
}

if (empty($meta_others)) {
   $meta_others = "";
}


?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <base href="<?= base_url() ?>">
   <meta property="og:type" content="object" />
   <meta property="og:site_name" content="<?= _project_complete_name_ ?>" />
   <title><?= $meta_title ?></title>
   <meta name="description" content="<?= $meta_description ?>">
   <meta name="keywords" content="<?= $meta_keywords ?>">
   <link rel="shortcut icon" type="image/x-icon" href="<?= IMAGE ?>prachi-logo.png">
   <link href="<?= CSS ?>main.css" rel="stylesheet">
   <link href="<?= CSS ?>common.min.css" rel="stylesheet">
   <link href="<?= CSS ?>fontawsome/fontawesome-pro.css" rel="stylesheet">
   <link rel="stylesheet" href="<?= _lte_files_ ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
   <!-- Toastr -->
   <link rel="stylesheet" href="<?= _lte_files_ ?>plugins/toastr/toastr.min.css">
</head>



<body>

   <!-- Offcanvas area start -->
   <div class="fix">
      <div class="offcanvas-area">
         <div class="offcanvas-wrapper">
            <div class="offcanvas-content">
               <div class="offcanvas-top d-flex justify-content-between align-items-center mb-25">
                  <div class="offcanvas-logo">
                     <a href="<?= MAINSITE ?>">
                        <img src="<?= IMAGE ?>prachi-logo.png" alt="logo not found">
                     </a>
                  </div>
                  <div class="offcanvas-close">
                     <button class="offcanvas-close-icon animation--flip">
                        <span class="offcanvas-m-lines">
                           <span class="offcanvas-m-line line--1"></span><span
                              class="offcanvas-m-line line--2"></span><span class="offcanvas-m-line line--3"></span>
                        </span>
                     </button>
                  </div>
               </div>
               <div class="offcanvas-search mb-0">
                  <form action="#">
                     <input type="text" name="offcanvasSearch" placeholder="Search here">
                     <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </form>
               </div>
               <div class="mobile-menu fix mb-25"></div>
               <img src="<?= IMAGE ?>prachi2.png" style="width: 120px;filter: drop-shadow(0 2px);" class="dsknn">
            </div>
         </div>
      </div>
   </div>
   <div class="offcanvas-overlay"></div>
   <div class="offcanvas-overlay-white"></div>
   <!-- Offcanvas area start -->



   <!-- Header area start -->
   <header>
      <div class="header-top-area bg-theme-primary d-none d-sm-block">
         <div class="container">
            <div class="header-top-main">
               <div class="header-top-left d-flex align-items-center">
                  <div class="header-top-left-item">
                     <span><i class="fa-solid fa-location-dot"></i></span>
                     <a href="#">Jayanagar 9th block bangalore</a>
                  </div>
                  <div class="header-top-left-item">
                     <span><i class="fa-solid fa-envelope"></i></span>
                     <a href="#"><span class="__cf_email__"
                           data-cfemail="98fbf7f6ecf9fbecd8ecf7edeaf1fff7b6fbf7f5">info@prachi.com</span></a>
                  </div>
               </div>
               <div class="heder-top-right d-none d-md-flex align-items-center gap-3">
                  <div class="topbar-social">
                     <ul>
                        <li><a href="#"><i><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                       d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                       clip-rule="evenodd" />
                                 </svg>
                              </i></a></li>
                        <li><a href="#"><i><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                       d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z"
                                       clip-rule="evenodd" />
                                 </svg>
                              </i></a></li>
                        <li><a href="#"><i><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                       d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                                       clip-rule="evenodd" />
                                    <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                                 </svg>
                              </i></a></li>
                        <li><a href="#"><i><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                       d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                       clip-rule="evenodd" />
                                 </svg>
                              </i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="header-area header-style-four" id="header-sticky">
         <div class="container">
            <div class="mega-menu-wrapper p-relative">
               <div class="header-main">
                  <div class="header-left">
                     <div class="header-logo">
                        <a href="<?= MAINSITE ?>"><img src="<?= IMAGE ?>prachi-logo.png" alt="logo not found"></a>
                     </div>

                  </div>
                  <div class="header-right">
                     <div class="header-action d-flex align-items-center">
                        <div class="mean-menu-wrapper d-none d-xl-block">
                           <div class="main-menu">
                              <nav class="main-menu main-menu-three" id="mobile-menu">
                                 <ul>
                                    <li class="has-mega-menu">
                                       <a href="<?= MAINSITE ?>">Home</a>

                                    </li>
                                    <li class="menu-item-has-children">
                                       <a href="javascript:void(0)">Escape from Reality</a>
                                       <ul class="submenu">
                                          <li class="menu-item-has-children has-arrow">
                                             <a href="<?= MAINSITE ?>story">Story</a>

                                          </li>
                                          <li class="menu-item-has-children has-arrow">
                                             <a href="<?= MAINSITE ?>upcoming-adventures">Upcoming Adventures</a>

                                          </li>
                                          <li class="menu-item-has-children has-arrow">
                                             <a href="<?= MAINSITE ?>activities">Activities</a>

                                          </li>
                                          <li class="menu-item-has-children has-arrow">
                                             <a href="<?= MAINSITE ?>gallery">Gallery </a>

                                          </li>
                                          <li class="menu-item-has-children has-arrow">
                                             <a href="<?= MAINSITE ?>videos">Videos </a>

                                          </li>

                                       </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                       <a href="javascript:void(0)">Tours</a>
                                       <ul class="submenu">
                                          <li class="menu-item-has-children has-arrow">
                                             <a href="<?= MAINSITE ?>domestic-tours">Domestic Tours</a>

                                          </li>
                                          <li class="menu-item-has-children has-arrow">
                                             <a href="<?= MAINSITE ?>international-tours">International Tours</a>

                                          </li>

                                       </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                       <a href="javascript:void(0)">Group Tours</a>
                                       <ul class="submenu">
                                          <li class="menu-item-has-children has-arrow">
                                             <a href="<?= MAINSITE ?>upcoming-tours">Upcoming Tours </a>

                                          </li>

                                       </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                       <a href="<?= MAINSITE ?>blog">Blog</a>

                                    </li>
                                    <li><a href="<?= MAINSITE ?>contact">Contact</a></li>

                                 </ul>
                              </nav>
                           </div>
                        </div>
                        <div class="header-hamburger ml-20 ">
                           <div class="sidebar-toggle">
                              <a class="bar-icon style-two dsknn" href="javascript:void(0)">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </a>
                              <img src="<?= IMAGE ?>prachi2.png" style="width: 120px;filter: drop-shadow(0 2px);"
                                 class="mbnn">
                           </div>
                        </div>
                        <!-- for wp -->
                        <div class="header-hamburger ml-20 d-none">
                           <button type="button" class="hamburger-btn offcanvas-open-btn">
                              <span>01</span>
                              <span>01</span>
                              <span>01</span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- Header area end -->