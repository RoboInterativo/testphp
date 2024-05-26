<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <?php
    $link = mysqli_connect("localhost", "test", "secret","employees");

    if ($link == false){
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    }
    else {
        // print("Соединение установлено успешно");
    }

    /* ysql> select * from departments;
    +---------+--------------------+
    | dept_no | dept_name
    */
    // make foo the current db

    /*
    $db_selected = mysqli_select_db('employees', $link);
    if (!$db_selected) {
        die ('Can\'t use foo : ' . mysql_error());
    }
    */



    $sql = 'SELECT * FROM departments';

    $result = mysqli_query($link, $sql);
?>
<div class="container text-center">
  <div class="row">
    <div class="col-1">
      Column
    </div>
    <div class="col-10">


    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Название</th>

        </tr>
      </thead>
      <tbody>
<?php
        while ($row = mysqli_fetch_array($result)) {
            print("<tr>   <td>" . $row['dept_no']  . "</td>");
            print(" <td>" . $row['dept_name']  . "</td></tr>");


        }
?>


          <td>Mark</td>

        </tr>

      </tbody>
    </table>
  </div>
  <div class="col-1">
    Column
  </div>
</div>
</div>

<?php


    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
