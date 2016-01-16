<?php
$qstr = array('user_id'=>'189312549',
    'fields'=>'nickname,bdate',
    'count'=>'12',
    'offset'=>'0');
http_build_query($qstr);
$req = "https://api.vk.com/method/friends.get?" . http_build_query($qstr);
$content = file_get_contents($req);
$resp = json_decode($content, true);
$friends = $resp['response'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php foreach ($friends as $post): ?>
        <div class="post">
           <section>
            <h2><?= $post ['first_name'] . " " . $post['last_name'] ?></h2>
            <p class = "bdate"><?= "День рождения: " . $post['bdate']?></p>
        </section>
    </div>
<?php endforeach; ?>
</body>
</html>

