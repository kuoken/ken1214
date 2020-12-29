<html>
<head>
<style>
  body {
      font-family:標楷體;
  }
</style>
</head>
<body>
<h2>今日你的幸運數字如下：</h2>
<hr>
<ul>
<h3>
<th>預測中獎號碼：</th>

@foreach ($numbers as $number)
  <tr>
  <th>{{ $number }}</th>
  </tr>
@endforeach
特別號：{{ $lucky_number }}
</h3>
</ul>
</hr>
</body>
</html>
