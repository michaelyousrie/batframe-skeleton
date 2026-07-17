<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Batframe App')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <style>@verbatim
      :root{
        --ink:#0A0B0F; --panel:#13151B; --panel-2:#0F1116; --line:#23262F;
        --mist:#9AA0AC; --chalk:#ECEEF2; --signal:#6E5BFF; --brass:#F2B33D;
        --display:'Space Grotesk',system-ui,sans-serif;
        --mono:'JetBrains Mono',ui-monospace,Menlo,Consolas,monospace;
      }
      *{box-sizing:border-box}
      code,.inline,.snippet,.sig,.route,.brand,.nav,.eyebrow,.tf-head,.card .k,.start h2,footer{font-variant-ligatures:none;font-feature-settings:"liga" 0,"calt" 0}
      html,body{margin:0}
      body{
        background:var(--ink); color:var(--chalk); font-family:var(--display);
        -webkit-font-smoothing:antialiased; line-height:1.5;
        background-image:
          radial-gradient(60rem 40rem at 82% -10%, rgba(110,91,255,.13), transparent 60%),
          radial-gradient(45rem 30rem at 8% 108%, rgba(242,179,61,.07), transparent 55%);
        background-attachment:fixed;
      }
      a{color:inherit;text-decoration:none}
      .wrap{max-width:960px;margin:0 auto;padding:0 1.5rem}

      .top{display:flex;align-items:center;justify-content:space-between;
        padding:1.4rem 0;border-bottom:1px solid var(--line)}
      .brand{display:flex;align-items:center;gap:.6rem;font-family:var(--mono);
        font-weight:600;letter-spacing:-.01em;font-size:.98rem}
      .brand .glyph{display:grid;place-items:center;width:1.6rem;height:1.6rem;
        border:1px solid var(--line);border-radius:.45rem;color:var(--brass);
        background:var(--panel);font-size:.9rem}
      .brand b{color:var(--chalk);font-weight:600}
      .brand .dim{color:var(--mist)}
      .nav{display:flex;gap:1.4rem;font-family:var(--mono);font-size:.82rem;color:var(--mist)}
      .nav a{transition:color .15s}
      .nav a:hover{color:var(--chalk)}

      .hero{padding:5.5rem 0 3rem}
      .eyebrow{display:inline-flex;align-items:center;gap:.55rem;font-family:var(--mono);
        font-size:.72rem;letter-spacing:.22em;text-transform:uppercase;color:var(--brass);
        margin:0 0 1.6rem}
      .pulse{width:.5rem;height:.5rem;border-radius:50%;background:var(--brass);
        box-shadow:0 0 0 0 rgba(242,179,61,.55);animation:pulse 2.4s infinite}
      @keyframes pulse{0%{box-shadow:0 0 0 0 rgba(242,179,61,.5)}70%{box-shadow:0 0 0 .5rem rgba(242,179,61,0)}100%{box-shadow:0 0 0 0 rgba(242,179,61,0)}}
      h1{font-family:var(--display);font-weight:600;font-size:clamp(2.6rem,7vw,4.4rem);
        line-height:1.02;letter-spacing:-.03em;margin:0 0 1.2rem;max-width:16ch}
      h1 .accent{color:var(--signal)}
      .lede{font-size:1.12rem;color:var(--mist);max-width:52ch;margin:0}
      .lede b{color:var(--chalk);font-weight:500}

      .transformer{margin:3rem 0 0;border:1px solid var(--line);border-radius:1rem;
        background:linear-gradient(180deg,rgba(255,255,255,.02),transparent);overflow:hidden}
      .tf-head{display:flex;justify-content:space-between;align-items:center;
        padding:.85rem 1.25rem;border-bottom:1px solid var(--line);
        font-family:var(--mono);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--mist)}
      .tf-head .out{color:var(--brass)}
      .tf-head .in{color:var(--signal)}
      .row{display:grid;grid-template-columns:1fr auto 1fr;align-items:center;gap:1rem;
        padding:.95rem 1.25rem;font-family:var(--mono);font-size:.92rem;
        border-top:1px solid rgba(35,38,47,.55)}
      .row:first-of-type{border-top:0}
      .sig{color:var(--chalk);white-space:nowrap;overflow-x:auto}
      .sig .kw{color:var(--signal)}
      .sig .mut{color:var(--mist)}
      .arrow{color:#4c515e;font-size:1.05rem}
      .route{justify-self:end;text-align:right;white-space:nowrap}
      .verb{color:var(--brass);font-weight:600}
      .path{color:var(--chalk)}
      .path .ph{color:var(--mist)}

      .start{padding:2.75rem 0 1rem}
      .start h2{font-family:var(--mono);font-size:.75rem;letter-spacing:.2em;text-transform:uppercase;
        color:var(--mist);font-weight:500;margin:0 0 1.25rem}
      .cards{display:grid;grid-template-columns:1fr 1fr;gap:1rem}
      .card{border:1px solid var(--line);border-radius:.9rem;padding:1.4rem;background:var(--panel-2);
        transition:border-color .18s,transform .18s}
      .card:hover{border-color:#33384a;transform:translateY(-2px)}
      .card .k{font-family:var(--mono);font-size:.72rem;color:var(--brass);letter-spacing:.08em;margin:0 0 .7rem}
      .card h3{font-family:var(--display);font-size:1.15rem;font-weight:600;margin:0 0 .5rem;letter-spacing:-.01em}
      .card p{color:var(--mist);font-size:.92rem;margin:0 0 1rem}
      .card p code,.inline{font-family:var(--mono);font-size:.85em;color:var(--chalk);
        background:var(--panel);border:1px solid var(--line);border-radius:.3rem;padding:.05rem .35rem}
      .snippet{font-family:var(--mono);font-size:.82rem;line-height:1.65;margin:0;
        background:var(--ink);border:1px solid var(--line);border-radius:.55rem;padding:.85rem 1rem;overflow-x:auto}
      .snippet .kw{color:var(--signal)}
      .snippet .fn{color:var(--brass)}
      .snippet .mut{color:var(--mist)}

      .prose{padding:5rem 0 1rem;max-width:60ch}
      .prose h1{font-size:clamp(2rem,5vw,2.8rem);margin-bottom:1rem}
      .prose p{color:var(--mist);font-size:1.05rem;margin:0 0 1rem}
      .prose a{color:var(--brass)}
      .prose a:hover{text-decoration:underline}

      footer{margin-top:3.5rem;padding:1.6rem 0 3rem;border-top:1px solid var(--line);
        display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:1rem;
        font-family:var(--mono);font-size:.78rem;color:var(--mist)}
      footer b{color:var(--chalk);font-weight:600}
      footer .dot{color:var(--line);margin:0 .5rem}

      @media (max-width:640px){
        .nav a:not(:last-child){display:none}
        .cards{grid-template-columns:1fr}
        .row{grid-template-columns:1fr;gap:.35rem;text-align:left}
        .arrow{display:none}
        .route{justify-self:start;text-align:left;padding-left:1.2rem}
      }

      @media (prefers-reduced-motion:no-preference){
        .reveal{opacity:0;transform:translateY(10px);animation:rise .6s cubic-bezier(.2,.7,.2,1) forwards}
        .hero .eyebrow{animation-delay:.02s}
        h1.hd{animation-delay:.08s}
        .lede{animation-delay:.16s}
        .transformer{animation-delay:.24s}
        .row{opacity:0;transform:translateY(6px);animation:rise .5s cubic-bezier(.2,.7,.2,1) forwards}
        .row:nth-child(2){animation-delay:.34s}
        .row:nth-child(3){animation-delay:.42s}
        .row:nth-child(4){animation-delay:.5s}
        .row:nth-child(5){animation-delay:.58s}
      }
      @keyframes rise{to{opacity:1;transform:none}}
      :focus-visible{outline:2px solid var(--signal);outline-offset:3px;border-radius:.2rem}
    @endverbatim</style>
</head>
<body>
    <div class="wrap">
        <header class="top">
            <span class="brand"><span class="glyph">⌘</span><b>batframe</b><span class="dim">/ app</span></span>
            <nav class="nav">
                <a href="/">home</a>
                <a href="https://github.com/michaelyousrie/batframe">docs</a>
                <a href="https://github.com/michaelyousrie/batframe">github</a>
            </nav>
        </header>

        @yield('content')

        <footer>
            <span><b>batframe</b><span class="dot">·</span>PHP 8.1+</span>
            <span>convention over configuration<span class="dot">·</span>no route table</span>
        </footer>
    </div>
</body>
</html>
