<?php
namespace controllers;

use models\BlogPosts;

class ExplorerController extends BaseController {
	public function indexAction() {
		$page = 1;
		$this->view->page = $page;
		$this->view->nextPage = $page + 1;
		$this->view->prevPage = $page - 1;
		$this->view->posts = BlogPosts::getBlogList($page);

		// right side
		$this->view->recentPosts = BlogPosts::getRecentPosts();
		$this->view->archive = BlogPosts::getArchiveMonths();
	}

	public function showBlogAction() {
		$id = $_GET['id'];
		$this->view->blog = BlogPosts::getPostById($id);
		$this->view->prev = BlogPosts::getPrevPost($id);
		$this->view->next = BlogPosts::getNextPost($id);

		// right side
		$this->view->recentPosts = BlogPosts::getRecentPosts();
		$this->view->archive = BlogPosts::getArchiveMonths();
	}

	public function archiveAction() {
		$params = explode('/', trim($_GET['_url'], '/'));
		$year = $params[2];
		$month = $params[3];
		$this->view->year = $year;
		$this->view->month = $month;
		$this->view->posts = BlogPosts::getPostsByMonth($year, $month);

		// right side
		$this->view->recentPosts = BlogPosts::getRecentPosts();
		$this->view->archive = BlogPosts::getArchiveMonths();
	}

	public function listPostsAction() {
		$params = explode('/', trim($_GET['_url'], '/'));
		$page = $params[2];
		$posts =  BlogPosts::getBlogList($page);
		$this->view->page = $page;
		if (empty($posts))
			$this->view->nextPage = null;
		else
			$this->view->nextPage = $page + 1;
		$this->view->prevPage = $page - 1;
		$this->view->posts = $posts;

		// right side
		$this->view->recentPosts = BlogPosts::getRecentPosts();
		$this->view->archive = BlogPosts::getArchiveMonths();
	}
}