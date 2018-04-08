<?php
class RssDisplay extends Model{

    protected $feed_url;
    protected $num_feed_items;

    // Constructor
    public function __construct($url){
      parent::__construct();

      $this->feed_url =$url;

    }

    public function getFeedItems($num_feed_items) {
      $items = simplexml_load_file($this->feed_url);
      return $items;
    }

    public function getChannelInfo() {

    }

}

?>
