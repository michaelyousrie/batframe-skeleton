{{--
  Convention error page. Batframe renders this for any HTTP error that has no
  more specific errors/{status}.blade.php (e.g. errors/404.blade.php). It is
  handed $status and $message. Kept self-contained on purpose: an error page
  should not depend on the network to render.
--}}
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $status }} &middot; {{ $message }}</title>
<style>
  :root{--ink:#0A0B0F;--line:#23262F;--mist:#9AA0AC;--chalk:#ECEEF2;--signal:#6E5BFF;--brass:#F2B33D;
    --mono:ui-monospace,"Cascadia Code","JetBrains Mono",Menlo,Consolas,monospace;
    --sans:system-ui,-apple-system,"Segoe UI",Roboto,sans-serif}
  *{box-sizing:border-box}
  html,body{height:100%;margin:0}
  body{background:var(--ink);color:var(--chalk);font-family:var(--sans);
    display:flex;align-items:center;justify-content:center;padding:2rem;
    background-image:radial-gradient(50rem 34rem at 50% -20%,rgba(110,91,255,.14),transparent 60%)}
  .box{text-align:center;max-width:34rem}
  .code{font-family:var(--mono);font-weight:600;font-size:clamp(5rem,22vw,9rem);line-height:1;
    letter-spacing:-.04em;color:var(--signal);margin:0}
  .phrase{font-size:1.35rem;font-weight:600;letter-spacing:-.01em;margin:.75rem 0 .4rem}
  .msg{color:var(--mist);margin:0 auto 2rem;max-width:28rem}
  .home{display:inline-block;font-family:var(--mono);font-size:.82rem;color:var(--chalk);
    text-decoration:none;border:1px solid var(--line);border-radius:.5rem;padding:.55rem 1rem;transition:border-color .15s}
  .home:hover{border-color:#3a3f4d}
  .mark{margin-top:2.5rem;font-family:var(--mono);font-size:.72rem;letter-spacing:.14em;
    text-transform:uppercase;color:var(--mist)}
  .mark b{color:var(--brass);font-weight:600}
</style>
</head>
<body>
  <div class="box">
    <p class="code">{{ $status }}</p>
    <p class="phrase">{{ $message }}</p>
    <p class="msg">That page could not be found, or the server could not complete the request. Check the address, or head back to a known page.</p>
    <a class="home" href="/">&larr; Back home</a>
    <p class="mark">powered by <b>batframe</b></p>
  </div>
</body>
</html>
