
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
            <ul class="nav navbar-nav" >
                <li><a href="index.php">首頁</a></li>
                <li><a href="education.php">學經歷</a></li>
                <li><a href="subject.php">研究與專長</a></li>
                <li class="active"><a href="project.php">研究計畫</a></li>
                <li><a href="teach.php">教授課程</a></li>
                <li><a href="student.php">學生</a></li>
                <li><a href="book.php">著作目錄</a></li>
                <li><a href="website.php">常去網站</a></li>
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
        <p align="center"><font face="標楷體" size="12">研究計畫</font></p>
    </div>
</div>
<div class="container-fluid bg-3 text-center">
    <div class="row">


            <ul>

                <li><font size="5"  > 105年度科技部大專學生研究計畫</font></li>
                <li><font face="標楷體">計畫名稱:</font>基因體最大重複序列抽取─使用者介面與Spark計算平台建置</li>
                <li>學生:資訊工程系 王寬之</li>
                <li><font face="標楷體"><strong style="font-weight: 400">計畫編號:</strong></font>MOST 105-2815-C-468-078-E</li>
                <li><font face="標楷體">計畫執行起迄</font>: 2016.7.1~2017.2.28</li>
                <li><span style="margin-top: 0; margin-bottom: 0">擔任職務：指導教授</span></li>
                <li></li>
                <li></li>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體" size="5">亞洲大學102年度校內專題研究計畫(已結案)</font></p>
                </li>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫名稱:
                        </font>
                        <span style="font-size: 12.0pt; mso-ascii-font-family: &quot;Times New Roman&quot;; mso-hansi-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: black; mso-ansi-language: EN-US; mso-fareast-language: ZH-TW; mso-bidi-language: AR-SA; mso-no-proof: yes" class="style1">
      類別架構合適性研究</span><span lang="EN-US" style="font-size: 12.0pt; mso-fareast-font-family: 新細明體; color: black; mso-ansi-language: EN-US; mso-fareast-language: ZH-TW; mso-bidi-language: AR-SA; mso-no-proof: yes" class="style1">-</span><span style="font-size: 12.0pt; mso-ascii-font-family: &quot;Times New Roman&quot;; mso-hansi-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: black; mso-ansi-language: EN-US; mso-fareast-language: ZH-TW; mso-bidi-language: AR-SA; mso-no-proof: yes" class="style1">藉由病毒分類</span></p>
                </li>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">
                            <strong style="font-weight: 400">計畫編號: </strong></font>
                        <span lang="EN-US" style="font-size:12.0pt;font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:標楷體;color:black;mso-ansi-language:
EN-US;mso-fareast-language:ZH-TW;mso-bidi-language:AR-SA;mso-no-proof:yes">
      10</span><span style="font-size:12.0pt;font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:標楷體;color:black;mso-ansi-language:
EN-US;mso-fareast-language:ZH-TW;mso-bidi-language:AR-SA;mso-no-proof:yes">2</span><span lang="EN-US" style="font-size:12.0pt;font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:標楷體;color:black;mso-ansi-language:
EN-US;mso-fareast-language:ZH-TW;mso-bidi-language:AR-SA;mso-no-proof:yes">-asia-3</span><span style="font-size:12.0pt;font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:標楷體;color:black;mso-ansi-language:
EN-US;mso-fareast-language:ZH-TW;mso-bidi-language:AR-SA;mso-no-proof:yes">8</span></p>
                </li>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫執行起迄:
                            2014.2.01 ~ 2015.1.31</font></p>
                </li>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0"><font FACE="標楷體" LANG="ZH-TW">核定金額:
                            182,000 NT</font></p>
                </li>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0">擔任職務：主持人
                    </p>
                </li>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體" size="5">亞洲大學101年度校內專題研究計畫(已結案)</font></p>
                </li>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫名稱:
                        </font>
                        <span style="font-size:12.0pt;font-family:標楷體;
