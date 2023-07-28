<?php
    require_once 'UsersController.php';
    require_once 'UsersModel.php';
    require_once 'UsersView.php';
    
    $controller = new UsersController();
    $model = new UsersModel();
    $view = new UsersView();
    
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
        switch($action) {
            case 'list':
                $controller->listUsers($model, $view);
                break;
            case 'add':
                $controller->addUser($model);
                break;
            case 'delete':
                $controller->deleteUser($model);
                break;
            default:
                break;
        }
    }
    else {
        $controller->listUsers($model, $view);
    }
?>