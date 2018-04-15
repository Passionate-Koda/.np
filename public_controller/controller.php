<?php
// define("DB_PATH", dirname(dirname(__FILE__)));
// include DB_PATH."/models/model.php";


function decodeDate($date){
  $split = explode('-',$date);
  $month = $split[1];
  $day = $split[2];
  $year = $split[0];

  if($month == 1 ){
    $month = "January";
  }
  if($month == 2 ){
    $month = "February";
  }
  if($month == 3 ){
    $month = "March";
  }
  if($month == 4){
    $month = "April";
  }
  if($month == 5){
    $month = "May";
  }
  if($month == 6 ){
    $month = "June";
  }
  if($month == 7 ){
    $month = "July";
  }
  if($month == 8 ){
    $month = "August";
  }
  if($month == 9 ){
    $month = "September";
  }
  if($month == 10 ){
    $month = "October";
  }
  if($month == 11 ){
    $month = "November";
  }
  if($month == 12 ){
    $month = "December";
  }

  $newDate = $month.' '.$day.', '.$year;

  return $newDate;
}

// function previewBody($string, $count){
//   $original_string = $string;
//   $words = explode(' ', $original_string);
//   if(count($words) > $count){
//     $words = array_slice($words, 0, $count);
//     $string = implode(' ', $words);
//   }
//   return $string;
// }

function getPostInfo($dbconn,$tb,$id){
  $stmt =  $dbconn->prepare("SELECT * FROM $tb WHERE hash_id=:idd");
  $stmt->bindParam(":idd", $id);
  $stmt->execute();
  $row= $stmt->fetch(PDO::FETCH_BOTH);
  return $row;
}


function getPreviewInsightsPost($dbconn){
  $vis = "Show";
  $stmt = $dbconn->prepare("SELECT * FROM insight WHERE visibility=:sh ORDER BY id DESC LIMIT 5");
  $stmt->bindParam("sh", $vis);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $bd = previewBody($body,30);
    $NDate = decodeDate($date_created);
    echo '<div class="item">
    <div class="item-header">
    <a href="insight?id='.$hash_id.'"><div style="width:200px; height:150px; overflow:hidden"><img src="'.$image_1.'" alt="'.$title.'" /></div></a>
    </div>
    <div class="item-content">
    <h2><a href="insight?id='.$hash_id.'">'.$title.'</a></h2>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$NDate.'</span>
    </span>
    <a href="" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i>0</a>
    <p>'.$bd.'...</p>
    </div>
    </div>';
  }
}
function getPreviewInsight($dbconn){
  $vis = "Show";
  $stmt = $dbconn->prepare("SELECT * FROM insight WHERE visibility=:sh ORDER BY id DESC LIMIT 5" );
  $stmt->bindParam("sh", $vis);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $NDate = decodeDate($date_created);
    echo '<div class="item">
    <a href="insight?id='.$hash_id.'" class="main-slider-owl-title">'.$title.'</a>
    <a href="insight?id='.$hash_id.'" class="main-slider-owl-calendar"><strong><i class="material-icons">access_time</i>'.$NDate.'</strong></a><div style="width:100%; height:80vh; overflow:hidden"><img src="'.$image_1.'" alt="" /></div>

    </div>';
  }
}
function getPreviewEvent($dbconn){

  $stmt = $dbconn->prepare("SELECT * FROM event ORDER BY id DESC LIMIT 4" );
  $stmt->bindParam("sh", $vis);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($start_date);
    $EDate = decodeDate($end_date);
    echo '<div class="item">
    <div style="margin-left:10px" class="item-content">
    <h4><a href="event?id='.$hash_id.'">'.$name.'</a> </h4><span>at '.$venue.'</span>
    <p>'.$SDate.' - '.$EDate.'</p>
    </div>
    </div>';
  }
  echo'<span class="item-meta">
  <a href="event" class="item-meta-item meta-button">View More Events <i class="fa fa-caret-right"></i></a>
  </span>';
}

