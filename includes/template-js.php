<?php if (!empty($useTemplateAssets)) : ?>

<!-- jQuery (must execute first — defer preserves document order) -->
<script defer src="/assets/vendor/js/vendor/jquery.js"></script>

<!-- Bootstrap -->
<script defer src="/assets/vendor/js/bootstrap-bundle.js"></script>

<!-- Core Plugins -->
<script defer src="/assets/vendor/js/imagesloaded-pkgd.js"></script>
<script defer src="/assets/vendor/js/hammer.js"></script>
<script defer src="/assets/vendor/js/magnific-popup.js"></script>
<script defer src="/assets/vendor/js/purecounter.js"></script>
<script defer src="/assets/vendor/js/splitting.min.js"></script>

<!-- Swiper (must load before slider-active.js) -->
<script defer src="/assets/vendor/js/swiper-bundle.js"></script>

<!-- Sliders / UI effects -->
<script defer src="/assets/vendor/js/slider-active.js"></script>
<script defer src="/assets/vendor/js/portfolio-slider-1.js"></script>

<!-- Visual / Animation Utilities -->
<script defer src="/assets/vendor/js/hover-effect.umd.js"></script>
<script defer src="/assets/vendor/js/parallax-slider.js"></script>

<?php if (!empty($loadWebGL)) : ?>
<!-- Three.js / WebGL — only loaded on pages that use 3D effects (homepage) -->
<script defer src="/assets/vendor/js/three.js"></script>
<script defer src="/assets/vendor/js/webgl.js"></script>
<?php endif; ?>

<!-- AJAX & General Template Logic -->
<script defer src="/assets/vendor/js/ajax-form.js"></script>
<script defer src="/assets/vendor/js/plugin.js"></script>

<!-- Main template initializer (must be last among vendor JS) -->
<script defer src="/assets/vendor/js/main.js"></script>

<!-- Zirostack Main Script -->
<script defer src="/assets/js/script.js"></script>

<?php endif; ?>
