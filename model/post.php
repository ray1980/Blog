<?php
/**
* Post Model
*
* @author happyoniens
* @author coeci
*
*/
class post{

  public $id;
  public $user;
  public $title;
  public $content;
  public $posted;

  function __construct($arr){
    $this->id = isset($arr['id'])?$arr['id']:null;
    $this->user = isset($arr['user'])?Flight::users()->getUserWithId($arr['user']):null;
    $this->title = $arr['title'];
    $this->content = $arr['content'];
    $this->posted = isset($arr['posted'])?$arr['posted']:null;
  }
  /**
  * Get a short Preview of the Postcontent
  * @return String First 100 Characters of Postcontent
  */
  public function getPreview(){
    return substr($this->content,0,100);
  }
  /**
  * Function to store a new Post
  */
  public function store(){
      $sql = "INSERT INTO post (user, title, content) VALUE ('".$this->user->id."','".$this->title."','".$this->content."')";
      $result = Flight::db()->query($sql);

      if($result != false){
          Flight::redirect("post/".Flight::db()->insert_id);
      }
  }
}
