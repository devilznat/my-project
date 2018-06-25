<?php
  session_start();
  require('../../db/connect.php');
  $headlink = "newsletters_page";
  
  $id=$_GET["id"];
  
  $strSQL = "SELECT * FROM newsletter WHERE language_code = 'en' AND nid = '$id' ";
    $result = mysql_query($strSQL);

?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<html prefix="og: http://ogp.me/ns#">
<head>
    <title>Newsletters Page | The i Mastermind </title>
<?php
               while($rs = mysql_fetch_array($result))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
?>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<meta property="og:url" content="http://theimastermind.com/page/en/newsletters_page?id=<?echo $id;?>"/>
<meta property="og:title" content="<?echo $rs["topic"];?>"/>
<meta property="og:image" content="http://theimastermind.com/uploadfile/article/<? echo $rs["pic"]; ?>"/>
<meta property="og:description" content="<?echo $rs["value"];?>" />
<meta property="og:type" content="website"/>

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@theimastermind" />
<meta name="twitter:title" content="<?echo $rs["topic"];?>" />
<meta name="twitter:description" content="<?echo $rs["value"];?>" />
<meta name="twitter:image" content="http://theimastermind.com/uploadfile/article/<? echo $rs["pic"]; ?>" />

<?
}
?>
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="../../assets/css/headers/header-v6.css">
    <link rel="stylesheet" href="../../assets/css/footers/footer-v6.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../../assets/plugins/animate.css">
    <link rel="stylesheet" href="../../assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="../../assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/plugins/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="../../assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../../assets/plugins/master-slider/masterslider/style/masterslider.css">
    <link rel='stylesheet' href="../../assets/plugins/master-slider/masterslider/skins/black-2/style.css">

    <!-- CSS Pages Style -->
    <link rel="stylesheet" href="../../assets/css/pages/page_one.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="../../assets/css/theme-colors/blue.css" id="style_color">
    <link rel="stylesheet" href="../../assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="../../assets/css/custom.css">
</head>

<body class="header-fixed header-fixed-space">
<?


    $strSQL = "SELECT * FROM newsletter WHERE language_code = 'en' AND nid = '$id' ";
    $result = mysql_query($strSQL);

