<style>
  table{
      border-collapse: collapse;
      width: 100%;
      margin: 0 auto;
  }
  table th{
      border:1px solid #000;
      padding: 3px;
      font-weight: bold;
      text-align: center;
  }
  table td{
      border:1px solid #000;
      padding: 3px;
      vertical-align: top;
  }
</style>
                <h2 align="center">Peminjaman</h2>
                                <table >
                                    
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama Peminjam</th>
                                        <th>Tgl Pinjam</th>
                                        <th>Jumlah Buku</th>
                                    </tr>
                              
                                <?php $no = 1;?>
                                <?php foreach ($kembali as $pmn):?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $pmn->ID_PINJAM ?></td>
                                        <td><?php echo $pmn->FULL_NAME ?></td>
                                        <td><?php $tgl = date_create($pmn->TGL_PINJAM);echo date_format($tgl,"D, d M Y"); ?></td>
                                        <td><?php echo $pmn->JML_BUKU ?></td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php endforeach; ?>
                                
                                
                            </table>