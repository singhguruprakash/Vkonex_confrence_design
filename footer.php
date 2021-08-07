<div class="container">
		<div class="row">
		    <div class="col-12 col-md-12 col-lg-12">
			    <div class="footer_title">
				<p>footer heading</p>
				<h1> contents will shown here</h1>
				</div><!--footer title-->
			</div><!--col-lg-12-->
		</div><!--row-->	
	</div><!--container-->
</section><!--footer section-->
<section class="footer_end_section">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-12">
				<p><p>&copy; Copyright 2021, All Right Reserved. Designed by Guru Prakash Singh SDE @vkonex AI research</p></a>
			</div><!--col-lg-12-->
		</div><!--row-->
	</div><!--container-->
</section><!--footer end section-->
<a href="#" class="go_top"></a>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script type="text/javascript" src="assets/js/ddsmoothmenu.js">
</script>
<script type="text/javascript">
ddsmoothmenu.init({
    mainmenuid: "smoothmenu1", //menu DIV id
    orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
    classname: 'ddsmoothmenu', //class added to menu's outer DIV
    //customtheme: ["#1c5a80", "#18374a"],
    contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})
</script>
<script type="text/javascript">
$(window).on('scroll', function () 
{
  var scroll = $(window).scrollTop();
  if (scroll < 100) {
    $("#header-sticky").removeClass("cbp-af-header-shrink");
  } else {
    $("#header-sticky").addClass("cbp-af-header-shrink");
  }
});
</script>
<script type="text/javascript" src="assets/js/tabby.js"></script> 
<script>tabby.init();</script>
<script type="text/javascript" src="assets/fancybox/dist/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="assets/fancybox/dist/jquery.fancybox.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/fancybox/dist/jquery.fancybox.min.css" />
<script type="text/javascript" src="assets/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<link rel="stylesheet" type="text/css" href="assets/fancybox/dist/jquery.fancybox.min.js" />
<script type="text/javascript">
$(document).ready(function() 
{
        $('.fancybox').fancybox();
});
</script>
<script>
var objQueryString={};function getParameterByName(e){e=e.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");var a=new RegExp("[\\?&]"+e+"=([^&#]*)").exec(location.search);return null===a?"":decodeURIComponent(a[1].replace(/\+/g," "))}function changeUrl(e,a){var r=location.search;if("-1"==r.indexOf("?")){var o="?"+e+"="+a;history.pushState({state:1,rand:Math.random()},"",o)}else{if("-1"==r.indexOf(e))o=r+"&"+e+"="+a;else oldValue=getParameterByName(e),o="-1"!=r.indexOf("?"+e+"=")?r.replace("?"+e+"="+oldValue,"?"+e+"="+a):r.replace("&"+e+"="+oldValue,"&"+e+"="+a);history.pushState({state:1,rand:Math.random()},"",o)}objQueryString.key=a,sendAjaxReq(objQueryString)}function sendAjaxReq(e){$.post("test.php",e,function(e){})}function removeQString(e){var a=document.location.href,r=location.search;if(""!=e)oldValue=getParameterByName(e),removeVal=e+"="+oldValue,"-1"!=r.indexOf("?"+removeVal+"&")?a=a.replace("?"+removeVal+"&","?"):"-1"!=r.indexOf("&"+removeVal+"&")?a=a.replace("&"+removeVal+"&","&"):"-1"!=r.indexOf("?"+removeVal)?a=a.replace("?"+removeVal,""):"-1"!=r.indexOf("&"+removeVal)&&(a=a.replace("&"+removeVal,""));else{r=location.search;a=a.replace(r,"")}history.pushState({state:1,rand:Math.random()},"",a)}
</script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/scrolling-nav.js"></script>
<script type="text/javascript">
jQuery("document").ready(function($){

    var nav = $('.page_nav_section');
    $(window).scroll(function () 
    {
        if ($(this).scrollTop() > 250) 
        {
            nav.addClass("f_nav");
        } 
        else 
        {
            nav.removeClass("f_nav");
        }
    });
});  
$(document).ready(function() 
{
    // Show or hide the sticky footer button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) 
        {
            $('.go_top').fadeIn(200);
        } 
        else 
        {
            $('.go_top').fadeOut(200);
        }
    });
    
    // Animate the scroll to top
    $('.go_top').click(function(event) 
    {
        event.preventDefault();
        $('body').animate({scrollTop: 0}, 300);
    })
});   
</script>
<script src="assets/js/infiniteSlider2.js"></script>
<script src="assets/js/call.js"></script>

</body>
</html>