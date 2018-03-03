<!Doctype html>
<html>
    <head>

        <meta charset="UTF-8"/>
        <title><?php bloginfo('name')?></title>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/responsive.css" type="text/css" />

   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/menu.css">
  
  <meta property="fb:pages" content="295918380777600" />
  <meta property="fb:article_style" content="default">


        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <meta property="og:title" content="<?php the_title(); ?>" /> 
    <meta property="og:description" content="" />  
    <meta property="og:image" content="<?php echo $image[0]; ?>" /> 
    <meta property="og:video" content="" /> 
    <meta property="og:video:width" content="560" />  
    <meta property="og:video:height" content="340" />  
    <meta property="og:video:type" content="application/x-shockwave-flash" />

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" title="Favicon" />	
<script src="<?php bloginfo('template_directory'); ?>/script.js"></script>




    <style>
    body {
        background-color: #ffffff;
        }
    </style>




  <?php wp_head();?>
	
	</head>
	<body <?php body_class();?>>
	
	<div class="stucture">
	<!--Start Header-->
	
		<div class="header fix">
		
		
		<div class="logo1 fix">
		<div class="widget_title">
		<?php dynamic_sidebar('logo'); ?>
	
		
		
		
		
		
		</div>	
		
	<!--Start Time And Date Code-->		
    <p class="navbar-text">
        <span class="glyphicon glyphicon-send"></span> 
         আজ-&nbsp;<?php echo do_shortcode('[bangla_day]'); ?>,&nbsp;<?php echo do_shortcode('[english_date]'); ?>,&nbsp;<?php echo do_shortcode('[bangla_date]'); ?>
    </p>

	</div>
	
<!--END Time And Date Code-->	
	
   <!--Start Hader Add Widget-->	
	<div class="top_ads2 fix"><div class="widget_title"><?php dynamic_sidebar('topads_01'); ?></div>	</div>
	   <!--END Hader Add Widget-->
			
					</div>				
	<!--Close Header-->
	<div class="clear"></div>
	<!--Start Menu-->
<nav>	
	<div id='cssmenu' style="font-family:Arial, SolaimanLipiNormal, sans-serif">


	<ul>
   <li><a href='https://www.dhakacrime.com'>প্রচ্ছদ</a> </li>
   
   
   
      <li class="active has-sub"><span class="submenu-button"></span><a href="https://dhakacrime.com/category/bd/">বাংলাদেশ</a>
      <ul>
        <li><a href='https://dhakacrime.com/?cat=3'>জাতীয়</a> </li>
        <li><a href='https://dhakacrime.com/?cat=4'>রাজনীতি</a> </li>
        <li><a href='https://dhakacrime.com/?cat=5'>অর্থ-বাণিজ্য</a></li>
    </ul>
   </li>
   
   
   
     <li class="active has-sub"><span class="submenu-button"></span><a href="https://dhakacrime.com/?cat=6">বিভাগীয় খবর</a>
      <ul>
        <li><a href="https://dhakacrime.com/?cat=7">ঢাকা বিভাগ</a></li>
         <li><a href="https://dhakacrime.com/?cat=8">চট্টগ্রাম বিভাগ</a></li>
        <li><a href="https://dhakacrime.com/?cat=9">বরিশাল বিভাগ</a></li>
        <li><a href="https://dhakacrime.com/?cat=10">খুলনা বিভাগ</a></li>
        <li><a href="https://dhakacrime.com/?cat=11">রাজশাহী বিভাগ</a></li>
        <li><a href="https://dhakacrime.com/?cat=12">সিলেট বিভাগ</a></li>
        <li><a href="https://dhakacrime.com/?cat=13">রংপুর বিভাগ</a></li>
        <li><a href="https://dhakacrime.com/?cat=14">ময়মনসিংহ বিভাগ</a></li>
    </ul>
   </li>
   
   
   
   <li><a href='https://dhakacrime.com/?cat=15'>আন্তর্জাতিক</a></li>
   <li><a href='https://dhakacrime.com/?cat=22'>ক্রাইম নিউজ</a></li>
   <li><a href='https://dhakacrime.com/?cat=16'>খেলাধুলা</a> </li>
    <li><a href='https://dhakacrime.com/?cat=17'>শিক্ষা</a></li>
   <li><a href='https://dhakacrime.com/?cat=18'>বিনোদন</a></li>
   <li><a href='https://dhakacrime.com/?cat=19'>ফিচার</a></li>
      <li><a href='https://dhakacrime.com/?cat=24'>কলাম</a></li>
   <li><a href='https://dhakacrime.com/?cat=23'>ঢাকা ক্রাইম এক্সক্লুসিভ</a></li>
 
 
   <li class="active has-sub"><span class="submenu-button"></span><a href="#">অন্যান্য</a>
      <ul>
        <li><a href='https://dhakacrime.com/?cat=21'>তথ্য-প্রযুক্তি</a></li>
        <li><a href='https://dhakacrime.com/?cat=20'>লাইফস্টাইল</a></li>
        <li><a href='https://dhakacrime.com/?cat=25'>সম্পাদকীয়</a></li>
        <li><a href='https://dhakacrime.com/?cat=26'>মতামত</a></li>
        <li><a href='https://dhakacrime.com/?cat=6'>  দেশজুড়ে  </a></li>
        <li><a href='https://dhakacrime.com/?cat=27'>বিচিত্র সংবাদ</a></li>
        <li><a href='https://dhakacrime.com/?cat=28'> সাহিত্য সংবাদ </a></li>
 
    </ul>
   </li>
 

   


</ul>

</div>
</nav>
	<!--Close Menu-->