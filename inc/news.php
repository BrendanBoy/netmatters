<?php

function get_articles() {
    include("inc/connect.php");

    try {
        $result = $db->query(
            "SELECT Articles.id, category_name, service_name, image, title, body, author_image, author_name, date 
            FROM Articles
            JOIN Categories ON Articles.category_id = Categories.category_id
            JOIN Services ON Articles.service_id = Services.service_id
            JOIN Authors ON Articles.author_id = Authors.author_id
            ORDER BY Articles.id"
        );
    } catch (Exception $e) {
        echo "Unable to retrieve result";
        exit;
    }

    $items = $result->fetchAll(PDO::FETCH_ASSOC);
    return $items;
}

$articles = get_articles();

?>
<!-- start of news section -->
            <section id="headline">
                <h2 class="sr-only">News</h2>
                <div class="container">
                    <div>
                        <span>Latest</span>
                    </div>
                </div>
            </section>
            <section id="news-cards" class="py-4" style="box-shadow: inset 0 5px 35px rgba(0,0,0,0.1);">
                <div class="container">
                    <div class="row mb-4">
                    
                    <?php foreach($articles as $article): ?>
                        
                        <div class="article col-md-6 col-xl-4 pt-4">
                            <div class="news-<?php echo $article["service_name"] ?> card h-100">
                                <div class="image-container">
                                    <a href="#"><img src="img/news/<?php echo $article["image"] ?>" class="card-img-top" alt=""></a>
                                    <div class="card-label"><?php echo $article["category_name"] ?></div>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h3 class="card-title">
                                        <a href="#"><?php echo $article["title"] ?></a>
                                    </h3>
                                    <p class="card-text"><?php echo $article["body"] ?></p>
                                    <span class="mt-auto">
                                        <a class="card-link btn btn-<?php echo $article["service_name"] ?>" href="#">Read More</a>
                                    </span>
                                </div>
                                <hr>
                                <div class="card-footer">
                                    <img class="float-start rounded-circle" src="img/news/<?php echo $article["author_image"] ?>" alt="">
                                    <p class="author"><strong>Posted by <?php echo $article["author_name"] ?></strong><br>
                                        <span class="text-muted"><?php echo date_format(date_create($article["date"]),"jS F Y"); ?></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

                    </div>
                </div>
            </section>
            <!-- end of news section -->