mso-ascii-font-family:&quot;Times New Roman&quot;;mso-hansi-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:EN-US;mso-fareast-language:
ZH-TW;mso-bidi-language:AR-SA;mso-no-proof:yes">評估病毒分類</span><span style="font-size:12.0pt;font-family:標楷體;
mso-ascii-font-family:&quot;Times New Roman&quot;;mso-hansi-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:EN-US;mso-fareast-language:
ZH-TW;mso-bidi-language:AR-SA;mso-no-proof:yes">架構</span><span style="font-size:12.0pt;font-family:標楷體;
mso-ascii-font-family:&quot;Times New Roman&quot;;mso-hansi-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:EN-US;mso-fareast-language:
ZH-TW;mso-bidi-language:AR-SA;mso-no-proof:yes">之合適性</span></p>
                </li>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">
                            <strong style="font-weight: 400">計畫編號: </strong></font>
                        <span lang="EN-US" style="font-size:12.0pt;font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:標楷體;color:black;mso-ansi-language:
EN-US;mso-fareast-language:ZH-TW;mso-bidi-language:AR-SA;mso-no-proof:yes">10</span><span style="font-size:12.0pt;font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:標楷體;color:black;mso-ansi-language:
EN-US;mso-fareast-language:ZH-TW;mso-bidi-language:AR-SA;mso-no-proof:yes">1</span><span lang="EN-US" style="font-size:12.0pt;font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:標楷體;color:black;mso-ansi-language:
EN-US;mso-fareast-language:ZH-TW;mso-bidi-language:AR-SA;mso-no-proof:yes">-asia-3</span><span style="font-size:12.0pt;font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:標楷體;color:black;mso-ansi-language:
EN-US;mso-fareast-language:ZH-TW;mso-bidi-language:AR-SA;mso-no-proof:yes">0</span></p>
                </li>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫執行起迄:
                            2013.2.01 ~ 2014.1.31</font></p>
                </li>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0"><font FACE="標楷體" LANG="ZH-TW">核定金額:
                            120,000 NT</font></p>
                </li>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0"> 擔任職務：主持人 </p>
                </li>
            </ul>
            <ul>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體" size="5">亞洲大學100年度校內專題研究計畫(已結案)</font></p>
                </li>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫名稱:
                        </font>
                        <span style="font-size:12.0pt;font-family:標楷體;
mso-ascii-font-family:&quot;Times New Roman&quot;;mso-hansi-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:EN-US;mso-fareast-language:
ZH-TW;mso-bidi-language:AR-SA;mso-no-proof:yes">評估病毒分類之架構合適性</span><span lang="EN-US" style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:標楷體;mso-ansi-language:EN-US;mso-fareast-language:ZH-TW;
mso-bidi-language:AR-SA;mso-no-proof:yes">-</span><span style="font-size:12.0pt;
font-family:標楷體;mso-ascii-font-family:&quot;Times New Roman&quot;;mso-hansi-font-family:
&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:
EN-US;mso-fareast-language:ZH-TW;mso-bidi-language:AR-SA;mso-no-proof:yes">藉由基因體序列</span></p>
                </li>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">
                            <strong style="font-weight: 400">計畫編號: </strong></font>
                        <span lang="EN-US" style="font-size:12.0pt;font-family:
