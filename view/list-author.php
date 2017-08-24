<?php
include 'layout/header.php'
?>
<?php include_once '../controller/authorController.php' ?>
    <!-- /#page-wrapper -->
    <div id="page-wrapper">
        <div>
            <h1 style="margin-top: 0%">List author</h1>
            <a href="?act=add-author">Add new author</a>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Birth of date</th>
                    <th>Address</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($listAuthor as $author): ?>
                    <tr>
                        <th><?php echo $author['id']; ?></th>
                        <th><?php echo $author['name']; ?></th>
                        <th><?php echo $author['email']; ?></th>
                        <th><?php echo $author['phoneNumber']; ?></th>
                        <th><?php echo $author['birthDate']; ?></th>
                        <th><?php echo $author['address']; ?></th>
                        <th><a class="fa fa-pencil-square-o" style="font-size: 20px;text-decoration: none" href="authorController.php?act=edit-author&id=<?php echo $author['id'] ?>">
                            </a>
                        </th>
                        <th><a class="fa fa-trash" style="font-size: 20px;text-decoration: none" onclick="return confirm('Bạn chắc chắn muốn xóa tác giả này?');"
                               href="authorController.php?act=delete-author&id=<?php echo $author['id'] ?>"></a></th>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /#page-wrapper -->
<?php include 'layout/footer.php' ?>