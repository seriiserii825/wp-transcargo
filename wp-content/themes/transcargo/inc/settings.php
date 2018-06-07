<?php 

add_action('admin_menu', function(){
    add_menu_page( 'Настройки сайта', 'Опции темы', 'manage_options', 'transcargo_theme_options_page', 'transcargo_menu_page_cb' );
});

add_action('admin_init', 'transcargo_register_settings');

function transcargo_register_settings(){
    register_setting( 'transcargo_option_group', 'transcargo_theme_options');

    add_settings_section( 'transcargo_section_id', 'Опции секции', '', 'transcargo_theme_options_page' );
    add_settings_field( 'transcargo_phone_id', 'Телефон', 'transcargo_phone_cb', 'transcargo_theme_options_page', 'transcargo_section_id' );
    add_settings_field( 'transcargo_schedule_id', 'Рассписание', 'transcargo_schedule_cb', 'transcargo_theme_options_page', 'transcargo_section_id' );
    add_settings_field( 'transcargo_email_id', 'E-mail', 'transcargo_email_cb', 'transcargo_theme_options_page', 'transcargo_section_id' );
}


function transcargo_phone_cb(){
    $options = get_option('transcargo_theme_options')['phone'];
    ?>
        <input type="text" name="transcargo_theme_options[phone]" id="transcargo_phone_id" value="<?php echo $options; ?>" class="regular-text">
    <?php
}

function transcargo_email_cb(){
    $options = get_option('transcargo_theme_options')['email'];
    ?>
        <input type="text" name="transcargo_theme_options[email]" id="transcargo_email_id" value="<?php echo $options; ?>" class="regular-text">
    <?php
}

function transcargo_schedule_cb(){
    $options = get_option('transcargo_theme_options')['schedule'];
    ?>
        <input type="text" name="transcargo_theme_options[schedule]" id="transcargo_schedule_id" value="<?php echo $options; ?>" class="regular-text">
    <?php
}

function transcargo_menu_page_cb(){
    ?>
        <div class="wrap">
            <h2>Опции темы</h2>
        </div>
    

    <form action="options.php" method="POST">
        <?php
            settings_fields("transcargo_option_group");     // скрытые защитные поля
            do_settings_sections("transcargo_theme_options_page"); // секции с настройками (опциями).
            submit_button();
        ?>
    </form>

    <?
} 

