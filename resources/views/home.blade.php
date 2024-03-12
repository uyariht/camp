<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ระบบจองห้องประชุมหน่วยงานราชการ</title>
  <link rel="stylesheet" href="style101.css">
</head>
<body>
  <header>
    <h1>ระบบจองห้องประชุมหน่วยงานราชการ</h1>
    <div id="search">
      <form action="/search" method="post">
        <input type="text" name="name_room" id="name_room">
        <br>
        <input type="date" name="date_in" id="date_in">
        <input type="date" name="date_out" id="date_out">
        <br>
        <input type="time" name="time_in" id="time_in">
        <input type="time" name="time_out" id="time_out">
        <br>
        <input type="submit" value="ค้นหา">
      </form>
    </div>
  </header>
</body>
</html>