&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:標楷體;color:black;mso-ansi-language:
EN-US;mso-fareast-language:ZH-TW;mso-bidi-language:AR-SA;mso-no-proof:yes">100-asia-32</span></p>
                </li>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫執行起迄:
                            2010.12.01 ~ 2012.11.30</font></p>
                </li>
                <li>核定金額:
                    136,800 NT</li>
                <li> 擔任職務：主持人</li>
                <li></li>
                <li><font face="標楷體" style="margin-top: 0; margin-bottom: 0" size="5">亞洲大學97年度校內專題研究計畫(已結案)</font></li>
                <li><font face="標楷體" style="margin-top: 0; margin-bottom: 0">計畫名稱:
                    </font><span style="font-size: 12.0pt; font-family: 標楷體">分類架構的研究<span lang="EN-US">-</span>藉由病毒分類法</span></li>
                <li><font face="標楷體" style="margin-top: 0; margin-bottom: 0">
                        <strong style="font-weight: 400">計畫編號: </strong>97-I-07</font></li>
                <li><font face="標楷體" style="margin-top: 0; margin-bottom: 0">計畫執行起迄:
                        2008.08.01 ~ 2009.07.31</font></li>
                <li>核定金額:
                    113,000 NT</li>
                <li> 擔任職務：主持人

                    <p style="margin-top: 0; margin-bottom: 0">　</p>
                </li>
                <li><font face="標楷體" style="margin-top: 0; margin-bottom: 0" size="5">國科會研究計畫(已結案)</font></li>
                <li><font face="標楷體" style="margin-top: 0; margin-bottom: 0">計畫名稱:
                        從不同物種間的基因體中，一個具可擴充性擷取代表樣式的方法 </font></li>
                <li><font face="標楷體" style="margin-top: 0; margin-bottom: 0"><strong style="font-weight: 400">計畫編號: </strong>93-2213-E-468-003-</font></li>
                <li><font face="標楷體" style="margin-top: 0; margin-bottom: 0">計畫執行起迄:
                        2004.08.01 ~ 2005.07.31</font></li>
                <li>核定金額:
                    366,200 NT					    </li>
                <li> 擔任職務：主持人

                    <p style="margin-top: 0; margin-bottom: 0">　</p>
                </li>
                <li><font face="標楷體" style="margin-top: 0; margin-bottom: 0"size="5">國科會研究計畫(已結案)</font></li>
                <li><font face="標楷體" style="margin-top: 0; margin-bottom: 0">計畫名稱:
                        中文新聞資訊擷取-事件的時間數列</font></li>
                <li><font face="標楷體" style="margin-top: 0; margin-bottom: 0"><strong style="font-weight: 400">計畫編號: </strong>92-2213-E-468-002-</font></li>
                <li><font face="標楷體" style="margin-top: 0; margin-bottom: 0">計畫執行起迄:
                        2003.08.01 至 2004.07.31</font> </li>
                <li><font FACE="標楷體" LANG="ZH-TW">核定金額: 327,300 NT</font> </li>
                <li>擔任職務：主持人</li>
            </ul>
            <hr>
            <ul>
                <li>
                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體" size="5">擔任職務：<font color="#0000FF">共同主持人</font></font><p style="margin-top: 0; margin-bottom: 0">　</p>
                    <ul>
                        <li>
                            <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">國科會研究計畫</font></p></li>
                        <li>
                            <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫主持人：陳士農</font></p>
                        </li>
                        <li>
                            <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫名稱:
                                    疾病相關基因探勘與預測</font></p></li>
                        <li>
                            <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">
                                    <strong style="font-weight: 400">計畫編號: </strong></font>NSC 96-2221-E-468-014</p></li>
                        <li>
                            <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫執行起迄:&nbsp;2007.08.01-2008.7.31</font></p></li>
                        <li>
                            <p style="margin-top: 0; margin-bottom: 0"><font FACE="標楷體" LANG="ZH-TW">
                                    核定金額: NT 455,000 NT</font></p></li>
                    </ul>
                </li>
            </ul>
            <p style="margin-top: 0; margin-bottom: 0"></p>
            <hr>
            <ul>

                <li>
                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體" size="5">擔任職務：<font color="#0000FF">協同主持人</font></font><p style="margin-top: 0; margin-bottom: 0">
                    </p><ul>

                        <li><font face="標楷體">計畫名稱:</font>以生醫大數據分析為基礎的精準癌症醫療研究(1/3)</li>
                        <li><font face="標楷體">計畫主持人：</font>蔡進發</li>
                        <li> <font face="標楷體"><strong style="font-weight: 400">計畫編號:</strong></font> MOST 105-2632-E-468-002 </li>
                        <li>執行期限： 105/08/01 ～ 106/07/31 </li>
                        <li><font FACE="標楷體" LANG="ZH-TW">核定金額:</font>4,500,000
                            <ul>
                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體"size="5">
                                            行政院衛生署中醫藥委員會中藥品質管制暨中醫政策研究類研究計畫(已結案)</font></p>
                                </li>
                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫主持人：鄧正賢</font></p>
                                </li>
                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫名稱:
                                            中藥材毒性之分類研究探討 </font></p>
                                </li>
                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">
                                            <strong style="font-weight: 400">計畫編號: </strong>CCMP-96-RD-033 (PG9608-0206)</font></p>
                                </li>
                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫執行起迄:
                                            2007.08.01-2007.12.31 </font></p>
                                </li>
                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0"><font FACE="標楷體" LANG="ZH-TW">
                                            核定金額:580,000 NT</font></p>
                                </li>
                            </ul>
                            <p style="margin-top: 0; margin-bottom: 0">　</p>
                            <ul>

                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0">
	        <font face="標楷體"size="5">農業生物技術國家型科技計畫(已結案)</font></p>
                                </li>
                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫主持人：</font><span style="font-size: 13.0pt; font-family: 標楷體; ">余淑美</span></p>
                                </li>
                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫名稱:
                                        </font><span style="font-size: 12.0pt; font-family: 標楷體; color: black">
	          水稻基因突變種原庫應用於生物科技之推廣委託計畫</span><font face="標楷體">
                                        </font></p>
                                </li>
                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">
                                            <strong style="font-weight: 400">計畫編號: </strong></font><b>
	          <span lang="EN-US" style="font-size: 12.0pt; font-family: Times New Roman; color: black">
              (</span></b><span lang="EN-US" style="font-size: 12.0pt; font-family: Times New Roman; color: black">96S/-0202<b>)</b></span></p>
                                </li>
                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫執行起迄: 2007</font></p>
                                </li>
                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0"><font FACE="標楷體" LANG="ZH-TW">
                                            核定金額:</font></p>
                                </li>
                            </ul>
                            <p style="margin-top: 0; margin-bottom: 0">　</p>
                            <ul>

                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0">
	        <font face="標楷體"size="5">行政院衛生署中醫藥委員會(已結案)</font></p>
                                </li>
                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫主持人：李明明</font></p>
                                </li>
                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫名稱:
                                            96-97年度中醫藥典籍專業服務計畫-中醫藥典籍查詢系統開發之研究</font></p>
                                </li>
                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">
                                            <strong style="font-weight: 400">計畫編號: </strong></font>
                                        <font face="標楷體" size="3"><span lang="EN-US" style="font-size: 12pt">
	          CCMP96-IP-2</span></font></p>
                                </li>
                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫執行起迄: 2007</font></p>
                                </li>
                                <li>
                                    <p style="margin-top: 0; margin-bottom: 0"><font FACE="標楷體" LANG="ZH-TW">
                                            核定金額: </font>650,000 <font FACE="標楷體" LANG="ZH-TW">
                                            NT</font></p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

            <blockquote>
                <ul>
                    <li>
                        <p style="margin-top: 0; margin-bottom: 0">
                            <font face="標楷體"size="5">行政院衛生署中醫藥委員會(已結案)</font></p>
                    </li>
                    <li>
                        <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫主持人：李明明</font></p>
                    </li>
                    <li>
                        <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫名稱:
                            </font>
                            <span style="font-size: 12.0pt; font-family: 標楷體">作用於免疫類之中藥材及方劑之古代典籍整合性網際網路資源建置研究</span><font face="標楷體">
                            </font></p></li>
                    <li>
                        <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">
                                <strong style="font-weight: 400">計畫編號: </strong><span lang="EN-US">
		CCMP96-IP-03</span></font><font face="新細明體"><span lang="EN-US"> </span>
                            </font></p></li>
                    <li>
                        <p style="margin-top: 0; margin-bottom: 0"><font face="標楷體">計畫執行起迄:
                                2005.01.02 ~ 2005.11.30</font></p></li>
                    <li>
                        <p style="margin-top: 0; margin-bottom: 0">
                            <font FACE="標楷體" LANG="ZH-TW">核定金額: </font>170,000 <font FACE="標楷體" LANG="ZH-TW">
                                NT</font></p></li>
                </ul>
            </blockquote>
            <p style="margin-top: 0; margin-bottom: 0"></p>
            <p style="margin-top: 0; margin-bottom: 0">　</p>
            <p style="margin-top: 0; margin-bottom: 0">　</p>

            　 </body>


</body>
</html>
