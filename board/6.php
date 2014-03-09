<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="../js/blue.js"></script>
    </head>
    <body>
        <form action="6_response.php" method="POST">
            <table border="1" align="center">
                <caption>零食選購區</caption>
                <tr>
                    <td>
                        <label>選購</label>
                    </td>
                    <td>
                        <label>產品名稱</label>
                    </td>
                    <td>
                        <label>數量</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="chk[]" value="A1"/>
                    </td>
                    <td>
                        <label>士力架巧克力</label>
                    </td>
                    <td>
                        <input type="text" name="item[]" size="2" maxlength="2" readonly="true"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="chk[]" value="A2"/>
                    </td>
                    <td>
                        <label>波卡洋芋片</label>
                    </td>
                    <td>
                        <input type="text" name="item[]" size="2" maxlength="2"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="chk[]" value="A3"/>
                    </td>
                    <td>
                        <label>德浮巧克力</label>
                    </td>
                    <td>
                        <input type="text" name="item[]" size="2" maxlength="2"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="chk[]" value="A4"/>
                    </td>
                    <td>
                        <label>義美威化卷桶</label>
                    </td>
                    <td>
                        <input type="text" name="item[]" size="2" maxlength="2"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="chk[]" value="A5"/>
                    </td>
                    <td>
                        <label>旺旺米果</label>
                    </td>
                    <td>
                        <input type="text" name="item[]" size="2" maxlength="2"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="chk[]" value="A6"/>
                    </td>
                    <td>
                        <label>奶油起士</label>
                    </td>
                    <td>
                        <input type="text" name="item[]" size="2" maxlength="2"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="chk[]" value="A7"/>
                    </td>
                    <td>
                        <label>孔雀餅乾</label>
                    </td>
                    <td>
                        <input type="text" name="item[]" size="2" maxlength="2"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="chk[]" value="A8"/>
                    </td>
                    <td>
                        <label>樂事洋芋片</label>
                    </td>
                    <td>
                        <input type="text" name="item[]" size="2" maxlength="2"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="chk[]" value="A9"/>
                    </td>
                    <td>
                        <label>陽光滋味</label>
                    </td>
                    <td>
                        <input type="text" name="item[]" size="2" maxlength="2"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="chk[]" value="A10"/>
                    </td>
                    <td>
                        <label>旺旺彭派包</label>
                    </td>
                    <td>
                        <input type="text" name="item[]" size="2" maxlength="2"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="check_1" value="A11" onclick="chk_read(this);" />
                    </td>
                    <td>
                        <label>測試1</label>
                    </td>
                    <td>
                        <input type="text" id="disable_1" size="2" maxlength="2" disabled/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="check_2" value="A11" onclick="test01('check_2');" />
                    </td>
                    <td>
                        <label>測試2</label>
                    </td>
                    <td>
                        <input type="text" id="readOnly_1" size="2" maxlength="2" readOnly/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="check_3" value="A11" onclick="chk_read(this);"/>
                    </td>
                    <td>
                        <label>測試3</label>
                    </td>
                    <td>
                        <select id="disable_2" disabled>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <!--<input type="text" id="test" size="2" maxlength="2" disabled/>-->
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" value="加入購物車"/>
                        <input type="reset" value="取消"/>
                        <input type="button" value="購物車內容" onclick="window.location.href = '6_list.php'"/>
                    </td>
                </tr>
            </table>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
