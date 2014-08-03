<?php

/****** GET THE LAST INSTAGRAM PHOTOS *******/
/*
Replace "XXXXX" with the Instagram user ID and "ZZZZZ" with the Instagram Dev-App access token
*/
function get_user_instagram_photos($user_id=36715762, $count=6, $width=180, $height=180){
   $url = 'https://api.instagram.com/v1/users/'.$user_id.'/media/recent/?access_token=7c938459614047f3a6e537440f58e9e8&count='.$count;
  $jsonData = json_decode((file_get_contents($url)));
 $result = '';
   foreach ($jsonData->data as $key=>$value) {
       $result .= '\t'.'<a title="'.htmlentities($value->caption->text).' ('.htmlentities(date("d/m/Y", $value->caption->created_time)).')" href="'.$value->images->standard_resolution->url.'">';
       $result .= '<img src="'.$value->images->low_resolution->url.'" alt="'.$value->caption->text.'" width="'.$width.'" height="'.$height.'" />';
      $result .= '</a>';
    }
 return $result;
}

?>