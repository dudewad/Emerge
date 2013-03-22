<?php
/**
 * Created by Ghost.
 * Date: 3/15/13
 * Time: 7:26 PM
 */
$applyLink = $this->config["url"]["application"];
$footer = $this->footer();
$pageContent = <<<HTML
<!-- NO CONTENT ABOVE THIS LINE -->

<img class="mainBanner" src="images/program-banner.jpg" alt="Emerge!">

<img src="images/color-bar-program.png" class="colorBar" alt="Emerge!"/>
<div class="programContentBG">
    <div id="programPoem" class="leftColSmall textCenter">
        <h3>The Journey</h3>
        <p>One day you finally knew<br />
        what you had to do, and began,<br />
        though the voices around you<br />
        kept shouting<br />
        their bad advice-<br />
        though the whole house<br />
        began to tremble<br />
        and you felt the old tug<br />
        at your ankles.<br />
        "Mend my life!"<br />
        each voice cried.<br />
        But you didn't stop.<br />
        You knew what you had to do,<br />
        though the wind pried<br />
        with its stiff fingers<br />
        at the very foundations<br />
        though their melancholy<br />
        was terrible.<br />
        It was already late<br />
        enough, and a wild night,<br />
        and the road full of fallen branches<br />
        and stones.<br />
        but little by little,<br />
        as you left their voices behind,<br />
        the stars began to burn<br />
        through the sheets of clouds,<br />
        and there was a new voice<br />
        which you slowly<br />
        recognized as your own,<br />
        that kept you company<br />
        as you strode deeper and deeper<br />
        into the world,<br />
        determined to do<br />
        the only thing you could do-<br />
        determined to save<br />
        the only life you could save.<br />
        </p>
        <p class="subtitle">-Mary Oliver</p>
    </div>
    <div class="contentBodyType2 rightColLarge textCenter">
        <h3 class="bodyFont programTitle textCenter">Our mission is to support emerging adults in growing towards generative, fulfilled, and inspired adulthood.</h3>
        <img src="images/program-fill-1.png" alt="Emerge!" class="programFill"/>
        <h3>Macto luptatum</h3>
        <p>Modo ymo illum consequat, ventosus ingenium. Incassum ex ad sino dolore hendrerit eros augue caecus. In illum nulla in aliquip iriure ideo defui exputo letalis tincidunt neque. Vel, utrum ad quis te, ibidem paulatim quidem ut secundum capto vulpes indoles. Hos, velit, suscipere opto, feugiat brevitas feugait sino dolore, ullamcorper. Et jumentum, nostrud bis hos, et adsum sed. </p>

        <h3>Duis defui ibidem</h3>
        <p>Demoveo nibh, ut, praesent roto gravis. Macto luptatum dolus, huic vulputate eu, opto nimis quibus esse hendrerit vulputate ex quidem suscipit. Exerci et melior dignissim, roto letalis natu premo conventio. </p>

        <h3>Luptatum hendrerit</h3>
        <p class="lastP">Utrum ymo duis abigo fatua, dolor. Autem enim quidem duis genitus jugis amet volutpat, mos, commodo esse iaceo, humo ad autem. Luptatum hendrerit ratis nisl quae, quae, capio letalis luptatum eros antehabeo, hos tincidunt. Duis defui ea transverbero capto vero euismod hendrerit, imputo metuo, utrum haero sit nisl macto. Eligo wisi decet ymo causa torqueo ea adipiscing velit secundum ventosus illum molior. Suscipit typicus delenit genitus hos nostrud minim nostrud at. Hendrerit valetudo quadrum et olim, illum nulla, singularis wisi in esca.</p>

        <a href="$applyLink" class="cta-apply">Apply Now!</a>
    </div>
    <div class="clear"></div>
</div>
<img src="images/color-bar-small.png" class="colorBarSmall"/>
$footer

<!-- NO CONTENT BELOW THIS LINE -->
HTML;
?>