<div class="container d-flex align-items-center min-vh-100">
    <div class="row w-100 justify-content-center">
        <div class="col">
            <div class="card p-4">
                <h3 class="text-center p-2 mb-4 font-weight-bold">Edit User</h3>
                <div class="container">
                    <form class="" method="POST" action="./user?page=updateUser&id=<?php echo $id ?>">
                        <div class="form-row p-2">
                            <div class="col">Name</div>
                            <div class="col">
                                <input type="text" placeholder="Insert new name" class="form-control" name="name" value="<?php echo $user->get_name() ?>" required>
                            </div>
                        </div>

                        <div class="form-row p-2">
                            <div class="col">Username</div>
                            <div class="col">
                                <input type="text" placeholder="Insert new username" class="form-control" name="username" value="<?php echo $user->get_username() ?>" required>
                            </div>
                        </div>

                        <div class="form-row p-2">
                            <div class="col">Password</div>
                            <div class="col">
                                <input type="password" placeholder="Insert new password or leave blank for old password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <input type="submit" class="btn btn-primary" value="SUBMIT"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>