<?php
/**
 * Created by Ghost.
 * Date: 3/15/13
 * Time: 3:08 PM
 */

class App{
    //Contains the app config
    private $config;
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
        require_once("/../FooterStrings.php");
        $this->footerStrings = $footerStrings;
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
     * @return string HTML string representing the site footer div
     */
    public function footer(){
        $quote = isset($this->footerStrings[$this->currentPage]) ? $this->footerStrings[$this->currentPage] : "";
        $data =  "<div id='footer'>
                        <div class='left'>Copyright 2013 | Embodied Youth Proeductions</div>
                        <div class='right'>$quote</div>
                        <div class='clear'></div>
                 </div>";

        return $data;
    } //End footer()



    /**
     * @return string HTML string representing the site <head>
     */
    public function head(){
        $data = "<head>
                    <meta charset='utf-8' />
                    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
                    <link href='css/style.css' media='all' rel='stylesheet' type='text/css' />
                    <script src='js/jquery-1.9.1.min.js' type='text/javascript' ></script>
                    <script src='js/jquery.cycle.lite.js' type='text/javascript' ></script>
                    <script src='js/app.js' type='text/javascript' ></script>
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
     * Return the name of the current page
     * @return string The name of the current page
     */
    public function getCurrentPageName(){
        return $this->currentPage;
    } //End getCurrentPageName()



    /**
     * @return string HTML String representing the site nav
     */
    private function nav(){
        $data = "<ul id='siteNav'>";
        foreach ($this->config['nav']['links'] as $key => $value){
            $target = preg_split("/=/", $value);
            $check = isset($target[1]) ? $target[1] : "home";
            $class = $check == strtolower($this->currentPage) ? " class='currentPage'" : '';
            $data .= "<li $class ><a href='$value'>$key</a></li>";
        }
        $data .= "</ul>";
        return $data;
    } //End nav()
}

?>