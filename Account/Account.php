<?php namespace Apolune\Contracts\Account;

use Illuminate\Contracts\Auth\Authenticatable as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPassword;

interface Account extends Authenticatable, CanResetPassword {

	/**
	 * Retrieve the account traits.
	 *
	 * @return \Apolune\Contracts\Account\Traits\Account
	 */
	public function trait();

	/**
	 * Retrieve the account characters.
	 *
	 * @return \Apolune\Contracts\Account\Character
	 */
	public function characters();

	/**
	 * Retrieve the account name.
	 *
	 * @return string
	 */
	public function name();

	/**
	 * Retrieve the account email.
	 *
	 * @return string
	 */
	public function email();

}
