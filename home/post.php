<?php  
    $page_title = "PHP - Публикации сообщения";

    include('includes/header.html');

    echo '<form action="process.php" method="POST" accept-charset="UTF-8">
    Имя: <input type="text" name="first_name">
    Фамилия: <input type="text" name="last_name">
    <p> Тема:<br><input type="text" name="subject" size="64"></p>
    <p> Сообщение:<br><textarea name="message" rows="5" cols="50"></textarea></p>
    <p><input type="submit" value="Отрпавить"></p>
    </form>';

    echo '<p><a href="forum.php">Вернуться к форуму</a></p>';

    include('includes/footer.html');