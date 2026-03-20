$(function () {

    /* ─── Toast system ──────────────────────────────────────────────────── */
    function injectToastContainer() {
        if (document.getElementById('zs-toast-container')) return;
        var el = document.createElement('div');
        el.id = 'zs-toast-container';
        document.body.appendChild(el);
    }

    function showToast(type, title, message) {
        injectToastContainer();
        var container = document.getElementById('zs-toast-container');

        var successIcon = '<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.75 9.75L7.5 13.5L14.25 5.25" stroke="#005EBC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
        var errorIcon   = '<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 6V9.75M9 12.75H9.0075M3.375 15.375H14.625C15.453 15.375 15.9645 14.478 15.5505 13.764L9.9255 3.762C9.5115 3.048 8.4885 3.048 8.0745 3.762L2.4495 13.764C2.0355 14.478 2.547 15.375 3.375 15.375Z" stroke="#D92D20" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>';

        var icon = type === 'success' ? successIcon : errorIcon;

        var toast = document.createElement('div');
        toast.className = 'zs-toast zs-toast--' + type;
        toast.innerHTML =
            '<div class="zs-toast__icon">' + icon + '</div>' +
            '<div class="zs-toast__body">' +
                '<p class="zs-toast__title">' + title + '</p>' +
                '<p class="zs-toast__msg">' + message + '</p>' +
            '</div>' +
            '<button class="zs-toast__close" aria-label="Dismiss">' +
                '<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L13 13M13 1L1 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>' +
            '</button>' +
            '<div class="zs-toast__progress"></div>';

        container.appendChild(toast);

        // Animate in
        requestAnimationFrame(function () {
            requestAnimationFrame(function () {
                toast.classList.add('zs-toast--in');

                // Start progress bar after enter animation completes
                setTimeout(function () {
                    var bar = toast.querySelector('.zs-toast__progress');
                    if (bar) bar.classList.add('zs-progress--run');
                }, 350);
            });
        });

        // Auto-dismiss after 4.5s (matches progress bar)
        var autoDismiss = setTimeout(function () { dismissToast(toast); }, 4500);

        // Manual close
        toast.querySelector('.zs-toast__close').addEventListener('click', function () {
            clearTimeout(autoDismiss);
            dismissToast(toast);
        });
    }

    function dismissToast(toast) {
        toast.classList.remove('zs-toast--in');
        toast.classList.add('zs-toast--out');
        setTimeout(function () {
            if (toast.parentNode) toast.parentNode.removeChild(toast);
        }, 380);
    }

    /* ─── Preloader control ─────────────────────────────────────────────── */
    function showPreloader() {
        var p = document.getElementById('preloader');
        if (!p) return;
        p.style.display     = 'flex';
        p.style.visibility  = 'visible';
        p.style.opacity     = '1';
        p.style.pointerEvents = 'auto';
    }

    function hidePreloader() {
        var p = document.getElementById('preloader');
        if (!p) return;
        p.style.opacity       = '0';
        p.style.pointerEvents = 'none';
        setTimeout(function () {
            p.style.display    = 'none';
            p.style.visibility = 'hidden';
        }, 500);
    }

    /* ─── Contact form submission ───────────────────────────────────────── */
    var form         = $('#contact-form');
    var submitBtn    = form.find('button[type="submit"]');
    var btnText      = submitBtn.find('.tp-btn-text');
    var originalText = btnText.text();

    form.on('submit', function (e) {
        e.preventDefault();

        var formData = form.serialize();

        // Lock UI + show loader
        submitBtn.prop('disabled', true);
        btnText.text('Sending…');
        showPreloader();

        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: formData,
            dataType: 'json'
        })
        .done(function (response) {
            hidePreloader();
            submitBtn.prop('disabled', false);
            btnText.text(originalText);

            if (response.success) {
                showToast('success', 'Message sent!', response.message);
                form.find('input:not([name="website"]), select, textarea').val('');
            } else {
                showToast('error', 'Submission failed', response.message);
            }
        })
        .fail(function (xhr) {
            hidePreloader();
            submitBtn.prop('disabled', false);
            btnText.text(originalText);

            var msg = 'Something went wrong. Please try again or email us directly.';
            try {
                var err = JSON.parse(xhr.responseText);
                if (err.message) msg = err.message;
            } catch (err) { /* use default */ }

            showToast('error', 'Submission failed', msg);
        });
    });

});
