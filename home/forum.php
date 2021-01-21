<?php
    $page_title = "PHP - Forum";

    include('includes/header.html');

    require('../connect_db.php');

    $sql = "SELECT * FROM forum";
    $result = mysqli_query($dbc, $sql);

    if(mysqli_num_rows($result) > 0){

        echo '<table><tr><th>Автор</th><th>Тема</th><th id="msg">Сообщение</th></tr>'
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            echo '<tr><td>'. 
                $row['first_name'].' '. 
                $row['last_name']. '<br>'.
                $row['post_date'].'</td><td>'.
                $row['subject'].'</td><td>'.
                $row['message'].'</td></tr>'
        }

        echo '</table>'

    } else {
        echo '<strong>В настоящее время сообщений нет</strong>';
    }

    echo '<p><a href="forum.php">Написать сообщение</p>';

    mysqli_close($dbc);

    include('includes/footer.html');