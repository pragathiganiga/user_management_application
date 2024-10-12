<?php
include 'fetch_users.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>User Management System</h2>

       
        <form action="insert.php" method="POST" id="userForm">

            <div>
                    <label class="user_id" for="user_id">User Id: <span id="field0"></span></label>
                    <input type="hidden" id="field1" name="user_id">
            </div>

            <div>
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name" required>
            </div>
            <div>
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" id="last_name" required>
            </div>
            <div>
                <label for="phone_number">Phone Number:</label>
                <input type="text" name="phone_number" id="phone_number" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="address">Address:</label>
                <textarea name="address" id="address" required></textarea>
            </div>
            <button name="add_user" type="submit">Add User</button>
            <button name="update_user" type="submit">Update User</button>
        </form>

       
        <table id="userTable">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['id']) ?></td>
                    <td><?= htmlspecialchars($user['first_name']) ?></td>
                    <td><?= htmlspecialchars($user['last_name']) ?></td>
                    <td><?= htmlspecialchars($user['phone_number']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['address']) ?></td>
                    <td>
                        <a href="delete.php?id=<?= $user['id'] ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script>
        
        document.addEventListener('DOMContentLoaded', function() {
            var table = document.getElementById('userTable');

            table.addEventListener('click', function(event) {
                var target = event.target;

                
                if (target.tagName === 'TD') {
                    
                    var row = target.parentNode;

                   
                    var cells = row.getElementsByTagName('td');

                    
         
                    
                    if (cells.length === 7) {
                        
                        document.getElementById('field0').innerHTML = cells[0].innerText;
                        document.getElementById('field1').value = cells[0].innerText;
                        document.getElementById('first_name').value = cells[1].innerText;
                        document.getElementById('last_name').value = cells[2].innerText;
                        document.getElementById('phone_number').value = cells[3].innerText;
                        document.getElementById('email').value = cells[4].innerText;
                        document.getElementById('address').value = cells[5].innerText;

                    }
                }
            });
        });
    </script>

    <script src="script.js"></script>
</body>
</html>
