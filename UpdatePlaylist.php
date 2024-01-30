<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Playlist</title>

    <style>
body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Update Playlist</h2>
        <form action="update_playlist.php" method="post">
            <label for="playlistId">Playlist ID:</label>
            <input type="text" id="playlistId" name="id" required>

            <label for="playlistName">Playlist Name:</label>
            <input type="text" id="playlistName" name="name" required>

            <label for="numberOfSongs">Number of Songs:</label>
            <input type="text" id="numberOfSongs" name="songs" required>

            <label for="playlistPhoto">Playlist Photo URL:</label>
            <input type="text" id="playlistPhoto" name="photo" required>

            <button type="submit">Update Playlist</button>
        </form>
    </div>
</body>
</html>
