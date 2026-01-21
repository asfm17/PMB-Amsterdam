<h1>Contact berichten</h1>
<p><a href="/admin">← Dashboard</a></p>

<table border="1" cellpadding="8" cellspacing="0">
  <tr>
    <th>ID</th><th>Naam</th><th>Email</th><th>Bericht</th><th>Datum</th>
  </tr>
  @foreach($messages as $m)
    <tr>
      <td>{{ $m->id }}</td>
      <td>{{ $m->name }}</td>
      <td>{{ $m->email }}</td>
      <td>{{ $m->message }}</td>
      <td>{{ $m->created_at }}</td>
    </tr>
  @endforeach
</table>
