
<?php
/**
 * @var  \App\Kernel\View\ViewInterface $view
 * @var  \App\Kernel\Session\SessionInterface $session
 */

?>

<?php $view->component('start') ?>



<h1>LOGIN</h1>

<form action="/login" method="post">
    <?php if ($session->has('error')) { ?>
        <div>
            <p style="color: red">
                <?php echo $session->getFlash('error')?>
            </p>
        </div>
    <?php } ?>
    <div>
        <p>Email</p>
        <input type="text" name="email">
    </div>

    <div>
        <p>Password</p>
        <input type="password" name="password">
    </div>

    <button>Login</button>
</form>


<?php $view->component('end') ?>

