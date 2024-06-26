<!-- Start Header Area -->
<header class="rbt-header rbt-header-10">
    <div class="rbt-sticky-placeholder"></div>
    <div class="rbt-header-wrapper  header-not-transparent header-sticky">
        <div class="container">
            <div class="mainbar-row rbt-navigation-center align-items-center">
                <div class="header-left rbt-header-content">
                    <div class="header-info">
                        <div class="logo">
                            <a href="/">
                                <img src="/public/assets/images/logo/logo.png" alt="Education Logo Images">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rbt-main-navigation d-none d-xl-block">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            <li class="with-megamenu position-static">
                                <a href="/">Trang chủ</a>
                            </li>

                            <li class="with-megamenu has-menu-child-item">
                                <a href="/search">Khoá học </a>
                                <!-- End Mega Menu  -->
                            </li>
                            <li class="with-megamenu has-menu-child-item">
                                <a href="/contact">Liên hệ </a>
                                <!-- End Mega Menu  -->
                            </li>
                            <li class="with-megamenu has-menu-child-item">
                                <a href="/about">Về chúng tôi </a>
                                <!-- End Mega Menu  -->
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="header-right">
                    <!-- Navbar Icons -->
                    <ul class="quick-access " style="<?= !$user ? 'margin-right: 20px;' : '' ?>">
                        <li class="access-icon">
                            <a class="search-trigger-active rbt-round-btn" href="#">
                                <i class="feather-search"></i>
                            </a>
                        </li>

                        <li class="access-icon rbt-mini-cart">
                            <a class="rbt-cart-sidenav-activation rbt-round-btn" href="#">
                                <i class="feather-shopping-cart"></i>
                                <?php
                                $cart_count = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
                                ?>
                                <span id="cart-count" class="rbt-cart-count <?= $cart_count ? "" : "d-none" ?>"><?= $cart_count ? $cart_count : 0 ?></span>
                            </a>
                        </li>

                        <?php
                        if ($user) {
                        ?>
                            <li class="account-access rbt-user-wrapper d-none d-xl-block">
                                <a href="#"><i class="feather-user"></i></a>
                                <div class="rbt-user-menu-list-wrapper" style="right: 0;left: auto">
                                    <div class="inner">
                                        <div class="rbt-admin-profile">
                                            <div class="admin-thumbnail">
                                                <img src="<?= $user['avatar_url'] ? $user['avatar_url'] : '/public/assets/images/user/default.png' ?>" alt="User Images">
                                            </div>
                                            <div class="admin-info">
                                                <span class="name"><?= $user['name'] ?></span>
                                                <a class="rbt-btn-link color-primary" href="profile.html">View Profile</a>
                                            </div>
                                        </div>
                                        <ul class="user-list-wrapper">
                                            <li>
                                                <a href="/user/dashboard">
                                                    <i class="feather-home"></i>
                                                    <span>Thống kê</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/user/enrolled-courses">
                                                    <i class="feather-shopping-bag"></i>
                                                    <span>Đã tham gia</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/user/dashboard">
                                                    <i class="feather-star"></i>
                                                    <span>Đánh gía</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/user/quiz-history">
                                                    <i class="feather-list"></i>
                                                    <span>Kết quả Quiz</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/user/payment-history">
                                                    <i class="feather-clock"></i>
                                                    <span>Lịch sử thanh toán</span>
                                                </a>
                                            </li>

                                        </ul>
                                        <hr class="mt--10 mb--10">
                                        <ul class="user-list-wrapper">
                                            <li><a href="/user/my-course" class=""><i class="feather-monitor"></i><span>Khoá học của tôi</span></a></li>
                                        </ul>
                                        <hr class="mt--10 mb--10">
                                        <ul class="user-list-wrapper">
                                            <li>
                                                <a href="/user/setting">
                                                    <i class="feather-settings"></i>
                                                    <span>Cài đặt</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/auth/logout">
                                                    <i class="feather-log-out"></i>
                                                    <span>Đăng xuất</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>

                        <li class="access-icon rbt-user-wrapper d-block d-xl-none">
                            <a class="rbt-round-btn" href="#"><i class="feather-user"></i></a>
                            <div class="rbt-user-menu-list-wrapper" style="right: 0;">
                                <div class="inner">
                                    <div class="rbt-admin-profile">
                                        <div class="admin-thumbnail">
                                            <img src="/public/assets/images/team/avatar.jpg" alt="User Images">
                                        </div>
                                        <div class="admin-info">
                                            <span class="name">Nipa Bali</span>
                                            <a class="rbt-btn-link color-primary" href="profile.html">View Profile</a>
                                        </div>
                                    </div>
                                    <ul class="user-list-wrapper">
                                        <li>
                                            <a href="/user/dashboard">
                                                <i class="feather-home"></i>
                                                <span>My Dashboard</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="feather-bookmark"></i>
                                                <span>Bookmark</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instructor-enrolled-courses.html">
                                                <i class="feather-shopping-bag"></i>
                                                <span>Enrolled Courses</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instructor-wishlist.html">
                                                <i class="feather-heart"></i>
                                                <span>Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instructor-reviews.html">
                                                <i class="feather-star"></i>
                                                <span>Reviews</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instructor-my-quiz-attempts.html">
                                                <i class="feather-list"></i>
                                                <span>My Quiz Attempts</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instructor-order-history.html">
                                                <i class="feather-clock"></i>
                                                <span>Order History</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instructor-quiz-attempts.html">
                                                <i class="feather-message-square"></i>
                                                <span>Question &amp; Answer</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <hr class="mt--10 mb--10">
                                    <ul class="user-list-wrapper">
                                        <li>
                                            <a href="#">
                                                <i class="feather-book-open"></i>
                                                <span>Getting Started</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <hr class="mt--10 mb--10">
                                    <ul class="user-list-wrapper">
                                        <li>
                                            <a href="instructor-settings.html">
                                                <i class="feather-settings"></i>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/">
                                                <i class="feather-log-out"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <?php if (!$user) { ?>
                        <div class="rbt-btn-wrapper d-none d-xl-block">
                            <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none" href="/login">
                                <span data-text="Đăng Ký Ngay">Đăng Ký Ngay</span>
                            </a>
                        </div>
                    <?php } ?>

                    <!-- Start Mobile-Menu-Bar -->
                    <div class="mobile-menu-bar d-block d-xl-none">
                        <div class="hamberger">
                            <button class="hamberger-button rbt-round-btn">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Start Mobile-Menu-Bar -->

                </div>
            </div>
        </div>
        <!-- Start Search Dropdown  -->
        <div class="rbt-search-dropdown">
            <div class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/search">
                            <input type="text" placeholder="What are you looking for?">
                            <div class="submit-btn">
                                <button class="rbt-btn btn-gradient btn-md" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Search Dropdown  -->
    </div>
</header>
<!-- Mobile Menu Section -->
<div class="popup-mobile-menu">
    <div class="inner-wrapper">
        <div class="inner-top">
            <div class="content">
                <div class="logo">
                    <a href="/">
                        <img src="/public/assets/images/logo/logo.png" alt="Education Logo Images">
                    </a>
                </div>
                <div class="rbt-btn-close">
                    <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                </div>
            </div>
            <p class="description">Histudy is a education website template. You can customize all.</p>
            <ul class="navbar-top-left rbt-information-list justify-content-start">
                <li>
                    <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                </li>
                <li>
                    <a href="#"><i class="feather-phone"></i>(302) 555-0107</a>
                </li>
            </ul>
        </div>

        <nav class="mainmenu-nav">
            <ul class="mainmenu">
                <li class="with-megamenu position-static">
                    <a href="/">Trang chủ</a>
                </li>

                <li class="with-megamenu has-menu-child-item">
                    <a href="#">Courses <i class="feather-chevron-down"></i></a>
                    <!-- Start Mega Menu  -->
                    <div class="rbt-megamenu grid-item-2">
                        <div class="wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mega-top-banner">
                                        <div class="content">
                                            <h4 class="title">Developer hub</h4>
                                            <p class="description">Start building fast, with code samples, key resources and more.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row--15">
                                <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                    <h3 class="rbt-short-title">Course Layout</h3>
                                    <ul class="mega-menu-item">
                                        <li><a href="course-filter-one-toggle.html">Filter One Toggle</a></li>
                                        <li><a href="course-filter-one-open.html">Filter One Open</a></li>
                                        <li><a href="course-filter-two-toggle.html">Filter Two Toggle</a></li>
                                        <li><a href="course-filter-two-open.html">Filter Two Open</a></li>
                                        <li><a href="course-with-tab.html">Course With Tab</a></li>
                                        <li><a href="course-with-tab-two.html">Course With Tab Two</a></li>
                                        <li><a href="course-card-2.html">Course Card Two</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                    <h3 class="rbt-short-title">Course Layout</h3>
                                    <ul class="mega-menu-item">
                                        <li><a href="course-card-3.html">Course Card Three</a></li>
                                        <li><a href="course-masonry.html">Course Masonry</a></li>
                                        <li><a href="course-with-sidebar.html">Course With Sidebar</a></li>
                                        <li><a href="course-details.html">Course Details</a></li>
                                        <li><a href="course-details-2.html">Course Details Two</a></li>
                                        <li><a href="lesson.html">Course Lesson <span class="rbt-badge-card">New</span></a></li>
                                        <li><a href="create-course.html">Create Course <span class="rbt-badge-card">New</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="nav-quick-access">
                                        <li><a href="#"><i class="feather-folder-minus"></i> Quick Start Guide</a></li>
                                        <li><a href="#"><i class="feather-folder-minus"></i> For Open Source</a></li>
                                        <li><a href="#"><i class="feather-folder-minus"></i> API Status</a></li>
                                        <li><a href="#"><i class="feather-folder-minus"></i> Support</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Mega Menu  -->
                </li>

                <li class="has-dropdown has-menu-child-item">
                    <a href="#">Dashboard
                        <i class="feather-chevron-down"></i>
                    </a>
                    <ul class="submenu">
                        <li class="has-dropdown"><a href="#">Instructor Dashboard</a>
                            <ul class="submenu">
                                <li><a href="/user/dashboard">Dashboard</a></li>
                                <li><a href="instructor-profile.html">Profile</a></li>
                                <li><a href="instructor-enrolled-courses.html">Enrolled Courses</a></li>
                                <li><a href="instructor-wishlist.html">Wishlist</a></li>
                                <li><a href="instructor-reviews.html">Reviews</a></li>
                                <li><a href="instructor-my-quiz-attempts.html">My Quiz Attempts</a></li>
                                <li><a href="instructor-order-history.html">Order History</a></li>
                                <li><a href="instructor-course.html">My Course</a></li>
                                <li><a href="instructor-announcements.html">Announcements</a></li>
                                <li><a href="instructor-quiz-attempts.html">Quiz Attempts</a></li>
                                <li><a href="instructor-assignments.html">Assignments</a></li>
                                <li><a href="instructor-settings.html">Settings</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="#">Student Dashboard</a>
                            <ul class="submenu">
                                <li><a href="student-dashboard.html">Dashboard</a></li>
                                <li><a href="student-profile.html">Profile</a></li>
                                <li><a href="student-enrolled-courses.html">Enrolled Courses</a></li>
                                <li><a href="student-wishlist.html">Wishlist</a></li>
                                <li><a href="student-reviews.html">Reviews</a></li>
                                <li><a href="student-my-quiz-attempts.html">My Quiz Attempts</a></li>
                                <li><a href="student-order-history.html">Order History</a></li>
                                <li><a href="student-settings.html">Settings</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="with-megamenu has-menu-child-item position-static">
                    <a href="#">Pages <i class="feather-chevron-down"></i></a>
                    <!-- Start Mega Menu  -->
                    <div class="rbt-megamenu grid-item-4">
                        <div class="wrapper">
                            <div class="row row--15">
                                <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                    <h3 class="rbt-short-title">Get Started</h3>
                                    <ul class="mega-menu-item">
                                        <li><a href="about-us-01.html">About Us</a></li>
                                        <li><a href="about-us-02.html">About Us 02</a></li>
                                        <li><a href="event-grid.html">Event Grid</a></li>
                                        <li><a href="event-list.html">Event List</a></li>
                                        <li><a href="event-sidebar.html">Event Sidebar</a></li>
                                        <li><a href="event-details.html">Event Details</a></li>
                                        <li><a href="academy-gallery.html">Academy Gallery</a></li>
                                        <li><a href="admission-guide.html">Admission Guide</a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                    <h3 class="rbt-short-title">Get Started</h3>
                                    <ul class="mega-menu-item">
                                        <li><a href="profile.html">Profile</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="become-a-teacher.html">Become a Teacher</a></li>
                                        <li><a href="instructor.html">Instructor</a></li>
                                        <li><a href="faqs.html">FAQS</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="maintenance.html">Maintenance</a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                    <h3 class="rbt-short-title">Shop Pages</h3>
                                    <ul class="mega-menu-item">
                                        <li><a href="shop.html">Shop <span class="rbt-badge-card">Sale Anything</span></a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                        <li><a href="my-account.html">My Acount</a></li>
                                        <li><a href="login.html">Login &amp; Register</a></li>
                                        <li><a href="subscription.html">Subscription</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                    <div class="mega-category-item">
                                        <!-- Start Single Category  -->
                                        <div class="nav-category-item">
                                            <div class="thumbnail">
                                                <div class="image"><img src="/public/assets/images/course/category-2.png" alt="Course images"></div>
                                                <a href="course-filter-one-toggle.html">
                                                    <span>Online Education</span>
                                                    <i class="feather-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Single Category  -->

                                        <!-- Start Single Category  -->
                                        <div class="nav-category-item">
                                            <div class="thumbnail">
                                                <div class="image"><img src="/public/assets/images/course/category-1.png" alt="Course images"></div>
                                                <a href="course-filter-one-toggle.html">
                                                    <span>Language Club</span>
                                                    <i class="feather-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Single Category  -->

                                        <!-- Start Single Category  -->
                                        <div class="nav-category-item">
                                            <div class="thumbnail">
                                                <div class="image"><img src="/public/assets/images/course/category-4.png" alt="Course images"></div>
                                                <a href="course-filter-one-toggle.html">
                                                    <span>University Status</span>
                                                    <i class="feather-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Single Category  -->

                                        <!-- Start Single Category  -->
                                        <div class="nav-category-item">
                                            <div class="thumbnail">
                                                <a href="course-filter-one-toggle.html">
                                                    <span>Course School</span>
                                                    <i class="feather-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Single Category  -->

                                        <!-- Start Single Category  -->
                                        <div class="nav-category-item">
                                            <div class="thumbnail">
                                                <div class="image"><img src="/public/assets/images/course/category-9.png" alt="Course images"></div>
                                                <a href="course-filter-one-toggle.html">
                                                    <span>Academy</span>
                                                    <i class="feather-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Single Category  -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Mega Menu  -->
                </li>

                <li class="with-megamenu has-menu-child-item position-static">
                    <a href="#">Elements <i class="feather-chevron-down"></i></a>
                    <!-- Start Mega Menu  -->
                    <div class="rbt-megamenu grid-item-3">
                        <div class="wrapper">
                            <div class="row row--15 single-dropdown-menu-presentation">
                                <div class="col-lg-4 col-xxl-4 single-mega-item">
                                    <ul class="mega-menu-item">
                                        <li><a href="style-guide.html">Style Guide <span class="rbt-badge-card">Hot</span></a></li>
                                        <li><a href="accordion.html">Accordion</a></li>
                                        <li><a href="advancetab.html">Advance Tab</a></li>
                                        <li><a href="brand.html">Brand</a></li>
                                        <li><a href="button.html">Button</a></li>
                                        <li><a href="badge.html">Badge</a></li>
                                        <li><a href="card.html">Card</a></li>
                                        <li><a href="call-to-action.html">Call To Action</a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-xxl-4 single-mega-item">
                                    <ul class="mega-menu-item">
                                        <li><a href="counterup.html">Counter</a></li>
                                        <li><a href="category.html">Categories</a></li>
                                        <li><a href="header.html">Header Style</a></li>
                                        <li><a href="newsletter.html">Newsletter</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="social.html">Social</a></li>
                                        <li><a href="list-style.html">List Style</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-4 col-xxl-4 single-mega-item">
                                    <ul class="mega-menu-item">
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="progressbar.html">Progressbar</a></li>
                                        <li><a href="testimonial.html">Testimonial</a></li>
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="split.html">Split Area</a></li>
                                        <li><a href="search.html">Search Style</a></li>
                                        <li><a href="instagram.html">Instagram Style</a></li>
                                        <li><a href="#">&amp; More Coming</a></li>

                                    </ul>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="btn-wrapper">
                                        <a class="rbt-btn btn-gradient hover-icon-reverse square btn-xl w-100 text-center mt--30 hover-transform-none" href="#">
                                            <span class="icon-reverse-wrapper">
                                                <span class="btn-text">Visit Histudy Template</span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Mega Menu  -->
                </li>

                <li class="with-megamenu has-menu-child-item position-static">
                    <a href="#">Blog <i class="feather-chevron-down"></i></a>
                    <!-- Start Mega Menu  -->
                    <div class="rbt-megamenu grid-item-3">
                        <div class="wrapper">
                            <div class="row row--15">
                                <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                    <h3 class="rbt-short-title">Blog Styles</h3>
                                    <ul class="mega-menu-item">
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="blog.html">Blog Grid</a></li>
                                        <li><a href="blog-grid-minimal.html">Blog Grid Minimal</a></li>
                                        <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="post-format-standard.html">Post Format Standard</a></li>
                                        <li><a href="post-format-gallery.html">Post Format Gallery</a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                    <h3 class="rbt-short-title">Get Started</h3>
                                    <ul class="mega-menu-item">
                                        <li><a href="post-format-quote.html">Post Format Quote</a></li>
                                        <li><a href="post-format-audio.html">Post Format Audio</a></li>
                                        <li><a href="post-format-video.html">Post Format Video</a></li>
                                        <li><a href="#">Media Under Title <span class="rbt-badge-card">Coming</span></a></li>
                                        <li><a href="#">Sticky Sidebar <span class="rbt-badge-card">Coming</span></a></li>
                                        <li><a href="#">Auto Masonry <span class="rbt-badge-card">Coming</span></a></li>
                                        <li><a href="#">Meta Overlaid <span class="rbt-badge-card">Coming</span></a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                    <div class="rbt-ads-wrapper">
                                        <a class="d-block" href="#"><img src="/public/assets/images/service/mobile-cat.jpg" alt="Education Images"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Mega Menu  -->
                </li>
            </ul>
        </nav>

        <div class="mobile-menu-bottom">
            <div class="rbt-btn-wrapper mb--20">
                <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center" href="#">
                    <span>Đăng Ký Ngay</span>
                </a>
            </div>

            <div class="social-share-wrapper">
                <span class="rbt-short-title d-block">Find With Us</span>
                <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                    <li><a href="https://www.facebook.com/">
                            <i class="feather-facebook"></i>
                        </a>
                    </li>
                    <li><a href="https://www.twitter.com">
                            <i class="feather-twitter"></i>
                        </a>
                    </li>
                    <li><a href="https://www.instagram.com/">
                            <i class="feather-instagram"></i>
                        </a>
                    </li>
                    <li><a href="https://www.linkdin.com/">
                            <i class="feather-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- Start Side Vav -->
<div class="rbt-cart-side-menu">
    <div class="inner-wrapper">
        <div class="inner-top">
            <div class="content">
                <div class="title">
                    <h4 class="title mb--0">Giỏ hàng của bạn</h4>
                </div>
                <div class="rbt-btn-close" id="btn_sideNavClose">
                    <button class="minicart-close-button rbt-round-btn"><i class="feather-x"></i></button>
                </div>
            </div>
        </div>
        <nav class="side-nav w-100">
            <ul class="rbt-minicart-wrapper" id="cart-content">

                <?php
                $subtotal = 0;
                $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
                ?>

                <?php if ($cart) : ?>
                    <?php foreach ($cart as $item) : ?>
                        <?php
                        require_once 'model/course.php';
                        $course_header = (new Course)->where('id', '=', $item)->first();
                        $subtotal += $course_header['price'];
                        ?>
                        <li class="minicart-item">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="<?= $course_header['thumbnails'] ?>" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="title"><a href="single-product.html"><?= $course_header['name'] ?></a></h6>

                                <span class="price"><?= number_format($course_header['price']) ?> vnđ</span>
                            </div>
                            <div class="close-btn" onclick="delete_cart(<?= $course_header['id'] ?>)">
                                <button class="rbt-round-btn"><i class="feather-x"></i></button>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div>Chưa có sản phẩm nào.</div>
                <?php endif; ?>

            </ul>
        </nav>

        <div class="rbt-minicart-footer">
            <hr class="mb--0">
            <div class="rbt-cart-subttotal">
                <p class="subtotal"><strong>Tạm tính:</strong></p>
                <p class="price" id="cart-subtotal"><?= number_format($subtotal) ?> vnđ</p>
            </div>
            <hr class="mb--0">
            <div class="rbt-minicart-bottom mt--20">
                <div class="view-cart-btn">
                    <a class="rbt-btn btn-border icon-hover w-100 text-center" href="/cart">
                        <span class="btn-text">Xem giỏ hàng</span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    </a>
                </div>
                <div class="checkout-btn mt--20">
                    <a class="rbt-btn btn-gradient icon-hover w-100 text-center" href="/checkout">
                        <span class="btn-text">Thanh toán</span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Side Vav -->
<a class="close_side_menu" href="javascript:void(0);"></a>