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
		 $this->set('comments', $comments);
   	}

	public function addComment() {
		$this->commentsObject = new Comments();
		$data = array('commentID'=>$_POST['commentID'],'uID'=>$_POST['uID'],'commentText'=>$_POST['commentText'],'date'=>$_POST['date'], 'postID'=>$_POST['postID']);
		//$this->getCategories();

		$result = $this->commentsObject->addComment($data);
		$this->set('message', $result);
	}

	public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
	}

}

?>
