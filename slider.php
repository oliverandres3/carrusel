<?php
include_once("db_connect.php");

$sql = "SELECT id, image FROM slider";
  //query pata postgres
//$resultset = pg_query($sql);
$resultset = mysqli_query($sql);

//$rows = pg_fetch_all($resultset);
$rows = mysqli_fetch_all($resultset);

    $image_count = 0;
    $button_html = '';
    $slider_html = '';
    $thumb_html  = '';
//while( $rows = pg_fetch_assoc($resultset)){
while( $rows = mysqli_fetch_assoc($resultset)){

    $active_class = "";
if(!$image_count) {
    $active_class = 'active';
    $image_count = 1;
}
    $image_count++;
$thumb_image = $rows['id'];
$slider_html.= "<div  align='middle' class='item ".$active_class."'>";
$slider_html.= "<img  align='middle' src='".$rows['image']."' class='img-responsive'>";
$slider_html.= "<div class='carousel-caption'></div></div>";
$thumb_html.= "<li><img  align='middle' src='".$thumb_image."' alt='$thumb_image'></li>";
$button_html.= "<li data-target='#myCarousel' data-slide-to='".$image_count."' class='".$active_class."'></li>";

}
?>

