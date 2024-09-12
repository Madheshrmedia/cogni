<link rel="stylesheet" href="style.css">
<?php
include_once ("./header.php");

// Your API endpoints
$api_url = "https://admin-backend.cogniwellness.com/find-blog/" . $_GET['id'];
$api_url_blog = "https://admin-backend.cogniwellness.com/list-blog";

// Initialize cURL for the first API
$ch = curl_init();
$img_url = "https://admin-backend.cogniwellness.com/upload/";

// Set cURL options for the first API
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Only if your API uses HTTPS and you encounter SSL issues

// Execute cURL and fetch the data for the first API
$response = curl_exec($ch);

// Check if any error occurred
if (curl_errno($ch)) {
    echo 'cURL error (first API): ' . curl_error($ch);
}

// Close cURL for the first API
curl_close($ch);

// Initialize cURL for the second API
$ch_blg = curl_init();

// Set cURL options for the second API
curl_setopt($ch_blg, CURLOPT_URL, $api_url_blog);
curl_setopt($ch_blg, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch_blg, CURLOPT_SSL_VERIFYPEER, false); // Only if your API uses HTTPS and you encounter SSL issues

// Execute cURL and fetch the data for the second API
$card = curl_exec($ch_blg);

// Check if any error occurred
if (curl_errno($ch_blg)) {
    echo 'cURL error (second API): ' . curl_error($ch_blg);
}

// Close cURL for the second API
curl_close($ch_blg);

// Decode JSON responses to PHP arrays
$blogs = json_decode($response, true);
$blog_card = json_decode($card, true);

// Check if the data is in the expected format
$blogs = isset($blogs['findblog']) ? $blogs['findblog'] : [];
$blog_card = isset($blog_card['listblog']) ? $blog_card['listblog'] : [];




?>

<style>
    .imgbox img {
        width: 100%;
    }

    .h4heading {
        padding-top: 0px !important;
    }

    html {
        overflow-x: hidden;
    }

    .headpara p {
        color: black;
    }

    .centered p {
        color: white;
    }

    .homeblog-card-text {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 5;
        overflow: hidden;
        text-overflow: ellipsis;
        max-height: 7.5em;
        /* Adjust based on your line height */
        line-height: 1.5em;
        /* Adjust based on your font size */
    }
</style>
<main>
    <div class="headpara">

        <div class="detcontainer my-5">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <?php
                    echo $blogs['long_description'];
                    ?>
                </div>
            </div>

        </div>
     
    </div>
</main>

<?php
include_once ("./footer.php");
?>