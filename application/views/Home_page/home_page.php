<?php


$my_path = get_url_cover();
?>


<section class="bg-container">
   <div class="container p-0">


      <div class="mp-bigbox">

         <!-- New Updates -->
         <div class="mp-box-left">

            <div class="sbox mb-3 box-shadow-min">

               <h2 class="text-main-color content-title">Update Terbaru</h2>
               <hr class="mb-3 mt-2">
               <div class="bxcontent">

                  <?php foreach ($comic_model as $data) { ?>


                     <div class="bxcontent-items">

                        <div class="thumbnail">
                           <img src="<?= $my_path . $data->comic_cover ?>" alt="Comic Cover">
                        </div>
                        <div class="info-details">
                           <a href="<?= base_url("tampilkan/komik/" . $data->comic_slug) ?>" class="text-decoration-none title">
                              <?= $data->comic_name ?>
                           </a>

                           <div class="small-box">
                              <div class="type"><?= $data->comic_type ?></div>
                              <div class="status"><?= $data->comic_status ?></div>
                           </div>


                           <span class="latest-chapters">
                              <span class="chapter-list">
                                 <a href="#" class="text-decoration-none">Ch. 8</a>
                                 <p>2 hours ago</p>
                              </span>
                              <span class="chapter-list">
                                 <a href="#" class="text-decoration-none">Ch. 7</a>
                                 <p>12 hours ago</p>
                              </span>
                              <span class="chapter-list">
                                 <a href="#" class="text-decoration-none">Ch. 6</a>
                                 <p>1 day ago</p>
                              </span>
                           </span>
                        </div>

                     </div>


                  <?php } ?>



               </div>

            </div>

         </div>

         <!-- Genre -->
         <div class="mp-box-right">


            <div class="sbox mb-3 box-shadow-min">

               <h2 class="text-main-color content-title text-center">Our Discord</h2>
               <hr class="my-2">
               <img src="<?= base_url("assets/Join-Us.png") ?>" alt="discord img" width="100%">

            </div>

            <div class="sbox mb-3 box-shadow-min">

               <h2 class="text-main-color content-title text-center">Genre</h2>
               <hr class="my-2">
               <ul class="genre-ul">
                  <?php foreach ($genres as $genre) : ?>
                     <li class="genre-li"><a class="list-a" href="#"><?= $genre["genre"] ?></a></li>
                  <?php endforeach; ?>
               </ul>

            </div>

            <div class="sbox mb-3 box-shadow-min px-0">

               <h2 class="text-main-color content-title text-center">Komik Populer</h2>
               <hr class="mt-2 mb-0 mx-2">
               <div class="komik-populer-box">
                  <ul>

                     <?php $index = 1 ?>
                     <?php foreach ($popular_comics as $comic) : ?>

                        <?php if ($index === 1) : ?>

                           <li class="topone">
                              <img src="<?= $my_path . $comic->comic_cover ?>" alt="cover">
                              <div class="komik">
                                 <div class="rank">
                                    <p class="rank-1"><?= $index ?></p>
                                 </div>
                                 <a href="comic_page.html" class="r-series">
                                    <img src="<?= $my_path . $comic->comic_cover ?>" alt="cover">
                                 </a>
                                 <a href="comic_page.html" class="l-series">
                                    <p class="max-lines set-lines-1 popular-title"><?= $comic->comic_name ?>
                                    </p>
                                    <p class="max-lines set-lines-2"><?= join(", ", $comic->comic_genre) ?>
                                    </p>
                                    <p class="max-lines set-lines-1 text-secondary type tpone"><?= $comic->comic_type ?></p>
                                 </a>
                              </div>
                           </li>

                           <!-- <li class="topone">
                              <img src="<?= $my_path . $comic->comic_cover ?>" alt="cover">
                              <div class="komik">
                                 <div class="rank">
                                    <p class="rank-1"><?= $index ?></p>
                                 </div>
                                 <a href="comic_page.html" class="r-series">
                                    <img src="<?= $my_path . $comic->comic_cover ?>" alt="cover">
                                 </a>
                                 <a href="comic_page.html" class="l-series">
                                    <p class="max-lines set-lines-1 popular-title">
                                       <?= $comic->comic_name ?>
                                    </p>
                                    <p class="max-lines set-lines-3">
                                       <?= join(", ", $comic->comic_genre) ?>
                                    </p>
                                    <p class="max-lines set-lines-1 text-secondary type tpone"><?= $comic->comic_type ?></p>
                                 </a>
                              </div>
                           </li> -->

                        <?php else : ?>

                           <li class="top-ten">
                              <div class="rank">
                                 <p class="top-ten-rank"><?= $index ?></p>
                              </div>
                              <a href="comic_page.html" class="r-series">
                                 <img src="<?= $my_path . $comic->comic_cover ?>" alt="cover">
                              </a>
                              <a href="comic_page.html" class="l-series">
                                 <p class="max-lines set-lines-1 popular-title text-secondary"> <?= $comic->comic_name ?></p>
                                 <p class="max-lines set-lines-3 text-secondary"><?= join(", ", $comic->comic_genre) ?></p>
                                 <p class="max-lines set-lines-1 text-secondary type"><?= $comic->comic_type ?></p>
                              </a>
                           </li>

                        <?php endif; ?>
                        <?php $index++ ?>
                     <?php endforeach; ?>

                  </ul>
               </div>
            </div>
         </div>


      </div>

   </div>

   </div>
</section>