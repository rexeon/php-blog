<?php 

namespace models;

use App;

class BlogPosts {
	public static function getPostById($id) {
		$id = intval($id);
		$sql = "select * from blog_posts where id=$id";
		$sth = App::$dbh->prepare($sql);
		$sth->execute();
		return $sth->fetch();
	}

	public static function createPost($data) {
		extract($data);
		$sql = "insert into blog_posts(title, content_markdown, content_html, category, published_at, updated_at) values(:title, :markdown, :html, :category, ".TIMESTAMP.", ".TIMESTAMP.")";
		$sth = App::$dbh->prepare($sql);
		$sth->execute([
			':title' => $title,
			':markdown' => $markdown,
			':category' => $category,
			':html' => $html
		]);
		return App::$dbh->lastInsertId();
	}

	public static function updatePost($id, $data) {
		extract($data);
		$sql = "update blog_posts set title = :title, content_markdown = :markdown, content_html = :html, category = :category, updated_at = ".TIMESTAMP." where id=$id";
		$sth = App::$dbh->prepare($sql);
		$sth->execute([
			':title' => $title,
			':markdown' => $markdown,
			':category' => $category,
			':html' => $html
		]);
	}

	public static function getTotalRows() {
		$sql = "select count(*) as cnt from blog_posts";
		$sth = App::$dbh->prepare($sql);
		$sth->execute();
		$row = $sth->fetch();
		return $row['cnt'];
	}

	public static function getBlogList($page) {
		$total = self::getTotalRows();
		$pages = ceil($total/10);
		$offset = ($page - 1)*10;
		$sql = "select * from blog_posts order by published_at desc limit $offset, 10";
		$sth = App::$dbh->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
	}

	public static function getArchiveMonths() {
		$sql = 'SELECT
		  Year(FROM_UNIXTIME(`published_at`)) as y,
		  Month(FROM_UNIXTIME(`published_at`)) as m,
		  Count(*) As Total_Rows
		FROM blog_posts
		GROUP BY Year(FROM_UNIXTIME(`published_at`)), Month(FROM_UNIXTIME(`published_at`))';
	
		$sth = App::$dbh->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
	}

	public static function getPrevPost($id) {
		$sql = "select * from blog_posts where id = (select max(id) from blog_posts where id < $id)";
		$sth = App::$dbh->prepare($sql);
		$sth->execute();
		return $sth->fetch();
	}

	public static function getNextPost($id) {
		$sql = "select * from blog_posts where id = (select min(id) from blog_posts where id > $id)";
		$sth = App::$dbh->prepare($sql);
		$sth->execute();
		return $sth->fetch();
	}

	public static function getRecentPosts() {
		$sql = "select * from blog_posts order by published_at desc limit 0, 10";
		$sth = App::$dbh->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
	}

	public static function deletePost($id) {
		$sql = "delete from blog_posts where id=".$id;
		App::$dbh->query($sql);
	}

	public static function getPostsByMonth($y, $m) {
		$sql = "select * from blog_posts where Year(FROM_UNIXTIME(`published_at`)) = $y and Month(FROM_UNIXTIME(`published_at`)) = $m order by published_at desc";
		$sth = App::$dbh->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
	}
}

