<div class="wrap">
<h2>Transfer DB Details</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'transfer-db-settings-group' ); ?>
    <?php do_settings_sections( 'transfer-db-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Database Host</th>
        <td><input type="text" name="db_host" value="<?php echo esc_attr( get_option('db_host') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Database Name</th>
        <td><input type="text" name="db_name" value="<?php echo esc_attr( get_option('db_name') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Database User</th>
        <td><input type="text" name="db_user" value="<?php echo esc_attr( get_option('db_user') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Database Password</th>
        <td><input type="text" name="db_pass" value="<?php echo esc_attr( get_option('db_pass') ); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>