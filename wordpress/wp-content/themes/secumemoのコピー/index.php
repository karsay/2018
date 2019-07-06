<?php get_header(); ?>
<body <?php body_class();?>>
<div id="bg">
    <div class="window">
        <img src="<?php echo get_stylesheet_directory_uri()?>/images/0.jpg" id="window-img"height="90%" width="100%" style="border-radius: 10px;">
        <figcaption>
            このサイトは主にKali Linuxのツールについての忘備録サイトです<br>
            サイドメニューのKali Toolsのカテゴリ分けについては<a href='https://tools.kali.org/tools-listing'>公式のツール一覧表</a>を参考にしています
        <figcaption>
    </div>
    <?php get_sidebar();?>
    <div class="container-fluid">
        <div id="new-post">最新記事</div>
        <div class="card-deck">
            <div class="card cp_imghover cp_zoomin">
                <a href="#">
                    <img class="card-img-top" src="https://placehold.it/200x80.jpg" alt="カード1の画像">
                    <div class="card-body">
                        <h5 class="card-title">カード1のタイトル</h5>
                        <p class="card-text">これは、追加コンテンツへの自然な導入として以下のテキストをサポートする、より幅広いカードです。このコンテンツはもう少し長くなります。</p>
                        <p class="card-text"><small class="text-muted">最終更新3分前</small></p>
                    </div>
                </a>
            </div>
            <div class="card cp_imghover cp_zoomin">
                <a href="#">
                    <img class="card-img-top" src="https://placehold.it/200x80.jpg" alt="カード1の画像">
                    <div class="card-body">
                        <h5 class="card-title">カード1のタイトル</h5>
                        <p class="card-text">これは、追加コンテンツへの自然な導入として以下のテキストをサポートする、より幅広いカードです。このコンテンツはもう少し長くなります。</p>
                        <p class="card-text"><small class="text-muted">最終更新3分前</small></p>
                    </div>
                </a>
            </div>
        </div>
        <div class="card-deck">
            <div class="card cp_imghover cp_zoomin">
                <a href="#">
                    <img class="card-img-top" src="https://placehold.it/200x80.jpg" alt="カード1の画像">
                    <div class="card-body">
                        <h5 class="card-title">カード1のタイトル</h5>
                        <p class="card-text">これは、追加コンテンツへの自然な導入として以下のテキストをサポートする、より幅広いカードです。このコンテンツはもう少し長くなります。</p>
                        <p class="card-text"><small class="text-muted">最終更新3分前</small></p>
                    </div>
                </a>
            </div>
            <div class="card cp_imghover cp_zoomin">
                <a href="#">
                    <img class="card-img-top" src="https://placehold.it/200x80.jpg" alt="カード1の画像">
                    <div class="card-body">
                        <h5 class="card-title">カード1のタイトル</h5>
                        <p class="card-text">これは、追加コンテンツへの自然な導入として以下のテキストをサポートする、より幅広いカードです。このコンテンツはもう少し長くなります。</p>
                        <p class="card-text"><small class="text-muted">最終更新3分前</small></p>
                    </div>
                </a>
            </div>
            <div class="card cp_imghover cp_zoomin">
                <a href="#">
                    <img class="card-img-top" src="https://placehold.it/200x80.jpg" alt="カード1の画像">
                    <div class="card-body">
                        <h5 class="card-title">カード1のタイトル</h5>
                        <p class="card-text">これは、追加コンテンツへの自然な導入として以下のテキストをサポートする、より幅広いカードです。このコンテンツはもう少し長くなります。</p>
                        <p class="card-text"><small class="text-muted">最終更新3分前</small></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php get_footer();?>
</div><!-- bg -->