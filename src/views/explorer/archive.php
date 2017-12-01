<?php include __DIR__ . "/common/top.php" ?>
<?php include __DIR__ . "/common/blog-header.php" ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="list-header">
				<h1 class="page-title">
					Date Archives					
					<span class="on">→</span>
					<span><?php echo $year ?>年 <?php echo $month ?>月
					</span>
				</h1>
			</div>
			<?php foreach($posts as $post): ?>
				<div class="blog-title">
	                <h1><a href="/explorer/showBlog?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a></h1>
	            </div>
	            <div class="entry-meta">
					<span class="post-category">
						posted in <a href="http://jamesknelson.com/category/react/" rel="category tag">React</a>									</span>
					<!-- end .post-category -->
					
					<span class="post-date">
						on <a href="http://jamesknelson.com/experience-react-16/" title="9:18 am" rel="bookmark"><time class="entry-date" datetime="2012-11-09T23:15:57+00:00"><?php echo date('Y/m/d', $post['published_at']) ?></time></a>
					</span>
					<!-- end .post-date -->
					
					<span class="by-author"> by	<span class="author vcard">
							<a class="url fn n" href="http://jamesknelson.com/author/jamesknelson/" title="View all posts by James K Nelson" rel="author">Jason</a>
						</span>
						<!-- end .author -->
					</span>
					<!-- end .by-author -->
				</div>
	            <div class="blog-content">
	                <?php echo truncate($post['content_html'], 300) ?>
	            </div>
	            <p style="margin-bottom: 70px;"> <a href="/explorer/showBlog?id=<?php echo $post['id'] ?>" class="more-link">Continue reading <span class="meta-nav">→</span></a></p>
			<?php endforeach ?>
		</div>
		<?php include __DIR__ . "/common/right-side.php" ?>
	</div>
</div>

<?php include __DIR__ . "/common/bottom.php" ?>