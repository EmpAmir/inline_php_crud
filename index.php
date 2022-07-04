<?php
require_once('database.php');
$db = new DBConnection();
$conn = $db->conn;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKY PNR|| Ticket Details</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .editable {
            display: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">CCU-BOM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index1.php">CCU-BLR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index2.php">CCU-NDLS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-3">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">CCU TO BOM</h3>
            </div>
            <hr>
            <div class="col-12">
                <!-- Table Form start -->
                <form action="" id="form-data">
                    <input type="hidden" name="id" value="">
                    <table class='table table-hovered table-hover table-striped table-bordered table-sm' id="form-tbl">
                        <colgroup>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="text-center p-1">Name</th>
                                <th class="text-center p-1">Email</th>
                                <th class="text-center p-1">Contact</th>
                                <th class="text-center p-1">Address</th>
                                <th class="text-center p-1">Action</th>
                                <th class="text-center p-1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td contenteditable="" name="name" required></td>
                                <td contenteditable="" name="email" required></td>
                                <td contenteditable="" name="contact" required></td>
                                <td contenteditable="" name="address" required></td>
                                <td contenteditable="" name="age" required></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary btn-flat rounded-0 px-2 py-0">Save</button>
                                    <button class="btn btn-sm btn-dark btn-flat rounded-0 px-2 py-0" onclick="cancel_button($(this))" type="button">Cancel</button>
                                </td>
                            </tr>
                            <?php
                            $query = $conn->query("SELECT * FROM `members` order by id asc");
                            while ($row = $query->fetch_assoc()) :
                            ?>
                                <tr data-id='<?php echo $row['id'] ?>'>
                                    <td name="name"><?php echo $row['name'] ?></td>
                                    <td name="email"><?php echo $row['email'] ?></td>
                                    <td name="contact"><?php echo $row['contact'] ?></td>
                                    <td name="address"><?php echo $row['address'] ?></td>
                                    <td name="age"><?php echo $row['age'] ?></td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-sm rounded-0 py-0 edit_data noneditable" type="button">Edit</button>
                                        <button class="btn btn-danger btn-sm rounded-0 py-0 delete_data noneditable" type="button">Delete</button>
                                        <button class="btn btn-sm btn-primary btn-flat rounded-0 py-0 editable">Save</button>
                                        <button class="btn btn-sm btn-dark btn-flat rounded-0 py-0 editable" onclick="cancel_button($(this))" type="button">Cancel</button>
                                    </td>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </form>
                <!-- Table Form end -->
            </div>

        </div>
    </div>
</body>
<script type="text/javascript" src="./assets/js/jquery-3.6.0.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.js"></script>
<script type="text/javascript" src="./assets/js/script.js"></script>

</html>