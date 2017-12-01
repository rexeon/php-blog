   <!-- Right side lists -->
    <div id="right-side" class="col-md-4">
    	<div id="close-side-bar">
    		<i class="fa fa-times" aria-hidden="true"></i>
    	</div>
        <div style="padding-left: 20px;">
            <div class="widget-area span5" role="complementary">
                <aside id="text-2" class="widget">
                    <div class="textwidget"><img src="https://reactarmory.com/james.jpg"
                                                 style="width: 100px; height: 100px; border-radius: 50%;">
                        <h2>W.F.H.P</h2>
                        <ul>
                            <li><strong>Wants to</strong> help people create amazing things.</li>
                            <li><strong>Has used</strong> JavaScript for more than half his life.</li>
                            <li><strong>Building</strong> 
                            	<a href="https://reactarmory.com/"
                                                             style="color: #8233ff;">React Armory</a>, the simplest
                                way to learn React.
                            </li>
                        </ul>
                        <!-- Place this tag where you want the button to render. -->
                        <a class="github-button" href="https://github.com/jamesknelson"
                           aria-label="Follow @jamesknelson on GitHub">Follow @jamesknelson</a>
                        <!-- Place this tag right after the last button or just before your close body tag. -->
                        <script async="" defer="" id="github-bjs"
                                src="https://buttons.github.io/buttons.js"></script>
                    </div>
                </aside>
                <aside id="text-3" class="widget widget_text">
                    <h4 class="widget-title">推荐阅读</h4>
                    <div class="textwidget">
                        <ul>
                            <li><a href="http://jamesknelson.com/es6-the-bits-youll-actually-use/">ES6 - The Bits
                                    You’ll Actually Use</a></li>
                            <li><a href="http://jamesknelson.com/learn-raw-react-no-jsx-flux-es6-webpack/">Learn Raw
                                    React — no JSX, Flux, ES6, Webpack…</a></li>
                            <li>
                                <a href="http://jamesknelson.com/grokking-es6-promises-the-four-functions-you-need-to-avoid-callback-hell/">Introduction
                                    to ES6 Promises</a></li>
                        </ul>
                    </div>
                </aside>
                <aside id="recent-posts-2" class="widget widget_recent_entries">
                	<h4 class="widget-title">最新文章</h4>
                    <ul>
                	<?php foreach($recentPosts as $recentPost): ?>
                        <li>
                            <a href="/explorer/showBlog?id=<?php echo $recentPost['id'] ?>"><?php echo $recentPost['title'] ?></a>
                        </li>
                    <?php endforeach ?>
                    </ul>
                </aside>
                <aside id="archives-2" class="widget widget_archive">
                	<h4 class="widget-title">博文归档</h4>
                    <ul>
                    	<?php foreach($archive as $arch): ?>
                        	<li><a href="/explorer/archive/<?php echo $arch['y'] ?>/<?php echo ($arch['m']) ?>/"><?php echo $arch['y'].'年'.$arch['m'].'月' ?></a></li>
                		<?php endforeach ?>
                    </ul>
                </aside>
            </div>
        </div>
    </div>