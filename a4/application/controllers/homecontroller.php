<?php

class HomeController extends Controller{

	public function index(){
		$feed = "http://fox59.com/feed";
		$rss = new RssDisplay($feed);

		$feed_data = $rss->getFeedItems();

		var_dump($feed_data);

	}

}

?>
