
<?php
/**
 * @var  \App\Kernel\View\View $view
 * @var  \App\Kernel\Session\Session $session
 */



?>

<?php $view->component('start') ?>



<h1>Add movie page !</h1>

<form action="/admin/movies/add" method="post">
    <p>Name</p>
    <div>
        <input type="text" name="name">
    </div>
    <?php if ($session->has('name')) { ?>
        <div>
            <ul>
                <?php foreach ($session->getFlash('name') as $error) { ?>
                <li style="color: red;"><?php echo $error ?></li>
                <?php } ?>
            </ul>

        </div>
    <?php } ?>

    <div>
        <button>Add</button>
    </div>
</form>


<?php $view->component('end') ?>

