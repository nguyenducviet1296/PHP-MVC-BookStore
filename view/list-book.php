<?php
include 'layout/header.php'
?>
<?php include_once '../controller/bookController.php' ?>
    <!-- /#page-wrapper -->
    <div id="page-wrapper">
        <div>
            <h1 style="margin-top: 0%">List book</h1>
            <a href="?act=add-book">Add new book</a>
            <div style="margin-top:20px" class="custom-search-form">
                <input id="txt-search" type="text" class="form-control" placeholder="Search book...">
            </div>
            <table class="table table-hover" id="default-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Published year</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody id="list-main">
                <?php include_once 'book-list.php' ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /#page-wrapper -->
    <script>
        $(document).ready(function () {
            $("#txt-search").keyup(function () {
                var txt = $(this).val();
                $.get('bookController.php?act=search-book&data='+txt, {data: txt}, function (data) {
                        $("#list-main").html(data);
                })
            });
        });
    </script>
<?php include 'layout/footer.php' ?>