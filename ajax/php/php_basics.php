//На SELECT

// Выбрать работника с id = 3 //
<?php
    $query = "SELECT * FROM workers WHERE id=3";
?>

//Выбрать работников с зарплатой 1000$.
<?php
    $query = "SELECT * FROM workers WHERE salary=1000";
?>

//Выбрать работников в возрасте 23 года.
<?php
    $query = "SELECT * FROM workers WHERE age=23";
?>

//Выбрать работников с зарплатой более 400$.
<?php
    $query = "SELECT * FROM workers WHERE salary>400";
?>

//Выбрать работников с зарплатой равной или большей 500$.
<?php
    $query = "SELECT * FROM workers WHERE salary>=500";
?>

//Выбрать работников с зарплатой НЕ равной 500$.
<?php
    $query = "SELECT * FROM workers WHERE salary!=500";
?>

//Выбрать работников с зарплатой равной или меньшей 900$.
<?php
    $query = "SELECT * FROM workers WHERE salary<=900";
?>

//Узнайте зарплату и возраст Васи.
<?php
    $query = "SELECT * FROM workers WHERE name='Вася'";
?>

//На OR и AND

//Выбрать работников в возрасте от 25 (не включительно) до 28 лет (включительно).
<?php
    $query = "SELECT * FROM workers WHERE age>25 AND age<=28";
?>

//Выбрать работника Петю.
<?php
    $query = "SELECT * FROM workers WHERE name='Петя'";
?>

//Выбрать работников Петю и Васю.
<?php
    $query = "SELECT * FROM workers WHERE name='Петя' OR name='Вася'";
?>

//Выбрать всех, кроме работника Петя.
<?php
    $query = "SELECT * FROM workers WHERE name!='Петя'";
?>

//Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$.
<?php
    $query = "SELECT * FROM workers WHERE age=27 OR salary=1000";
?>

//Выбрать всех работников в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000$.
<?php
    $query = "SELECT * FROM workers WHERE age>23 AND age<27 OR salary>400 AND salary<1000";
?>

//Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$.
<?php
    $query = "SELECT * FROM workers WHERE age=27 OR salary!=400";
?>

//На INSER

//Добавьте нового работника Никиту, 26 лет, зарплата 300$. Воспользуйтесь первымсинтаксисом.
<?php
    $query = "INSERT INTO workers SET name='Никита', age=26, salary=300";
?>

//Добавьте нового работника Светлану с зарплатой 1200$. Воспользуйтесь вторымсинтаксисом
<?php
    $query = "INSERT INTO workers (name, salary) VALUES ('Светлана', 1200)";
?>

//Добавьте двух новых работников одним запросом: Ярослава с зарплатой 1200$ и возрастом 30,
//Петра с зарплатой 1000$ и возрастом 31.
<?php
    INSERT INTO workers (name, age, salary)
        VALUES ('Ярослав', 30, 1200), ('Пётр', 31, 1000)
?> 

//На DELETE
//Удалите работника с id=7.
<?php
    $query = "DELETE FROM workers WHERE id=7";
?>

//Удалите Колю.
<?php
    $query = "DELETE FROM workers WHERE name='Джон'";
?>

//Удалите всех работников, у которых возраст 23 года.
<?php
    $query = "DELETE FROM workers WHERE age=23";
?>

//На UPDATE

//Поставьте Васе зарплату в 200$.
<?php
    $query = "UPDATE workers SET salary=200 WHERE name='Вася'";
?>

//Работнику с id=4 поставьте возраст 35 лет.
<?php
    $query = "UPDATE workers SET age=35 WHERE id=4";
?>

//Всем, у кого зарплата 500$ сделайте ее 700$.
<?php
    $query = "UPDATE workers SET salary=700 WHERE salary=500";
?

//Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.
<?php
    $query = "UPDATE workers SET age=23 WHERE id>2 AND id<=5";
?

//Поменяйте Васю на Женю и прибавьте ему зарплату до 900$
<?php
    $query = "UPDATE workers SET name='Женя' AND salary=900 WHERE name='Вася'";
?