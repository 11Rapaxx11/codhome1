<?php
    class UsersView {
        // Метод для отображения списка пользователей
        public function displayUsers($users) {
            echo '<ul>';
            foreach($users as $user) {
                echo '<li>' . $user . '</li>';
            }
            echo '</ul>';
        }
    }
?>