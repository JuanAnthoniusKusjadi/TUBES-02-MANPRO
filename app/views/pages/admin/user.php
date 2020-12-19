<div class="container min-vh-100 mt-4">
    <div class="row my-3">
        <div class="col">
            <h3>List User</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!-- TABLE LIST USER -->
            <div class="table-responsive">
                <table class="table table-hover table-striped" id="table-user">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" style="width: 5%">
                                #
                            </th>
                            <th scope="col">
                                Username
                            </th>
                            <th scope="col">
                                Nama
                            </th>
                            <th class="text-center" scope="col" style="width: 10%">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" defer>

    let userList = [];
    let tableUser = document.getElementById('table-user');

    <?php
        foreach ($all_user as $key => $user) {
            echo '
                userList.push({
                    id: '. $user->get_id() .',
                    name: "'. $user->get_name() .'",
                    username: "'. $user->get_username() .'"
                });
            ';
        }
    ?>

    for(let i = userList.length - 1; i >= 0; i--) {
        let activeSelectedUser = null;
        let user = userList[i];

        let row = tableUser.insertRow(1);
        row.id = `user-${user.id}`;
        row.className = "";

        let number = row.insertCell(0)
        let username = row.insertCell(1);
        let name = row.insertCell(2);
        let action = row.insertCell(3);

        number.textContent = i + 1;
        number.className = "font-weight-bold";
        username.textContent = user.username;
        name.textContent = user.name;
        action.className = "text-center";
        action.innerHTML = `
            <button disabled class="btn btn-warning p-2">
                <span class="fa fa-pen"></span>
            </button>
            <button disabled class="btn btn-danger p-2">
                <span class="fa fa-trash"></span>
            </button>
        `;
    }


</script>