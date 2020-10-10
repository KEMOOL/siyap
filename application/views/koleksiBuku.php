<div class="containerHeader">
    <div class="textHeader1">Koleksi Buku</div>
</div>
<div class="containerPencarian">
    <form class="formPencarian">
        <div class="row">
            <div class="col-10">
                <div class="pencarian"><input type="text" id="pencarian" name="pencarian">
                </div>
            </div>
            <div class="col-2">
                <div class="buttonPencarian">
                    <button type="submit" id="buttonPencarian">Cari</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="bukuPopuler">
    <div class="row listBuku" id="listBuku">
        <?php
        foreach ($buku as $buku) {
            $judul = '';
            $judul = explode("/", $buku['Title']);

            echo '<div class="col-sm">';
            echo '<a href="' . base_url() . 'buku/' . $buku['ID'] . '">';
            echo '<div class="card cardBuku">';
            echo '<div class="card-header">';
            $filename = './assets/img/cover/' . $buku['ID'] . '.jpg';
            if (file_exists($filename)) {
                echo '<img src="' . base_url() . 'assets/img/cover/' . $buku['ID'] . '.jpg" class="imgKoleksiBuku">';
            } else {
                echo '<img src="' . base_url() . 'assets/img/cover/tdkada.gif" class="imgKoleksiBuku">';
            }
            echo '</div>';
            echo '<div class="card-body" style="color:black;">';
            echo $judul[0];
            echo '</div>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
        }
        ?>
    </div>
    <div class="paginationn">
        <?= $this->pagination->create_links(); ?>
    </div>
</div>