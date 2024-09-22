<?php
include 'db.php';

// Add a task
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task'])) {
    $task = $_POST['task'];
    $priority = $_POST['priority'];
    $due_date = $_POST['due_date'];

    if (!empty($task)) {
        $stmt = $conn->prepare("INSERT INTO tasks (task, priority, due_date) VALUES (?, ?, ?)");
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }
        $stmt->bind_param('sss', $task, $priority, $due_date);
        $stmt->execute();
        $stmt->close();
    }
}

// Mark task as completed
if (isset($_GET['complete'])) {
    $id = intval($_GET['complete']);
    $stmt = $conn->prepare("UPDATE tasks SET is_completed = 1 WHERE id = ?");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }
    $stmt->bind_param('i', $id);
    if (!$stmt->execute()) {
        die('Execute failed: ' . htmlspecialchars($stmt->error));
    }
    $stmt->close();
}

// Edit task
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_task_id'])) {
    $task_id = $_POST['edit_task_id'];
    $new_task = $_POST['edit_task'];
    $stmt = $conn->prepare("UPDATE tasks SET task = ? WHERE id = ?");
    $stmt->bind_param('si', $new_task, $task_id);
    $stmt->execute();
    $stmt->close();
}

// Delete task
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->close();
}

// Retrieve all tasks
$result = $conn->query("SELECT * FROM tasks ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>

        <!-- Tab links -->
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'AddTask')">Add Task</button>
            <button class="tablinks" onclick="openTab(event, 'ViewTasks')">View/Edit Tasks</button>
            <button class="tablinks" onclick="openTab(event, 'CompletedTasks')">Completed Tasks</button>
        </div>

        <!-- Add Task Tab -->
        <div id="AddTask" class="tab-content active">
            <h2>Add Task</h2>
            <form action="index.php" method="POST">
                <input type="text" name="task" placeholder="Enter a new task..." required>
                <input type="text" name="priority" placeholder="Priority (Low, Medium, High)" required>
                <input type="date" name="due_date" required>
                <button type="submit">Add Task</button>
            </form>
        </div>

        <!-- View/Edit Tasks Tab -->
        <div id="ViewTasks" class="tab-content">
            <h2>View / Edit Tasks</h2>
            <ul class="task-list">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <?php if (!$row['is_completed']): ?>
                        <li>
                            <?= htmlspecialchars($row['task']) ?> 
                            <form action="index.php" method="POST" class="edit-form">
                            <input type="hidden" name="edit_task_id" value="<?= $row['id'] ?>">
                                <input type="text" name="edit_task" value="<?= htmlspecialchars($row['task']) ?>" required>
                                <button type="submit">Update</button>
                            </form>
                            <a href="index.php?complete=<?= $row['id'] ?>" class="complete-btn">Mark as Completed</a>
                            <a href="index.php?delete=<?= $row['id'] ?>" class="delete-btn">Delete</a>
                        </li>
                    <?php endif; ?>
                <?php endwhile; ?>
            </ul>
        </div>

        <!-- Completed Tasks Tab -->
        <div id="CompletedTasks" class="tab-content">
            <h2>Completed Tasks</h2>
            <ul class="task-list">
                <?php
                $completed_result = $conn->query("SELECT * FROM tasks WHERE is_completed = 1 ORDER BY created_at DESC");
                while ($row = $completed_result->fetch_assoc()):
                ?>
                    <li class="completed">
                        <?= htmlspecialchars($row['task']) ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <script>
        // Function to open a tab
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;

            // Hide all tab contents
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Remove active class from all tab links
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab and add an "active" class to the clicked tab
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
