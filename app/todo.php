<?php

class Todo {
	private $id;
	private $todo;
	private $state;

	public function __construct($id, $todo, $state) {
		$this->id = $id;
		$this->todo = $todo;
		$this->status = $state;
	}

	public function getId() {
		return $this->id;
	}

	public function getTodo() {
		return $this->todo;
	}

	public function getStatus() {
		return $this->state;
	}
}

?>