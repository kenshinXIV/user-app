<?php 
    include('include/template/header.php');
    include('class/User.php');
    $users = new User(); 
    $data = $users->getAllUser(); 
    
?>


<div class="container">
    <hr>
    <h1 class="text-success text-center">PHP CRUD OOP </h1>
    <hr>
    <?php include('include/message.php');?>
    <div><a href="store.php" class="btn btn-primary mb-2">ADD USER</a></div>
        <table class="table e table-bordered table-striped text-center" id="userTable">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $value): ?>
                    <tr>
                        <td><img src="assests/img/upload/<?php echo $value['image']?>" alt="" width="50"></td>
                        <td><?php echo $value['firstname']?></td>
                        <td><?php echo $value['lastname']?></td>
                        <td><?php echo $value['email']?></td>
                        <td>
                            <a href="show.php?id=<?=$value['id']?>" class="btn btn-info btn-sm">INFO</a>
                            <a href="edit.php?id=<?=$value['id']?>" class="btn btn-success btn-sm">EDIT</a>
                            <a href="delete.php?id=<?=$value['id']?>" class="btn btn-danger btn-sm delete">DELETE</a>
                        </td>
                    </tr>
                   
                <?php endforeach ?>
            </tbody>
        
        </table>
    
</div>


<?php include('include/template/footer.php') ?>