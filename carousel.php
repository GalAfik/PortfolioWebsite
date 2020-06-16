<div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
  <div class="carousel-inner v-2" role="listbox">

    <?php
    for ($i = 0; $i < 10; $i++) {
        echo '
        <div class="carousel-item">
          <div class="col-12 col-md-4">
            <div class="card mb-2">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (34).jpg" alt="Card image cap">
            </div>
          </div>
        </div>
        ';
    }
    ?>

  </div>
</div>