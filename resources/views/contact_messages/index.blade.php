<?php
// Template for contact messages display
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">
    <title>Contact berichten</title>
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
        }
        
        a {
            color: #0066cc;
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        table {
            width: 100%;
            max-width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #e0e0e0;
        }
        
        th {
            background: #f9f9f9;
            font-weight: 600;
            color: #222;
        }
        
        tr:hover {
            background: #fafafa;
        }
        
        @media (max-width: 768px) {
            body {
                padding: 16px;
            }
            
            h1 {
                font-size: 24px;
            }
            
            table {
                font-size: 13px;
            }
            
            th, td {
                padding: 8px;
            }
        }
        
        @media (max-width: 480px) {
            body {
                padding: 12px;
            }
            
            h1 {
                font-size: 20px;
            }
            
            table {
                font-size: 12px;
            }
            
            th, td {
                padding: 6px;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
        }
    </style>
</head>
<body>
<h1>Contact berichten</h1>
<p><a href="/admin">← Dashboard</a></p>

<div style="overflow-x: auto;">
<table border="1" cellpadding="8" cellspacing="0">
  <tr>
    <th>ID</th><th>Naam</th><th>Email</th><th>Bericht</th><th>Datum</th>
  </tr>
  @foreach($messages as $m)
    <tr>
      <td>{{ $m->id }}</td>
      <td>{{ $m->name }}</td>
      <td>{{ $m->email }}</td>
      <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis;">{{ $m->message }}</td>
      <td>{{ $m->created_at }}</td>
    </tr>
  @endforeach
</table>
</div>

</body>
</html>
