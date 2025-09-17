<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biografía</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        :root { --bg:#0f172a; --card:#111827; --text:#e5e7eb; --muted:#9ca3af; --primary:#22d3ee; --accent:#a78bfa; }
        *{ box-sizing:border-box }
        html,body{ height:100% }
        body{
            margin:0; font-family:'Inter',system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,'Helvetica Neue',Arial,'Noto Sans',sans-serif;
            color:var(--text); background: radial-gradient(1200px 600px at 10% 0%, rgba(167,139,250,.12), transparent),
                     radial-gradient(1000px 500px at 90% 10%, rgba(34,211,238,.12), transparent), var(--bg);
        }
        .container{ max-width:960px; margin:0 auto; padding:32px 20px 56px }
        .card{ background: linear-gradient(180deg, rgba(255,255,255,.04), rgba(255,255,255,.02)); border:1px solid rgba(255,255,255,.08); border-radius:16px; backdrop-filter: blur(6px); box-shadow: 0 10px 30px rgba(0,0,0,.35); overflow:hidden }
        header{ padding:28px 28px 12px; display:flex; align-items:center; justify-content:space-between; gap:16px }
        .title{ font-size:28px; font-weight:800; letter-spacing:.3px }
        .subtitle{ color:var(--muted); font-weight:500; font-size:14px }
        .pill{ padding:8px 12px; border-radius:999px; background: rgba(34,211,238,.15); color:#67e8f9; border:1px solid rgba(34,211,238,.35); font-weight:600; font-size:12px }
        .content{ padding:8px 28px 28px; display:grid; grid-template-columns:1fr; gap:18px }
        section{ padding:18px 20px; border-radius:12px; background: rgba(255,255,255,.02); border:1px solid rgba(255,255,255,.06) }
        section h2{ margin:0 0 6px; font-size:18px; font-weight:700; color:#c7d2fe }
        p{ margin:8px 0 0; line-height:1.65 }
        .footer{ padding:22px 28px 28px; color:var(--muted); font-size:12px }
        nav{ display:flex; flex-wrap:wrap; gap:8px }
        nav a{ text-decoration:none; color:var(--text); font-weight:600; padding:8px 12px; border-radius:10px; border:1px solid rgba(255,255,255,.08) }
        nav a:hover{ background: rgba(167,139,250,.12); border-color: rgba(167,139,250,.35) }
        @media (min-width:768px){ .content{ grid-template-columns:repeat(2,1fr) } section:nth-child(1){ grid-column:1/-1 } }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <header>
          <div>
            <div class="title">Biografía</div>
            <div class="subtitle">Proyecto Laravel</div>
          </div>
          <span class="pill">Commit #1</span>
        </header>

        <div class="content">
          <section id="nombre">
            <h2>Mi nombre</h2>
            <p>
              Sergio Andres Cuadros Suarez
            </p>
          </section>

      </div>
    </div>
  </body>
</html>


