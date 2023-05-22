<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h2>Form input data</h2>
    <br>
    <br>
    <p>nama ={{ $nama }}</p>
    <p>tanggal pemeriksaan= {{ $tanggal_pemeriksaan }}</h4>
    <br>
    <p> usia= {{ $umur }}</p>
    <p> jenis kelamin= {{ $jenis_kelamin }}</p>

    <table class="table table-bordered">
  <thead>
    <tr>
        <th >jenis darah</th>
        <th >hasil pemeriksaan</th>
        <th >Normal</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>Tekanan darah</td>
        <td></td>
        <td>120/80 mmhg</td>
    </tr>
    <tr>
        <td>asam urat</td>
        <td> </td>
        <td>pria:< 7mg/dl| wanita: < 6mg/dl </td>
    </tr>
    <tr>
        <td >kolestrol total</td>
        <td></td>
        <td>< 200mg /dl</td>
    </tr>
    <tr> <td >Gula darah</td>
    <td></td>
    <td>< puasa 70-110 mg/dl
    <hr> 2 jam setelah makan : 100-150 mg/dl
    <hr> Sewaktu/acak : 70-125 mg/dl </td> </tr>
  </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
