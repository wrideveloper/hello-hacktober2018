<!DOCTYPE html>
<html>
<head>
  <title>Report Table</title>
  <style type="text/css">
    #outtable{
      padding: 20px;
      border:1px solid black;
      width:100%;
    }
 
    .short{
      width: 20%;
    }
 
    .normal{
      width: 100%;
    }

    #heading{
      font-family: Arial, Helvetica, sans-serif;
      text-align: center;
      font-style: italic;
      font-size: 26px;
    }

    #ttd{
      align:right;
    }

    .tanggal{
      /* align:right; */
      padding: 0px;
    }
 
    table{
      font-family: Arial, Helvetica, sans-serif;
      padding: 20px;
      border:1px solid black;
      width:100%;
      font-size:14px;
    }
 
    td{
      border:0px solid black;
    }
    tr{
      border:0px solid black;
    }

    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5
    }
  </style>
</head>
<body>
  <img src="./uploads/kop.png">
  <table>
    <tr>
      <td colspan="4">
      <h1><div id="heading">PURCHASE ORDER</div></h1>
      </td>
    </tr>
  </table>
  <table class="tanggal">
    <tr>
      <td>
      <p><?= $tempattanggal; ?></p>
      </td>
    </tr>
  </table>


  <table>
	  	<tr>
	  		<td class="short">To</td>
	  		<td class="normal"><?= $namaperusahaanto['namaperusahaan']; ?><br>
        <?= $namaperusahaanto['alamat']; ?><br>
        <?= $namaperusahaanto['namaowner']; ?><br>
        <?= $namaperusahaanto['kontak']; ?>
        </td>
				<td class="short">From</td> 
  			<td class="normal"><?= $namaperusahaanfrom['namaperusahaan']; ?><br>
        <?= $namaperusahaanfrom['alamat']; ?><br>
        <?= $namaperusahaanfrom['namaowner']; ?><br>
        <?= $namaperusahaanfrom['kontak']; ?>
        </td>
  		</tr>
     <tr>
				<td class="short">Item</td>
 			  <td class="normal"><?= $namabarang['nama_produk']; ?></td>
  			<td class="short">No</td>
	  		<td class="normal"><?= $nopo; ?></td>
	  	</tr>
      <!-- </table> -->
	  	<tr>
      <table>
        <tr>
          <td colspan="3"><b>Specification  :</b></td>
        </tr>
        <tr>
          <td>Material</td>
          <td>:</td>
          <td><?= $namabarang['material']; ?></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>:</td>
          <td><?= $namabarang['content']; ?></td>
        </tr>
        <tr>
          <td>Warna</td>
          <td>:</td>
          <td><?= $namabarang['warna']; ?></td>
        </tr>
        <tr>
          <td>Merk</td>
          <td>:</td>
          <td><?= $namabarang['merk']; ?></td>
        </tr>
        <tr>
          <td>Spesifikasi</td>
          <td>:</td>
          <td><?= $namabarang['spesifikasi']; ?></td>
        </tr>
        <tr>
          <td>Quantity</td>
          <td>:</td>
          <td><?= $qty; ?> Kg</td>
        </tr>
        <tr>
          <td>Price</td>
          <td>:</td>
          <td>Rp. <?= $harga; ?>,- / Kg include PPN<br>FOT Gudang <?= $namaperusahaanfrom['namaperusahaan']; ?></td>
        </tr>
        <tr>
          <td>Total Amount</td>
          <td>:</td>
          <td><?= $harga * $qty; ?></td>
        </tr>
        <tr>
          <td>Packing</td>
          <td>:</td>
          <td><?= $namabarang['packing']; ?></td>
        </tr>
        <tr>
          <td>Delivery Time</td>
          <td>:</td>
          <td><?= $delivery_time; ?></td>
        </tr>
        <tr>
          <td>Delivery Site</td>
          <td>:</td>
          <td><?= $delivery_site; ?></td>
        </tr>
        <tr>
          <td>Payment</td>
          <td>:</td>
          <td><?= $payment; ?></td>
        </tr>
        <tr>
          <td>Trucking</td>
          <td>:</td>
          <td><?= $trucking; ?></td>
        </tr>
      <!-- </table> -->
  		</tr>
Thanks for your attention and cooperation. 
      <div id="ttd">
        <img src="./uploads/ttd.png">
      </div>
 </table>
<body>
