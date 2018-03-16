<?php
    require_once 'speech/AipSpeech.php';
    // 你的 APPID AK SK
    const APP_ID = '10939088';
    const API_KEY = 'iOsPVkdzQgRFp7IBEduBwG1Y';
    const SECRET_KEY = '720493b8775d4466081749dcd82c90d2';
    
    $client = new AipSpeech(APP_ID, API_KEY, SECRET_KEY);
    
    //var_dump($client);
    $result = $client->synthesis('磅礴', 'zh', 1, array(
        'vol' => 5,
        'spd' => 1,
        'per' => 5,
    ));
    //var_dump($result);
    // 识别正确返回语音二进制 错误则返回json 参照下面错误码
    if(!is_array($result)){
        file_put_contents('audio.mp3', $result);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>音乐</title>
</head>
<body>
<audio controls autoplay>
<source src="audio.mp3" />//音乐路径
</audio>
</body>

</html>