        <!-- Content
		============================================= -->
		<section id="content">

            <div id="content-wrap">

                <!-- === Detail Paket =========== -->
				<div class="container">
							<!-- Three columns of text below the carousel -->
							<div class="row" style="padding: 16px;">
                            
                                <div class="col-sm-8">
                                    <h2><?= $paket[0]['nama_paket'] ?></h2>
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <?php foreach ($paket[0]['wisata'] as $key=>$item) : ?>
                                            <li data-target="#myCarousel" data-slide-to="<?= $key ?>" class="active"></li>
                                            <?php endforeach; ?>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <?php foreach ($paket[0]['wisata'] as $key=>$item) : ?>
                                            <div class="item <?php if($key==0) echo 'active'?>">
                                                <img src="<?= base_url().'/images/wisata/'.$item['img_thumbnail'] ?>" alt="<?= $item['nama_wisata'] ?>" style="width:100%;">
                                                <div class="carousel-caption">
                                                    <h3><?= $item['nama_wisata'] ?></h3>
                                                    <p><?= $item['alamat'] ?></p>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>

                                        <!-- Left and right controls -->
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <h2>Detail Paket</h2>
                                    <text style="color: #1400FF">Tempat yang dikunjungi:</text><br>
                                    <ul>
                                    <?php foreach ($paket[0]['wisata'] as $key=>$item) : ?>
                                        <li><?= $item['nama_wisata'] ?></li>
                                    <?php endforeach; ?>
                                    </ul>
                                    <text style="color: #1400FF">Pilihan tempat menginap:</text><br>
                                    <ul>
                                        <?php if($paket[0]['nama_paket']=='Paket 4P Purwakarta') {
                                            echo '<li>Grand Situ Buleud Hotel</li>';
                                        } else {
                                            echo '<li>The Silk At Dago</li>';
                                        } ?>
                                    </ul>
                                    <text style="color: #1400FF">Durasi waktu wisata:</text><br>
                                    <?= $paket[0]['durasi'] ?><br>
                                    <text style="color: #1400FF">Peserta wisata:</text><br>
                                    <?= $paket[0]['kuota'] ?><br><br><br>

                                    <text style="color: #1400FF; font-size: 18px">Estimasi Harga*:</text><br>
                                    <?php $fmt = new NumberFormatter('id_ID', NumberFormatter::CURRENCY );
                                     echo $fmt->formatCurrency($paket[0]['harga'], "IDR") ?><br>
                                     <input type="submit" class="btn small browny hover-dark" style="width: 50%;" value="Continue"/>
                                </div>

                            </div>
                        </div>

            </div><!-- #content-wrap -->

		</section><!-- #content end -->