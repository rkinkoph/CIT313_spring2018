<?php

class HomeController extends Controller{

	public function index(){
		$feed = "http://rss.cnn.com/rss/cnn_topstories.rss";
		$rss = new RssDisplay($feed);

		$number = 8;
		$feed_data = $rss->getFeedItems($number);
		$this->set('numItems', $number);
		$this->set('feed_data', $feed_data);

		$channel_info = $rss->getChannelInfo();
		$this->set('channel_title', $channel_info['title']);
		$this->set('channel_link', $channel_info['link']);
		$this->set('channel_desc', $channel_info['desc']);


	}

}

?>
