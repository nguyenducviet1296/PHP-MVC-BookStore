<?php
foreach ($listBook as $book): ?>
    <tr>
        <th><?php echo $book['ID']; ?></th>
        <th><?php echo $book['NAME']; ?></th>
        <th><?php echo $book['AUTHOR']; ?></th>
        <th><?php echo $book['CATEGORY']; ?></th>
        <th><?php echo $book['PublishedYear']; ?></th>
        <th><a class="fa fa-pencil-square-o" style="font-size: 20px;text-decoration: none" href="bookController.php?act=edit-book&id=<?php echo $book['ID'] ?>"></a>
        </th>
        <th><a class="fa fa-trash" style="font-size: 20px;text-decoration: none" onclick="return confirm('Bạn chắc chắn muốn xóa cuốn sách này?');"
               href="bookController.php?act=delete-book&id=<?php echo $book['ID'] ?>"></a>
        </th>
    </tr>
<?php endforeach; ?>