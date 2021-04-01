<?php 
include('list.php');
$v=isset($_GET['v'])?$_GET['v']:'';
$video=$videos[$v];
$video_date=ReadableDate($video['date']);
$date=$video_date[0].' '.$video_date[1].' '.$video_date[2];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $video['title'] ?></title>
<!-- META TAGS  -->
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<!-- CSS FILES  -->
<link href="../css/animate.css" rel="stylesheet" type="text/css" />
<link href="../css/normalize.css" rel="stylesheet" type="text/css"/>
<link href="../css/style.css" rel="stylesheet" type="text/css"/>
<link href="../css/grid.css" rel="stylesheet" type="text/css"/>
<link href="../css/media.css" rel="stylesheet" type="text/css"/>
<link href="../css/colorbox.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<!-- TOP MENU ITEMS  -->
<a id="menu" class="menuitem" data-reveal-id="menubox"><span class="info">Menu</span></a>
<a id="homepage" class="menuitem" href="../"><span class="info">Home</span></a>
<!-- HEADER  -->
<header>
<h1>Gaia Ranieri</h1>
</header>
<!-- PAGE  -->
<div class="wrapper">
	<div class="wrap">
		<div class="single-page-title">
			Music TV
		</div>
		<div class="grids">
			<div class="grid-4">
				<a class="photo post-img" href="<?php echo $video['thumb'] ?>"><img src="<?php echo $video['thumb'] ?>" alt=""/></a>
				<ul class="cover-info">
					<li><strong>Added by :</strong> Gaia Ranieri</li>
					<li><strong>Category :</strong> <?php echo $video['type'] ?></li>
<!--					<li><strong>Comments :</strong><a href="#">13 Comments</a></li>-->
<!--					<li><strong>Tags :</strong> music, </li>-->
				</ul>
			</div>
			<div class="grid-8">
				<h3><?php echo $video['title'] ?> <span class="date"><?php echo $date ?></span></h3>
				<hr/>
                <div class="flex-video">
                  <video poster="<?php echo $video['thumb'] ?>" preload="auto" controls autoplay >
                    <source src="<?php echo $video['url'] ?>" type="video/mp4">
                  </video>
              </div>
			</div>

			<div class="grid-12 comment-link">
				<a id="read-comments" class="all-button">Read Comments</a>
			</div>
<div class="grid-12">
<div class="comments_block">
                
<div id="disqus_thread"></div>
    <script type="text/javascript">
	var disqus_identifier = '<?php echo $v ?>';
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'gaiaranieri'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
			<!--<div class="grid-12">

				<div class="comments_block">
					<h4>Comments</h4>
					<div class="comments">
						<p class="meta">
							<a href="#">User Name</a> - 5 November 2012 @ 08:13
						</p>
						<div class="comments_content">
							<p>
								 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a sapien odio, sit amet scelerisque felis. Maecenas tincidunt ligula eu magna tincidunt eget imperdiet erat malesuada. Ut in diam et metus facilisis venenatis sit amet vel enim. Duis semper elementum felis.
							</p>
							<a href="#" class="reply">Reply</a>
							<div class="clr">
							</div>
							<div class="reply_icon">
							</div>
						</div>
					</div>
					<div class="comments reply">
						<p class="meta">
							<a href="#">User Name</a> - 3 November 2012 @ 08:15
						</p>
						<div class="comments_content">
							<p>
								 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a sapien odio, sit amet felis scelerisque felis. Maecenas tincidunt ligula eu magna tincidunt eget imperdiet erat males. Ut in diam et metus facilisis venenatis sit amet vel enim. Duis semper elementum felis.
							</p>
							<a href="#" class="reply">Reply</a>
							<div class="clr">
							</div>
							<div class="reply_icon">
							</div>
						</div>
					</div>
					<div class="comments">
						<p class="meta">
							<a href="#">User Name</a> - 1 November 2012 @ 11:45
						</p>
						<div class="comments_content">
							<p>
								 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a sapien odio, sit amet scelerisque felis. Maecenas tincidunt ligula eu magna tincidunt eget imperdiet erat malesuada. Ut in diam et metus facilisis venenatis sit amet vel enim. Duis semper elementum felis.
							</p>
							<a href="#" class="reply">Reply</a>
							<div class="clr">
							</div>
							<div class="reply_icon">
							</div>
						</div>
					</div>

					<h5>Write a Comment</h5>
					<form>
						<input id="senderName" type="text" placeholder="Your Name"/>
						<input id="senderEmail" type="text" placeholder="Your Email"/>
						<input id="website" type="text" placeholder="Website"/>
						<textarea id="comment" rows="5" cols="60" placeholder="Your Comment"></textarea>
						<input type="submit" class="button" value=" Send Comment"/>
					</form>
				</div>
			</div>-->
		</div>
        </div>
	</div>
</div>
<!-- POPUP SIDEBAR & MENU  -->
<?php include('../menu.php'); ?>
<!-- FOOTER  -->
<footer>
<div class="credits">
	Copyright <?php echo date('Y') ?> - <a href="www.crea-digital.com">Crea-digital</a> <span><a id="top" href="#">Go to Top &uarr;</a></span>
</div>
</footer>
<!-- JS FILES  -->
<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/jquery.backstretch.min.js" type="text/javascript"></script>
<script src="../js/jquery.reveal.js" type="text/javascript"></script>
<script src="../js/jquery.colorbox-min.js" type="text/javascript"></script>
<script src="../js/jquery.tweet.js" type="text/javascript"></script>
<script src="../js/jquery.placeholder.min.js" type="text/javascript"></script>
<script src="../js/custom2.js" type="text/javascript"></script>
<script type="text/javascript">
    $("body").backstretch("../images/music-bg.png");
</script>

    <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'gaiaranieri'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>
</body>
</html>