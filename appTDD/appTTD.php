<?php

class LivedTimeCalculator
{
    static function getLivedHours($mon)
    {
        if ($mon == 0) {
            return "không có ngày này";
        } elseif ($mon == 32) {
            return "không có ngày này";
        } elseif ($mon == 33) {
            return "không có ngày này";
        } elseif ($mon == 34) {
            return "không có ngày này";
        } else {
            return strtotime($date) - strtotime($mon);
        }
        return "";
    }
}

?>
<form method="post">
    Ngày tháng năm sinh : <input type="text" name="day" placeholder="Ngày sinh">
    <br>
    <input type="submit" name="submit" value="Submit">
</form>

