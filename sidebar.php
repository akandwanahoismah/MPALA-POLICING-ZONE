<?php
$variant = isset( $args['variant'] ) ? $args['variant'] : '';
$links = [
    'about'          => 'About Us',
    'administration' => 'Administration',
    'services'       => 'Our Services',
    'departments'    => 'Departments',
    'report'         => 'Report a Crime',
    'records'        => 'Criminal Records',
    'contact'        => 'Contact Us',
];
?>
<div class="sidebar">
    <h3>What do you need help with?</h3>
    <?php foreach ( $links as $slug => $label ) : ?>
        <a href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>"><div class="card<?php echo is_page( $slug ) ? ' active' : ''; ?>"><?php echo esc_html( $label ); ?></div></a>
    <?php endforeach; ?>

    <?php if ( 'home' === $variant ) : ?>
        <div class="dc-message"><strong>From OC:</strong> "Mpala is our home too. Your safety is our priority."</div>
    <?php elseif ( 'contact' === $variant ) : ?>
        <div class="dc-message"><strong>Quick Tip:</strong><br>When reporting, bring your National ID if you have it. If not, come anyway - we will help you.</div>
    <?php endif; ?>
</div>
