<?php
    system("cls");
    print("Input a count of elements in array:\r\n");
    $nElems = intval(chop(fgets(STDIN)));
    $iArray = array();
    for ($i = 0; $i < $nElems; $i++)
    {
        printf("Input an element N %d\r\n", $i+1);
        $iArray[] = intval(chop(fgets(STDIN)));
    }
    print("Inputed array:\r\n");
    for ($i = 0; $i < $nElems; $i++)
    {
        printf("%d ", $iArray[$i]);
    }
    fgetc(STDIN);
?>