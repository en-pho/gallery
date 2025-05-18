<?php
function _getAssets($assets, $type = true)
{
  $assetsURL = "";
  // 是否本地化资源
  if (Helper::options()->JAssetsURL) {
    $assetsURL = Helper::options()->JAssetsURL . '/' . $assets;
  } else {
    $assetsURL = Helper::options()->themeUrl . '/' . $assets;
  }
  if ($type) echo $assetsURL;
  else return  $assetsURL;
}

function _getThumbnails($item)
{
  $result = [];
  $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';
  $patternMD = '/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|jpeg|gif|png|webp))/i';
  $patternMDfoot = '/\[.*?\]:\s*(http(s)?:\/\/.*?(jpg|jpeg|gif|png|webp))/i';

  if ($item->fields->thumb) {
    $fields_thumb_arr = explode("\r\n", $item->fields->thumb);
    foreach ($fields_thumb_arr as $list) $result[] = $list;
  }

  if (preg_match_all($pattern, $item->content, $thumbUrl)) {
    foreach ($thumbUrl[1] as $list) $result[] = $list;
  }

  if (preg_match_all($patternMD, $item->content, $thumbUrl)) {
    foreach ($thumbUrl[1] as $list) $result[] = $list;
  }

  if (preg_match_all($patternMDfoot, $item->content, $thumbUrl)) {
    foreach ($thumbUrl[1] as $list) $result[] = $list;
  }

  if (sizeof($result) < 3) {
    $custom_thumbnail = Helper::options()->JThumbnail;
    if ($custom_thumbnail) {
      $custom_thumbnail_arr = explode("\r\n", $custom_thumbnail);
      for ($i = 0; $i < 3; $i++) {
        $result[] = $custom_thumbnail_arr[array_rand($custom_thumbnail_arr, 1)] . "?key=" . mt_rand(0, 1000000);
      }
    } else {
      for ($i = 0; $i < 3; $i++) {
        $result[] = _getAssets('assets/thumb/' . rand(1, 42) . '.jpg', false);
      }
    }
  }

  return $result;
}
?>
