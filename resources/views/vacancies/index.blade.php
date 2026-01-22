<?php
// Template for vacancies display
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">
    <title>Vacatures</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial;
            padding: 20px;
            background: #f5f5f5;
        }
        
        h1 {
            font-size: clamp(24px, 5vw, 32px);
            margin-bottom: 16px;
            color: #222;
        }
        
        p {
            margin-bottom: 16px;
            font-size: 14px;
        }
        
        a {
            color: #0066cc;
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        li {
            background: white;
            padding: 16px;
            margin-bottom: 12px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        li strong {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            color: #222;
        }
        
        li a {
            margin-right: 12px;
            font-size: 14px;
        }
        
        button {
            background: #d32f2f;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 13px;
            margin-left: 8px;
        }
        
        button:hover {
            background: #b71c1c;
        }
        
        .message {
            background: #e8f5e9;
            border-left: 4px solid #4caf50;
            padding: 12px;
            margin-bottom: 16px;
            border-radius: 4px;
        }
        
        @media (max-width: 768px) {
            body {
                padding: 16px;
            }
            
            h1 {
                font-size: 24px;
            }
            
            li {
                padding: 12px;
            }
            
            li strong {
                font-size: 15px;
            }
            
            li a, button {
                font-size: 13px;
                display: inline-block;
                margin-bottom: 6px;
            }
        }
        
        @media (max-width: 480px) {
            body {
                padding: 12px;
            }
            
            h1 {
                font-size: 20px;
            }
            
            li {
                padding: 12px;
                margin-bottom: 10px;
            }
            
            li a {
                display: block;
                margin-bottom: 6px;
            }
            
            button {
                padding: 5px 10px;
                width: 100%;
                margin-left: 0;
                margin-top: 6px;
            }
        }
    </style>
</head>
<body>
<h1>Vacatures</h1>
@if(session('success')) <p class="message">{{ session('success') }}</p> @endif
<p><a href="/admin">← Dashboard</a> | <a href="/admin/vacancies/create">+ Nieuwe vacature</a></p>

<ul>
@foreach($vacancies as $v)
  <li>
    <strong>{{ $v->title }}</strong> ({{ $v->location ?? '-' }})
    <div>
      <a href="/admin/vacancies/{{ $v->id }}/edit">Bewerk</a>

      <form method="POST" action="/admin/vacancies/{{ $v->id }}" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">Verwijder</button>
      </form>
    </div>
  </li>
@endforeach
</ul>

</body>
</html>
