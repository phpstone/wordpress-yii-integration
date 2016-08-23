<?php
//require_once ABSPATH . WPINC . '/class-phpass.php';
/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	private $_id;

	public function authenticate()
	{
		$username=$this->username;
		$user=Users::model()->find('user_login=?',array($username));
        
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(!wp_check_password($this->password, $user->user_pass, $user->ID))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$user->ID;
			$this->username=$user->user_login;
			$this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode==self::ERROR_NONE;
	}

	public function getId()
	{
		return $this->_id;
	}
}