function getArticlePreview($dbconn){
  $vis = "Show";
  $stmt = $dbconn->prepare("SELECT * FROM blog WHERE visibility=:sh ORDER BY id DESC LIMIT 4" );
  $stmt->bindParam("sh", $vis);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);

    echo '  <div class="item">
    <div class="item-header">
    <a href="articles?id='.$hash_id.'" class="img-read-later-button rm-btn-small">Read</a>
    <a href="articles?id='.$hash_id.'"><img src="'.$image_1.'" alt="'.$title.'" /></a>
    </div>
    <div class="item-content">
    <h4><a href="articles?id='.$hash_id.'">'.$title.'</a></h4>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
    </span>
    </div>
    </div>';
  }
  echo'<span class="item-meta">
  <a href="articles" class="item-meta-item meta-button">View More Articles <i class="fa fa-caret-right"></i></a>
  </span>';

}
function getReportPreview($dbconn){
  $vis = "Show";
  $stmt = $dbconn->prepare("SELECT * FROM report WHERE visibility=:sh ORDER BY id DESC LIMIT 4" );
  $stmt->bindParam("sh", $vis);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);

    echo '  <div class="item">
    <div style="margin-left:10px" class="item-content">
    <h4><a href="'.$link.'">'.$title.'</a></h4>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
    </span>
    </div>
    </div>';
  }
  echo'<span class="item-meta">
  <a href="report" class="item-meta-item meta-button">View More More <i class="fa fa-caret-right"></i></a>
  </span>';

}




function getPaginatedInsight($dbconn,$fs,$pp){
  $vis = "show";
  $stmt = $dbconn->prepare("SELECT * FROM insight WHERE visibility=:sh ORDER BY id DESC LIMIT $fs,$pp");
  $stmt->bindParam(":sh", $vis);
  // $stmt->bindParam(":bk", $pp);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);
    $bd = previewBody($body,33);

    echo '<div class="item">
    <div class="item-header">
    <a href="insight?id='.$hash_id.'" class="img-read-later-button">Read</a>
    <a href="insight?id='.$hash_id.'"><div style="width:200px; height:150px; overflow:hidden"><img   src="'.$image_1.'" alt="'.$title.'" /></div></a>
    </div>
    <div class="item-content">
    <h2><a href="insight?id='.$hash_id.'">'.$title.'</a></h2>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
    <a href="insight?id='.$hash_id.'" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i><fb:comments-count href="http://news.mckodev.com.ng/insight?id='.$hash_id.'"></fb:comments-count></a>
    </span>
    <p>'.$bd.'...</p>
    </div>
    </div>';
  }
}

function getEntityCategory($dbconn,$tb,$nm,$gid){
  $stmt = $dbconn->prepare("SELECT $nm FROM $tb WHERE hash_id=:gid");
  $stmt->bindParam(":gid", $gid);
  $stmt->execute();
  $nm = $stmt->fetch(PDO::FETCH_BOTH);
  return $nm;
}


