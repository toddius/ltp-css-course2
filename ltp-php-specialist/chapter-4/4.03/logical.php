<?php 
    // And &&
    $join = (8 > 4) && (19 < 20);
    print("AND - Both true: " . $join);

    $join = (8 > 4) && (19 > 20);
    print("<br/>AND - One side true: " . $join);

    // Or ||
    $either = (8 > 4) || (19 > 20);
    print("<br/>OR - One side true: ". $either);

    $either = (8 <4) || (19 > 20);
    print("<br/>OR - Neither side true: " . $either);
?>