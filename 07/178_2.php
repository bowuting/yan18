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


// 根据水印的位置 计算粘贴的坐标
    switch($pos) {
            case 0: // 左上角
            $posx = 0;
            $posy = 0;
            break;

            case 1: // 右上角
            $posx = $dinfo['width'] - $winfo['width'];
            $posy = 0;
            break;

            case 3: // 左下角
            $posx = 0;
            $posy = $dinfo['height'] - $winfo['height'];
            break;

            default:
            $posx = $dinfo['width'] - $winfo['width'];
            $posy = $dinfo['height'] - $winfo['height'];
        }

// 加水印
    imagecopymerge($dim,$wim, 0,0 ,0,0,$winfo['width'],$winfo['height'],$alpha);
    if (!$save) {
      $save = $dst;
      //unlink($dst);
    }

    $createfunc = 'image'.$dinfo['ext'];
    $createfunc($dim,$save);

    imagedestroy($dim);
    imagedestroy($wim);

    return true;
  }

  /*
    生成缩略图
  */
  public static function thumb($dst,$save=NULL,$width=200,$height=200){
    //首先判断图片存不存在
    $dinfo = self::imageInfo($dst);
        if($dinfo == false) {
            return false;
        }

    //计算缩放比例
    $calc = min($width/$dinfo['width'],$height/$dinfo['height']);

    //创建原始画布
    $dfunc = 'imagecreatefrom'.$dinfo['ext'];
    $dim = $dfunc($dst);

    //创建缩略图画布
    $tim = imagecreatetruecolor($width,$height);

    //创建白色 填充缩略图画布
    $white = imagecolorallocate($tim,255,255,255);

    //填充缩略画布
    imagefill($tim,0,0,$white);

    //复制并缩略
    $dwidth = (int)$dinfo['width']*$calc;
    $dheight = (int)$dinfo['height']*$calc;

    $paddingx = (int)($width - $dwidth) / 2;
    $paddingy = (int)($height - $dheight) / 2;


    imagecopyresampled($tim,$dim,$paddingx,$paddingy,0,0,$dwidth,$dheight,$dinfo['width'],$dinfo['height']);

    // 保存图片
    if(!$save) {
       $save = $dst;
       //unlink($dst);
    }
    $createfunc = 'image' . $dinfo['ext'];
    $createfunc($tim,$save);

    imagedestroy($dim);
    imagedestroy($tim);

    return true;

  }
}


print_r(ImageTool::imageInfo('./test.png'));
echo ImageTool::water('./1.png','./test.png','2.png')?"ok":"fail";
echo ImageTool::thumb('test.png','test1.png')?"ok":"fail";
echo ImageTool::thumb('test.png','test2.png',200,300)?"ok":"fail";
echo ImageTool::thumb('test.png','test3.png',300,200)?"ok":"fail";
 ?>
