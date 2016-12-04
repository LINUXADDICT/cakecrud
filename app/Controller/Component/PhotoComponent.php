<?php
App::uses('Component', 'Controller');
class PhotoComponent extends Component {
	
	public function uploadUserImage($image, $uploadDir, $w, $thumbnail_width)
	{
		$imagePath = '';		
		$thumbnailPath = '';
		
		if (trim($image['tmp_name']) != '')
		{
			$ext = substr(strrchr($image['name'], "."), 1);
			
			$imagePath = md5(rand() * time()) . ".$ext";
			
			list($width, $height, $type, $attr) = getimagesize($image['tmp_name']); 
			
			$this->createThumbnail($image['tmp_name'], $uploadDir . $imagePath, $w,$height);
		}
		$arr['image'] = $imagePath;
		
		return $arr;
	}
	public function createThumbnail($srcFile, $destFile, $width, $quality = 90)
	{
		$thumbnail = '';
		
		if (file_exists($srcFile)  && isset($destFile))
		{
			$size        = getimagesize($srcFile);
			$w           = number_format($width, 0, ',', '');
			$h           = number_format(($size[1] / $size[0]) * $width, 0, ',', '');
			
			$thumbnail =  $this->copyImage($srcFile, $destFile, $w, $h, $quality);
		}
		
		// return the thumbnail file name on sucess or blank on fail
		
		return basename($thumbnail);
	}
	
	public function uploadImage($image, $uploadDir,$size_default)
	{
		$imagePath = '';		
		$thumbnailPath = '';	
		
		if (trim($image['tmp_name']) != '')
		{
			$ext = substr(strrchr($image['name'], "."), 1);  // get Extension of Image

			$imagePath = md5(rand() * time()) . ".$ext";     // create a unique name for Image
			
			list($width, $height, $type, $attr) = getimagesize($image['tmp_name']);   // Get Height & Width of Original Image
			
			$file_size = round($image['size']/1024, 0);    // Count Original Image Size
			
			$arr['size'] = $file_size;
			
			$arr['resolution'] = $width." x ".$height;    // Get Original Image Resolution
			
			$this->createThumbnail($image['tmp_name'], $uploadDir .'original/'. $imagePath, $width ,$height);  // This Save the Original Image
		
		// we have to create 3 image with watermark with different sizes
		
			$small_watermark = $this->createThumbnail1($image['tmp_name'], $uploadDir . $imagePath,155,225);  // For small watermark Inage, displays on Main page
			if(isset($small_watermark ) && $small_watermark  != ""){
			$asd = $uploadDir . $imagePath;
			$image_watermark = $this->createWatermark($asd, $imagePath,155,225);
			}
			
			$medium_watermark = $this->createThumbnail1($image['tmp_name'], $uploadDir . $imagePath,240,253); // For small watermark Inage, displays on Inner page
			if(isset($medium_watermark ) && $medium_watermark  != ""){
			$asd = $uploadDir . $imagePath;
			$image_watermark = $this->createWatermark($asd, $imagePath,240,253);
			}
			
			$large_watermark = $this->createThumbnail1($image['tmp_name'], $uploadDir . $imagePath,583,583); // For small watermark Inage, displays on Detail page
			if(isset($large_watermark) && $large_watermark != ""){
			$asd = $uploadDir . $imagePath;
			$image_watermark = $this->createWatermark($asd, $imagePath,583,583);
			} 
		}
		$arr['image'] = $imagePath;
		return $arr;
	}
	public function createWatermark($imagepath ,$name,$width,$height)
	{
		$ext = substr(strrchr($name, "."), 1);
		
		$img_path = $width."x".$height."-".$name;
		
		$a = WWW_ROOT.'img/'.$width.'x'.$height.'-watermark.gif'; //this is watermark image path
		
		$dest = imagecreatefromgif($a);
				
		list($width, $height, $type, $attr) = getimagesize($imagepath);
		
		if($ext == 'png'){
			$im = imagecreatefrompng($imagepath);
		}
		if($ext == 'jpg'){
		$im = imagecreatefromjpeg($imagepath);
		}	
		if($ext == 'gif'){
		$im = imagecreatefromgif($imagepath);
		}	
		
		imagecopymerge($im, $dest, 0, 0, 0, 0, $width, $height, 30);
		
		unlink($imagepath);	
		
		// Save the image to file and free memory
		imagepng($im, WWW_ROOT.'img/uploads/images/'.$img_path);
		
		imagedestroy($im);
		
	}
	public function createThumbnail1($srcFile, $destFile,$width,$height, $quality = 90)
	{
		$thumbnail = '';
		
		if (file_exists($srcFile)  && isset($destFile))
		{
			$size        = getimagesize($srcFile);
			$w           = $width;
			$h           = $height;
			
			$thumbnail =  $this->copyImage($srcFile, $destFile, $w, $h, $quality);
		}
		
		// return the thumbnail file name on sucess or blank on fail
		
		return basename($thumbnail);
	}
	
	
	
	
	
	function copyImage($srcFile, $destFile, $w, $h, $quality = 75)
	{
	    $tmpSrc     = pathinfo(strtolower($srcFile));
	    $tmpDest    = pathinfo(strtolower($destFile));
	    $size       = getimagesize($srcFile);
		
		if ($tmpDest['extension'] == "gif" || $tmpDest['extension'] == "jpg")
		{
			$destFile  = substr_replace($destFile, 'jpg', -3);
			$dest      = imagecreatetruecolor($w, $h);
			
		      // imageantialias($dest, TRUE);
		}
		elseif ($tmpDest['extension'] == "png")
		{
		       $dest = imagecreatetruecolor($w, $h);
		       //imageantialias($dest, TRUE);			
		}
		else
		{
		      return false;
		}
	
		switch($size[2])
		{
		   case 1:       //GIF
		       $src = imagecreatefromgif($srcFile);
		       break;
		   case 2:       //JPEG
		       $src = imagecreatefromjpeg($srcFile);
		       break;
		   case 3:       //PNG
		       $src = imagecreatefrompng($srcFile);
		       break;
		   default:
		       return false;
		       break;
		}
	
		imagecopyresampled($dest, $src, 0, 0, 0, 0, $w, $h, $size[0], $size[1]);
	
		switch($size[2])
		{
		   case 1:
		   case 2:
		       imagejpeg($dest,$destFile, $quality);
		       break;
		   case 3:
		       imagepng($dest,$destFile);
		}
	    return $destFile;
	
	}
	
}