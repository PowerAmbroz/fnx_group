<form action="<?= URLROOT?>/users/login" id="login_form" method="post">
    <div class="form-group">
        <label for="username">Email address</label>
        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username" name="username">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        <span><?=$data['usernameError']; ?></span>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        <span><?=$data['passwordError']; ?></span>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>