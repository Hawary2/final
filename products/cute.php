<?php
require 'cutes.php';

if (isset($_POST["submit"])) {
    // Ensure proper handling of data, including sanitization and validation
    $data = [
        "title" => $_POST["title"],
        "description" => $_POST["description"],
        "cover" => $_POST["cover"],
        "content" => $_POST["content"],
        "buy_now_link" => $_POST["buy_now_link"] // New field for Buy Now link
    ];

    if (love($data) > 0) {
        echo "
        <script>
        alert('Cool.. your post is updated');
        document.location.href = 'cuteproducts.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Oops.. can't update data 😭');
        document.location.href = 'cuteproducts.php';
        </script>
        ";
    }
}
?>

<?php include 'headproducts.php' ?>
<div class="col-12 p-3">
    <div class="card p-3 p-md-5">
        <h3>Add New Post</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="title">Title :</label>
            <input class="form-control" type="text" name="title" id="title" required>
            <label for="description">Description :</label>
            <input class="form-control" type="text" name="description" id="description" required>
            <label for="cover">Cover img :</label>
            <input class="form-control" type="url" name="cover" id="cover">
            <label for="content">Content :</label>
            <textarea class="form-control" rows="5" type="text" name="content" id="content"></textarea>
            <label for="buy_now_link">Buy Now Link :</label>
            <input class="form-control" type="url" name="buy_now_link" id="buy_now_link"> <!-- New field for Buy Now link -->

            <div class="p-1 text-end">
                <button class="float-end btn btn-dark col-12 col-md-4 btn-lg" type="submit" name="submit">Publish product</button>
            </div>
        </form>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://axcora.my.id/pico/cuteproducts/themes/cuteproductss/css/styles.css" rel="stylesheet"/>
    </div>
</div>
<?php include 'footer.php' ?>
