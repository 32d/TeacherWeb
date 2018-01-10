<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>研究與專長</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }


        rowcontent {height: 1500px}

        /* Set gray background color and 100% height */
        sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #f1f1f1;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height: auto;}
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
                <li class="active"><a href="index.php">首頁</a></li>
                <li><a href="education.php">學經歷</a></li>
                <li><a href="subject.php">研究與專長</a></li>
                <li><a href="#">研究計畫</a></li>
                <li><a href="teach.php">教授課程</a></li>
                <li><a href="#">學生</a></li>
                <li><a href="#">著作目錄</a></li>
                <li><a href="#">常去網站</a></li>
                <li><a href="#">參考期刊</a></li>
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
        <div class="col-sm-9">
            <h4><font size="24">研究與專長</font></h4>
            <hr>
            <h2>Text Mining</h2>
            <a href="http://dns2.asia.edu.tw/~jdwang/corpus.htm">Corpus</a><br>
            <a href="http://dns2.asia.edu.tw/~jdwang/text_archaeology.htm">Text Archaeology</a>(文件考古學) (diachronic corpora)(historical corpora)<br>
            Pattern History<br>
            <a href="http://tm.asia.edu.tw/TM/Search_PubMed_Simple.php">PubMed</a><br>
            <a href="http://tm.asia.edu.tw/TM/Search_CNA_Simple.php">CNA</a><br>
            <a href="http://tm.asia.edu.tw/TM/Search_ROCPatent_Simple.php">The Patents in R.O.C</a><br>
            Term History Mining<br>
            Phrase History Mining<br>
            Event History Mining<br>
            <a href="http://dns2.asia.edu.tw/~jdwang/TextMiningResource.htm">Text Mining Resource</a><br>
            <a href="http://buzz.opview.com.tw/Home">OpView</a><br>
            <a href="http://www.geo.com.tw/about_geo.html">巨鷗科技股份有限公司</a><br>
            neologism(新詞; 新義)<br>
            (by <a href="http://www.analyticsvidhya.com/blog/author/tavish/">Tavish Srivastava</a>)<a href="http://www.analyticsvidhya.com/blog/2014/09/creating-dictionary-text-mining/?utm_source=Linkedinstatus&utm_medium=Social&utm_campaign=040914">Having the right dictionary is at the heart of any text mining analysis.</a><br>
            Biomedical literature mining<br>
            <a href="http://stemcell.iis.sinica.edu.tw/bioinfo/current_publications-4.html4">中研院</a></li><br>
            <a href="http://www.scitopics.com/Biological_Literature_Mining.html">Biological Literature Mining(Prof Wen-Lian Hsu)http://iasl.iis.sinica.edu.tw/BioNER_intro04.htm</a><br>
            <a href="http://en.wikipedia.org/wiki/Biomedical_text_mining">Wikipedia</a><br>
            <a href="http://blimp.cs.queensu.ca/#search">BLIMP</a><br>
            <a href="http://www.biomax.com/products/products.php">BioMax</a><br>
            <a href="http://www.biomax.com/products/biolt.php">BioLT</a><br>
            中文文件分類<br>
            中文資訊擷取<br>
            中文新聞<br>
            Related Texts Research Experts<br>
            free temporal corpora<br>

            <a href="">Web-based Text Mining<br>
            Natural language processing API: entity extraction, text categ, etc.</a><br>
            <a href=""></a>Thorsten Joachims<br>
            <a href=""></a>IN-SPIRE<br>

            <a href=""></a>FeatureLens<br>

            <a href=""></a>BasketLens<br>

            <a href=""></a>Patent iNSIGHT Pro (Blog)<br>
            <a href=""></a>曾元顯教授<br>
            <a href=""></a>Publications<br>
            <a href=""></a>Classified News<br>
            <a href=""></a>http://archive.ics.uci.edu/ml/datasets/Reuters-21578+Text+Categorization+Collection<br>
            <a href=""></a>http://www.nltk.org/  (includes modapte version of the Reuters News corpus)<br>
            <a href=""></a>DKPro Core is a collection of software components for natural language processing (NLP) based on the Apache UIMA framework<br>
            <a href=""></a>jARVEST:jARVEST (Java web harvesting library) is a simple web harvesting or web scraping framewor<br>
            Data Science<br>

            <a href=""></a>What is data science?(by Mike Loukides | @mikeloukides | Comments: 43 |  2 June 2010)<br>
            <a href=""></a>Data science democratizedWith new tools arriving, data science may soon be in the hands of non-programmers.(by Mac Slocum | @macslocum | Comments: 9 |  1 July 2010)<br>
            Class Structure Ambiguity<br>
            <a href=""></a>Claudia Perlich<br>
            <a href=""></a>HealthCare Intelligence<br>
            Social Network (社會網絡)<br>
            <a href=""></a>學習影片-社會網絡分析法實作2013版<br>
            <a href=""></a>Bibliometrics<br>
            Shape Query<br>
            Hierarchical Taxonomy Construction<br>
            Text<br>
            Biology<br>
            <a href=""></a>湯森林<br>
            Class Ambiguity Regions Detection<br>
            <a href=""></a>evaluating_the_fitness_of_class.htm<br>
            Hyper-Graph Partition Algorithm<br>
            Cluster Analyses<br>
            <a href=""></a>Survey of clustering-validation techniques<br>
            <a href=""></a>[跨領域][資訊][醫療] 成大標竿計畫：整合臨床、基因組及蛋白質體資料分析之智慧型疾病生物標記探勘平台<br>
            生物資訊<br>
            <a href=""></a>打破過去認知 垃圾DNA有望開啟醫學大躍進<br>
            <a href=""></a>Bioconductor<br>　
            <a href=""></a>Sequence Data Mining<br>
            Distinctive Patterns Mining: Class Marker<br>
            Sequence Indexing.<br>
            <a href=""></a>Sequence Classification<br>
            Virus Classification<br>
            <a href=""></a>Internal Ribosome Entry Site (IRES)<br>
            <a href=""></a>黃詩厚最愛病毒學<br>
            NCBI Genome Sequences<br>
            <a href=""></a>ftp://ftp.ncbi.nih.gov/genomes/<br>
            Genomic Signature<br>
            Nucleotide Frequency Variation<br>
            Phylogenic Analysis<br>
            Find genetic relationship between sequences/species.<br>
            <a href=""></a>MrBayes: Bayesian Inference of Phylogeny<br>
            <a href=""></a>BEAST<br>
            <a href=""></a>PAUP http://www.sinauer.com/detail.php?id=8060<br>
            <a href=""></a>The Genomes OnLine Database (GOLD, http://www.genomesonline.org/)<br>
            Other Resources<br>
            <a href=""></a>Java Text Mining API opens new browser window<br>

            <a href=""></a>www.complexityintelligence.com   -   Natural Language Processing API Tagging, Entity     Recognition in Java<br>

            <a href=""></a>Semantic Content Analyses opens new browser window<br>

            <a href=""></a>www.digicol.de   -   SE is an indexing system to categorises texts automatically<br>

            <a href=""></a>Extract web data quickly opens new browser window<br>

            <a href=""></a>www.mozenda.com/Mining+Text   -   Harvest anything from the Internet Looking for Mining Text?<br>

            <a href=""></a>http://corpus2.byu.edu/web/?c=web&q=21412274<br>

            <a href=""></a>OPUS is a growing collection of translated texts from the web<br>

            <a href=""></a>corpora, size, queries = better resources, more insight, more insight<br>

                        </div>



<footer class="container-fluid">
    <p>1</p>
</footer>

</body>
</html>