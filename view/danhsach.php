<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <table border="1">
            <a href="index.php?page=them">them</a>
            <tr>
                <td>id</td>
                <td>ten</td>
                <td>mota</td>
                <td>gia</td>
                <td>sua</td>
                <td>xoa</td>
            </tr>
            <?php foreach ($danhsach as $row){ ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['ten'] ?></td>
                <td><?php echo $row['mota'] ?></td>
                <td><?php echo $row['gia'] ?></td>
                <td><a href="index.php?page=sua&id=<?php echo $row['id'] ?>">sua</a></td>
                <td><a href="index.php?page=xoa&id=<?php echo $row['id'] ?>">xoa</a></td>
            </tr>
                
            <?php }  ?>
    </body>
</html>
