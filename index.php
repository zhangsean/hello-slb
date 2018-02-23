<h1>Welcome to SLB!</h1>
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
echo "Request Time Float: ".$_SERVER['REQUEST_TIME_FLOAT']."<br/>";
echo "Client IP: ".$_SERVER['REMOTE_ADDR']."<br/>";
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

