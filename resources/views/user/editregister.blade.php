<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <title>editregister</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="{{ asset('/css/style_iso.css') }}"> -->
</head>

<body>
  <div class="mx-auto" style="width: 400px;">
    <h3>お子様の情報を修正</h2>
      @if ($errors->any())
      <div>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <form class="form" action="{{ url('/editregister') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <div class="sm-2">
          <label for="FormControlInput1" class="form-label">お子様の名前</label>
          <input type="text" name="child_name" class="form-control" value="{{ old('child_name') }}">
        </div>

        <div>
          <label for="FormControl" class="form-label">生年月日</label>
        </div>

        <select>
          <option value="{{ old('name') }}">--</option>
          <?php foreach (range(1980, 2024) as $year) : ?>
            <option value="<?= $year ?>"><?= $year ?></option>
          <?php endforeach; ?>
        </select>
        <label for="day">年</label>

        <select>
          <option value="">--</option>
          <?php foreach (range(1, 12) as $month) : ?>
            <option value="<?= str_pad($month, 2, 0, STR_PAD_LEFT) ?>"><?= $month ?></option>
          <?php endforeach; ?>
        </select>
        <label for="day">月</label>


        <select>
          <option value="">--</option>
          <?php foreach (range(1, 31) as $day) : ?>
            <option value="<?= str_pad($day, 2, 0, STR_PAD_LEFT) ?>"><?= $day ?></option>
          <?php endforeach; ?>
        </select>
        <label for="day">日</label>
        <div>
          <input type="submit" class="btn btn-light" value="追加">
        </div>

  </div>
  </div>
  </div>
</body>

</html>