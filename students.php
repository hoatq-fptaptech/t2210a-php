<?php
    $sv = [
        "name"=>"Nguyen Van A",
        "age"=>18
    ];

    $list = [
        [
            "name"=>"Nguyen Van A",
            "age"=>18
        ],
        [
            "name"=>"Nguyen Van A",
            "age"=>19
        ]
    ];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Student List</h1>
    <h2>Tên sinh viên: <?php echo $sv["name"];  ?></h2>
    <h2>Tuổi sinh viên: <?php echo $sv["age"];  ?></h2>
    <?php if($sv["age"] == 18): ?>
       <h3>Sinh viên vừa nhập học</h3>
       <h3>Sinh viên vừa nhập học</h3>
       <h3>Sinh viên vừa nhập học</h3>
       <h3>Sinh viên vừa nhập học</h3>
       <h3>Sinh viên vừa nhập học</h3>
    <?php endif; ?>

    <ul>
        <?php foreach ($list as $item):?>
            <li><?php echo $item["name"]."-".$item["age"];?></li>
        <?php endforeach;?>
    </ul>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>

</body>
</html>