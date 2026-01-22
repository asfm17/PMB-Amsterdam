<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">
  <title>Admin dashboard</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    
    body {
      font-family: system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial;
      margin: 0;
      padding: 20px;
    }
    
    h1 {
      font-size: clamp(24px, 5vw, 32px);
      margin-bottom: 20px;
    }
    
    ul {
      list-style: none;
      padding: 0;
    }
    
    li {
      margin-bottom: 12px;
    }
    
    a {
      color: #0066cc;
      text-decoration: none;
    }
    
    a:hover {
      text-decoration: underline;
    }
    
    @media (max-width: 768px) {
      body {
        padding: 16px;
      }
      
      h1 {
        font-size: 24px;
      }
    }
    
    @media (max-width: 480px) {
      body {
        padding: 12px;
      }
      
      h1 {
        font-size: 20px;
      }
    }
  </style>
</head>
<body style="font-family:system-ui;margin:20px">
  <h1>Admin dashboard</h1>

  <ul>
    <li><a href="/admin/vacancies">Vacatures beheren</a></li>
    <li><a href="/admin/contact-messages">Contact berichten</a></li>
  </ul>
</body>
</html>
