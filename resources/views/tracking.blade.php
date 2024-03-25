<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>ระบบจองห้องประชุมหน่วยงานราชการ</title>

    <!-- JavaScript -->
    <script>
        function goTrackingPage() {
            window.location.href = "/tracking";
        }

        function goBookingPage() {
            window.location.href = "/home"
        }
    </script>

    <!--CSS-->
    <style>
        #frame {
            height: 936px;
            width: 1866px;
            background-color: #ffffff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            display: grid;
            place-items: center;
        }

        #group {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #menu {
            height: 72px;
            width: 752px;
            background-color: #D9D9D9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #search {
            height: 197px;
            width: 752px;
            background-color: #D9D9D9;
            border-radius: 15px;
            margin-top: 1rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            place-items: center;
            position: relative;
            display: grid;
        }

        #booking {
            height: 72px;
            width: 376px;
            background-color: #D9D9D9;
            border-radius: 15px;
            display: grid;
            place-items: center;
            position: relative;
            color: white;
            font-size: 20px;
        }

        #tracking::after {
            content: '';
            position: absolute;
            width: 80%;
            height: 3px;
            background-color: #000C6A;
            bottom: 10px;
        }

        #tracking {
            height: 72px;
            width: 376px;
            background-color: #D9D9D9;
            border-radius: 15px;
            display: grid;
            place-items: center;
            position: relative;
            color: #000C6A;
            font-size: 20px;
        }

        #tracking_user {
            font-size: 35px;
            margin-top: 1rem;
            width: 708px;
            height: 104px;
            border: 1px solid #000000;
            border-top-left-radius: 15px;
            border-end-start-radius: 15px;
            padding: 10px;
            background-color: #F5F9FD;
        }

        #tracking::before {
            content: '';
            position: absolute;
            width: 1px;
            height: 40px;
            background-color: #707070;
            left: 0;
            top: 16px;
        }

        #booking:hover {
            color: #000C6A;
        }
    </style>
</head>

<body>
    <center>
        <header>
            <div id="frame">
                <div id="group">
                    <div id="menu">
                        <div id="booking" onclick="goBookingPage()">
                            จองห้องประชุม
                        </div>
                        <div id="tracking" onclick="goTrackingPage()">
                            ติดตามสถานะการจอง
                        </div>
                    </div>
                    <div id="search">
                        <div id="search_tracking">
                            <input type="text" id="tracking_user" class="form-control"
                                placeholder="กรอกหมายเลขการจอง" onfocus="(this.type='text')" />
                        </div>
                        <div id="get_info">
                            <input type="submit" value="ค้นหา">
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </center>
</body>

</html>
