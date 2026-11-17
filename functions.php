<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function mpala_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( [ 'primary' => 'Primary Menu' ] );
}
add_action( 'after_setup_theme', 'mpala_setup' );

function mpala_assets() {
    wp_enqueue_style( 'mpala-style', get_stylesheet_uri(), [], wp_get_theme()->get( 'Version' ) );
    if ( is_front_page() ) {
        wp_enqueue_script( 'mpala-slideshow', get_theme_file_uri( 'js/slideshow.js' ), [], wp_get_theme()->get( 'Version' ), true );
    }
}
add_action( 'wp_enqueue_scripts', 'mpala_assets' );

/* Menu shown until you build one under Appearance > Menus */
function mpala_fallback_menu() {
    echo '<ul>';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/about/' ) ) . '">About us</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/administration/' ) ) . '">Administration</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">Contact us</a></li>';
    echo '</ul>';
}

/* Where contact form messages are sent. Change this to the station's email if needed. */
function mpala_contact_recipient() {
    return get_option( 'admin_email' );
}

function mpala_handle_contact() {
    $back = wp_get_referer() ? wp_get_referer() : home_url( '/contact/' );
    $back = remove_query_arg( 'sent', $back );

    $nonce_ok = isset( $_POST['_wpnonce'] ) && wp_verify_nonce( $_POST['_wpnonce'], 'mpala_contact' );
    if ( ! $nonce_ok || ! empty( $_POST['website'] ) ) {
        wp_safe_redirect( add_query_arg( 'sent', '0', $back ) );
        exit;
    }

    $topic   = sanitize_text_field( $_POST['topic'] ?? '' );
    $name    = sanitize_text_field( $_POST['fullname'] ?? '' );
    $phone   = sanitize_text_field( $_POST['phone'] ?? '' );
    $email   = sanitize_email( $_POST['email'] ?? '' );
    $message = sanitize_textarea_field( $_POST['message'] ?? '' );

    if ( ! $topic || ! $name || ! $phone || ! $message ) {
        wp_safe_redirect( add_query_arg( 'sent', '0', $back ) );
        exit;
    }

    $subject = '[Mpala Police website] ' . $topic . ' - ' . $name;
    $body    = "Topic: $topic\nName: $name\nPhone: $phone\nEmail: " . ( $email ? $email : 'not provided' ) . "\n\nMessage:\n$message\n";
    $headers = [];
    if ( $email ) {
        $headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
    }

    $sent = wp_mail( mpala_contact_recipient(), $subject, $body, $headers );
    wp_safe_redirect( add_query_arg( 'sent', $sent ? '1' : '0', $back ) );
    exit;
}
add_action( 'admin_post_nopriv_mpala_contact', 'mpala_handle_contact' );
add_action( 'admin_post_mpala_contact', 'mpala_handle_contact' );
