<div class="container d-flex align-items-center min-vh-100">
    <div class="row w-100 justify-content-center">
        <div class="col">
            <div class="card p-4">
                <h3 class="text-center p-2 mb-4 font-weight-bold">Update Patient</h3>
                <div class="container">
                    <form class="" method="POST" action="./user?page=updateUser&id=<?php echo $id ?>">
                        <div class="form-row p-2">
                            <div class="col">Name</div>
                            <div class="col">
                                <input type="text" placeholder="Insert name to be changed with here" class="form-control" name="name" required>
                            </div>
                        </div>

                        <div class="form-row p-2">
                            <div class="col">Username</div>
                            <div class="col">
                                <input type="text" placeholder="Insert username to be changed with here" class="form-control" name="username" required>
                            </div>
                        </div>

                        <div class="form-row p-2">
                            <div class="col">Password</div>
                            <div class="col">
                                <input type="password" placeholder="Insert password to be changed with here" class="form-control" name="password" required>
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