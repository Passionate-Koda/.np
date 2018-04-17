<?php
$uri = explode("/", $_SERVER['REQUEST_URI']);
//var_dump($uri);

if(count($uri)> 2){
  header("Location:/admin");
}





//Creating A Null variable to be populated for the query String Route;
$category_id = NULL;
$category_name= NULL;
$c= NULL;

//Creating a $_GET condition to populate the Null Variables;
if(isset($_GET['id'])){
  $category_id = $_GET['id'];
}

$msg = NULL;
if(isset($_GET['msg'])){
  $msg = $_GET['msg'];
}
if(isset($_GET['c'])){
  $c = $_GET['c'];
}

$vcid = NULL;
if(isset($_GET['vcid'])){
  $vcid = $_GET['vcid'];
}

$rd = NULL;
if(isset($_GET['rd'])){
  $rd = $_GET['rd'];
}
$keyword = NULL;
if(isset($_GET['keyword'])){
  $keyword = $_GET['keyword'];
}
$ssp = NULL;
if(isset($_GET['ssp'])){
  $ssp = $_GET['ssp'];
}
if(isset($_GET['name'])){
  $category_name = $_GET['name'];
}
$success = NULL;
if(isset($_GET['success'])){
  $success = $_GET['success'];
}

$err = NULL;
if(isset($_GET['err'])){
  $err = $_GET['err'];
}

$wn = NULL;
if(isset($_GET['wn'])){
  $wn = $_GET['wn'];
}

$sgn = NULL;
if(isset($_GET['sgn'])){
  $sgn = $_GET['sgn'];
}

$id = NULL;
if(isset($_GET['id'])){
  $id = $_GET['id'];
}

$t = NULL;
if(isset($_GET['t'])){
  $t = $_GET['t'];
}
$p = NULL;
if(isset($_GET['p'])){
  $p = $_GET['p'];
}
$s = NULL;
if(isset($_GET['s'])){
  $s = $_GET['s'];
}








switch ($uri[1]) {


  case "":
include APP_PATH."/public_views/index.php";
  break;

  case "/":
  include APP_PATH."/public_views/index.php";
  break;

  case "index":
  include APP_PATH."/public_views/index.php";
  break;

  case "about":
  include APP_PATH."/public_views/about.php";
  break;
  //
  // case "news?id=$id":
  // include APP_PATH."/public_views/africa.php";
  // break;


  // case "news?id=$id":
  // include APP_PATH."/public_views/global.php";
  // break;

  case "articles":
  include APP_PATH."/public_views/articles.php";
  break;

  case "africa":
  include APP_PATH."/public_views/africa.php";
  break;

  case "global":
  include APP_PATH."/public_views/global.php";
  break;

  case "event?id=$id":
  include APP_PATH."/public_views/event.php";
  break;

  case "articles?id=$id":
  include APP_PATH."/public_views/articles.php";
  break;

  case "contact":
  include APP_PATH."/public_views/contact.php";
  break;

  case "trainings?id=$id":
  include APP_PATH."/public_views/grants.php";
  break;
  case "trainings?p=$p":
  include APP_PATH."/public_views/grants.php";
  break;

  case "article?id=$id":
  include APP_PATH."/public_views/post.php";
  break;

  case "insight?id=$id":
  include APP_PATH."/public_views/insight_post.php";
  break;

  case "report":
  include APP_PATH."/public_views/report.php";
  break;

  case "team":
  include APP_PATH."/public_views/team.php";
  break;

  case "trainings":
  include APP_PATH."/public_views/grants.php";
  break;

  case "program":
  include APP_PATH."/public_views/trainings.php";
  break;

  case "program?p=$p":
  include APP_PATH."/public_views/trainings.php";
  break;

  case "view_event":
  include APP_PATH."/public_views/view_event.php";
  break;
  case "view_event?p=$p":
  include APP_PATH."/public_views/view_event.php";
  break;

  case "userRegistration":
  include APP_PATH."/public_views/add_user.php";
  break;

  case "userRegistration?success=$success":
  include APP_PATH."/public_views/add_user.php";
  break;

  case "userLogin":
  include APP_PATH."/public_views/user_login.php";
  break;

  case "userLogin?rd=$rd&sgn=$sgn":
  include APP_PATH."/public_views/user_login.php";
  break;

  case "userLogin?sgn=$sgn&rd=$rd":
  include APP_PATH."/public_views/user_login.php";
  break;

  case "userLogin?wn=$wn":
  include APP_PATH."/public_views/user_login.php";
  break;

  case "userLogin?err=$err":
  include APP_PATH."/public_views/user_login.php";
  break;

  case "userLogin?success=$success":
  include APP_PATH."/public_views/user_login.php";
  break;

  case "userLogin?rd=$rd":
  include APP_PATH."/public_views/user_login.php";
  break;

  case "userLogin?sgn=$sgn":
  include APP_PATH."/public_views/user_login.php";
  break;

  case "insight":
  include APP_PATH."/public_views/insight.php";
  break;
  case "insights?p=$p":
  include APP_PATH."/public_views/insight.php";
  break;

  case "insights?c=$c":
  include APP_PATH."/public_views/insight_category.php";
  break;

  case "insights?c=$c&p=$p":
  include APP_PATH."/public_views/insight_category.php";
  break;

  // case "insights?cp=$cp":
  // include APP_PATH."/public_views/insight_category.php";
  // break;

  case "news":
  include APP_PATH."/public_views/news.php";
  break;
  case "news?p=$p":
  include APP_PATH."/public_views/news.php";
  break;

  case "news?id=$id":
  include APP_PATH."/public_views/news_post.php";
  break;

  case "news?c=$c":
  include APP_PATH."/public_views/news_category.php";
  break;

  case "news?c=$c&p=$p":
  include APP_PATH."/public_views/news_category.php";
  break;
  case "campus_articles":
  include APP_PATH."/public_views/campus_articles.php";
  break;
  case "campus_articles?p=$p":
  include APP_PATH."/public_views/campus_articles.php";
  break;

  case "campus_articles?id=$id":
  include APP_PATH."/public_views/campus_articles_post.php";
  break;

  case "campus_articles?c=$c":
  include APP_PATH."/public_views/campus_articles_category.php";
  break;
  case "campus_articles?c=$c&p=$p":
  include APP_PATH."/public_views/campus_articles_category.php";
  break;
  // case "news?cp=$cp":
  // include APP_PATH."/public_views/news_category.php";
  // break;

  case "campus_news":
  include APP_PATH."/public_views/campus_news.php";
  break;
  case "campus_news?p=$p":
  include APP_PATH."/public_views/campus_news.php";
  break;

  case "campus_news?id=$id":
  include APP_PATH."/public_views/campus_news_post.php";
  break;

  case "campus_news?c=$c&p=$p":
  include APP_PATH."/public_views/campus_news_category.php";
  break;
  case "campus_news?c=$c":
  include APP_PATH."/public_views/campus_news_category.php";
  break;

  // case "campus_news?cp=$cp":
  // include APP_PATH."/public_views/campus_news_category.php";
  // break;

  case "u_verify?vcid=$vcid":
  include APP_PATH."/public_views/verify.php";
  break;

  case "archive":
  include APP_PATH."/public_views/directory.php";
  break;

  // case "insight?p=$p":
  // include APP_PATH."/public_views/insight.php";
  // break;

  case "articles?p=$p":
  include APP_PATH."/public_views/articles.php";
  break;

  case "search?keyword=$keyword&rd=$rd":
  include APP_PATH."/public_views/search.php";
  break;



  ///////Public Routes////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}





?>
