
<!-- contact section -->
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
            <input type="hidden" name="role" value="contractor">
          <div>
            <input type="text" name="firstname" placeholder="FIRSTNAME" value="<?= set_value('firstname') ?>">
            <?php if (!empty($errors['firstname'])) : ?>
              <small class="text-danger"><?= $errors['firstname'] ?></small>
            <?php endif; ?>
          </div>
          <div>
            <input type="text" name="lastname" placeholder="LASTNAME" value="<?= set_value('lastname') ?>">
            <?php if (!empty($errors['lastname'])) : ?>
              <small class="text-danger"><?= $errors['lastname'] ?></small>
            <?php endif; ?>
          </div>
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
          <div>
            <input type="password" name="repassword" placeholder="RETYPE PASSWORD" value="<?= set_value('repassword') ?>">
            <?php if (!empty($errors['repassword'])) : ?>
              <small class="text-danger"><?= $errors['repassword'] ?></small>
            <?php endif; ?>
          </div>

          <div class="d-flex justify-content-center ">
            <button>
              SIGNUP
            </button>
          </div>
        </form>
      </div>
    </div>

  </div>
</section>

<!-- end contact section -->