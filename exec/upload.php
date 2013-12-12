<?php
// 업로드처리를 합니다. 일반적인 FORM으로 전송되어진 파일과 같이 처리하면 됩니다.
$uploaded = $_FILES['Filedata']; // 파일을 받습니다. FORM에서 전송된 파일과 같은 방식

// 파일을 옮깁니다.
//@move_uploaded_file($uploaded['tmp_name'],'./file/'.$uploaded['name']);

// 디비처리등을 합니다.

// 디비 처리등을 다 마치고, 업로더에서 알려줄 데이터를 넘겨줍니다. file.server 객체에 담김
echo $uploaded['tmp_name'];
?>