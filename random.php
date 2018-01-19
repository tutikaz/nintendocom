<?php
    date_default_timezone_set('Europe/London');
    include 'connect.php';
    include 'comments.php';
?>

<head>
<link rel="stylesheet" type="text/css" href="styles.css">
    <title>Random</title>
    <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/273214131614515201/402588456183791626/nintendocomlogo.png" />
</head>

<body>

<ul>
            <li><a href="index.php">Nintendocom</a></li>
            <li><a href="random.php">Random</a></li>
            <li><a href="about.php">About</a></li>
        </ul>

        <h1>Random Board</h1>
        <p>Post anything here.</p>

<?php
echo "<form method='POST' action='".setComments($conn)."'>
    <input type='hidden' name='uid' value='Anonymii'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br>
    <button type='submit'name='commentSubmit'>Comment</button>

</form>";

getComments($conn);
?>



</body>