<!doctype HTML>
<html>
 <body>
  <form action = 'insert.php' method = 'POST'/>
    <h2>FORUM LOGIN</h3>
    NAMA : <input name = 'nama' type = 'text' size = '40'/><br>
    NIM  : <input name = 'nim' type = 'text' size = '42'/><br>
    password : <input name = 'pass' type = 'text' size = '37'/>
    <br>
  Kelas ?
  <select name = "kelas">
   <option value = 'INFORMATIKA A'>INFORMATIKA A
   <option value = 'INFORMATIKA B'>INFORMATIKA B
   <option value = 'INFORMATIKA C'>INFORMATIKA C
   <option value = 'INFORMATIKA D'>INFORMATIKA D
  </select>
  <button type = 'submit' name = 'tombol'>Login</button>
  </form>
 </body>
</html>