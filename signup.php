<?php include_once 'header.php'; ?>

<?php include_once 'nav.php'; ?>

<div class="container container-limited mt-5">
    <h3 class="my-3 text-center"> Register Page</h3>
    <form action="" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" name="name" aria-activedescendant="name"
                placeholder="Enter your name">
        </div>
        <div class="mb-3">
            <label for="email address" class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email" aria-activedescendant="email"
                placeholder="Enter your email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" aria-activedescendant="password"
                placeholder="Enter your password">
        </div>
        <div class="mb-3">
            <label for="confirm password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="confirm_password" aria-activedescendant="confirm password"
                placeholder="Confirm password">
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
        <a href="index.php" class="btn btn-secondary">Go Back</a>

    </form>
    <hr>

    <p class="my-3"> Not have an account ? go to <a href="signin.php">sign in</a></p>
</div>
<style>
.container-limited {
    max-width: 500px;
    /* กำหนดความกว้างสูงสุด */
    margin: 0 auto;
    /* จัดให้อยู่กึ่งกลางแนวนอน */
    padding: 15px;
    /* เพิ่มระยะห่างภายใน */
    border: 1px solid #ddd;
    /* เพิ่มเส้นขอบ */
    border-radius: 8px;
    /* มุมโค้ง */
    background-color: #f9f9f9;
    /* พื้นหลัง */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    /* เงา */
}
</style>

<?php include_once 'footer.php'; ?>