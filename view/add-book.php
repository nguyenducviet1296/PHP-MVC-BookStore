<?php include('layout/header.php') ?>
<div id="page-wrapper">
    <div class="row">
        <h1 style="margin-top: 0%">Add new book</h1>
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <form name="act" action="" method="POST">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <select name="author">
                        <option value="">--Select Author--</option>
                        <?php
                        global $connect;
                        $query = 'SELECT id,name FROM authors';
                        $result = $connect->query($query);
                        $list = $result->fetchAll();
                        foreach ($list as $au) {
                            ?>
                            <option value="<?php echo $au['id']; ?>">
                                <?php echo $au['name'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select name="category">
                        <option value="">--Select Category--</option>
                        <?php
                        global $connect;
                        $query = 'SELECT id,name FROM categories';
                        $result = $connect->query($query);
                        $list = $result->fetchAll();
                        foreach ($list as $cate) {
                            ?>
                            <option value="<?php echo $cate['id']; ?>">
                                <?php echo $cate['name'] ?>
                            </option>
                            <?php
                        } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Published Year</label>
                    <input type="text" name="publishyear" class="form-control" placeholder="Published year">
                </div>
                <input type="submit" value="Add" class="btn btn-primary" name="act">
            </form>
        </div>
    </div>
</div>
<?php include('layout/footer.php') ?>
