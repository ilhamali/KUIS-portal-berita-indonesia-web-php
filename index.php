<?php include 'api.php'; ?>
<?php include 'header.php'; ?>
            
            <h3>Berita Terpopuler</h3>
            <div class="row">
            <?php foreach($populer['articles'] as $d){ ?>
                <div class="col-md-4">
                <br>
                    <div class="card">
                        <img src="<?php echo $d['urlToImage']; ?>" height="200px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title"><b>JUDUL : </b><?php
                            $judul =  $d['title'];
                            $judul2 = substr($judul, 0, 50);
                            echo $judul2;
                             ?></h6>
                             <p class="card-text"><b>Terbit : </b><?php echo $d['publishedAt']; ?></p>
                            <p class="card-text"><b>Penulis : </b> <?php echo $d['author']; ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo $d['url']; ?>" class="btn btn-primary">Kunjungi Situs Berita</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </body>
</html>


    

