
<?php
/**
 * @var  \App\Kernel\View\ViewInterface $view
 * @var  \App\Kernel\Session\SessionInterface $session
 */

?>

<?php $view->component('start') ?>



<h1>Register</h1>

<form action="/register" method="post">
    <div>
        <p>Email</p>
        <input type="text" name="email">
    </div>

    <?php if ($session->has('email')) { ?>
        <div>
            <ul>
                <?php foreach ($session->getFlash('email') as $error) { ?>
                    <li style="color: red;"><?php echo $error ?></li>
                <?php } ?>
            </ul>

        </div>
    <?php } ?>
    <div>
        <p>Password</p>
        <input type="password" name="password">
    </div>

    <?php if ($session->has('password')) { ?>
        <div>
            <ul>
                <?php foreach ($session->getFlash('password') as $error) { ?>
                    <li style="color: red;"><?php echo $error ?></li>
                <?php } ?>
            </ul>

        </div>
    <?php } ?>
    <button>Register</button>
</form>


<?php $view->component('end') ?>

