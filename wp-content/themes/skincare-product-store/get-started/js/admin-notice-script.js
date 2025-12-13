jQuery(document).ready(function ($) {
    // Attach click event to the dismiss button
    $(document).on('click', '.notice[data-notice="get-start"] button.notice-dismiss', function () {
        // Dismiss the notice via AJAX
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'skincare_product_store_dismissed_notice',
            },
            success: function () {
                // Remove the notice on success
                $('.notice[data-notice="example"]').remove();
            }
        });
    });
});
// Plugin – AI Content Writer plugin activation
document.addEventListener('DOMContentLoaded', function () {
    const skincare_product_store_button = document.getElementById('install-activate-button');

    if (!skincare_product_store_button) return;

    skincare_product_store_button.addEventListener('click', function (e) {
        e.preventDefault();

        const skincare_product_store_redirectUrl = skincare_product_store_button.getAttribute('data-redirect');

        // Step 1: Check if plugin is already active
        const skincare_product_store_checkData = new FormData();
        skincare_product_store_checkData.append('action', 'check_plugin_activation');

        fetch(installPluginData.ajaxurl, {
            method: 'POST',
            body: skincare_product_store_checkData,
        })
        .then(res => res.json())
        .then(res => {
            if (res.success && res.data.active) {
                // Plugin is already active → just redirect
                window.location.href = skincare_product_store_redirectUrl;
            } else {
                // Not active → proceed with install + activate
                skincare_product_store_button.textContent = 'Installing & Activating...';

                const skincare_product_store_installData = new FormData();
                skincare_product_store_installData.append('action', 'install_and_activate_required_plugin');
                skincare_product_store_installData.append('_ajax_nonce', installPluginData.nonce);

                fetch(installPluginData.ajaxurl, {
                    method: 'POST',
                    body: skincare_product_store_installData,
                })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        window.location.href = skincare_product_store_redirectUrl;
                    } else {
                        alert('Activation error: ' + (res.data?.message || 'Unknown error'));
                        skincare_product_store_button.textContent = 'Try Again';
                    }
                })
                .catch(error => {
                    alert('Request failed: ' + error.message);
                    skincare_product_store_button.textContent = 'Try Again';
                });
            }
        })
        .catch(error => {
            alert('Check request failed: ' + error.message);
        });
    });
});
