<?php

    //---------------------------------------------------------------------------------------------
    # Troubleshooting overview.
    // Stop and think.
    /*
    *Have you made any recent changes to your site such as:
     -installing new modules?
     -updating existing modules?
     -making configuration changes?
     -granting or revoking permissions?
    *Does the version of the module you installed match your version of Drupal? For example, Views for Drupal 7 will not work on a Drupal 6 site.
    */

     // Read the error messsages.
     // Core dblog module --> /admin/reports/dblog
     /*
     *Errors may include:
      -.htaccess config problems - "Internal server error" - Error 500 directive not allowed here
      -Memory problems - Fatal error: Allowed memory size of 8388608 bytes exhausted
      -JavaScript problems - modules/troublesome/utility.js 404 file not found.
     */

    // Validate your page: Incomplete HTML markup tags and structural problems can cause problems with your site theme such as misalignment, incorrect font sizes, overflowing blocks, etc. As you debug your site, go through each error message and evaluate why the error exists and how important it is to solve. You might not be able to solve all validation issues, but you should be aware of why each one exists.

    // Check your site's CSS: our site may not be displaying correctly because one CSS rule is overriding another one. If you are unfamiliar with CSS, your first step should be to learn more about cascading. Once you are familiar with CSS, look to child and container elements for possible issues. In particular, the margin for one item may be the padding for another (particularly in list items). Additionally, when you need to override the CSS of your site, do so in a new style.css file in your theme, not by modifying core files.
     //You can inspect your site's code with these tools:
    /*
    FireBug - for Firefox
    Web Developer Toolbar - for Firefox and Chrome
    DOM Explorer - part of F12 Developer Tools included with IE11
    */

    // Clear Drupal Cache.
    // Read the README for your modules.
    // Search for your error.
    // Dive into code to identify the source of SQL errors.
    // Debug by diving into module code.

    //---------------------------------------------------------------------------------------------

    # Troubleshoot installation problems.

    // Fatal error: Allowed memory size of n bytes exhausted: The error "Allowed memory size exhausted" indicates that Drupal needs more memory than has been allocated under current settings. This error can be resolved by adding an extra line to Drupal's configuration files.

    // Failed to connect to your MySQL database server: the installation script cannot connect to the database. Check if the username, password and hostname that you provided are correct.

    // Cannot create directories 'files' or 'private': the installation script needs permissions to create these directories inside the sites/default folder.

    // Cannot write to configuration files settings.php: the installation script needs permissions to write to the configuration files settings.php.

    // "Your PHP configuration only supports the SQLite database type" on the database configuration page during install: Drupal 7 now requires PHP to have the PDO (Php Data Object) extension enabled or compiled in. Older or home-brewed versions of PHP may not have this enabled by default. Check your phpinfo for the "pdo_mysql" extension, or see the instructions for enabling it.

    // "Fatal error: Maximum function nesting level of 'xxx' reached": If you have Xdebug PHP extension installed on your server, you might encounter this error. The solution is simple, you will need to change/create a parameter on Xdebug configuration file :
    //xdebug.max_nesting_level=XXX
    //By default, the number is 100. Don't forget to restart Apache.
    //You can then proceed to installation or refresh error page to end it.

    //---------------------------------------------------------------------------------------------

    # Account, permission and login issues.

    // Recover password with Drush.
    /*
    drush uli
    drush upwd --password="givemypassback" "admin"
    */

    // Reset password with sql-query.
    /*
    UPDATE users SET pass ='$S$CTo9G7Lx28rzCfpn4WB2hUlknDKv6QTqHaf82WLbhPT2K5TzKzML' WHERE uid = 1;
    */

    // You can also reset the password with a PHP file, but you need to delete it after use it.

    // Anonymous users unable to store and save values in $_SESSION.
    /*
    If $_SESSION is not being read from and written to as an anonymous user from page to page, take a look at the users table in the database. Chances are that you can save yourself a lot of debugging time by making sure that a user of uid set to zero exists. If there isn't one in the database there is a simple fix for this issue, execute the following SQL command: INSERT INTO users (uid) VALUES (0);
    */

    // Unblocking an account using SQL
    /*
    update users set status = 1 where uid = !uid;
    */

    //---------------------------------------------------------------------------------------------

    # Blank pages and missing content.

    // Enable error reporting.
    /*
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);

    //If you're using multi-site setup.
    if ($_SERVER['HTTP_HOST']==='some.domain.name.here') {
      error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
    }
    */

    // Log Files.
    /*
    -/var/log/apache2/error.log
    -/var/log/nginx/[sitename]_error.log

    grep 'ErrorLog' /etc/apache2/*
    grep 'ErrorLog' /etc/apache2 /* /*
    */

    // Whitespace at the End of a PHP File: The most common code error that causes a WSOD is having additional whitespace at the end of a PHP file. To avoid this issue, it is a Drupal coding standard to not include the closing ? > on a PHP file. You may also have the 'Include Unicode Signature (BOM)' option turned on on your editor, which should be turned off.

    //Implement Hook Twice: You can also get a blank screen if you have by mistake implemented the same hook more than once. For example, accidentally implementing hook_help twice.

    // Output Buffering: Some modules need output buffering turned on. To do this, try adding these lines to your .htaccess file (normally located in your root directory:
    /*
    php_value output_buffering On
    php_value output_handler mb_output_handler
    */

    // Zend Compatibility Mode: If you get the WSOD while setting up a new server, you may have a problem with zend compatibility being on. If you check the error reporting you may see an error with "Trying to clone an uncloneable object of class mysqli." This is caused by the zend compatibility mode being On in the php.ini file. To fix this, set zend compatibility to off by editing the applicable line:
    /*
    ; Enable compatibility mode with Zend Engine 1 (PHP 4.x)
    zend.ze1_compatibility_mode = Off
    */

    //Clearing the Cache Table: depending on the problem, clearing the cache table (via phpmyadmin for example) can resolve a WSOD.

    //Restarting Web server: WSOD can be caused by web server issues. Especially if you are using apache and PHP fails with error "undefined function: drupal_bootstrap() in ... index.php" but file includes/bootstrap.inc is in place with correct permissions, try restart (not just reload) web server.

    // PHP execution time limits: Another PHP setting that can lead to WSOD is max_execution_time. Apparently, on WAMP, the default is 30 seconds, but some administrative pages may take longer than that to process and load. Change this setting (see other sections on this page for instructions on how to change PHP settings in php.ini or using php_value() and do the same steps with this setting) to a larger value, and it might clear up your WSOD problems.

    // Theme or module lacking: Check if the theme needed for your site is in drupal7/all/themes or drupal7/default/themes, if drupal7 is your drupal directory (If you use a multisite installation, the latter is drupal7/my_site.com/themes , my_site.com being your site directory). Especially if you use a sub-theme, check if both the master theme and the sub-theme are there, with the right names and read permission. The same way, modules required by your site must be present in drupal7/all/modules or drupal7/default/modules (or drupal7/my_site.com/modules in a multisite installation).

    // Non-recommended Module Versions: If you are working with a module that is not in a recommended release version, you may have success by upgrading it to a recommended version or disabling/removing the module. To disable the module, simply go to the module admin page (Administer > Site Building > Modules) and uncheck the checkbox next to the module, then click "Save Configuration."
    //You can tell whether a module is recommended by looking on the module page, the version will have a green background with a green checkmark at the right, and say eg. "Recommended for 6.x." Particularly if the module is a development version, eg. "6.x-1.x-dev" it may not be recommended, and will then have a red background with an "x" at the right.

    // Name Clashes: Another possible cause for a blank page is a name clash, i.e. a module and a theme are using the same name. For example, if module "foo" implements hook_block() with foo_block() and there is also a theme "foo", then the theme engine will invoke foo_block() as the theme function to render a block. While foo_block() might not trigger a WSOD, foo_page() will. No error messages are produced, because this is a wanted behavior of Drupal's theme system. The solution in most cases is that if either the module or the theme (or both) are custom (created by yourself), rename it.

    // Missing URL for main admin page.
    /*
    If you haven't enabled the clean URLs option for your site, adding a /?q=admin after your website address will direct you to your admin area. For example: example.com/?q=admin or example.com/drupalsubdir/?q=admin

    If you have clean URLs enabled, you can just add /admin after your site address. For example: example.com/admin or example.com/drupalsubdir/admin
    */

    // Missing color picker on theme configuration page.
    /*
    The theme doesn't support color picker
    Not all themes support the color picker. Check the theme's documentation to find out.

    Color module is not enabled
    Make sure to enable color.module on Administer » Site building » Modules (admin/build/modules).

    File download settings
    The color picker is incompatible with the Private download method and will only show when the download method is set to Public - files are available using HTTP directly.
    Visit Administer » Site configuration » File system (admin/settings/file-system) to check the download method your site uses.

    PHP's image library GD is not enabled.
    Check your status report at Administer » Logs » Status Report (admin/logs/status) to see if the GD library is working on your server. This is needed to actually create the images. If it is not, you need to install it or get your host to do so for you.

    Javascript is disabled.
    You still see the Color scheme fieldset with a select box and a number of textboxes, but no longer the color wheel or the preview.
    Make sure you have Javascript enabled in your browser.
    */


    // Missing navigation block
    /*
    A common question in the forums, is you disable a block without realizing the implications of what it does. For instance the main menu/navigation block.
    Visit http://www.example.com/?q=admin/build/block to change block settings.
    Visit http://www.example.com/?q=admin/build/menu to change menu items.
    */

    //---------------------------------------------------------------------------------------------

    # Error messages and their fixes.

    // "PHP extensions	Disabled .Drupal requires you to enable the PHP extensions in the following list (see the system requirements page for more information): gd"
    // Solutions:
    /*
    -apt-get install php5-gd
    -Try to install Drupal again. If still not working try to reboot your server.
    */

    // 500 Internal Server Error: "Internal Server Error. The server encountered an internal error or misconfiguration and was unable to complete your request. Please contact the server administrator, webmaster@******.com and inform them of the time the error occurred, and anything you might have done that may have caused the error. More information about this error may be available in the server error log. Additionally, a 500 Internal Server Error error was encountered while trying to use an ErrorDocument to handle the request."
    // Solutions.
    /*
    -Misconfigured folder or file permissions
    Check your Drupal file or folder permissions. Permissions means read and write accesses. They are maybe misconfigured. This is one of the most likely cause of this error.
    You can read more in the Modifying Linux, Unix, and Mac file permissions page of the installation guide. This Administration guide page contains more information about securing file permissions and ownership.
    Also read the INSTALL.txt file that comes with Drupal. There is a section in there about permissions.

    -Corrupted Drupal file(s)
    If none of the previous solutions worked you could try the following. But this should be try as a last resort.
    1. Backup your database and files so you can revert if the following is not working. Read more about backups at http://drupal.org/node/22281
    2. Delete all Drupal core files. But do not delete other appropriate files though. For example do NOT delete the settings.php file located under sites/default/settings.php. And do NOT delete the all folder and its sub-folders located under /sites/all
    3. Download a fresh drupal-X.XX.tar.gz at http://drupal.org/node/3060/release Make sure you download the exact same version that was installed before the error. For example if you were using Drupal version 6.12 then you should download Drupal version 6.12 tarbal. Not a more recent version. Otherwise it might not work. To know which version of Drupal 6 was installed, open the  CHANGELOG.txt file. This file is located in your Drupal root folder. The first section of this file indicated your Drupal version.
    4. Install the fresh Drupal core. To do so read the README.txt file located inside the Drupal tarbal.
    5. Go to http://YOUR-DOMAIN-NAME-HERE.com/update.php
    6. Follow instructions on screen. Start by clicking on Continue button.
    7. If not working revert to your backup files. The files from above step 1.

    -Something wrong with server side (PHP server, CGI server, other servers or control panel)

    */

    // Got a packet bigger than 'max_allowed_packet'.
    /*
    my.conf file.
    max_allowed_packet = 32M
    */