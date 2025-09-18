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
        .container{ max-width:980px; margin:0 auto; padding:32px 20px 56px }
        .card{ background: linear-gradient(180deg, rgba(255,255,255,.04), rgba(255,255,255,.02)); border:1px solid rgba(255,255,255,.08); border-radius:16px; backdrop-filter: blur(6px); box-shadow: 0 10px 30px rgba(0,0,0,.35); overflow:hidden }
        header{ padding:28px 28px 16px; display:flex; align-items:center; justify-content:space-between; gap:16px }
        .title{ font-size:28px; font-weight:800; letter-spacing:.3px }
        .subtitle{ color:var(--muted); font-weight:500; font-size:14px }
        .pill{ padding:8px 12px; border-radius:999px; background: rgba(34,211,238,.15); color:#67e8f9; border:1px solid rgba(34,211,238,.35); font-weight:600; font-size:12px }
        .profile{ display:grid; gap:24px; padding:0 28px 28px; grid-template-columns:1fr }
        .profile-header{ display:flex; gap:18px; align-items:center }
        .avatar{ width:88px; height:88px; border-radius:50%; border:2px solid rgba(255,255,255,.15); background: radial-gradient(circle at 30% 30%, rgba(34,211,238,.25), rgba(167,139,250,.25)); box-shadow: 0 4px 16px rgba(0,0,0,.3); display:flex; align-items:center; justify-content:center }
        .avatar svg{ width:48px; height:48px; color: rgba(229,231,235,.92) }
        .name{ font-size:22px; font-weight:800 }
        .meta{ color:var(--muted); font-size:14px }
        .about{ line-height:1.7 }
        .panel{ padding:16px 18px; border-radius:12px; background: rgba(255,255,255,.02); border:1px solid rgba(255,255,255,.06) }
        nav{ display:flex; flex-wrap:wrap; gap:8px }
        nav a{ text-decoration:none; color:var(--text); font-weight:600; padding:8px 12px; border-radius:10px; border:1px solid rgba(255,255,255,.08) }
        nav a:hover{ background: rgba(167,139,250,.12); border-color: rgba(167,139,250,.35) }
        .links{ display:flex; gap:8px; flex-wrap:wrap }
        .badge{ padding:6px 10px; border-radius:999px; border:1px solid rgba(255,255,255,.08); color:var(--muted); font-size:12px }
        @media (min-width:820px){ .profile{ grid-template-columns: 280px 1fr } }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <header>
          <div>
            <div class="title">Perfil</div>
            <div class="subtitle">Resumen personal — Commits #1 y #2</div>
          </div>
          <nav>
            <a href="/biografia">Biografía</a>
            <a href="/historia">Historia</a>
            <a href="/cv">Hoja de vida</a>
          </nav>
        </header>

        <div class="profile">
          <div class="panel" style="display:flex; flex-direction:column; gap:14px">
            <div class="profile-header">
              <div class="avatar">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path fill="currentColor" d="M12 12c2.97 0 5.375-2.406 5.375-5.375S14.97 1.25 12 1.25 6.625 3.656 6.625 6.625 9.03 12 12 12zm0 2c-4.66 0-8.75 2.48-8.75 5.625V22.75h17.5V19.625C20.75 16.48 16.66 14 12 14z"/>
                </svg>
              </div>
              <div>
                <div class="name">Sergio Andres Cuadros Suarez</div>
                <div class="meta">Floridablanca, Santander — Colombia</div>
              </div>
            </div>
            <div class="links">
              <span class="badge">Proyecto Laravel</span>
              <span class="badge">Estudiante</span>
            </div>
          </div>

          <div class="panel">
            <h2 style="margin:0 0 6px; font-size:18px; font-weight:700; color:#c7d2fe">Origen</h2>
            <p class="about">
              Nací en Floridablanca, Santander, Colombia, en la Clínica Ardila Lule. Mi papá se llama Jorge y mi mamá se llama Sayda. Tengo dos hermanos: Paola y Andres.
            </p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>


