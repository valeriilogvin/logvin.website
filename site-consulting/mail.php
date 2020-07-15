<?
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (!empty($_POST['uname']) && (!empty($_POST['utext']) || !empty($_POST['uphone'])))
    {
        if (isset($_POST['uname']))
        {
            if (!empty($_POST['uname']))
            {
                $uname = strip_tags($_POST['uname']) . "<br>";
                $unameFieldset = "<b>Отправитель:</b>";
            }
        }
        if (isset($_POST['utext']))
        {
            if (!empty($_POST['utext']))
            {
                $utext = strip_tags($_POST['utext']) . "<br>";
                $utextFieldset = "<b>Текст:</b>";
            }
        }
        if (isset($_POST['uphone']))
        {
            if (!empty($_POST['uphone']))
            {
                $uphone = strip_tags($_POST['uphone']) . "<br>";
                $uphoneFieldset = "<b>Телефон:</b>";
            }
        }

        $to  = 'igor@rgb-agency.com.ua';
        $sendfrom = "Ukraine"; /*Укажите адрес, с которого будет приходить письмо */
        $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
        $headers .= "Content-Transfer-Encoding: 8bit \r\n";
        $messagetext = "Консультация";
        $message = "$unameFieldset $uname
                $utextFieldset $utext
                $uphoneFieldset $uphone";

        $send = mail ($to, $messagetext, $message, $headers);
    }
}
?>