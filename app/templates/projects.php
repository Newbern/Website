<div class="main-block">

  <!-- Back button -->
  <button class="btn" onClick="change('Back')">&#8592;</button>

  <!--Laptop Layout-->
  <div class="laptop">
    <!--Screen-->
    <div class="screen">
        <?php 
        $comp = json_decode($companys);
        foreach ($comp as $index => $company) {
            if (!empty($company->name)) {
              echo '<a id="'.$index.'" class="pages off" href="'.$company->url.'"><img src="'.$company->image.'" alt="'.$company->name.'"></a>';
            }
        }
        ?>
    </div>

    <!--Base-->
    <div class="base"></div>
  </div>

  

  <!--Next Button-->
  <button class="btn" onClick="change('Next')">&#8594;</button>
</div>
