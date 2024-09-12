<?php
include_once "./header.php";

// Your API endpoint
$api_url = "https://admin-backend.cogniwellness.com/list-blog";

// Initialize cURL
$ch = curl_init();

$img_url = "https://admin-backend.cogniwellness.com/upload/";

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Only if your API uses HTTPS and you encounter SSL issues

// Execute cURL and fetch the data
$response = curl_exec($ch);

// Close cURL
curl_close($ch);

// Decode JSON response to PHP array
$blogs = json_decode($response, true);

// Check if the data is in the expected format
$blogs = isset($blogs['listblog']) ? $blogs['listblog'] : [];


?>

<div class="blog_container">
    <img src="./image/blog-bg.webp" class="img-fluid" alt="">
    <?php if (!empty($blogs)): ?>
        <div class="container my-5">
            <div class="row">
                <?php

                foreach ($blogs as $blog):


                    ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo $img_url . $blog['thumbnail_image']; ?>" class="img-fluid" alt="...">
                            <div class="card-body aesthetic_slider-card-body" style="display: block;">
                                <!--<p class="aesthetic_slider-text">Wellness Tips-->
                                <!--</p>-->
                                <h5 class="blog-title"><?php echo !empty($blog['title']) ? $blog['title'] : 'No Title'; ?></h5>

                                <p class="blog-content">
                                    <?php echo !empty($blog['short_description']) ? $blog['short_description'] : 'No Description'; ?>
                                </p>
                                <a href="./blog-detail.php?id=<?php echo $blog['_id']; ?>" class="aesthetic_slider-link">Read
                                    More &#8594;</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php else: ?>
        <p>No blog posts found.</p>
    <?php endif; ?>
</div>

<?php
include_once "./footer.php";
?>