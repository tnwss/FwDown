<?php
// 远程授权验证代码
function check_license() {
    $purchase_code = get_option( 'purchase_code' );

    if ( ! $purchase_code ) {
        return false;
    }

    $url = 'https://api.your-server.com/check-license?code=' . $purchase_code;
    $response = wp_remote_get( $url );

    if ( is_wp_error( $response ) || ( wp_remote_retrieve_response_code( $response ) != 200 ) ) {
        return false;
    }

    $data = json_decode( wp_remote_retrieve_body( $response ), true );
    if ( ! $data || ! isset( $data['valid'] ) || ! $data['valid'] ) {
        return false;
    }

    return true;
}

// 在初始化代码中检查授权
if ( ! check_license() ) {
    add_action( 'admin_notices', 'show_error_notice' );
}

// 在后台显示错误通知
function show_error_notice() {
    echo '<div class="error notice">
            <p>您的主题未授权，请购买授权以使用该主题。</p>
        </div>';
}
