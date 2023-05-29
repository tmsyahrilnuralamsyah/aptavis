<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klasemen Sepak Bola</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mt-5">KLASEMEN SEPAK BOLA</h1>
    <div class="container-fluid d-flex justify-content-center mt-3">
        <div class="div" style="width: 75%;">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button type="button" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#editskor" style="color: white">Edit Skor</button>

                    <div class="modal" id="editskor" tabindex="-1" role="dialog" aria-labelledby="editskor" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title">Edit Skor</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="post" action="{{ route("editSkor") }}">
                                    {{ csrf_field() }}

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="namaklub1" class="form-label">Kandang</label>
                                                        <select class="form-select" name="namaklub1" id="namaklub1" aria-label="Default select example" required>
                                                            <option disabled selected>Pilih Klub</option>
                                                            @foreach($klasemens as $k)
                                                                <option value="{{ $k->klub }}">{{ $k->klub }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="form-group">
                                                        <select class="form-select" name="skorklub1" aria-label="Default select example" required>
                                                            <option disabled selected>Jumlah Gol</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="namaklub2" class="form-label">Tandang</label>
                                                        <select class="form-select" name="namaklub2" id="namaklub2" aria-label="Default select example" required>
                                                            <option disabled selected>Pilih Klub</option>
                                                            @foreach($klasemens as $k)
                                                                <option value="{{ $k->klub }}">{{ $k->klub }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="form-group">
                                                        <select class="form-select" name="skorklub2" aria-label="Default select example" required>
                                                            <option disabled selected>Jumlah Gol</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#tambahklub">Tambah Klub</button>

                    <div class="modal" id="tambahklub" tabindex="-1" role="dialog" aria-labelledby="tambahklub" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title">Tambah Klub</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="post" action="{{ route("tambahKlub") }}">
                                    {{ csrf_field() }}

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="namaklub" class="form-label">Nama Klub</label>
                                                    <input type="text" class="form-control" name="namaklub" id="namaklub" placeholder="Nama Klub" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kota" class="form-label">Kota Asal</label>
                                                    <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota Asal" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-striped text-center mt-2">
                <thead style="background-color: rgb(0, 114, 116);">
                    <tr>
                        <td style="color: white;">No</td>
                        <td style="color: white;">Nama Klub</td>
                        <td style="color: white;">Ma</td>
                        <td style="color: white;">Me</td>
                        <td style="color: white;">S</td>
                        <td style="color: white;">K</td>
                        <td style="color: white;">GM</td>
                        <td style="color: white;">GK</td>
                        <td style="color: white;">SG</td>
                        <td style="color: white;">Poin</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($klasemens as $k)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="text-start">{{ $k->klub }}</td>
                            <td>{{ $k->ma }}</td>
                            <td>{{ $k->me }}</td>
                            <td>{{ $k->s }}</td>
                            <td>{{ $k->k }}</td>
                            <td>{{ $k->gm }}</td>
                            <td>{{ $k->gk }}</td>
                            <td>{{ $k->sg }}</td>
                            <td>{{ $k->poin }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <p><b>Keterangan :</b> <br> Ma = Main <br> Me = Menang <br> S = Seri <br> K = Kalah <br> GM = Total Gol Masuk <br> GK = Total Gol Kebobolan <br> SG = Total Selisih Gol</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>