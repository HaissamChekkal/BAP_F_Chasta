<?php

// remove personal options block
if(is_admin()){
    remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
    add_action( 'personal_options', 'prefix_hide_personal_options' );

}
function prefix_hide_personal_options(){
    if (strpos($_SERVER['SCRIPT_NAME'], 'profile.php') !== false) {
        ?>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".user-url-wrap,.user-googleplus-wrap,.user-twitter-wrap,.user-facebook-wrap,.user-description-wrap,.user-profile-picture,h2,.show-admin-bar,.user-comment-shortcuts-wrap,.user-rich-editing-wrap,.user-user-login-wrap,.user-display-name-wrap,.user-nickname-wrap").remove();
            });
        </script>
        <?php
    }
}