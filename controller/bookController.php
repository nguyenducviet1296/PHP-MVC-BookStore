<?php
include_once '../model/BookModel.php';
include_once '../default.php';
$act = isset($_GET['act']) ? $_GET['act'] : $_POST['act'];
switch ($act) {
    case 'show-all-book':
        $listBook = getAllBook();
        include_once '../view/list-book.php';
        break;

    case 'add-book':
        if (isset($_POST['act'])) {
            $name = $_POST['name'];
            $idAu = $_POST['author'];
            $idCate = $_POST['category'];
            $pubYear = $_POST['publishyear'];
            addBook($name, $idAu, $idCate, $pubYear);
            redirect('bookController.php?act=show-all-book');
        }
        include_once '../view/add-book.php';
        break;

    case 'edit-book':
        $id = $_GET['id'];
        if (isset($_POST['act'])) {
            $name = $_POST['name'];
            $idAu = $_POST['author'];
            $idCate = $_POST['category'];
            $pubYear = $_POST['publishyear'];
            editBook($id, $name, $idAu, $idCate, $pubYear);
            redirect('bookController.php?act=show-all-book');
        } else {
            $book = getBookbyID($id);
            include_once '../view/edit-book.php';
        }
        break;

    case 'delete-book':
        $id = $_GET['id'];
        deleteBook($id);
        redirect('bookController.php?act=show-all-book');
        break;

    case 'search-book':
        $data = isset($_GET['data']) ? $_GET['data'] : '';
        $list = searchBook($data);
        ?>
        <?php foreach ($list as $boo): ?>
        <tr>
            <th><?php echo $boo['ID']; ?></th>
            <th><?php echo $boo['NAME']; ?></th>
            <th><?php echo $boo['AUTHOR']; ?></th>
            <th><?php echo $boo['CATEGORY']; ?></th>
            <th><?php echo $boo['PublishedYear']; ?></th>
            <th><a class="fa fa-pencil-square-o" style="font-size: 20px;text-decoration: none"
                   href="bookController.php?act=edit-book&id=<?php echo $boo['ID'] ?>">
                </a>
            </th>
            <th><a class="fa fa-trash" style="font-size: 20px;text-decoration: none"
                   onclick="return confirm('Bạn chắc chắn muốn xóa cuốn sách này?');"
                   href="bookController.php?act=delete-book&id=<?php echo $boo['ID'] ?>"></a>
            </th>
        </tr>
        <<?php endforeach; ?>
        <?php break;
} ?>