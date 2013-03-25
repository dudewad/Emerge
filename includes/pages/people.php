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

<img class="mainBanner" src="images/team-banner.jpg" alt="Emerge!">

<img src="images/color-bar-team.png" class="colorBar" alt="Emerge!"/>

<div class="contentBodyType4">
    <div class="teamContent bottomMargin textCenter">
        <h3 class="bodyFont textCenter titlePadding">Our Story</h3>
        <p>A little bit about who we are and why we're doing this!</p>
        <img src="images/photo-porter.jpg" alt="Cynthia" class="bioImage"/><img src="images/photo-cynthia.jpg" alt="Porter" class="bioImage"/>
        <p>Today, the land itself is still called Chinook and the 70 acres of forest and meadow lands are protected by a conservation easement. Whidbey Institute has grown from inspiring idea to a fully operational Institute with professional staff, year-round programs, new and upgraded facilities and national outreach. The vision, commitment, hard work, and financial generosity of many people have made it possible and have given Whidbey Institute a strong base of experience, a wide range of friends, and wisdom born of honest endeavor over time.</p>
    </div>
    <h3 class="bodyFont textCenter titlePadding">Bios</h3>

    <div class="two-column">
        <p><strong>Porter</strong><br />
        grew up running wild in the woods and fields of New England, and has devoted his life to creating alternative educational programs that empower children to become masters in crafting their own lives. He has worked with children extensively in a wide variety of educational settings from alternative elementary schools to summer camps, nannying to international college programs. He cares deeply about designing and facilitating programs that uncover and evolve each person’s innate wisdom, creativity, curiosity and wonder using the natural world, the body, and peers as unparalleled teachers and resources. He loves the constant and surprising joy of collaboratively creating with a small group of learners.</p>
    </div>
    <div class="two-column">
        <p><strong>Cynthia</strong><br />
        Iusto antehabeo loquor volutpat molior ad cogo bene nunc foras in lobortis vereor in. Esse hendrerit suscipit, nulla in luctus sed fatua, ne importunus enim vulputate modo obruo. Nonummy utrum consectetuer antehabeo mos populus similis dolore nulla feugiat nutus, iaceo typicus quis valetudo. Saluto oppeto fatua magna probo similis odio metuo praesent consectetuer. Quia, opto dolus ullamcorper delenit loquor tristique, hos ad loquor, neque volutpat, nostrud. Inhibeo neque minim abigo immitto cui. Natu suscipit vel vulputate capto modo accumsan incassum ut fatua facilisis dolor nimis luptatum loquor. Dolore aliquip probo esca ibidem quibus vel, ut regula turpis. </p>
    </div>
    <div class="clear"></div>
</div>

<img src="images/color-bar-small.png" class="colorBarSmall"/>

<div class="contentBodyType5 textCenter">
    <h3 class="bodyFont textCenter">Our Partners</h3>
    <p><strong>Coming Soon!</strong><br />
    We’ve got lots of friends...</p>
</div>

<img src="images/color-bar-small.png" class="colorBarSmall"/>
$footer

<!-- NO CONTENT BELOW THIS LINE -->
HTML;
?>