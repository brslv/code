<?php 

class Profile
{
	private $user;

	private $photoUrl;

	public function __construct(User $user, $photoUrl)
	{
		$this->user = $user;
		$this->photoUrl = $photoUrl;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function getName()
	{
		if (isset($this->user)) {
			return $this->user->getName();
		}

		return null;
	}

	public function getPhotoUrl()
	{
		return $this->photoUrl;
	}
}