function getPaginatedNews($dbconn,$fs,$pp){
  $vis = "show";
  $stmt = $dbconn->prepare("SELECT * FROM news WHERE visibility=:sh ORDER BY id DESC LIMIT $fs,$pp");
  $stmt->bindParam(":sh", $vis);
  // $stmt->bindParam(":bk", $pp);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);
    $bd = previewBody($body,33);

    echo '<div class="item">
    <div class="item-header">
    <a href="news?id='.$hash_id.'" class="img-read-later-button">Read</a>
    <a href="news?id='.$hash_id.'"><div style="width:200px; height:150px; overflow:hidden"><img   src="'.$image_1.'" alt="'.$headline.'" /></div></a>
    </div>
    <div class="item-content">
    <h2><a href="news?id='.$hash_id.'">'.$headline.'</a></h2>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
    <a href="insight?id='.$hash_id.'" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i><fb:comments-count href="http://news.mckodev.com.ng/insight?id='.$hash_id.'"></fb:comments-count></a>
    </span>
    <p>'.$bd.'...</p>
    </div>
    </div>';
  }
}
function getPaginatedCampusNews($dbconn,$fs,$pp){
  $vis = "show";
  $stmt = $dbconn->prepare("SELECT * FROM campus_news WHERE visibility=:sh ORDER BY id DESC LIMIT $fs,$pp");
  $stmt->bindParam(":sh", $vis);
  // $stmt->bindParam(":bk", $pp);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);
    $bd = previewBody($body,33);

    echo '<div class="item">
    <div class="item-header">
    <a href="campus_news?id='.$hash_id.'" class="img-read-later-button">Read</a>
    <a href="campus_news?id='.$hash_id.'"><div style="width:200px; height:150px; overflow:hidden"><img   src="'.$image_1.'" alt="'.$headline.'" /></div></a>
    </div>
    <div class="item-content">
    <h2><a href="campus_news?id='.$hash_id.'">'.$headline.'</a></h2>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
    <a href="insight?id='.$hash_id.'" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i><fb:comments-count href="http://news.mckodev.com.ng/insight?id='.$hash_id.'"></fb:comments-count></a>
    </span>
    <p>'.$bd.'...</p>
    </div>
    </div>';
  }
}



function getCatPaginatedInsight($dbconn,$fs,$pp,$cat){
  $vis = "show";
  $stmt = $dbconn->prepare("SELECT * FROM insight WHERE visibility=:sh AND category=:cat ORDER BY id DESC LIMIT $fs,$pp");
  $stmt->bindParam(":sh", $vis);
  $stmt->bindParam(":cat", $cat);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);
    $bd = previewBody($body,33);

    echo '<div class="item">
    <div class="item-header">
    <a href="insight?id='.$hash_id.'" class="img-read-later-button">Read</a>
    <a href="insight?id='.$hash_id.'"><div style="width:200px; height:150px; overflow:hidden"><img   src="'.$image_1.'" alt="'.$title.'" /></div></a>
    </div>
    <div class="item-content">
    <h2><a href="insight?id='.$hash_id.'">'.$title.'</a></h2>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
    <a href="insight?id='.$hash_id.'" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i><fb:comments-count href="http://news.mckodev.com.ng/insight?id='.$hash_id.'"></fb:comments-count></a>
    </span>
    <p>'.$bd.'...</p>
    </div>
    </div>';
  }
}
function getCatPaginatedNews($dbconn,$fs,$pp,$cat){
  $vis = "show";
  $stmt = $dbconn->prepare("SELECT * FROM news WHERE visibility=:sh AND category=:cat ORDER BY id DESC LIMIT $fs,$pp");
  $stmt->bindParam(":sh", $vis);
  $stmt->bindParam(":cat", $cat);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);
    $bd = previewBody($body,33);

    echo '<div class="item">
    <div class="item-header">
    <a href="news?id='.$hash_id.'" class="img-read-later-button">Read</a>
    <a href="news?id='.$hash_id.'"><div style="width:200px; height:150px; overflow:hidden"><img   src="'.$image_1.'" alt="'.$headline.'" /></div></a>
    </div>
    <div class="item-content">
    <h2><a href="news?id='.$hash_id.'">'.$headline.'</a></h2>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
    <a href="insight?id='.$hash_id.'" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i><fb:comments-count href="http://news.mckodev.com.ng/insight?id='.$hash_id.'"></fb:comments-count></a>
    </span>
    <p>'.$bd.'...</p>
    </div>
    </div>';
  }
}

