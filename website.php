
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Portfolio</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">首頁</a></li>
                <li ><a href="education.php">學經歷</a></li>
                <li><a href="subject.php">研究與專長</a></li>
                <li><a href="project.php">研究計畫</a></li>
                <li><a href="teach.php">教授課程</a></li>
                <li><a href="student.php">學生</a></li>
                <li><a href="book.php">著作目錄</a></li>
                <li  class="active"><a href="website.php">常去網站</a></li>
                <li><a href="Periodicals.php">參考期刊</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if ($_SESSION['username'] != null){
                    echo "<li><a href=\"logout.php\"><span class=\"glyphicon glyphicon-log-out\"></span> 登出</a></li>";
                }else{
                    echo "<li><a href=\"login.php\"><span class=\"glyphicon glyphicon-log-in\"></span> 登入</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<div class="jumbotron">
    <div class="container text-center">
    </div>
</div>
<div class="container-fluid bg-3 text-center">
    <h3>看</h3><br>

    <p class="style1" align="center">
        <a href="http://www.facebook.com/">Facebook</a></p>
    <p class="style1" align="center">&nbsp;</p>
    <p class="style1" align="center">
        Hadoop</p>
    <p class="style5" align="center">
        <a href="http://forum.hadoop.tw/">Taiwan Hadoop Forum</a></p>
    <p class="style5" align="center">
        <a href="https://www.facebook.com/groups/hadoop.tw/">
            https://www.facebook.com/groups/hadoop.tw/</a></p>
    <p class="style5" align="center">
        <a href="https://code.google.com/p/windoop/">https://code.google.com/p/windoop/</a></p>
    <p class="style1" align="center">
        Google</p>

    <a href="http://mail.google.com/">GMail</a></font><p>


        <A Href=>https://www.draw.io/">https://www.draw.io/</A><P>

        <A Href="https://www.ieee.org/publications_standards/publications/rights/reqperm.html">IEEE - Requesting Permission to Reuse IEEE Material</A><P>


    <p class="style1"><font face="標楷體">English Learning</font></p>
    <blockquote class="style4">
        <ul>
            <li>
                <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center"><font face="標楷體">
                        <a href="https://www.liveabc.com/site/Online_Store/member/ok3.asp">LiveABC</a></font></p>
            </li>
            <li>
                <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center"><a href="http://mws.ust.hk/mw/account/login.php">
                        <font face="標楷體">My
                            Words</font></a></p></li>
            <li>
                <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center"><a href="http://wordneighbors.ust.hk/">
                        <font face="標楷體">Word Neighbors</font></a></p>
            </li>
            <li>
                <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center"><a href="http://egg.ust.hk/cl3/index.html">
                        <font face="標楷體">EGG ( English
                            Grammar Guide)</font></a></p></li>
            <li>
                <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center"><a href="http://www.ted.com">
                        <font face="標楷體">TED (<strong>Technology,
                                Entertainment, Design</strong>)</font></a></p></li>
            <li>
                <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center"><a href="http://quod.lib.umich.edu/m/micase/">
                        <font face="標楷體">MICASE</font></a><font face="標楷體"> (</font><b><font color="#840052" face="標楷體">Michigan
                            Corpus of Academic Spoken English</font></b><font face="標楷體">)</font></p></li>
            <li>
                <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center"><a href="http://www.pbs.org/">
                        <font face="標楷體">PBS</font></a><font face="標楷體"> (<em>Public
                            Broadcasting Service</em>)</font></p>
            </li>
            <li>
                <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center"><a href="http://hk.dictionary.yahoo.com/"><font face="標楷體">Yahoo!字典</font></a></p></li><li><font face="標楷體"><a href="http://www.netspeak.org/">http://www.netspeak.org/</a><br></font></li>
            <li>
                <h3 class="r" style="margin: 0px; padding: 0px; font-size: medium; font-weight: normal; display: block; overflow: hidden; white-space: nowrap; color: rgb(34, 34, 34); font-family: arial,sans-serif; font-style: normal; font-variant: normal; letter-spacing: normal; text-align: center; text-indent: 0px; text-transform: none; word-spacing: 0px; background-color: rgb(255, 255, 255);">
                    <a onmousedown="return rwt(this,'','','','8','AFQjCNGQcEMWw1DKBpX4KV8WvFuRlSjOkg','fgVq3LRxYPXXVxV5asEs8w','0CFQQFjAH','','',event)" style="font-family: arial,sans-serif; color: rgb(102, 0, 153); cursor: pointer; text-decoration: none;" href="http://www.onlinedict.com/">
                        顏氏美語</a></h3>
                <h3 class="r" style="margin: 0px; padding: 0px; font-size: medium; font-weight: normal; display: block; overflow: hidden; white-space: nowrap; color: rgb(34, 34, 34); font-family: arial,sans-serif; font-style: normal; font-variant: normal; letter-spacing: normal; text-align: center; text-indent: 0px; text-transform: none; word-spacing: 0px; background-color: rgb(255, 255, 255);">
                    <a onmousedown="return rwt(this,'','','','5','AFQjCNG_hcJALDGYtHYDbJ6hhC5MpzsI9w','O9Ce1S-s2157RbM1j1MuDA','0CDwQFjAE','','',event)" style="font-family: arial,sans-serif; color: rgb(102, 0, 153); cursor: pointer; text-decoration: none;" href="http://dictionary.sina.com.tw/">
                        新浪字典</a></h3>
                <h3 class="r" style="margin: 0px; padding: 0px; font-size: medium; font-weight: normal; display: block; overflow: hidden; white-space: nowrap; color: rgb(34, 34, 34); font-family: arial,sans-serif; font-style: normal; font-variant: normal; letter-spacing: normal; text-align: center; text-indent: 0px; text-transform: none; word-spacing: 0px; background-color: rgb(255, 255, 255);">
                    <a onmousedown="return rwt(this,'','','','2','AFQjCNGMkxMgvQHKHwJ1vPX0VYrxRQ1SVQ','Gw6PJgquLvadOtPJ8zhqYg','0CCgQFjAB','','',event)" style="font-family: arial,sans-serif; color: rgb(102, 0, 153); cursor: pointer; text-decoration: none;" href="http://cdict.net/">
                        英漢字典(English-Chinese Dictionary</a></h3></li></ul>
        <h1><a href="https://fitbir-demo.cit.nih.gov/">Federal Interagency TBI Research (FITBIR) Informatics System</a></h1>
        <p><a href="https://www.draw.io/">https://www.draw.io/</a></p>
        <p><a href="http://www.citeulike.org/bibtex_options"><font face="標楷體">BibTeX Export</font></a></p>
    </blockquote>
    <p class="style5" align="center">
  <span style="color: rgb(1, 68, 111); font-family: verdana,arial,helvetica,sans-serif; font-size: 19px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: rgb(255, 255, 255); display: inline ! important; float: none;">
  <a href="http://www.citeulike.org/">cite</a></span><a href="http://www.citeulike.org/"><span style="font-family: verdana,arial,helvetica,sans-serif; font-size: 19px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: rgb(255, 255, 255); color: rgb(99, 122, 18);">u</span><span style="color: rgb(1, 68, 111); font-family: verdana,arial,helvetica,sans-serif; font-size: 19px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: rgb(255, 255, 255); display: inline ! important; float: none;">like</span></a></p>
    <p class="style1" align="center">&nbsp;
    </p>
    <p class="style1" align="center">
        <font face="標楷體"><a href="https://www.most.gov.tw/">科技部</a>&nbsp;<a href="project/evaluating_the_fitness_of_class.htm">Project</a></font></p>
    <p class="style1" align="center">　</p>
    <p class="style1" align="center"><font face="標楷體">
            <a href="http://www.asia.edu.tw/">亞洲大學</a> </font></p>
    <blockquote>
        <p align="center" class="style7"><font face="標楷體">
                <a href="http://cip.asia.edu.tw/login.php">校園入口網站</a></font></p>
    </blockquote>
    <ul class="style6">


        <div style="color: rgb(34, 34, 34); font-family: arial,sans-serif; font-size: 14.4px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255);">
            <span class="Apple-converted-space">&nbsp;</span>&nbsp;<a target="_blank" style="color: rgb(17, 85, 204);" href="https://sslvpn9.twaren.net/dana-na/auth/%28asia%29url_default/welcome.cgi">亞洲大學SSL
                VPN</a></div>
        <div style="color: rgb(34, 34, 34); font-family: arial,sans-serif; font-size: 14.4px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255);">
            <br>
        </div>
        <div style="color: rgb(34, 34, 34); font-family: arial,sans-serif; font-size: 14.4px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255);">
            &nbsp; &nbsp; &nbsp; &nbsp;<a target="_blank" style="color: rgb(17, 85, 204);" href="http://ic.asia.edu.tw/ezfiles/36/1036/img/19/SSL-VPN.pdf">VPN教學</a></div>
        <div style="color: rgb(34, 34, 34); font-family: arial,sans-serif; font-size: 14.4px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255);"></div>
        <div style="color: rgb(34, 34, 34); font-family: arial,sans-serif; font-size: 14.4px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255);">
            &nbsp; &nbsp; &nbsp; &nbsp;<a target="_blank" style="color: rgb(17, 85, 204);" href="http://software.asia.edu.tw/bin/home.php">亞洲大學校園授權軟體服務網</a></div>

        <li>


            <div>
                <div id="centrador"></div>
            </div>
            <div>
                <h1><a href="http://study.asia.edu.tw/">讀書會/學習社群Learning Groups</a></h1>
            </div>
            <p style="margin-top: 0pt; margin-bottom: 0pt;" align="left"><span style="color: rgb(34, 34, 34); font-family: 微軟正黑體,sans-serif; font-size: 18.6667px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: rgb(255, 255, 255); display: inline ! important; float: none;"><a href="http://web.asia.edu.tw/bin/home.php">亞大任意雲</a></span></p>
            <ul class="style6">
                <li>		</li>
            </ul>
        </li>
        <li>


            <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center">
                <a href="http://lib.asia.edu.tw/"><font face="標楷體">圖書館</font></a></p>


            <ul>


                <li>
                    <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center">
                        <a href="http://admin-apps.webofknowledge.com/JCR/JCR"><font face="標楷體">Journal Citation
                                Report </font> </a></p>
                </li>
                <li>
                    <p class="style19" align="center">
                        <a href="http://apps.webofknowledge.com/WOS_GeneralSearch_input.do?product=WOS&amp;search_mode=GeneralSearch&amp;SID=P2QX9RXw51MbMwuHz4L&amp;preferencesSaved=&amp;highlighted_tab=WOS">
                            cited number&nbsp;</a></p></li>


            </ul>


        </li>
        <li>
            <b><font style="font-size: 12pt;" color="#008080" face="Arial">
                    <a href="http://rc.asia.edu.tw/"><font face="標楷體">研究發展處</font></a></font></b>    </li>
        <blockquote>
            <p align="left" style="margin-top: 0pt; margin-bottom: 0pt;"><a href="http://webap.cmu.edu.tw/Resdev_NewNet/login.aspx ">學術研究管理系統</a></p>
        </blockquote>

        <li>
    <span style="color: rgb(0, 0, 0); font-family: verdana,arial,verdana; font-style: normal; font-variant: normal; font-weight: bold; letter-spacing: normal; line-height: 21px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; display: inline ! important; float: none; background-color: rgb(255, 255, 255);" class="style2">
    <a href="http://iic.asia.edu.tw/bin/home.php">亞洲大學產學營運處</a></span>  </li>
        <li>
            <a href="http://www.ccs.asia.edu.tw/">
                <font face="標楷體">資訊學院 </font></a>
            <font face="標楷體">&nbsp;&nbsp; </font></li>


        <ul>


            <li>
                <a href="http://csie.asia.edu.tw/">資工系nt></a>
            </li>
            <li>
                <a href="http://210.70.80.7/web1/">Taichung Traffic Big-Data</a>
            </li>
            <li>
                <a href="https://120.108.113.89:9443">CSIE V Center</a>
            </li>
        </ul>
        <li>


            <p style="margin-top: 0pt; margin-bottom: 0pt;" align="left">
                <b>
                    <font color="#008080" face="標楷體"><a href="http://ic.asia.edu.tw/">
                            <font face="標楷體">資訊發展</font></a></font><a href="http://ic.asia.edu.tw/index_cht.html"><font color="#008080" face="標楷體">處</font></a></b></p>
            <ul>
                <li>
                    <p style="margin-top: 0pt; margin-bottom: 0pt;" align="left">
                        <font face="標楷體"><a href="http://webmail.asia.edu.tw/">網路郵局</a></font></p></li>
                <li>
                    <p style="margin-top: 0pt; margin-bottom: 0pt;" align="left">
                        <a href="http://research.asia.edu.tw/"><font face="標楷體">學術研究管理系統</font></a></p>
                    <ul>
                        <li>
                            <p style="margin-top: 0pt; margin-bottom: 0pt;" align="left">
                                <a href="http://webap.cmu.edu.tw/resdev/login.asp">
                                    <span class="style24">中醫大 </span>
                                    <span style="color: rgb(0, 0, 0); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: rgb(255, 255, 255);" class="style24">
            學術研究管理系統</span></a>&nbsp;</p>
                        </li>
                    </ul>
                </li>
                <li>
                    <h1 style="margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</h1>
                </li>
                <li>
                    <p style="margin-top: 0pt; margin-bottom: 0pt;" align="left">
                        <font face="標楷體"><a href="http://nms.asia.edu.tw/">網路註冊</a></font></p>
                </li>
                <li>
                    <p style="margin-top: 0pt; margin-bottom: 0pt;" align="left">&nbsp;</p>
                </li>
                <li>
                    <p style="margin-top: 0pt; margin-bottom: 0pt;" align="left">
                        I534</p>
                    <ul>
                        <li>
                            <p style="margin-top: 0pt; margin-bottom: 0pt;" align="left">
                                <a href="https://docs.google.com/spreadsheet/ccc?key=0AhVRPff_NeoodGRrM25GYk5yaC14LVp3Q3VTTE82VXc#gid=0">
                                    HPServer</a></p>
                        </li>
                        <li>
                            <p style="margin-top: 0pt; margin-bottom: 0pt;" align="left">
                                <a target="_blank" style="color: rgb(17, 85, 204); font-family: arial,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255);" href="https://docs.google.com/spreadsheet/ccc?key=0Alq53jkyFAu3dFhsT1dhRkFrcERLYlhBTmh5ZFpLQUE&amp;usp=sharing">
                                    IP MAC TABLE</a></p>
                        </li>
                    </ul>
                </li>


            </ul>
        </li>
    </ul>
    <p class="style1"><a href="http://data.gov.tw/">政府資料開法平台</a></p>
    <ul>
        <li><a href="http://tisvcloud.freeway.gov.tw/">交通部臺灣區國道高速公路局「交通資料庫」</a>
            <ul>
                <li><a href="http://data.gov.tw/node/21165">國道計費門架座標及里程牌價表</a></li>
            </ul>
        </li>
    </ul>




    <div class="row">
        <div class="col-sm-3">

        </div>
    </div>
</div>
</body>
</html>
