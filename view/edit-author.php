<?php include('layout/header.php') ?>
    <div id="page-wrapper">
        <div class="row">
            <h1 style="margin-top: 0%">Edit author</h1>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <form name="act" action="" method="POST">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $author['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $author['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Phone number</label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone number" value="<?php echo $author['phoneNumber'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Birth of date</label>
                        <input type="text" name="birthDate" class="form-control" placeholder="yyyy/dd/MM" value="<?php echo $author['birthDate'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Name" value="<?php echo $author['address'] ?>">
                    </div>
                    <input type="submit" value="Update" class="btn btn-primary" name="act">
                </form>
            </div>
        </div>
    </div>
<?php include('layout/footer.php') ?>
<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Duc Viet
 * Date: 22/08/2017
 * Time: 9:28 SA
 */