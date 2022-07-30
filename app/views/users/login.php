<!-- contact section -->


<?php if (message()) : ?>
    <div class="alert alert-danger text-center my-5"><?= message('', true) ?></div>
  <?php endif; ?>


<section class="contact_section layout_padding">
  <div class="custom_heading-container">
    <h3 class=" ">
      Signup form
    </h3>
  </div>
  
  <div class="container layout_padding2-top">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <form action="" method="POST">

          <div>
            <input type="text" name="email" placeholder="EMAIL" value="<?= set_value('email') ?>">
            <?php if (!empty($errors['email'])) : ?>
              <small class="text-danger"><?= $errors['email'] ?></small>
            <?php endif; ?>
          </div>
          <div>
            <input type="password" name="password" placeholder="PASSWORD" value="<?= set_value('password') ?>">
            <?php if (!empty($errors['password'])) : ?>
              <small class="text-danger"><?= $errors['password'] ?></small>
            <?php endif; ?>
          </div>


          <div class="d-flex justify-content-center ">
            <button>
              SIGIN
            </button>
          </div>
        </form>
      </div>
    </div>

  </div>
</section>

<!-- end contact section -->