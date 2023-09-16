<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
</head>
<body>
    <form action="/save" method="post">
           <label>Name</label>
           <input type="hidden" name="id" value="<?= $stu['id'] ?>">
           <input type="text" name="name" placeholder="name" value="<?= $stu['name'] ?>">
           <br>
           <label>Address</label>
           <input type="text" name="address" placeholder="address" value="<?= $stu['address'] ?>">
           <br>
           <label>Phone Number</label>
           <input type="text" name="number" placeholder="number" value="<?= $stu['number'] ?>">
           <br>
           <label>Sex</label>
           <input type="text" name="sex" placeholder="sex" value="<?= $stu['sex'] ?>">
           <br>
           <label>Id Number</label>
           <input type="text" name="studentId" placeholder="studentId" value="<?= $stu['studentId'] ?>">
           <br>
           <input type="submit" value="Save">

    </form>
    <h1>Student List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Sex</th>
            <th>Id Number</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($student as $st): ?>
            <tr>
                <td><?= $st['name'] ?></td>
                <td><?= $st['address'] ?></td>
                <td><?= $st['number'] ?></td>
                <td><?= $st['sex'] ?></td>
                <td><?= $st['studentId'] ?></td>
                <td><a href="/delete/<?= $st['id'] ?>">Delete</a> || <a href="/edit/<?= $st['id'] ?>">Update</a></td>


            </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>