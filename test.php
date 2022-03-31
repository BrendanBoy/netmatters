<?php
include('inc/header.php');

function get_article() {
    include("inc/connect.php");

    try {
        $result = $db->query(
            "SELECT * FROM Articles
            JOIN Categories ON Articles.category_id = Categories.category_id
            JOIN Services ON Articles.service_id = Services.service_id"
        );
    } catch (Exception $e) {
        echo "Unable to retrive result";
        exit;
    }

    $item = $result->fetchAll(PDO::FETCH_ASSOC);
    return $item;
}
// var_dump(get_article());
$article = get_article();
var_dump($article);
echo "<br>\n";
echo "<br>\n";
print_r($article);
?>

<div class="col-md-6 col-xl-4 pt-4">
                            <div class="news-support card h-100">
                                <div class="image-container">
                                    <a href="#"><img src="img/news/10-ways-to-22ch.jpg" class="card-img-top" alt=""></a>
                                    <div class="card-label">News</div>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h3 class="card-title">
                                        <a href="#">10 ways to help make your business more robus...</a>
                                    </h3>
                                    <p class="card-text">A robust business is one defined as being able to continue to be
                                        successful irrespective of the mark...</p>
                                    <span class="mt-auto">
                                        <a class="card-link btn btn-support" href="#">Read More</a>
                                    </span>
                                </div>
                                <hr>
                                <div class="card-footer">
                                    <img class="float-start rounded-circle" src="img/news/james-gulliver-rgmz.jpg" alt="">
                                    <p class="author"><strong>Posted by James Gulliver</strong><br>
                                        <span class="text-muted">5th October 2021</span>
                                    </p>
                                </div>
                            </div>
                        </div>