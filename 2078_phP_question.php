<?php
    function product($x,$y)
    {
        $z=$x*$y;
        return $z;
    }
    echo "2+5=".product(2,5)."<br>"
    echo "7+13= ".product(7,13)."<br>"
    ?>

<?php
function string1()
{
$x="Hello🤭";
$y="World";
return($x.$y);
}
echo(string1());
    ?>