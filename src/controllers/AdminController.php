<?php 
namespace controllers;

use App;
use models\BlogPosts;

class AdminController extends BaseController {
	public function indexAction() {
		redirectTo('/admin/markdown');
	}

	public function markdownAction() {

	}

	public function blogPostAction() {
		if (isset($_SESSION['edit_post_id'])) {
			$id = $_SESSION['edit_post_id'];
			unset($_SESSION['edit_post_id']);
			BlogPosts::updatePost($id, $_POST);
			return ['url' => '/explorer/showBlog?id='.$id];
		} else {
			$id = BlogPosts::createPost($_POST);
			return ['url' => '/explorer/showBlog?id='.$id];
		}
	}

	public function getPostsAction() {
		$sql = "select * from blog_posts";
		$sth = App::$dbh->prepare($sql);
		$sth->execute();
		$this->view->posts = $sth->fetchAll();
	}

	public function editPostAction() {
		$id = intval($_GET['id']);
		$_SESSION['edit_post_id'] = $id;
		$this->view->post = BlogPosts::getPostById($id);
	}

	public function deletePostAction() {
		$id = intval($_GET['id']);
		BlogPosts::deletePost($id);
		redirectTo('/admin/getPosts');
	}
}