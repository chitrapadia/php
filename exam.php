<?php
$conn = mysqli_connect("localhost", "root", "", "crud_db", 3306);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* CREATE */
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, course)
            VALUES ('$name', '$email', '$course')";

    mysqli_query($conn, $sql);
}

/* DELETE */
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    mysqli_query($conn, "DELETE FROM students WHERE id=$id");
}

/* UPDATE */
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "UPDATE students
            SET name='$name', email='$email', course='$course'
            WHERE id=$id";

    mysqli_query($conn, $sql);
}

/* EDIT DATA */
$edit = false;

if (isset($_GET['edit'])) {
    $edit = true;
    $id = $_GET['edit'];

    $result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD Operation</title>
</head>

<body>

<h2>Student CRUD Operation</h2>

<form method="POST">

    <?php if ($edit) { ?>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <?php } ?>

    <label>Name:</label>
    <input type="text" name="name"
           value="<?php echo $edit ? $row['name'] : ''; ?>"
           required>
    <br><br>

    <label>Email:</label>
    <input type="email" name="email"
           value="<?php echo $edit ? $row['email'] : ''; ?>"
           required>
    <br><br>

    <label>Course:</label>
    <input type="text" name="course"
           value="<?php echo $edit ? $row['course'] : ''; ?>"
           required>
    <br><br>

    <?php if ($edit) { ?>
        <input type="submit" name="update" value="Update">
    <?php } else { ?>
        <input type="submit" name="add" value="Add Student">
    <?php } ?>

</form>

<hr>

<h3>Student List</h3>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Action</th>
</tr>

<?php

/* READ */
$result = mysqli_query($conn, "SELECT * FROM students");

while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['course']; ?></td>

    <td>
        <a href="index.php?edit=<?php echo $row['id']; ?>">
            Edit
        </a>

        |

        <a href="index.php?delete=<?php echo $row['id']; ?>"
           onclick="return confirm('Are you sure?')">
            Delete
        </a>
    </td>
</tr>

<?php
}
?>

</table>

</body>
</html>