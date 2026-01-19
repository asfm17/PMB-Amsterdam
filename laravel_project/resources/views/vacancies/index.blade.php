<h1>Vacatures</h1>
@if(session('success')) <p>{{ session('success') }}</p> @endif
<p><a href="/admin">← Dashboard</a> | <a href="/admin/vacancies/create">+ Nieuwe vacature</a></p>

<ul>
@foreach($vacancies as $v)
  <li>
    <strong>{{ $v->title }}</strong> ({{ $v->location ?? '-' }})
    <a href="/admin/vacancies/{{ $v->id }}/edit">Bewerk</a>

    <form method="POST" action="/admin/vacancies/{{ $v->id }}" style="display:inline">
      @csrf
      @method('DELETE')
      <button type="submit">Verwijder</button>
    </form>
  </li>
@endforeach
</ul>
