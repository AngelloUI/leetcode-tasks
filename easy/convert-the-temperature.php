<?php
function convertTemperature($celsius): array
{
    return[$celsius + 273.15,$celsius * 1.8 + 32];
}
var_dump(convertTemperature(36.50));