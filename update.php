<?php
require_once 'dbconfig.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"));

if (!$data) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid input data'
    ]);
    exit;
}

$id = $data->id ?? 0;
$firstname = trim($data->firstname ?? '');
$lastname = trim($data->lastname ?? '');

// Validation
$errors = [];
if (empty($id)) $errors[] = "Employee ID is required";
if (empty($firstname)) $errors[] = "First name is required";
if (empty($lastname)) $errors[] = "Last name is required";

if (!empty($errors)) {
    echo json_encode([
        'status' => 'error',
        'message' => implode(', ', $errors)
    ]);
    exit;
}

try {
    // Check if employee exists
    $stmt = $db_con->prepare("SELECT id FROM members WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    if ($stmt->rowCount() === 0) {
        throw new Exception("Employee not found");
    }

    $stmt = $db_con->prepare("UPDATE members SET firstname=:firstname, lastname=:lastname WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    
    if ($stmt->execute()) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Employee updated successfully'
        ]);
    } else {
        throw new Exception("Failed to update employee");
    }
} catch(PDOException $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Database error: ' . $e->getMessage()
    ]);
} catch(Exception $e) {
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
}
?> 