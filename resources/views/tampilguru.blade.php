<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Tampil Guru</h1>
    <form action="/updateguru/{{ $data->id }}" method="POST">
        @csrf
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kode Guru</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kodeguru" value="{{ $data->kodeguru }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Guru</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="namaguru" value="{{ $data->namaguru }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mapel</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="mapel" value="{{ $data->mapel }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>