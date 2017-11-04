<?php
$site = "http://www.astvent.com";
$url = "https://www.astvent.com/app/install/doobtv.apk";
$forceUpdate = "true";
$versionCode = "1041";
$versionName = "1.0.41";
$updateMessage = "  - 메뉴리스트 수정\\n  - 기타 버그 수정\\n";
echo '{"site":"'.$site.'","url":"'.$url.'","forceUpdate":'.$forceUpdate.',"versionCode":'.$versionCode.',"updateMessage":"최신버전:v'.$versionName.'\n\n수정사항:\n'.$updateMessage.'"}';
?>
