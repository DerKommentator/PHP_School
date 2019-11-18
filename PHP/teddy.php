<?php
	header ("Content-type: image/png");
	$img=imagecreatetruecolor(600,600);

	$white=imagecolorallocate($img, 255, 255, 255);
	$black=imagecolorallocate($img, 0, 0, 0);
	$brown=imagecolorallocate($img, 117, 78, 70);
	$lightbrown=imagecolorallocate($img, 193, 183, 151);
	$red=imagecolorallocate($img, 255, 0, 0);
	$green=imagecolorallocate($img, 0, 255, 0);
	$blue=imagecolorallocate($img, 50, 50, 255);
	$yellow=imagecolorallocate($img, 255, 255, 0);

	//imagefilledrectange(x, y, x2, y2)
	//imagefilledellipse(x, y, length, width)

	// background
	imagefilledrectangle($img, 0, 0, 600, 600, $white);

	imagefilledrectangle($img, 0, 600, 600, 400, $green);
	imagefilledrectangle($img, 0, 400, 600, 0, $blue);
	// sun
	imagefilledellipse($img, 560, 30, 150, 150, $yellow);
	$sunbeam1 = [430, 50, 560, 30, 560, 60, 580, 60];
	$sunbeam2 = [430, 100, 560, 30, 560, 60, 580, 60];
	$sunbeam3 = [430, 150, 560, 30, 560, 60, 580, 60];
	$sunbeam4 = [430, 220, 560, 30, 560, 60, 580, 60];
	imagefilledpolygon($img, $sunbeam1, 4, $yellow);
	imagefilledpolygon($img, $sunbeam2, 4, $yellow);
	imagefilledpolygon($img, $sunbeam3, 4, $yellow);
	imagefilledpolygon($img, $sunbeam4, 4, $yellow);

	//arme
	imagefilledellipse($img, 130, 320, 185, 75, $black);
	imagefilledellipse($img, 130, 320, 180, 70, $brown);

	imagefilledellipse($img, 470, 320, 185, 75, $black);
	imagefilledellipse($img, 470, 320, 180, 70, $brown);

	//bauch
	imagefilledellipse($img, 300, 400, 255, 305, $black);
	imagefilledellipse($img, 300, 400, 250, 300, $brown);
	imagefilledellipse($img, 300, 410, 220, 270, $lightbrown);

	//nabel
	imagefilledellipse($img, 300, 450, 20, 20, $black);
	imagefilledellipse($img, 300, 445, 20, 20, $lightbrown);

	//fuß (links)
	imagefilledellipse($img, 200, 520, 125, 125, $black);
	imagefilledellipse($img, 200, 520, 120, 120, $brown);
	imagefilledellipse($img, 200, 530, 90, 90, $lightbrown);
	//fuß (rechts)
	imagefilledellipse($img, 400, 520, 125, 125, $black);
	imagefilledellipse($img, 400, 520, 120, 120, $brown);
	imagefilledellipse($img, 400, 530, 90, 90, $lightbrown);
	//fuß\

	//kopf
	//-Ohr (links)
	imagefilledellipse($img, 210, 100, 105, 105, $black);
	imagefilledellipse($img, 210, 100, 100, 100, $brown);
	imagefilledellipse($img, 210, 100, 70, 70, $lightbrown);
	//-ohr (rechts)
	imagefilledellipse($img, 390, 100, 105, 105, $black);
	imagefilledellipse($img, 390, 100, 100, 100, $brown);
	imagefilledellipse($img, 390, 100, 70, 70, $lightbrown);
	//-ohren\

	//-Kopf
	imagefilledellipse($img, 300, 180, 185, 185, $black);
	imagefilledellipse($img, 300, 180, 180, 180, $brown);
	imagefilledellipse($img, 300, 210, 100, 100, $lightbrown);
	//-Kopf\

	//--auge (links)
	imagefilledellipse($img, 265, 140, 30, 30, $black);
	imagefilledellipse($img, 265, 135, 30, 30, $brown);
	//--auge (rechts)
	imagefilledellipse($img, 335, 140, 30, 30, $black);
	//--augen\

	//---mund
	imagefilledellipse($img, 300, 225, 80, 60, $black);
	imagefilledellipse($img, 300, 215, 80, 60, $lightbrown);
	//---mund\

	//----nase
	imagefilledellipse($img, 300, 180, 40, 30, $black);
	//----nase\
	//kopf\

	imagepng($img);
	imagegestroy($img);
?>
