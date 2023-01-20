var start = 3;
var stop = 1278;

// TODO: What is this I don't even
/*do
{
    Console.WriteLine(start++);

    if ((start = start + start) > stop)
        break;
}
while(true);*/

for (int i = start; i <= stop; i++)
{
    i = (i + i);
    Console.WriteLine(i);
}