function getCatPaginatedCampusNews($dbconn,$fs,$pp,$cat){
  $vis = "show";
  $stmt = $dbconn->prepare("SELECT * FROM campus_news WHERE visibility=:sh AND campus=:cat ORDER BY id DESC LIMIT $fs,$pp");
  $stmt->bindParam(":sh", $vis);
  $stmt->bindParam(":cat", $cat);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);
    $bd = previewBody($body,33);

    echo '<div class="item">
    <div class="item-header">
    <a href="campus_news?id='.$hash_id.'" class="img-read-later-button">Read</a>
    <a href="campus_news?id='.$hash_id.'"><div style="width:200px; height:150px; overflow:hidden"><img   src="'.$image_1.'" alt="'.$headline.'" /></div></a>
    </div>
    <div class="item-content">
    <h2><a href="campus_news?id='.$hash_id.'">'.$headline.'</a></h2>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
    <a href="insight?id='.$hash_id.'" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i><fb:comments-count href="http://news.mckodev.com.ng/insight?id='.$hash_id.'"></fb:comments-count></a>
    </span>
    <p>'.$bd.'...</p>
    </div>
    </div>';
  }
}



function getPaginatedArticle($dbconn,$fs,$pp){
  $stmt = $dbconn->prepare("SELECT * FROM blog ORDER BY id DESC LIMIT $fs,$pp");
  // $stmt->bindParam(":ff", $fs);
  // $stmt->bindParam(":bk", $pp);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);
    $bd = previewBody($body,3);

    echo '<div class="item">
    <div class="item-header">
    <a href="article?id='.$hash_id.'" class="img-read-later-button">Read</a>
    <a href="article?id='.$hash_id.'"><div style="width:200px; height:150px; overflow:hidden"><img   src="'.$image_1.'" alt="'.$title.'" /></div></a>
    </div>
    <div class="item-content">
    <h2><a href="article?id='.$hash_id.'">'.$title.'</a></h2>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
    <a href="insight?id='.$hash_id.'" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i><fb:comments-count href="http://news.mckodev.com.ng/article?id='.$hash_id.'"></fb:comments-count></a>
    </span>
    <p>'.$bd.'...</p>
    </div>
    </div>';
  }
}
function getPaginatedAfrica($dbconn,$fs,$pp,$ct){
  $stmt = $dbconn->prepare("SELECT * FROM news WHERE category =:cat ORDER BY id DESC LIMIT $fs,$pp");
  $stmt->bindParam(":cat", $ct);
  // $stmt->bindParam(":bk", $pp);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);
    $bd = previewBody($body,3);

    echo '<div class="item">
    <div class="item-header">
    <a href="'.$link.'" class="img-read-later-button">Read</a>
    <a href="'.$link.'"><div style="width:200px; height:150px; overflow:hidden"><img src="'.$image_1.'" alt="'.$headline.'" /></div></a>
    </div>
    <div class="item-content">
    <h2><a href="'.$link.'">'.$headline.'</a></h2>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
    </span>
    <p>'.$body.'</p>
    </div>
    </div>';
  }
}
function getPaginatedReport($dbconn,$fs,$pp){
  $stmt = $dbconn->prepare("SELECT * FROM report ORDER BY id DESC LIMIT $fs,$pp");
  // $stmt->bindParam(":ff", $fs);
  // $stmt->bindParam(":bk", $pp);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);
    $bd = previewBody($body,3);

    echo '<div class="item">
    <div class="item-content" style="margin-left:0px">
    <h2><a href="'.$link.'">'.$title.'</a></h2>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>

    </span>
    <p>'.$body.'</p>
    <h2><a href="'.$link.'">Download</a></h2>
    </div>
    </div>';
  }
}
function getPaginatedEvent($dbconn,$fs,$pp){
  $stmt = $dbconn->prepare("SELECT * FROM event ORDER BY id DESC LIMIT $fs,$pp");
  // $stmt->bindParam(":ff", $fs);
  // $stmt->bindParam(":bk", $pp);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($start_date);
    $EDate = decodeDate($end_date);
    $bd = previewBody($about,22);

    echo '<div class="item">
    <div class="item-content" style="margin-left:0px">
    <h2><a href="event?id='.$hash_id.'">'.$name.'</a></h2>
    <span class="item-meta">
    <span class="item-meta-item">Start Date:<i class="material-icons">access_time</i>'.$SDate.'</span>
    <span class="item-meta-item">End Date:<i class="material-icons">access_time</i>'.$SDate.'</span>
    <span class="item-meta-item">Venue:<i class="material-icons">location_on</i>'.$venue.'</span>
    </span>
    <p>'.$bd.'..</p>

    </div>
    </div>';
  }
}
function getPaginatedGrant($dbconn,$fs,$pp){
  $vis = "Show";
  $stmt = $dbconn->prepare("SELECT * FROM grants WHERE visibility=:vs ORDER BY id DESC LIMIT $fs,$pp");

  $stmt->bindParam(":vs", $vis);
  // $stmt->bindParam(":ff", $fs);
  // $stmt->bindParam(":bk", $pp);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);
    $bd = previewBody($body,33);

    echo '<div class="item">
    <div class="item-content" style="margin-left:0px">
    <h2><a href="'.$link.'">'.$title.'</a></h2>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
    </span>
    <p>'.$bd.'</p>
    </div>
    </div>';
  }
}

