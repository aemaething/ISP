<?php

try {
    /** @var FilesystemIterator */
    $fsi = new FilesystemIterator(sys_get_temp_dir());

    /** @var SplFileInfo $fi */
    foreach ($fsi as $fi) {
        printf("Path: %s\n", $fi->getRealPath());
        printf(
            "Last accessed at: %s\n",
            DateTime::createFromFormat("U", $fi->getATime())
                ->format("Y-m-d H:i:s")
        );
        printf(
            "Filesize: %skB\n",
            number_format($fi->getSize() / 1024, 2, ",", ".")
        );
        printf("Type: %s\n", $fi->getType());
        printf("\n%s\n\n", str_repeat("=", 60));
    }
} catch (UnexpectedValueException $e) {
    printf("Error [%d]: %s", $e->getCode(), $e->getMessage());
}
