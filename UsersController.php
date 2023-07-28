<?php
    class UsersController {
        
        public function listUsers($model, $view) {
            $users = $model->getUsers();
            $view->displayUsers($users);
        }
        
        
        public function addUser($model) {
        
        }
        
       
        public function deleteUser($model) {
        
        }
    }
?>
