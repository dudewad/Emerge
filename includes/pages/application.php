<?php
/**
 * Created by Ghost.
 * Date: 3/15/13
 * Time: 7:26 PM
 */
$applyLink = $this->config["url"]["applicationLink"];
$contactLink = $this->config['url']['contact'];
$footer = $this->footer();
$pageContent = <<<HTML
<!-- NO CONTENT ABOVE THIS LINE -->

<img class="mainBanner" src="images/application-banner.jpg" alt="Emerge!">

<img src="images/color-bar-application.png" class="colorBar" alt="Emerge!"/>

<div class="contentBodyType4 textCenter">
    <h3 class="bodyFont textCenter titlePadding">Introducing the Application</h3>
    <p class="bottomMargin">Today, the land itself is still called Chinook and the 70 acres of forest and meadow lands are protected by a conservation easement. Whidbey Institute has grown from inspiring idea to a fully operational Institute with professional staff, year-round programs, new and upgraded facilities and national outreach. The vision, commitment, hard work, and financial generosity of many people have made it possible and have given Whidbey Institute a strong base of experience, a wide range of friends, and wisdom born of honest endeavor over time.</p>
    <a href="$applyLink" class="cta-apply">Fill out the Application!</a>
    <p class="subtitle bottomMargin">If you are having trouble downloading and/or viewing the application, <a href="$contactLink">contact us</a> and we’ll send  it to you directly</p>
    <img src="images/application-fill-1.jpg" alt="Emerge!"/>
    <p>Some caption for this picture</p>
</div>
<img src="images/color-bar-small.png" class="colorBarSmall"/>
<div class="contentBodyType5 textCenter">
    <a name="contact"></a>
    <h3 class="bodyFont titlePadding">Contact Us!</h3>
    <p>If you have any questions, comments, or wild ideas, please contact us any time at <br />
    <a href="mailto:embodiedyouth@gmail.com">embodiedyouth@gmail.com</a></p>
</div>
<img src="images/color-bar-small.png" class="colorBarSmall"/>
$footer

<!-- NO CONTENT BELOW THIS LINE -->
HTML;
?>