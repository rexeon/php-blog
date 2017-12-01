
<!DOCTYPE html>
<html>
  <head>
    <title>博文编辑器</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.0.5/es5-shim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/lodash/2.4.1/lodash.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/3.2.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/highlight.js/9.1.0/styles/github.min.css">
    <script src="https://markdown-it.github.io/markdown-it.js"></script>
    <script src="https://twemoji.maxcdn.com/twemoji.min.js"></script>
    <link rel="stylesheet" href="https://markdown-it.github.io/index.css">
    <!-- <script src="https://markdown-it.github.io/index.js"></script> -->
    <script type="text/javascript" src="/static/js/index.js"></script>
    <!-- Ancient IE support - load shiv & kill broken highlighter--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script>window.hljs = null;</script>
    <![endif]-->
    <!-- GA counter-->
    <script>
      // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      
      // ga('create', 'UA-26895916-4', 'auto');
      // ga('require', 'displayfeatures');
      // ga('require', 'linkid', 'linkid.js');
      // ga('send', 'pageview');
      
    </script>
  </head>
  <body>
    <div class="container-fluid">
      <h1>
        博文编辑器
         <small>markdown格式</small>
      </h1>
      <div>
        <div class="form-group">
          <input type="text" value="<?php echo $post['title'] ?>" id="title" class="form-control" placeholder="在此键入文章标题" name="">
        </div>
      </div>
      <div class="form-inline demo-options">
        <div class="checkbox not-strict">
          <label title="enable html tags in source text" class="_tip">
            <input id="html" type="checkbox"> html
          </label>
        </div>
        <div class="checkbox not-strict">
          <label title="produce xtml output (add / to single tags (&lt;br /&gt; instead of &lt;br&gt;)" class="_tip">
            <input id="xhtmlOut" type="checkbox"> xhtmlOut
          </label>
        </div>
        <div class="checkbox not-strict">
          <label title="newlines in paragraphs are rendered as &lt;br&gt;" class="_tip">
            <input id="breaks" type="checkbox"> breaks
          </label>
        </div>
        <div class="checkbox not-strict">
          <label title="autoconvert link-like texts to links" class="_tip">
            <input id="linkify" type="checkbox"> linkify
          </label>
        </div>
        <div class="checkbox not-strict">
          <label title="do typographyc replacements, (c) -&gt; © and so on" class="_tip">
            <input id="typographer" type="checkbox"> typographer
          </label>
        </div>
        <div class="checkbox not-strict">
          <label title="enable output highlight for fenced blocks" class="_tip">
            <input id="_highlight" type="checkbox"> highlight
          </label>
        </div>
        <div class="form-group">
          <select class="form-control" id="category">
            <?php echo Categories($post['category']) ?>
          </select>
        </div>
        <div class="form-group not-strict">
          <input id="tags" type="text" placeholder="输入逗号间隔的标签" title="css class language prefix for fenced code blocks" class="form-control _tip">
        </div>
        <!-- <div class="checkbox">
          <label title="force strict CommonMark mode - output will be equal to reference parser" class="_tip">
            <input id="_strict" type="checkbox"> CommonMark strict
          </label>
        </div> -->
        <div class="form-group">
          <button id="btn-submit" class="btn btn-primary">把文章标题和内容一起提交到服务器</button>
        </div>
      </div>

    </div>
    <div class="container-fluid full-height">
      <div class="row full-height">
        <div class="col-xs-6 full-height">
          <div class="demo-control"><a href="#" class="source-clear">clear</a><a id="permalink" href="./" title="Share this snippet as link"><strong>permalink</strong></a></div>
          <textarea class="source full-height"><?php echo $post['content_markdown'] ?></textarea>
        </div>
        <section class="col-xs-6 full-height">
          <div class="demo-control"><a href="#" data-result-as="html">html</a><a href="#" data-result-as="src">source</a><a href="#" data-result-as="debug">debug</a></div>
          <div class="result-html full-height"></div>
          <pre class="hljs result-src full-height"><code class="result-src-content full-height"></code></pre>
          <pre class="hljs result-debug full-height"><code class="result-debug-content full-height"></code></pre>
        </section>
      </div>
    </div>
  </body>
</html>