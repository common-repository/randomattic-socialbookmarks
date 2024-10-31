<?php
/*
Plugin Name: Randomattic Socialbookmarks
Plugin URI: http://randomattic.com/2010/randomattic-socialbookmarks/
Description: Black & White Social networking icons that matches every layout of wordpress. Easy to modify and flowless. more icon packs will be available soon. the icons right now are courtesy of <A href="http://icons.mysitemyway.com"> MySiteMyWay </a>.
Version: 0.3
Author: Ekta Paneri
Author URI: http://ektz.in/
*/

/*  Copyright 2009  Ekta Paneri  (email : ekta.paneri@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

   */

function randomattic_sb($content) {

    global $post;
	$images= get_settings('home') . '/wp-content/plugins/randomattic-socialbookmarks/';
	$posturl = get_permalink($post->ID);	
    $posttitle = get_the_title($post->ID);
	
	if ( !is_feed() && !is_page() ) {
	$content .= "\n" . '<!-- Randomattic Social Bookmarks -->' . "\n"
	. '<div style="padding:2px;text-align:center;" class="randomattic_bookmarks">' . "\n"
	
	. '<a href="http://blinklist.com/index.php?Action=Blink/addblink.php&amp;Name=' . $posttitle  .'&amp;Url=' . $posturl . '" target="_blank" rel="nofollow" title="BlinkList" style="text-decorations:none; border:0px;"><img src="' . $images . 'blinklist.gif" style="width:32px;height:32px;border:0px;margin:0 2px;padding:0px;" alt="BlinkList" title="BlinkList" /></a>'				  
	
	. '<a href="http://del.icio.us/post?url=' . $posturl . '&amp;title=' . $posttitle  .'" target="_blank" rel="nofollow" title="Delicious" style="text-decorations:none; border:0px;"><img src="' . $images . 'delicious.gif" style="width:32px;height:32px;border:0px;margin:0 2px;padding:0px;" alt="Delicious" title="Delicious" /></a>' 
	
	. '<a href="http://digg.com/submit?phase=2&amp;url=' . $posturl . '&amp;title=' . $posttitle  .'" target="_blank" rel="nofollow" title="Digg" style="text-decorations:none; border:0px;"><img src="' . $images . 'digg.gif" style="width:32px;height:32px;border:0px;margin:0 2px;padding:0px;" alt="Digg" title="Digg" /></a>' 
	
	. '<a href="http://www.facebook.com/sharer.php?u=' . $posturl . '" target="_blank" rel="nofollow" title="facebook" style="text-decorations:none; border:0px;"><img src="' . $images . 'facebook.gif" style="width:32px;height:32px;border:0px;margin:0 2px;padding:0px;" alt="facebook" title="facebook" /></a>' 
	
	. '<a href="http://www.google.com/bookmarks/mark?op=edit&amp;output=popup&amp;bkmk=' . $posturl . '&amp;title=' . $posttitle  .'" target="_blank" rel="nofollow" title="Google" style="text-decorations:none; border:0px;"><img src="' . $images . 'google.gif" style="width:32px;height:32px;border:0px;margin:0 2px;padding:0px;" alt="Google" title="Google" /></a>' 
	
	. '<a href="http://www.newsvine.com/_wine/save?u=' . $posturl . '&amp;h=' . $posttitle  .'" target="_blank" rel="nofollow" title="Newsvine" style="text-decorations:none; border:0px;"><img src="' . $images . 'newsvine.gif" style="width:32px;height:32px;border:0px;margin:0 2px;padding:0px;" alt="Newsvine" title="Newsvine" /></a>'
	
	. '<a href="http://reddit.com/submit?url=' . $posturl . '&amp;title=' . $posttitle  .'" target="_blank" rel="nofollow" title="Reddit" style="text-decorations:none; border:0px;"><img src="' . $images . 'reddit.gif" style="width:32px;height:32px;border:0px;margin:0 2px;padding:0px;" alt="Reddit" title="Reddit" /></a>'
	
	. '<a href="http://www.stumbleupon.com/submit.php?url=' . $posturl . '&amp;title=' . $posttitle  .'" target="_blank" rel="nofollow" title="StumbleUpon" style="text-decorations:none; border:0px;"><img src="' . $images . 'stumbleupon.gif" style="width:32px;height:32px;border:0px;margin:0 2px;padding:0px;" alt="StumbleUpon" title="StumbleUpon" /></a>'
	
	. '<a href="http://www.technorati.com/faves?add=' . $posturl . '" target="_blank" rel="nofollow" title="Technorati" style="text-decorations:none; border:0px;"><img src="' . $images . 'technorati.gif" style="width:32px;height:32px;border:0px;margin:0 2px;padding:0px;" alt="Technorati" title="Technorati" /></a>'
	
	. '<a href="http://blogmarks.net/my/new.php?mini=1&amp;simple=1&amp;url=' . $posturl . '&amp;title=' . $posttitle  .'" target="_blank" rel="nofollow" title="BlogMarks" style="text-decorations:none; border:0px;"><img src="' . $images . 'blogmarks.gif" style="width:32px;height:32px;border:0px;margin:0 2px;padding:0px;" alt="Blogmarks" title="Blogmarks" /></a>'
	
	. '<a href="http://www.simpy.com/simpy/LinkAdd.do?href=' . $posturl . '&amp;title=' . $posttitle  .'" target="_blank" rel="nofollow" title="Simply" style="text-decorations:none; border:0px;"><img src="' . $images . 'simply.gif" style="width:32px;height:32px;border:0px;margin:0 2px;padding:0px;" alt="Simply" title="Simply" /></a>'
	
	. '<a href="http://twitter.com/home?status=Currently%20reading%20-%20' . $posttitle  .'%20at%20' . $posturl . '" target="_blank" rel="nofollow" title="Tweet This" style="text-decorations:none; border:0px;"><img src="' . $images . 'twitter.gif" style="width:32px;height:32px;border:0px;margin:0 2px;padding:0px;" alt="Tweet This" title="Tweet This" /></a>'
	
	. '</div>' . "\n"
	. '<!-- End Randomattic Social Bookmarks plugin -->' . "\n";				  
    }	
	return $content;
}

add_filter('the_content', 'randomattic_sb'); 

?>