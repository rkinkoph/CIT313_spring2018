<?php

class HomeController extends Controller{

	public function index(){
		$feed = "http://webhose.io/filterWebContent?token=c9547238-777b-4233-9a20-9f947b03497d&format=xml&sort=crawled&q=site%3Acnn.com";
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
