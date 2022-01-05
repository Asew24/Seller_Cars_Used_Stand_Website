<?php include 'processForm.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Image preview and upload</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-4 offset-md-4 fom-div">
                <form action="upft.php" method="post" enctype="multipart/form-data"></form>

                    <h3 class="text-center">Create Profile</h3>

                    <div class="form-group">
                        <label for="profileImage">Profile Image</label>
                        <input type="file" name="profileImage" id="profileImage" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea name="bio" id="bio" class="form-control"></textarea>
                    </div>
                    <div class="form-goup">
                        <button type="submit" name="save-user" class="btn btn-primary btn-block">Save User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>