?>
    <div class="wrapper">

       <!-- require head  -->
        <? require ('head-page.php');?>
        <!-- End require head  -->



        <!--=== Blog Posts ===-->
        <div class="bg-color-light">
            <div class="container content-sm">
                <div class="row">
                
                    <!-- Blog All Posts -->
                    <div class="col-md-9">
                        <!-- News v3 -->
                        <?php
               while($rs = mysql_fetch_array($result))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{

    $timestamp = strtotime($rs['created_date']);
$dated = date('d', $timestamp);
$datem = date('m', $timestamp);
$datey = date('Y', $timestamp);
                ?>
                        <div class="news-v3 bg-color-white margin-bottom-30">
                        <a href="newsletters_page?id=<? echo $rs["nid"]; ?>">
                            <img class="img-responsive full-width" src="http://theimastermind.com/uploadfile/article/<?echo $rs["pic"];?>" alt="">

                            </a>
                            <div class="news-v3-in">
                                <ul class="list-inline posted-info">
                                    <li>By <a href="#">Admin.</a></li>
                                    <li>In <a href="newsletters_alltag?tag=<? echo $rs["location"]; ?>"><?echo $rs["location"];?></a></li>
                                    <li>Posted <?echo $datey;?>-<?echo $datem;?>-<?echo $dated;?></li>
                                </ul>
                                <h2><b><a href="http://theimastermind.com/newsletters_page.html"><?echo $rs["topic"];?></a></b></h2>
                                <?echo $rs["detail"];?>
                                
                                <ul class="post-shares post-shares-lg">
                                   

                                    <!-- Sharingbutton Facebook -->
<a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=http://theimastermind.com/page/en/newsletters_page?id=<?echo $id;?>" target="_blank" aria-label="Share on Facebook">
  <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
    <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
        <g>
            <path d="M18.768,7.465H14.5V5.56c0-0.896,0.594-1.105,1.012-1.105s2.988,0,2.988,0V0.513L14.171,0.5C10.244,0.5,9.5,3.438,9.5,5.32 v2.145h-3v4h3c0,5.212,0,12,0,12h5c0,0,0-6.85,0-12h3.851L18.768,7.465z"/>
        </g>
    </svg>
    </div></div>
</a>

<!-- Sharingbutton Twitter -->
<a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=<?echo $rs["topic"]?>.&amp;url=http%3A%2F%2Ftheimastermind.com%2Fpage%2Fen%2Fnewsletters_page?id=<?echo $id;?>" target="_blank" aria-label="Share on Twitter">
  <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
    <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
        <g>
            <path d="M23.444,4.834c-0.814,0.363-1.5,0.375-2.228,0.016c0.938-0.562,0.981-0.957,1.32-2.019c-0.878,0.521-1.851,0.9-2.886,1.104 C18.823,3.053,17.642,2.5,16.335,2.5c-2.51,0-4.544,2.036-4.544,4.544c0,0.356,0.04,0.703,0.117,1.036 C8.132,7.891,4.783,6.082,2.542,3.332C2.151,4.003,1.927,4.784,1.927,5.617c0,1.577,0.803,2.967,2.021,3.782 C3.203,9.375,2.503,9.171,1.891,8.831C1.89,8.85,1.89,8.868,1.89,8.888c0,2.202,1.566,4.038,3.646,4.456 c-0.666,0.181-1.368,0.209-2.053,0.079c0.579,1.804,2.257,3.118,4.245,3.155C5.783,18.102,3.372,18.737,1,18.459 C3.012,19.748,5.399,20.5,7.966,20.5c8.358,0,12.928-6.924,12.928-12.929c0-0.198-0.003-0.393-0.012-0.588 C21.769,6.343,22.835,5.746,23.444,4.834z"/>
        </g>
    </svg>
    </div></div>
</a>

<!-- Sharingbutton Google+ -->
<a class="resp-sharing-button__link" href="https://plus.google.com/share?url=http%3A%2F%2Ftheimastermind.com%2Fpage%2Fen%2Fnewsletters_page?id=<?echo $id;?>" target="_blank" aria-label="Share on Google+">
  <div class="resp-sharing-button resp-sharing-button--google resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
    <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
        <g>
            <path d="M11.366,12.928c-0.729-0.516-1.393-1.273-1.404-1.505c0-0.425,0.038-0.627,0.988-1.368 c1.229-0.962,1.906-2.228,1.906-3.564c0-1.212-0.37-2.289-1.001-3.044h0.488c0.102,0,0.2-0.033,0.282-0.091l1.364-0.989 c0.169-0.121,0.24-0.338,0.176-0.536C14.102,1.635,13.918,1.5,13.709,1.5H7.608c-0.667,0-1.345,0.118-2.011,0.347 c-2.225,0.766-3.778,2.66-3.778,4.605c0,2.755,2.134,4.845,4.987,4.91c-0.056,0.22-0.084,0.434-0.084,0.645 c0,0.425,0.108,0.827,0.33,1.216c-0.026,0-0.051,0-0.079,0c-2.72,0-5.175,1.334-6.107,3.32C0.623,17.06,0.5,17.582,0.5,18.098 c0,0.501,0.129,0.984,0.382,1.438c0.585,1.046,1.843,1.861,3.544,2.289c0.877,0.223,1.82,0.335,2.8,0.335 c0.88,0,1.718-0.114,2.494-0.338c2.419-0.702,3.981-2.482,3.981-4.538C13.701,15.312,13.068,14.132,11.366,12.928z M3.66,17.443 c0-1.435,1.823-2.693,3.899-2.693h0.057c0.451,0.005,0.892,0.072,1.309,0.2c0.142,0.098,0.28,0.192,0.412,0.282 c0.962,0.656,1.597,1.088,1.774,1.783c0.041,0.175,0.063,0.35,0.063,0.519c0,1.787-1.333,2.693-3.961,2.693 C5.221,20.225,3.66,19.002,3.66,17.443z M5.551,3.89c0.324-0.371,0.75-0.566,1.227-0.566l0.055,0 c1.349,0.041,2.639,1.543,2.876,3.349c0.133,1.013-0.092,1.964-0.601,2.544C8.782,9.589,8.363,9.783,7.866,9.783H7.865H7.844 c-1.321-0.04-2.639-1.6-2.875-3.405C4.836,5.37,5.049,4.462,5.551,3.89z"/>
            <polygon points="23.5,9.5 20.5,9.5 20.5,6.5 18.5,6.5 18.5,9.5 15.5,9.5 15.5,11.5 18.5,11.5 18.5,14.5 20.5,14.5 20.5,11.5  23.5,11.5     "/>
        </g>
    </svg>
    </div></div>
</a>

<!-- Sharingbutton E-Mail -->
<a class="resp-sharing-button__link" href="mailto:?subject=<?echo $rs["topic"]?>.&amp;body=http%3A%2F%2Ftheimastermind.com%2Fpage%2Fen%2Fnewsletters_page?id=<?echo $id;?>" target="_blank" aria-label="Share on E-Mail">
  <div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
    <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
        <path d="M22,4H2C0.897,4,0,4.897,0,6v12c0,1.103,0.897,2,2,2h20c1.103,0,2-0.897,2-2V6C24,4.897,23.103,4,22,4z M7.248,14.434 l-3.5,2C3.67,16.479,3.584,16.5,3.5,16.5c-0.174,0-0.342-0.09-0.435-0.252c-0.137-0.239-0.054-0.545,0.186-0.682l3.5-2 c0.24-0.137,0.545-0.054,0.682,0.186C7.571,13.992,7.488,14.297,7.248,14.434z M12,14.5c-0.094,0-0.189-0.026-0.271-0.08l-8.5-5.5 C2.997,8.77,2.93,8.46,3.081,8.229c0.15-0.23,0.459-0.298,0.691-0.147L12,13.405l8.229-5.324c0.232-0.15,0.542-0.084,0.691,0.147 c0.15,0.232,0.083,0.542-0.148,0.691l-8.5,5.5C12.189,14.474,12.095,14.5,12,14.5z M20.934,16.248 C20.842,16.41,20.673,16.5,20.5,16.5c-0.084,0-0.169-0.021-0.248-0.065l-3.5-2c-0.24-0.137-0.323-0.442-0.186-0.682 s0.443-0.322,0.682-0.186l3.5,2C20.988,15.703,21.071,16.009,20.934,16.248z"/>
    </svg>
    </div></div>
</a>

<!-- Sharingbutton Linkedin -->
<a class="resp-sharing-button__link" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Ftheimastermind.com%2Fpage%2Fen%2Fnewsletters_page?id=<?echo $id;?>&amp;title=<?echo $rs["topic"]?>.&amp;summary=<?$rs["value"];?>.&amp;source=http://www.theimastermind.com/uploadfile/article/<? echo $rs["pic"]; ?>" target="_blank" aria-label="Share on Linkedin">
  <div class="resp-sharing-button resp-sharing-button--linkedin resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
    <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
        <g>
            <path d="M6.527,21.5h-5v-13h5V21.5z M4.018,6.5H3.988C2.478,6.5,1.5,5.318,1.5,4.019c0-1.329,1.008-2.412,2.547-2.412 c1.541,0,2.488,1.118,2.519,2.447C6.565,5.354,5.588,6.5,4.018,6.5z M15.527,12.5c-1.105,0-2,0.896-2,2v7h-5c0,0,0.059-12,0-13h5 v1.485c0,0,1.548-1.443,3.938-1.443c2.962,0,5.062,2.144,5.062,6.304V21.5h-5v-7C17.527,13.396,16.632,12.5,15.527,12.5z"/>
        </g>
    </svg>
    </div></div>
</a>

                                </ul>

                            </div>
                        
                  
                        </div>

 <?php
    }
    ?>
                             
                        <!-- End News v3 -->
