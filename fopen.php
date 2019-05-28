<?php

/*
	fopen(filename, mode, include_path, context)
	fread(handle, length)
	fwrite(handle, string, length)
	fseek(handle, offset, whence) => SEEK_SET, SEEK_CUR, SEEK_END
	fclose(handle)
	Modes:
	r: Read Only Starting From Beginning Of The File [ File Must Be Exist ]
	r+: Read & Write Starting From Beginning Of The File [ File Must Be Exist ]
	w: Write Only [ Open & Clear The Content ] + [ Create The File If Not Exist ]
	w+: Write & Read [ Open & Clear The Content ] + [ Create The File If Not Exist ]
	a: Write Only [ Open & Write To The End Of File ] + [ Create The File If Not Exist ]
	a+: Write & Read [ Open & Write To The End Of File ] + [ Create The File If Not Exist ]
	x: Write Only [ Create A New File ] + [ File Must Not Be Exist Or Give Error ]
	x+: Write & Read [ Create A New File ] + [ File Must Not Be Exist Or Give Error ]
*/

$fileHandle = fopen('osama.txt', 'r+');

// $fileHandle = fopen('ftp://user:pass@elzero.info/osama.txt', 'w');

fseek($fileHandle, 4);

fwrite($fileHandle, 'Z');

fseek($fileHandle, 2, SEEK_CUR);

fwrite($fileHandle, 'o');

fseek($fileHandle, -1, SEEK_END);

fwrite($fileHandle, 'e');

fclose($fileHandle);
