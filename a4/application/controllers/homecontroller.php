<?php

class HomeController extends Controller{

	public function index(){
		$feed = "http://rss.cnn.com/rss/cnn_topstories.rss";
		$rss = new RssDisplay($feed);

		$number = 8;
		$feed_data = $rss->getFeedItems($number);
		$this->set('numItems', $numofitems);
		$this->set('feed_data', $feed_data);

		$channel_info = $rss->getChannelInfo();
		$this->set('channel_title', $channelinfo['title']);
		$this->set('channel_link', $channelinfo['link']);
		$this->set('channel_desc', $channelinfo['desc']);


	}

}

?>
