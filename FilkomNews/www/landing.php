<!DOCTYPE html> 
<html>
<head>
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">        
  <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">    
  <script src="js/jquery-1.11.1.min.js"></script>    
  <script src="js/jquery.mobile-1.4.5.min.js"></script>    
  
  <style type="text/css">
  .halaman_awal {
    /*background-color: #252739;*/
    font-family: century gothic;
  }
  </style>

</head>
<body>
  <!-- Start of first page -->
  <div data-role="page" id="page-one" class="halaman_awal" data-theme="b">
    <div data-role="header" data-position="fixed" style="background-color: #d30000;">
      <a href="#mypanel1" class="ui-btn-left ui-btn ui-icon-bars ui-btn-icon-notext ui-corner-all ui-alt-icon ui-nodisc-icon"></a>
      <a href="" class="ui-btn-right ui-btn ui-icon-search ui-btn-icon-notext ui-corner-all ui-alt-icon ui-nodisc-icon"></a>
      <!-- <h1 style="color: white;">Filkom</h1> -->
      <div style="text-align: center;"><img src="/FilkomNews/FilkomNews/www/filkom2.png" style="max-width: 32%; min-width: 32%;"></div>
    </div><!-- /header -->

    <div role="main" class="ui-content" id="beranda">      
      <!-- <h3 style="text-align: center;"> Headline News</h3> -->
      <img src="/FilkomNews/FilkomNews/www/awal.png" style="max-width: 100%; min-width: 100%">
      <!-- <div><h3 style="text-align: center;"> Berita</h3></div> -->
      <ul data-role ="listview" data-inset="true" class="ui-nodisc-icon">
        <li>
          <a href="">
            <div>
              <img src="/FilkomNews/FilkomNews/www/you tube.png" style="max-width: 108%; min-width: 108%">
            </div>                         
            <h2>Mahasiswi FILKOM Juara 2 Puteri Kampus Jawa Timur 2017</h2>            
            <div class="ui-grid-b">
              <div class="ui-block-a">
                <p class="ui-corner-all ui-shadow" style="background-color: grey; color: white; text-align: center;">14-12-2017</p>
              </div>
              <div class="ui-block-b">
                <p class="ui-corner-all ui-shadow" style="background-color: red; color: white; text-align: center;">10:20</p>
              </div>
              <div class="ui-block-c">
                <!-- <p class="ui-corner-all ui-shadow">10:20</p> -->
              </div>
            </div>
            <!-- <div style="text-align: right; margin-right: -25px;">
              <img src="/FilkomNews/FilkomNews/www/lace.png" style="max-width: 25px; min-width: 25px;">       
            </div> -->
          </a>
        </li>        
      </ul>
      
      <ul data-role ="listview" data-inset="true" class="ui-nodisc-icon">
        <li>
          <a href="">
            <div>
              <img src="/FilkomNews/FilkomNews/www/pemandangan.jpg" style="max-width: 108%; min-width: 108%">       
            </div>                         
            <h2>Mahasiswi FILKOM Juara 2 Puteri Kampus Jawa Timur 2017</h2>            
            <div class="ui-grid-b">
              <div class="ui-block-a">
                <p class="ui-corner-all ui-shadow" style="background-color: grey; color: white; text-align: center;">14-12-2017</p>
              </div>
              <div class="ui-block-b">
                <p class="ui-corner-all ui-shadow" style="background-color: red; color: white; text-align: center;">10:20</p>
              </div>
              <div class="ui-block-c">
                <!-- <p class="ui-corner-all ui-shadow">10:20</p> -->
              </div>
            </div>

          </a>
        </li>        
      </ul>
      
      <ul data-role ="listview" data-inset="true" class="ui-nodisc-icon">
        <li>
          <a href="">
            <div>
              <img src="/FilkomNews/FilkomNews/www/pemandangan.jpg" style="max-width: 108%; min-width: 108%">       
            </div>                         
            <h2>Mahasiswi FILKOM Juara 2 Puteri Kampus Jawa Timur 2017</h2>            
            <div class="ui-grid-b">
              <div class="ui-block-a">
                <p class="ui-corner-all ui-shadow" style="background-color: grey; color: white; text-align: center;">14-12-2017</p>
              </div>
              <div class="ui-block-b">
                <p class="ui-corner-all ui-shadow" style="background-color: red; color: white; text-align: center;">10:20</p>
              </div>
              <div class="ui-block-c">
                <!-- <p class="ui-corner-all ui-shadow">10:20</p> -->
              </div>
            </div>

          </a>
        </li>        
      </ul>
      
    </div><!-- /content -->
    
    <div data-role="panel" data-position-fixed="true" data-display="overlay" data-theme="a" id="mypanel1">
      <ul data-role="listview">
        <li data-icon="delete"><a href="#" data-rel="close">Filkom</a></li>
        <li><a href="#page-one">Foto Saya</a></li>
        <li><a href="#page-two">Biodata Saya</a></li>        
      </ul>
    </div><!-- /panel -->
  </div><!-- /page --> 

