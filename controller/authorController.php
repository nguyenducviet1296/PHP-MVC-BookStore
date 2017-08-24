<?php
include_once '../model/AuthorModel.php';
include_once '../default.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
} else {
    $act = $_POST['act'];
}

switch ($act) {
    case 'show-all-author':
        $listAuthor = getAllAuthor();
        include_once '../view/list-author.php';
        break;

    case 'add-author':
        if (isset($_POST['act'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $birthDate = $_POST['birthDate'];
            $address = $_POST['address'];
            addAuthor($name, $email, $phone, $birthDate, $address);
            redirect('authorController.php?act=show-all-author');
        }
        include_once '../view/add-author.php';
        break;

    case 'edit-author':
        $auId = $_GET['id'];
        if (isset($_POST['act'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $birthDate = $_POST['birthDate'];
            $address = $_POST['address'];
            editAuthor($auId, $name, $email, $phone, $birthDate, $address);
            redirect('authorController.php?act=show-all-author');
        } else {
            $author = getAuthorById($auId);
            include_once '../view/edit-author.php';
        }
        break;

    case 'delete-author':
        $auId = $_GET['id'];
        deleteAuthor($auId);
        redirect('authorController.php?act=show-all-author');
        break;
}