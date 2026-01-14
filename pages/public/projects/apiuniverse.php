
<?php
require_once __DIR__ . '/../../../config/constants.php';

$pageTitle = "Projects - Zirostack";
$useTemplateAssets = true; 
$current_page = 'projects';
?>

<!DOCTYPE html>
<html lang="en">
<?php include INCLUDES_PATH . '/header.php'; ?>

<div class="col-xl-10 offset-xl-2">
    <div class="hr-border-wrap">
                <!-- header area start -->
                            <div id="header-sticky" class="tp-header-area tp-header-ptb tp-header-blur sticky-black-bg header-transparent" >
                                <div class="container-fluid">
                                    <div class="tp-header-hr-main">
                                        <div class="col-xl-10 offset-xl-2">
                                            <div class="row align-items-center">
                                                <div class="col-xl-3 col-6">
                                                    <div class="tp-header-hr-logo d-xl-none">
                                                        <a href="/">
                                                            <!-- <img data-width="120" src="/assets/vendor/img/logo/logo-white.png" alt=""> -->
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-6">
                                                    <div class="tp-header-right text-end">
                                                        <div class="tp-header-14-bar-wrap" style="color: #000000; border-color: #000000;"" >
                                                            <button class="tp-header-8-bar tp-offcanvas-open-btn" style="color: #000000; border-color: #000000;">
                                                                <span style="color: #000000;">Menu</span>
                                                                <span style="color: #000000;">
                                                                    <svg style="color: #000000;" width="24" height="8" viewBox="0 0 24 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M0 0H14V1.5H0V0Z" fill="currentcolor" />
                                                                        <path d="M0 6H24V7.5H0V6Z" fill="currentcolor" />
                                                                    </svg>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- header area end -->
<!-- breadcrumb style 9 start -->
                <div class="tp-breadcrumb-s9-spacing z-1 black-bg position-relative">
                    <img class="tp-breadcrumb-s9-shape d-none d-xl-block" data-speed="1.1" src="/assets/images/background/shape.png" alt="">
                    <span class="tp-breadcrumb-s9-shape-2 d-none d-xl-block" data-speed=".8">
                        <svg width="113" height="123" viewBox="0 0 113 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M112 47.2999C105.185 51.2617 89.5377 57.5982 75.0023 57.7144M75.0023 57.7144C65.5616 57.7899 56.59 55.2414 50.8116 47.7142C43.4495 37.7336 36.607 15.9077 65.6044 2.44499C76.5432 -2.63361 87.4881 5.67159 83.3326 27.4117C82.0597 34.0713 79.9484 45.7292 75.0023 57.7144ZM75.0023 57.7144C70.6328 68.3022 64.0508 79.1454 53.8798 87.0237C42.976 95.4696 20.1437 104.7 3.43798 103.877M3.43798 103.877C2.60952 103.836 1.79613 103.77 1 103.679M3.43798 103.877C2.57068 103.775 1.75142 103.71 1 103.679M3.43798 103.877C11.9098 104.872 24.9659 109.446 24.152 122M1 103.679C6.29953 103.76 18.5389 98.8375 25.1004 78.4927M85.2188 67.6675C83.7138 72.7063 76.1105 89.0948 60.6553 96.4496" stroke="#F5F7F5" stroke-width="1.5" />
                        </svg>
                    </span>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tp-breadcrumb-s9-wrap text-center">
                                    <h2 class="tp-breadcrumb-s9-title mb-35 tp-split-title"><a href="https://api.universe360x.com/">Api Universe</a></h2>
                                    <div class="tp-breadcrumb-s9-subtitle d-flex justify-content-center tp_fade_anim" data-delay=".5">
                                        <div class="tp-breadcrumb-s1-subtitle"><a href="index.html">Project</a></div>
                                        <span>Backend Systems</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tp-breadcrumb-details-area-end -->


                <!-- tp-project-details-area-start -->
                <div class="tp-project-details-area tp-project-details-spacing pt-120 pb-150" style="background-color: white;">
    <div class="container">
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="tp-project-details-banner">
                    <img data-speed="0.8" class="w-100" src="/assets/images/projects/Screenshot 2026-01-07 012032.png" alt="Universe360X API">
                </div>
            </div>
        </div> -->

        <div class="tp-project-details-content-wrap pt-110 pb-80 tp-project-details-spacing-3">
            <div class="row">
                <!-- PROJECT DETAILS -->
                <div class="col-lg-4">
                    <div class="tp-project-details-cetagory-wrap mb-30">
                        <h2 class="tp-project-details-title mb-35">Project Details</h2>
                        <div class="tp-project-details-cetagory">
                            <ul>
                                <li>
                                    <span class="spacing">Project Name :</span>
                                    <span>Universe360X API</span>
                                </li>
                                <li>
                                    <span class="spacing">Category :</span>
                                    <span>Backend Systems / API</span>
                                </li>
                                <li>
                                    <span class="spacing">Client :</span>
                                    <span>Personal Project</span>
                                </li>
                                <li>
                                    <span class="spacing">Industry :</span>
                                    <span>Technology & Software</span>
                                </li>
                                <li>
                                    <span class="spacing">Go to site :</span>
                                    <span style="text-decoration: underline;"><a href="https://api.universe360x.com/">Api Universe</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- PROJECT OVERVIEW -->
                <div class="col-lg-8">
                    <div class="tp-project-details-overview-wrap ml-90 mb-30">
                        <h2 class="tp-project-details-title mb-35">Project Overview</h2>
                        <p>
                            Universe360X API is a modern, secure, and scalable RESTful backend system designed
                            for authentication and user management across web and mobile applications.
                            The project focuses on clean architecture, security best practices, and
                            long-term scalability.
                        </p>

                        <p>
                            Built with Laravel and powered by Sanctum, the API implements token-based
                            authentication to ensure secure session handling, protected routes,
                            and seamless integration with frontend clients. The system supports
                            user registration, login, token management, and role-ready access control.
                        </p>

                        <p>
                            Universe360X API was developed as a foundational backend service that can be
                            reused across multiple products, enabling rapid development while maintaining
                            high standards for security, performance, and maintainability.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                <!-- tp-project-details-area-end -->



                              
                                                       



                               


    </div> </div> <?php include INCLUDES_PATH . '/footer.php'; ?>

</body>
</html>