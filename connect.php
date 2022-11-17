$con= my_sqli_connect('localhost','root','','bangkok');
if($con)
{
    echo "connetion with the database is succesful";
}
else
{
    echo "connection with the database is not succesful";
}
?>