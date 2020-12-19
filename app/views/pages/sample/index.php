<div class="container py-4 min-vh-100">
    <h6 class="text-center mt-4">Here are sample to all components</h6>

    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0">Chart.js</h6>
        </div>
        <div class="card-content p-4">
            <canvas id="sample_chart"></canvas>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0">Button</h6>
        </div>
        <div class="card-content p-4">
            <span>Normal Button</span>
            <div class="display-grid grid-col-4 grid-g-1 mb-1">
                <button class="btn">default</button>
                <button class="btn btn-primary">primary</button>
                <button class="btn btn-success">success</button>
                <button class="btn btn-warning">warning</button>
                <button class="btn btn-danger">danger</button>
                <button class="btn btn-info">info</button>
                <button class="btn btn-dark">dark</button>
            </div>
            
            <span>Large Button</span>
            <div class="display-grid grid-col-4 grid-g-1 mb-1">
                <button class="btn btn-lg">default</button>
                <button class="btn btn-lg btn-primary">primary</button>
                <button class="btn btn-lg btn-success">success</button>
                <button class="btn btn-lg btn-warning">warning</button>
                <button class="btn btn-lg btn-danger">danger</button>
                <button class="btn btn-lg btn-info">info</button>
                <button class="btn btn-lg btn-dark">dark</button>
            </div>

            <span>Disabled Button</span>
            <div class="display-grid grid-col-4 grid-g-1">
                <button class="btn" disabled>default</button>
                <button class="btn btn-primary" disabled>primary</button>
                <button class="btn btn-success" disabled>success</button>
                <button class="btn btn-warning" disabled>warning</button>
                <button class="btn btn-danger" disabled>danger</button>
                <button class="btn btn-info" disabled>info</button>
                <button class="btn btn-dark" disabled>dark</button>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0">Input</h6>
        </div>
        <div class="card-content p-4">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0">Typography</h6>
        </div>
        <div class="card-content p-4">
            <h1>Heading 1</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <h4>Heading 4</h4>
            <h5>Heading 5</h5>
            <h6>Heading 6</h6>
            <p>This is a sample of a paragraph</p>
        </div>
    </div>
</div>

<script defer>
    var ctx = document.getElementById('sample_chart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45]
            }]
        },

        // Configuration options go here
        options: {}
    });
</script>