function fetchCampusLink($dbconn,$categ,$tb){
  $active = 1;
  $stmt = $dbconn->prepare("SELECT * FROM campus WHERE $tb=:ac ORDER BY campus_name ASC");
  $stmt->bindParam(":ac",$active);
  $stmt->execute();
    echo '<li><a href="'.$categ.'">General</a></li>';
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    echo '<li><a href="'.$categ.'?c='.$hash_id.'">'.$campus_name.'</a></li>';

  }

}
function fetchFeatureLink($dbconn,$categ){

  $stmt = $dbconn->prepare("SELECT * FROM package_name ORDER BY package_name ASC");

  $stmt->execute();

  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    echo '<li><a href="'.$categ.'?c='.$hash_id.'">'.$package_name.'</a></li>';
  }

}

function fetchNewsLink($dbconn,$categ){

  $stmt = $dbconn->prepare("SELECT * FROM news_category ORDER BY news_category ASC");

  $stmt->execute();

  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    echo '<li><a href="'.$categ.'?c='.$hash_id.'">'.$news_category.'</a></li>';
  }

}





function getSearchResult($dbconn,$tb,$key,$fs,$pp){
  $stmt = $dbconn->prepare("SELECT * FROM $tb WHERE title LIKE :key OR body LIKE :key ORDER BY id DESC LIMIT $fs,$pp");
  $bindKey = "%".$key."%";
  $stmt->bindParam(":key",$bindKey);
  $stmt->execute();
  if($stmt->rowCount() > 0){
    while($row= $stmt->fetch(PDO::FETCH_BOTH)){
      extract($row);
      $SDate = decodeDate($date_created);
      echo '<div class="item">
      <div class="item-content" style="margin-left:0px">
      <h2><a href="'.$link.'">'.$title.'</a></h2>
      <span class="item-meta">
      <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
      </span>
      <p>'.$body.'</p>
      </div>
      </div>';

    }
  }else{
    echo '<div class="composs-comments">
    <div class="comment-list">
    <div class="comments-big-message">
    <i class="material-icons">search</i>
    <strong>No Result</strong>
    <p>Try other search keywords</p>
    </div>
    </div>
    </div>';
  }
}


function getSearchResultCount($dbconn,$tb,$key,$fs,$pp){
  $stmt = $dbconn->prepare("SELECT * FROM $tb WHERE title LIKE :key OR body LIKE :key ORDER BY id DESC LIMIT $fs,$pp");
  $bindKey = "%".$key."%";
  $stmt->bindParam(":key",$bindKey);
  $stmt->execute();
  $cnt = $stmt->rowCount();
  return $cnt;
}




