<?php if (is_post_navi_visible()): ?>
<div id="pager-post-navi" class="pager-post-navi pager-post-navi-square cf">
<?php
$prevpost = get_adjacent_post(false, '', true); //前の記事
$nextpost = get_adjacent_post(false, '', false); //次の記事
if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
?>
<?php
if ( $prevpost ) { //前の記事が存在しているとき
  echo '<a href="' . get_permalink($prevpost->ID) . '" title="' . get_the_title($prevpost->ID) . '" class="prev-post a-wrap cf">
        <figure class="prev-post-thumb">' .
        get_post_navi_thumbnail_tag( $prevpost->ID ).
        '</figure>
        <div class="prev-post-title">' . get_the_title($prevpost->ID) . '</div></a>';
} else { //前の記事が存在しないとき
//echo  '<a href="' .home_url('/'). '" id="prev-next-home" class="prev-next-home a-wrap"><span class="fa fa-home"></span></a>';
}
if ( $nextpost ) { //次の記事が存在しているとき
  echo '<a href="' . get_permalink($nextpost->ID) . '" title="'. get_the_title($nextpost->ID) . '" class="next-post a-wrap cf">
        <figure class="next-post-thumb">
        ' .
        get_post_navi_thumbnail_tag( $nextpost->ID ).
        '</figure>
<div class="next-post-title">'. get_the_title($nextpost->ID) . '</div></a>';
} else { //次の記事が存在しないとき
//echo '<a href="' .home_url('/'). '" id="prev-next-home" class="prev-next-home a-wrap"><span class="fa fa-home"></span></a>';
}
?>
<?php } ?>
</div><!-- /.pager-post-navi -->
<?php endif //is_post_navi_visible ?>
