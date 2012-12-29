<?php
/**
 * @package WordPress
 * @subpackage Hackerchick_Theme
 */
?>

<!-- ************************************************************************************************************************* -->
<!-- SIDEBAR                                                                                                                  -->
<!-- ************************************************************************************************************************* -->
<div id="sidebar">

    <!-- HACKER CHICK -->
    <div id="hackerchick"></div>
    <!-- HACKER CHICjK : END -->

    <div class="sidebar_content">

    <!-- HACKER -->
    <div class="item">
    <!-- NOTE: Title Image"Hacker" is in the Header -->
    <p>Someone who thinks outside the box. Someone who discards conventional wisdom and does something else instead. Someone who looks at the edge and wonders what's beyond. Someone who sees a set of rules and wonders what happens if you don't follow them. <font size="-1"><em>- Bruce Schneier</em></font></p>
    </div>
    <!-- HACKER: END -->

    <div id="hackerchick_spacer"></div>

    <!-- FACEBOOK -->
    <div class="facebookiframe">
    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FHackerChickLabs&amp;width=285&amp;connections=0&amp;stream=true&amp;header=false&amp;height=427"
            scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:285px; height:427px;" allowTransparency="true"></iframe>
    </div>
    <!-- FACEBOOK: END -->

    <!-- FAVORITES -->
    <div class="item">
    <p><img class="sidebar_header_image" src="<?php bloginfo('template_directory'); ?>/images/favorites.png" width="176" height="27" alt="Favorites"/>
    <?php display_favorites( 10 ); ?></p>
    </div>
    <!-- FAVORITES: END -->

    <!-- TAGS -->
    <div class="item">
    <img class="sidebar_header_image" src="<?php bloginfo('template_directory'); ?>/images/topics.png" width="125" height="27" alt="topics"/>

    <p class="tagCloud"><?php wp_tag_cloud( array('smallest' => 8, 'largest' => '16' ) ); ?></p>
    </div>
    <!-- TAGS: END -->

    <!-- SEARCH -->
    <div class="item">
    <img class="sidebar_header_image" src="<?php bloginfo('template_directory'); ?>/images/search.png" width="136" height="28" alt="search"/>
    <?php get_search_form(); ?>
    </div>
    <!-- SEARCH: END -->
    

    <!-- BADGES -->
    <div class="item" id="badges">
    <div id="badge-topblogs"><a href="http://agilescout.com/top-agile-blogs-200/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/agile-top-200-blogs.png" width="100" height="94" alt="Top 200 Agile Blogs" border="0"/></a></div>
    <div id="badge-agile11"><a href="http://program2011.agilealliance.org/event/bbbd058a97e906ab96d85c0aa712a751" title="Lean Startup: How Development Looks Different When You're Changing the World" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/badge-agile2011.png" width="150" height="68" alt="Agile 2011" border="0"/></a></div>
    <div id="badge-geekgirl"><a href="http://www.geekgirlblogs.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/badge-geekgirlblogs.png" width="142" height="50" alt="Geek Girl Blogs" border="0"/></a></div>
    <div id="badge-devchix"><a href="http://www.devchix.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/badge-devchix.png" width="69" height="75" alt="DevChix" border="0"/></a></div>
    <div id="badge-bbw"><a href="http://www.blogsbywomen.org/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/badge-blogsbywomen.png" width="80" height="15" alt="Blogs by Women" border="0"/></a></div>
    </div>
    <!-- BADGES: END -->


    
</div></div>
<!-- SIDEBAR: END -->