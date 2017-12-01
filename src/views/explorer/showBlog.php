<?php include __DIR__ . "/common/top.php" ?>
<?php include __DIR__ . "/common/blog-header.php" ?>
<div class="container main">
    <div class="row">
    	<div id="show-side-bar" class="hide">
    		<i class="fa fa-bars" aria-hidden="true"></i>
    	</div>
        <!-- Blog content -->
        <div id="left-side" class="col-md-8">
            <div class="blog-title">
                <h1><?php echo $blog['title'] ?></h1>
            </div>
            <div class="entry-meta">
				<span class="post-category">
					posted in <a href="http://jamesknelson.com/category/react/" rel="category tag">React</a>									</span>
				<!-- end .post-category -->
				
				<span class="post-date">
					on <a href="http://jamesknelson.com/experience-react-16/" title="9:18 am" rel="bookmark"><time class="entry-date" datetime="2012-11-09T23:15:57+00:00"><?php echo date('Y/m/d', $blog['published_at']) ?></time></a>
				</span>
				<!-- end .post-date -->
				
				<span class="by-author"> by	<span class="author vcard">
						<a class="url fn n" href="http://jamesknelson.com/author/jamesknelson/" title="View all posts by James K Nelson" rel="author">W.F.H.P</a>
					</span>
					<!-- end .author -->
				</span>
				<!-- end .by-author -->
			</div>
            <div class="blog-content">
                <?php echo $blog['content_html'] ?>
            </div>
            <!-- Bottom navigation -->
            <nav class="nav-single row">
				<div class="nav-previous col-lg-6">
					<?php if ($prev): ?>
					<h4>PREVIOUS POST</h4><a href="/explorer/showBlog?id=<?php echo $prev['id'] ?>" rel="prev"><span class="meta-nav">←</span><?php echo $prev['title'] ?></a>
					<?php endif ?>
				</div>
				<div class="nav-next col-lg-6">
					<?php if ($next): ?>
					<h4>NEXT POST</h4><a href="/explorer/showBlog?id=<?php echo $next['id'] ?>" rel="next"><?php echo $next['title'] ?><span class="meta-nav">→</span></a>
					<?php endif ?>
				</div>
			</nav>
			<!-- Guest comments -->
			<div>
				<div id="disqus_thread"></div>
				<script>

					/**
					*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
					*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
					
					// var disqus_config = function () {
					// this.page.url = 'fwe';  // Replace PAGE_URL with your page's canonical URL variable
					// this.page.identifier = 'feaef'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					// };
					
					// (function() { // DON'T EDIT BELOW THIS LINE
					// var d = document, s = d.createElement('script');
					// s.src = 'https://user.disqus.com/embed.js';
					// s.setAttribute('data-timestamp', +new Date());
					// (d.head || d.body).appendChild(s);
					// })();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			</div>                     
        </div>
		<?php include __DIR__ . "/common/right-side.php" ?>
    </div>
</div>
<?php include __DIR__ . "/common/bottom.php" ?>