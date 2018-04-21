<?php

class BlogController extends Controller{

	public $postObject;
	public $commentsObject;

   	public function post($pID){
     $this->postObject = new Post();
		 $post = $this->postObject->getPost($pID);
	   $this->set('post',$post);

		 $this->commentsObject = new Comments();
		 $comments = $this->commentsObject->getComments($pID);
		 $this->set('results', $results);
   	}

	public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
	}

}

?>