function getPaginatedTraining($dbconn,$fs,$pp){
  $vis = "Show";
  $stmt = $dbconn->prepare("SELECT * FROM training WHERE visibility=:vs ORDER BY id DESC LIMIT $fs,$pp");

  $stmt->bindParam(":vs", $vis);
  // $stmt->bindParam(":ff", $fs);
  // $stmt->bindParam(":bk", $pp);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);
    $bd = previewBody($body,3);

    echo '<div class="item">
    <div class="item-content" style="margin-left:0px">
    <h2><a href="'.$link.'">'.$title.'</a></h2>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>

    </span>
    <p>'.$body.'</p>
    </div>
    </div>';
  }
}


function doUserRegister($dbconn, $input){
  $rnd = rand(0000000000,9999999999);
  $split = $_POST['firstname'];
  $id = $rnd.$split;
  $hash_id = str_shuffle($id);

  $hash = password_hash($input['pword'], PASSWORD_BCRYPT);
  #insert data
  $stmt = $dbconn->prepare("INSERT INTO user(firstname,lastname,email,hash,hash_id,time_created,date_created) VALUES(:fn, :ln, :e, :h,:hid,NOW(),NOW())");

  #bind params...
  $data = [ ':fn' => $input['firstname'],
  ':ln' => $input['lastname'],
  ':e' => $input['email'],
  ':h' => $hash,
  ':hid' => $hash_id
];

$stmt->execute($data);
$verlink = "https://mysite.com/u_verify?vcid=$hash_id";

$suc = 'Registration Successful';
$message = preg_replace('/\s+/', '_', $suc);
header("Location:userRegistration?success=$message");
}



function userLogin($dbconn, $input){
  $stmt = $dbconn->prepare("SELECT * FROM user WHERE email = :e ");

  $stmt ->bindParam(":e", $input['email']);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_BOTH);
  if($stmt->rowCount() !=1 || !password_verify($input['pword'], $row['hash'])){
    $suc = 'Invalid Email or Password';
    $message = preg_replace('/\s+/', '_', $suc);
    header("Location:userLogin?err=$message");
  }else{
    $verification = 1;
    $statement = $dbconn->prepare("SELECT * FROM user WHERE email = :e AND verification=:ver ");
    $statement ->bindParam(":e", $input['email']);
    $statement ->bindParam(":ver", $verification);
    $statement->execute();

    if($statement->rowCount() !=1){
      $state = $dbconn->prepare("SELECT * FROM user WHERE email = :e ");
      $state ->bindParam(":e", $input['email']);
      $state->execute();
      $row = $state->fetch(PDO::FETCH_BOTH);
      extract($row);
      $suc = 'Dear '.ucwords($firstname).', Your Account has not been Verified';
      $message = preg_replace('/\s+/', '_', $suc);
      header("Location:userLogin?wn=$message");
    }else{
      extract($row);
      $_SESSION['user_id'] = $hash_id;
      setUserLogin($dbconn,$hash_id);
      if(isset($_GET['rd'])){
        header("Location:".$_GET['rd']);
      }else{
        header("Location:index");
      }
    }
  }
}



function setUserLogin($dbconn,$id){
  $lg = "Logged In";
  $stmt = $dbconn->prepare("UPDATE user SET last_login=NOW(),login_status=:lg WHERE hash_id=:id");
  $stmt->bindParam(":id",$id);
  $stmt->bindParam(":lg",$lg);
  $stmt->execute();
}

function setUserLogout($dbconn,$id){
  $lg = "Logged Out";
  $stmt = $dbconn->prepare("UPDATE user SET last_logout=NOW(),login_status=:lg WHERE hash_id=:id");
  $stmt->bindParam(":id",$id);
  $stmt->bindParam(":lg",$lg);
  $stmt->execute();

}















