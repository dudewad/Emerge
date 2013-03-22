<?php
/**
 * Created by Ghost.
 * Date: 3/15/13
 * Time: 3:08 PM
 */

class App{
    //Will contain the name of the current page
    private $currentPage;
    //Will contain all current page content
    private $currentPageContent;

    /**
     * @param $config Array         The config array for the site
     *
     * Constructor
     */
    public function __construct($config){
        $this->config = $config;
        $this->currentPage = isset($_REQUEST['p']) ? $_REQUEST['p'] : 'home';
        //Include the current page file or revert to index
        $page = __DIR__ . "/../../includes/pages/" . $this->currentPage . ".php";
        if(file_exists($page))
            require_once($page);
        else
            require_once(self::BASEDIR . "includes/pages/home.php");

        $this->currentPageContent = isset($pageContent) ? $pageContent : '';
    } //End __construct



    /**
     * @return string HTML string representing the content for this page
     */
    public function content(){
        $content = $this->currentPageContent;
        $data = "<div id='content'>
                    $content
                </div>";

        return $data;
    } //End content()



    /**
     * @return string HTML string representing the site <head>
     */
    public function head(){
        $data = "<head>
                    <meta charset='utf-8' />
                    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
                    <link href='css/style.css' media='all' rel='stylesheet' type='text/css' />
                    <link href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC|Asap:400,400italic' rel='stylesheet' type='text/css'>
                </head>";

        return $data;
    } //End head()



    /**
     * @return string HTML string representing the site header div
     */
    public function header(){
        $logoLink = $this->config['url']['main'];
        $data =  "<div id='header'>
                    <div class='content'>
                        <a href='$logoLink' class='logo'>Emerge!</a>";
        $data .=        self::nav();
        $data .=        "<div class='subscribeCTA'>Subscribe to Our Newsletter!</div>
                        <form id='mailingForm' name='mailingForm' class='newsletterForm'>
                            <input type='text' placeholder='Enter Email Address' name='email'/>
                            <input type='submit' class='submit' value='Sign-Up'/>
                        </form>
                    </div>
                 </div>";

        return $data;
    } //End header()



    /**
     * @return string HTML String representing the site nav
     */
    private function nav(){
        $data = "<ul id='siteNav'>";
        foreach ($this->config['nav']['links'] as $key => $value){
            $class = strtolower($key) == strtolower($this->currentPage) ? " class='currentPage'" : '';
            $data .= "<li $class ><a href='$value'>$key</a></li>";
        }
        $data .= "</ul>";
        return $data;
    } //End nav()
}

?>