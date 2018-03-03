<!DOCTYPE html>
<html>
<style>
body {font-family: "Lato", font-family:Arial, SolaimanLipiNormal, sans-serif}

ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #505077;
	color:#fff;
}

/* Float the list items side by side */
ul.tab li {float: left;}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
	color:#fff;
}

/* Change background color of links on hover */
ul.tab li a:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {
    background-color: #BA1515;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #096f03;
    border-top: none;
}

.topright {
 float: right;
 cursor: pointer;
 font-size: 20px;
}

.topright:hover {color: red;}
</style>
<body>



<ul class="tab">
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'dv')" id="defaultOpen">বিভাগীয় খবর </a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Dhaka')">ঢাকা</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'ctg')">চট্টগ্রাম</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'borishal')">বরিশাল </a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'kholna')">খুলনা </a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'rajshahi')">রাজশাহী</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'sylet')">সিলেট</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'rongpur')">রংপুর</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Mymanshing')">ময়মনসিংহ</a></li>
</ul>


<div id="dv" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"> </span>
	<!--Start Catagory-->
				<div class="catagory fix">
					<div class="catagory_01 fix">
<?php query_posts('post_type=post&category_name=বিভাগীয়-খবর&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('catagory'); ?>						</div>
					<div class="catagory_02 fix">
<?php query_posts('post_type=post&category_name=বিভাগীয়-খবর&offset=1&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>					</div>
			
			<h4 class="more_news"><a href="https://dhakacrime.com/?cat=6"> আরো সংবাদ &raquo; </a></h4>
				</div>
	<!--Close Catagory-->
</div>


<div id="Dhaka" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"> </span>
	<!--Start Catagory-->
				<div class="catagory fix">
					<div class="catagory_01 fix">
<?php query_posts('post_type=post&category_name=ঢাকা-বিভাগ&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('catagory'); ?>						</div>
					<div class="catagory_02 fix">
<?php query_posts('post_type=post&category_name=ঢাকা-বিভাগ&offset=1&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>					</div>
			
			<h4 class="more_news"><a href="https://dhakacrime.com/?cat=7"> আরো সংবাদ &raquo; </a></h4>
				</div>
	<!--Close Catagory-->
</div>

<div id="ctg" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"> </span>
  
  
	<!--Start Catagory-->
				<div class="catagory fix">
					<div class="catagory_01 fix">
<?php query_posts('post_type=post&category_name=চট্টগ্রাম-বিভাগ&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('catagory'); ?>					
			</div>
					<div class="catagory_02 fix">
<?php query_posts('post_type=post&category_name=চট্টগ্রাম-বিভাগ&offset=1&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>			
			</div>
		<h4 class="more_news"><a href="https://dhakacrime.com/?cat=8"> আরো সংবাদ &raquo; </a></h4>
		</div>
	<!--Close Catagory-->
</div>



<div id="borishal" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"> </span>
  
  
	<!--Start Catagory-->
				<div class="catagory fix">
					<div class="catagory_01 fix">
<?php query_posts('post_type=post&category_name=বরিশাল-বিভাগ&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('catagory'); ?>					
			</div>
					<div class="catagory_02 fix">
<?php query_posts('post_type=post&category_name=বরিশাল-বিভাগ&offset=1&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>			
			</div>
		<h4 class="more_news"><a href="https://dhakacrime.com/?cat=9"> আরো সংবাদ &raquo; </a></h4>
		</div>
	<!--Close Catagory-->
</div>



<div id="kholna" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"> </span>
  
  
	<!--Start Catagory-->
				<div class="catagory fix">
					<div class="catagory_01 fix">
<?php query_posts('post_type=post&category_name=খুলনা-বিভাগ&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('catagory'); ?>					
			</div>
					<div class="catagory_02 fix">
<?php query_posts('post_type=post&category_name=খুলনা-বিভাগ&offset=1&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>			
			</div>
		<h4 class="more_news"><a href="https://dhakacrime.com/?cat=10"> আরো সংবাদ &raquo; </a></h4>
		</div>
	<!--Close Catagory-->
</div>



<div id="rajshahi" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"> </span>
  
  
	<!--Start Catagory-->
				<div class="catagory fix">
					<div class="catagory_01 fix">
<?php query_posts('post_type=post&category_name=রাজশাহী-বিভাগ&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('catagory'); ?>					
			</div>
					<div class="catagory_02 fix">
<?php query_posts('post_type=post&category_name=খরাজশাহী-বিভাগ&offset=1&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>			
			</div>
		<h4 class="more_news"><a href="https://dhakacrime.com/?cat=11"> আরো সংবাদ &raquo; </a></h4>
		</div>
	<!--Close Catagory-->
</div>


<div id="sylet" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"> </span>
  
  
	<!--Start Catagory-->
				<div class="catagory fix">
					<div class="catagory_01 fix">
<?php query_posts('post_type=post&category_name=সিলেট-বিভাগ&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('catagory'); ?>					
			</div>
					<div class="catagory_02 fix">
<?php query_posts('post_type=post&category_name=সিলেট-বিভাগ&offset=1&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>			
			</div>
		<h4 class="more_news"><a href="https://dhakacrime.com/?cat=12"> আরো সংবাদ &raquo; </a></h4>
		</div>
	<!--Close Catagory-->
</div>



<div id="rongpur" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"> </span>
  
  
	<!--Start Catagory-->
				<div class="catagory fix">
					<div class="catagory_01 fix">
<?php query_posts('post_type=post&category_name=রংপুর-বিভাগ&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('catagory'); ?>					
			</div>
					<div class="catagory_02 fix">
<?php query_posts('post_type=post&category_name=রংপুর-বিভাগ&offset=1&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>			
			</div>
		<h4 class="more_news"><a href="https://dhakacrime.com/?cat=13"> আরো সংবাদ &raquo; </a></h4>
		</div>
	<!--Close Catagory-->
</div>


<div id="Mymanshing" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"> </span>
  
  
	<!--Start Catagory-->
				<div class="catagory fix">
					<div class="catagory_01 fix">
<?php query_posts('post_type=post&category_name=ময়মনসিংহ-বিভাগ&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('catagory'); ?>					
			</div>
					<div class="catagory_02 fix">
<?php query_posts('post_type=post&category_name=ময়মনসিংহ-বিভাগ&offset=1&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>			
			</div>
		<h4 class="more_news"><a href="https://dhakacrime.com/?cat=14"> আরো সংবাদ &raquo; </a></h4>
		</div>
	<!--Close Catagory-->
</div>



<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html>

