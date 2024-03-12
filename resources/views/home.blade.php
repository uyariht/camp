<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>ระบบจองห้องประชุมหน่วยงานราชการ</title>
</head>
<style>
    #search {
        height: 404px;
        width: 752px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
    }

    #search input,
    #search label {
        font-size: 16px;
        font-family: Arial, Helvetica, sans-serif;
        color: #333;
    }

    #name_room {
        width: 679px;
        height: 40px;
        border: 1px solid #ddd;
        border-radius: 9px;
    }
    #date_in, #date_out, #time_in, #time_out{
        width: 330px;
        height: 60px;
        border: 1px solid #ddd;
        border-radius: 9px;
    }

    #search input[type="submit"] {
        background-color: #000C6A;
        border: none;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
        border-radius: 4px;
        cursor: pointer;
        grid-column: span 2;
        align-self: end;
    }

    #search input[type="submit"]:hover {
        background-color: #787878;
    }
</style>

<body>
    <header>
        <h1>ระบบจองห้องประชุมหน่วยงานราชการ</h1>
        <div id="search">
            <table>
                <form action="/search" method="post">
                    <tr>
                        <td colspan="2"><input type="text" name="name_room" id="name_room"></td>
                    </tr>
                    <tr>
                        <td><input type="date" name="date_in" id="date_in"></td>
                        <td><input type="date" name="date_out" id="date_out"></td>
                    </tr>
                    <tr>
                        <td><input type="time" name="time_in" id="time_in"></td>
                        <td><input type="time" name="time_out" id="time_out"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="ค้นหา"></td>
                    </tr>
                </form>
            </table>
        </div>
    </header>
</body>

</html>
