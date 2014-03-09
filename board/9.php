<html>
    <title>iBlue 的個人網站</title>
    <head>
        <script type="text/javascript" src="../js/blue.js"></script>
        <script type="text/javascript" src="../js/selectDate.js"></script>
        <link rel="stylesheet" href="../css/blue.css" type="text/css" media="screen"/>
        <?php
        require_once '../php/function.php';
        require_once '../DB_config.php';
        require_once '../DB_class.php';
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header"><h1><a href="../index.php">iBlue 的雜記小舖</a></h1></div>
            <div id="menubar" class="menubar">
                <ul>
                    <li><a href="4.php">旅遊行程訂購</a></li>
                    <li><a href="5.php">訂餐模組</a></li>
                    <li><a href="6.php">零食訂購</a></li>
                    <li><a href="7.php">留言版</a></li>
                    <li><a href="8.php">會員註冊系統</a></li>
                    <li><a href="9.php">產品管理系統</a>
                        <ul>
                            <li><a href="9_list.php">產品列表</a></li>
                        </ul>
                    </li>
                    <li><a href="4.php">4.php</a></li>
                </ul>
            </div>
            <div id="wrapper">
                <div id="content">
                    </br>
                    <table align="center">
                        <tr>
                            <td>
                                <?php
                                echo "今天日期：";
                                echo today_day("", "", "");
//                                $db = new DB();
//                                $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
//                                $db->query("select * from guestbook");
//                                while ($result = $db->fetch_array()) {
//                                    print_r($result);
//                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <form action="9_response.php" method="POST">
                        <table border="1" align="center">
                            <caption>iBlue&產品管理系統</caption>
                            <tr>
                                <td>
                                    <label>產品名稱：</label>
                                </td>
                                <td>
                                    <input type="text" name="prod_name" id="prod_name" size="50" maxlength="50"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>價格：</label>
                                </td>
                                <td>
                                    <input type="text" name="price" id="price" size="7" maxlength="7"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>類別：</label>
                                </td>
                                <td>
                                    <select name="kind">
                                        <option value="1">食品</option>
                                        <option value="2">飲料</option>
                                        <option value="3">葯品</option>
                                        <option value="4">化妝品</option>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>備註：</label>
                                </td>
                                <td>
                                    <input type="textarea" name="memo" id="memo" rols="10" rows="10"/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="送出"/>
                                    <input type="reset" value="重置"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div id="navigation">
                <strong>Link Here</strong>
                <?php
                require_once($root.'/blue/link_here.php');
                ?>
            </div>
        </div>
    </body>
</html>