<?
                        $strSQL0 = "SELECT * FROM newsletter WHERE language_code = 'en' ORDER BY RAND()
LIMIT 2";
$result0 = mysql_query($strSQL0);



?>

                        <!-- News v2 -->
                        <div class="row news-v2 margin-bottom-50">
<?php
               while($rs0 = mysql_fetch_array($result0))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{

    $timestamp = strtotime($rs0['created_date']);
$date1 = date('d', $timestamp);
$date2 = date('M', $timestamp);
                ?>
                            <div class="col-sm-6 sm-margin-bottom-30" >
                                <div class="news-v2-badge">
                                <a href="newsletters_page?id=<? echo $rs0["nid"]; ?>">
                                    <img class="img-responsive" src="http://theimastermind.com/uploadfile/article/<?echo $rs0["pic"] ?>" alt="">
                                    </a>
                                    <p>
                                        <span><?echo $date1;?></span>
                                    <small><?echo $date2;?></small>
                                    </p>
                                </div>
                                <div class="news-v2-desc">
                                    <h3><a href="newsletters_page?id=<? echo $rs0["nid"]; ?>"><?echo $rs0["topic"] ?></a></h3>
                                    <small>By Admin | In <a href="newsletters_alltag?tag=<? echo $rs0["location"]; ?>"><?echo $rs0["location"] ?></a></small>
                                   
                                </div>
                            </div>
          <? } ?>
                           
                        </div>
                        <!-- End News v2 -->

                    

                        

                            <!-- <div class="message">
                                <i class="rounded-x fa fa-check"></i>
                                <p>Your comment was successfully posted!</p>
                            </div> -->
                        </form>
                        <!-- End Form -->
                    </div>
                    <!-- End Blog All Posts -->
