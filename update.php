<form action="update_process.php" method="post">
        <p>
            <input type="hidden" name="old_title" method="post" value="<?php echo $_GET["id"] ?>">
            <input type="text" name="title" placeholder="Title" value="<?php echo $_GET["id"]; ?>">
        </p>
        <p>
            <textarea name="description" placeholder="description"><?php echo file_get_contents("data/".$_GET["id"]); ?> </textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>