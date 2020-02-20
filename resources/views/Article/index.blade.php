<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
</head>
<body>

<h2>Table Caption</h2>
<p>To add a caption to a table, use the caption tag.</p>

<table style="width:100%">
  <caption>title</caption>
  <tr>
    <th>บทความ</th>
    <th>เรื่อง</th>
  </tr>
  <tr>
    <td>{{$title}}</td>
    <td>{{$subtitle}}</td>
  </tr>

</table>

</body>
</html>
