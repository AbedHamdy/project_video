<!DOCTYPE html>
<html>
    <head>
        <title>إضافة فيديو</title>
    </head>
    <body>
        <h1>إضافة فيديو جديد</h1>

        <form action="/videos" method="POST">
            @csrf

            <label for="link">Link:</label><br>
            <input type="text" id="link" name="link"><br><br>

            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title"><br><br>

            <label for="description">Description:</label><br>
            <textarea id="description" name="description"></textarea><br><br>

            <label for="feature">Feature:</label><br>
            <input type="text" id="feature" name="feature"><br><br>

            <label for="user_name">User Name:</label><br>
            <input type="text" id="user_name" name="user_name"><br><br>

            <label for="content">Content:</label><br>
            <textarea id="content" name="content"></textarea><br><br>

            <label for="category_id">Category ID:</label><br>
            <input type="number" id="category_id" name="category_id"><br><br>

            <button type="submit">إضافة</button>
        </form>
    </body>
</html>
