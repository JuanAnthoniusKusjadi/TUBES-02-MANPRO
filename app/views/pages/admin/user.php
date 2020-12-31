<div class="container min-vh-100 mt-4">
    <div class="row my-3">
        <div class="col">
            <h3>List User</h3>
        </div>
        <div class="col">
            <button class="btn btn-success float-right font-weight-bold" onclick="location.href = './admin?page=addUser'">
                ADD USER
            </button>
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

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="hideDeleteModal()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this user?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="hideDeleteModal()">Cancel</button>
        <button type="button" class="btn btn-primary" id="confirmDeleteBtn">Delete User</button>
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

    function update_user(id){
        location.href='./admin?page=updateUser&id='+id;
    }

    function delete_user(id){
        location.href = './user?page=deleteUser&id='+id;
    }

    let deleteModal = document.getElementById("deleteModal");
    
    function showDeleteModal(id){
        deleteModal.style.display = "block";
        deleteModal.className += " show";
        let confirmDeleteBtn = document.getElementById("confirmDeleteBtn");
        confirmDeleteBtn.addEventListener("click", function(){
            delete_user(id);
        });
    }

    function hideDeleteModal(){
        deleteModal.style.display = "none";
        deleteModal.className = deleteModal.className.replace(" show", "");
    }

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
            <button class="btn btn-warning p-2" onclick="update_user(`+user.id+`)">
                <span class="fa fa-pen"></span>
            </button>
            <button class="btn btn-danger p-2" onclick="showDeleteModal(`+user.id+`)">
                <span class="fa fa-trash"></span>
            </button>
        `;
    }
</script>