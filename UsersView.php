<?php
    class UsersView {
        
        public function displayUsers($users) {
            echo '<ul>';
            foreach($users as $user) {
                echo '<li>' . $user . '</li>';
            }
            echo '</ul>';
        }
    }
?>
