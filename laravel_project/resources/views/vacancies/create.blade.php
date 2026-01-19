<h1>Nieuwe vacature</h1>
<p><a href="/admin/vacancies">← Terug</a></p>

<form method="POST" action="/admin/vacancies">
  @csrf
  <p>Titel<br><input name="title" required></p>
  <p>Locatie<br><input name="location"></p>
  <p>Beschrijving<br><textarea name="description" rows="6" required></textarea></p>
  <button type="submit">Opslaan</button>
</form>
