<?php
/**
 * Created by Ghost.
 * Date: 3/15/13
 * Time: 3:09 PM
 */
$applyLink = $this->config["url"]["application"];
$footer = $this->footer();
$pageContent = <<<HTML
<!-- NO CONTENT ABOVE THIS LINE -->
<img src="images/logo-large.png" class="logoLarge" alt="Emerge!"/>
<img class="mainBanner" src="images/index-title-banner.png" alt="Emerge!">
<div id="slideshow" class="slideshow bottomMargin centered">
    <img src="images/slideshow/place/1.jpg" alt="Emerge!" class="slide"/>
    <img src="images/slideshow/place/2.jpg" alt="Emerge!" class="slide"/>
    <img src="images/slideshow/place/3.jpg" alt="Emerge!" class="slide"/>
    <img src="images/slideshow/place/4.jpg" alt="Emerge!" class="slide"/>
    <img src="images/slideshow/place/5.jpg" alt="Emerge!" class="slide"/>
    <img src="images/slideshow/place/6.jpg" alt="Emerge!" class="slide"/>
    <img src="images/slideshow/place/7.jpg" alt="Emerge!" class="slide"/>
    <img src="images/slideshow/place/8.jpg" alt="Emerge!" class="slide"/>
</div>
<div class="slideshowOverlay" data-slideshow-id="slideshow"></div>

<img src="images/color-bar-home.png" class="colorBar" alt="Emerge!"/>

<div class="contentBodyType1 textCenter">
    <h3>The Call</h3>
    <p>Emerge! calls home the soul of young people and helps us weave a thread between our own unique story, our larger cultural story, and the global challenges and opportunities facing the planet in the 21st century.  Set among 70 secluded acres of forest on Whidbey Island in Washington, and staffed by an inter-generational team of teachers, it is founded on the belief that as we transition from adolescence to adulthood we have the potential to become truly alive, to align with our wild passions and to become successful creators of society instead of consumers.</p>

    <h3>The Need</h3>
    <p>Today, most “emerging adults” are stuck inside an old narrative that assumes they will grow up, marry, have kids and find a stable job by their mid-twenties.  This is an outdated story! These markers of adulthood have been pushed out into the 30s and we are in the midst of a global crisis, surrounded by chaos. In order to thrive, we need a new story; we need community, creativity, ability, passion, commitment, vision, brilliance, and collaboration.</p>

    <h3>The Vision</h3>
    <p class="lastP">Emerge! is designed to encourage youth ages 18-24 to develop into creative, empowered, and caring leaders by exploring four main questions: Who am I?  Who are we as a generation? What’s going on in the world?  How am I going to contribute? The primary curriculum is guided by the <a href="http://movingcenterschool.com/about-5rhythms/what-are-5rhythmsr">5Rhythms</a>, expressive arts, <a href="http://genup.net/">Generation Waking Up</a>, and, of course, the natural world of an extraordinary bioregion.</p>
</div>

<img src="images/color-bar-home.png" class="colorBar"/>

<div class="contentBodyType2 textCenter textNormal">
    <h2 class="bodyFont">August 18th - 23rd, 2013</h2>
    <h2 class="bodyFont">Whidbey Institute | Whidbey Island, WA</h2>
    <h3 class="bodyFont">*Open to Ages 18 - 24<br /><br /></h3>
    <h3 class="bodyFont">Cost to attend is $450 - $550</h3>
    <p>If tuition is a concern, please contact us! <br />
        We aim to be offering scholarships and fundraising coaching<br />
        to make this affordable to YOU!</p>
    <a href="$applyLink" class="cta-apply">Apply Now!</a>
</div>

<img src="images/color-bar-home.png" class="colorBar"/>

<div class="contentBodyType3 textCenter">
    <div class="lowerHomeContent">
        <img src="images/home-fill-1.jpg" alt="Emerge!" class="left"/>
        <div class="right">
            <h3>Who Should Apply?</h3>
            <p>Today, most “emerging adults” are stuck inside an old narrative that assumes they will grow up, marry, have kids and find a stable job by their mid-twenties.  This is an outdated story! These markers of adulthood have been pushed out into the 30s and we are in the midst of a global crisis, surrounded by chaos. In order to thrive, we need a new story; we need community, creativity, ability, passion, commitment, vision, brilliance, and collaboration.</p>
        </div>
    </div>

    <div class="lowerHomeContent">
        <img src="images/home-fill-2.jpg" alt="Emerge!" class="right"/>
        <div class="left">
            <h3>What to Expect</h3>
            <p>Emerge! calls home the soul of young people and helps us weave a thread between our own unique story, our larger cultural story, and the global challenges and opportunities facing the planet in the 21st century.  Set among 70 secluded acres of forest on Whidbey Island in Washington, and staffed by an intergenerational team of teachers, it is founded on the belief that as we transition from adolescence to adulthood we have the potential to become truly alive, to align with our wild passions and to become successful creators of society instead of consumers.</p>
        </div>
        <div class="clear"></div>
    </div>
</div>

<img src="images/color-bar-small.png" class="colorBarSmall"/>
$footer

<!-- NO CONTENT BELOW THIS LINE -->
HTML;
?>