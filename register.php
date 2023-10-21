<?php
$title = "Register";
include('components/header.php');
?>

<section class="autentikasi py-5">
    
    <div class="form-login mt-5">
    <h2 class="text-primary text-center mb-4">Registers</h2>
    </div>
    <div class="container flex justify-content-center align-items-center">

        <form action="submit" method="post">
            <div class="gap-3 mb-3">
                <label for="name" class="fs-5">Name</label>
                <input type="name" name="name" class="form-control">
            </div>
            <div class="gap-3">
                <label for="email" class="fs-5">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="gap-3 mt-4">
                <label for="password" class="fs-5">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3" name="submit">Register</button>
            <p class="mt-3 text-secondary text-center">Already have an account? <a href="login.php" class="text-primary">Register</a></p>
        </form>

    </div>
</section>




<?php
include('components/footer.php');
?>