<?
$strSQL2 = "SELECT * FROM newsletter WHERE language_code = 'en' ORDER BY RAND()
LIMIT 3";
$result2 = mysql_query($strSQL2);

$strSQL3 = "SELECT * FROM newsletter WHERE language_code = 'en' ORDER BY nid DESC
LIMIT 4";
$result3 = mysql_query($strSQL3);

?>

                    <!-- Blog Sidebar -->
                    <div class="col-md-3">
                        <div class="headline-v2 news"><h2>Trending</h2></div>
                        <!-- Trending -->
                        <ul class="list-unstyled blog-trending margin-bottom-50">

                        <?php
               while($rs2 = mysql_fetch_array($result2))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
    $timestamp = strtotime($rs2['created_date']);
$dated = date('d', $timestamp);
$datem = date('m', $timestamp);
$datey = date('Y', $timestamp);
                ?>
                            <li>
                                <h3><a href="newsletters_page?id=<? echo $rs2["nid"]; ?>"><font color="#446cb3"><b><? echo $rs2["topic"]; ?></b></font></a></h3>
                                <h5><font color="#a2a1a1"><?echo $rs2["value"];?></font></h5>
                                <small><?echo $datey;?>-<?echo $datem;?>-<?echo $dated;?> / <a href="newsletters_alltag?tag=<? echo $rs2["category_id"]; ?>"><? echo $rs2["location"]; ?></a> </small>
                            </li>
                <? } ?>
                        </ul>
                        <!-- End Trending -->

                        <div class="headline-v2 news"><h2>Latest Posts</h2></div>
                        <!-- Latest Links -->
                        <ul class="list-unstyled blog-latest-posts margin-bottom-50">

                        <?php
               while($rs3 = mysql_fetch_array($result3))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
    $timestamp = strtotime($rs3['created_date']);
