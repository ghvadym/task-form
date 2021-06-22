<?php
/*
  * Template name: Login
  * */


echo get_header() ?>

<section class="form">
    <div class="container">
        <div class="form__wrap" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/background.png'; ?>)">
            <div class="form__border">
                <div class="border__image" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/wood_border.png'; ?>)">
                    <img class="border__image-head" src="<?php echo get_template_directory_uri() . '/assets/img/rawlplug.png'; ?>" alt="border image head">
                    <div class="form__item">

                        <form action="index.php" method="post" class="form__login">
                            <h2 class="form__title">Pixels Daily</h2>
                            <div class="form__errors"></div>
                            <div class="form__body">
                                <div class="input-row">
                                    <label for="name">Username</label>
                                    <input type="text" name="name">
                                </div>
                                <div class="input-row">
                                    <label for="password">Password</label>
                                    <input type="password" name="password">
                                </div>
                                <button type="submit" class="btn-submit"> > </button>
                            </div>
                        </form>
                    </div>
                    <img class="border__image-bottom" src="<?php echo get_template_directory_uri() . '/assets/img/chalk.svg'; ?>" alt="chalk">
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo get_footer() ?>
