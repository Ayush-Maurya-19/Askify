<div class="container">
    <h1 class="heading">Login</h1>
    <form action="./server/requests.php" method="post">

        <div class="col-6 offset-sm-3 margin-botton-15">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="enter your email">
        </div>
        <div class="col-6 offset-sm-3 margin-botton-15">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="enter password">
        </div>

        <button type="submit" name="login" class="btn btn-primary offset-sm-3">Login</button>
    </form>
</div>