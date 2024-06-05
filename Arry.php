<!-- <?php
        $data = [
            [
                "ID" => 1,
                "Name" => "Abdullah",
                "Age" => 11,
                "Status" => "NO"
            ],
            [
                "ID" => 2,
                "Name" => "John",
                "Age" => 22,
                "Status" => "YES"
            ],
            [
                "ID" => 3,
                "Name" => "Jane",
                "Age" => 33,
                "Status" => "NO"
            ],
            [
                "ID" => 4,
                "Name" => "Alice",
                "Age" => 44,
                "Status" => "YES"
            ],
            [
                "ID" => 5,
                "Name" => "Bob",
                "Age" => 55,
                "Status" => "NO"
            ],
            [
                "ID" => 6,
                "Name" => "Charlie",
                "Age" => 66,
                "Status" => "YES"
            ],
            [
                "ID" => 7,
                "Name" => "David",
                "Age" => 77,
                "Status" => "NO"
            ],
            [
                "ID" => 8,
                "Name" => "Eve",
                "Age" => 88,
                "Status" => "YES"
            ],
            [
                "ID" => 9,
                "Name" => "Frank",
                "Age" => 99,
                "Status" => "NO"
            ],
            [
                "ID" => 10,
                "Name" => "Grace",
                "Age" => 100,
                "Status" => "YES"
            ]
        ];
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        width: 50%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 18px;
        text-align: left;
    }

    th,
    td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $item) : ?>
            <tr>
                <td><?php echo $item['ID']; ?></td>
                <td><?php echo $item['Name']; ?></td>
                <td><?php echo $item['Age']; ?></td>
                <td><?php echo $item['Status']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html> -->


<!-- <?php
        $students = [
            [
                "Name" => "Ali",
                "FatherName" => "Ahmed",
                "RollNumber" => 101,
                "AttendanceTotal" => 90
            ],
            [
                "Name" => "Sara",
                "FatherName" => "Omar",
                "RollNumber" => 102,
                "AttendanceTotal" => 85
            ],
            [
                "Name" => "Zain",
                "FatherName" => "Khalid",
                "RollNumber" => 103,
                "AttendanceTotal" => 95
            ],
            [
                "Name" => "Aisha",
                "FatherName" => "Hamza",
                "RollNumber" => 104,
                "AttendanceTotal" => 80
            ],
            [
                "Name" => "Bilal",
                "FatherName" => "Mustafa",
                "RollNumber" => 105,
                "AttendanceTotal" => 88
            ],
            [
                "Name" => "Fatima",
                "FatherName" => "Yasir",
                "RollNumber" => 106,
                "AttendanceTotal" => 92
            ],
            [
                "Name" => "Hassan",
                "FatherName" => "Imran",
                "RollNumber" => 107,
                "AttendanceTotal" => 86
            ],
            [
                "Name" => "Noor",
                "FatherName" => "Zafar",
                "RollNumber" => 108,
                "AttendanceTotal" => 89
            ],
            [
                "Name" => "Usman",
                "FatherName" => "Farooq",
                "RollNumber" => 109,
                "AttendanceTotal" => 94
            ],
            [
                "Name" => "Maryam",
                "FatherName" => "Jamal",
                "RollNumber" => 110,
                "AttendanceTotal" => 87
            ]
        ];
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
    width: 50%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 18px;
    text-align: left;
}

th,
td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}
</style>
<body>
    <table>
        <thead>
            <th>Name</th>
            <th>FatherName</th>
            <th>RollNumber</th>
            <th>AttendanceTotal</th>
        </thead>
        <tbody>
            <?php foreach ($students as $student) : ?>
            <tr>
                <td><?php echo $student['Name'] ?></td>
                <td><?php echo $student['FatherName'] ?></td>
                <td><?php echo $student['RollNumber'] ?></td>
                <td><?php echo $student['AttendanceTotal'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html> -->
<!-- <?php

        $students = [
            [
                "Ali",
                "Ahmed",
                101,
                90
            ],
            [
                "Sara",
                "Omar",
                102,
                85
            ],
            [
                "Zain",
                "Khalid",
                103,
                95
            ],
            [
                "Aisha",
                "Hamza",
                104,
                80
            ],
            [
                "Bilal",
                "Mustafa",
                105,
                88
            ],
            [
                "Fatima",
                "Yasir",
                106,
                92
            ],
            [
                "Hassan",
                "Imran",
                107,
                86
            ],
            [
                "Noor",
                "Zafar",
                108,
                89
            ],
            [
                "Usman",
                "Farooq",
                109,
                94
            ],
            [
                "Maryam",
                "Jamal",
                110,
                87
            ]
        ];
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
    width: 50%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 18px;
    text-align: left;
}

th,
td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}
</style>



<table>
    <tr>
        <th>Name</th>
        <th>FatherName</th>
        <th>RollNumber</th>
        <th>AttendanceTotal</th>
    </tr>
    <?php foreach ($students as list($Name, $FatherName, $RolNumber, $AttendanceTotal)) : ?>
    <tr>
        <th><?php echo $Name ?></th>
        <th><?php echo $FatherName ?></th>
        <th><?php echo $RolNumber ?></th>
        <th><?php echo $AttendanceTotal ?></th>
    </tr>

    <?php endforeach; ?>
