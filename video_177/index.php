<?php

echo "<pre>";
print_r(glob("{css/*,js/*}",GLOB_BRACE));
echo "</pre>";
