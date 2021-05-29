<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 Form Validation Example - positronx.io</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 550px;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
         
    <?php $validation = \Config\Services::validation(); ?>

    <form method="post" action="<?php echo base_url('public/home/formValidation') ?>">
      <div class="form-group">
        <label>Jméno:</label>
        <input type="text" name="jmeno" class="form-control" required="">

        <!-- Error -->
        <?php if($validation->getError('jmeno')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('jmeno'); ?>
            </div>
        <?php }?>
      </div>
        
        <div class="form-group">
        <label>Příjmení:</label>
        <input type="text" name="prijmeni" class="form-control" required="">

        <!-- Error -->
        <?php if($validation->getError('prijmeni')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('prijmeni'); ?>
            </div>
        <?php }?>
      </div>
       
        <div class="form-group">
        <label>Věk:</label>
        <input type="number" name="vek" class="form-control" required="">

        <!-- Error -->
        <?php if($validation->getError('vek')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('vek'); ?>
            </div>
        <?php }?>
      </div>
        <label>Pohlaví:</label>
        <select class="form-control" name="pohlavi" id="pohlavi">
            <option value="0"></option>
  <option value="2" name="zena">Žena</option>
  <option value="1" name="muz">Muž</option>
</select>


        

      

      

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Uložit</button>
      </div>
    </form>

  </div>
</body>

</html>