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
    <?php include("head.php"); ?>
</head>
<body>
<?php include("nav.php"); ?>
<div class="container">
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
    <a href="form.php" class="btn btn-primary">Create new student</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($list as $item):?>
            <tr>
                <td></td>
                <td><?php echo $item["name"];?></td>
                <td><?php echo $item["age"];?></td>
                <td></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
</body>
</html>