<?php
include 'layout/header.php'
?>
<?php include_once '../controller/categoryController.php' ?>
    <!-- /#page-wrapper -->
    <div id="page-wrapper">
        <div>
            <h1 style="margin-top: 0%">List category</h1>
            <a href="?act=add-category">Add new category</a>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($listCategory as $category): ?>
                    <tr>
                        <th><?php echo $category['id']; ?></th>
                        <th><?php echo $category['name']; ?></th>
                        <th><a class="fa fa-pencil-square-o" style="font-size: 20px;text-decoration: none" href="categoryController.php?act=edit-category&id=<?php echo $category['id'] ?>">
                            </a>
                        </th>
                        <th><a class="fa fa-trash" style="font-size: 20px;text-decoration: none" onclick="return confirm('Bạn chắc chắn muốn xóa danh mục này?');"
                               href="categoryController.php?act=delete-category&id=<?php echo $category['id'] ?>"></a></th>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /#page-wrapper -->
<?php include 'layout/footer.php' ?>