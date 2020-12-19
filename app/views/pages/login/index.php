<div class="container d-flex align-items-center min-vh-100">
    <div class="row w-100 justify-content-center">
        <div class="col-6">
            <!-- //? LOGIN CARD -->
            <div class="card p-4">
                <div class="row flex-column text-center">
                    <!-- //? WHEN TITLE CLICKED, MOVE TO HOME -->
                    <div class="col" onclick="window.location = '<?= BASE_PAGE ?>'">
                        <img src="<?= IMG_PATH . "logo-korea.png"; ?>" width="50" height="50" alt="" />
                        <h3 class="m-1">Login</h3>
                    </div>
                    <div class="col">
                        <span>Please enter your login information</span>
                    </div>
                    <?php 
                        if(isset($error)) {
                            echo '
                                <div class="col">
                                    <span class="text-danger font-weight-bold">'. $error .'</span>
                                </div>
                            ';
                        }
                    ?>
                </div>
                <div class="row">
                    <div class="col">
                        <!-- //? LOGIN FORM -->
                        <form id="login-form" method="post" action="./login">
                            <div class="form-group">
                                <label for="input_username">Username</label>
                                <input class="form-control" id="input_username" type="text" name="username" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="input_password">Password</label>
                                <input class="form-control" id="input_password" type="password" name="password" placeholder="password">
                            </div>
                            <button class="btn btn-primary btn-block font-weight-bold" type="submit" name="button">Submit</button>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" defer>
    class LoginForm {
        constructor(formId, inputSettings = []) {
            this.form = document.getElementById(formId);
            this.validateSubmit = this.validateSubmit.bind(this);
            this.input = inputSettings;

            if (this.input.length == 0) {
                this.form.addEventListener("submit", (event) => {
                    event.preventDefault();
                });
            } else {
                this.form.addEventListener("submit", (event) => {
                    event.preventDefault();
                    this.validateSubmit(event, this.input);
                });
            }
        }

        validateSubmit(event, inputs = []) {
            let formElements = event.currentTarget.elements;
            let data = '';
            let isValidated = true;

            if (inputs.length != 0) {
                inputs.map((input, i) => {
                    isValidated = this.checkInputLength(formElements[input.name], input.minLength) && isValidated;
                    data += `"${input.name}": "${formElements[input.name].value}"`;
                    if (i != inputs.length - 1) {
                        data += `, `;
                    }
                });
                data = `{${data}}`;
            }

            if (isValidated) {
                this.form.submit();
            }
        }

        checkInputLength(obj, minLength) {
            if (obj.value.length < minLength) {
                obj.classList.add('is-invalid');
                return false;
            } else {
                obj.classList.remove('is-invalid');
                return true;
            }
        }
    }

    new LoginForm('login-form', [{
        name: 'username',
        minLength: 5
    }, {
        name: 'password',
        minLength: 4
    }]);
</script>