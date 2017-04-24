<?php

& and
0	&	1 = 0
1	&	0 = 0
1	&   1 = 1
0	&   0 = 0

| or
0	|	1 = 1
1	|	0 = 1
1	|   1 = 1
0	|   0 = 0


$t=date("H");
if ($t<"20")
{
echo "Have a good day!";
}
else
{
echo "Have a good night!";
}
