
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
                                    <h2 class="tp-breadcrumb-s9-title mb-35 tp-split-title">Single Project</h2>
                                    <div class="tp-breadcrumb-s9-subtitle d-flex justify-content-center tp_fade_anim" data-delay=".5">
                                        <div class="tp-breadcrumb-s1-subtitle"><a href="index.html">Home</a></div>
                                        <span>Single Project</span>
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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tp-project-details-banner">
                                    <img data-speed="0.8" class="w-100" src="/assets/images/background/aboutsection1.avif" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tp-project-details-content-wrap pt-110 pb-80 tp-project-details-spacing-3">
                            <div class="row">
                                <div class="col-lg-4">
                                   <div class="tp-project-details-cetagory-wrap mb-30">
                                      <h2 class="tp-project-details-title mb-35">Project Details</h2>
                                      <div class="tp-project-details-cetagory">
                                         <ul>
                                            <li>
                                               <span class="spacing">Category :</span>
                                               <span>UI/UX Design</span>
                                            </li>
                                            <li>
                                               <span class="spacing">Client Name :</span>
                                               <span>Mr. Daniel Shami</span>
                                            </li>
                                            <li>
                                               <span class="spacing">Industry</span>
                                               <span>Technology &<br> Software</span>
                                            </li>
                                            <li>
                                               <span class="spacing">Launch Date</span>
                                               <span>02 March, 2024</span>
                                            </li>
                                         </ul>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-lg-8">
                                   <div class="tp-project-details-overview-wrap ml-90 mb-30">
                                      <h2 class="tp-project-details-title mb-35">Project Overview</h2>
                                      <p>creative design, and seamless execution. Every project is a journey — from initialbrainstorming to crafting prototypes, refining designs, and final delivery, we ensure quality and creativity remain our top priorities. Our hands-on, transparent approach means you’re involved and informed at every step, guaranteeing results that not only meet expectations but exceed them.
                                        We don’t just deliver projects; we craft experiences that inspire, connect, and grow with your brand. From the first spark of an idea to the final launch, we turn imagination into tangible success.</p>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="tp-project-details-thumb-wrap">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="tp-project-details-thumb mb-30">
                                        <img src="/assets/images/background/aboutsection1.avif" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="tp-project-details-thumb mb-30">
                                        <img src="/assets/images/background/aboutsection1.avif" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="tp-project-details-thumb mb-30">
                                        <img src="/assets/images/background/aboutsection1.avif" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tp-project-details-tag-wrap pt-50">
                            <div class="tp-project-details-tag-border">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7">
                                        <div class="tp-project-details-tag d-flex flex-wrap gap-2 mb-20">
                                            <a href="project-details.html#">UI/UX Design</a>
                                            <a href="project-details.html#">Developer</a>
                                            <a href="project-details.html#">Photography</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-5">
                                        <div class="tp-project-details-social d-flex justify-content-md-end gap-1 mb-20">
                                            <a href="project-details.html#"><i class="fa-brands fa-dribbble"></i></a>
                                            <a href="project-details.html#"><i class="fa-brands fa-behance"></i></a>
                                            <a href="project-details.html#"><i class="fa-brands fa-pinterest"></i></a>
                                            <a href="project-details.html#"><i class="fa-solid fa-share-nodes"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tp-project-navigation-area pt-60">
                            <div class="container-fluid container-1524">
                                <div class="tp-project-navigation-wrap">
                                <div class="row align-items-center">
                                    <div class="col-lg-5">
                                        <div class="tp-project-navigation-btn-wrap mb-30">
                                            <a href="project-details.html#" class="tp-project-navigation-btn mb-30 d-inline-block">Prev project</a>
                                            <div class="tp-project-navigation-thumb d-flex align-items-center">
                                                <img class="mr-30" src="/assets/images/background/aboutsection1.avif" alt="">
                                                <div>
                                                    <span class="mb-10">Branding</span>
                                                    <h5 class="tp-project-navigation-title">The Innovation<br> Blueprint</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="tp-project-navigation-grid text-center mb-30">
                                            <a href="https://html.aqlova.com/acjon-prev/acjon/project-2-colum.html">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.80057 0.35791C2.22126 0.35791 0.123114 2.45621 0.123114 5.03537C0.123114 7.61453 2.2204 9.71268 4.80057 9.71268C7.38075 9.71268 9.47803 7.61453 9.47803 5.03537C9.47803 2.45621 7.37974 0.35791 4.80057 0.35791ZM19.9391 0.35791C17.3599 0.35791 15.2616 2.45621 15.2616 5.03537C15.2616 7.61453 17.3599 9.71268 19.9391 9.71268C22.5184 9.71268 24.617 7.61453 24.617 5.03537C24.617 2.45621 22.5193 0.35791 19.9391 0.35791ZM35.3225 9.71283C37.9013 9.71283 40 7.61468 40 5.03551C40 2.45635 37.903 0.35791 35.3225 0.35791C32.7421 0.35791 30.6451 2.45621 30.6451 5.03537C30.6451 7.61453 32.7437 9.71283 35.3225 9.71283ZM4.67833 24.7009C7.25749 24.7009 9.35622 22.6031 9.35622 20.0235C9.35622 17.4438 7.25749 15.3457 4.67833 15.3457C2.09916 15.3457 0 17.444 0 20.0235C0 22.6031 2.09916 24.7009 4.67833 24.7009ZM19.8169 24.7009C22.3956 24.7009 24.4943 22.6031 24.4943 20.0235C24.4943 17.4438 22.3973 15.3457 19.8169 15.3457C17.2368 15.3457 15.1394 17.4438 15.1394 20.0235C15.1394 22.6031 17.2377 24.7009 19.8169 24.7009ZM35.2016 24.7009C37.7813 24.7009 39.8791 22.6031 39.8791 20.0235C39.8791 17.4438 37.7813 15.3457 35.2016 15.3457C32.6219 15.3457 30.5224 17.4438 30.5224 20.0235C30.5224 22.6031 32.6211 24.7009 35.2016 24.7009ZM4.78537 30.2872C2.2062 30.2872 0.107037 32.3849 0.107037 34.9647C0.107037 37.5434 2.2062 39.642 4.78537 39.642C7.36453 39.642 9.46268 37.5444 9.46268 34.9647C9.46268 32.3849 7.36453 30.2872 4.78537 30.2872ZM19.9248 30.2872C17.3454 30.2872 15.2464 32.3849 15.2464 34.9647C15.2464 37.5434 17.3447 39.642 19.9248 39.642C22.5035 39.642 24.6021 37.5444 24.6021 34.9647C24.6021 32.3849 22.5035 30.2872 19.9248 30.2872ZM35.3078 30.2872C32.729 30.2872 30.6303 32.3849 30.6303 34.9647C30.6303 37.5434 32.729 39.642 35.3078 39.642C37.8875 39.642 39.9852 37.5444 39.9852 34.9647C39.9852 32.3849 37.8865 30.2872 35.3078 30.2872Z" fill="currentColor" />
                                            </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="tp-project-navigation-btn-wrap text-end mb-30">
                                            <a href="project-details.html#" class="tp-project-navigation-btn mb-30 d-inline-block">next project</a>
                                            <div class="tp-project-navigation-thumb d-flex align-items-center justify-content-end">
                                                <div>
                                                    <span class="mb-10">Branding</span>
                                                    <h5 class="tp-project-navigation-title">The Innovation<br> Blueprint</h5>
                                                </div>
                                                <img class="ml-30" src="/assets/images/background/aboutsection1.avif" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tp-project-details-area-end -->


                <!-- tp-project-area-start -->
                <div class="tp-project-area tp-project-details-spacing-2 pb-130" style="background-color: white;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tp-project-title-wrap mb-25">
                                    <h2>Related Project</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="tp-project-slide-thumb mb-30 position-relative">
                                <img class="w-100" src="/assets/images/background/aboutsection1.avif" alt="">
                                    <div class="tp-project-slide-wrap">
                                        <div class="tp-project-slide-content">
                                            <h3 class="tp-project-slide-title"><a href="project-details.html" class="tp-line-black">VisionCraft</a></h3>
                                            <span>Apr,26,2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="tp-project-slide-thumb mb-30 position-relative">
                                <img class="w-100" src="/assets/images/background/aboutsection1.avif" alt="">
                                    <div class="tp-project-slide-wrap">
                                        <div class="tp-project-slide-content">
                                            <h3 class="tp-project-slide-title"><a href="project-details.html" class="tp-line-black">Trading website</a></h3>
                                            <span>Apr,26,2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="tp-project-slide-thumb mb-30 position-relative">
                                <img class="w-100" src="/assets/images/background/aboutsection1.avif" alt="">
                                    <div class="tp-project-slide-wrap">
                                        <div class="tp-project-slide-content">
                                            <h3 class="tp-project-slide-title"><a href="project-details.html" class="tp-line-black">QuantumDesigns</a></h3>
                                            <span>Apr,26,2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tp-project-area-end -->


                              
                                                       



                               


    </div> </div> <?php include INCLUDES_PATH . '/footer.php'; ?>

</body>
</html>