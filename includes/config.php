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
$config['url']['contact'] = $config['url']['main'] . '?p=application#contact';

//Actual application link
$config['url']['applicationLink'] = '';



/*##############################################################
################################################################
___________________________NAV MENU___________________________*/
//This section contains all required info for the nav menu of the site

//This array holds the name/url pairs of all links in the nav
$config['nav']['links'] = array('Home' => $config['url']['main'],
                                'The Curriculum' => $config['url']['program'],
                                'The Place' => $config['url']['place'],
                                'The Team' => $config['url']['people'],
                                'Apply' => $config['url']['application'],
                                'Contact' => $config['url']['contact']);
?>