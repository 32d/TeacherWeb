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
                <li><a href="index.php">首頁</a></li>
                <li><a href="education.php">學經歷</a></li>
                <li class="active"><a href="subject.php">研究與專長</a></li>
                <li><a href="project.php">研究計畫</a></li>
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
        <div class="col-sm-9">
            <h4><font size="24">研究與專長</font></h4>
            <hr>
            <li>

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

            <a href="http://www.alchemyapi.com/?ga=1023">Web-based Text Mining<br>
            Natural language processing API: entity extraction, text categ, etc.</a><br>
            <a href="http://www.cs.cornell.edu/People/tj/">Thorsten Joachims</a><br>
            <a href="http://in-spire.pnl.gov/">IN-SPIRE</a><br>

            <a href="http://www.cs.umd.edu/hcil/textvis/featurelens/">FeatureLens</a><br>

            <a href="http://www.cs.umd.edu/hcil/textvis/basketlens/">BasketLens</a><br>

            <a href="http://www.patentinsightpro.com/product.html">Patent iNSIGHT Pro (Blog)</a><br>
            <a href="http://web.ntnu.edu.tw/~samtseng/">曾元顯教授</a><br>
            <a href="http://web.ntnu.edu.tw/~samtseng/publications.htm">Publications</a><br>
            <a href=""></a>Classified News<br>
            <a href="http://archive.ics.uci.edu/ml/datasets/Reuters-21578+Text+Categorization+Collection">http://archive.ics.uci.edu/ml/datasets/Reuters-21578+Text+Categorization+Collection</a><br>
            <a href="http://www.nltk.org/">http://www.nltk.org/  (includes modapte version of the Reuters News corpus)</a><br>
            <a href="http://code.google.com/p/dkpro-core-asl/">DKPro Core is a collection of software components for natural language processing (NLP) based on the Apache UIMA framework</a><br>
            <a href="http://sing.ei.uvigo.es/jarvest/index.html">jARVEST:jARVEST (Java web harvesting library) is a simple web harvesting or web scraping framewor</a><br>
            Data Science<br>

            <a href="http://radar.oreilly.com/2010/06/what-is-data-science.html">What is data science?(by Mike Loukides | @mikeloukides | Comments: 43 |  2 June 2010)</a><br>
            <a href="http://radar.oreilly.com/2010/07/data-science-democratized.html">Data science democratizedWith new tools arriving, data science may soon be in the hands of non-programmers.(by Mac Slocum | @macslocum | Comments: 9 |  1 July 2010)</a><br>
            Class Structure Ambiguity<br>
            <a href="http://pages.stern.nyu.edu/~cperlich/">Claudia Perlich</a><br>
            <a href="http://www.hci-llc.com/">HealthCare Intelligence</a><br>
            Social Network (社會網絡)<br>
            <a href="http://www.tutortristar.com/Shopping/Video/Video-Social-Network-20130719.html">學習影片-社會網絡分析法實作2013版</a><br>
            <a href="http://en.wikipedia.org/wiki/Bibliometrics">Bibliometrics</a><br>
            Shape Query<br>
            Hierarchical Taxonomy Construction<br>
            Text<br>
            Biology<br>
            <a href="http://biodiv.sinica.edu.tw/research.php?pi=55">湯森林</a><br>
            Class Ambiguity Regions Detection<br>
            <a href="http://dns2.asia.edu.tw/~jdwang/project/evaluating_the_fitness_of_class.htm">evaluating_the_fitness_of_class.htm</a><br>
            Hyper-Graph Partition Algorithm<br>
            Cluster Analyses<br>
            <a href="http://www.biology-online.org/articles/computational_cluster_validation_post-genomic/survey_clustering-validation_techniques.html">Survey of clustering-validation techniques</a><br>
            <a href="http://stn.nsc.gov.tw/view_detail.asp?doc_uid=1000527027&kind_no=A06">[跨領域][資訊][醫療] 成大標竿計畫：整合臨床、基因組及蛋白質體資料分析之智慧型疾病生物標記探勘平台</a><br>
            生物資訊<br>
            <a href="http://stn.nsc.gov.tw/view_detail.asp?doc_uid=1010928008&kind_no=A04">打破過去認知 垃圾DNA有望開啟醫學大躍進</a><br>
            <a href="http://www.bioconductor.org/">Bioconductor</a><br>　
            <a href="http://dns2.asia.edu.tw/~jdwang/SequenceMining.htm">Sequence Data Mining</a><br>
            Distinctive Patterns Mining: Class Marker<br>
            Sequence Indexing.<br>
            <a href="http://210.70.82.122/TeachingCourses/MachineLearning/SequenceClassification/issues_of_sequence_classific.htm">Sequence Classification</a><br>
            Virus Classification<br>
            <a href="http://en.wikipedia.org/wiki/Internal_ribosome_entry_site">Internal Ribosome Entry Site (IRES)</a><br>
            <a href="http://stn.nsc.gov.tw/view_detail.asp?doc_uid=0990611039&kind_no=A07">黃詩厚最愛病毒學</a><br>
            NCBI Genome Sequences<br>
            <a href="ftp://ftp.ncbi.nih.gov/genomes/">ftp://ftp.ncbi.nih.gov/genomes/</a><br>
            Genomic Signature<br>
            Nucleotide Frequency Variation<br>
            Phylogenic Analysis<br>
            Find genetic relationship between sequences/species.<br>
            <a href="http://mrbayes.sourceforge.net/">MrBayes: Bayesian Inference of Phylogeny</a><br>
            <a href="http://beast.bio.ed.ac.uk/Main_Page">BEAST</a><br>
            <a href="http://www.sinauer.com/detail.php?id=8060">PAUP http://www.sinauer.com/detail.php?id=8060</a><br>
            <a href="http://www.genomesonline.org/">The Genomes OnLine Database (GOLD, http://www.genomesonline.org/)</a><br>
            Other Resources<br>


                        </div>



<footer class="container-fluid">
    <p>1</p>
</footer>

</body>
</html>
