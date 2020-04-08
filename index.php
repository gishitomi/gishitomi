<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT情報サイト</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
    <div id="index">
        <header>
            <a class="left-box" href="index.php">
                <h1 class="serif">IT-info</h1>
            </a>
            <div class="menu-bar">
                <ul>
                    <a class="underline" id="scroll_btn1" href="">
                        <li>経済状況 <i class="fas fa-briefcase"></i></li>
                    </a>
                    <a class="underline" id="scroll_btn2" href="">
                        <li>IT関連のニュース <i class="fas fa-desktop"></i></li>
                    </a>
                    <a class="underline" id="scroll_btn3" href=" ">
                        <li>IT業界のトレンド <i class=" fas fa-book-open "></i></li>
                    </a>
                    <a class=" underline" id="scroll_btn4" href=" ">
                        <li>勉強記録 <i class=" fas fa-book-open "></i></li>
                    </a>

                </ul>
            </div>
            <!-- <div class=" right-box ">
                <span></span>
                <span></span>
                <span></span>
            </div> -->
        </header>
        <div class=" menu-wrapper ">
            <div class=" side-menu ">
                <ul>
                    <li>Udemy</li>
                    <li>ドットインストール</li>
                    <li>Progate</li>

                </ul>
            </div>
        </div>
        <main>
            <h1><span>IT</span>就活まとめ</h1>
            <h2>Blog</h2>
            <div class=" vioret-box "></div>
            <div class=" white-box ">
                <div class=" bar1 "></div>
                <div class=" bar2 "></div>
                <div class=" bar3 "></div>
                <div class=" bar4 "></div>
            </div>
            <div class=" green-box "></div>
            <div class=" gray-box ">
            </div>
            <div class=" topic ">

            </div>
        </main>
        <div class=" articles ">
            <article>
                <h2 class=" rec ">現在の就職にあたっての経済状況</h2>
                <p>　　　　就職、経済に関するニュース、サイトのまとめ</p>
                <div class=" note ">
                    <p>
                    <?php
                    $xmlTree = simplexml_load_file('https://news.yahoo.co.jp/pickup/economy/rss.xml');
                    ?>
                <a href=" <?php print($xmlTree->channel->link) ?>"><?php print($xmlTree->channel->title); ?></a>
                    <?php

                    echo "<br>";
                    print($xmlTree->channel->description);
                    echo "<br>";
                    print($xmlTree->channel->pubDate);
                    echo "<br>";


                    foreach ($xmlTree->channel->item as $item) :
                    ?>
                        ・<a href=" <?php print($item->link); ?>"><?php print($item->title); ?></a>

                        <?php print("　　　　" . $item->pubDate); ?>
                        <br>
                        <p><?php print($item->description); ?></p>
                    <?php endforeach; ?>
                    </p>
            </div>
            </article>
            <article>
                <h2 class=" it ">IT関連</h2>

                <p>　　　　毎日のIT関連のニュースをまとめます!!</p>
                <div class=" note ">
                    <p>
                        <?php
                        $xmlTree = simplexml_load_file('https://news.yahoo.co.jp/pickup/computer/rss.xml');
                        ?>
                        <a href=" <?php print($xmlTree->channel->link) ?>"><?php print($xmlTree->channel->title); ?></a>
                        <?php

                        echo "<br>";
                        print($xmlTree->channel->description);
                        echo "<br>";
                        print($xmlTree->channel->pubDate);
                        echo "<br>";


                        foreach ($xmlTree->channel->item as $item) :
                        ?>
                            ・<a href=" <?php print($item->link); ?>"><?php print($item->title); ?></a>

                            <?php print("　　　　" . $item->pubDate); ?>
                            <br>
                            <p><?php print($item->description); ?></p>
                        <?php endforeach; ?>
                    </p>
                </div>
            </article>
            <article>
                <h2 class="study ">IT業界のトレンド</h2>
                <p>　　　　役に立ちそうな情報をキャッチ</p>
                <div class="note ">
                    <p>
                        <?php
                        $xmlTree = simplexml_load_file('https://qiita.com/tags/%E6%96%B0%E4%BA%BA%E3%83%97%E3%83%AD%E3%82%B0%E3%83%A9%E3%83%9E%E5%BF%9C%E6%8F%B4/feed.atom');
                        ?>
                        <a href="<?php print($xmlTree->link); ?>">
                        <?php print($xmlTree->description); ?></a>
                        <br>
                        <?php
                        foreach ($xmlTree->entry as $entry) :
                        ?>
                            ・<a href="<?php print($entry->url); ?>">
                        <?php print($entry->title); ?></a>
                        <br>
                        <?php endforeach; ?>

                    </p>
                </div>
            </article>
            <article>
                <h2 class="dialy ">勉強記録</h2>
                <p>　　　　日々の勉強を記録します</p>
                <div class="note ">
                    <p></p>
                </div>
            </article>


    </div>

    </div>




    <script src="./assets/js/jquery.js "></script>
    <script src="./assets/js/index.js "></script>
</body>

</html>