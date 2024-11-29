<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Aplikasi Nilai Santri</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b>ANISA</b><br>Aplikasi Nilai Santri</h3>
            <hr>
            <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <b>Opps!</b> <?php echo e(session('error')); ?>

            </div>
            <?php endif; ?>
            <form action="<?php echo e(route('actionlogin')); ?>" method="post">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <hr>
                <p class="text-center">Belum punya akun? <a href="<?php echo e(route('register')); ?>">Register</a> sekarang!</p>
            </form>
        </div>
    </div>

    <button id="addInputBtn">Add Input</button>

    <!-- Form where input fields will be added -->
    <form id="inputForm">
        <!-- New input fields will be appended here -->
    </form>
    <script>
         // Get the button and form elements
         const addInputBtn = document.getElementById('addInputBtn');
        const inputForm = document.getElementById('inputForm');

        // Function to add a new input field
        function addInputField() {
            // Create a new div container for the input and its label
            const newInputContainer = document.createElement('div');
            newInputContainer.classList.add('input-container');
            
            // Create a new label
            const newLabel = document.createElement('label');
            newLabel.textContent = 'New Input: ';
            
            // Create a new input element
            const newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.name = 'dynamicInput[]'; // The name attribute will allow collecting the data later
            
            // Append the label and input field to the container
            newInputContainer.appendChild(newLabel);
            newInputContainer.appendChild(newInput);
            
            // Append the new input container to the form
            inputForm.appendChild(newInputContainer);
        }

        // Add an event listener to the button
        addInputBtn.addEventListener('click', addInputField);
    </script>
</body>
</html><?php /**PATH D:\project luar\cooking-project\resources\views/login.blade.php ENDPATH**/ ?>