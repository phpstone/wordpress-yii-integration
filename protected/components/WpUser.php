<?php
class wpUser extends CApplicationComponent implements IWebUser, IApplicationComponent {
        public function init ()
        {
            parent::init();
        }
        function checkAccess ($operation, $params = array()) {
            return current_user_can($operation);
        }
        function getId() {
            return get_current_user_id();
        }
        function getIsGuest () {
            $is_user_logged_in = is_user_logged_in();
            return ! $is_user_logged_in;
        }
        function getName () {
            $name = wp_get_current_user()->user_login;
            return $name;
        }
        public function loginRequired()
        {
            auth_redirect();
        }
    }
?>
