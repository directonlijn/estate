<?php

    $newsItems2 = App\Models\Posts::homepageNewsItems();

    foreach($newsItems2 as $newsItem){
        ?>

            <div class="news-item">
                <h1>{{ $newsItem->title }}</h1>
                <div class="news-item-content">
                    {!! $newsItem->content !!}
                </div>
            </div>

        <?php
    }

?>
