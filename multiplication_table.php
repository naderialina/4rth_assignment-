<table align="center" border='2' width="100%" >
    <?php
    echo "Multiplication Table From 2 to 10 using PHP";
$num =10;
for($i=2; $i<=10; $i++)
{
    echo "<tr>";
    for($j=2; $j<= $num; $j++)
    {
        $multiplication_table =($i * $j);
        echo "<td>$j * $i = $multiplication_table </td>";
    }
    echo "<tr/>";
}
?>
</table>