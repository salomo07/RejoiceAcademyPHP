<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<thead style="font-size:12px">
  <tr>
    <th><center>Pabean</center></th>
    <th><center>Nota</center></th>
    <th><center>Invoice</center></th>
    <th><center>Tgl. Nota</center></th>
    <th><center>Tgl. Invoice</center></th>
    <th><center>Kode Barang</center></th>
    <th><center>Nama Barang</center></th>
    <th><center>Satuan</center></th>
    <th><center>Valas</center></th>
    <th><center>Kode HS</center></th>
    <th><center>Keterangan</center></th>
    <th><center>Tarif Satuan</center></th>  
    <th><center>Jumlah</center></th>                                          
    <th><center>CIF</center></th>                      
    <th><center>Nilai Barang</center></th>
    <th><center>PDRI Bayar</center></th>
    <th><center>PDRI Bebas</center></th>
    <th><center>Pilih</center></th>
  </tr>
</thead>
<tbody style="font-size:12px">
  <?php foreach ($dataBC as $key => $detail): ?>
    <tr onclick=""> <!--trClicked(this)-->
      <td><center><?php echo $detail->NoPabean;?><input type="hidden" id="txtIdDetail" value="<?php echo $detail->IdDetail?>"></center></td>
      <td ><center><?php echo $detail->NoNota;?></center></td>
      <td><center><?php echo $detail->NoInvoice;?></center></td>
      <td><center><?php echo $detail->TanggalNota;?></center></td>
      <td><center><?php echo $detail->TanggalInvoice;?></center></td>
      <td><center><?php echo $detail->KodeBarang;?></center></td>
      <td><center><?php echo $detail->NamaBarang;?></center></td>
      <td><center><?php echo $detail->Sat;?></center></td>
      <td><center><?php echo $detail->Valas;?></center></td>
      <td><center><?php echo $detail->KodeHS;?></center></td>
      <td><center><?php echo $detail->Keterangan;?></center></td>
      <td><center><?php echo $detail->Tarif;?></center></td>
      <td><center><?php echo number_format($detail->Qty, 4, ',', '.');?></center></td>
      <td><center><?php echo number_format($detail->CIF, 2, ',', '.');?></center></td>
      <td><center><?php echo number_format($detail->Total, 2, ',', '.');?></center></td>
      <td><center><?php $detail->PDRIBayar?></center></td>
      <td><center><?php $detail->PDRIBebas;?></center></td>
      <td><center><input id="chkApproval" type="checkbox" value="<?php echo $detail->IdDetail;?>"  <?php if($detail->IsApproved==true){echo "checked";}?>></center></td>
    </tr>
<?php endforeach ?>
</tbody>