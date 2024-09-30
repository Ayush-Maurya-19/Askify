<div class="container">
    <h1 class="heading">signup</h1>
    <form method="post" action="./server/requests.php">
        <div class="col-6 offset-sm-3 margin-botton-15">
            <label for="username" class="form-label">Name</label>
            <input type="test" name="username" class="form-control" id="username" placeholder="enter user name">
        </div>
        <div class="col-6 offset-sm-3 margin-botton-15">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="enter your email">
        </div>
        <div class="col-6 offset-sm-3 margin-botton-15">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="enter password">
        </div>
        <div class="col-6 offset-sm-3 margin-botton-15">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="addres" placeholder="enter your address ">
        </div>
        <button type="submit" name="signup" class="btn btn-primary offset-sm-3">Signup</button>
    </form>
</div>