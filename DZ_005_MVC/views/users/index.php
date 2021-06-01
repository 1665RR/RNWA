<!doctype html>
<html>
 <head>

    <title>Users:</title>
 <meta charset="utf-8">
 <!--   <link rel="stylesheet" href="styles.css"> -->
 <style><?php include 'CSS/stil.css'; ?></style>

</head>
<body id="wrapper">
<a class="btn btn-primary" href="?controller=korisnik&action=verifyinsert" role="button">Dodaj</a>
<table>
 <caption>List of all users::</caption>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Password</th>
                <th>Role</th>
                <th>Update id</th>
                <th>Delete</th>
            </tr>
			<?php foreach ($users as $row): ?>
        <tr>
            <td><?php echo $row->id ?></td>
            <td><?php echo $row->name ?></td>
            <td><?php echo $row->password ?></td>
            <td><?php echo $row->role ?></td>
            <td><a href="?controller=users&action=verifyupdate&ID=<?php echo $row->id?>" class="btn btn-primary btn-xs"> Edit</a></td>
            <td><a href="?controller=users&action=verifydelete&ID=<?php echo $row->id?>" class="btn btn-danger btn-xs"> Delete</a></td>

        </tr>
        <?php endforeach ?>
		    </table>

</body>
</html>