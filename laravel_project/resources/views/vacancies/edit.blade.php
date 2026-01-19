<h1>Vacature bewerken</h1>
<p><a href="/admin/vacancies">← Terug</a></p>

<form method="POST" action="/admin/vacancies/{{ $vacancy->id }}">
  @csrf
  @method('PUT')
  <p>Titel<br><input name="title" value="{{ $vacancy->title }}" required></p>
  <p>Locatie<br><input name="location" value="{{ $vacancy->location }}"></p>
  <p>Beschrijving<br><textarea name="description" rows="6" required>{{ $vacancy->description }}</textarea></p>
  <button type="submit">Opslaan</button>
</form>
