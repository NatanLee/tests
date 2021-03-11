<?php
$additionalPath = $_REQUEST['path'] ? $_REQUEST['path'] : '';
$dir = new DirectoryIterator(realpath('/') . $additionalPath);
foreach ($dir as $item) {
	$baseName = $item->getBasename();
	if ($item->isDot()) {
		continue;
	}
	if ($item->isDir()) {
		$pathToInsert = $additionalPath . '/' . $baseName;
		echo "<a style='font-weight: bold; color: #006200' href='/?path=$pathToInsert'>$baseName</a>";
	} else {
		echo $baseName;
	}
	echo "<br>";
}
