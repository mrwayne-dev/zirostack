
<?php
require_once __DIR__ . '/../../config/constants.php';

$pageTitle = "Projects - Zirostack";
$useTemplateAssets = true;
$current_page = 'projects';
?>

<!DOCTYPE html>
<html lang="en">
<?php include INCLUDES_PATH . '/header.php'; ?>

<div class="col-xl-10 offset-xl-2 page-bg-white">
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
                                                        <div class="tp-header-14-bar-wrap header-dark">
                                                            <button class="tp-header-8-bar tp-offcanvas-open-btn">
                                                                <span>Menu</span>
                                                                <span>
                                                                    <svg width="24" height="8" viewBox="0 0 24 8" fill="none" xmlns="http://www.w3.org/2000/svg">
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
<!-- breadcrumb style 7 start -->
                <div class="tp-breadcrumb-s7-ptb tp-breadcrumb-s8-style position-relative" class="page-bg-white">
                    <span class="tp-breadcrumb-s7-shape d-none d-xl-block" data-speed=".8">
                        <svg width="113" height="123" viewBox="0 0 113 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M112 47.2999C105.185 51.2617 89.5377 57.5982 75.0023 57.7144M75.0023 57.7144C65.5616 57.7899 56.59 55.2414 50.8116 47.7142C43.4495 37.7336 36.607 15.9077 65.6044 2.44499C76.5432 -2.63361 87.4881 5.67159 83.3326 27.4117C82.0597 34.0713 79.9484 45.7292 75.0023 57.7144ZM75.0023 57.7144C70.6328 68.3022 64.0508 79.1454 53.8798 87.0237C42.976 95.4696 20.1437 104.7 3.43798 103.877M3.43798 103.877C2.60952 103.836 1.79613 103.77 1 103.679M3.43798 103.877C2.57068 103.775 1.75142 103.71 1 103.679M3.43798 103.877C11.9098 104.872 24.9659 109.446 24.152 122M1 103.679C6.29953 103.76 18.5389 98.8375 25.1004 78.4927M85.2188 67.6675C83.7138 72.7063 76.1105 89.0948 60.6553 96.4496" stroke="#010103" stroke-width="1.5" />
                        </svg>
                    </span>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tp-breadcrumb-s7-title-wrap mb-35">
                                    <h4 class="tp-breadcrumb-s7-title text-uppercase tp-split-title">Our Creative<br>
                                        <span class="mr-20">
                                            <svg width="59" height="54" viewBox="0 0 59 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0H58.3784V51.0811L0 0Z" fill="#010103" />
                                                <path d="M0 29.1892H27.7297V54L0 29.1892Z" fill="#C9F31D" />
                                            </svg>
                                        </span>
                                        Real Projects
                                    </h4>
                                </div>
                            </div>
                            <div class="col-xl-9 offset-xl-1">
                                <div class="tp-breadcrumb-s7-content-wrap tp_fade_anim" data-delay=".5">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3">
                                            <div class="tp-breadcrumb-s7-subtitle">
                                                <div class="tp-breadcrumb-s1-subtitle">Portfolio</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-8">
                                            <div class="tp-breadcrumb-s7-content">
                                                <p class="mb-5">We are a forward-thinking digital creative agency
                                                    dedicated to crafting impactful brand. Here's a few of those projects.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- breadcrumb style 7 end -->


                <!-- tp-project-area-start -->
                <div class="tp-project-area inner-portfolio-2-style pb-155 fix" class="page-bg-white">
                    <div class="container container-1510">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-project-item mb-50">
                                    <div class="tp-project-thumb mb-25">
                                        <a href="/apiuniverse">
                                            <picture>
                                                <source srcset="/assets/images/projects/api-universe.webp" type="image/webp">
                                                <img src="/assets/images/projects/api universe.png" alt="Api Universe — Backend Systems project" loading="lazy">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="tp-project-content">
                                        <h4 class="tp-project-title"><a class="tp-line-black" href="/apiuniverse">Api Universe</a></h4>
                                        <span><i>2025</i>Backend Systems</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-project-item mb-50">
                                    <div class="tp-project-thumb mb-25">
                                        <a href="/cleanlux">
                                            <picture>
                                                <source srcset="/assets/images/projects/cleanlux-site-mockup.webp" type="image/webp">
                                                <img src="/assets/images/projects/Cleanlux site mockup.png" alt="Cleanlux — Web Development project" loading="lazy">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="tp-project-content">
                                        <h4 class="tp-project-title"><a class="tp-line-black" href="/cleanlux">Cleanlux</a></h4>
                                        <span><i>2025</i>Web Development</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-project-item mb-50">
                                    <div class="tp-project-thumb mb-25">
                                        <a href="/elevatedebate">
                                            <picture>
                                                <source srcset="/assets/images/projects/elevate-debate-mockup.webp" type="image/webp">
                                                <img src="/assets/images/projects/Elevate Debate Mockup.png" alt="Elevate Debate — Web Development project" loading="lazy">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="tp-project-content">
                                        <h4 class="tp-project-title"><a class="tp-line-black" href="/elevatedebate">Elevate Debate</a></h4>
                                        <span><i>2026</i>Web Development</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-project-item mb-50">
                                    <div class="tp-project-thumb mb-25">
                                        <a href="/gameriq">
                                            <picture>
                                                <source srcset="/assets/images/projects/gamerig-hq-mockup.webp" type="image/webp">
                                                <img src="/assets/images/projects/GameRig HQ Mockup.png" alt="GameRig HQ — Web Development project" loading="lazy">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="tp-project-content">
                                        <h4 class="tp-project-title"><a class="tp-line-black" href="/gameriq">GameRig HQ</a></h4>
                                        <span><i>2025</i>Web Development</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-project-item mb-50">
                                    <div class="tp-project-thumb mb-25">
                                        <a href="/creedlance">
                                            <picture>
                                                <source srcset="/assets/images/projects/creedlance-mockup.webp" type="image/webp">
                                                <img src="/assets/images/projects/Creedlance mockup.png" alt="Creedlance — Branding project" loading="lazy">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="tp-project-content">
                                        <h4 class="tp-project-title"><a class="tp-line-black" href="/creedlance">Creedlance</a></h4>
                                        <span><i>2025</i>Branding</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-project-item mb-50">
                                    <div class="tp-project-thumb mb-25">
                                        <a href="/riversstateacjmc">
                                            <picture>
                                                <source srcset="/assets/images/projects/riversstateacjmc.webp" type="image/webp">
                                                <img src="/assets/images/projects/Riversstateacjmc.png" alt="Rivers State ACJMC — Web Development project" loading="lazy">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="tp-project-content">
                                        <h4 class="tp-project-title"><a class="tp-line-black" href="/riversstateacjmc">Riversstate ACJMC</a></h4>
                                        <span><i>2025</i>Web Development</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-project-item mb-50">
                                    <div class="tp-project-thumb mb-25">
                                        <a href="/lymora">
                                            <picture>
                                                <source srcset="/assets/images/projects/tablet-in-hand-mockup.webp" type="image/webp">
                                                <img src="/assets/images/projects/Tablet in Hand Mockup.png" alt="Lymora — Product Development project" loading="lazy">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="tp-project-content">
                                        <h4 class="tp-project-title"><a class="tp-line-black" href="/lymora">Lymora</a></h4>
                                        <span><i>2025</i>Product Development</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-project-item mb-50">
                                    <div class="tp-project-thumb mb-25">
                                        <a href="/coinearners">
                                            <picture>
                                                <source srcset="/assets/images/projects/the-coin-earners-mup.webp" type="image/webp">
                                                <img src="/assets/images/projects/The coin earners mup.png" alt="The Coin Earners — UI/UX project" loading="lazy">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="tp-project-content">
                                        <h4 class="tp-project-title"><a class="tp-line-black" href="/coinearners">The Coin Earners</a></h4>
                                        <span><i>2025</i>UI/UX</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-project-item mb-50">
                                    <div class="tp-project-thumb mb-25">
                                        <a href="/cybercyn">
                                            <picture>
                                                <source srcset="/assets/images/projects/cybecynmockup.webp" type="image/webp">
                                                <img src="/assets/images/projects/cybecynmockup.png" alt="CyberCyn — Branding project" loading="lazy">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="tp-project-content">
                                        <h4 class="tp-project-title"><a class="tp-line-black" href="/cybercyn">CyberCyn</a></h4>
                                        <span><i>2025</i>Branding</span>
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