<?php
/**
 * This file sets all configuration options for the Emerge! website.
 *
 * Unauthorized copying, usage, or distribution of this file... well,
 * you know what that means.  So don't do it.
 */
$config = array();

/*##############################################################
################################################################
________________________SETTINGS/MISC_________________________*/

//Settings below (if applicable)
$config['settings']['siteTitle'] = 'Emerge! - Embodied Leadership Retreat for a Rising Generation';

//MySQL server address
$config['connection']['mysqlserver'] = 'localhost';

//MySQL DB
$config['connection']['database'] = 'desmillc_gotan';

//This is the name used for the public access account for the site
$config['connection']['dbUser'] = 'desmillc_admin';

//This is the password for the public access account
$config['connection']['dbPassword'] = '(Ghost117!)';



/*##############################################################
################################################################
________________________URL Array_____________________________*/

//Site Base URL (this will be used to build URLs)
$config['url']['main'] =  'http://localhost/emerge/';
//$config['url']['main'] =  'http://www.embodiedyouth.org/';

//Program
$config['url']['program'] = $config['url']['main'] . '?p=program';

//Place
$config['url']['place'] = $config['url']['main'] . '?p=place';

//People
$config['url']['people'] = $config['url']['main'] . '?p=people';

//Application
$config['url']['application'] = $config['url']['main'] . '?p=application';

//Contact
$config['url']['contact'] = $config['url']['main'] . '?p=contact';



/*##############################################################
################################################################
___________________________NAV MENU___________________________*/
//This section contains all required info for the nav menu of the site

//This array holds the name/url pairs of all links in the nav
$config['nav']['links'] = array('Home' => $config['url']['main'],
                                'Program' => $config['url']['program'],
                                'Place' => $config['url']['place'],
                                'People' => $config['url']['people'],
                                'Application' => $config['url']['application'],
                                'Contact' => $config['url']['contact']);
?>