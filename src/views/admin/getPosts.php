<!DOCTYPE html>
<html>
<head>
	<title>后台管理</title>
	<link rel="stylesheet" type="text/css" href="/static/css/all.css">
	<link class="codestyle" rel="stylesheet" href="https://highlightjs.org/static/demo/styles/atom-one-light.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<table class="table table-stripped">
			<thead>
				<th>ID</th>
				<th>Title</th>
				<th>PUBLISHED AT</th>
				<th>OPERATIONS</th>
			</thead>
			<tbody>
			<?php foreach ($posts as $post): ?>
				<tr class="blog-row">
					<td><?php echo $post['id'] ?></td>
					<td><a href="/explorer/showBlog?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a></td>
					<td><?php echo date('Y-m-d H:i:s', $post['published_at']) ?></td>
					<td><a href="/admin/editPost?id=<?php echo $post['id'] ?>">编辑</a>|<a href="/admin/deletePost?id=<?php echo $post['id'] ?>">删除</a></td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>
</html>
<script type="text/javascript" src="https://cdn.bootcss.com/zepto/1.2.0/zepto.min.js"></script>

