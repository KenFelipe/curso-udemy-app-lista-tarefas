<?php

class TodoService {
	private $conn;
	private $todo;

	public function __construct(\PDO $conn) {
		$this->conn = $conn;
	}

	public function setTodo($todo) {
		$this->todo = $todo;
	}

	public function retriveAll() {
		$query = '
			SELECT
				todos.id, todos.todo, state.description as state
			FROM 
				todos LEFT JOIN state ON todos.state = state.state
		';

		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_OBJ);
	}

	public function retrivePending() {
		$query = "
			SELECT
				todos.id, todos.todo, state.description as state
			FROM 
				todos LEFT JOIN state ON todos.state = state.state
			WHERE
				state.description = 'pending'
		";

		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_OBJ);
	}
}

?>