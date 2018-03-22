<link rel="icon" type="image/png" href="icon.png" />
<h1>Hello Web</h1>
<hr/>
<h3>Current Backend Server Info</h3>
<?php
echo "Server Name: ".gethostname()."<br/>";
echo "Server IP: ".$_SERVER['HTTP_HOST']."<br/>";
echo "Server Port: ".$_SERVER['SERVER_PORT']."<br/>";
?>
<hr/>
<h3>Current Client Request Info</h3>
<?php
function getClientIP() {
    $keys = array(
        'HTTP_CLIENT_IP',
        'HTTP_X_REAL_IP',
        'HTTP_X_FORWARDED_FOR',
        'REMOTE_ADDR'
    );
    foreach ($keys as $key) {
        $ip = !empty($_SERVER[$key]) ? $_SERVER[$key] : getenv($key);
        if (!empty($ip)) {
            return $ip;
        }
    }
    return '';
}
echo "Request Time Float: ".$_SERVER['REQUEST_TIME_FLOAT']."<br/>";
echo "Client IP: ".getClientIP()."<br/>";
echo "Client Port: ".$_SERVER['REMOTE_PORT']."<br/>";
echo "User Agent: ".$_SERVER['HTTP_USER_AGENT']."<br/>";
echo "Request Method: ".$_SERVER['REQUEST_METHOD']."<br/>";
echo "Request URI: ".$_SERVER['REQUEST_URI']."<br/>";
foreach ($_SERVER['argv'] as $key => $val) {
    echo "argv[$key] $val<br/>";
}
?>
<hr/>
<i>Thank you for using PHP.</i>