function getInsightHeader($dbconn){
  $vis = "Show";
  $stmt = $dbconn->prepare("SELECT * FROM insight WHERE visibility=:sh ORDER BY id DESC LIMIT 2" );
  $stmt->bindParam(":sh", $vis);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);

    echo '<div class="item">
    <div class="item-header">
    <a href="insight?id='.$hash_id.'" class="img-read-later-button rm-btn-small">Read</a>
    <a href="#"><img src="'.$image_1.'" alt="'.$title.'" /></a>
    </div>
    <div class="item-content">
    <h4><a href="insight?id='.$hash_id.'">'.$title.'</a></h4>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
    </span>
    </div>
    </div>';
  }
  echo'<span class="item-meta">
  <a href="insights" class="item-meta-item meta-button">View More Insights <i class="fa fa-caret-right"></i></a>
  </span>';

}
function getInsightHeader2($dbconn){
  $vis = "Show";
  $stmt = $dbconn->prepare("SELECT * FROM insight WHERE visibility=:sh ORDER BY id DESC LIMIT 2" );
  $stmt->bindParam(":sh", $vis);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);

    echo '<div class="item">
    <div class="item-header">
    <a href="insight?id='.$hash_id.'" class="img-read-later-button rm-btn-small">Read</a>
    <a href="#"><img src="'.$image_1.'" alt="'.$title.'" /></a>
    </div>
    <div class="item-content">
    <h4><a href="insight?id='.$hash_id.'">'.$title.'</a></h4>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
    </span>
    </div>
    </div>';
  }
}
function getReportHeader($dbconn){
  $vis = "Show";
  $stmt = $dbconn->prepare("SELECT * FROM report WHERE visibility=:sh ORDER BY id DESC LIMIT 2" );
  $stmt->bindParam(":sh", $vis);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);
    echo '<div class="item">
    <div style="margin-left:10px" class="item-content">
    <h4><a href="'.$link.'">'.$title.'</a></h4>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
    </span>
    </div>
    </div>';
  }
  echo'<span class="item-meta">
  <a href="articles" class="item-meta-item meta-button">View More Articles <i class="fa fa-caret-right"></i></a>
  </span>';

}
function getReportHeader2($dbconn){
  $vis = "Show";
  $stmt = $dbconn->prepare("SELECT * FROM report WHERE visibility=:sh ORDER BY id DESC LIMIT 2" );
  $stmt->bindParam(":sh", $vis);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);
    echo '<div class="item">
    <div style="margin-left:10px" class="item-content">
    <h4><a href="'.$link.'">'.$title.'</a></h4>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
    </span>
    </div>
    </div>';
  }

}
function getNewsHeader($dbconn,$rg){
  $vis = "show";
  $stmt = $dbconn->prepare("SELECT * FROM news WHERE visibility=:sh AND category=:rg ORDER BY id DESC LIMIT 2" );
  $stmt->bindParam(":sh", $vis);
  $stmt->bindParam(":rg", $rg);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    extract($row);
    $SDate = decodeDate($date_created);
    echo '<div class="item">
    <div class="item-header">
    <a href="'.$link.'" class="img-read-later-button rm-btn-small">Read</a>
    <a href="'.$link.'"><img src="'.$image_1.'" alt="'.$headline.'" /></a>
    </div>
    <div class="item-content">
    <h4><a href="'.$link.'">'.$headline.'</a></h4>
    <span class="item-meta">
    <span class="item-meta-item"><i class="material-icons">access_time</i>'.$SDate.'</span>
    </span>
    </div>
    </div>';
  }
  if($rg == "Africa"){
    echo'<span class="item-meta">
    <a href="africa" class="item-meta-item meta-button">View More News <i class="fa fa-caret-right"></i></a>
    </span>';
  }elseif($rg == "Nigeria"){
    echo'<span class="item-meta">
    <a href="nigeria" class="item-meta-item meta-button">View More News <i class="fa fa-caret-right"></i></a>
    </span>';
  }

}

?>
