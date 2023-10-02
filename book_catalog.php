<!DOCTYPE html>
<html>
<head>
    <title>Book Catalog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        h1 {
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: separate;
        }

        th, td {
            padding: 10px;
            border: 5px solid #ddd;
        }

        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php
    // Database connection settings
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "books";

    // Create a new PDO instance
    $db = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    // Function to fetch all books from the database
    function getAllBooks()
    {
        global $db;
        $stmt = $db->query("SELECT * FROM books");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Function to add a new book
    function addBook($title, $author, $price)
    {
        global $db;
        $stmt = $db->prepare("INSERT INTO books (title, author, price) VALUES (?, ?, ?)");
        $stmt->execute([$title, $author, $price]);
    }

    // Function to update an existing book
    function updateBook($id, $title, $author, $price)
    {
        global $db;
        $stmt = $db->prepare("UPDATE books SET title=?, author=?, price=? WHERE id=?");
        $stmt->execute([$title, $author, $price, $id]);
    }

    // Function to delete a book
    function deleteBook($id)
    {
        global $db;
        $stmt = $db->prepare("DELETE FROM books WHERE id=?");
        $stmt->execute([$id]);
    }

    // Handle form submissions
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["add"])) {
            $title = $_POST["title"];
            $author = $_POST["author"];
            $price = $_POST["price"];
            addBook($title, $author, $price);
        } elseif (isset($_POST["update"])) {
            $id = $_POST["id"];
            $title = $_POST["title"];
            $author = $_POST["author"];
            $price = $_POST["price"];
            updateBook($id, $title, $author, $price);
        } elseif (isset($_POST["delete"])) {
            $id = $_POST["id"];
            deleteBook($id);
        }
    }

    // Fetch all books from the database
    $books = getAllBooks();
    ?>

    <div class="container">
        <h1>Book Catalog</h1>

        <!-- Display the list of books -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book) : ?>
    <tr>
        <td><?php echo isset($book['id']) ? $book['id'] : ''; ?></td>
        <td><?php echo isset($book['title']) ? $book['title'] : ''; ?></td>
        <td><?php echo isset($book['author']) ? $book['author'] : ''; ?></td>
        <td><?php echo isset($book['price']) ? $book['price'] : ''; ?></td>
        <td>
            <form method="post" action="">
                <input type="hidden" name="id" value="<?php echo isset($book['id']) ? $book['id'] : ''; ?>">
                <button class="btn btn-danger" type="submit" name="delete">Delete</button>
            </form>
        </td>
    </tr>
<?php endforeach; ?>

            </tbody>
        </table>

        <h2>Add/Edit Book</h2>

        <!-- Book form -->
        <form method="post" action="">
            <div class="form-group">
                <label>ID:
                    (not required in Add book case)</label>
                <input type="text" class="form-control" name="id">
            </div>
            <div class="form-group">
                <label>Title:</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="form-group">
                <label>Author:</label>
                <input type="text" class="form-control" name="author" required>
            </div>
            <div class="form-group">
                <label>Price:</label>
                <input type="text" class="form-control" name="price" required>
            </div>
            <button class="btn btn-primary" type="submit" name="add">Add Book</button>
            <button class="btn btn-success" type="submit" name="update">Edit Book</button>
        </form>
    </div>

</body>
</html>
