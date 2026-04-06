<?php
namespace App\Ajax;

class LoadMore {
    public static function init() {
        add_action('wp_ajax_load_more_posts', [self::class, 'handle']);
        add_action('wp_ajax_nopriv_load_more_posts', [self::class, 'handle']);
    }

    public static function handle() {
        check_ajax_referer('load_more_nonce', 'nonce');

        // Tắt hoàn toàn output buffering (fix minifier)
        while (ob_get_level() > 0) {
            ob_end_clean();
        }

        $offset = max(6, (int) ($_POST['offset'] ?? 6));

        $chunk = \App\Helpers\QueryCache::getLoadMoreChunk($offset, 3);

        wp_send_json_success($chunk);
    }
}