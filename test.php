<?php
// 전달받은 'x' 파라미터를 통해 파일 경로를 결정
if (isset($_GET['x'])) {
    $file = $_GET['x'];

    // 파일 경로를 file:// 프로토콜로 리디렉션
    header('Location: file://' . $file);
    exit;
} else {
    echo "No file specified.";
}
?>
