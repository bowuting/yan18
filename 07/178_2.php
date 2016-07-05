<?php
/**
 *先得到图片的大小、类型等信息

 */
class ImageTool
{
  //分析图片的信息
  //return array

  public static function imageInfo($image){
    //判断图片是否存在
    if (!file_exists($image)) {
      return false;
    }

    $info =getimagesize($image);

    if($info == false){
      return false;
    }

    $img['width'] = $info[0];
    $img['height'] = $info[1];
    $img['ext'] = substr($info['mime'],strpos($info['mime'],'/')+1);

    return $img;
  }

  /*加水印
  parm String $dst  待操作图
  parm String $water 水印小图
  parm String $save  不填则默认替换原始图
  */
  public static function water($dst,$water,$save=NULL,$alpha=50,$pos=2){
    //先保证2个图片存在，
    if (!file_exists($dst) || !file_exists($water)) {
      return false;
    }

    //保证水印图片比待操作图片小
    $dinfo = self::imageInfo($dst);
    $winfo = self::imageInfo($water);

    if ($winfo['height'] > $dinfo['height'] || $winfo['width'] > $dinfo['width']) {
      return false;
    }

    $dfunc = 'imagecreatefrom' . $dinfo['ext'];
    $wfunc = 'imagecreatefrom' . $winfo['ext'];

    if (!function_exists($dfunc) || !function_exists($wfunc)) {
      return false;
    }

    $dim = $dfunc($dst);
    $wim = $wfunc($water);

    imagecopymerge($dim,$wim, 0,0 ,0,0,$winfo['width'],$winfo['height'],$alpha);
    if (!$save) {
      $save = $dim;
      //unlink($dst);
    }

    $createfunc = 'image'.$dinfo['ext'];
    $createfunc($save);

    imagedestroy($dim);
    imagedestroy($wim);

    return true;
  }


}


print_r(ImageTool::imageInfo('./test.png'));
ImageTool::water('./1.png','./test.png');



 ?>
