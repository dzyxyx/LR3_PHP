<?php

require 'vendor/autoload.php';

use App\Point;
use App\Vector;

$T1 = new Point(3, 4);
echo "T1: (" . implode(", ", $T1->getCoordinates()) . ")\n";

$V1 = new Vector(5, 12);
echo "V1 length: " . $V1->length() . "\n";

$V2 = new Vector(0, 0);
echo "V2 is zero: " . ($V2->isZero() ? 'true' : 'false') . "\n";

$V3 = new Vector(-12, 5);
echo "V3 length: " . $V3->length() . "\n";

echo "V1 length: " . $V1->length() . "\n";
echo "V2 length: " . $V2->length() . "\n";
echo "V3 length: " . $V3->length() . "\n";

echo "V1 and V3 are perpendicular: " . ($V1->isPerpendicular($V3) ? 'true' : 'false') . "\n";

$T1->moveX($V1->getCoordinates()['x']);
$T1->moveY($V1->getCoordinates()['y']);
echo "T1 after moving by V1: (" . implode(", ", $T1->getCoordinates()) . ")\n";

?>