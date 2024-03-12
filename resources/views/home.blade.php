<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>ระบบจองห้องประชุมหน่วยงานราชการ</title>
</head>
<style>
    #frame{
        height: 936px;
        width: 1866px;
        background-color: #ffffff;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        border-radius: 15px;
        display: grid;
        place-items: center;
    }

    #search {
        height: 404px;
        width: 752px;
        background-color: #D9D9D9;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        border-radius: 15px;
    }

    #search input,
    #search label {
        font-size: 20px;
        font-family: Inter;
        color: #9B9B9B;
    }

    #name_room {
        margin-top: 40px;
        margin-left: 30px;
        width: 679px;
        height: 60px;
        border: 1px solid #000000;
        border-radius: 15px;
    }

    #date_out,
    #time_out {
        width: 330px;
        height: 60px;
        border: 1px solid #000000;
        border-radius: 15px;
    }

    #date_in,
    #time_in {
        margin-left: 30px;
        width: 330px;
        height: 60px;
        border: 1px solid #000000;
        border-radius: 15px;
    }

    #search input[type="submit"] {
        width: 339px;
        height: 60px;
        background-color: #000C6A;
        border: none;
        color: white;
        border-radius: 15px;
        margin-top: 40px;
    }

    #search input[type="submit"]:hover {
        background-color: #707070;
    }
</style>

<body>
    <header>
        <div id="frame">
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
                            <td><input type="submit" value="ค้นหา" id="search_room"></td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </header>
</body>

</html>
