
<?php
/**
 * @var  \App\Kernel\View\View $view
 * @var  \App\Kernel\Session\SessionInterface $session
 * @var array<App\Models\Category> $categories
 */

?>

<?php $view->component('start'); ?>


<main>
    <div class="container">
        <h3 class="mt-3">Добавление фильма</h3>
        <hr>
    </div>
    <div class="container d-flex justify-content-center">


        <form action="/admin/movies/add" method="post" enctype="multipart/form-data" class="d-flex flex-column justify-content-center w-50 gap-2 mt-5 mb-5">
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text"
                               class="form-control <?php echo $session->has('name') ? 'is-invalid' : '' ?>"
                               id="name"
                               name="name"
                               placeholder="Бойцовский клуб"
                        >
                        <label for="name">Название фильма</label>
                        <?php if ($session->has('name')) { ?>
                        <div id="name" class="invalid-feedback">
                            <?php echo $session->getFlash('name')[0] ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <textarea type="text"
                                  style="height: 100px"
                               class="form-control <?php echo $session->has('description') ? 'is-invalid' : '' ?>"
                               id="description"
                               name="description"
                               placeholder="Очень крутой фильм.."
                        ></textarea>
                            <label for="description">Описание</label>
                        <?php if ($session->has('description')) { ?>
                            <div id="description" class="invalid-feedback">
                                <?php echo $session->getFlash('description')[0] ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            


            <div class="row g-2">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Изображение</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
                </div>
            </div>


            <div>
                <select class="form-select" aria-label="Default select example" name="category">
                    <option selected>Категория</option>
                    <?php foreach ($categories as $category) {  ?>
                    <option value="<?php echo $category->id() ?>">
                        <?php echo $category->name() ?>
                    </option>
                    <?php } ?>
                </select>
            </div>





            <div class="row g-2">
                <button class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
</main>

<?php $view->component('end'); ?>



