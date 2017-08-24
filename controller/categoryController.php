<?php
include_once '../model/CategoryModel.php';
include_once '../default.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
} else {
    $act = $_POST['act'];
}

switch ($act) {
    case 'show-all-category':
        $listCategory = getAllCategory();
        include_once '../view/list-category.php';
        break;

    case 'add-category':
        if (isset($_POST['act'])) {
            $name = $_POST['name'];
            addCategory($name);
            redirect('categoryController.php?act=show-all-category');
        }
        include_once '../view/add-category.php';
        break;

    case 'edit-category':
        $catId = $_GET['id'];
        if (isset($_POST['act'])) {
            $name = $_POST['name'];
            editCategory($catId, $name);
            redirect('categoryController.php?act=show-all-category');
        } else {
            $category = getCategoryById($catId);
            include_once '../view/edit-category.php';
        }
        break;

    case 'delete-category':
        $catId = $_GET['id'];
        deleteCategory($catId);
        redirect('categoryController.php?act=show-all-category');
        break;
}
