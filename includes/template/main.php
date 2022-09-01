<main>
        <div class="container">
            <div class=" albums-card d-flex">
                <?php foreach($discs as $disc) : ?>
                    <div class="album p-2">
                        <img class="img-fluid" src= "<?= $disc['poster'] ?>" alt="">
                       <h5 class="text-white text-center pt-2"><?= strtoupper($disc['title']) ?></h5>
                       <h6 class="text-secondary text-center pt-3"><?= $disc['author'] ?></h6> 
                       <h6 class="text-secondary text-center pt-2"><?= $disc['year'] ?></h6> 
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>