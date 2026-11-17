<?php
get_header();
$sent = isset( $_GET['sent'] ) ? sanitize_text_field( wp_unslash( $_GET['sent'] ) ) : '';
?>
<div class="welcome">
    <h2>Contact Us - We Are Listening 24/7</h2>
    <p>Emergency? Come directly to the station or call. No case is too small.</p>
</div>

<div class="container">
    <div class="contact-wrap">
        <div class="contact-card">
            <h2>Find Us</h2>

            <div class="emergency">
                <b>🚨 EMERGENCY: 999 / 112</b>
                <small>Toll Free - Uganda Police</small>
            </div>

            <div class="info-line"><span>📍</span> <strong>Location:</strong><br>Mpala Trading Centre, Entebbe Road, Wakiso District. Opposite Mpala Market, 2km from Kisubi.</div>
            <div class="info-line"><span>📞</span> <strong>OC Station:</strong> +256 784530891</div>
            <div class="info-line"><span>📞</span> <strong>Desk / SD Book:</strong> +256 200984982</div>
            <div class="info-line"><span>📞</span> <strong>Child &amp; Family:</strong> +256 701966593</div>
            <div class="info-line"><span>✉️</span> <strong>Email:</strong> oc.mpala@upf.go.ug</div>
            <div class="info-line"><span>🕒</span> <strong>Hours:</strong> Open 24 Hours, Every Day</div>

            <div class="map">
                📍 MAP: Mpala Police Station<br>Entebbe Road (Google Maps)
            </div>

            <p style="margin-top:15px; font-size:13px; color:#666;">
                You can also report anonymously. We keep all information confidential.
            </p>
        </div>

        <div class="contact-card">
            <h2>Send Us a Message</h2>
            <p style="font-size:13px; color:#777; margin-bottom:10px;">We will respond within 24 hours. For urgent help, please call or visit.</p>

            <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
                <input type="hidden" name="action" value="mpala_contact">
                <?php wp_nonce_field( 'mpala_contact' ); ?>
                <input type="text" name="website" class="hp-field" tabindex="-1" autocomplete="off" aria-hidden="true">
                <select name="topic" required>
                    <option value="">-- What do you need help with? --</option>
                    <option>Report a Crime</option>
                    <option>Ask for Help / Advice</option>
                    <option>Criminal Record Check</option>
                    <option>Traffic Issue</option>
                    <option>Community Issue</option>
                    <option>Compliment / Complaint</option>
                </select>
                <input type="text" name="fullname" placeholder="Your Full Name" required>
                <input type="tel" name="phone" placeholder="Your Phone Number (e.g. 0772...)" required>
                <input type="email" name="email" placeholder="Your Email (optional)">
                <textarea name="message" rows="5" placeholder="Write your message here... Be clear, we are here to help with no judgment." required></textarea>
                <button type="submit">📨 Send Message</button>
            </form>

            <?php if ( '1' === $sent ) : ?>
                <div class="notice ok">✅ Thank you! Your message has been received. Our officer will call you soon. For emergencies, call 999.</div>
            <?php elseif ( '0' === $sent ) : ?>
                <div class="notice err">Sorry, your message could not be sent. Please try again, or call the station. For emergencies, call 999.</div>
            <?php endif; ?>
        </div>
    </div>

    <?php get_template_part( 'sidebar', null, [ 'variant' => 'contact' ] ); ?>
</div>
<?php get_footer(); ?>
