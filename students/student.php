<?php
namespace classes;
use \PDO;

class classes
{
	protected $id;
	protected $first_name;
	protected $last_name;
	protected $email;
    protected $contact_number;
    protected $code;

	// Database Connection Object
	    //protected $connection;

/*  public function __construct()
	{
		$this->task = $task;
		$this->is_completed = $is_completed;
	}
*/
	public function getId()
	{
		return $this->id;
	}

	public function getFirstName()
	{
		return $this->first_name;
	}

    public function getLastName()
	{
		return $this->last_name;
	}

	public function getEmail()
	{
		return $this->email;
	}
    
    public function getNumber()
	{
		return $this->description;
	}

    public function getAssignedTeacher($teacher_id)
	{
		return $this->teacher_id;
	}

	public function getById($id)
	{
		try {
			$sql = 'SELECT * FROM pdc10_classes WHERE id=:id';
			$statement = $this->connection->prepare($sql);
			$statement->execute([
				':id' => $id
			]);

			$row = $statement->fetch();
			$this->id = $row['id'];
			$this->name = $row['name'];
			$this->code = $row['code'];
			$this->description = $row['description'];
			$this->assigned_teacher = $row['assigned_teacher'];

		} catch (Exception $e) {
			error_log($e->getMessage());
		}
	}

	public function setConnection($connection)
	{
		$this->connection = $connection;
	}

	public function add_class()
	{
		try {
			$sql = "INSERT INTO pdc10_classes SET name=:name, description=:description, code=:code";
			$statement = $this->connection->prepare($sql);

			return $statement->execute([
				':name' => $this->getName(),
				':description' => $this->getDescription(),
				':code' => $this->getCode(),
			]);

		} catch (Exception $e) {
			error_log($e->getMessage());
		}
	}

	public function update($name, $description, $code)
	{
		try {
			$sql = 'UPDATE pdc10_classes SET name=?, description=?, code=? WHERE id=?';
			$statement = $this->connection->prepare($sql);
			$statement->execute([
				$name,
				$description,
				$code,
				$this->getId()
			]);
			$this->name = $name;
			$this->description = $description;
			$this->name = $code;
		} catch (Exception $e) {
			error_log($e->getMessage());
		}
	}

	public function delete()
	{
		try {
			$sql = 'DELETE FROM pdc10_classes WHERE id=?';
			$statement = $this->connection->prepare($sql);
			$statement->execute([
				$this->getId()
			]);
		} catch (Exception $e) {
			error_log($e->getMessage());
		}
	}

	public function getAll()
	{
		try {
			$sql = 'SELECT * FROM pdc10_classes';
			$data = $this->connection->query($sql)->fetchAll();
			return $data;
		} catch (Exception $e) {
			error_log($e->getMessage());
		}
	}
}