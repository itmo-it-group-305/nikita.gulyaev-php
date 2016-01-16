<?php
    $data = [
        [
            'id' => 1,
            'title' => 'News #1',
            'description' => 'Short description for news #1',
            'date' => date('Y-m-d H:i:s'),
            'preview' => 'preview1.jpg',
        ],
        [
            'id' => 2,
            'title' => 'News #2',
            'description' => 'Short description for news #2',
            'date' => date('Y-m-d H:i:s'),
            'preview' => 'preview2.jpg',
        ],
        [
            'id' => 3,
            'title' => 'News #3',
            'description' => 'Short description for news #3',
            'date' => date('Y-m-d H:i:s'),
            'preview' => 'preview3.jpg',
        ],
        [
            'id' => 4,
            'title' => 'News #4',
            'description' => 'Short description for news #4',
            'date' => date('Y-m-d H:i:s'),
            'preview' => 'preview4.jpg',
        ],
    ];
//foreach ($data as $post) {
//    //метод 1
//    //var_dump($post['title']);
//
//    // echo "
//    // <section>
//    //     <h2>{$post['title']}</h2>
//    //     <p class=\"date\">{$post['date']}</p>
//    // </section>
//    // ";
//    //метод 2
//    echo
//    '<section>',
//    '<h2>'.$post['title'].'</h2>',
//    '<p class="date">'.$post['date'].'</p>',
//    '</section>'
//    ;
//
//}
?>
<!--метод 3-->
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>

        <?php foreach ($data as $post): ?>
        <div class="post">
	        <section>
	            <h2><?= $post['title'] ?></h2>
	            <p><?= $post['date'] ?></p>
	            <p class='preview'>
	                <img src="<?= $post['preview'] ?>">
	            </p>
	            <p>
	                <?= $post['description'] ?>
	            </p>
	            <a href="post.php?id=$post['id']">Запись <?= $post['id'] ?></a>
	        </section>
        </div>
        <?php endforeach; ?>
        </body>
    </html>