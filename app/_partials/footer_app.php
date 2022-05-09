<?php include_once APP_PATH . "/app/_partials/sign_out_modal.php" ?>

<?php include_once APP_PATH . "/app/_partials/list_form.php" ?>
<?php include_once APP_PATH . "/app/_partials/list_delete_modal.php" ?>

<?php include_once APP_PATH . "/app/_partials/task_form.php" ?>
<?php include_once APP_PATH . "/app/_partials/task_delete_modal.php" ?>

<script type="module" src="<?= asset( 'js/utilities.js' ) ?>"></script>
<script src="<?= asset( 'js/flowbite.js' ) ?>"></script>
<script src="<?= asset( 'js/jQuery.js' ) ?>"></script>
<script src="<?= asset( 'js/list.js' ) ?>"></script>
<script src="<?= asset( 'js/task.js' ) ?>"></script>
<script src="<?= asset( 'js/app.js' ) ?>"></script>
<script src="<?= asset( 'js/_init.js' ) ?>"></script>

<script>
    // default settings
    var settings = {

        // settings for button and layer
        position: "fixed", 					// default 'fixed'
        top: "unset",						// default 'unset'
        left: "unset",						// default 'unset'
        bottom: "60px", 						// default '50px'
        right: "40px", 						// default '50px'
        buttonBorderRadius: "1rem",						// default '50%'
        transition: "all .5s ease-out", 			// default 'all .5s ease-out'

        // settings for layer
        darkModeBackgroundColor: "#FFFFFF", 					// default '#000'

        // settings for button
        buttonWidth: "3.5em", 					// default '3.5em'
        buttonHeight: "3.5em", 					// default '3.5em'
        buttonText: "🌓",						// default '🌓'
        buttonLineHeight: "3", 						// default '3'
        buttonBorder: "3px solid transparent", 	// default '3px solid transparent'
        buttonHoverBorder: "3px solid #0041FF", 		// default '3px solid #000'
        darkModeButtonHoverBorder: "3px solid #0041FF", 		// default '3px solid #FFF'
        buttonColor: "#FFFFFF", 					// default '#000'
        darkModeButtonColor: "#1F2937", 					// default '#000'

        // Settings, where you can set the width of the window where the button will appear (in px)
        minWindowWidth: "1000",						// default '0'

        // event listener function
        event: "click"                      // default 'click'
    };

    // function which execute when you press dark mode button
    function darkModeIsActivated() {

    }

</script>
<script src="<?= asset( 'js/darkMode/darkMode.js' ) ?>" defer></script>
</body>
</html>