<?php require_once('videos/list.php') ?>
<article id="menubox" class="reveal-modal">
<div class="boxes">
	<!--<form id="searchform" class="searchbox">
		<input type="text" id="search" class="field searchtext" placeholder="Keyword..."/>
		<input type="submit" class="button" name="submit" value="Go"/>
	</form>-->
	<div class="box">
		<h3>Menu</h3>
		<nav>
		<ul>
			<!--<li><a href="layout.html">News</a>
            <ul>
            <li> <a href="single-post.html">News 1</a></li>
            </ul>
            </li>-->
            
			<li><a href="#">Videos</a>
			<ul>
				<li><a href="#">Report</a>
                <ul>
					<li><a href="videos/?v=Dr-mulas">Dr-mulas</a></li>
					<li><a href="videos/?v=N.bengala">N.bengala</a></li>
				</ul>
                </li>
				<li><a href="#">Shows</a>
				<ul>
					<li><a href="videos/?v=top-of-pops-1er-part1">Top of pops part 1</a></li>
					<li><a href="videos/?v=top-of-pops-1er-part5">Top of pops part 5</a></li>
				</ul>
				</li>
			</ul>
			</li>
			<li><a href="gallery.html">Gallery Page</a></li>
		</ul>
		</nav>
	</div>
	<div class="box">
		<h3>Latest Video</h3>
		<div class="flex-video">
<iframe src="http://www.youtube.com/embed/dUCi3tcsIIc" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	<ul id="tabs">
		<li><a href="#" title="tab1">Latest videos</a></li>
		<!--<li><a href="#" title="tab2">Recent News</a></li>-->
	</ul>
	<div id="tab-content">
		<div id="tab1">
			<ul>
<?php 
$videos_reversed=array_reverse($videos);
$limit=5;
foreach($videos_reversed as $alias=>$video) {
if($limit==0)
break;
$video_date=ReadableDate($video['date']);
			
?>
<li><a href="<?php echo $base_url ?>videos/?v=<?php echo $alias ?>"><img src="<?php echo $video['thumb'] ?>" alt=""/></a><a href="<?php echo $base_url ?>videos/?v=<?php echo $alias ?>"><?php echo $video['title'] ?></a><br/><?php echo $video_date[1]?> <?php echo $video_date[0]?>, <?php echo $video_date[2]?></li>

<?php

$limit--;
}
?>
			</ul>
		</div>
		<div id="tab2">
			<ul>
				<li><a href="single-post.html"><img src="images/photos/s-3.jpg" alt=""/></a><a href="single-post.html">Lorem Ipsum</a><br/>July 29, 2012</li>
				<li><a href="single-post.html"><img src="images/photos/s-4.jpg" alt=""/></a><a href="single-post.html">Nibh Mauris lucem</a><br/>July 27, 2012</li>
				<li><a href="single-post.html"><img src="images/photos/s-1.jpg" alt=""/></a><a href="single-post.html">Donec in lorem</a><br/>July 24, 2012</li>
				<li><a href="single-post.html"><img src="images/photos/s-2.jpg" alt=""/></a><a href="single-post.html">Auctor Mauris</a><br/>July 21, 2012</li>
			</ul>
		</div>
	</div>
	<!--<div class="box">
		<h3>Twitter</h3>
		<div class="tweet query">
		</div>
	</div>-->
	<div class="box">
		<h3>Follow Us</h3>
		<ul class="social-icons">
			<li><a target="_blank" href="https://www.facebook.com/RanieriGaia"><img class="social-icon" src="<?php echo $base_url ?>images/social-icons/social_facebook.png" alt="Facebook"/></a></li>
			<li><a href="https://twitter.com/ga_ranieri" target="_blank"><img class="social-icon" src="<?php echo $base_url ?>images/social-icons/social_twitter.png" alt="Twitter"/></a></li>
			<!--<li><a href="#"><img class="social-icon" src="images/social-icons/social_myspace.png" alt="MySpace"/></a></li>-->
			<!--<li><a href="#"><img class="social-icon" src="images/social-icons/social_amazon.png" alt="Amazon"/></a></li>-->
			<!--<li><a href="#"><img class="social-icon" src="images/social-icons/social_vimeo.png" alt="Vimeo"/></a></li>-->
			<li><a href="http://www.youtube.com/gaiaranieri" target="_blank"><img class="social-icon" src="<?php echo $base_url ?>images/social-icons/social_you_tube.png" alt="YouTube"/></a></li>
		</ul>
	</div>
</div>
<a class="close-reveal-modal">&#215;</a>
</article>