<!-- <?php echo"
<script type=\"text/javascript\">
   $(function(){
    \$panjang = 0;
    \$iterator = 0;

    $.ajax({
      type: \"POST\",
      url: \"ajax.php\",
      dataType:'json'
    }).done(function(data){     
      \$panjang = data.length;                     
      for (var i = 0; i < \$panjang; i++) {
        $(\"#beranda\").append(\"<h1>AS</h1>\");
      };
    });   
  });
</script>
"?>; -->

<script type="text/javascript">
  // $(function(){
    $panjang = 0;
    $iterator = 0;

    $.ajax({
      type: "POST",
      url: "ajax.php",
      dataType:'json'
    }).done(function(data){     
      $panjang = data.length;                     
      for (var i = 0; i < $panjang; i++) {
        // $("body").append("<img src=\"http://file.filkom.ub.ac.id/fileupload/assets/"+data[i].thumb_img+"\">");
        // $("body").append("<h1>"+data[i].post_title+"</h1>");
        // $time_modified = data[i].content_modified.split(" ");
        // $("body").append("<h4>"+$time_modified[0]+"</h4>");
        // $("body").append("<h4>"+$time_modified[1].substring(0,5)+"</h4>");
        // $("body").append(data[i].post_content);

        // $("#beranda").append("<ul data-role =\"listview\" data-inset=\"true\" class=\"ui-nodisc-icon\"><li><a href=\"\">"+data[i].post_title+"</li></ul>");

        $("#beranda").append("<ul data-role =\"listview\" data-inset=\"true\" class=\"ui-nodisc-icon ui-listview ui-listview-inset ui-corner-all ui-shadow\"><li class=\"ui-first-child ui-last-child\"><a href=\"\" class=\"ui-btn ui-btn-icon-right ui-icon-carat-r\"><div><img src=\"/FilkomNews/FilkomNews/www/you tube.png\" style=\"max-width: 108%; min-width: 108%\"><h2>"+data[i].post_title+"</h2><div class=\"ui-grid-b\"><div class=\"ui-block-a\"><p class=\"ui-corner-all ui-shadow\" style=\"background-color: grey; color: white; text-align: center;\">14-12-2017</p> </div> <div class=\"ui-block-b\"> <p class=\"ui-corner-all ui-shadow\" style=\"background-color: red; color: white; text-align: center;\">10:20</p> </div> <div class=\"ui-block-c\"></div></div></div>");
        $("#beranda").append("</a></li></ul>");
        


      //   <ul data-role ="listview" data-inset="true" class="ui-nodisc-icon">
      //   <li>
      //     <a href="">
      //       <div>
      //         <img src="/FilkomNews/FilkomNews/www/you tube.png" style="max-width: 108%; min-width: 108%">
      //       </div>                         
      //       <h2>Mahasiswi FILKOM Juara 2 Puteri Kampus Jawa Timur 2017</h2>            
      //       <div class="ui-grid-b">
      //         <div class="ui-block-a">
      //           <p class="ui-corner-all ui-shadow" style="background-color: grey; color: white; text-align: center;">14-12-2017</p>
      //         </div>
      //         <div class="ui-block-b">
      //           <p class="ui-corner-all ui-shadow" style="background-color: red; color: white; text-align: center;">10:20</p>
      //         </div>
      //         <div class="ui-block-c">
      
      //         </div>
      //       </div>
      //     </a>
      //   </li>        
      // </ul>

      };
    });   
  // });
</script>

</body>



<!-- $(\"#beranda\").append(\"<ul data-role =\"listview\" data-inset=\"true\" class=\"ui-nodisc-icon ui-listview ui-listview-inset ui-corner-all ui-shadow\"><li><a href=\"\"><div></div></a></li></ul>\");
        $(\"#beranda\").append(\"</a></li></ul>\"); -->

</html>
