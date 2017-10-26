<?php 

class Chest {

	protected $lock;
	protected $isClosed;

	// this type-hinting => gives an error if not an instance of Lock
	public function __construct(Lock $lock) {
		$this->lock = $lock;
	}




	public function close($lock = true) {

		if($lock === true) {
			$this->lock->lock();	
		}

		$this->isClosed = true;

		echo "Closed<br>";
		

	}


	public function open() {

		if($this->lock->isLocked()) {
			$this->lock->unlock();
		}

		$this->isClosed = false;

		echo "Open<br>";
	}

	public function isClosed() {
		return $this->isClosed;
	}


}



 ?>