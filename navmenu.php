<?php
$navbar = [
    'header' => [
        'title' => 'Главная',
        'url' => 'index.php'
    ],
    'catalog' => [
        'title' => 'Каталог',
        'url' => 'catalog.php',
        'sub' => [
            'first' => [
                'title' => 'first',
                'url' => 'catalog1.php'
            ],
            'second' => [
                'title' => 'second',
                'url' => 'catalog2.php'
            ]
        ]
    ],
    'about' => [
        'title' => 'О нас',
        'url' => 'about.php'
    ],
    'contacts' => [
        'title' => 'Контакты',
        'url' => 'contacts.php'
    ],
    'multiplication' => [
        'title' => 'Таблица умножения',
        'url' => 'multiplication.php'
    ],
    'hello' => [
        'title' => 'HELLO',
        'url' => 'hello.php'
    ]
];
?>


<div class="nav">
    <ul>
        <a href="<?php echo $navbar['header']['url']?>"><li><?php echo $navbar['header']['title']?></li></a>
        <a href="<?php echo $navbar['catalog']['url']?>"><li class="catalog"><?php echo $navbar['catalog']['title']?></a>

            <ul class="subMenu">
                <?php
                foreach ($navbar['catalog']['sub'] as $sub => $val){?>

                    <a href="<?php echo $val['url']?>"><li><?php echo $val['title']?></li></a>
                    <?php

                }?>

            </ul>
        </li>
        <a href="<?php echo $navbar['about']['url']?>"><li><?php echo $navbar['about']['title']?></li></a>
        <a href="<?php echo $navbar['contacts']['url']?>"><li><?php echo $navbar['contacts']['title']?></a>
        <?php
        foreach ($navbar as $key => $add){
            if ($key == 'multiplication'){?>
                <a href="<?php echo $add['url']?>"><li><?php echo $add['title']?></li></a>
                <?php
            };
            if ($key == 'hello'){?>
                <a href="<?php echo $add['url']?>"><li><?php echo $add['title']?></li></a>

                <?php
            };
        };
        ?>

    </ul>
</div>