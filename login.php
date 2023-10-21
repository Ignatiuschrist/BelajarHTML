<?php
$title = "Login";
include('components/header.php');
?>

<section class="autentikasi py-5">
    
    <div>
    <h2 class="text-primary text-center mb-4">Login</h2>
    
    <div class="container flex justify-content-center align-items-center">

        <form action="submit" method="post">
            <div class="gap-3">
                <label for="email" class="fs-5">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="gap-3 mt-4">
                <label for="password" class="fs-5">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3" name="submit">Login</button>
            <p class="mt-3 text-secondary text-center">Don't have an account? <a href="register.php" class="text-primary">Register</a></p>
        </form>

    </div>
</section>




<?php
include('components/footer.php');
?>