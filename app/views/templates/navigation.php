<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= URLROOT ?>">FNX</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT ?>/tags"">Tags <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT ?>/authors"">Authors <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT ?>/categories"">Categories <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <?php
        if (isset($_SESSION['user_id'])) :
            ?>
        <div class="btn">Wallet: <?=$_SESSION['wallet'] ;?> $</div>
            <a class="btn btn-outline-success"
               href="<?= URLROOT ?>/users/logout">Logout <?= $_SESSION['username']; ?></a>
        <?php
        else : ?>
            <a class="btn btn-outline-success" href="<?= URLROOT ?>/users/login">Login</a>
        <?php
        endif; ?>
    </div>
</nav>