<?php
include_once 'Database.php';

class Event
{
    private $conn;
    private $table_name = "events";

    public $id_event;
    public $name_event;
    public $date;
    public $location;
    public $description;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function create()
    {
        $query = "INSERT INTO " . 
        $this->table_name . " SET name_event=:name_event, date=:date, location=:location, description=:description";
        $stmt = $this->conn->prepare($query);

        $this->name_event = htmlspecialchars(strip_tags($this->name_event));
        $this->date = htmlspecialchars(strip_tags($this->date));
        $this->location = htmlspecialchars(strip_tags($this->location));
        $this->description = htmlspecialchars(strip_tags($this->description));

        $stmt->bindParam(":name_event", $this->name_event);
        $stmt->bindParam(":date", $this->date);
        $stmt->bindParam(":location", $this->location);
        $stmt->bindParam(":description", $this->description);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function read()
    {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function readOne() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id_event = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id_event);
        $stmt->execute();
        return $stmt;
    }

    public function update()
    {
        $query = "UPDATE " . $this->table_name . " SET name_event = :name_event, date = :date, location = :location, description = :description WHERE id_event = :id_event";
        $stmt = $this->conn->prepare($query);

        $this->name_event = htmlspecialchars(strip_tags($this->name_event));
        $this->date = htmlspecialchars(strip_tags($this->date));
        $this->location = htmlspecialchars(strip_tags($this->location));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->id_event = htmlspecialchars(strip_tags($this->id_event));

        $stmt->bindParam(':name_event', $this->name_event);
        $stmt->bindParam(':date', $this->date);
        $stmt->bindParam(':location', $this->location);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':id_event', $this->id_event);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delete()
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_event = :id_event";
        $stmt = $this->conn->prepare($query);

        $this->id_event = htmlspecialchars(strip_tags($this->id_event));

        $stmt->bindParam(':id_event', $this->id_event);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function renumber(){
    // Create a temporary table to hold renumbered data
    $tempTableQuery = "
        CREATE TEMPORARY TABLE temp_events AS
        SELECT @rownum := @rownum + 1 AS id_event, name_event, date, location, description
        FROM (SELECT @rownum := 0) r, " . $this->table_name . "
        ORDER BY id_event ASC";
    $this->conn->exec($tempTableQuery);

    // Truncate original table
    $truncateQuery = "TRUNCATE TABLE " . $this->table_name;
    $this->conn->exec($truncateQuery);

    // Insert renumbered data back into the original table
    $insertQuery = "INSERT INTO " . $this->table_name . " (id_event, name_event, date, location, description)
                    SELECT id_event, name_event, date, location, description FROM temp_events";
    $this->conn->exec($insertQuery);
    }

}
?>
