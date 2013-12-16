<?php  
/**
*
*** START SET URL 
*
**/

define('ABSPATH',  str_replace('\\', '/', realpath(dirname(__FILE__) )) . '/');
define('DOCROOT', rtrim(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']) . '/', '/'));
define('DOMAIN', 'http://' . $_SERVER['HTTP_HOST'] );
define('ABSURL', DOMAIN . str_replace(DOCROOT, '', ABSPATH));

/** END SET URL  **/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>NextGen Gallery Demo - FooBox Lightbox Plugin</title>

<script type="text/javascript">//<![CDATA[
// Google Analytics for WordPress by Yoast v4.3.3 | http://yoast.com/wordpress/google-analytics/
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-274447-56']);
                _gaq.push(['_trackPageview']);
(function () {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();
//]]></script>

<!-- <link rel='stylesheet' id='shortcodes-ultimate-css'  href='http://getfoobox.com/wp-content/plugins/shortcodes-ultimate/css/style.css?ver=3.9.5' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='balance-theme-css'  href='http://getfoobox.com/wp-content/themes/balance/style.css?ver=1.9.1' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='css3_grid_font_yanone-css'  href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz&#038;ver=3.5.1' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='css3_grid_table1_style-css'  href='http://getfoobox.com/wp-content/plugins/css3_web_pricing_tables_grids/table1/css3_grid_style.css?ver=3.5.1' type='text/css' media='all' /> -->
<link rel='stylesheet' id='css3_grid_table2_style-css'  href='<?php echo ABSURL ?>css/css3_grid_style.css' type='text/css' media='all' />
<link rel='stylesheet' id='NextGEN-css'  href='<?php echo ABSURL ?>css/nggallery.css' type='text/css' media='screen' />
<link rel='stylesheet' id='wp_dlmp_styles-css'  href='<?php echo ABSURL ?>css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='foobox-1-4-min-css'  href='<?php echo ABSURL ?>css/foobox-1.4.min.css' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo ABSURL ?>js/jquery.js'></script>
<script type='text/javascript' src='<?php echo ABSURL ?>js/jquery.cycle.all.min.js'></script>
<script type='text/javascript' src='<?php echo ABSURL ?>js/ngg.slideshow.min.js'></script>
<script type='text/javascript' src='<?php echo ABSURL ?>js/actionbox-helper.js'></script>
<script type='text/javascript' src='<?php echo ABSURL ?>js/foobox-1.4.1.min.js'></script>
<script type='text/javascript' src='<?php echo ABSURL ?>js/comment-reply.min.js'></script>
<!-- <meta name="generator" content="WordPress 3.5.1" /> -->

<script type="text/javascript">/* FooBox init code */
(function( FOOBOX, $, undefined ) {
  FOOBOX.o = {deeplinking : { enabled: true, prefix: "foobox" }, captions: { overrideTitle:true, titleSource:'image', overrideDesc:true, descSource:'anchor' }, affiliate : { enabled: true }, error: { src: 'http://getfoobox.com/wp-content/plugins/foobox/img/error.png' }, slideshow: { enabled:true}, social: { enabled: true, position: 'top', links: [ { css: 'facebook', title: 'Facebook', url: 'https://www.facebook.com/dialog/feed?app_id=120052998166607&link={url}&picture={img-ne}&name={title}&caption={desc}&redirect_uri=http%3A%2F%2Fgetfoobox.com'  }, { css: 'google-plus', title: 'Google+', url: 'https://plus.google.com/share?url={url-ne}'  }, { css: 'twitter', title: 'Twitter', url: 'https://twitter.com/share?url={url}&text={title}'  }, { css: 'pinterest', title: 'Pinterest', url: 'https://pinterest.com/pin/create/bookmarklet/?media={img-ne}&url={url}&title={title}&is_video=false&description={desc}'  }, { css: 'linkedin', title: 'LinkedIn', url: 'http://www.linkedin.com/shareArticle?url={url}&title={title}'  }, { css: 'buffer', title: 'Buffer', url: 'http://bufferapp.com/add?text={title}&url={url}'  }, { css: 'email', title: 'Email', url: 'mailto:friend@example.com?subject={title}&body={desc}%20-%20{url}'  } ] }, preloadImages:true};
  FOOBOX.init = function() {
    $(".foobox-link").removeClass("foobox-link");
    $(".ngg-galleryoverview, .ngg-widget").foobox(FOOBOX.o);
    $(".gallery").foobox(jQuery.extend(FOOBOX.o, { wordpress: { enabled: true, galleries: true } }));
    $(".foobox").foobox(FOOBOX.o);
    $(".wp-caption").foobox(jQuery.extend(FOOBOX.o, { wordpress: { enabled: true, captions: true } }));
    $("a:has(img[class*=wp-image-])").foobox(FOOBOX.o);
    $(".jigFooBoxConnect").foobox(FOOBOX.o);
    $(".jigFooBoxConnect").bind({
      "foobox_image_custom_caption": function(e) {
        var $caption = e.thumb.parents(".jig-imageContainer:first");
        e.title = $caption.find(".jig-caption-title:first").html() || "";
        e.desc = $caption.find(".jig-caption-description").html() || e.thumb.attr("title") || "";
        e.handled = true;
      }
    });

  };
}( window.FOOBOX = window.FOOBOX || {}, jQuery ));

jQuery(function($) {
  FOOBOX.init();
});
</script><!-- <meta name="NextGEN" version="1.9.12" /> -->


</head>
<body>
 
    <div class="ngg-galleryoverview" id="ngg-gallery-1-3907">

        <div id="ngg-image-1" class="ngg-gallery-thumbnail-box"  >
            <div class="ngg-gallery-thumbnail" >
                <a href="http://getfoobox.com/wp-content/gallery/demo-gallery/foobox-demo-pic-1.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit."  ><br />
                    <img title="Foobox Demo Pic 1" alt="Foobox Demo Pic 1" src="http://getfoobox.com/wp-content/gallery/demo-gallery/thumbs/thumbs_foobox-demo-pic-1.jpg" width="100" height="100" /><br />
                </a>
            </div>
            
        </div>

        <div id="ngg-image-2" class="ngg-gallery-thumbnail-box"  >
            <div class="ngg-gallery-thumbnail" >
                <a href="http://getfoobox.com/wp-content/gallery/demo-gallery/foobox-demo-pic-10.jpg" title="Some really long description for an image that is in a NextGen gallery. Did you know you can also &lt;a href=&quot;#&quot;&gt;include HTML&lt;/a&gt; in your &lt;strong&gt;image captions&lt;/strong&gt;!"  ><br />
                    <img title="Foobox Demo Pic 10" alt="Foobox Demo Pic 10" src="http://getfoobox.com/wp-content/gallery/demo-gallery/thumbs/thumbs_foobox-demo-pic-10.jpg" width="100" height="100" /><br />
                </a>
            </div>
        </div>

        <div id="ngg-image-3" class="ngg-gallery-thumbnail-box"  >
            <div class="ngg-gallery-thumbnail" >
                <a href="http://getfoobox.com/wp-content/gallery/demo-gallery/foobox-demo-pic-2.jpg" title="In commodo nisi ut nisl placerat tincidunt."  ><br />
                    <img title="Foobox Demo Pic 2" alt="Foobox Demo Pic 2" src="http://getfoobox.com/wp-content/gallery/demo-gallery/thumbs/thumbs_foobox-demo-pic-2.jpg" width="100" height="100" /><br />
                </a>
            </div>
        </div>
        <div class='ngg-clear'></div>
        
    </div>

</body>
</html>
