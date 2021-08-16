<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>한마디</title>
</head>
<body>
    <h2>한마디</h2>

    <a href="create.php">create</a>

        <?php
        $i = 0;
        $list = scandir("./data");
        while($i < count($list)){
            if($list[$i] != "."){
                if($list[$i] != ".."){
                    echo "<p>";
                    echo "$list[$i] : ";
                    echo file_get_contents("data/".$list[$i]); 
                    echo "  / <a href=\"update.php?id=$list[$i]\">update</a>";
                    
                    echo "<form action=\"delete_process.php\" method=\"post\">
                                <input type=\"hidden\" name=\"id\" value=\"$list[$i]\">
                                <input type=\"submit\" value=\"delete\">
                          </form>";
                    
                    echo "</p>";    
                }
            }
            $i += 1;
        }
        ?>

</body>
</html>