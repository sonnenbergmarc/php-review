<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <!-- <h1>Recommended Books</h1> -->

    <?php
        $name = "Dark Matter";
        $read = TRUE;
        if ($read) {
            $message = "You have read \"$name\"";
        } else {
            $message = "You have NOT read \"$name\"";
        };
        // $books = [
        //     "Do Androids Dream of Electric Sheep",
        //     "The Langoliers",
        //     "Hail Mary"
        // ];
    ?>
    <!-- <ul>
        <php foreach ($books as $book) {
            //
        } ?>
    </ul> -->
    <h1>
        <?= $message; ?>
    </h1>
</body>
</html>