$dated = date('d', $timestamp);
$datem = date('m', $timestamp);
$datey = date('Y', $timestamp);
                ?>
                            <li>
                                <h3><a href="newsletters_page?id=<? echo $rs3["nid"]; ?>"><font color="#446cb3"><b><? echo $rs3["topic"]; ?></b></font></a></h3>
                                <h5><font color="#a2a1a1"><?echo $rs3["value"];?></font></h5>
                                <small><?echo $datey;?>-<?echo $datem;?>-<?echo $dated;?> / <a href="newsletters_alltag?tag=<? echo $rs3["category_id"]; ?>"><? echo $rs3["location"]; ?></a></small>
                               
                            </li>
        <? }?>
                        </ul>
                        <!-- End Latest Links -->

                        <div class="headline-v2"><h2>Tags</h2></div>
                        <!-- Tags v2 -->
                        <ul class="list-inline tags-v2 margin-bottom-50">
                        <li><a href="newsletters_alltag?tag=1">Articles</a></li>
                        <li><a href="newsletters_alltag?tag=4">Populars</a></li>
                        <li><a href="newsletters_alltag?tag=2">Tips</a></li>
                        <li><a href="newsletters_alltag?tag=3">Knowledge</a></li>
                        <li><a href="newsletters_alltag?tag=6">Recents</a></li>
                        </ul>
                        <!-- End Tags v2 -->

                       

                     <!--  <div class="headline-v2"><h2>Newsletter</h2></div> -->
                        <!-- Blog Newsletter -->
                       <!--  <div class="blog-newsletter">
                            <p>Subscribe to our newsletter for good news, sent out every month.</p>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email">
                                <span class="input-group-btn">
                                    <button class="btn-u" type="button">Subscribe</button>
                                </span>
                            </div>
                        </div>
 -->                        <!-- End Blog Newsletter -->
                    </div>
                    <!-- End Blog Sidebar -->
                </div>
            </div><!--/end container-->
        </div>
        <!--=== End Blog Posts ===-->







        <!-- requrie footer -->
        <? require ('footer-homepage.php'); ?>
        <!-- End reurie footer  -->

        </div><!--/wrapper-->



        <!-- JS Global Compulsory -->
        <script type="text/javascript" src="../../assets/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../../assets/plugins/jquery/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- JS Implementing Plugins -->
        <script type="text/javascript" src="../../assets/plugins/back-to-top.js"></script>
        <script type="text/javascript" src="../../assets/plugins/smoothScroll.js"></script>
        <script type="text/javascript" src="../../assets/plugins/jquery.parallax.js"></script>
        <script src="../../assets/plugins/master-slider/masterslider/masterslider.min.js"></script>
        <script src="../../assets/plugins/master-slider/masterslider/jquery.easing.min.js"></script>
        <script type="text/javascript" src="../../assets/plugins/counter/waypoints.min.js"></script>
        <script type="text/javascript" src="../../assets/plugins/counter/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="../../assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
        <script type="text/javascript" src="../../assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
        <!-- JS Customization -->
        <script type="text/javascript" src="../../assets/js/custom.js"></script>
        <!-- JS Page Level -->
        <script type="text/javascript" src="../../assets/js/app.js"></script>
        <script type="text/javascript" src="../../assets/js/plugins/fancy-box.js"></script>
        <script type="text/javascript" src="../../assets/js/plugins/owl-carousel.js"></script>
        <script type="text/javascript" src="../../assets/js/plugins/master-slider-fw.js"></script>
        <script type="text/javascript" src="../../assets/js/plugins/style-switcher.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                App.init();
                App.initCounter();
                App.initParallaxBg();
                FancyBox.initFancybox();
                MSfullWidth.initMSfullWidth();
                OwlCarousel.initOwlCarousel();
                StyleSwitcher.initStyleSwitcher();
            });


        </script>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/576e66a6b814591e0c917d60/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->

<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
    <![endif]-->

</body>
</html>
