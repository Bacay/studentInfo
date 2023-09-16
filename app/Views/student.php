<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
       
        body, table, .form-container {
            font-family: arial, sans-serif;
        }
        h1 {
            text-align: center;
        }

        
        table {
            border-collapse: collapse;
            width: 70%;
            float: left;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        .delete {
            color: red;
        }

        .form-container {
            border: 1px solid #dddddd;
            padding: 10px;
            margin-left: 20px;
            float: left;
            width: 25%;
        }
        .form-container label {
            display: block;
            font-weight: bold; 
        }

        .form-container input[type="text"] {
            border: 1px solid #dddddd;
            padding: 8px;
            width: 90%;
        }

        .form-container input[type="submit"] {
            font-weight: bold;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
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
                <td><a href="/delete/<?= $st['id'] ?>" class="delete">Delete</a> || <a href="/edit/<?= $st['id'] ?>">Update</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="form-container">
        <form action="/save" method="post">
            <label>Name</label>
            <input type="hidden" name="id" value="<?= isset($stu) ? $stu['id'] : '' ?>">
            <input type="text" name="name" placeholder="Name" value="<?= isset($stu) ? $stu['name'] : '' ?>">
            <br>
            <label>Address</label>
            <input type="text" name="address" placeholder="Address" value="<?= isset($stu) ? $stu['address'] : '' ?>">
            <br>
            <label>Phone Number</label>
            <input type="text" name="number" placeholder="Phone Number" value="<?= isset($stu) ? $stu['number'] : '' ?>">
            <br>
            <label>Sex</label>
            <input type="text" name="sex" placeholder="Sex" value="<?= isset($stu) ? $stu['sex'] : '' ?>">
            <br>
            <label>Id Number</label>
            <input type="text" name="studentId" placeholder="Id Number" value="<?= isset($stu) ? $stu['studentId'] : '' ?>">
            <br>
            <div style="margin-top: 10px;"></div>
            <input type="submit" value="Save">
        </form>
    </div>
    <div class="clear"></div>
</body>
</html>
