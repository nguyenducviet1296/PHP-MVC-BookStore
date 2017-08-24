<?php include('layout/header.php') ?>
<div id="page-wrapper">
    <div class="row">
        <h1 style="margin-top: 0%">Add new category</h1>
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <form name="act" action="" method="POST">

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>

                <input type="submit" value="Add" class="btn btn-primary" name="act">
            </form>
        </div>
    </div>
</div>
<?php include('layout/footer.php') ?>
