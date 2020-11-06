<section class="section">
  <div class="card">
    <div class="card-header card-header-icon card-header-success">
      <div class="card-icon">
        <i class="material-icons">stacked_line_chart</i>
      </div>
      <h4 class="card-title title-per-section">
        Top 10 Surat Masuk
      </h4>
    </div>
    <div class="card-body">
      <table class='table table-striped' id="table2">
        <thead>
          <tr>
            <th>No Agenda</th>
            <th>Jenis surat</th>
            <th>Tahun</th>
            <th>Nomor surat</th>
            <th>Tanggal surat</th>
            <th>Perihal</th>
            <th>Surat Dari</th>
            <th>Isi Disposisi</th>
            <th>Diteruskan kepada</th>
            <th>Nama pengirim</th>
            <th>Scan surat</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i=0; $i < 1 ; $i++) { ?>
            <tr>
              <td>1248</td>
              <td>Segera</td>
              <td>2016</td>
              <td>800/1263/2026</td>
              <td>27-10-2016</td>
              <td>Permohonan data PNS</td>
              <td>Badan kepegawaian daerah</td>
              <td></td>
              <td></td>
              <td>user 1</td>
              <td><a href="#">EKD Permohonan Data PNS</a></td>
            </tr>                     
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</section>