</table>


<body>

</body>

</html> -->








<!-- <?php

        $students = [
            [
                "Name" => "Ali",
                "FatherName" => "Ahmed",
                "RollNumber" => 101,
                "AttendanceTotal" => 90
            ],
            [
                "Name" => "Sara",
                "FatherName" => "Omar",
                "RollNumber" => 102,
                "AttendanceTotal" => 85
            ],
            [
                "Name" => "Zain",
                "FatherName" => "Khalid",
                "RollNumber" => 103,
                "AttendanceTotal" => 95
            ],
            [
                "Name" => "Aisha",
                "FatherName" => "Hamza",
                "RollNumber" => 104,
                "AttendanceTotal" => 80
            ],
            [
                "Name" => "Bilal",
                "FatherName" => "Mustafa",
                "RollNumber" => 105,
                "AttendanceTotal" => 88
            ],
            [
                "Name" => "Fatima",
                "FatherName" => "Yasir",
                "RollNumber" => 106,
                "AttendanceTotal" => 92
            ],
            [
                "Name" => "Hassan",
                "FatherName" => "Imran",
                "RollNumber" => 107,
                "AttendanceTotal" => 86
            ],
            [
                "Name" => "Noor",
                "FatherName" => "Zafar",
                "RollNumber" => 108,
                "AttendanceTotal" => 89
            ],
            [
                "Name" => "Usman",
                "FatherName" => "Farooq",
                "RollNumber" => 109,
                "AttendanceTotal" => 94
            ],
            [
                "Name" => "Maryam",
                "FatherName" => "Jamal",
                "RollNumber" => 110,
                "AttendanceTotal" => 87
            ]
        ];
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        width: 50%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 18px;
        text-align: left;
    }

    th,
    td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>FatherName</th>
            <th>RollNumber</th>
            <th>AttendanceTotal</th>
        </tr>
        <?php foreach ($students as list("Name" => $Name, "FatherName" => $FatherName, "RollNumber" => $RolNumber, "AttendanceTotal" => $AttendanceTotal)) : ?>
        <tr>
            <th><?php echo $Name ?></th>
            <th><?php echo $FatherName ?></th>
            <th><?php echo $RolNumber ?></th>
            <th><?php echo $AttendanceTotal ?></th>
        </tr>

        <?php endforeach; ?>
    </table>
</body>

</html> -->


<!-- <?PHP

        $a = ["Abdullah", "ali", 20, "Umer", "Amar"];


        // echo count($a);
        // echo sizeof($a);

        $b = array(
            'No1' => array(10, 20, 30, 40),
            'NO2' => array(100, 200, 300, 400)
        );

        // echo count($b['No1'],1);

        $len = count($a);

        for ($i = 1; $i < $len; $i++) {
            echo $a[$i] . "<br/>";
        }

        ?> -->
<!-- 
<?php
$fruits = ['Apple', 'Banana', 'Orange', 'Grapes', 'Mango'];
$countries = ['United States', 'Canada', 'United Kingdom', 'Australia', 'Germany'];



$a = array_replace($fruits, $countries);

print_r($a);

?> -->

<!-- <?php

        $fruits = ['Apple', 'Banana', 'Orange', 'Grapes', 'Mango'];

        array_pop($fruits);
        array_push($fruits, "ok");



        print_r($fruits);

        ?> -->



<!-- <?php

        $fruits = ['Apple', 'Banana', 'Orange', 'Grapes', 'Mango'];
        $countries = ['United States', 'Canada', 'United Kingdom', 'Australia', 'Germany'];

        $a = array_merge($fruits, $countries);

        // print_r( $a );

        $b = array_combine($fruits, $countries);

        print_r($b);
        ?> -->

<!-- <?php
        $countries = ['United States', 'Canada', 'United Kingdom', 'Australia', 'Germany'];
        $a = array_slice($countries, 0, 3);


        echo implode(', ', $a);

        ?> -->


<?php

// $countries = ['United States', 'Canada', 'United Kingdom', 'Australia', 'Germany'];
// $fruits = ['Apple', 'Banana', 'Orange', 'Grapes', 'Mango', "Test"];
// $a = array_splice($fruits, 1, count($countries), $countries);
// echo implode(', ', $a);

// $countries = ['United States', 'Canada', 'United Kingdom', 'Australia', 'Germany'];
// $fruits = ['Apple', 'Banana', 'Orange', 'Grapes', 'Mango', "Test"];

//  array_splice($countries, 2, count($countries), $fruits);

// echo implode(", ", $countries);
?>

<?php 

// $countries = ['United States', 'Canada', 'United Kingdom', 'Australia', 'Germany'];
 $fruits = ['Apple', 'Banana', 'Orange', 'Grapes', 'Mango', "Test"];

 $a =array_key_exists(10,$fruits);

 echo $a;


?>