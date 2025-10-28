<?php
class Event {
    private $conn;
    private $table = "events";

    public $id;
    public $title;
    public $description;
    public $date;
    public $location;
    public $image;

    public function __construct($db){
        $this->conn = $db;
    }

    public function readAll(){
        $query = "SELECT * FROM " . $this->table . " ORDER BY date DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create(){
        $query = "INSERT INTO " . $this->table . " (title, description, date, location, image) 
                  VALUES (:title, :description, :date, :location, :image)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':date', $this->date);
        $stmt->bindParam(':location', $this->location);
        $stmt->bindParam(':image', $this->image);
        return $stmt->execute();
    }
}
?>
