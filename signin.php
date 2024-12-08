<?php include_once 'header.php'; ?>

<?php include_once 'nav.php'; ?>

<div class="container container-limited mt-5">
    <h3 class="my-3 text-center"> Login Page</h3>
    <form action="" method="post">
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
        <button type="submit" class="btn btn-primary">Sign In</button>
        <a href="index.php" class="btn btn-secondary">Go Back</a>

    </form>
    <hr>

    <p class="my-3"> Already have an account? go to <a href="signup.php">sign up</a></p>
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