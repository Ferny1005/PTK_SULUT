  <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <center>
                  <h2>Persentase Kepuasan Pelanggan</h2>
                 <br>
                  <table align="center">
      <tr>
      <?php

require 'vote-count.php';
require 'functions.php';
      $sql = "SELECT * FROM vote_opsi";
      $query = $koneksi->query($sql);

      while ( $row = $query->fetch_assoc() ) : ?>
        <td align="center" width="200px">
          <div class="persentase"><?php echo getPolling( $row['id_opsi'] );?></div>       
            <img src="<?php echo $row['thumbnail'];?>" width="100" alt=""/>
            <p><?php echo $row['nama_opsi'];?></p>
        </td>
      <?php endwhile; ?>

      </tr>
    </table>
    </center>
                        </div>
                    </div>