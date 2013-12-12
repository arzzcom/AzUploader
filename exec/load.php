<?php
header('Content-type: text/xml; charset=UTF-8', true);
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");

// 넘겨받은 param값 등으로 디비처리를 합니다.

echo '<?xml version="1.0" encoding="UTF-8"?><list>';

// 반복문 시작
echo '<file>';
echo '<name>파일이름 1</name>'; // 파일이름
echo '<size>10000</size>'; // 파일용량
echo '<server>/tmp/phpGfFg8W</server>'; // 업로드 당시 서버에서 리턴해주었던 값
echo '</file>';
// 반복문 끝

echo '<file>';
echo '<name>파일이름 2</name>';
echo '<size>10000</size>';
echo '<server>/tmp/phpGfFg8W</server>';
echo '</file>';

echo '</list>';
?>