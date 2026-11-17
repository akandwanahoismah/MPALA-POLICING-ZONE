<?php get_header(); ?>
<div class="welcome">
    <h2>Administration Structure</h2>
    <p>Leadership and Organization of Mpala Police Station</p>
</div>

<div class="container">
    <div class="admin-wrap">
        <img src="<?php echo esc_url( get_theme_file_uri( 'images/admin.jpg' ) ); ?>" alt="Administration Block">

        <h2>Officer in Charge (OC)</h2>
        <div class="person">
            <b>OC - Mpala Police Station</b>
            <small>Overall Commander</small><br>
            Responsible for all operations, administration, and community policing.
            <br><br> +256 772 123 456 |  oc.mpala@upf.go.ug
        </div>

        <h2>Administration Hierarchy</h2>
        <div class="org">
            <div class="person"><b>1. OC Station</b><small>Head</small><br>Overall command, discipline.</div>
            <div class="person"><b>2. OC Operations</b><small>Deputy</small><br>Day-to-day operations, patrols.</div>
            <div class="person"><b>3. OC CID</b><small>Investigations</small><br>Case files, detectives.</div>
            <div class="person"><b>4. OC Traffic</b><small>Traffic</small><br>Road safety, accidents.</div>
        </div>

        <h2>Departments</h2>
        <table class="rank-table">
            <tr><th>Department</th><th>Function</th></tr>
            <tr><td>General Duties</td><td>Patrol, guards</td></tr>
            <tr><td>CID</td><td>Investigations</td></tr>
            <tr><td>Child &amp; Family</td><td>Domestic cases</td></tr>
            <tr><td>Traffic</td><td>Road safety</td></tr>
        </table>
    </div>
    <?php get_template_part( 'sidebar' ); ?>
</div>
<?php get_footer(); ?>
